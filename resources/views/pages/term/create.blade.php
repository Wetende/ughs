@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('terms.index'), 'text'=> 'Terms'],
    ['href'=> route('terms.create'), 'text'=> 'Create' , 'active'],
]])

@section('title', __('Create Term'))

@section('page_heading',  __('Create Term'))

@section('content')
    @livewire('create-term-form')
@endsection