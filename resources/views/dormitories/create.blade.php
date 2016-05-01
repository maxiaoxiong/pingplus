@extends('layouts.app')

@section('main-content')
    <div class="box">
        <form action="{{ url('dormitories') }}" method="post">
            @include('dormitories.form')
        </form>
    </div>
@endsection