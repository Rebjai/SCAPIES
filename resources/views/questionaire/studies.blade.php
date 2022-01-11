<form method="POST" action="{{ route('questionaire.studies') }}">
    @csrf
    <!-- {{$alumno->cuestionario}} -->
    <div class="pt-4">
        <x-label for="continuar_estudios" :value="__('¿Planeas continuar con tus estudios superiores?')" class="my-4 " />
        <div class="flex justify-start mx-2">
            <div class="mx-2 flex">

                <input id="si" class="ml-2 mr-2" type="radio" name="continuar_estudios" value="1" required {{ old('continuar_estudios',$alumno->cuestionario->continuar_estudios??"")==true ? 'checked' : '' }} />
                <x-label for="si" :value="__('Si')" />
            </div>
            <div class="mx-2 flex">

                <input id="no" class="ml-2 mr-2" type="radio" name="continuar_estudios" value="0" required {{ old('continuar_estudios',$alumno->cuestionario->continuar_estudios??"")==false ? 'checked' : '' }} />
                <x-label for="no" :value="__('No')" />
            </div>

        </div>
    </div>

    @error('continuar_estudios')
    <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
    @enderror
    <div id="baja" class="pt-10" style="display: none;">
        
        <h2 class="mt-4">Motivos por los que no continuarás tus estudios</h2>
        
        <div class="pt-4" id="causa_baja">
            <x-label for="causas" :value="__('Seleccione la causa')" />
            <select id="causas" class="block mt-1 w-full" type="" name="causa_baja_id" :value="old('causa_baja_id')" autocomplete="causa">
                <option value="">Selecciona la causa por la que no continuarás tus estudios</option>
                @foreach ($causas as $causa)
                <option value="{{$causa->id}}" @if ($causa->id==old('causa_baja_id', $alumno->cuestionario->baja->causa_baja_id??''))
                    selected="selected"
                    @endif
                    >{{$causa->causa}}</option>
                @endforeach
            </select>
            @error('causa_baja_id')
            <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
            @enderror
            <div class="text-sm text-gray-500 mt-4">
            Te recomendamos que revises con el apoyo de tu tutor los factores que te pueden ayudar con tus estudios de tipo superior
        </div>
        </div>


        <div class="pt-4" id="indicar_causa_baja" style="display: none;">
            <x-label for="otra_causa_baja" :value="__('Menciona el motivo por el que no continuarás con tus estudios')" />
            <x-input id="otra_causa_baja" class="block mt-1 w-full" type="text" name="otra_causa_baja" :value="old('otra_causa_baja', $alumno->cuestionario->baja->otra_causa??'')" placeholder="Otra causa" autocomplete="otra_causa_baja" />
        </div>
        @error('otra_causa_baja')
        <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
        @enderror

        <div class="pt-4">

            <x-label for="apoyo_economico" :value="__('Si tuvieras apoyo económico, ¿Seguirías estudiando?')" class="my-4 " />
            <div class="flex justify-start -mx-2">
                <div class="mx-2 flex">

                    <input id="si_apoyo" class="ml-2 mr-2" type="radio" name="apoyo_economico" value="1" {{ old('apoyo_economico',$alumno->cuestionario->baja->apoyo_economico??'')==true ? 'checked' : '' }} />
                    <x-label for="si" :value="__('Si')" />
                </div>
                <div class="mx-2 flex">

                    <input id="no_apoyo" class="ml-2 mr-2" type="radio" name="apoyo_economico" value="0" {{ old('apoyo_economico',$alumno->cuestionario->baja->apoyo_economico??'')==false ? 'checked' : '' }} />
                    <x-label for="no" :value="__('No')" />
                </div>

            </div>
            @error('apoyo_economico')
            <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div id="estudios_superiores" class="pt-10">
        <h2>Estudios Superiores</h2>
        <div class="pt-4">
            <x-label for="modelos_educativos" :value="__('¿En qué modelo educativo te gustaría estudiar la licenciatura?')" />
            <select id="modelos_educativos" class="block mt-1 w-full" type="" name="modelo_educativo_id" :value="old('modelo_educativo')" autocomplete="modelo_educativo">
                <option value="">Selecciona un modelo educativo</option>
                @foreach ($modelos_educativos as $modelo_educativo)
                <option value="{{$modelo_educativo->id}}" @if ($modelo_educativo->id==old('modelo_educativo_id', $alumno->cuestionario->modalidad_estudios_id??''))
                    selected="selected"
                    @endif
                    >{{$modelo_educativo->modalidad}}</option>
                @endforeach
            </select>
        </div>
        @error('modelo_educativo_id')
        <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
        @enderror

        <div class="pt-4">
            <x-label for="universidades" :value="__('¿En qué institución de educación superior te quieres inscribir? (elige \'OTRA\' en caso de que no aparezca en la lista\')')" />
            <select id="universidades" class="block mt-1 w-full" type="" name="universidad_id" :value="old('universidad_id')" autocomplete="universidad_id">
                <option value="">Selecciona una institución educativa</option>
                <option value="otra" @if (old('universidad_id',$universidad_seleccionada??'')=='otra' ) selected="selected" @endif>OTRA</option>
                @foreach ($universidades as $universidad)
                <option value="{{$universidad->id}}" @if ($universidad->id==old('universidad_id', $universidad_seleccionada??''))
                    selected="selected"
                    @endif
                    >{{$universidad->nombre}}</option>
                @endforeach
            </select>
        </div>
        @error('universidad_id')
        <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
        @enderror
        <div class="pt-4" id="opcion_carreras" style="display: none;">
            <x-label for="carreras" :value="__('Elige la carrera que deseas estudiar')" />
            <select id="carreras" class="block mt-1 w-full" type="" name="carrera_id" :value="old('carrera_id')" autocomplete="carrera_id">
                <option value="">Selecciona una institución para ver las carreras que ofrece</option>

            </select>
            @error('carrera_id')
            <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="pt-4" id="otra" style="display: none;">
            <x-label for="carrera_no_registrada" :value="__('En caso de que no aparezca en la lista. Indica el nombre completo de la institución y la carrera que deseas estudiar')" />
            <x-input id="carrera_no_registrada" class="block mt-1 w-full" type="text" name="carrera_no_registrada" placeholder="Institución - carrera" :value="old('carrera_no_registrada')?old('carrera_no_registrada'):$carrera_no_registrada" autocomplete="carrera_no_registrada" />
        </div>
        @error('carrera_no_registrada')
        <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
        @enderror
        <div class="pt-4">

            <div class="pt-4">
                <x-label for="universidades_2" :value="__('En caso de no ser admitido en la institución antes señalada, ¿Cuál sería tu segunda opción?')" />
                <select id="universidades_2" class="block mt-1 w-full" type="" name="universidad_2_id" :value="old('universidad_2_id')" autocomplete="universidad_2_id">
                    {{$universidad_seleccionada_2}}
                    <option value="">Selecciona una institución educativa</option>
                    @foreach ($universidades as $universidad)
                    <option value="{{$universidad->id}}" @if ($universidad->id==old('universidad_2_id', $universidad_seleccionada_2??''))
                        selected="selected"
                        @endif
                        >{{$universidad->nombre}}</option>
                    @endforeach
                </select>
            </div>
            @error('universidad_2_id')
            <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
            @enderror
            <div class="pt-4">
                <x-label for="carreras_2" :value="__('Carrera')" />
                <select id="carreras_2" class="block mt-1 w-full" type="" name="carrera_2_id" :value="old('carrera_2_id')" autocomplete="carrera_2_id">
                    <option value="">Selecciona una institución para ver las carreras que ofrece</option>

                </select>
            </div>
            @error('carrera_2_id')
            <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
            @enderror


            <div class="pt-4">
                <x-label for="mes" :value="__('Para poder elegir adecuadamente tu carrera profesional, en qué mes prefieres recibir la información de las instituciones y carreras de educación superior')" />
                <select id="mes" class="block mt-1 w-full" type="" name="mes" :value="old('mes')" autocomplete="mes">
                    <option value="1">Febrero</option>
                    <option value="1">Marzo</option>
                    <option value="1">Abril</option>
                    <option value="1">Mayo</option>
                    <option value="1">Junio</option>
                    <option value="1">Agosto</option>
                    <option value="1">Septiembre</option>
                    <option value="1">Octubre</option>
                    <option value="1">Noviembre</option>
                </select>
            </div>
            @error('mes')
            <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
            @enderror


            <div class="pt-4">

                <x-label for="folleto_impreso" :value="__('¿De qué manera prefieres recibir el folleto \'¡Ya es hora!\'?')" class="my-4 " />
                <div class="flex justify-start -mx-2">
                    <div class="mx-2 flex">

                        <input id="digital" class="ml-2 mr-2" type="radio" name="folleto_impreso" value="0" {{ old('folleto_impreso',$alumno->cuestionario->folleto_impreso??'')==false ? 'checked' : '' }} />
                        <x-label for="digital" :value="__('Digital')" />
                    </div>
                    <div class="mx-2 flex">

                        <input id="impreso" class="ml-2 mr-2" type="radio" name="folleto_impreso" value="1" {{ old('folleto_impreso',$alumno->cuestionario->folleto_impreso??'')!=false ? 'checked' : '' }} />
                        <x-label for="impreso" :value="__('impreso')" />
                    </div>

                </div>
                @error('folleto_impreso')
                <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
                @enderror
            </div>

        </div>
    </div>

    <div class="pt-10">
        <h2>Aviso de privacidad</h2>
        <div class="pt-2">
            En el siguiente link puedes <a href="http://www.coepesoaxaca.com/sistema/pages/form/avisodep.html" target="_blank" class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600">consultar el aviso de privacidad.</a>
        </div>
        <div class="pt-2">

            <x-label for="aviso_privacidad" :value="__('¿Autorizas compartir tus datos personales del cuestionario, para que las instituciones de educación superior que elegiste para continuar tus estudios, te envien información adicional?')" class="my-4 " />
            <div class="flex justify-start -mx-2">
                <div class="mx-2 flex">

                    <input id="rechazar" class="ml-2 mr-2" type="radio" name="aviso_privacidad" value="0" required {{ old('aviso_privacidad',$alumno->cuestionario->aviso_privacidad??'')==false ? 'checked' : '' }} />
                    <x-label for="rechazar" :value="__('No')" />
                </div>
                <div class="mx-2 flex">

                    <input id="aceptar" class="ml-2 mr-2" type="radio" name="aviso_privacidad" value="1" required {{ old('aviso_privacidad',$alumno->cuestionario->aviso_privacidad??'')!=false ? 'checked' : '' }} />
                    <x-label for="aceptar" :value="__('Si')" />
                </div>

            </div>
            @error('aviso_privacidad')
            <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>




    <div class="flex justify-between mt-4">
        <a href="{{route('questionaire.step_three')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"> {{ __('Atras') }}</a>
        <x-button>
            {{ __('Terminar encuesta') }}
        </x-button>
    </div>
</form>

<script>
    let universidadesSelect = document.querySelector('#universidades')
    let universidadesSelect_2 = document.querySelector('#universidades_2')
    let carrerasSelect = document.querySelector('#carreras')
    let carrerasSelect_2 = document.querySelector('#carreras_2')

    let continuar = document.querySelector('#si')
    let noContinuar = document.querySelector('#no')
    let continueWithSupport = document.querySelector('#si_apoyo')
    let noContinueWithSupport = document.querySelector('#no_apoyo')

    let alreadySelected = '{{$universidad_seleccionada}}' > 0
    let alreadySelected_2 = '{{$universidad_seleccionada_2}}' > 0

    function getCarreras(origin, targetSelect, selectedOption = null) {
        let select = origin
        let idUniversidad = select.selectedOptions[0]?.value
        let urlGetCarreras = '{{route("carreras.show",["carrera" => $universidad_seleccionada])}}'
        let parsedURL = urlGetCarreras.substring(0, urlGetCarreras.lastIndexOf('/') + 1)
        removeOptions(targetSelect)
        if (idUniversidad != 0)
            fetch(parsedURL + idUniversidad).then(r => {
                return r.json()
            })
            .then(r => {
                addOptions(r, targetSelect, selectedOption)
                return true

            })
    }

    function removeOptions(selectElement) {
        var i, L = selectElement.options.length - 1;
        for (i = L; i >= 1; i--) {
            selectElement.remove(i);
        }
    }

    function addOptions(elements, selectElement, selectedOption) {
        if (selectedOption != null) {
            for (element of elements) {
                let option = document.createElement('option')
                if (element.id == selectedOption) {
                    option.selected = true
                }
                option.value = element.id
                option.text = element.carrera
                selectElement.add(option)
            }
            return
        }
        for (element of elements) {
            let option = document.createElement('option')
            option.value = element.id
            option.text = element.carrera
            selectElement.add(option)
        }
    }


    function continueStudies() {
        showQuestionaire()
        let drop = document.querySelector('#baja')
        drop.style.display = 'none'
    }

    function dropStudies() {
        hideQuestionaire()
        let drop = document.querySelector('#baja')
        drop.style.display = 'block'
    }

    function showQuestionaire() {
        let questionaire = document.querySelector('#estudios_superiores')
        questionaire.style.display = 'block'

    }

    function hideQuestionaire() {
        let questionaire = document.querySelector('#estudios_superiores')
        questionaire.style.display = 'none'

    }

    universidadesSelect.addEventListener('change', (e) => {
        let otherOption = document.querySelector('#otra')
        let option = document.querySelector('#opcion_carreras')
        if (e.target.value == 'otra') {
            option.style.display = 'none'
            return otherOption.style.display = 'block'
        }

        option.style.display = 'block'
        otherOption.style.display = 'none'
        getCarreras(e.target, carrerasSelect)
    })
    universidadesSelect_2.addEventListener('change', (e) => getCarreras(e.target, carrerasSelect_2))

    continuar.addEventListener('change', (e) => continueStudies())
    noContinuar.addEventListener('change', (e) => dropStudies())

    document.querySelector('#causas').addEventListener('change', (e) => {
        let otherOption = document.querySelector('#indicar_causa_baja')
        if (e.target.value != 6)
            return otherOption.style.display = 'none'
        otherOption.style.display = 'block'
        document.querySelector("#otra_causa_baja").focus()

    })
    if (noContinuar.checked) {
        dropStudies()
    }
    if (document.querySelector('#causas').value == 6) {
        document.querySelector('#indicar_causa_baja').style.display = 'block'
    }
    if (document.querySelector('#universidades').value != "") {
        if (document.querySelector('#universidades').value == 'otra') {
            document.querySelector('#otra').style.display = 'block'
        } else {
            let option_1 = '{{$carrera_seleccionada->carrera_id??null}}'
            document.querySelector('#opcion_carreras').style.display = 'block'
            getCarreras(universidadesSelect, carrerasSelect, option_1)
        }
    }
    if (document.querySelector('#universidades_2').value != "") {

        let option_2 = '{{$carrera_seleccionada_2->carrera_id??null}}'
        getCarreras(universidadesSelect_2, carrerasSelect_2, option_2)
    }
</script>