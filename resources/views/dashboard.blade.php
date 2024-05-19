<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl my-8 text-center">Welkom bij Annabel's Keyword research tool</h1>
                    @if (session('status'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Lekker bezig!</strong>
                            <span class="block sm:inline">{{ session('status') }}</span>
                        </div>
                    @endif
                    <div class="flex">
                        <div class="flex-1">

                            <h2 class="text-2xl mb-6 mt-6 font-semibold">Projecten</h2>
                            <ul>
                                @foreach($projects as $p)
                                    <li>
                                        <a href="{{route('project.keyword.index', $p->id)}}"> - {{$p->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <a href="{{route('project.create')}}" class="my-6 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nieuw Project</a>

                        </div>
                        <div class="flex-2">
                            <h2 class="text-2xl mb-6 mt-6 font-semibold">Keywords</h2>
                            <p class="mb-6">Er zijn nog {{$keywords->count()}} keywords die nog niet zijn opgehaald.</p>
                            <a class="mb-6 mt-6 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="{{route('data')}}">Haal alle data op</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
