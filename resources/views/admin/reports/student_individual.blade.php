@extends('layouts.layout')

@section('content')

    <h3 align="center">{{$student->getName().' - '.$student->getID()}}</h3>

    <div class="row"><br></div>

    <h4 align="center">{{'Date : '.date("Y-m-d")}}</h4>

    <div class="row"><br></div>

    @foreach($student->getActivities() as $activity)

        @include('student.components.activity')

    @endforeach

@endsection