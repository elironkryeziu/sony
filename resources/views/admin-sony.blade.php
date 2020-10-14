@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">

        <form action="{{ route('fatura') }}" method="get">
        @csrf
        <div class="form-group">
        <p>Zgjedh daten:<p>
            <input type="date" name='day' id="datepicker"></p>
            <input type="submit" class="btn btn-primary" value="Filtro"/>
        </div>

        <div class="row">
        

        <ul style="list-style:none; margin:0px; padding:0px;">
        <li>
        <a href="/admin/sony?period=month" class="btn btn-link">Shitjet kete muaj</a>
        </li>
        <li>
        <a href="/admin/sony?period=month" class="btn btn-link">Shitjet kete jave</a>
        </li>
        <li>
        <a href="/admin/sony?period=month" class="btn btn-link">Shitjet ne 24 oret e fundit</a>
        </li>
        </ul>

        <div class="card bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Totali</div>
        <div class="card-body">
            <h5 class="card-title">{{ $totali }} €</h5>
        </div>
        </div>

        </div>
        </form>
        

        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Sony</th>
            <th scope="col">Tipi</th>
            <th scope="col">Pagesa</th>
            <th scope="col">Starti</th>
            <th scope="col">Finishi</th>
            <th scope="col">Minutat</th>
            <th scope="col">Puntori</th>
            <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($faturat as $fatura)
            <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>Sony {{ $fatura->sony->number }}</td>
            <td>{{ $fatura->type }} persona</td>
            <td>{{ $fatura->price }} €</td>
            <td>{{ $fatura->startTime }}</td>
            <td>{{ $fatura->finishTime }}</td>
            <td>{{ $fatura->minutes }}</td>
            <td>{{ $fatura->user->name }}</td>
            <td>{{ $fatura->created_at }}</td>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    

    </div>
</div>

<script>


</script>
@endsection