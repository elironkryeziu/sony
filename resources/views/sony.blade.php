@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="row">
        <div class="col">
        <img style="width:60%; position: absolute;" src="{{ asset('storage/tv-off.png') }}" class="css-class" alt="alt text">
        <p style="top:60; right: 50; bottom: 50; left:90; position:absolute;">1</p>
        </div>
        <div class="col">
        <img style="width:60%;" src="{{ asset('storage/tv-off.png') }}" class="css-class" alt="alt text">
        </div>
        <div class="col">
        <img style="width:60%;" src="{{ asset('storage/tv-off.png') }}" class="css-class" alt="alt text">
        </div>
    </div>
        <!-- <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
            </table> -->
        </div>
    </div>
</div>

@endsection