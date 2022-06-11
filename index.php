<?php
require_once 'modelo/datosPersona.php';
require_once 'modelo/direccion.php';
require_once 'modelo/lineaPrestamo.php';
require_once 'modelo/prestamo.php';
require_once 'modelo/provincia.php';




$prov= new Provincia;
$prov->Id = 33;
$prov->Descripcion = 'Santa Fe';

$dire = new Direccion;
$dire->Id = 44;
$dire->Calle = 'Corrientes';
$dire->Numero = 356;
$dire->Localidad = 'Rosario';
$dire->Provincia = $prov;

$dp = new DatosPersona;
$dp->Id = 55 ;
$dp->Nombre = 'Agustin';
$dp->Apellido = 'Vargas';
$dp->Documento = '36734474';
$dp->Direccion = $dire ;

$lp = new LineaPrestamo;
$lp->Id = 99;
$lp->Descripcion = 'Personal Sola Firma';
$lp->TasaEfectivaMensual = '15%' ;

$prest = new Prestamo;
$prest->Id = 11;
$prest->LineaPrestamo = $lp ;
$prest->Titular = $dp;
$prest->FechaAlta = '10/06/2021';
$prest->CantidadCuotas = '24';
$prest->MontoCapital = '$10.000';

$prest->MostrarDatos();
