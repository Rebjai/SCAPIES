<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ __('Gracias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                Estimado aspirante a la educación superior, gracias por responder el cuestionario de preferencias de instituciones y carreras, esperamos que la información que contiene el folleto !Ya es hora! Haya sido de utilidad para realizar la mejor elección de tu opción para cursar una licenciatura, TE DESEAMOS EXITO!
                    <form method="POST" action="{{ route('logout') }}">
                        <div class="flex justify-between mt-4">
                            <a href="{{route('questionaire.step_four')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"> {{ __('Atras') }}</a>
                            @csrf

                            <x-button >
                                {{ __('Salir') }}
                            </x-button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>