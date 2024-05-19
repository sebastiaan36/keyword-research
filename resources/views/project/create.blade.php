<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nieuw Project toevoegen') }}
        </h2>

        <form action="{{ route('project.store') }}" method="POST">
            @csrf
            <div class="flex mb-6 mt-12">
                <x-input-label class="w-28 mr-5 pt-2" for="name" :value="__('Klant')" />
                <x-text-input id="name" class="block flex-1 border-0 bg-white py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-5" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="flex mb-6">
                <x-input-label class="w-28 mr-5 pt-2" for="description" :value="__('Omschrijving')" />
                <x-text-input id="description" class="block flex-1 border-0 bg-white py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-5" type="text" name="description" :value="old('description')" required autofocus />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <x-primary-button class="mt-5 flex-2 bg-green-600 hover:bg-green-700">
                {{ __('Toevoegen') }}
            </x-primary-button>

        </form>


    </x-slot>

</x-app-layout>
