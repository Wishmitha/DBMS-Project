@extends('layout')

@section('content')
    @foreach($card as $foo)
        <div>
            {{$foo->id}}
        </div>
    @endforeach

@stop