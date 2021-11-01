@extends('layouts.app')

@section('template_title')
    Create Money
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Money</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('money.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('money.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
