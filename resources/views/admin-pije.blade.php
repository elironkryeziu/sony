@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
        <h4>Lista e pijeve</h4>
        <br>
        <a href="/pije/new" class="btn btn-primary mb-3">Shto pije te re</a>
        <a href="/pije/furnizim" class="btn btn-primary mb-3">Shto furnizim</a>
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
            <td class="text-center">
                {{-- <a href="/pije/update/{{$pija->id}}" class="btn btn-pill btn-dark mr-2"> Ndrysho</a> --}}
            <button onclick="fshije({{$pija->id}})" class="btn btn-pill btn-youtube"> Fshije</button>
            </tr>
        @endforeach
        </tbody>
        </table>
        
    </div>
</div>

<script>
    function fshije(id) {
        var r = confirm("A jeni i sigurt ?"+id);
        if (r == true) {
            fetch(`/pije/${id}`, {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "DELETE", 
        }).then(res => {
            location.replace("/admin/pije");
        });
        } else {
        txt = "You pressed Cancel!";
        }
    }
</script>
@endsection