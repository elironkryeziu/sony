@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
            <h1 class="display-3">Sony Playstation {{ $id }}</h1>
            <form action="{{ route('startSony', ['sony_id'=>$id]) }}" method="post">
            @csrf
            <div class="form-check form-check-inline mt-4">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value=2>
                <label class="form-check-label" for="inlineRadio1">2 Persona</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value=4>
                <label class="form-check-label" for="inlineRadio2">4 Persona</label>
                </div> <br>
            <input type="submit"  class="btn btn-success btn-lg mt-4" value="Starto">
 
            </form>

            </div>
        </div>
        
    </div>
</div>

@endsection
