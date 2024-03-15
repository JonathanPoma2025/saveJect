@props(['titulo', 'tipo', 'nombre'])

<label for=""> {{$titulo}} </label>
<input name={{$nombre}} type={{$tipo}} class="border rounded-full border-lime-300">

@error($nombre)
<!-- <p>{{ $message }}</p>-->
@enderror
