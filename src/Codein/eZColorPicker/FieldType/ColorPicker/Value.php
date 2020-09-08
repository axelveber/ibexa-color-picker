<?php


namespace Codein\eZColorPicker\FieldType\ColorPicker;

use eZ\Publish\SPI\FieldType\Value as ValueInterface;

final class Value implements ValueInterface
{
    public $RGBa;
    public $RGB;
    public $HEX;
    public $HEXa;
    public $HSA;

    public function __toString()
    {
        return (string)$this->RGBa;
    }
}