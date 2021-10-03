<?php declare(strict_types=1);

namespace src;

use src\frases\Frases;
use src\molestia\Molestia;

/**
 * Undocumented class
 */
class PruebaBeckBdi
{
    /**
     * Undocumented variable
     *
     * @var Frases
     */
    private Frases $_frases;

    /**
     * Undocumented variable
     *
     * @var Molestia
     */
    private Molestia $_molestia;

    public function __construct(
        Frases $frases,
        Molestia $molestia
    ) {
        $this->_frases = $frases;
        $this->_molestia = $molestia;
    }

    /**
     * Undocumented function
     *
     * @return \src\frases\Frases
     */
    public function frase(): Frases
    {
        return $this->_frases;
    }

    /**
     * Undocumented function
     *
     * @return \src\molestia\Molestia
     */
    public function molestia(): Molestia
    {
        return $this->_molestia;
    }
}
