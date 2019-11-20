@extends('layouts.app')

@section('title', 'UD5. ORM Eloquent')

@section('content')

1. ¿Qué deberías realizar para fusionar esta rama con la rama master? Indica los comandos necesarios para ello.

	nos tendriamos que situar en la rama master con "git checkout master" y ahi realizar "git merge tarea1" para que nos realice el merge del contenido de la branch tarea1.

2.Indica en que consiste el modelo vista-controlador. Describe brevemente cada uno de los componentes que lo forman.

	El modelo vista controlador es un metodo de programacion en el cual la comunicacion entre el servidor y el cliente de la aplicacion se realiza mediante los componentes "Modelo", "Controlador" y "vistas".

	- Modelo: El modelo se encarga de recoger los datos del servidor y se los suministra al controlador.
	- Controlador: El controlador se encarga de llamar al modelo para solicitar datos del servidor y suministrarlos a las vistas o realizar cambios a los mismo.
	- Vistas: Es la zona del cliente en el cual se listan los datos suministrados por el controlador o se hacen llamadas a los controladores para solicitar datos nuevos o cambios a los datos ya almacenados.


@endsection