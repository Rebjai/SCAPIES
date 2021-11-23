<form method="POST" action="{{ route('questionaire.general_info') }}">
    @csrf
    <div>
        <x-label for="subsitema" :value="__('Subsistema')" />

        <!-- <x-input id="subsitema" class="block mt-1 w-full" type="" name="subsitema" :value="old('subsitema')" required autocomplete="subsitema" /> -->
        <select id="subsitema" class="block mt-1 w-full" type="" name="subsitema" :value="old('subsitema')" required autocomplete="subsitema">
            @foreach ($subsistemas as $subsistema)
                
            <option value="{{$subsistema->id}}">{{$subsistema->nombre}}</option>
            @endforeach
        </select>
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