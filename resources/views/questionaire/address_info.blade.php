<form method="POST" action="{{ route('questionaire.address_info') }}">
    @csrf

    <div>
        <x-label for="calle" :value="__('Calle')" />

        <x-input id="calle" class="block mt-1 w-full" type="calle" name="calle" :value="old('calle')?old('calle'):$alumno->direccion->calle??''" required autocomplete="calle" />
    </div>

    <div>
        <x-label for="numero" :value="__('Número')" />

        <x-input id="numero" class="block mt-1 w-full" type="numero" name="numero" :value="old('numero')? old('numero'):$alumno->direccion->numero??''" required autocomplete="numero" />
    </div>

    <div>
        <x-label for="colonia" :value="__('Colonia')" />

        <x-input id="colonia" class="block mt-1 w-full" type="colonia" name="colonia" :value="old('colonia')? old('numero'):$alumno->direccion->colonia??''" required autocomplete="colonia" />
    </div>

    <div>
        <x-label for="localidad" :value="__('Localidad')" />

        <x-input id="localidad" class="block mt-1 w-full" type="localidad" name="localidad" :value="old('localidad')? old('localidad'):$alumno->direccion->localidad??''" required autocomplete="localidad" />
    </div>

    <div>
        <x-label for="codigo_postal" :value="__('Código postal')" />

        <x-input id="codigo_postal" class="block mt-1 w-full" type="codigo_postal" name="codigo_postal" :value="old('codigo_postal')? old('codigo_postal'):$alumno->direccion->codigo_postal??''" required autocomplete="codigo_postal" />
    </div>

    

    <div class="flex justify-between mt-4">
        <a href="{{route('dashboard')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"> {{ __('Atras') }}</a>
        <x-button>
            {{ __('Guardar') }}
        </x-button>
    </div>
</form>