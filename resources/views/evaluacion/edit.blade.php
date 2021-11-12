@extends('layouts.main',['activePage' => 'evaluacion', 'titlePage' => __('ACTUALIZAR EVALUACION')] )
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @includeif('partials.errors')
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">EVALUACION</h4>
                        <p class="card-category">Actualizar EVALUACION</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('evaluacions.update', $evaluacion->id) }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @include('evaluacion.form')
                            <div class="box-footer mt20">
                                <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
