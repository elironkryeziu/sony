@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
        <a href="/admin/pije" class="btn btn-secondary mb-4">< Kthehu</a>
        <h3>Furnizim i ri:</h3>
        <form action="{{ route('furnizim') }}" method="post">
        @csrf
        @foreach ($pijet as $pija)
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $pija->name }}</label>
            <input type="number" class="form-control" name="{{ $pija->id }}"  placeholder="Sasia" />        
        </div>
        @endforeach
        <input type="submit" class="btn btn-primary btn-lg" value="Ruaj"></input>
        </form>
        
    </div>
</div>
@endsection