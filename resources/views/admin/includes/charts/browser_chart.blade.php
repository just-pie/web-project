<script>
    new Chart(document.getElementById("horizontalBar"), {
        "type": "horizontalBar",
        "data": {
            "labels": [
                @foreach($browsers_bar as $browser_bar)
                "{{$browser_bar->browsers}}",
                @endforeach
            ],
            "datasets": [{
                "label": "Prístup z prehliadačov za celý čas",
                "data": [
                    @foreach($browsers_bar as $browser_bar)
                    "{{$browser_bar->pocet}}",
                    @endforeach
                ],
                "fill": false,
                "backgroundColor": ["rgba(106,255,35,0.37)", "rgba(51,199,255,0.35)",
                    "rgba(255,0,37,0.37)", "rgba(232,150,29,0.53)", "rgba(146,143,155,0.69)",
                    "rgba(4,59,255,0.33)", "rgba(45,142,243,0.39)", "rgba(43,43,43,0.42)"
                ],
                "borderColor": ["rgb(65,166,16)", "rgba(47,192,240,0.87)",
                    "rgba(234,0,13,0.86)", "rgb(237,130,34)", "rgba(27,26,35,0.82)",
                    "rgba(4,61,214,0.85)", "rgba(12,69,124,0.93)", "rgba(0,0,0,0.86)"
                ],
                "borderWidth": 1
            }]
        },
        "options": {
            "scales": {
                "xAxes": [{
                    "ticks": {
                        "beginAtZero": true
                    }
                }]
            }
        }
    });

    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: [
                @foreach($hodiny_navstev as $hodina_navstev)
                "{{$hodina_navstev->hodina}}",
                @endforeach
            ],
            datasets: [{
                label: "Čas návštev",
                data: [
                    @foreach($hodiny_navstev as $hodina_navstev)
                        "{{$hodina_navstev->pocet}}",
                    @endforeach
                        ],
                backgroundColor: [
                    'rgba(28,37,129,0.38)',
                ],
                borderColor: [
                    'rgba(43,54,200,0.7)',
                ],
                borderWidth: 2
            }]
        },
        options: {
            responsive: true
        }
    });
</script>