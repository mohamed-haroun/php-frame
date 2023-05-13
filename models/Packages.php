<?php
declare(strict_types=1);
namespace models;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;
use enums\WeightTypes;

#[Entity]
#[Table('packages')]
class Packages
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'number_of_packages')]
    private int $numberOfPackages;
    #[Column(name: 'package_type')]
    private string $packageType;
    #[Column(name: 'net_weight')]
    private float $netWeight;
    #[Column(name: 'gross_weight')]
    private float $grossWeight;
    #[Column(name: 'weight_type', enumType: WeightTypes::class)]
    private WeightTypes $weightType;
    #[Column(name: 'lot_number')]
    private string$lotNumber;
    #[Column(name: 'items_id')]
    private int $itemsId;

    #[ManyToOne(inversedBy: 'packages')]
    private Items $items;


    public function getId(): int
    {
        return $this->id;
    }

    public function getNumberOfPackages(): int
    {
        return $this->numberOfPackages;
    }

    public function setNumberOfPackages(int $numberOfPackages): Packages
    {
        $this->numberOfPackages = $numberOfPackages;
        return $this;
    }

    public function getPackageType(): string
    {
        return $this->packageType;
    }

    public function setPackageType(string $packageType): Packages
    {
        $this->packageType = $packageType;
        return $this;
    }

    public function getNetWeight(): float
    {
        return $this->netWeight;
    }

    public function setNetWeight(float $netWeight): Packages
    {
        $this->netWeight = $netWeight;
        return $this;
    }

    public function getGrossWeight(): float
    {
        return $this->grossWeight;
    }

    public function setGrossWeight(float $grossWeight): Packages
    {
        $this->grossWeight = $grossWeight;
        return $this;
    }

    public function getWeightType(): WeightTypes
    {
        return $this->weightType;
    }

    public function setWeightType(WeightTypes $weightType): Packages
    {
        $this->weightType = $weightType;
        return $this;
    }

    public function getLotNumber(): string
    {
        return $this->lotNumber;
    }

    public function setLotNumber(string $lotNumber): Packages
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    public function getItemsId(): int
    {
        return $this->itemsId;
    }

    public function setItemsId(int $itemsId): Packages
    {
        $this->itemsId = $itemsId;
        return $this;
    }


    public function getItems(): Items
    {
        return $this->items;
    }

    public function setItems(Items $items): Packages
    {
        $this->items = $items;
        return $this;
    }
}