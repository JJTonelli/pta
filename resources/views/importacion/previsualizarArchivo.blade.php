<div class="content">
    <!-- Full Table -->

    <div class="post d-flex flex-column-fluid">
        <div class="container-xxl">
            <div class="card card-flush">

                <div class="my-10 text-center">
                    <h1 class="text-dark mb-3">Importacion de {{$titulo}}</h1>
                </div>

                <div class="card-body pt-0">
                    <div class="block-content">
                        <div class="text-center">
                            <div class="text-center form-row">
                                <div class="col-6">
                                    <div id="div-errores" class="col-11 table-responsive" style="margin: auto ; overflow-y: auto">
                                        <table class="table table-bordered table-striped table-vcenter table-sm js-dataTable-buttons">
                                            <thead>
                                            <tr class="bg-danger text-white">
                                                <th colspan="2" class="text-center">Errores ({{$errores->count()}})</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Linea</th>
                                                <th>Descripcion</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($errores->count())
                                                @foreach($errores as $e)
                                                    <tr class="font-size-sm text-center">
                                                        <td>
                                                            {{ $e->Campo39 }}
                                                        </td>
                                                        <td>
                                                            {{ $e->Campo40 }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="100" class="text-center">
                                                        No se encontraron errores
                                                    </td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div id="div-advertencias" class="col-11 table-responsive" style="margin: auto ; overflow-y: auto">
                                        <table class="table table-bordered table-striped table-vcenter table-sm js-dataTable-buttons">
                                            <thead>
                                            <tr class="bg-warning text-white">
                                                <th colspan="2" class="text-center">Advertencias ({{$advertencias->count()}})</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Linea</th>
                                                <th>Descripcion</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($advertencias->count())
                                                @foreach($advertencias as $e)
                                                    <tr class="font-size-sm text-center">
                                                        <td>
                                                            {{ $e->Campo39 }}
                                                        </td>
                                                        <td>
                                                            {{ $e->Campo38 }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="100" class="text-center">
                                                        No se encontraron advertencias
                                                    </td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="col-10 table-responsive" style="margin: auto">
                            <div class="text-center form-row">
                                <div class="col-12">
                                    <h4 class="text-danger">Total de {{$titulo}}: {{$os}}</h4>
                                </div>
                            </div>
                        </div>

                        @if($errores->count() == 0)
                            <form id="frmGrabar"
                                  action="/importacion/alta"
                                  method="POST">
                                @csrf
                                @method('PUT')
                                <div class="text-center">
                                    <button class="btn btn-success"><i class="fa fa-save"></i> Grabar </button>
                                </div>
                            </form>
                        @endif
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Full Table -->

</div>
