<form method="POST" action="{{ route('questionaire.studies') }}">
    @csrf

    <div>
        <x-label for="nombre" :value="__('Nombre')" />
        <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')?old('nombre'):$alumno->nombre" required autocomplete="nombre" />
    </div>
    @error('nombre')
    <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
    @enderror

    


    <div class="flex justify-between mt-4">
    <a href="{{route('questionaire.step_three')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"> {{ __('Atras') }}</a>
        <x-button>
            {{ __('Guardar') }}
        </x-button>
    </div>
</form>