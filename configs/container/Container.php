<?php
declare(strict_types=1);
namespace configs\container;
use Exceptions\ContainerException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;
use ReflectionClass;
use ReflectionException;
use ReflectionNamedType;
use ReflectionParameter;
use ReflectionUnionType;

class Container implements ContainerInterface
{

    private array $entries = [];

    /**
     * @throws NotFoundExceptionInterface
     * @throws ReflectionException
     * @throws ContainerExceptionInterface
     * @throws ContainerException
     */
    public function get(string $id)
    {
        if (! $this->has($id)) {
            return $this->resolve($id);
        }

        return $this->entries[$id];
    }

    public function has(string $id): bool
    {
        return isset($this->entries[$id]);
    }

    public function set(string $id, mixed $callable):void
    {
        $this->entries[$id] = $callable;
    }

    /**
     * @throws NotFoundExceptionInterface
     * @throws ReflectionException
     * @throws ContainerExceptionInterface
     * @throws ContainerException
     */
    private function resolve(string $id)
    {
        // Get the class from Reflection class
        $class = new ReflectionClass($id);

        if (!$class->isInstantiable()) {
            throw new ContainerException('Class "' . $id . '" is not instantiable ');
        }

        // Check the class constructor
        $constructor = $class->getConstructor();

        if (! $constructor) {
            return new $id();
        }

        // if class constructor has parameters
        $params = $constructor->getParameters();
        if (! $params) {
            return new $id;
        }

        // Inspect the dependencies

        $dependencies = array_map(
            function (ReflectionParameter $parameter) use($id) {
                $name = $parameter->getName();
                $type = $parameter->getType();

                // Checks if the arguments of a constructor has type
                if (! $type) {
                    throw new ContainerException(
                        'Failed to resolve class "' . $id . '" because param "' . $name . '" is missing a type hint'
                    );
                }

                // Checks if the constructor arguments of a primitive type
                if ($type instanceof ReflectionUnionType) {
                    throw new ContainerException(
                        'Failed to resolve class "' . $id . '" because of union for param "' . $name . '"'
                    );
                }

                // If the constructor arguments has a named types, create a class of that type.
                if ($type instanceof ReflectionNamedType && ! $type->isBuiltin()) {
                    return $this->get($type->getName());
                }

                throw new ContainerException(
                    'Failed to resolve class "' . $id . '" because invalid param "' . $name . '"'
                );
            }
        , $params);

        return $class->newInstanceArgs($dependencies);
    }
}