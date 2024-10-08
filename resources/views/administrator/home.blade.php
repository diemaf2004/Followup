<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
    <style>
        #userMenu {
            top: 100%;
            margin-top: 0.5rem;
        }
    </style>
</head>
{{-- Barra Azul --}}
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
    <header class="bg-white text-[#009e00] px-5 py-2.5 flex justify-between items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">
        <div class="flex items-center">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
            <div class="flex flex-col">
                <h2 class="text-sm m-0 text-[#009e00]">Etapa</h2>
                <h2 class="text-sm m-0 text-[#009e00]">Seguimiento</h2>
            </div>
        </div>
        <div class="text-[8px] flex flex-col items-center justify-center absolute left-1/2 transform -translate-x-1/2">
            <h1 class="text-lg m-0 text-[#009e00] font-bold">ADMINISTRADOR</h1>
        </div>
        <div class="flex items-center">
            <h2 class="text-sm m-0 text-[#009e00] mr-5">Centro de Comercio y Servicios</h2>
            <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
        </div>
        </header>
    <nav class="bg-[#00324d] px-2.5 py-1.5 flex justify-start items-center relative z-10">
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span> <!-- Ejemplo de contador de notificaciones -->
        </button>
    {{-- FIN Barra Azul --}}
        <div id="notifMenu" class="hidden absolute top-full mt-2 left-0 w-64 bg-white border border-gray-300 rounded-lg shadow-lg z-20">
            <div class="p-4">
                <h2 class="text-sm font-bold">Notificaciones</h2>
                <ul>
                    <li class="mt-2">
                        <a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 2</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 3</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Inicio</div>
        <div class="relative ml-auto flex items-center ">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</div>
            <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-2 border-black" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
            <button id="menuButton" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            {{-- Menu --}}
            <div id="userMenu" class=" hidden absolute right-4  mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <div>
                            <p class="text-sm font-bold">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>
                            <p class="text-sm mt-2">Administrador</p>
                        </div>

                        <img src="{{ asset('img/user-icon.png') }}" alt="User Icon" class="w-10 h-10 rounded-full mr-3 mx-10 bg-white border-black border-2">
                    </div>
                    <ul>
                        <li class="mt-2"><a href="{{ route('administrator.Administrator-perfil') }}" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">Ver perfil</a></li>
                        <li class="mt-2"><a href="{{ route('administrator.home') }}" class="block text-black hover:bg-white p-2 rounded-lg">Inicio</a></li>
                        <li class="mt-2"><a href="{{ route('administrator.settings') }}" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                        <li class="mt-2"><a href="{{ route('administrator.apprentice') }}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Aprendices</a>
                            <ul class="hidden ml-4 mt-2 bg-[#EEEEEE] p-2 rounded-lg">
                                <li class="mt-2 font-bold text-black border-b border-gray-300 pb-2">APRENDICES</li>
                                <li class="mt-2"><a href="{{ route('administrator.apprentice')}}" class="block text-black hover:bg-white p-2 rounded-lg ">Lista de Aprendices que inician etapa productiva</a></li>
                                <li class="mt-2"><a href="{{ route('administrator.Agregar-aprendiz')}}" class="block text-black hover:bg-white p-2 rounded-lg ">Agregar Aprendices</a></li>
                            </ul></li>
                        <li class="mt-2"><a href="{{ route('administrator.instructor') }}" class="block text-black hover:bg-white p-2 rounded-lg">Instructores</a></li>
                        <li class="mt-2"><a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Plantillas</a>
                            <ul class="hidden ml-4 mt-2 bg-[#EEEEEE] p-2 rounded-lg">
                                <li class="mt-2 font-bold text-black border-b border-gray-300 pb-2">MODALIDAD</li>
                                <li class="mt-2"><a href="{{ route('administrator.template')}}"class="block text-black hover:bg-white p-2 rounded-lg">Pasantía</a></li>
                                <li class="mt-2"><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Vinculo Laboral</a></li>
                                <li><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Contrato de Aprendizaje</a>
                                    <ul class="hidden ml-4 mt-2 bg-[#D9D9D9] p-2 rounded-lg">
                                        <li class="mt-2"><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Ver Plantilla</a></li>
                                        <li class="mt-2"><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">+ Añadir Plantilla</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Unidad Productiva Familiar</a></li>
                                <li><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Proyecto Productivo Empresarial</a></li>
                            </ul></li>
                        <li class="mt-2"><a href="{{ route('administrator.graphic')}}" class="block text-black hover:bg-white p-2 rounded-lg">Graficas</a></li>
                    </ul>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                    </form>
            </div>
        </div>
    </nav>
        {{-- FIN Menu --}}


    {{-- HOME --}}
    <main class="flex-nowrap p-10 flex justify-center items-center bg-white">
        <div class="grid grid-cols-3 gap-20 bg-[#f0f0f0] border-2 border-[#2F3E4C] p-[72px] rounded-[20px] max-w-[100%] mx-auto shadow-[0_0_10px_rgba(0,0,0,0.8)]">

            <a href="{{ route('administrator.settings') }}" class="m-2.5 py-10 rounded-[15%] flex flex-col items-center text-center p-5 bg-white border-[3px] border-black w-56 h-56 hover:border-green-600">
                <img src="{{ asset('img/configuracion.png') }}" alt="Configuracion" class="w-[90px] h-[80px] mb-2.5">
                <span class="text-sm p-8">Configuración</span>
            </a>

            <a href="{{ route('administrator.instructor') }}" class="m-2.5 py-10 rounded-[15%] flex flex-col items-center text-center p-5 bg-white border-[3px] border-black w-56 h-56 hover:border-green-600">
                <img src="{{ asset('img/instructor.png') }}" alt="Instructores" class="w-[80px] h-[80px] mb-2.5">
                <span class="text-sm p-8">Instructores</span>
            </a>

            <!-- Botón de Aprendices -->
            <div class="relative m-2.5 py-10 rounded-[15%] flex flex-col items-center p-5 bg-white border-[3px] border-black w-56 h-56 hover:border-green-600">
                <a href="javascript:void(0);" id="toggleMenu1" class="relative z-10 flex flex-col items-center text-center">
                    <img src="{{ asset('img/aprendices.png') }}" alt="Aprendices" class="w-[80px] h-[80px] mb-2.5">
                    <span class="text-sm p-8">Aprendices</span>
                </a>
                <ul id="menu1" class="hidden absolute top-full left-1/2 transform -translate-x-1/2 mt-2 bg-[#D3D3D3] p-4 rounded-lg shadow-lg z-20 w-[300px]">
                    <li class="mt-2 font-bold text-black border-b border-gray-500 pb-2">APRENDICES</li>
                    <li class="mt-2">
                        <a href="{{ route('administrator.apprentice') }}" class="block text-black hover:bg-white p-2 rounded-lg">Lista de Aprendices que inician etapa productiva</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('administrator.Agregar-aprendiz') }}" class="block text-black hover:bg-white p-2 rounded-lg">Agregar Aprendices</a>
                    </li>
                </ul>
            </div>

            <a href="{{ route('administrator.reports') }}" class="m-2.5 rounded-[15%] flex flex-col items-center text-center py-10 p-5 bg-white border-[3px] border-black w-56 h-56 hover:border-green-600">
                <img src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones" class="w-[110px] h-[110px] mb-2.5">
                <span class="text-sm p-8">Notificaciones</span>
            </a>

            <a href="{{ route('administrator.graphic') }}" class="m-2.5 rounded-[15%] flex flex-col items-center text-center py-10 p-5 bg-white border-[3px] border-black w-56 h-56 hover:border-green-600">
                <img src="{{ asset('img/grafica.png') }}" alt="Graficas" class="w-[80px] h-[80px] mb-2.5">
                <span class="text-sm p-8">Graficas</span>
            </a>

            <!-- Botón de Plantillas -->
            <div class="relative m-2.5 py-10 rounded-[15%] flex flex-col items-center p-5 bg-white border-[3px] border-black w-56 h-56 hover:border-green-600">
                <a href="javascript:void(0);" id="toggleMenu2" class="relative z-10 flex flex-col items-center text-center">
                    <img src="{{ asset('img/plantilla.png') }}" alt="Plantilla" class="w-[80px] h-[80px] mb-2.5">
                    <span class="text-sm p-8">Plantilla</span>
                </a>
                <ul id="menu2" class="hidden absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 bg-[#D3D3D3] p-4 rounded-lg shadow-lg z-20 w-[300px]">
                    <li class="mt-2 font-bold text-black border-b border-gray-500 pb-2">MODALIDAD</li>
                    <li class="mt-2">
                        <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Pasantía</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Vinculo Laboral</a>
                    </li>
                    <li>
                        <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Contrato de Aprendizaje</a>
                        <ul class="hidden ml-4 mt-2 bg-[#D9D9D9] p-2 rounded-lg w-[250px]">
                            <li class="mt-2">
                                <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Ver Plantilla</a>
                            </li>
                            <li class="mt-2">
                                <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">+ Añadir Plantilla</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Unidad Productiva Familiar</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Proyecto Productivo Empresarial</a>
                    </li>
                </ul>
            </div>


        </div>
    </main>
    {{-- FIN HOME --}}
    <script>
        function toggleSublist(event) {
            event.preventDefault();
            const sublist = event.target.nextElementSibling;
            if (sublist.classList.contains('hidden')) {
                sublist.classList.remove('hidden');
            } else {
                sublist.classList.add('hidden');
            }
        }
    </script>
    <script>
        document.getElementById('toggleMenu1').addEventListener('click', function() {
            var menu = document.getElementById('menu1');
            menu.classList.toggle('hidden');
        });

        document.getElementById('toggleMenu2').addEventListener('click', function() {
            var menu = document.getElementById('menu2');
            menu.classList.toggle('hidden');
        });

        function toggleSublist(event) {
            event.preventDefault();
            var sublist = event.target.nextElementSibling;
            if (sublist) {
                sublist.classList.toggle('hidden');
            }
        }
    </script>
    <script src="{{ asset('js/SuperAdmin.js') }}"></script>
</body>
</html>
