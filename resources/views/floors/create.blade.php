@extends('layouts.app')

@section('main-content')
    <div class="box">
        <form action="{{ url('floors') }}" method="post">
            @include('floors.form')
        </form>
    </div>
@endsection