<?php

namespace ASI\SomeAPI\Model\APIProcess\Validators;

class ValidatorFactory
{
    private $namespace_validator = 'ASI\SomeAPI\Model\APIProcess\Validators\\';

    public function __construct()
    {
    }

    public function create($validator_name)
    {
        $validator_class_name = $this->namespace_validator . $validator_name;
        $validator            = new $validator_class_name();

        if (!($validator instanceof ValidatorInterface)) {
            throw new \Exception("Invalid type validator!");
        }

        return $validator;
    }
}
