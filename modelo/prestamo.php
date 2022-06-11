<?php

require_once 'modelo/provincia.php';
require_once 'modelo/direccion.php';
require_once 'modelo/datosPersona.php';
require_once 'modelo/lineaPrestamo.php';

class Prestamo
{
    public $Id;
    public $LineaPrestamo;
    public $Titular;
    public $FechaAlta;
    public $CantidadCuotas;
    public $MontoCapital;

    public function MostrarDatos()
    {
        echo 'Los datos del Prestamos son : ' . '<br>';
        echo 'ID : ' . $this->Id . '<br>';
        echo 'Linea Prestamo ID : ' . $this->LineaPrestamo->Id . '<br>';
        echo 'Linea Prestamo Descripcion : ' . $this->LineaPrestamo->Descripcion . '<br>';
        echo 'Linea Prestamo Tasa Efectiva Mensual : ' . $this->LineaPrestamo->TasaEfectivaMensual . '<br>';
        echo 'Los Datos del Titular son : ' . '<br>';
        echo 'Titular ID : ' . $this->Titular->Id . '<br>';
        echo 'Titular Nombre : ' . $this->Titular->Nombre . '<br>';
        echo 'Titular Apellido : ' . $this->Titular->Apellido . '<br>';
        echo 'Titular Documento : ' . $this->Titular->Documento . '<br>';
        echo 'Direccion ID : ' . $this->Titular->Direccion->Id . '<br>';
        echo 'Titular Direccion : ' . $this->Titular->Direccion->Calle . ' ' . $this->Titular->Direccion->Numero . '<br>';
        echo 'Localidad : ' . $this->Titular->Direccion->Localidad . '<br>';
        echo 'Provincia ID : ' . $this->Titular->Direccion->Provincia->Id . '<br>';
        echo 'Provincia  : ' . $this->Titular->Direccion->Provincia->Descripcion . '<br>';
        echo 'Fecha de ALTA : ' . $this->FechaAlta . '<br>';
        echo 'Cantidad de Cuotas : ' . $this->CantidadCuotas . '<br>';
        echo 'Monto Capital : ' . $this->MontoCapital . '<br>';
    }
}
