<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libreria;

class libreriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return libreria::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $libreria = new libreria();
        $libreria -> Nombre = $request ->input('CDMX - Librería Mauricio Achar');
        $libreria -> Nombre = $request ->input('CDMX - Coyoacán');
        $libreria -> Nombre = $request ->input('CDMX - Paseo Acoxpa');
        $libreria -> Nombre = $request ->input('CDMX - Bellas Artes');
        $libreria -> Nombre = $request ->input('CDMX (Terminal 2)');
        $libreria -> Nombre = $request ->input('CDMX - Lomas');
        $libreria -> Nombre = $request ->input('CDMX - Polanco');
        $libreria -> Nombre = $request ->input('CDMX - Gran Patio Santa Fe');
        $libreria -> Nombre = $request ->input('Edo de Mex - Satélite');
        $libreria -> Nombre = $request ->input('CDMX - El Rosario Town Center');
        $libreria -> Nombre = $request ->input('Metepec - Plaza Izar');
        $libreria -> Nombre = $request ->input('CDMX - Universidad Siete Seis Siete');

        $libreria -> Direccion = $request ->input('Miguel Ángel de Quevedo #121
        Col. Guadalupe Chimalistac
        Coyoacan, Ciudad de México., Ciudad de México
        México
        C.P.01050');
        $libreria -> Direccion = $request ->input('Felipe Carrillo Puerto #6
        Col. Coyoacán
        Coyoacán, Ciudad de México., Ciudad de México
        México
        C.P.04000');
        $libreria -> Direccion = $request ->input('Av. Acoxpa #430,
        Col. ExHacienda de Coapa, Centro Comercial Paseo Acoxpa
        Acoxpa, Ciudad de México., Ciudad de México
        México
        C.P.14340');
        $libreria -> Direccion = $request ->input('Av. Juárez #4, Col. Centro
        Centro, Ciudad de México, Ciudad de México
        México
        C.P.06050');
        $libreria -> Direccion = $request ->input('Av. Aviación Hangares s/n #Locales Pasues 18 y 19, Zona Federal
        Aeropuerto Internacional Cd.México, Terminal 2
        México, Ciudad de México, Ciudad de México
        México
        C.P.15620');
        $libreria -> Direccion = $request ->input('Av. de las Palmas #840,
        Col. Lomas de Chapultepec
        Lomas de Chapultepec, Ciudad de México, Ciudad de México
        México
        C.P.11000');
        $libreria -> Direccion = $request ->input('Av. Presidente Masaryk #353
        Col. Polanco
        Polanco, Ciudad de México, Ciudad de México
        México
        C.P.11560');
        $libreria -> Direccion = $request ->input('Centro Comercial Gran Patio Santa Fe, local SC-18, Avenida prolongación paseo de la reforma #400
        Col. Santa Fe Peña Blanca, Del. Álvaro Obregón
        Santa Fe, Ciudad de México, Ciudad de México
        México
        C.P.01210');
        $libreria -> Direccion = $request ->input('Circuito Médicos #5,
        Ciudad Satélite
        Satélite, Estado de México
        México
        C.P.53100');
        $libreria -> Direccion = $request ->input('El Rosario 1025, Centro Comercial Town Center. #Local X-5.
        Azcapotzalco, Ciudad de México, Ciudad de México
        México
        C.P.02430');
        $libreria -> Direccion = $request ->input('Leona Vicario #936 Poniente, La Purísima,
        Plaza Izar, locales 10 y 15 , La Purisima, México
        Metepec, Estado de México
        México
        C.P.52156');
        $libreria -> Direccion = $request ->input('Av. Universidad #767, Col.Del Valle , Coyoacan, Ciudad de México.
        Coyoacan, Ciudad de México, Ciudad de México
        México
        C.P.03100');

        $libreria -> Horario = $request ->input('Lunes a domingo de 9:00 a 22:00 h');
        $libreria -> Horario = $request ->input('Lunes a domingo 10:00 a 21:00 h');
        $libreria -> Horario = $request ->input('Lunes a domingo 10:00 a 21:00 h');
        $libreria -> Horario = $request ->input('Lunes a domingo 9:00 a 21:00 h');
        $libreria -> Horario = $request ->input('Lunes a domingo 7:00 a 21:00 h');
        $libreria -> Horario = $request ->input('Lunes a domingo 9:00 a 21:00 h');
        $libreria -> Horario = $request ->input('Lunes a domingo 9:00 a 21:00 h');
        $libreria -> Horario = $request ->input('Lunes a domingo 11:00 a 21:00 h');
        $libreria -> Horario = $request ->input('Lunes a domingo 10:00 a 21:00 h');
        $libreria -> Horario = $request ->input('Lunes a domingo 11:00 a 21:00 h');
        $libreria -> Horario = $request ->input('Lunes a domingo 10:00 a 21:00 h');
        $libreria -> Horario = $request ->input('Lunes a domingo 10:00 a 21:00 h');

        $libreria -> Amenidades = $request ->input('Estacionamiento, Foro de Eventos, Cafetería, Internet, Acceso a discapacitados,Valet Parkin');
        $libreria -> Amenidades = $request ->input('Ninguna');
        $libreria -> Amenidades = $request ->input('Estacionamiento');
        $libreria -> Amenidades = $request ->input('Internet');
        $libreria -> Amenidades = $request ->input('Ninguna');
        $libreria -> Amenidades = $request ->input('Estacionamiento, Ticketmaster');
        $libreria -> Amenidades = $request ->input('Estacionamiento,Acceso a discapacitado, Ticketmaster');
        $libreria -> Amenidades = $request ->input('Estacionamiento');
        $libreria -> Amenidades = $request ->input('Estacionamiento, Internet, Valet Parking');
        $libreria -> Amenidades = $request ->input('Estacionamiento');
        $libreria -> Amenidades = $request ->input('Estacionamiento, Internet');
        $libreria -> Amenidades = $request ->input('Estacionamiento, Acceso a discapacitados, Ticketma');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
