    <div class="">
        <!-- Navbar -->
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <h1> Pago de Suscripcion de la Pagina </h1>
          <form  method="POST" class="text-start"  >
            @csrf
            <div class="input-group input-group-outline my-3" >
                <label class="form-label">Codigo de Cliente</label>
                <input type="number" class="form-control" name="cod" required>
            </div>
            <div class="input-group input-group-outline my-3" >
                <label class="form-label">Nombre de Cliente</label>
                <input type="text" class="form-control" name="email" required>
            </div>
            <div class="input-group input-group-outline my-3" >
                &nbsp;
                <br>
                <br>
                    <a href="/public/assets/img/pagodef.png" download ="documento.pdf"> Por Favor Haga Link en este Enlace </a>
            </div>
            <div class="text-center p-4 pt-0" >
          </form>

        </div>
    </div>

