<?php

namespace Zhb\Eccairs\Model;

use JMS\Serializer\Annotation as Serializer;

class Occurrence
{
    private $name = 'Occurrence';

    private $attributes = ['entityId' => '24'];

    private $value;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
