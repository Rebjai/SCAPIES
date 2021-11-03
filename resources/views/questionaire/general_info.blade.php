<form method="POST" action="{{ route('questionaire.general_info') }}">
    @csrf

    <div>
        <x-label for="name" :value="__('Nombre')" />

        <x-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required autocomplete="name" />
    </div>

    <div>
        <x-label for="last_name" :value="__('Apellido Paterno')" />

        <x-input id="last_name" class="block mt-1 w-full" type="last_name" name="last_name" :value="old('last_name')" required autocomplete="last_name" />
    </div>

    <div>
        <x-label for="middle_name" :value="__('Apellido Materno')" />

        <x-input id="middle_name" class="block mt-1 w-full" type="middle_name" name="middle_name" :value="old('middle_name')" required autocomplete="middle_name" />
    </div>

    <div>

        <x-label for="gender" :value="__('Género')" class="my-4 " />
        <div class="flex justify-start -mx-2">
            <div class="mx-2 flex">

                <x-input id="femenino" class="ml-2 mr-2" type="radio" name="genero" :value="old('genero')" required />
                <x-label for="femenino" :value="__('Femenino')" />
            </div>
            <div class="mx-2 flex">

                <x-input id="masculino" class="ml-2 mr-2" type="radio" name="genero" :value="old('genero')" required />
                <x-label for="masculino" :value="__('Masculino')" />
            </div>
        </div>
    </div>
    <div>
        <x-label for="curp" :value="__('CURP')" />

        <x-input id="curp" class="block mt-1 w-full" type="curp" name="curp" :value="old('curp')" required autocomplete="curp" />
    </div>
    <div>
        <x-label for="email" :value="__('Correo electrónico')" />

        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required disabled="true" />
    </div>
    <div>
        <x-label for="telefono" :value="__('Teléfono')" />

        <x-input id="telefono" class="block mt-1 w-full" type="telefono" name="telefono" :value="old('telefono')" required autocomplete="telefono" />
    </div>


    <div class="flex justify-end mt-4">
        <x-button>
            {{ __('Guardar') }}
        </x-button>
    </div>
</form>