@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Ingrese los datos necesarios</div>

                <div class="card-body">
                <form action="{{ url('/storepost') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">Titulo</div>
                        <div class="col-md-9">
                            <input class="form-control" type="text" placeholder="Graduacion" name="titulo" id="titulo" required>
                        </div>

                        <div class="col-md-12"> <br> </div>

                        <div class="col-md-3">Descripción</div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <textarea class="form-control" name="descripcion" id="descripcion" rows="4" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-12"> <br> </div>

                        <div class="col-md-3">Url</div>
                        <div class="col-md-9">
                            <input class="form-control" type="url" placeholder="www.uct.cl" name="url" id="url">
                        </div>

                        <div class="col-md-12"> <br> </div>

                        <div class="col-md-3">Fecha</div>
                        <div class="col-md-9">
                            <input class="col-md-12" type="date" name="fecha" required>
                        </div>

                        <div class="col-md-12"> <br> </div>

                        <div class="col-md-3">¿Publico?</div>
                        <div class="col-md-9">
                            <input type="radio" name="publico" value="1" required> Si <br>
                            <input type="radio" name="publico" value="0"> No <br>
                        </div>

                        <div class="col-md-12"> <br> </div>

                        <div class="col-md-9"></div>
                        <div class="col-md-3 btn btn-primary">
                            <button class="btn btn-primary" type="submit">Insertar</button>
                        </div>
                    </div>


                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection