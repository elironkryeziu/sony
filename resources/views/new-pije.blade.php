@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
        <a href="/admin/pije" class="btn btn-secondary mb-4">< Kthehu</a>
        <h3>Pije e re:</h3>
        <form action="{{ route('addPije') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Pija</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Pija">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Cmimi (€)</label>
            <input type="number" class="form-control" name="price" min="0.01" step="0.01" max="2500" placeholder="Cmimi" />
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Sasia</label>
            <input type="number" class="form-control" name="qty"  placeholder="Sasia" />
        </div>
        <input type="submit" class="btn btn-primary btn-lg" value="Ruaj"></input>
        </form>
    </div>
</div>
@endsection