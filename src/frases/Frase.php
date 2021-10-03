<?php declare(strict_types=1);

namespace src\frases;

use Exception;
use src\interfaces\FraseInterface;

class Frase implements FraseInterface
{
    private FrasesValidas $_frasesValidas;

    private string $_fraseNumero;

    private string $_valorNumero;

    private string $_valorTexto;

    public function __construct(string $frase, string $valor, FrasesValidas $frasesValidas)
    {
        $this->_frasesValidas = $frasesValidas;
        $this->_fraseNumero = $this->setFrase($frase);
        $this->_valorNumero = $this->setValor($valor);
    }

    public function fraseNumero(): string
    {
        return $this->_fraseNumero;
    }

    public function valorTexto(): string
    {
        return $this->_valorTexto;
    }

    public function valorNumero(): string
    {
        return $this->_valorNumero;
    }

    private function setFrase(string $frase): string
    {
        if (!array_key_exists($frase, $this->_frasesValidas->frases)) {
            throw new Exception("Error la frase no exise");
        }

        return $frase;
    }

    private function setValor(string $valor): string
    {
        if (array_key_exists($valor, $this->_frasesValidas->frases[$this->_fraseNumero])) {
            $this->_valorTexto = $this->_frasesValidas->frases[$this->_fraseNumero][$valor];
            return $valor;
        }

        if (in_array($valor, $this->_frasesValidas->frases[$this->_fraseNumero])) {
            $this->_valorTexto = $valor;
            return (string) array_search($valor, $this->_frasesValidas->frases[$this->_fraseNumero]);
        }

        throw new Exception("Error en el valor de la frase");
    }
}
