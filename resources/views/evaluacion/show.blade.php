@extends('layouts.main',['activePage' => 'evaluacion', 'titlePage' => __('EVALUACION')] )

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Evaluacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('evaluacions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id Client:</strong>
                            {{ $evaluacion->id_client }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $evaluacion->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $evaluacion->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Deliverie:</strong>
                            {{ $evaluacion->id_deliverie }}
                        </div>
                        <div class="form-group">
                            <strong>Creado:</strong>
                            {{ $evaluacion->creado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
