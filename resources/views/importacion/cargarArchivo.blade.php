    <div class="content">
        <!-- Full Table -->

        <div class="post d-flex flex-column-fluid">
            <div class="container-xxl">
                <div class="card card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">

                                <h3 class="block-title">Importacion <small>Lugares de Alojamiento</small></h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="block-content">
                            <form id="formulario" action="/importacion/previsualizar" method="post" enctype="multipart/form-data">
                                @csrf
                                <div id="div-archivo" class="form-group form-row">
                                    <div class="col-sm-8">

                                        <input class="" name="Titulo" type="hidden" value="Lugares de Alojamiento">

                                        <label for="Archivo"><i class="fa fa-file-excel"></i> Archivo de Importación de Pokemones</label>
                                        <div class="input-group">
                                            <input class="form-control{{ $errors->has('Archivo') ? ' is-invalid' : '' }}" name="Archivo" type="file">
                                            <button class="ml-3 btn btn-primary" type="submit"> Importar </button>
                                            @if ($errors->has('Archivo'))
                                                <span class="invalid-feedback animated fadeIn">
                                                    <strong>{{ $errors->first('Archivo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <!-- END Full Table -->

    </div>
