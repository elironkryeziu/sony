@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">

            {{-- <div class="row"> --}}
                    <div class="col-sm-6 col-lg-4">
                    <div class="card">
                    <div class="card-header bg-facebook content-center">
                    <div class="text-white my-4">
                        <div class="text-value-xl">40€</div>
                        <div class="text-uppercase text-muted small">Totali</div>
    
    
                    </div>
                    </div>
                    <div class="card-body row text-center">
                    <div class="col">
                    <div class="text-value-xl">30€</div>
                    <div class="text-uppercase text-muted small">Sony</div>
                    </div>
                    <div class="c-vr"></div>
                    <div class="col">
                    <div class="text-value-xl">10€</div>
                    <div class="text-uppercase text-muted small">Pije</div>
                    </div>
                    </div>
                    </div>
                    </div>

            {{-- </div> --}}


                    {{-- <div class="row"> --}}
                        <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header text-uppercase text-muted"> Sony</div>
                            <div class="card-body">
                        {{-- insert table  --}}
                        <table class="table table-responsive-sm table-bordered table-striped table-sm">
                            <thead>
                            <tr>
                            <th class="text-center">Sony</th>
                            <th class="text-center">Starti</th>
                            <th class="text-center">Finishi</th>
                            <th class="text-center">Persona</th>
                            <th class="text-center">Pagesa</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">10:00</td>
                            <td class="text-center">12:30</td>
                            <td class="text-center">2</td>
                            <td class="text-center">2.5€</td>
                            {{-- <td><span class="badge badge-success">Active</span></td> --}}
                            </tr>
                            
                            
                            </tbody>
                            </table>
                        </div>
                        </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="card">
                            <div class="card-header text-uppercase text-muted">Pijet</div>
                            <div class="card-body">
                            {{-- insert table  --}}
                            </div>
                            </div>
                            </div>
                        
                        {{-- </div> --}}
                        <div>
                            <div class="card">
                                <div class="card-header text-uppercase text-muted">Sasia</div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                          Quisque hendrerit orci
                                          <span class="badge badge-primary badge-pill">14</span>
                                        </li>
                                       
                                      </ul>
                            
                            </div>
                            </div>
                        </div>
                    


        </div>
    </div>
</div>

@endsection
