@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                            <a class="btn btn-primary" href="/home">Volver</a><br>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Proveedores</h3>
                                    {{--<h4>Se encontraron {{count($productos)}} productos</h4>--}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="POST" action="proveedores/new">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="namelbl"
                                                   class="col-md-4 col-form-label text-md-right">Nombre</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}"
                                                       name="codigo" value="{{ old('codigo') }}" required autofocus>

                                                @if ($errors->has('codigo'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('codigo') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="namelbl"
                                                   class="col-md-4 col-form-label text-md-right">CUIT</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}"
                                                       name="codigo" value="{{ old('codigo') }}" required autofocus>

                                                @if ($errors->has('codigo'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('codigo') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="namelbl"
                                                   class="col-md-4 col-form-label text-md-right">Razon Social</label>

                                            <div class="col-md-6">
                                                <input id="descripcion" type="text"
                                                       class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}"
                                                       name="descripcion" value="{{ old('descripcion') }}" required autofocus>

                                                @if ($errors->has('descripcion'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="namelbl"
                                                   class="col-md-4 col-form-label text-md-right">Direccion</label>

                                            <div class="col-md-6">
                                                <input id="stock" type="number" min="1"
                                                       class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}"
                                                       name="stock" value="{{ old('stock') }}" required autofocus>

                                                @if ($errors->has('stock'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('stock') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="namelbl"
                                                   class="col-md-4 col-form-label text-md-right">Telefono</label>

                                            <div class="col-md-6">
                                                <input id="costo" type="text"
                                                       class="form-control{{ $errors->has('costo') ? ' is-invalid' : '' }}"
                                                       name="costo" value="{{ old('costo') }}" required autofocus>

                                                @if ($errors->has('costo'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('costo') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="namelbl"
                                                   class="col-md-4 col-form-label text-md-right">Mail</label>

                                            <div class="col-md-6">
                                                <input id="precio" type="text"
                                                       class="form-control{{ $errors->has('precio') ? ' is-invalid' : '' }}"
                                                       name="precio" value="{{ old('precio') }}" required autofocus>

                                                @if ($errors->has('precio'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('precio') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>



                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Registrar Proveedor
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 2em">
                                <div class="col-lg-12">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>
                                            <td>NOMBRE</td>
                                            <td>CUIT</td>
                                            <td>RAZON SOCIAL</td>
                                            <td>DIRECCION</td>
                                            <td>TELEFONO</td>
                                            <td>MAIL</td>
                                            {{--<td>PRECIO</td>--}}

                                            {{-- <td>Roles</td>
                                             <td>Nivel</td>--}}
                                            <td>Acciones</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($proveedores as $proveedor)
                                            <tr>
                                                <td>{{$proveedor->nombre}}</td>
                                                <td>{{$proveedor->CUIT}}</td>
                                                <td>{{$proveedor->razonsocial}}</td>
                                                <td>{{$proveedor->direccion}}</td>
                                                <td>{{$proveedor->telefono}}</td>
                                                <td>{{$proveedor->mail}}</td>



                                                <td>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>

        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection