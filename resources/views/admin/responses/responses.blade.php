<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Respuestas del cuestionario') }}
        </h2>
    </x-slot>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <a href="{{route('export')}}" class="bg-yellow-500 py-1 font-bold px-2 rounded mt-8">Exportar respuestas</a>
                </div>

                <div class="bg-white overflow-x-auto shadow-sm sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-20">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Correo
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Género
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Teléfono
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    CURP
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Calle
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Número
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Colonia
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Localidad
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Código postal
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Subsistema
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Plantel
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Área de conocimiento
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    continuar
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Motivo baja
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Apoyo económico
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Modelo educativo
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Opción 1
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Carrera 1
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Opción 2
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Carrera 2
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Mes Folleto
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Formato Folleto
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Autoriza compartir datos
                                </th>

                                <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                        acciones
                                    </th>
                                    
                                </tr> -->
                        </thead>
                        <tbody>

                            @foreach ($respuestas as $respuesta)
                            <tr>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->id}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->nombreCompleto}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->correo}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->genero == 1? 'M': 'F'}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->telefono}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->curp}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->direccion->calle}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->direccion->numero}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->direccion->colonia}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->direccion->localidad}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->direccion->codigo_postal}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->formacion->subsistema->nombre}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->formacion->plantel->nombre}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->alumno->formacion->campo_formacion->nombre}}
                                    </div>
                                </td>

                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->continuar_estudios == 1? 'Si': 'No'}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->baja?($respuesta->baja->causa_baja_id == 6? $respuesta->baja->otra_causa:$respuesta->baja->causa_baja->causa):'N/A' }}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->baja?($respuesta->baja->apoyo_economico == 1? 'Si': 'No'):'N/A'}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->modalidad_estudios?->modalidad?:'N/A'}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->universidadPrincipal}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->opcionPrincipal}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->universidadSecundaria}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->opcionSecundaria}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->mes?$respuesta->mes+1:'N/A'}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->folleto_impreso!==null?($respuesta->folleto_impreso == 1? 'Impreso': 'Digital'):'N/A'}}
                                    </div>
                                </td>
                                <td>
                                    <div class="pl-4">
                                        {{$respuesta->aviso_privacidad == 1? 'Si': 'No'}}
                                    </div>
                                </td>
                                <!-- <td  class="border-l-2">
                                
                                </td>
                            </tr> -->
                                @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>