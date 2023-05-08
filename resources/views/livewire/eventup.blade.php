   <!-- Navbar -->
    <!-- End Navbar -->
    <div class = "" >
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('AÑADIR TRABAJADORES') }}</div>
                                <div class="card-body">
                                <form method="POST" action="{{ route('event.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del evento') }}</label>
                                        <input id="name" type="text" name="name" value= {{$eve->asunto}} required="" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="mb-3 row" >
                                        <strong for="cantidad" class="col-sm-2 col-form-label">Nombre Trabajador</strong>
                                        <select name="prov" id="prov"  class="col-sm-10" required="required">
                                            <option>BUSCA NOMBRE TRABAJADOR</option>
                                        </select>
                                    </div>
                                    <div class="modal-content">
                                        <div class="mb-3 row">
                                            <button type="button" class="btn bg-gradient-dark mb-0">AGREGAR</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



