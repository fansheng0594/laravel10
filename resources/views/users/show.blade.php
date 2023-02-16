@extends('layouts.app')

@section('title', $user->name . ' imformation')

    @section('contents')
    {{ $user->email }} 
@endsection