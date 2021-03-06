@extends('layouts.app')

@section('template_title')
    {{ $footer->name ?? 'Show Footer' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Footer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('footers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Piepagina:</strong>
                            {{ $footer->piepagina }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
