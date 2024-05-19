<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Keywords toevoegen') }}
        </h2>
    </x-slot>
<style>
    /* line 2, ../sass/_sortable.sass */
    table[data-sortable] {
        border-collapse: collapse;
        border-spacing: 0;
    }
    /* line 6, ../sass/_sortable.sass */
    table[data-sortable] th {
        vertical-align: bottom;
        font-weight: bold;
    }
    /* line 10, ../sass/_sortable.sass */
    table[data-sortable] th, table[data-sortable] td {
        text-align: left;
        padding: 10px;
    }
    /* line 14, ../sass/_sortable.sass */
    table[data-sortable] th:not([data-sortable="false"]) {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        -webkit-touch-callout: none;
        cursor: pointer;
    }
    /* line 26, ../sass/_sortable.sass */
    table[data-sortable] th:after {
        content: "";
        visibility: hidden;
        display: inline-block;
        vertical-align: inherit;
        height: 0;
        width: 0;
        border-width: 5px;
        border-style: solid;
        border-color: transparent;
        margin-right: 1px;
        margin-left: 10px;
        float: right;
    }
    /* line 40, ../sass/_sortable.sass */
    table[data-sortable] th[data-sorted="true"]:after {
        visibility: visible;
    }
    /* line 43, ../sass/_sortable.sass */
    table[data-sortable] th[data-sorted-direction="descending"]:after {
        border-top-color: inherit;
        margin-top: 8px;
    }
    /* line 47, ../sass/_sortable.sass */
    table[data-sortable] th[data-sorted-direction="ascending"]:after {
        border-bottom-color: inherit;
        margin-top: 3px;
    }

</style>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="flex justify-between">
                        <h1 class="text-2xl font-semibold">Keywords</h1>
                        <a href="{{ route('project.keyword.create', $project_id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Keywords toevoegen</a>
                    </div>
                    <table class="sortable-theme-minimal table-responsive w-full min-w-full divide-y divide-gray-200 mt-5" data-sortable>
                        <thead>
                            <tr class="">
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"><span>Keyword</span></th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"><span>Search Volume</span></th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"><span>Competition</span></th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"><span>Competition Rank</span></th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"><span>CPC high</span></th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"><span>CPC low</span></th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"><span>Details</span></th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"><span>Google</span></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($keywords as $keyword)
                                <tr @if($keyword->keyword_spell == NULL)
                                        class="bg-red-50"
                                @endif>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="text-sm leading-5 font-medium text-gray-900">{{ $keyword->keyword }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="text-sm leading-5 text-gray-900">{{ $keyword->search_volume }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="text-sm leading-
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="text-sm leading-5 text-gray-900">{{ $keyword->competition }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="text-sm leading-5 text-gray-900">{{ $keyword->competition_index }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="text-sm leading-5 text-gray-900">{{ $keyword->cpc_high }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="text-sm leading-5 text-gray-900">{{ $keyword->cpc_low }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                        <a href="{{ route('project.keyword.show', [$project_id, $keyword->id]) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                        <a target="_blank" href="https://www.google.nl/search?q={{ str_replace(' ', '+', $keyword->keyword); }}" class="text-indigo-600 hover:text-indigo-900">Google</a>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
