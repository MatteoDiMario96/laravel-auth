@extends('layouts.form');

@section('type-of-crud')
    Edit {{$project->name}}
@endsection

@section('form-action')
    {{route('admin.projects.update', $project)}}
@endsection

@section('form-method')
    @method('PUT')
@endsection

