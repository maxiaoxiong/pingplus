@extends('layouts.app')

@section('main-content')
    <div class="box">
        <form action="{{ url('dormitories/1') }}" method="put">
            @include('dormitories.form')
        </form>
    </div>
@endsection