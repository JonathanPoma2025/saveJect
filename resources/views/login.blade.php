<x-nav/>
<body class="bg-slate-950">
    <x-layout>

        <!-- TÍTULO -->
        <h1 class="text-3xl text-white m-4 font-bold text-center">Sign in</h1>

        <!-- FORMULARIO 1 -->
        <form action="/login" method="POST">
            @csrf

            <!-- CORREO -->
            <div>
                <x-input titulo="Email" tipo="text" nombre="email" />
            </div>

            <!-- CONTRASEÑA -->
            <div>
                <x-input titulo="Password" tipo="password" nombre="password" />
            </div>

            <!-- BOTÓN -->
            <button type="submit">Log In</button>

        </form>

    </x-layout>

</body>
