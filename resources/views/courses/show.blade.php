@extends('layouts.template')

@section('title', 'Curso ' . $course)

@section('content')
    <h1>Bienvenido al curso {{$course}} </h1>
@endsection
