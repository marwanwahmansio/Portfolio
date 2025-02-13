@extends('layouts.app')

@section('head-css')
    <link href="css/cv.css" rel="stylesheet">
@endsection

@section('title', 'CV')

@section('content')
    @include('partials.cv.cv')
@endsection

@section('head-js')
    <script src="js/cv.js"></script>
@endsection

