@extends('layouts.page')
@section('main')

<x-nav-link />

<div>
    <div id="carrusel-inicio" class="absolute top-0 left-0 w-full nav-bg-scroll" data-carousel="">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden rounded-b-lg md:h-screen sm:h-56">

            <!-- Carousel Items -->
            @for($i = 1; $i <= 8; $i++) <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div id="capa-transparente" class="absolute top-0 left-0 z-20 w-full h-full nav-bg-scroll"></div>
                <img src="{{ asset('images/carrusel ('.$i.').jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <!--Se muestran los distintos titulos -->
                <div class="">
                    <img src="{{ asset('images/carrusel ('.$i.').jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    @if($i == 1)
                    <div class="absolute bottom-20 left-1/3 transform -translate-x-1/2 -translate-y-1/2 bg-gray-900 opacity-95 text-white  p-4 mx-2 z-40 text-center rounded-2xl">
                        <p class="text-5xl font-medium">
                            APOYAMOS LA CONSTRUCCIÓN <br> DE <strong class="text-cyan-300">NUESTRO PAÍS</strong>
                        </p>
                    </div>
                    @elseif($i == 2)
                    <div class="absolute bottom-20 left-1/3 transform -translate-x-1/2 -translate-y-1/2 bg-gray-900 opacity-95 text-white  p-4 mx-2 z-40 text-center rounded-2xl min:w-80">
                        <p class="text-5xl font-medium">
                            INGENIERÍA<br><strong class="text-cyan-300">ELECTRICA</strong> </p>
                    </div>
                    @elseif($i == 3)
                    <div class="absolute bottom-20 left-1/3 transform -translate-x-1/2 -translate-y-1/2 bg-gray-900 opacity-95 text-white  p-4 mx-2 z-40 text-center rounded-2xl">
                        <p class="text-5xl font-medium">
                            INGENIERÍA<br><strong class="text-cyan-300">CIVIL</strong> </p>
                    </div>
                    @elseif($i == 4)
                    <div class="absolute bottom-20 left-1/3 transform -translate-x-1/2 -translate-y-1/2 bg-gray-900 opacity-95 text-white  p-4 mx-2 z-40 text-center rounded-2xl">
                        <p class="text-5xl font-medium">
                            HEMOS CRECIDO <br> DE <strong class="text-cyan-300">LA MANO
                                DE SANTANDER</strong>
                        </p>
                    </div>
                    @elseif($i == 5)
                    <div class="absolute bottom-20 left-1/3 transform -translate-x-1/2 -translate-y-1/2 bg-gray-900 opacity-95 text-white  p-4 mx-2 z-40 text-center rounded-2xl">
                        <p class="text-5xl font-medium">
                            APOYAMOS LA CONSTRUCCIÓN <br> DE <strong class="text-cyan-300">NUESTRO PAÍS</strong>
                        </p>
                    </div>
                    @elseif($i == 6)
                    <div class="absolute bottom-20 left-1/3 transform -translate-x-1/2 -translate-y-1/2 bg-gray-900 opacity-95 text-white  p-4 mx-2 z-40 text-center rounded-2xl">
                        <p class="text-5xl font-medium">
                            APOYAMOS LA CONSTRUCCIÓN <br> DE <strong class="text-cyan-300">NUESTRO PAÍS</strong>
                        </p>
                    </div>
                    @elseif($i == 7)
                    <div class="absolute bottom-20 left-1/3 transform -translate-x-1/2 -translate-y-1/2 bg-gray-900 opacity-95 text-white  p-4 mx-2 z-40 text-center rounded-2xl">
                        <p class="text-5xl font-medium">
                            APOYAMOS LA CONSTRUCCIÓN <br> DE <strong class="text-cyan-300">NUESTRO PAÍS</strong>
                        </p>
                    </div>
                    @elseif($i == 8)
                    <div class="absolute bottom-20 left-1/3 transform -translate-x-1/2 -translate-y-1/2 bg-gray-900 opacity-95 text-white  p-4 mx-2 z-40 text-center rounded-2xl">
                        <p class="text-5xl font-medium">
                            APOYAMOS LA CONSTRUCCIÓN <br> DE <strong class="text-cyan-300">NUESTRO PAÍS</strong>
                        </p>
                    </div>

                    @endif
                </div>
        </div>
        @endfor
    </div>

    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        @for($i = 1; $i <= 8; $i++) <button type="button" class="w-3 h-3 rounded-full {{ $i == 1 ? 'bg-gray-200' : 'bg-gray-200' }}" aria-current="{{ $i == 1 ? 'true' : 'false' }}" aria-label="Slide {{ $i }}" data-carousel-slide-to="{{ $i - 1 }}"></button>
            @endfor
    </div>
</div>

<!-- Slider controls -->
<button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
        </svg>
        <span class="sr-only">Previous</span>
    </span>
</button>
<button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
        </svg>
        <span class="sr-only">Next</span>
    </span>
</button>

</div>



<div class="bg-gray-100 h-screen">

</div>

</div>



@endsection