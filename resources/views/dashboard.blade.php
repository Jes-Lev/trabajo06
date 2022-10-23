<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1> Integrantes del equipo</h1>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!--<x-jet-welcome /> -->
                
                <div class="mt-2 text-gray-600 dark:text-gray-900 text-sm">
                        <h3>Adan Fregoso Luquin</h3>
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-900 text-sm">
                        <h3> Jesús Leon Valentin </h3>
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-900 text-sm">
                        <h3> Fernando Israel Moreno Garcia </h3>
                </div> 
                <div class="mt-2 text-gray-600 dark:text-gray-900 text-sm">
                        <h3>Ian Gerardo Horcasitas Pérez </h3>
                </div> 
                <div class="mt-2 text-gray-600 dark:text-gray-900 text-sm">
                        <h3> Jesus Gael Perez Zuñiga </h3>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
