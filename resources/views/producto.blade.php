@extends('layouts.app')

@section('content')

    <div class="container">
        {{--    <div class="row justify-content-center">--}}
        {{--        <div class="col-md-8">--}}
        {{--            <div class="card">--}}
        {{--                <div class="card-header">Dashboard</div>--}}

        {{--                <div class="card-body">--}}
        {{--                    @if (session('status'))--}}
        {{--                        <div class="alert alert-success" role="alert">--}}
        {{--                            {{ session('status') }}--}}
        {{--                        </div>--}}
        {{--                    @endif--}}

        {{--                    You are logged in!--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                            <a class="btn btn-primary" href="/">Volver</a><br>
                        </div>

                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <button class="btn btn-success">Nuevo
                                        <i class="fa fa-plus-circle"></i></button>
                                    </button>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h3>Administración de productos</h3>

                                </div>
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-12">--}}
{{--                                    <h4>Se encontraron {{count($productos)}} productos</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row" style="margin-top: 2em">
                                <div class="col-lg-12">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>

                                            <td>CODIGO</td>
                                            <td>DESCRIPCION</td>
                                            <td>STOCK</td>
                                            <td>COSTO</td>
                                            <td>PRECIO</td>
                                            <td>Acciones</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($productos as $producto)
                                            <tr>
                                                <td>{{$producto->codigo}}</td>
                                                <td>{{$producto->descripcion}}</td>
                                                <td>{{$producto->stock}}</td>
                                                <td>{{$producto->costo}}</td>
                                                <td>{{$producto->precio}}</td>
<td>dsd</td>


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
            $('#myTable').DataTable({
                responsive: true,
                iDisplayLength: '20',
                order: [[0, 'asc']],
                dom: 'Bfrtip',
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'
                },
                buttons: [
                    'copy', 'excelHtml5', {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'A4'
                    }
                ]

            });
        } );
    </script>
@endsection
