<div>

     <!-- TÍTULO -->
     <h1 class="">Sign up</h1>

     <!-- FORMULARIO 1 -->
     <form action="/register" method="POST">
         @csrf

         <!-- NAME -->
         <div>
             <label for="">Name</label>
             <input name="name" type="text">
             @error('name')
                <span> {{ $message }} </span>
             @enderror
         </div>

         <!-- EMAIL -->
         <div>
             <label for="">Email</label>
             <input name="email" type="text">
             @error('email')
                <span> {{ $message }} </span>
             @enderror
         </div>

          <!-- CONTRASEÑA -->
         <div>
            <label for="">Password</label>
            <input name="password" type="password">
            @error('password')
                <span> {{ $message }} </span>
             @enderror
         </div>

          <!-- BIRTHDATE -->
          <div>
            <label for="">Birthdate</label>
            <input name="birthdate" type="date">
            @error('birthdate')
                <span> {{ $message }} </span>
             @enderror
         </div>


         <!-- BOTÓN -->
         <button type="submit">Create Account</button>

     </form>

</div>
