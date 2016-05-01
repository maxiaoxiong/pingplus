@extends('layouts.app')

@section('main-content')
    <div class="box">
        <form action="{{ url('floor/1') }}" method="put">
            @include('floors.form')
        </form>
    </div>
@endsection