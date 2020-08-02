@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Ingrese los datos necesarios</div>

                <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-3">Titulo</div>
                        <div class="col-md-9">
                            <input class="form-control" type="text" placeholder="Graduacion" id="titulo">
                        </div>

                        <div class="col-md-12"> <br> </div>

                        <div class="col-md-3">Descripción</div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <textarea class="form-control" id="descripcion" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12"> <br> </div>

                        <div class="col-md-3">Url</div>
                        <div class="col-md-9">
                            <input class="form-control" type="url" placeholder="www.uct.cl" id="titulo">
                        </div>

                        <div class="col-md-12"> <br> </div>

                        <div class="col-md-3">Fecha</div>
                        <div class="col-md-9">
                            INPUT
                        </div>

                        <div class="col-md-12"> <br> </div>

                        <div class="col-md-3">¿Publico?</div>
                        <div class="col-md-9">
                            <input type="radio" name="publico" value="1"> Si <br>
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