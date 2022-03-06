@extends('layouts.client') 
@section('title')
{{$title}}
@endsection
@section('sidebar')
{{-- @parent  --}}
    <h3>Home sidebar</h3>
@endsection
@section('content')
    <h1>Trang chu</h1>
@endsection
@section('css')
    header{
                   backgroud:red;
                   color:black;
    }
@endsection