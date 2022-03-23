@extends('layouts.app')

@section('content')

    @foreach($producto as $prod)
        <h1>{{$prod->nombre}}</h1>
    @endforeach
@endsection