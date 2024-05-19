<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Keyword Data') }}
        </h2>
    </x-slot>
    <h1 class=" m-6 text-center text-3xl">{{ $keyword->keyword }}</h1>
    <div class="flex justify-center">
        <div class="p-4 text-center m-2 bg-green-300 rounded-lg">
            <div class="">CPC Laag</div>
            <div class="text-xl font-bold"> €{{ $keyword->cpc_low }} </div>
        </div>
        <div class="p-4 text-center m-2 bg-green-300 rounded-lg">
            <div class="">CPC Hoog</div>
            <div class="text-xl font-bold"> €{{ $keyword->cpc_high }} </div>
        </div>
        <div class="p-4 text-center m-2 bg-green-300 rounded-lg">
            <div class="">Competition</div>
            <div class="text-xl font-bold"> {{ $keyword->competition_index }}/100 </div>
        </div>

    </div>
    <div id="chart_days_score">


    <script>
        var options = {
            series: [
                {
                    name: "Zoekvolume",
                    data: @json($data)
                }

            ],
            chart: {
                height: 350,
                type: 'line',
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#77B6EA'],
            dataLabels: {
                enabled: true,
            },
            stroke: {
                curve: 'smooth'
            },
            title: {
                text: 'Zoekvolume per maand',
                align: 'left'
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            markers: {
                size: 1
            },
            xaxis: {
                categories:  @json($labels),
                title: {
                    text: 'Maanden'
                }
            },
            yaxis: {
                title: {
                    text: 'Search Volume'
                },
                min: {{ min($data) - (min($data) * 0.1) }},
                max: {{ max($data) + (max($data) * 0.1)}},
                stepSize: 10,
                decimalsInFloat: 0,
            },
            legend: {
                position: 'top',
                horizontalAlign: 'right',
                floating: true,
                offsetY: -25,
                offsetX: -5
            }
        };

        var chart_days_score = new ApexCharts(document.querySelector("#chart_days_score"), options);
        chart_days_score.render();
        </script>
    </x-app-layout>
