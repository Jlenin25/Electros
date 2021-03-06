@extends('layouts.app')

@section('template_title')
    {{ $delivery->name ?? 'Show Delivery' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Delivery</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('deliveries.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Entrega:</strong>
                            {{ $delivery->entrega }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
