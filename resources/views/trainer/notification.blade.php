<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
    <style>
        #userMenuTri {
            top: 100%;
            margin-top: 0.5rem;
        }
    </style>
</head>
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
    <header class="bg-white text-[#009e00] px-5 py-2.5 flex justify-between items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">
        <div class="flex items-center">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
            <div class="flex flex-col">
                <h2 class="text-sm m-0 text-[#009e00]">Etapa</h2>
                <h2 class="text-sm m-0 text-[#009e00]">Productiva</h2>
            </div>
        </div>
        <div class="text-[8px] flex flex-col items-center justify-center absolute left-1/2 transform -translate-x-1/2">
            <h1 class="text-lg m-0 text-[#009e00] font-bold">INSTRUCTOR</h1>
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
        <div id="notifMenu" class="hidden absolute top-full mt-2 left-0 w-64 bg-white border border-gray-300 rounded-lg shadow-lg z-20">
            <div class="p-4">
                <h2 class="text-sm font-bold">Notificaciones</h2>
                <ul>
                    <li class="mt-2">
                        <a href="{{ route('notification') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('notification') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 2</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('notification') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 3</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Notificacioness</div>
        <div class="relative ml-auto flex items-center ">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">Nombre Usuario</div>
            <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-2 border-black" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
            <button id="menuButtonTri" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div id="userMenuTri" class=" hidden absolute right-4  mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <div>
                            <p class="text-sm font-bold">Nombre Usuario</p>
                            <p class="text-sm mt-2">Instructor</p>
                        </div>

                        <img src="{{ asset('img/user-icon.png') }}" alt="User Icon" class="w-10 h-10 rounded-full mr-3 mx-10 bg-white border-black border-2">
                    </div>
                    <ul>
                        <a href="{{ route('username')}}" class="block text-center text-green-600 font-bold mt-4 bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">ver perfil</a>
                        <li class="mt-2"><a href="{{ route('icon')}}" class="block text-black hover:bg-white p-2 rounded-lg">Inicio</a></li>
                        <li class="mt-2"><a href="#" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                        <li class="mt-2"><a href="#" class="block text-black hover:bg-white p-2 rounded-lg">Permisos</a></li>
                        <li class="mt-2"><a href="{{ route('apprentice') }}" class="block text-black hover:bg-white p-2 rounded-lg">lista Aprendices</a></li>
                        <li class="mt-2"><a href="{{ route('report') }}" class="block text-black hover:bg-white p-2 rounded-lg">Reportes</a></li>
                    </ul>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                    </form>
            </div>
        </div>
    </nav>
    <div class="w-full flex justify-between items-center mt-6">
        <a href="{{ route('icon') }}" class="ml-4">
            <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
        </a>
    </div>

    <div class="w-full flex justify-center mt-4 items-center mb-2 bg-white">
        <form action="#" method="GET" class="flex items-center">
            <input placeholder="Buscar..." class="px-2 py-1 text-sm border border-black rounded-full w-96">
            <button type="submit" aria-label="Buscar" class="p-2 bg-transparent border-none cursor-pointer -ml-10">
                <img src="{{ asset('img/lupa.png') }}" alt="Buscar" class="w-4 h-auto">
            </button>
        </form>
    </div>


    <div class="w-auto flex justify-start m-2 pl-56 items-center">
        <a href="{{ route('report')}}" type="submit" class="bg-red-600 hover:bg-red-800 text-white p-1 rounded">Redactar</a>
    </div>
    <div class="flex justify-center">
        <main class="bg-white m-4 p-4 rounded-lg shadow-[0_0_10px_rgba(0,0,0,0.8)] border-[#2F3E4C] w-2/3 items-center">
            <div class="flex justify-center">
                <button type="submit" class="hover:bg-gray-200 m-4 pr-28 pl-28 p-2 rounded">Recibidos</button>
                <button type="submit" class="hover:bg-gray-200 m-4 pl-28 pr-28 p-2 rounded">Enviados</button>
            </div>
            <ul class="bg-white shadow overflow-hidden sm:rounded-md">
                <li class="border-t border-gray-200">
                    <div class="flex justify-between items-center p-4 hover:bg-gray-100">
                        <div>
                            <h2 class="text-lg font-bold">Título de la Notificación</h2>
                            <p class="text-gray-600">Asunto de la Notificación</p>
                            <p class="text-gray-600">Fecha</p>
                        </div>
                        <div class="flex items-center">
                            <button class="bg-[#009e00] text-white p-2 rounded ml-2">Ver</button>
                            <button class="bg-red-500 text-white p-2 rounded ml-2">Eliminar</button>
                        </div>
                    </div>
                </li>
                <li class="border-t border-gray-200">
                    <div class="flex justify-between items-center p-4 hover:bg-gray-100">
                        <div>
                            <h2 class="text-lg font-bold">Título de la Notificación</h2>
                            <p class="text-gray-600">Cuerpo de la Notificación</p>
                            <p class="text-gray-600">Fecha</p>
                        </div>
                        <div class="flex items-center">
                            <button class="bg-[#009e00] text-white p-2 rounded ml-2">Ver</button>
                            <button class="bg-red-500 text-white p-2 rounded ml-2">Eliminar</button>
                        </div>
                    </div>
                </li>
                <li class="border-t border-gray-200">
                    <div class="flex justify-between items-center p-4 hover:bg-gray-100">
                        <div>
                            <h2 class="text-lg font-bold">Título de la Notificación</h2>
                            <p class="text-gray-600">Cuerpo de la Notificación</p>
                            <p class="text-gray-600">Fecha</p>
                        </div>
                        <div class="flex items-center">
                            <button class="bg-[#009e00] text-white p-2 rounded ml-2">Ver</button>
                            <button class="bg-red-500 text-white p-2 rounded ml-2">Eliminar</button>
                        </div>
                    </div>
                </li>
                <li class="border-t border-gray-200">
                    <div class="flex justify-between items-center p-4 hover:bg-gray-100">
                        <div>
                            <h2 class="text-lg font-bold">Título de la Notificación</h2>
                            <p class="text-gray-600">Cuerpo de la Notificación</p>
                            <p class="text-gray-600">Fecha</p>
                        </div>
                        <div class="flex items-center">
                            <button class="bg-[#009e00] text-white p-2 rounded ml-2">Ver</button>
                            <button class="bg-red-500 text-white p-2 rounded ml-2">Eliminar</button>
                        </div>
                    </div>
                </li>
                <li class="border-t border-gray-200">
                    <div class="flex justify-between items-center p-4 hover:bg-gray-100">
                        <div>
                            <h2 class="text-lg font-bold">Título de la Notificación</h2>
                            <p class="text-gray-600">Cuerpo de la Notificación</p>
                            <p class="text-gray-600">Fecha</p>
                        </div>
                        <div class="flex items-center">
                            <button class="bg-[#009e00] text-white p-2 rounded ml-2">Ver</button>
                            <button class="bg-red-500 text-white p-2 rounded ml-2">Eliminar</button>
                        </div>
                    </div>
                </li>
            </ul>
        </main>
    </div>
    <script src="{{ asset('js/Trainer.js') }}"></script>
</body>
</body>
</html>
