<script>
    window.addEventListener('load', function() {
    var formularioVisible = true;

    var formulario = document.getElementById('formulario');
    var btnAgregarEvento = document.getElementById('btnAgregarEvento');

    btnAgregarEvento.addEventListener('click', function() {
    if(formularioVisible){
        formulario.style.display = "block";
        formularioVisible = false;
    }else{
        formulario.style.display = "none";
        formularioVisible = true;
        }
    });
});
</script>
<div class="">
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Tablas de Eventos</h6>
                        </div>
                    </div>
                    <div class=" me-3 my-3 text-end">
                        <a  id="btnAgregarEvento" class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                class="material-icons text-sm">add</i>&nbsp;&nbsp;Add
                                Event</a>
                    </div>
                    <!-- Modal -->
<form id="formulario" action="{{ route('event.store') }}" method="POST"  style="display:none;" >
    @csrf
    <div class="modal-dialog">
      <div class="modal-content">
            <!-- Aquí van los campos del formulario -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del evento</label>&nbsp;
                <input type="text" name="asunto" id="asunto" >
            </div>

            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;
                <input type="date" name="FechaInicio" id="FechaInicio" >
            </div>

            <div class="mb-3">
                <label for="hora1" class="form-label">Hora Inicio</label>&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="time" name="horaInicio" id="horaInicio" >
            </div>

            <div class="mb-3">
                <label for="hora2" class="form-label">Hora Fin</label>&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="time" name="horaFin" id="horaFin" >
            </div>

            <div class="mb-3">
                <label for="ubicacion" class="form-label">Ubicacion</label>&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="Ubicacion" id="Ubicacion">
            </div>

            <div class="form-group">
                <label for="name" class="form-label">NOMBRE de Fotografo </label>
                <select name="empleado" id="empleado"  class="form-control,width:100px" required="required">
                    <option>--------BUSCA NOMBRE CLIENTE--------<></option>
                    @foreach ($event1 as $event1 )
                        <option value={{ $event1['p'] }} > {{ $event1['Nombre']}}.{{ $event1['Apellido']}}</option>
                    @endforeach
                </select>
            </div>
            <!-- etc -->

          <button type="submit" class="btn btn-primary" >Guardar</button>

      </div>
    </div>
</form>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nombre Evento</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Fecha</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Situacion</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Hora Inicio</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Hora Fin</th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Ubicacion</th>
                                        <th class="text-secondary opacity-7"></th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Author</th>
                                        <th class="text-secondary opacity-7"></th>

                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                        </th>
                                    </tr>
                                </thead>
                                <div>
                                <tbody>
                                    @foreach ($event as $ev1 )
                                    <tr class="row100 head" >
                                       <td> <p class="text-sm text-sm font-weight-bold mb-0"> {{$ev1->asunto }} </p></td>
                                       <td class="text-sm text-sm font-weight-bold mb-0"> {{$ev1->FechaInicio}}  </td>
                                       @switch($ev1->tipo)
                                       @case(0)
                                       <td class="text-center " ><span class="badge badge-sm bg-gradient-secondary" > PENDIENTE </span></td>
                                          @break
                                       @case(1)
                                       <td class="text-center " ><span class="badge badge-sm bg-gradient-success" > PROCESANDO </span></td>
                                          @break
                                       @case(2)
                                       <td class="text-center " ><span class="badge badge-sm bg-gradient-danger" > TERMINADO </span></td>
                                          @break
                                       @default
                                       @endswitch (expresion)
                                       <td class="text-center text-sm font-weight-bold mb-0"> {{$ev1->horaInicio}}  </td>
                                       <td class="text-center text-sm font-weight-bold mb-0"> {{$ev1->horaFin}}  </td>
                                       <td class="text-center text-sm font-weight-bold mb-0"> {{$ev1->Ubicacion}}  </td>
                                       <td class="text-center text-sm font-weight-bold mb-0"> {{$ev1->Nombre }} {{$ev1->Apellido}}  </td>
                                       <td class="text-center text-sm font-weight-bold mb-0">
                                        <a id ="btnAgregarEvento1" class="btn bg-gradient-dark mb-0" href="{{route('eventup',['id'=> $ev1->e])}}" data-target="a">
                                        <i class="material-icons text-sm">add</i>&nbsp;&nbsp;</a>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

