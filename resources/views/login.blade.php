<x-nav/>
<body class="bg-verde1">
    <x-layout>

        <!-- TÍTULO -->
        <h1 class="text-6xl text-verde4 m-16 font-bold text-center">Sign in</h1>

        <!-- FORMULARIO 1 -->
        <form class="text-center text-white m-27 " action="/login" method="POST">
            @csrf

            <!-- CORREO -->
            <div class="m-24">
                <x-input  titulo="Email" tipo="text" nombre="email" />
            </div>

            <!-- CONTRASEÑA -->
            <div>
                <x-input titulo="Password" tipo="password" nombre="password" />
            </div>

            <!-- BOTÓN -->
            <button class="m-24" type="submit">Log In</button>

        </form>

    </x-layout>

</body>
