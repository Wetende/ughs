@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('terms.index'), 'text'=> 'Terms'],
    ['href'=> route('terms.edit', $term->id), 'text'=> "Edit $term->name", 'active']
]])
@section('title', __("Edit $term->name"))

@section('page_heading',  __("Edit $term->name"))

@section('content')
    @livewire('edit-term-form', ['term' => $term])
@endsection
