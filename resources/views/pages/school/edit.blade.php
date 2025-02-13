@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('school.settings'), 'text'=> 'Settings', 'active']
]])

@section('title', __('School Settings'))

@section('page_heading', 'School Settings')

@section('content')
    @livewire('edit-school-form', ['school' => $school])
@endsection
