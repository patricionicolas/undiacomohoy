@extends('layouts.app')
@section('content')
    @include('extras.informacion')
    @include('include.new_and_list_register')
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Todos tus registros</div>

                    <div class="card-body">
                        @if (count($Posts) > 0) 
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#           </th>
                                    <th scope="col">Fecha       </th>
                                    <th scope="col">Titulo      </th>
                                    <th scope="col">Descripción </th>
                                    <th scope="col">Url         </th>
                                    <th scope="col">Publico     </th>
                                    <th scope="col">Acciones    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($Posts as $p)
                                    <tr>
                                        <th scope="row">{{$p->id}}          </th>
                                        <td>            {{$p->fecha}}       </td>
                                        <td>            {{$p->titulo}}      </td>
                                        <td>            {{$p->descripcion}} </td>
                                        <td>            {{$p->url}}         </td>
                                        <td>            {{$p->publico}}     </td>
                                        <td>            acciones            </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p> No tienes registros ingresados </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection