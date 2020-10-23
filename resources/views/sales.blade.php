@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">

        <form action="{{ route('faturatPije') }}" method="get">
        @csrf
        <p>Zgjedh daten:<p>
            <input type="date" name='day' id="datepicker" value="{{ $day }}"></p>

            <label>Pija:</label>
            <select name="sony" id="sony">
            <option value=""></option>
            <option value="all">Te gjithe</option>
            @foreach ($pijet as $pije)
                <option value="{{ $pije->id }}">{{ $pije->name }}</option>
            @endforeach
            </select>

            <label>Puntori:</label>
            <select name="user" id="user">
            <option value=""></option>
            <option value="all">Te gjithe</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
            </select>

            <br> <br>

            <input type="submit" class="btn btn-primary" value="Filtro"/>
        </div>
        </form>

        <div class="row">
        

        <ul style="list-style:none; margin:0px; padding:0px;">
        <li>
        <a href="/admin/shitjet?period=month" class="btn btn-link">Shitjet kete muaj</a>
        </li>
        <li>
        <a href="/admin/shitjet?period=week" class="btn btn-link">Shitjet kete jave</a>
        </li>
        <li>
        <a href="/admin/shitjet?period=day" class="btn btn-link">Shitjet ne 24 oret e fundit</a>
        </li>
        </ul>

        <div class="card bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Totali</div>
        <div class="card-body">
            <h5 class="card-title">{{ $totali }} €</h5>
        </div>
        </div>

        </div>
        

        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Pija</th>
            <th scope="col">Pagesa</th>
            <th scope="col">E paguar</th>
            <th scope="col">Puntori</th>
            <th scope="col">Shitur ne</th>
            <th scope="col">Paguar ne</th>
            <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($faturat as $fatura)
            <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>Sony {{ $fatura->pija->name }}</td>
            <td>{{ $fatura->price }} €</td>
            <td>{{ $fatura->paguar == 1 ? 'PO' : 'JO' }}</td>
            <td>{{ $fatura->user->name }}</td>
            <td>{{ $fatura->soldAt }}</td>
            <td>{{ $fatura->paidAt }}</td>
            <td>{{ $fatura->soldDate }}</td>
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