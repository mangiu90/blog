@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
    <h1>Listado de Posts</h1>
    <a class="btn btn-secondary btn-sm" href="{{ route('admin.posts.create') }}">Nuevo post</a>
@stop

@section('content')
    
    @livewire('admin.posts-index')
    
@stop