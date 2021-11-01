@extends('layouts.app')

@section('template_title')
    {{ $statepurchase->name ?? 'Show Statepurchase' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Statepurchase</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('statepurchases.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $statepurchase->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
