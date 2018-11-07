{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<title>{{config('app.name','MYPOST')}}</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1> {{$title}}</h1>--}}
{{--<p> This is the abouts application from scratch</p>--}}
{{--</body>--}}
{{--</html>--}}

@extends('layouts.app')

@section('content')
    <h1> {{$title}}</h1>
    <p> This is the abouts application from scratch</p>
    </body>
    </html>
@endsection
