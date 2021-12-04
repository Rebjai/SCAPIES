<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subsistemas Escolares') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{route('subsistema.create')}}">Añadir Subsistema</a>
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($subsistemas as $subsitema)
                    <div>
                        <div>
                            {{$subsitema->nombre}}
                        </div>
                        <div>
                            <a href="{{route('subsistema.edit', ['subsistema' => $subsitema->id])">
                                Editar
                            </a>
                        </div>
                        <div>
                            <form action="{{route('subsistema.destroy',  ['subsistema' => $subsitema->id])" method="POST">
                                @method('DELETE') 
                                @csrf
                                <button>Eliminar</button>
                            </form>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>