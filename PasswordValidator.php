
<?php

class PasswordValidator
{
    private const LONGITUD_MINIMA = 8;
    private const CARACTERES_ESPECIALES = [',', '.', ';', '_', '-'];

    public function isValid(string $password): bool {
        if ($this->tieneLongitudMinima($password) && $this->tieneAlMenosAlgunCaracterEspecial($password)) {
            return true;
        } else {
            return false;
        }
    }

    private function tieneLongitudMinima($password): bool
    {
        $longitud = strlen($password);

        if ($longitud < self::LONGITUD_MINIMA) {
            return false;
        } else {
            return true;
        }
    }

    private function tieneAlMenosAlgunCaracterEspecial($password): bool
    {
        foreach (self::CARACTERES_ESPECIALES as $caracter) {
            if (strpos($password, $caracter) !== false) {
                return true;
            }
        }

        return false;
    }
}