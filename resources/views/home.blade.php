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
                        <div class="text-value-xl">{{$totali}}€</div>
                        <div class="text-uppercase text-muted small">Totali</div>
    
    
                    </div>
                    </div>
                    <div class="card-body row text-center">
                    <div class="col">
                    <div class="text-value-xl">{{$totali_sony}}€</div>
                    <div class="text-uppercase text-muted small">Sony</div>
                    </div>
                    <div class="c-vr"></div>
                    <div class="col">
                    <div class="text-value-xl">{{$totali_pije}}€</div>
                    <div class="text-uppercase text-muted small">Pije</div>
                    </div>
                    </div>
                    </div>
                    </div>

            {{-- </div> --}}


                    {{-- <div class="row"> --}}
                        <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header text-uppercase text-muted"> Sony</div>
                            <div class="card-body">
                        {{-- insert table  --}}
                        <table class="table table-responsive-sm table-bordered table-striped table-sm">
                            <thead>
                            <tr>
                            <th class="text-center">Nr</th>
                            <th class="text-center">Sony</th>
                            <th class="text-center">Starti</th>
                            <th class="text-center">Finishi</th>
                            <th class="text-center">Persona</th>
                            <th class="text-center">Pagesa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($fatura as $f)
                            <tr>
                            <td class="text-center">{{ $loop->index+1 }}</td>
                            <td class="text-center font-weight-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="80" preserveAspectRatio="xMidYMid" viewBox="-29.7 -38.20475 257.4 229.2285"><path d="M196.24 116.962c-3.869 4.88-13.344 8.36-13.344 8.36l-70.492 25.32V131.97l51.877-18.484c5.887-2.11 6.791-5.091 2.006-6.657-4.776-1.57-13.425-1.12-19.316.999l-34.567 12.174v-19.379l1.993-.674s9.988-3.535 24.034-5.091c14.045-1.547 31.242.211 44.743 5.329 15.215 4.808 16.928 11.895 13.065 16.775zm-77.125-31.796V37.413c0-5.608-1.035-10.77-6.297-12.232-4.03-1.291-6.53 2.45-6.53 8.054V152.82l-32.25-10.236V0c13.712 2.545 33.69 8.563 44.429 12.183 27.312 9.377 36.572 21.048 36.572 47.344 0 25.63-15.821 35.344-35.924 25.639zM14.862 130.018c-15.62-4.399-18.219-13.564-11.1-18.844 6.58-4.875 17.77-8.545 17.77-8.545l46.241-16.442v18.745L34.497 116.84c-5.878 2.109-6.782 5.095-2.005 6.66 4.78 1.565 13.433 1.12 19.32-.994l15.961-5.792v16.77c-1.012.18-2.14.36-3.184.535-15.966 2.609-32.97 1.52-49.727-4.002zm171.105 7.425c2.02 0 3.913.782 5.339 2.226a7.487 7.487 0 012.212 5.334 7.472 7.472 0 01-2.212 5.334 7.465 7.465 0 01-5.339 2.217 7.472 7.472 0 01-5.338-2.217 7.467 7.467 0 01-2.208-5.334c0-4.165 3.382-7.56 7.546-7.56zm-6.278 7.56c0 1.677.652 3.256 1.84 4.434a6.2 6.2 0 004.438 1.844 6.281 6.281 0 006.279-6.278c0-1.682-.648-3.26-1.84-4.444a6.195 6.195 0 00-4.439-1.839 6.195 6.195 0 00-4.439 1.84 6.227 6.227 0 00-1.839 4.443zm8.558-4.07c.828.364 1.246 1.066 1.246 2.064 0 .513-.108.944-.328 1.282-.158.243-.382.44-.634.611.198.117.373.257.503.419.18.233.284.607.297 1.115l.04 1.075c.014.288.032.508.077.643.045.198.13.324.239.364l.112.054v.49h-1.628l-.054-.094a1.477 1.477 0 01-.108-.328 5.105 5.105 0 01-.058-.657l-.068-1.336c-.018-.463-.175-.75-.472-.904-.185-.085-.49-.125-.904-.125h-2.29v3.444h-1.461v-8.405h3.904c.638 0 1.174.094 1.587.288zm-4.03 3.386h2.33c.468 0 .841-.085 1.107-.26.243-.176.36-.495.36-.959 0-.503-.167-.832-.518-1.007-.193-.094-.463-.148-.805-.148h-2.473v2.374z" fill="#1f1f1f" fill-rule="evenodd"/></svg>
                                {{ $f->sony_id }}</td>
                            <td class="text-center">{{ $f->startTime }}</td>
                            <td class="text-center">{{ $f->finishTime }}</td>
                            <td class="text-center">{{ $f->type }}</td>
                            <td class="text-center">{{ $f->price }} €</td>
                            {{-- <td><span class="badge badge-success">Active</span></td> --}}
                            </tr>
                            @endforeach
                            
                            
                            </tbody>
                            </table>
                        </div>
                        </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="card">
                            <div class="card-header text-uppercase text-muted">Pijet</div>
                            <div class="card-body">
                                <table class="table table-responsive-sm table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                    <th class="text-center">Nr</th>
                                    <th class="text-center">Pija</th>
                                    <th class="text-center">Cmimi</th>
                                    <th class="text-center">Koha</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($faturapije as $pija)
                                    <tr>
                                    <td class="text-center">{{ $loop->index+1 }}</td>
                                    <td class="text-center">{{ $pija->pija->name }}</td>
                                    <td class="text-center">{{ $pija->price }}€</td>
                                    <td class="text-center">{{ $pija->paidAt }}</td>
                                    </tr>
                                    @endforeach
                                    
                                    
                                    </tbody>
                                    </table>
                            </div>
                            </div>
                        </div>
                        
                        {{-- </div> --}}
                        <div  class="col-lg-6">
                            <div class="card">
                                <div class="card-header text-uppercase text-muted">Sasia</div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        @foreach ($stock as $pija)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                          {{ $pija->name }}
                                          <span class="badge badge-primary badge-pill">{{ $pija->qty }}</span>
                                        </li>
                                        @endforeach
                                       
                                      </ul>
                            
                            </div>
                            </div>
                        </div>
                    


        </div>
    </div>
</div>

@endsection
