<!-- .error-message class  - shows danger if user didn't fill values
    PUT method - updates an instance of a resource by replacing the existing resource   
 -->

@extends('layouts.app')

@section('content')
    @include('form',['task'=>$task])
@endsection






















