<?php

class DniNieValidator
{
    const DNI_NIE_FORMAT = '/^[XYZ]?([0-9]{7,8})([A-Z])$/i';
    const LETTER_MAP = 'TRWAGMYFPDXBNJZSQVHLCKE';

    public function isValid($string)
    {
        if (strlen($string) != 9 ||
            preg_match(self::DNI_NIE_FORMAT, $string, $matches) !== 1) {
            return false;
        }

        list(, $number, $letter) = $matches;

        return strtoupper($letter) === $this->calculateLetter($number);
    }

    private function calculateLetter($number)
    {
        $map = self::LETTER_MAP;

        return $map[((int) $number) % 23];
    }
}