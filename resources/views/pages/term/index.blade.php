@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('terms.index'), 'text'=> 'Terms', 'active'],
]])

@section('title', __('Terms'))

@section('page_heading',  __('Terms'))

@section('content')
    @livewire('set-term')

    @livewire('list-terms-table')
@endsection