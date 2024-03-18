<x-layout>

     <!-- TÍTULO -->
     <h1 class="">Sign up</h1>

     <!-- FORMULARIO 1 -->
     <form action="/register" method="POST">
         @csrf

         <!-- NAME -->
         <div>
            <x-input titulo="Name" tipo="text" nombre="name"/>
         </div>

         <!-- EMAIL -->
         <div>
            <x-input titulo="Email" tipo="text" nombre="email"/>
         </div>

          <!-- CONTRASEÑA -->
         <div>
            <x-input titulo="Password" tipo="password" nombre="password"/>
         </div>

          <!-- BIRTHDATE -->
          <div>
            <x-input titulo="Birthdate" tipo="date" nombre="birthdate"/>
         </div>


         <!-- BOTÓN -->
         <button type="submit">Create Account</button>

     </form>

</x-layout>
