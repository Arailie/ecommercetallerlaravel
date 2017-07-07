@extends('store.template')
@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-file-text-o"></i>FACTURACION</h1>
        </div>

        <div class="page">

            <h1><i class="fa fa-file-text-o"></i>Verifique datos</h1>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <!-- <h3 class="panel-title">Cabecera</h3> -->
                        <hr>
                        <div class="row" style="background-color:green;">


                        </div> <!-- row -->
                        <br>
                        <div class="row">
                            <div class="col-md-6">

                                <address>
                                    <div class="text-right"> <strong class=""><FONT  SIZE=7 COLOR=green>FACTURA</FONT></strong><br class=""></div>
                                    <strong class="">E.V.E TECH</strong><br class="">
                                    De: Susana Vargas Portugal<br class="">
                                    Av. 14 de Septiembre 225 Obrajes<br class="">
                                    2796844-2687995<br class="">
                                    La Paz Bolivia<br class="">


                                    NIT:123456<br class="">
                                    NUMERO DE FACTURA:05<br class="">

                                </address>

                            </div>
                        </div>
                        <div class="col-md-5" style="background-color:white;">
                            <div class="form-group">
                                <label for="cliente" class="col-sm-2 control-label">Cliente</label>
                                <div class="col-sm-10">
                                    <table class="table table-striped table-hover table-bordered">
                                        <tr><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="background-color:white;">
                            <div class="form-group">

                                <label for="fecha" class="col-sm-5 control-label">Fecha factura</label>
                                <div class="col-sm-7">
                                   07/07/2017
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 target" style="background-color:white;">
                            <div class="form-group">
                                <label for="id" class="col-sm-3 control-label">NIT</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="id" type="text">
                                </div>
                            </div>
                        </div><!-- row -->
                    </div> <!-- panel heading -->

                    <table class="table table-striped table-hover table-bordered">
                        <tr>
                            <th>DETALLE</th>

                        </tr>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                        </tr>
                        @foreach($cart as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ number_format($item->price,2)}}</td>
                                <td> {{ $item->quantity }}</td>
                                <td>{{ number_format($item->price * $item->quantity,2) }}</td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="text-right"><h3><span class="label label-success">Total: {{ number_format($total, 2)}}Bs</span></h3></div>
                </div> <!-- panel -->
            </div> <!-- col -->
        </div> <!-- row -->
        <div class="row text-center">
            <p class="">peu pagina</p>
        </div>
    </div>    <!-- container -->

    <div class="page">

        <div class="text-center">

            <a href="{{ route('order-detail') }}" class="btn btn-primary"><i class="fa fa-chevron-circle-left fa-2x"></i>Regresar</a>
            <input type="image" src="imprimir.jpg" name="Submit" value="imprimir!" onclick="javascript:window.print()" class="btn btn-primary">


        </div>
    </div>

