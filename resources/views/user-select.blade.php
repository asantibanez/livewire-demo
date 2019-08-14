@extends('layout')

@section('content')
    <div class="flex flex-row">
        <div class="flex-1">
            @livewire('user-select')
        </div>

        <div class="w-8"></div>

        <div class="flex-1">
            @livewire('user-select')
        </div>

        <div class="w-8"></div>

        <div class="flex-1">
            @livewire('user-select')
        </div>
    </div>
@endsection
