<form method="POST" action="{{ route('questionaire.studies') }}">
    @csrf
    <div class="pt-4">
        <x-label for="continuar_estudios" :value="__('¿Planeas continuar con tus estudios superiores?')" class="my-4 " />
        <div class="flex justify-start mx-2">
            <div class="mx-2 flex">

                <input id="si" class="ml-2 mr-2" type="radio" name="continuar_estudios" value="1" required {{ old('continuar_estudios',$alumno->continuar_estudios)==false ? 'checked' : '' }} />
                <x-label for="si" :value="__('Si')" />
            </div>
            <div class="mx-2 flex">

                <input id="no" class="ml-2 mr-2" type="radio" name="continuar_estudios" value="0" required {{ old('continuar_estudios',$alumno->continuar_estudios)!=false ? 'checked' : '' }} />
                <x-label for="no" :value="__('No')" />
            </div>

        </div>
    </div>

    @error('continuar_estudios')
    <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
    @enderror
    <div id="baja" class="pt-10">
        <h2>Baja escolar</h2>
        <div class="pt-4">
            <x-label for="causas" :value="__('Seleccione la causa')" />
            <select id="causas" class="block mt-1 w-full" type="" name="causa_id" :value="old('causa')" autocomplete="causa">
                <option value="">Selecciona la causa de la baja escolar</option>
                @foreach ($causas as $causa)
                <option value="{{$causa->id}}" @if ($causa->id==old('causa_id', $alumno->formacion->causa_id??''))
                    selected="selected"
                    @endif
                    >{{$causa->causa}}</option>
                @endforeach
            </select>
        </div>

        <div class="pt-4">
            <x-label for="otra_causa_baja" :value="__('Menciona el motivo por el que no continuarás con tus estudios')" />
            <x-input id="otra_causa_baja" class="block mt-1 w-full" type="text" name="otra_causa_baja" :value="old('otra_causa_baja')?old('otra_causa_baja'):$otra_causa_baja" placeholder="Otra causa" autocomplete="otra_causa_baja" />
        </div>
        @error('carrera_no_registrada')
        <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
        @enderror

        <div class="pt-4">

            <x-label for="apoyo_economico" :value="__('Si tuvieras apoyo económico, ¿Seguirías estudiando?')" class="my-4 " />
            <div class="flex justify-start -mx-2">
                <div class="mx-2 flex">

                    <input id="si" class="ml-2 mr-2" type="radio" name="apoyo_economico" value="1" required {{ old('apoyo_economico',$alumno->apoyo_economico)==false ? 'checked' : '' }} />
                    <x-label for="si" :value="__('Si')" />
                </div>
                <div class="mx-2 flex">

                    <input id="no" class="ml-2 mr-2" type="radio" name="apoyo_economico" value="0" required {{ old('apoyo_economico',$alumno->apoyo_economico)!=false ? 'checked' : '' }} />
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
                <option value="{{$modelo_educativo->id}}" @if ($modelo_educativo->id==old('modelo_educativo_id', $alumno->cuestionario->modelo_educativo_id??''))
                    selected="selected"
                    @endif
                    >{{$modelo_educativo->modalidad}}</option>
                    @endforeach
                </select>
            </div>
            
            
            <div class="pt-4">
                <x-label for="universidades" :value="__('En qué institución de educación superior te quieres inscribir y qué carrera piensas estudiar')" />
                <select id="universidades" class="block mt-1 w-full" type="" name="universidad_id" :value="old('universidad_id')" autocomplete="universidad_id">
                    <option value="">Selecciona una institución educativa</option>
                    <option value="otra">OTRA</option>
                    @foreach ($universidades as $universidad)
                    <option value="{{$universidad->id}}" @if ($universidad->id==old('universidad_id', $universidad_seleccionada??''))
                    selected="selected"
                    @endif
                    >{{$universidad->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="pt-4">
            <x-label for="carreras" :value="__('Carrera')" />
            <select id="carreras" class="block mt-1 w-full" type="" name="carrera_id" :value="old('carrera_id')" autocomplete="carrera_id">
                <option value="">Selecciona una institución para ver las carreras que ofrece</option>

            </select>
        </div>
        <div class="pt-4">
            <x-label for="carrera_no_registrada" :value="__('En caso de que no aparezca en la lista. Indica el nombre completo de la institución y la carrera que deseas estudiar')" />
            <x-input id="carrera_no_registrada" class="block mt-1 w-full" type="text" name="carrera_no_registrada" placeholder="Institución - carrera"  :value="old('carrera_no_registrada')?old('carrera_no_registrada'):$carrera_no_registrada" autocomplete="carrera_no_registrada" />
        </div>
        @error('carrera_no_registrada')
        <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
        @enderror
        <div class="pt-4">

            <div class="pt-4">
                <x-label for="universidades_2" :value="__('En caso de no ser admitido en la institución antes señalada, ¿Cuál sería tu segunda opción?')" />
                <select id="universidades_2" class="block mt-1 w-full" type="" name="universidad_2_id" :value="old('universidad_2_id')" required autocomplete="universidad_2_id">
                    <option value="">Selecciona una institución educativa</option>
                    @foreach ($universidades as $universidad)
                    <option value="{{$universidad->id}}" @if ($universidad->id==old('universidad_2_id', $universidad_2_seleccionada->id??''))
                        selected="selected"
                        @endif
                        >{{$universidad->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="pt-4">
                <x-label for="carreras_2" :value="__('Carrera')" />
                <select id="carreras_2" class="block mt-1 w-full" type="" name="carrera_2_id" :value="old('carrera_2_id')" required autocomplete="carrera_2_id">
                    <option value="">Selecciona una institución para ver las carreras que ofrece</option>

                </select>
            </div>


            <div class="pt-4">
                <x-label for="mes" :value="__('Para poder elegir adecuadamente tu carrera profesional, en qué mes prefieres recibir la información de las instituciones y carreras de educación superior')" />
                <select id="mes" class="block mt-1 w-full" type="" name="mes" :value="old('mes')" required autocomplete="mes">
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


            <div class="pt-4">

                <x-label for="folleto_impreso" :value="__('¿De qué manera prefieres recibir el folleto \'¡Ya es hora!\'?')" class="my-4 " />
                <div class="flex justify-start -mx-2">
                    <div class="mx-2 flex">

                        <input id="digital" class="ml-2 mr-2" type="radio" name="folleto_impreso" value="0" required {{ old('folleto_impreso',$alumno->cuestionario->folleto_impreso??'')==false ? 'checked' : '' }} />
                        <x-label for="digital" :value="__('Digital')" />
                    </div>
                    <div class="mx-2 flex">

                        <input id="impreso" class="ml-2 mr-2" type="radio" name="folleto_impreso" value="1" required {{ old('folleto_impreso',$alumno->cuestionario->folleto_impreso??'')!=false ? 'checked' : '' }} />
                        <x-label for="impreso" :value="__('impreso')" />
                    </div>

                </div>
                @error('folleto_impreso')
                <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="pt-4">

                <x-label for="aviso_privacidad" :value="__('¿Autorizas compartir tus datos personales del cuestionario, para que las instituciones de educación superior que elegiste para continuar tus estudios, te envien información adicional?')" class="my-4 " />
                <div class="flex justify-start -mx-2">
                    <div class="mx-2 flex">

                        <input id="rechazar" class="ml-2 mr-2" type="radio" name="aviso_privacidad" value="0" required {{ old('aviso_privacidad',$alumno->cuestionario->aviso_privacidad??'')==false ? 'checked' : '' }} />
                        <x-label for="rechazar" :value="__('Si')" />
                    </div>
                    <div class="mx-2 flex">

                        <input id="aceptar" class="ml-2 mr-2" type="radio" name="aviso_privacidad" value="1" required {{ old('aviso_privacidad',$alumno->cuestionario->aviso_privacidad??'')!=false ? 'checked' : '' }} />
                        <x-label for="aceptar" :value="__('No')" />
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
    
    function getCarreras(origin, targetSelect) {
        console.log('getting carreras');
        let select = origin
        let idUniversidad = select.selectedOptions[0]?.value
        let urlGetCarreras = '{{route("carreras.show",["carrera" => $universidad_seleccionada])}}'
        let parsedURL= urlGetCarreras.substring(0, urlGetCarreras.lastIndexOf('/')+1)
        removeOptions(targetSelect)
        if(idUniversidad != 0)
        fetch(parsedURL+idUniversidad).then(r => {
            console.log(r);
            return r.json()})
            .then(r => {
                console.log(r);
            addOptions(r,targetSelect)
            let selectedOption = "{{$carrera_seleccionada??''}}"
            let oldSubsistema = "{{$universidad_seleccionada??''}}"
            if (oldSubsistema == idUniversidad) {
                return targetSelect.value = selectedOption
            }
            return targetSelect.value = ''

        })
    }

    function removeOptions(selectElement) {
        var i, L = selectElement.options.length - 1;
        for (i = L; i >= 1; i--) {
            selectElement.remove(i);
        }
    }
    function addOptions(elements, selectElement){
        for (element of elements){
            let option = document.createElement('option')
            option.value = element.id
            option.text = element.carrera
            selectElement.add(option)
        }
    }
    universidadesSelect.addEventListener('change', (e)=> getCarreras(e.target, carrerasSelect))
    universidadesSelect_2.addEventListener('change', (e)=> getCarreras(e.target, carrerasSelect_2))

    let alreadySelected = '{{$universidad_seleccionada}}' >0
    let alreadySelected_2 = '{{$universidad_seleccionada_2}}'>0
    if (alreadySelected) {
        getCarreras(universidadesSelect,carrerasSelect)
    }
</script>