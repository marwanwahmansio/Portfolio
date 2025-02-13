@extends('layouts.app')

@section('head-css')
    <link href="css/contact.css" rel="stylesheet">
@endsection

@section('title', 'Contact')

@section('content')
    @include('partials.contact.form')
@endsection

