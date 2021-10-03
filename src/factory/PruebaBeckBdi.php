<?php declare(strict_types=1);
namespace src\factory;

use src\Factory;
use src\FactoryClassInterface;
use src\molestia\Molestia;
use src\molestia\ValoresMolestia;
use src\PruebaBeckBdi as SrcPruebaBeckBdi;

class PruebaBeckBdi implements FactoryClassInterface
{
    public function crear(array $array): SrcPruebaBeckBdi
    {
        $factory = new Factory();

        $frases = $factory->crear('src\factory\Frases', $array);

        $molestia = new Molestia($frases, new ValoresMolestia());

        return new SrcPruebaBeckBdi($frases, $molestia);
    }
}
