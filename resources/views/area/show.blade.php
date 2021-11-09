@extends('layouts.main',['activePage' => 'area', 'titlePage' => __('AREA')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">AREA</div>
                            <p class="card-category">Vista detallada de un Area</p>
                        </div>


                        <div class="card-body">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="float-left">
                                                <span class="card-title">Show Area</span>
                                            </div>
                                            <div class="float-right">
                                                <a class="btn btn-primary" href="{{ route('areas.index') }}"> Back</a>
                                            </div>
                                        </div>
                    
                                        <div class="card-body">
                                            
                                            <div class="form-group">
                                                <strong>Derivado:</strong>
                                                {{ $area->derivado }}
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


