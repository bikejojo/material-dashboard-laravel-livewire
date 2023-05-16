<!-- component -->
<!-- component -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<div class="">
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Suscripciones a la Plataforma</h6>
                        </div>
                    </div>
                    <div class=" me-3 my-3 text-end">
                    </div>
                    <div class=" me-3 my-3 text-end">
                    </div>
                    <div class="min-h-full bg-gray-200 pb-12">
                        <div class="w-full 2xl:w-3/4 flex items-center justify-center px-8 md:px-32 lg:px-16 2xl:px-0 mx-auto -mt-8">
                            <div class="w-full grid grid-cols-1 xl:grid-cols-3 gap-8">
                                <div class="bg-white shadow-2xl rounded-lg py-4">
                                    <p class="text-xl text-center font-bold text-blue-600">Basic</p>
                                    <p class="text-center py-4">
                                        <span class="text-4xl font-bold text-gray-700">
                                            $<span x-text="basicPrice">5/mes</span>
                                        </span>
                                    </p>
                                    <ul class="border-t border-gray-300 py-4 space-y-6" >
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Productos Garantizados</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Atencion 24Hrs</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Almacenamiento Limitado</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-gray-300 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <span class="text-gray-400 capitalize">Reservas Virtuales</span>
                                        </li>

                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-gray-300 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <span class="text-gray-400 capitalize">App Movil</span>
                                        </li>
                                    </ul>
                                    <div class="flex items-center justify-center mt-6">
                                        <a href="{{ url('profile') }}" class="bg-blue-600 hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150"
                                        title="Purchase">PAGO</a>
                                    </div>
                                </div>
                                <div class="bg-white shadow-2xl rounded-lg py-4">
                                    <p class="text-xl text-center font-bold text-blue-600">Premium</p>
                                    <p class="text-center py-4">
                                        <span class="text-4xl font-bold text-gray-700">
                                            $<span x-text="premiumPrice">15/mes</span>
                                        </span>
                                    </p>
                                    <ul class="border-t border-gray-200 py-4 space-y-6" >
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Productos Garantizados</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Atencion 24Hrs</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Almacenamiento Ilimitado</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">App Movil</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Reservas Virtuales</span>
                                        </li>

                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-gray-300 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <span class="text-gray-400 capitalize">Mantenimiento de servicios</span>
                                        </li>

                                    </ul>
                                    <div class="flex items-center justify-center mt-6">
                                        <a href="#" class="bg-blue-600 hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150" title="Purchase">PAGO</a>
                                    </div>
                                </div>
                                <div class="bg-white shadow-2xl rounded-lg py-4">
                                    <p class="text-xl text-center font-bold text-blue-600">Pro</p>
                                    <p class="text-center py-4">
                                        <span class="text-4xl font-bold text-gray-700">
                                            $<span x-text="proPrice">39/mes</span>
                                        </span>
                                    </p>
                                    <ul class="border-t border-gray-200 py-4 space-y-6" >
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Productos Garantizados</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Atencion 24Hrs</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Almacenamiento Ilimitado</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">App Movil</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Reservas Virtuales</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Asistencia Total</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Re-Agendar Eventos</span>
                                        </li>
                                        <li class="flex items-center space-x-2 px-2">
                                            <span class="bg-blue-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                </svg>
                                            </span>
                                            <span class="text-gray-60 capitalize">Eleccion de Equipo Fotografico</span>
                                        </li>
                                    </ul>
                                    <div class="flex items-center justify-center mt-6">
                                        <a href="#" class="bg-blue-600 hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150" title="Purchase">PAGO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

