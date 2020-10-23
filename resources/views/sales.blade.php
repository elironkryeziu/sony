@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">

        <form action="{{ route('faturatPije') }}" method="get">
        @csrf
        <p>Data prej:<p>
            <input type="date" name='day' id="datepicker" value="{{ $day }}"></p>

            <label>Pija:</label>
            <select name="pija" id="pija">
            <option value=0 selected>Te gjitha</option>
            @foreach ($pijet as $pije)
                @if ($pije->id == $selected_pija)
                    <option value="{{ $pije->id }}" selected>{{ $pije->name }}</option>
                @else
                <option value="{{ $pije->id }}">{{ $pije->name }}</option>
                @endif
            @endforeach
            </select>

           

            <label>Puntori:</label>
            <select name="user" id="user">
            <option value=0 selected>Te gjithe</option>
            @foreach ($users as $user)
            @if ($user->id == $selected_user)
                <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
            @else
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endif
            @endforeach
            </select>

            <br> <br>

            <input type="submit" class="btn btn-primary" value="Filtro"/>
        </div>
        </form>

        <div class="card bg-light mb-3 text-center" style="max-width: 18rem;">
            <div class="card-header">Totali</div>
            <div class="card-body">
                <h5 class="card-title">{{ $totali }} €</h5>
            </div>
        </div> 

        

        <table class="table table-responsive-sm table-bordered table-striped table-sm">
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
            <td>{{ $fatura->pija->name }}</td>
            <td>{{ $fatura->price }} €</td>
            <td>{{ $fatura->paguar == 1 ? 'PO' : 'JO' }}</td>
            <td>{{ $fatura->user->name }}</td>
            <td>{{ $fatura->soldAt }}</td>
            <td>{{ $fatura->paidAt }}</td>
            <td>{{ $fatura->soldDate }}</td>

            </tr>
        @endforeach
        </tbody>
        </table>
    

    </div>
</div>

<script>


</script>
@endsection