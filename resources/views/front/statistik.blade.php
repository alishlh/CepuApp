Codeshare logo
 ShareSign UpLog In
53
                                        <i class="bi-arrow-repeat" style="animation: spin 3s linear infinite;"></i>
54
                                    </div>
55
                                </div>
56
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
57
                                    <h6 class="text-muted font-semibold">Diproses</h6>
58
                                    <h6 class="font-extrabold mb-0">80.000</h6>
59
                                </div>
60
                            </div>
61
                        </div>
62
                    </div>
63
                </div>
64
                <div class="col-6 col-lg-3 col-md-6">
65
                    <div class="card">
66
                        <div class="card-body px-4 py-4-5">
67
                            <div class="row">
68
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
69
                                    <div class="stats-icon green mb-2">
70
                                        <i class="bi-check-circle"></i>
71
                                    </div>
72
                                </div>
73
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
74
                                    <h6 class="text-muted font-semibold">Selesai</h6>
75
                                    <h6 class="font-extrabold mb-0">112</h6>
76
                                </div>
77
                            </div>
78
                        </div>
79
                    </div>
80
                </div>
81
            </div>
82
        </div>
83
    </section>
84
    <div class="card">
85
        <div class="card-header">
86
            <h4>Statistik Pengaduan</h4>
87
        </div>
88
        <div class="card-body">
89
            <div id="chart-pengaduan"></div>
90
        </div>
91
    </div>
92
</div>
93
@endsection
94
​
95
@section('js')
96
    <script src="{{asset('mazer/assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
97
    <script>
98
        var options = {
99
            series: [30, 80, 25],
100
            chart: {
101
                type: 'pie',
102
                height: 350
103
            },
104
            labels: ['Pending', 'Diproses', 'Selesai'],
105
            colors: ['#ff7976', '#57caeb', '#5ddab4'],
106
            legend: {
107
                position: 'bottom',
108
                horizontalAlign: 'center'
109
            }
110
        };
111
        var chart = new ApexCharts(document.querySelector("#chart-pengaduan"), options);
112
        chart.render();
113
    </script>
114
@endsection




Hide Ads
