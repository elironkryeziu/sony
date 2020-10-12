@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
           <h4>Zgjedhe pijen:</h4>

            <div class="row">
            @foreach ($pijet as $pije)
                <button type="button" class="btn btn-outline-primary btn-lg mb-3 mr-3" onclick="shite({{ $pije->id }});">
                {{ $pije->name }}
                </button>
            @endforeach
            </div>
            <h4>Pijet e papaguara:</h4>
            <p id="demo"></p>
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
            @foreach ($pijet_papaguar as $pije)
                <tr>
                <th scope="row">{{ $loop->index+1}}</th>
                <td>{{ $pije->pija->name }}</td>
                <td>{{ $pije->price }}</td>
                <td><button type="button" class="btn btn-pill btn-success" onclick="paguaj({{ $pije->id }});">Paguaje</button></td>
                </tr>
              @endforeach
            </tbody>
            </table>


        </div>
    </div>
</div>


<script>
function shite(id) {
var r = confirm("A jeni i sigurt ?");
if (r == true) {
    fetch(`/sell/${id}`, {
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    method: "POST", 
  }).then(res => {
    // console.log("Request complete! response:", res);
    location.reload();
  });
} else {
  txt = "You pressed Cancel!";
}
}
function paguaj(id) {
  var r = confirm("A jeni i sigurt ?");
  if (r == true) {
    fetch(`/pay/${id}`, {
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    method: "POST", 
  }).then(res => {
    // console.log("Request complete! response:", res);
    location.reload();
  });

  } else {
  txt = "You pressed Cancel!";
}
}
</script>

@endsection