@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
           <h4>Zgjedhe pijen:</h4>

            <div class="row">
            @foreach ($pijet as $pije)
                <div class="col mb-4">
                <button type="button" class="btn btn-outline-primary btn-lg" onclick="myFunction({{$pije->id}});">
                {{ $pije->name }}
                </button>
                </div>
                @unless (($loop->index + 1) %4 != 0)
                <div class="w-100"></div>
                @endunless
            @endforeach
            </div>
            <h4>Pijet e papaguara:</h4>
            <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Pija</th>
                <th scope="col">Cmimi</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Coca Cola</td>
                <td>1.0</td>
                <td><button type="button" class="btn btn-pill btn-success">Paguaje</button></td>
                </tr>
            </tbody>
            </table>


        </div>
    </div>
</div>


<script>
function myFunction(id) {
  var r = confirm("A jeni i sigurt ?"+id);
if (r == true) {
  txt = "You pressed OK!";
} else {
  txt = "You pressed Cancel!";
}
}
</script>

@endsection