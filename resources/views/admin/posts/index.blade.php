@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
<h1>Listado de Posts</h1>
<a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.posts.create') }}">Nuevo post</a>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
</div>
@endif

@livewire('admin.posts-index')

@stop