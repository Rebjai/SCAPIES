<form method="POST" action="{{ route('general_info') }}">
    @csrf

    <div>
        <x-label for="nombre" :value="__('Nombre')" />
        <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="$alumno?old('nombre')?old('nombre'):$alumno->nombre:$user->name" required autocomplete="nombre" />
    </div>
    @error('nombre')
    <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
    @enderror

    <div>
        <x-label for="apellido_paterno" :value="__('Apellido Paterno')" />

        <x-input id="apellido_paterno" class="block mt-1 w-full" type="text" name="apellido_paterno" :value="old('apellido_paterno')?old('apellido_paterno'):$alumno->apellido_paterno" required autocomplete="apellido_paterno" />
    </div>
    @error('apellido_paterno')
    <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
    @enderror

    <div>
        <x-label for="apellido_materno" :value="__('Apellido Materno')" />

        <x-input id="apellido_materno" class="block mt-1 w-full" type="text" name="apellido_materno" :value="old('apellido_materno')?old('apellido_materno'):$alumno->apellido_materno" required autocomplete="apellido_materno" />
    </div>

    @error('apellido_materno')
    <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
    @enderror

    <div>

        <x-label for="genero" :value="__('Género')" class="my-4 " />
        <div class="flex justify-start -mx-2">
            <div class="mx-2 flex">

                <input id="femenino" class="ml-2 mr-2" type="radio" name="genero" value="0" required {{ old('genero',$alumno->genero)==false ? 'checked' : '' }} />
                <x-label for="femenino" :value="__('Femenino')" />
            </div>
            <div class="mx-2 flex">

                <input id="masculino" class="ml-2 mr-2" type="radio" name="genero" value="1" required {{ old('genero',$alumno->genero)!=false ? 'checked' : '' }} />
                <x-label for="masculino" :value="__('Masculino')" />
            </div>
        </div>
        @error('genero')
        <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <x-label for="curp" :value="__('CURP')" />

        <x-input id="curp" class="block mt-1 w-full" type="text" name="curp" :value="old('curp')? old('curp'):$alumno->curp" required autocomplete="curp" />
        @error('curp')
        <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <x-input id="correo" class="block mt-1 w-full" type="hidden" name="correo" :value="$user->email" required />
        <x-label for="correo_display" :value="__('Correo electrónico')" />
        <x-input id="correo" class="block mt-1 w-full" type="email" name="correo_display" :value="$user->email" required disabled="true" />
    </div>
    @error('correo')
    <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
    @enderror
    <div>
        <x-label for="telefono" :value="__('Teléfono')" />

        <x-input id="telefono" class="block mt-1 w-full" type="tel" name="telefono" :value="old('telefono')?old('telefono'):$alumno->telefono" required autocomplete="telefono" />
    </div>
    @error('telefono')
    <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
    @enderror


    <div class="flex justify-end mt-4">
        <x-button>
            {{ __('Guardar') }}
        </x-button>
    </div>
</form>