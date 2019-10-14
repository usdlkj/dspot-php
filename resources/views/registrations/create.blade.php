@extends('layouts/default')

@section('content')

{{--    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif--}}

    <div class="container">
        <h4 class="header center materialize-blue text-dark-5">Santa Dive Registration</h4>
        <div class="row center">
            @include('registrations/form')
        </div>
    </div>

@stop
