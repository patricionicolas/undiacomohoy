@extends('layouts.app')

@section('content')
@include('extras.informacion')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <a href="{{ url('/createpost') }}">
                <button type="button" class="btn btn-primary btn-lg btn-block">
                    Ingresar un nuevo registro
                </button>
            </a>
        </div>
        <div class="col-md-1">
            <a href="{{ url('/createpost') }}">
                <button type="button" class="btn btn-primary btn-lg btn-block">
                    Ver
                </button>
            </a>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Este día en años anteriores</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
