<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperAdmin Home</title>
    <style>
        /* BARRA AZUL */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC",
                "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei",
                "Source Han Sans CN", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 20px;
            background-color: #04324d;
            color: #ffffff;
            z-index: 1;
            position: relative;
            margin-top: 74px; /* Ajusta la posición del encabezado hacia abajo */
        }

        header h1 {
            color: #009E00;
            margin-top: -110px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .text-1, .text-2 {
            color: #009E00;
            position: absolute;
            left: 5%; /* Posición horizontal en relación al contenedor padre */
            font-family: 'DM Sans', sans-serif; /* Establece el tipo de letra */
            font-size: 12px; /* Tamaño de la letra */
        }

        .text-1 {
            top: -55px; /* Ajustar la posición desde la parte superior */
        }

        .text-2 {
            top: -35px; /* Ajustar la posición desde la parte superior */
        }
        
        .logo {
            position: absolute;
            top: -65px; 
            left: 20px; 
            width: 50px; 
            height: auto;
        }

        .logo-sena {
            position: absolute;
            top: -55px; 
            right: 20px; 
            width: 50px; 
            height: auto;
        }
        #notifButton {
            position: absolute; /* Cambiado a absoluto para colocarlo en la barra azul */
            top: 10px; /* alto */
            right: 1450px; /* lado */
            background: none;
            border: none;
            cursor: pointer;
            z-index: 1000;
            
        }

        .notifications {
            display: block;
            width: 54px; /* tamaño de la imagen */
            height: auto; /* Mantiene la proporción de la imagen */
            filter: invert(1); /* Invierte los colores de la imagen */
        }
        .Flecha {
            display: block;
            position: absolute;
            width: 24px; /* tamaño de la imagen */
            height: auto; /* Mantiene la proporción de la imagen */
            margin-left: -1470px; /* lados */
            margin-top: 40px; /* altura */
        }
        .text-ventana {
            color: #ffffff; /* Color del texto para que contraste con el fondo */
            font-size: 20px; /* Tamaño del texto para que sea visible */
            position: absolute;
            font-family: 'DM Sans', sans-serif;
            left: 50%; /* Ajusta la posición horizontal según sea necesario */
            transform: translateX(-50%); /* Centra el texto horizontalmente */
            top: 0px; /* Ajusta la posición vertical según sea necesario */
        }
        
        /* FIN BARRA AZUL */


        /* MENU */
        #header {
            margin: auto;
            font-family: 'DM Sans', sans-serif;
            background-color: #D9D9D9;
            border-radius: 8px;
            width: 250px;
            position: absolute;
            margin-left: 1200px; /* lados */
            margin-top: 0px; /* altura */
        }
        .profile-info {
            margin-bottom: 20px;
            text-align: center;
        }
        .icon {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
            margin-left: 14px; /* lados */
            margin-top: 1px; /* altura */
        }
        .username {
            font-weight: bold;
            margin-left: -120px; /* lados */
        }
        .role {
            display: block;
            margin-bottom: 10px;
            margin-left: -80px; /* lados */
        }
        .profile-link {
            display: block;
            background-color: #ffffff;
            color: #38A900;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 20px;
            outline: 1px solid #000000; /* Borde de 1px de color negro */
        }
        .profile-link:hover {
            background-color: #b7d3b3;
        }
        #menu-toggle {
            background: none;
            border: none;
            cursor: pointer;
            position: absolute;
            top: -30px; /* Ajusta la distancia hacia arriba */
            right: -600px; /* Ajusta la distancia hacia los lados */
            width: 30px;
            height: 15px;
            z-index: 1000; /* Asegúrate de que esté por encima de otros elementos */
        }
        .icon-flecha {
            width: 100%;
            height: 100%;
            margin-left: -1100px; /* lados */
            margin-top: 0px; /* altura */
        }
        .nav {
            list-style: none;
            padding: 20PX;
            display: none; /* Ocultamos el menú inicialmente */
            
        }
        .nav > li {
            margin-bottom: 10px;
            position: relative;
        }
        .nav li a {
            color: #1E1E1E;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            border-radius: 5px;
        }
        .nav li a:hover {
            background-color: #868686;
            color: white;
        }
        .nav li ul {
            list-style: none;
            display: none;
            position: absolute;
            left: -130%;
            top: 0;
            min-width: 200px;
            background-color: #e0e0e0;
            border-radius: 8px;
            padding: 10px;
            margin-left: -10px;
            z-index: 100; /* Para que quede encima de otros objetos */
        }
        
        .nav li:hover > ul {
            display: block;
        }
        .nav li ul li {
            margin-bottom: 5px;
            position: relative;
        }
        .nav li ul li ul {
            right: -200px;
            top: 0;
            left: 100%;
        }
        .logout-link {
            display: block;
            background-color: #d9e9d6;
            color: green;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .logout-link:hover {
            background-color: #b7d3b3;
        }

        /* FIN MENU */
        

        .container {
            width: 100%;
            max-width: 1200px;
            height: 500px; /* Altura fija para alargar el contenedor verticalmente */
            background-color: #e0e0e0;
            border: 3px solid #04324d8b;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-left: 150px; /* lados */
            margin-top: 30px; /* altura */
            font-family: 'DM Sans', sans-serif;
        }
        .email-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #212121;
        }
        .email-item img {
            width: 50px;
            height: 45px;
            margin-right: 10px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .header-item {
            flex: 1;
            text-align: center;
            font-weight: bold;
            padding: 10px;
            border-bottom: 1px solid #000;
            cursor: pointer;
        }

        .content {
            height: 400px; /* Ajusta esta altura según sea necesario */
            background-color: #d4d4d4;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            justify-content: flex-end; /* Alinea los botones a la derecha */
           
        }

        .buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            
        }


        .buttons .confirm {
            background-color: #D9D9D9;
            border: 1px solid #000000; /* Borde de 2px de grosor con color #009E00 */
            margin-right: 10px; /* Espacio a la derecha del botón */
            border-radius: 10px;
        }

        .buttons .actual {
            background-color: #009E00;
            border-radius: 10px;
            
        }
        
        


    </style>
    <script>
        function navigateTo(page) {
            window.location.href = page;
        }
    </script>
</head>
<body>
    {{-- Inicio barra azul --}}
    <header>
        
        <h1>ADMINISTRADOR</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            

            <img class="logo" src="{{ asset('img/logo.png') }}" alt="Logo">
            <img class="logo-sena" src="{{ asset('administrator/logo-sena.png') }}" alt="Logo-sena">
            
            <h2 class="text-1">Etapa</h2>
            <h2 class="text-2">Seguimiento</h2>
            <h2 class="text-ventana">Reportes</h2> 
        </form>
        <button id="notifButton">
            <img class="notifications" src="{{ asset('administrator/notificaciones.png') }}" alt="notificaciones">
        </button> 
        <a href="{{ route('administrator.home') }}" alt="flecha">
            <img class="Flecha" src="{{ asset('img/flecha.png') }}" alt="Flecha">
        </a>
        
    </header>
        {{-- Termina barra azul --}}


        {{-- MENU --}}
    <div id="header">
        <button id="menu-toggle">
            <img class="icon-flecha" src="{{ asset('administrator/_.png') }}" alt="Icon-flecha">
        </button>
        
        <ul class="nav" id="nav-menu">
            <div class="profile-info">
                <img class="icon" src="{{ asset('administrator/user-icon.png') }}" alt="Icono">
                <span class="username">Nombre usuario</span><br>
                <span class="role">Administrador</span><br>
                <a href="{{ route('administrator.reports')}}" class="profile-link">Ver Perfil</a>
            </div>
            <li><a href="{{ route('administrator.home')}}">Inicio</a></li>
            <li><a href="{{ route('administrator.settings')}}">Configuración</a></li>
            <li><a href="{{ route('administrator.apprentice')}}">Aprendices</a>
                <ul>
                    <li>APRENDICES<a href="{{ route('administrator.apprentice')}}">Lista de Aprendices que inician etapa productiva</a></li>
                    <li><a href="{{ route('administrator.apprentice')}}">Agregar Aprendices</a></li>
                </ul>
            </li>
            <li><a href="{{ route('administrator.instructor')}}">Instructores</a></li>
            <li><a href="{{ route('administrator.template')}}">Plantillas</a>
                <ul>
                    <li>MODALIDAD<a href="{{ route('administrator.template')}}">Pasantía</a></li>
                    <li><a href="{{ route('administrator.template')}}">Vinculo Laboral</a></li>
                    <li><a href="{{ route('administrator.template')}}">Contrato de Aprendizaje</a>
                        <ul>
                            <li><a href="{{ route('administrator.template')}}">Ver Plantilla</a></li>
                            <li><a href="{{ route('administrator.template')}}">+ Añadir Plantilla</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('administrator.template')}}">Unidad Productiva Familiar</a></li>
                    <li><a href="{{ route('administrator.template')}}">Proyecto Productivo Empresarial</a></li>
                </ul>
            </li>
            <li><a href="{{ route('administrator.graphic')}}">Gráficos</a></li>
            <a href="{{ route('administrator.home')}}" class="logout-link">Cerrar Sesión</a>
        </ul>
        
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var menu = document.getElementById('nav-menu');
            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'block';
            } else {
                menu.style.display = 'none';
            }
        });
    </script>
    
    {{-- FIN MENU --}}
    <div class="container">
        <div class="header">
            <div class="header-item" onclick="showContent('recibidos')">Recibidos</div>
            <div class="header-item" onclick="showContent('enviados')">Enviados</div>
        </div>
        <div class="content" id="content"></div>
        <div class="buttons">
            <button type="submit" class="confirm" onclick="window.location.href='{{ route('administrator.home') }}'">CONFIRMAR</button>
            <button type="button" class="actual">ACTUALIZAR</button>
        </div>
    </div>
    <script>
        function showContent(type) {
            const contentDiv = document.getElementById('content');
            contentDiv.innerHTML = ''; // Limpiar contenido actual
    
            if (type === 'recibidos') {
                contentDiv.innerHTML = `
                    <div class="email-item">
                        <a href="/administrator/email/">
                            <img src="icon-email.png" alt="Email Icon">
                            <span>Email recibido 1</span>
                        </a>
                    </div>
                    <div class="email-item">
                        <a href="/administrator/email/">
                            <img src="icon-email.png" alt="Email Icon">
                            <span>Email recibido 2</span>
                        </a>
                    </div>
                    <div class="email-item">
                        <a href="/administrator/email/">
                            <img src="icon-email.png" alt="Email Icon">
                            <span>Email recibido 3</span>
                        </a>
                    </div>
                    <div class="email-item">
                        <a href="/administrator/email/">
                            <img src="icon-email.png" alt="Email Icon">
                            <span>Email recibido 4</span>
                        </a>
                    </div>
                    <div class="email-item">
                        <a href="/administrator/email/">
                            <img src="icon-email.png" alt="Email Icon">
                            <span>Email recibido 5</span>
                        </a>
                    </div>
                    
                    
                `;
            } else if (type === 'enviados') {
                contentDiv.innerHTML = `
                    <div class="email-item">
                        <a href="/administrator/email/">
                            <img src="icon-email.png" alt="Email Icon">
                            <span>Email enviado 1</span>
                        </a>
                    </div>
                    <div class="email-item">
                        <a href="/administrator/email/">
                            <img src="icon-email.png" alt="Email Icon">
                            <span>Email enviado 2</span>
                        </a>
                    </div>
                    <div class="email-item">
                        <a href="/administrator/email/">
                            <img src="icon-email.png" alt="Email Icon">
                            <span>Email enviado 3</span>
                        </a>
                    </div>
                    <div class="email-item">
                        <a href="/administrator/email/">
                            <img src="icon-email.png" alt="Email Icon">
                            <span>Email enviado 4</span>
                        </a>
                    </div>
                    <div class="email-item">
                        <a href="/administrator/email/">
                            <img src="icon-email.png" alt="Email Icon">
                            <span>Email enviado 5</span>
                        </a>
                    </div>
                `;
            }
        }
    </script>

</body>
</html>