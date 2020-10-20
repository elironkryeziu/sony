@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
        <a href="/sony" class="btn btn-secondary btn-lg">< Kthehu</a>
            <h1 class="display-3">Sony Playstation {{ $id }}</h1>
            @if ($is_on)
            @if ($type == 4)
            @for ($i = 0; $i < 4; $i++)
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="50px" height="50px" viewBox="0 0 125.2 125.2" style="enable-background:new 0 0 125.2 125.2;" xml:space="preserve"
                    >
                <g>
                    <path d="M52.65,125.2h19.9c3.3,0,6-2.7,6-6V86.301h3.399c3.301,0,6-2.701,6-6V43.2c0-3.3-2.699-6-6-6H43.25c-3.3,0-6,2.7-6,6
                        v37.101c0,3.299,2.7,6,6,6h3.4V119.2C46.65,122.5,49.25,125.2,52.65,125.2z"/>
                    <circle cx="62.55" cy="15.7" r="15.7"/>
                </g></svg> 
            @endfor
            @else
            @for ($i = 0; $i < 2; $i++)
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="50px" height="50px" viewBox="0 0 125.2 125.2" style="enable-background:new 0 0 125.2 125.2;" xml:space="preserve"
                    >
                <g>
                    <path d="M52.65,125.2h19.9c3.3,0,6-2.7,6-6V86.301h3.399c3.301,0,6-2.701,6-6V43.2c0-3.3-2.699-6-6-6H43.25c-3.3,0-6,2.7-6,6
                        v37.101c0,3.299,2.7,6,6,6h3.4V119.2C46.65,122.5,49.25,125.2,52.65,125.2z"/>
                    <circle cx="62.55" cy="15.7" r="15.7"/>
                </g></svg> 
            @endfor
            @endif
            
            <div class="row justify-content-center">
            <div class="card text-white bg-dark mt-3 mr-3" style="width: 30%;">
            <div class="card-header text-center">Koha e fillimit</div>
            <div class="card-body">
                <h3 class="card-title text-center">{{ $start }}</h3>
            </div>
            </div>
            <div class="card text-white bg-dark mt-3 mr-3" style="width: 30%;">
            <div class="card-header text-center">Minutat</div>
            <div class="card-body">
                <h3 class="card-title text-center">{{ $minutes }}</h3>
            </div>
            </div>
            <div class="card text-white bg-dark mt-3 mr-3" style="width: 30%;">
            <div class="card-header text-center">Cmimi</div>
            <div class="card-body">
                <h3 class="card-title text-center">{{ $price }} €</h3>
            </div>
            </div>
            </div>  

            <button type="button" class="btn btn-youtube btn-lg" onclick="mbyll({{$id}})">Mbyll</button>

            @else
            <form action="{{ route('startSony', ['sony_id'=>$id]) }}" method="post">
            @csrf
            <div class="form-check form-check-inline mt-4">
                <input class="form-check-input" type="radio" name="type" id="type2" value=2>
                <label class="form-check-label" for="inlineRadio1" checked>2 Persona</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="type4" value=4>
                <label class="form-check-label" for="inlineRadio2">4 Persona</label>
                </div> <br>
            <input type="submit"  class="btn btn-success btn-lg mt-4" value="Starto">
 
            </form>
            @endif

            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="fatura" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="modal-content"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        
    </div>
</div>

<script>
    function mbyll(id) {
        var r = confirm("A jeni i sigurt ?");
        if (r == true) {
            fetch(`/close/${id}`, {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST", 
        }).then(res => {
            location.replace("/sony");
            // console.log(res.body)
            // var modal = $('#fatura').modal();
            // modal.find('.modal-content').text(res);
            // modal.show(true);

        });
        } else {
        txt = "You pressed Cancel!";
        }
    }
    function shfaqFaturen()
    {

    }
</script>

@endsection
