<?php declare(strict_types=1);

namespace src\factory;

use src\FactoryClassInterface;
use src\frases\Frase;
use src\frases\Frases as FrasesFrases;
use src\frases\FrasesValidas;

class Frases implements FactoryClassInterface
{
    public function crear(array $array): FrasesFrases
    {
        $frasesValidas = new FrasesValidas();

        $frase1 = new Frase('1', $array['frase1'], $frasesValidas);
        $frase2 = new Frase('2', $array['frase2'], $frasesValidas);
        $frase3 = new Frase('3', $array['frase3'], $frasesValidas);
        $frase4 = new Frase('4', $array['frase4'], $frasesValidas);
        $frase5 = new Frase('5', $array['frase5'], $frasesValidas);
        $frase6 = new Frase('6', $array['frase6'], $frasesValidas);
        $frase7 = new Frase('7', $array['frase7'], $frasesValidas);
        $frase8 = new Frase('8', $array['frase8'], $frasesValidas);
        $frase9 = new Frase('9', $array['frase9'], $frasesValidas);
        $frase10 = new Frase('10', $array['frase10'], $frasesValidas);
        $frase11 = new Frase('11', $array['frase11'], $frasesValidas);
        $frase12 = new Frase('12', $array['frase12'], $frasesValidas);
        $frase13 = new Frase('13', $array['frase13'], $frasesValidas);
        $frase14 = new Frase('14', $array['frase14'], $frasesValidas);
        $frase15 = new Frase('15', $array['frase15'], $frasesValidas);
        $frase16 = new Frase('16', $array['frase16'], $frasesValidas);
        $frase17 = new Frase('17', $array['frase17'], $frasesValidas);
        $frase18 = new Frase('18', $array['frase18'], $frasesValidas);
        $frase19 = new Frase('19', $array['frase19'], $frasesValidas);
        $frase20 = new Frase('20', $array['frase20'], $frasesValidas);
        $frase21 = new Frase('21', $array['frase21'], $frasesValidas);

        return new FrasesFrases($frase1, $frase2, $frase3, $frase4, $frase5, $frase6, $frase7, $frase8, $frase9, $frase10, $frase11, $frase12, $frase13, $frase14, $frase15, $frase16, $frase17, $frase18, $frase19,$frase20,$frase21);
    }
}
