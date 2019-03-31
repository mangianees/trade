@extends('layouts.app')

@section('content')
    
     @foreach ($Posts as $Post)
    {{$Post->make}}
    {{$Post->model}}
    {{$Post->transmission}}
    {{$Post->fuel_type}}
    {{$Post->mileage}}



        
    @endforeach


    This is search
@endsection