<?php

namespace models;

use enums\Rules;

abstract class Model
{
    public array $errors;
    public function loadData($data):void
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    abstract public function rules(): array;

    public function validateData(): bool
    {
        foreach ($this->rules() as $attribute => $rules) {

            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                $ruleName = $rule;
                if (is_array($ruleName)) {
                    $ruleName = $rule[0];
                }

                // Filling errors array if any
                if ($ruleName === Rules::REQUIRED && !$value) {
                    $this->addError($attribute, Rules::REQUIRED);
                }
                if ($ruleName === Rules::EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->addError($attribute, Rules::EMAIL);
                }
                if ($ruleName === Rules::MIN && strlen($value) < $rule['min']) {
                    $this->addError($attribute, Rules::MIN, $rule);
                }
                if ($ruleName === Rules::MAX && strlen($value) > $rule['max']) {
                    $this->addError($attribute, Rules::MAX, $rule);
                }
                if ($ruleName === Rules::MATCH && $value !== $this->{$rule['match']}) {
                    $this->addError($attribute, Rules::MATCH, $rule);
                }
                if ($ruleName === Rules::UNIQUE) {
                    if ($this->isExist($this->{$attribute})) {
                        $this->addError($attribute, Rules::UNIQUE, $rule);
                    }
                }
            }
        }
        return empty($this->errors);
    }

    public function addError(string $attribute, Rules $error, array $params=[]): void
    {
        $message = $error->getMessage();
        foreach ($params as  $key => $value) {
            if (is_string($key)) {
                $message = str_replace("{{$key}}", $value, $message);
            }
        }

        $this->errors[$attribute][] = $message;
    }

}