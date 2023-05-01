
        <!-- Navbar -->
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New
                                User</a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NAME</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                EMAIL</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ROLE</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ESTADDO
                                            </th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($u as $u1 )
                                            <tr class="row100 head" >
                                               <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" scope="row">{{ $loop->iteration }} </th>
                                               <td> <p class="text-sm font-weight-bold mb-0"> {{$u1->Nombre}} . {{$u1->Apellido}} </p></td>
                                               <td class="text-center text-sm font-weight-bold mb-0">  {{$u1->email}}  </td>
                                               @switch($u1->rol)
                                                    @case(0)
                                                    <td class="text-center text-sm font-weight-bold mb-0" > ADMIN </td>
                                                        @break
                                                    @case(1)
                                                    <td class="text-center text-sm font-weight-bold mb-0" > ORGANIZADOR </td>
                                                        @break
                                                    @case(2)
                                                    <td class="text-center text-sm font-weight-bold mb-0" > FOTOGRAFO </td>
                                                        @break
                                                    @case(3)
                                                    <td class="text-center text-sm font-weight-bold mb-0" > CLIENTE </td>
                                                       @break
                                                   @default
                                               @endswitch (expresion)
                                               @switch($u1->Estado)
                                               @case(0)
                                               <td class="text-center " ><span class="badge badge-sm bg-gradient-secondary" > LIBRE </span></td>
                                                   @break
                                               @case(1)
                                               <td class="text-center " ><span class="badge badge-sm bg-gradient-success" > OCUPADO </span></td>
                                                   @break
                                                @default
                                          @endswitch (expresion)
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
