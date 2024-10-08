<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Etapa Productiva</title>
    <style>
        /* Aquí se pueden agregar estilos personalizados si es necesario */
        #userMenu, #notifMenu {
            display: none;
            position: absolute;
            z-index: 20;
        }

        #userMenu.show, #notifMenu.show {
            display: block;
        }

        #userMenu {
            right: 0;
            top: 100%;
        }

        #notifMenu {
            left: 0;
            top: 100%;
        }
    </style>
</head>
<body class="font-sans bg-white m-0 flex flex-col min-h-screen">
    <!-- Header -->
    <header class="bg-white text-[#009e00] px-5 py-2.5 flex justify-between items-center border-t-[5px] border-white border-b border-b-[#e0e0e0]">
        <div class="flex items-center">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
            <div class="flex flex-col">
                <h2 class="text-sm m-0 text-[#009e00]">Etapa</h2>
                <h2 class="text-sm m-0 text-[#009e00]">Productivo</h2>
            </div>
        </div>
        <div class="text-center absolute left-1/2 transform -translate-x-1/2">
            <h1 class="text-lg m-0 text-[#009e00] font-bold">APRENDIZ</h1>
        </div>
        <div class="flex items-center">
            <h2 class="text-sm m-0 text-[#009e00] mr-5">Centro de Comercio y Servicios</h2>
            <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
        </div>
    </header>

    <!-- Navbar -->
    <nav class="bg-[#00324d] px-2.5 py-1.5 flex justify-start items-center relative z-10">
        <!-- Notification Button -->
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span>
        </button>

        <!-- Notification Dropdown -->
        <div id="notifMenu" class="absolute bg-white border border-gray-300 rounded-lg shadow-lg w-64 hidden z-20">
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

        <!-- Central Button -->
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Inicio</div>

        <!-- User Menu -->
        <div class="relative ml-auto flex items-center">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</div>
            <button id="menuButton" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>

            <!-- User Dropdown -->
            <div id="userMenu" class="bg-gray-200 border border-gray-300 rounded-lg shadow-lg w-64 hidden">
                <div class="p-4">

                            <p class="text-sm mb-2 font-bold">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>
                            <p class="text-sm">Aprendiz</p>
                            <p class="text-sm">Programa: ADSO</p>
                            <p class="text-sm">Ficha: 2711891</p>

                    </div>
                    <ul>
                        <li><a href="{{ route('apprentice.profile') }}" class="block text-center m-4 text-green-600 font-bold bg-white border hover:bg-green-600 hover:text-white border-green-600 rounded-lg py-1">Ver perfil</a></li>
                        <li><a href="{{ route('apprentice.index') }}" class="block text-black hover:bg-white p-4 rounded-lg">Inicio</a></li>
                        <li><a href="{{ route('apprentice.calendar') }}" class="block text-black hover:bg-white p-4 rounded-lg">Calendario</a></li>
                    </ul>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="block text-center m-4 text-green-600 font-bold bg-white border hover:bg-green-600 hover:text-white border-green-600 rounded-lg py-1 w-56">Cerrar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    {{-- <meta charset="UTF-8">
    <link rel="logo-icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet"> --}}

    <style>
<<<<<<< HEAD
         header{
=======
         /* header{
>>>>>>> 211ed841be84a7c08e156e97bb9635c5db7ab1df
            background: none;
            background-color: transparent;
        }
        .head-container{
            position: absolute;
width: 100%;
height: 74px;
left: 0%;
top: 98px;

           background: #04324D;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10px;
            box-sizing: border-box;
        }
 .logo-container h2 {
    position: absolute;
    width: 100%;
    max-width: 333px;
    height: 34px;
    left: 50%;
    top: 39px;
    transform: translateX(-50%);

    font-family: 'DM Sans', sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 52px;
    display: flex;
    align-items: center;
    text-align: center;

    color: #009E00;

        }
        .logo-container h1 {
            margin-right: 100px;
            color: #009E00;
        }
        .head-container p{
            background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 20px;
    position: absolute;
    width: 307px;
    height: 36px;
    left: 76%;
    font-family: 'DM Sans', sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 36px;
    margin: 0 auto;
        }
        .user{
            position: absolute;
    width: 3rem;
    height: 3rem;
    right: 3%;
    top: 50%;
    transform: translateY(-50%);
    background: url(image.png) no-repeat center / contain;


        }
        .dropdown {
                position: relative;
            display: inline-block;
            left: 97%;
            margin-left: 10px;
            color: #FFFFFF;

        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 0;
    left: auto;

        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a: {
            background-color: #f1f1f1;
        }
        .dropdown .dropbtn {
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;

        }

        .show {
            display: block;
        }
        .notification{
            color:#fff;
            position: absolute;
            width: 42px;
            height: 42px;
           left: 21px;
           margin: 0 10px;


background: url(image);
margin-right: 10px;

        } */
         .calendar-container {
    position: absolute;
    width: 100%;
    height: 38px;
    left: 0%;
    top: 20%;
    background: #D9D9D9;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}

.calendar-container h3 {
    position: relative;
    width: 476px;
    height: 26px;
    left: 84px;
    font-family: 'DM Sans', sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 36px;
    display: flex;
    align-items: center;
    color: #000000;
    margin: 0 10px;
}

.back-button {
    background-color: transparent;
    color: #000000;
    font-style: normal;
    position: absolute;
    width: 27px;
    height: 27px;
    left: 40px;
    top: -16px;
    padding: 15px;
    text-align: center;
    font-size: 32px;
    cursor: pointer;
    text-decoration: none;
}

#calendar {
    position: absolute;
    width: 1054px;
    height: 600px;
    left: 10%;
    top: 28%;
    background: #D9D9D9;
    margin: 0 auto;
}

.fc .fc-daygrid-day {
    height: 150px;
    padding: 60px;
}

.fc .fc-col-header-cell {
    font-size: 15px;
}

.fc .fc-daygrid-day-number {
    font-size: 16px;
}

.fc .fc-daygrid-event {
    font-size: 14px;
}

.fc-day-other {
    visibility: hidden;
}


@media (max-width: 1024px) {
    #calendar {
        width: 90%;
        height: auto;
        left: 5%;
    }

    .calendar-container h3 {
        width: 70%;
        font-size: 18px;
    }

    .fc .fc-daygrid-day {
        height: auto;
        padding: 40px;
    }

    .fc .fc-col-header-cell {
        font-size: 14px;
    }

    .fc .fc-daygrid-day-number {
        font-size: 14px;
    }

    .fc .fc-daygrid-event {
        font-size: 12px;
    }
}

@media (max-width: 768px) {
    #calendar {
        width: 95%;
        left: 2.5%;
    }

    .calendar-container h3 {
        width: 80%;
        font-size: 16px;
        left: 10px;
    }

    .back-button {
        left: 10px;
        top: -10px;
        font-size: 28px;
    }

    .fc .fc-daygrid-day {
        padding: 30px;
    }

    .fc .fc-col-header-cell {
        font-size: 13px;
    }

    .fc .fc-daygrid-day-number {
        font-size: 12px;
    }

    .fc .fc-daygrid-event {
        font-size: 11px;
    }
}

@media (max-width: 480px) {
    .calendar-container {
        top: 20%;
        height: auto;
    }

    .calendar-container h3 {
        width: 90%;
        font-size: 14px;
        left: 5px;
    }

    .back-button {
        left: 5px;
        top: -8px;
        font-size: 26px;
    }

    #calendar {
        width: 100%;
        left: 0;
        top: 25%;
        padding: 0 10px;
    }

    .fc .fc-daygrid-day {
        padding: 20px;
    }

    .fc .fc-col-header-cell {
        font-size: 12px;
    }

    .fc .fc-daygrid-day-number {
        font-size: 10px;
    }

    .fc .fc-daygrid-event {
        font-size: 10px;
    }
}
@media (max-width: 1024px) {
    #calendar {
        width: 90%;
        height: auto;
        left: 5%;
    }

    .calendar-container h3 {
        width: 70%;
        font-size: 18px;
    }

    .fc .fc-daygrid-day {
        height: auto;
        padding: 40px;
    }

    .fc .fc-col-header-cell {
        font-size: 14px;
    }

    .fc .fc-daygrid-day-number {
        font-size: 14px;
    }

    .fc .fc-daygrid-event {
        font-size: 12px;
    }
}

@media (max-width: 768px) {
    #calendar {
        width: 95%;
        left: 2.5%;
    }

    .calendar-container h3 {
        width: 80%;
        font-size: 16px;
        left: 10px;
    }

    .back-button {
        left: 10px;
        top: -10px;
        font-size: 28px;
    }

    .fc .fc-daygrid-day {
        padding: 30px;
    }

    .fc .fc-col-header-cell {
        font-size: 13px;
    }

    .fc .fc-daygrid-day-number {
        font-size: 12px;
    }

    .fc .fc-daygrid-event {
        font-size: 11px;
    }
}

@media (max-width: 480px) {
    .calendar-container {
        top: 15%;
        height: auto;
    }

    .calendar-container h3 {
        width: 90%;
        font-size: 14px;
        left: 5px;
    }

    .back-button {
        left: 5px;
        top: -8px;
        font-size: 26px;
    }

    #calendar {
        width: 100%;
        left: 0;
        padding: 0 10px;
    }

    .fc .fc-daygrid-day {
        padding: 20px;
    }

    .fc .fc-col-header-cell {
        font-size: 12px;
    }

    .fc .fc-daygrid-day-number {
        font-size: 10px;
    }

    .fc .fc-daygrid-event {
        font-size: 10px;
    }
}

    </style>
</head>
<body>
    {{-- <header>
        <div class="logo-container">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="logo">
            <h1>Etapa Seguimiento</h1>
            <h2>APRENDIZ</h2>
        </div>
        <div class="flex items-center">
            <h2 class="text-sm m-0 text-[#009e00] mr-5">Centro de Comercio y Servicios</h2>
            <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
        </div>
        </header>

    <div class="head-container">
        <img src="{{asset('img/notificaciones.png')}}" alt="notification" class='notification'>
        <p>Nombre de Usuario</p>
        <img src="{{asset('img/user-icon.png')}}" alt="user" class='user'>

        <div class="dropdown">
        <button class="dropbtn"><</button>
        <div class="dropdown-content">
            <a href="name">Astrid Dayana Cantero</a>
            <a href="rol">Aprendiz</a>
            <a href="programa">Programa: Adso</a>
            <a href="ficha">Numero Ficha:2711891</a>
            <br>
            <a href="#option1">Inicio</a>
            <a href="#option2">Calendario</a>
            <br>
            <a href="#option3">Cerrar Sesión</a>
             </div>
        </div>
    </div> --}}
    <div class="calendar-container">
        <h3>Calendario (Agenda)</h3>
        {{-- <a href="{{ route('apprentice.index') }}" class="back-button">&#60; </a> --}}

    </div>
    <div id="calendar"></div>


<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            headerToolbar: {
                left: 'prev',
                center: 'title',
                right: 'dayGridMonth'
            },
            locale: 'es',
            events: [
            ],
            editable: true,
                selectable: true,
                dayMaxEvents: true,
                fixedWeekCount: false
        });
        calendar.render();
    });
</script>


    <script>
        document.querySelector('.dropbtn').addEventListener('click', function() {
          document.querySelector('.dropdown-content').classList.toggle('show');
       });

       // Close the dropdown if the user clicks outside of it
       window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
             for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                   openDropdown.classList.remove('show');
                }
                }
           }
        }
      </script>


</body>
</html>
