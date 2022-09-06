@extends('index')

@section('content')
    <div class="container mx-auto xl:px-40 sm:px-2 space-y-9">
        welcome to profile page {{ $data->email }}
    </div>
@endsection
