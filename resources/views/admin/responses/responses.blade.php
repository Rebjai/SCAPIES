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
                <!-- <div class="p-6">
                    <a href="{{route('subsistema.create')}}" class="bg-green-400 py-1 px-2 rounded mt-8">Añadir Subsistema</a>
                </div> -->
                
                <div class="bg-white overflow-x-auto shadow-sm sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-20">
                            <tr>
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
                                    continuar
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Opción 1
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Carrera 1
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Opcion 2
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                    Carrera 2
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
                                    {{$respuesta->continuar_estudios == 1? 'Si': 'No'}}
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