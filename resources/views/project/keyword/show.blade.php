<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Keyword Data') }}
        </h2>
    </x-slot>

    {{$keywords->keyword}}

    </x-app-layout>
