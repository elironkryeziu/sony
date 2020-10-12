@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
        <h4>Lista e pijeve</h4>
        <br>
        <a href="/pije/new" class="btn btn-primary mb-3">Shto</a>
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Pija</th>
            <th scope="col">Cmimi</th>
            <th scope="col">Sasia</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($pijet as $pija)
            <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{ $pija->name }}</td>
            <td>{{ $pija->price }} €</td>
            <td>{{ $pija->qty }}</td>
            <td class="text-center"><a href="/pije/update/{{$pija->id}}" class="btn btn-pill btn-dark"> Ndrysho</a>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
        
    </div>
</div>
@endsection