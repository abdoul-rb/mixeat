@extends('layouts.dashboard')
@section('header') Tableau de bord @endsection
@section('content')

    {{ \Illuminate\Support\Facades\Auth::user() }}
@endsection
