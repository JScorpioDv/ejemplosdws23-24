<?php

namespace videoclub;

const IVA= 0.21;
class Soporte
{
    public string $titulo;
    protected  int $numero;
    private float $precio;

    public function __construct(string $titulo, int $numero, float $precio=5)
    {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }


    public function getPrecio():float{
        return $this -> precio;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getPrecioConIva():float{
        return $this -> precio+($this-> precio * IVA);
    }

    public function muestraResumen(){
        echo "El soporte $this->numero con título $this->titulo tiene el precio: $this->precio";
    }

    public function __toString(): string
    {
        return "El soporte $this->numero con título $this->titulo tiene el precio: $this->precio";
    }


}