<form method="POST" action="{{ route('questionaire.academic_info') }}">
    @csrf

    <div>
        <x-label for="subsitema" :value="__('Subsistema')" />

        <!-- <x-input id="subsitema" class="block mt-1 w-full" type="" name="subsitema" :value="old('subsitema')" required autocomplete="subsitema" /> -->
        <select id="subsistema" class="block mt-1 w-full" type="" name="subsistema_id" :value="old('subsitema_id')" required autocomplete="subsitema">
            <option value="">Selecciona el subsistema al que pertenece tu escuela</option>
            @foreach ($subsistemas as $subsistema)

            <option value="{{$subsistema->id}}" @if ($subsistema->id==old('subsistema_id', $alumno->formacion->subsistema_id??''))
                selected="selected"
                @endif

                >{{$subsistema->nombre}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <x-label for="planteles" :value="__('Plantel')" />
        <!-- <x-input id="subsitema" class="block mt-1 w-full" type="" name="subsitema" :value="old('subsitema')" required autocomplete="subsitema" /> -->
        <select id="planteles" class="block mt-1 w-full" type="" name="plantel_id" :value="old('plantel')" required autocomplete="plantel">
            <option value="">Primero selecciona el subsistema al que pertenece tu plantel</option>
        </select>
    </div>

    <div>
        <x-label for="area" :value="__('Campo de formación')" />

        <!-- <x-input id="subsitema" class="block mt-1 w-full" type="" name="subsitema" :value="old('subsitema')" required autocomplete="subsitema" /> -->
        <select id="area" class="block mt-1 w-full" type="" name="campo_formacion_id" :value="old('area')" required autocomplete="area">
            <option value="">Selecciona el área de estudios al que pertences</option>
            @foreach ($areas as $area)

            <option value="{{$area->id}}" @if ($area->id==old('campo_formacion_id', $alumno->formacion->campo_formacion_id??''))
                selected="selected"
                @endif
                >{{$area->nombre}}</option>
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

<script>
    let subsystemInput = document.querySelector('#subsistema')
    
    function getPlanteles() {
        let plantelesSelect = document.querySelector('#planteles')
        let idSubsistema = subsystemInput.selectedOptions[0]?.value
        let urlGetPlanteles = '{{route("plantel.show",["plantel" => $alumno->formacion->subsistema_id])}}'
        let parsedURL= urlGetPlanteles.substring(0, urlGetPlanteles.lastIndexOf('/')+1)

        removeOptions(plantelesSelect)
        if (idSubsistema == null || idSubsistema =='') {
            return
        }
        fetch(parsedURL+idSubsistema).then(r => r.json()).then(r => {
            addOptions(r,plantelesSelect)
            let selectedOption = "{{$alumno->formacion->plantel_id??''}}"
            let oldSubsistema = "{{$alumno->formacion->subsistema_id??''}}"
            if (oldSubsistema == idSubsistema) {
                return plantelesSelect.value = selectedOption
            }
            return plantelesSelect.value = ''

        })
    }

    function removeOptions(selectElement) {
        var i, L = selectElement.options.length - 1;
        for (i = L; i >= 0; i--) {
            selectElement.remove(i);
        }
    }
    function addOptions(elements, selectElement){
        let defaultOption = document.createElement('option')
            defaultOption.value = ''
            defaultOption.text = 'Selecciona el plantel al que perteneces'
            selectElement.add(defaultOption)
        for (element of elements){
            let option = document.createElement('option')
            option.value = element.id
            option.text = element.nombre
            selectElement.add(option)
            // console.log(element);
        }
    }
    subsystemInput.addEventListener('change', getPlanteles)

    getPlanteles()
</script>