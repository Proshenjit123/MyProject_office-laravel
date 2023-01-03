@extends('master')
@section('title')
Service page
@endsection

@section('content')
@for ($index=0;$index<4;$index++)
{{$services [$index] }} <br>

@endfor


@endsection
