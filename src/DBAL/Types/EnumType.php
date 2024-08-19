<?php
// src/DBAL/Types/EnumType.php
// Doctrine does not recognise enum type for MySQL and MariaDB
// This class permits Doctrine to support enum type

namespace App\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class EnumType extends Type
{
    const ENUM = 'enum';

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $values = array_map(function ($val) {
            return "'".$val."'";
        }, $fieldDeclaration['enumValues']);

        return "ENUM(".implode(", ", $values).")";
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return $value;
    }

    public function getName()
    {
        return self::ENUM;
    }
}
