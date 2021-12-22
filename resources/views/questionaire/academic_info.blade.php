<form method="POST" action="{{ route('questionaire.academic_info') }}">
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
        <x-label for="planteles" :value="__('Plantel')" />
        <!-- <x-input id="subsitema" class="block mt-1 w-full" type="" name="subsitema" :value="old('subsitema')" required autocomplete="subsitema" /> -->
        <select id="planteles" class="block mt-1 w-full" type="" name="plantel_id" :value="old('plantel')" required autocomplete="plantel">
            <option value="">Selecciona el subsistema al que perteneces</option>
            @foreach ($planteles as $plantel)
            <option value="{{$plantel->id}}">{{$plantel->nombre}}</option>
            
            @endforeach
        </select>
    </div>
    
    <div>
        <x-label for="area" :value="__('Area')" />
        
        <!-- <x-input id="subsitema" class="block mt-1 w-full" type="" name="subsitema" :value="old('subsitema')" required autocomplete="subsitema" /> -->
        <select id="area" class="block mt-1 w-full" type="" name="campo_formacion_id" :value="old('area')" required autocomplete="area">
            <option value="">Selecciona el área de estudios al que pertences</option>
            @foreach ($areas as $area)

            <option value="{{$area->id}}">{{$area->nombre}}</option>
            @endforeach
        </select>
    </div>


    <div class="flex justify-between mt-4">
        <a href="{{route('questionaire.step_two')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"> {{ __('Atras') }}</a>
        <x-button>
            {{ __('Guardar') }}
        </x-button>
    </div>
</form>