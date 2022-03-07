@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('sidebar')
    {{-- @parent --}}
    <h3>Home sidebar</h3>
@endsection
@section('content')
    <h1>San pham</h1>
    <button type="button" class="Show">show</button>
@endsection
@section('css')
    <style>
        header {
            background-color: rgb(22, 21, 21);
            color: red;
        }

        main {
            color: #666;
        }

    </style>
@endsection
@section('js')
    <script>
        document.querySelector('.Show').addEventListener('click', function() {
            alert('Thanh cong');
        })
    </script>
@endsection
