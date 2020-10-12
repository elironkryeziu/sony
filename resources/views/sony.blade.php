@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
        <div class="row">
            <div class="row">
            @foreach ($sonys as $sony)

            <div class="col">
            <a class="badge bg-info text-align-center">Sony {{ $sony->id }}</a>
            <br>
            @if ($sony->isOn == 1)
                <a href="{{ url('sony',[$sony->id]) }}">
                <img style="width:60%;margin-bottom: 10px;" src="{{ asset('storage/tv-on.png') }}" class="css-class" alt="alt text">
                </a>
            @else
                <a href="{{ url('sony',[$sony->id]) }}">
                <img style="width:60%;margin-bottom: 10px;" src="{{ asset('storage/tv-off.png') }}" class="css-class" alt="alt text">
                </a>
            @endif
                </div>
                @unless (($loop->index + 1) %3 != 0)
                <div class="w-100"></div>
                @endunless
                @endforeach
            </div>
           
        </div>
        
    </div>
</div>

@endsection
