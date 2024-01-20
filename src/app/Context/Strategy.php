<?php

namespace App\Context;

abstract class Strategy implements StrategyInterface
{
    private $fileData;

    abstract protected function formatProperty($name, $value);
    public function setfileName()
    {
        $strategyName = class_basename(get_class($this));
        return $strategyName . '_' . date('Y-m-d') . '.txt';
    }

    public function ObjectData($object)
    {
        $formattedObject = '';

        foreach ($object as $name => $value) {
            $formattedObject = $formattedObject . $this->formatProperty($name, $value);
        }
        $formattedObject = $formattedObject . "_______" . "<br>" ;

        $this->fileData = $this->fileData . $formattedObject;
        return $this;
    }

    public function formatResult()
    {
        return [
            'name' => $this->setFileName(),
            'text' => $this->fileData];
    }
}
