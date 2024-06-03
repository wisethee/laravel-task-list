@extends('layouts.app')

@section('main')
    @include('form', ['task' => $task])
@endsection
