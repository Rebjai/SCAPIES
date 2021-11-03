<form method="POST" action="{{ route('questionaire.address_info') }}">
    @csrf

    <div>
        <x-label for="calle" :value="__('Calle')" />

        <x-input id="calle" class="block mt-1 w-full" type="calle" name="calle" :value="old('calle')" required autocomplete="calle" />
    </div>

    <div>
        <x-label for="numero" :value="__('Número')" />

        <x-input id="numero" class="block mt-1 w-full" type="numero" name="numero" :value="old('numero')" required autocomplete="numero" />
    </div>

    <div>
        <x-label for="colonia" :value="__('Colonia')" />

        <x-input id="colonia" class="block mt-1 w-full" type="colonia" name="colonia" :value="old('colonia')" required autocomplete="colonia" />
    </div>

    <div>
        <x-label for="localidad" :value="__('Localidad')" />

        <x-input id="localidad" class="block mt-1 w-full" type="localidad" name="localidad" :value="old('localidad')" required autocomplete="localidad" />
    </div>

    <div>
        <x-label for="codigo_postal" :value="__('Código postal')" />

        <x-input id="codigo_postal" class="block mt-1 w-full" type="codigo_postal" name="codigo_postal" :value="old('codigo_postal')" required autocomplete="codigo_postal" />
    </div>

    

    <div class="flex justify-end mt-4">
        <x-button>
            {{ __('Guardar') }}
        </x-button>
    </div>
</form>