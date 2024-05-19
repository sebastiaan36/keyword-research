<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Keywords toevoegen') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <form action="{{ route('project.keyword.store', $project_id) }}" method="POST">
        @csrf
        <div class="w-full">
            <h3 class="text-3xl">Keywords</h3>
            <small>Voeg de keywords toe. Eentje per regel</small>
            <small>Geen inspiratie Ansje? Gebruik dan de <a target="_blank" class="underline text-blue-600" href="https://keywordsheeter.com/">keywordshitter </a> en plak de resultaten hieronder. </small>
            <textarea rows="20" cols="50" id="keyword" class="block flex-1 border-0 bg-white py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-5" type="text" name="keyword" required autofocus ></textarea>
            <x-text-input class="hidden" name="project_id" value="{{$project_id}}" />
            <x-input-error :messages="$errors->get('keyword')" class="mt-2" />
        </div>
        <x-primary-button class="mt-5 flex-2 bg-green-600 hover:bg-green-700">
            {{ __('Toevoegen') }}
        </x-primary-button>

        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
