@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('exams.index'), 'text'=> 'Exams'],
    ['href'=> route('exams.term-result-tabulation'), 'text'=> 'Term Result tabulation', 'active'],
]])

@section('title',    __('Term result tabulation'))

@section('page_heading',  __('Term result tabulation'))

@section('content', )
@livewire('term-result-tabulation')
@endsection