<header class="z-50 relative ">

    <nav id="Navbar" class="  rounded-b-md  dark:bg-gray-900 dark:border-gray-700 md:bg-transparent sm:bg-white ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-2">
            <x-logoDELTA />
            <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 sm:text-gray-950 sm:hover:text-cyan-950  md:text-zinc-100 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li class="rounded-md hover:border-b px-1">
                        <a href="#" class="block py-2 px-3 md:p-0 sm:text-gray-950 sm:hover:text-cyan-950 md:text-zinc-200 md:hover:text-white font-semibold " aria-current="page">Inicio</a>
                    </li>
                    <li class="hover:border-b rounded px-1">
                        <a href="#" class="block py-2 px-3 md:p-0 sm:text-gray-950 sm:hover:text-cyan-950 md:text-zinc-200 md:hover:text-white font-semibold">Nuestra Empresa</a>
                    </li>
                    <li class="hover:border-b rounded px-1">
                        <button id="productos-y-servicios" data-collapse-toggle="menu-productos-y-servicios" class="flex items-center justify-between w-full py-2 px-3 sm:text-gray-950 sm:hover:text-cyan-950 md:text-zinc-200 md:hover:text-white md:p-0 font-semibold ">Prodcutos y Servicios <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                    </li>

                    <li class="hover:border-b rounded px-1">
                        <button id="botonProyectos" data-collapse-toggle="menu-proyectos" class="flex items-center justify-between w-full py-2 px-3  rounded md:w-auto sm:text-gray-950 sm:hover:text-cyan-950 md:text-zinc-200 md:hover:text-white md:p-0  font-semibold ">Proyectos <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                    </li>

                    <li class="hover:border-b rounded px-1">
                        <a href="#" class="block py-2 px-3   font-semibold md:p-0 sm:text-gray-950 sm:hover:text-cyan-950 md:text-zinc-200 md:hover:text-white" aria-current="page">Contactenos</a>
                    </li>

                    @if (Route::has('login'))
                    @auth
                    <li class="hover:border-b rounded px-1">
                        <a href="#" class="block py-2 px-3  font-semibold md:p-0 sm:text-gray-950 sm:hover:text-cyan-950 md:text-zinc-200 md:hover:text-white" aria-current="page">Inicio</a>
                    </li>
                    @else
                    <li class="hover:border-b rounded px-1">
                        <a href="#" class="block py-2 px-3  font-semibold md:p-0 sm:text-gray-950 sm:hover:text-cyan-950 md:text-zinc-200 md:hover:text-white" aria-current="page">Iniciar Sesion</a>
                    </li>
                    @if (!Route::has('register'))
                    <li class="hover:border-b rounded px-1">
                        <a href="#" class="block py-2 px-3  font-semibold md:p-0 sm:text-gray-950 sm:hover:text-cyan-950 md:text-zinc-100 md:hover:text-white" aria-current="page">Registrarse</a>
                    </li>
                    @endif
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
        <div id="menu-productos-y-servicios" class=" hidden mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white grid-cols-1 sm:grid-cols-2 md:grid-cols-3 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Alquiler o venta de fomaleta metálica</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Ingeniería civil</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Ingeniería Electronica</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div id="menu-proyectos" class=" hidden mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white grid-cols-1 sm:grid-cols-2 md:grid-cols-3 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Ingeniería civil</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Ingeniería Electronica</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>



</header>