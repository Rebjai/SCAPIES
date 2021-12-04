<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Planteles nivel bachillerato') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{route('subsistema.create')}}">Añadir Plantel</a>
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($planteles as $plantel)
                    <div>
                        <div>
                            {{$plantel->nombre}}
                        </div>
                        <div>
                            <a href="{{route('plantel.edit', ['plantel' => $plantel->id])">
                                Editar
                            </a>
                        </div>
                        <div>
                            <form action="{{route('plantel.destroy',  ['plantel' => $plantel->id])" method="POST">
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