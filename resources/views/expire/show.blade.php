@extends('layouts.app')

@section('template_title')
    {{ $expire->name ?? 'Show Expire' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Expire</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('expires.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Expira:</strong>
                            {{ $expire->expira }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
