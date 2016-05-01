@extends('layouts.app')

@section('main-content')
    <div class="box">
        <form action="{{ url('address') }}" method="post">
            @include('address.form')
        </form>
    </div>
@endsection