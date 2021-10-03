<?php declare(strict_types=1);

namespace src\molestia;

use src\frases\Frases;
use src\molestia\ValoresMolestia;

class Molestia
{
    private Frases $_frases;
    private ValoresMolestia $_valores;

    public function __construct(Frases $frases, ValoresMolestia $valoresMolestia)
    {
        $this->_frases = $frases;
        $this->_valores = $valoresMolestia;
    }

    public function numero(): string
    {
        $valor = $this->_frases->frase1()->valorNumero() +
        $this->_frases->frase2()->valorNumero() +
        $this->_frases->frase3()->valorNumero() +
        $this->_frases->frase4()->valorNumero() +
        $this->_frases->frase5()->valorNumero() +
        $this->_frases->frase6()->valorNumero() +
        $this->_frases->frase7()->valorNumero() +
        $this->_frases->frase8()->valorNumero() +
        $this->_frases->frase9()->valorNumero() +
        $this->_frases->frase10()->valorNumero() +
        $this->_frases->frase11()->valorNumero() +
        $this->_frases->frase12()->valorNumero() +
        $this->_frases->frase13()->valorNumero() +
        $this->_frases->frase14()->valorNumero() +
        $this->_frases->frase15()->valorNumero() +
        $this->_frases->frase16()->valorNumero() +
        $this->_frases->frase17()->valorNumero() +
        $this->_frases->frase18()->valorNumero() +
        $this->_frases->frase19()->valorNumero() +
        $this->_frases->frase20()->valorNumero() +
        $this->_frases->frase21()->valorNumero();

        return (string) $valor;
    }

    public function texto(): string
    {
        $molestia = '';

        foreach ($this->_valores->valores as $key => $value) {
            $val = explode('-', $key);
            
            if ($this->numero() >= $val[0] && $this->numero() <= $val[1]) {
                $molestia = $value;
            }
        }

        return $molestia;
    }
}
