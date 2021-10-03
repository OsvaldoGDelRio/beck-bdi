<?php declare(strict_types=1);

namespace src\interfaces;

interface FraseInterface
{
    public function fraseNumero(): string;
    public function valorTexto(): string;
    public function valorNumero(): string;
}
