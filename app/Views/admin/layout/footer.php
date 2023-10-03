<footer class="main-footer">
    <strong>Copyright &copy; GRI <a href="https://adminlte.io"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
    const xValues = [50, 60, 70, 80, 90, 090, 109, 120, 120, 140, 150];
    const yValues = [7, 8, 8, 9, 9, 9, 09, 11, 14, 14, 15];

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        min: 6,
                        max: 16
                    }
                }],
            }
        }
    });
</script>

<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"> </script>





<script src="<?= base_url() . 'assets/admin/js/jquery-min.js' ?>"></script>
<script src="<?= base_url() . 'assets/admin/js/jquery-ui.js' ?>"></script>
<script src="<?= base_url() . 'assets/admin/js/adminltejs.js' ?>"></script>
<script src="<?= base_url() . 'assets/admin/js/dashboardjs.js' ?>"></script>



<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="<?= base_url() . 'assets/admin/js/bootstrapjs.js' ?>"></script>



<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>

<script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script type="text/javascript" src="<?= base_url() . 'assets/admin/js/gantt/lib/jquery-1.4.2.js' ?> "></script>
<script type="text/javascript" src="<?= base_url() . 'assets/admin/js/gantt/lib/date.js' ?>"></script>

<script type="text/javascript" src="<?= base_url() . 'assets/admin/js/gantt/jquery.ganttView.js' ?> "></script>

<script type="text/javascript" src="<?= base_url() . 'assets/admin/js/gantt/lib/jquery-ui-1.8.4.js' ?> "></script>

<script>
    const today = new Date();
    const yyyy = today.getFullYear();
    let mm = today.getMonth() + 1; // Months start at 0!
    let dd = today.getDate() + 1;

    if (dd < 10) dd = '0' + dd;
    if (mm < 10) mm = '0' + mm;

    const formattedToday = yyyy + ',' + mm + ',' + dd;


    var ganttData = [{

            id: 1,
            name: "Pek. Pemasangan bouwplank",
            series: [{
                    name: "Planned",
                    start: new Date(2023, 09, 01),
                    end: new Date(2023, 10, 20),
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 60

                },
                {
                    name: "Progress",
                    start: new Date(2023, 09, 01),
                    end: formattedToday,
                    color: "lightyellow",
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 60,

                }
            ]
        },
        {
            id: 2,
            name: "Pek. Galian tanah untuk pondasi dan Tie beam",
            series: [{
                    name: "Planned",
                    start: new Date(2023, 09, 01),
                    end: new Date(2023, 10, 20),
                    volume: 57.36,
                    persen: 0.40,
                    dikerjakan: 57.36
                },
                {
                    name: "Progress",
                    start: new Date(2023, 09, 02),
                    end: formattedToday,
                    color: "lightyellow",
                    volume: 57.36,
                    persen: 0.40,
                    dikerjakan: 57.36
                },

            ]
        },
        {
            id: 3,
            name: "Pek. Urugan kembali bekas galian",
            series: [{
                    name: "Planned",
                    start: new Date(2023, 09, 01),
                    end: new Date(2023, 10, 20),
                    volume: 39.49,
                    persen: 0.13,
                    dikerjakan: 39.49
                },
                {
                    name: "Progress",
                    start: new Date(2023, 09, 03),
                    end: formattedToday,
                    color: "lightyellow",
                    volume: 39.49,
                    persen: 0.13,
                    dikerjakan: 10
                }
            ]
        },
        {
            id: 4,
            name: "Pek. Buangan Tanah Bekas Galian",
            series: [{
                    name: "Planned",
                    start: new Date(2023, 09, 01),
                    end: new Date(2023, 10, 20),
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 60
                },
                {
                    name: "Progress",
                    start: new Date(2023, 09, 01),
                    end: formattedToday,
                    color: "lightyellow",
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 20
                }
            ]
        },
        {
            id: 5,
            name: "Pek. Urugan pasir di bawah pondasi & Tie beam",
            series: [{
                    name: "Planned",
                    start: new Date(2023, 09, 04),
                    end: new Date(2023, 10, 20),
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 20
                },
                {
                    name: "Progress",
                    start: new Date(2023, 09, 04),
                    end: formattedToday,
                    color: "lightyellow",
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 20
                }
            ]
        },
        {
            id: 6,
            name: "Pek. Lantai kerja di bawah pondasi & Tie beam",
            series: [{
                    name: "Planned",
                    start: new Date(2023, 09, 04),
                    end: new Date(2023, 10, 20),
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 60
                },
                {
                    name: "Progress",
                    start: new Date(2023, 09, 04),
                    end: formattedToday,
                    color: "lightyellow",
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 60
                },

            ]
        },

    ];

    var ganttData2 = [{
            id: 2,
            name: "Pek. Pas. Pondasi telapak tipe PT1 - Cor Beton",
            series: [{
                    name: "Planned",
                    start: new Date(2023, 09, 01),
                    end: new Date(2023, 10, 20),
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 60
                },
                {
                    name: "Progress",
                    start: new Date(2023, 09, 01),
                    end: formattedToday,
                    color: "lightyellow",
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 60
                },

            ]
        },
        {
            id: 3,
            name: "Pek. Pas. Pondasi telapak tipe PT1 - Besi tulangan 14 D13",
            series: [{
                    name: "Planned",
                    start: new Date(2023, 09, 01),
                    end: new Date(2023, 10, 20),
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 60
                },
                {
                    name: "Progress",
                    start: new Date(2023, 09, 01),
                    end: formattedToday,
                    color: "lightyellow",
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 20
                }
            ]
        },
        {
            id: 4,
            name: "Pek. Pas. Pondasi telapak tipe PT1 - Besi sengkang D10 - 120",
            series: [{
                    name: "Planned",
                    start: new Date(2023, 09, 01),
                    end: new Date(2023, 10, 20),
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 60
                },
                {
                    name: "Progress",
                    start: new Date(2023, 09, 01),
                    end: formattedToday,
                    color: "lightyellow",
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 20
                }
            ]
        },
        {
            id: 5,
            name: "Pek. Pas. Pondasi telapak tipe PT1 - Bekisting",
            series: [{
                    name: "Planned",
                    start: new Date(2023, 09, 01),
                    end: new Date(2023, 10, 20),
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 60
                },
                {
                    name: "Progress",
                    start: new Date(2023, 09, 01),
                    end: formattedToday,
                    color: "lightyellow",
                    volume: 60,
                    persen: 0.59,
                    dikerjakan: 10
                }
            ]
        },


    ];
</script>
<script type="text/javascript">
    $(function() {
        $("#ganttChart").ganttView({
            data: ganttData,
            slideWidth: 2000,
            behavior: {
                onClick: function(data) {
                    var msg = "You clicked on an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                    $("#eventMessage").text(msg);
                },
                onResize: function(data) {
                    var msg = "You resized an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                    $("#eventMessage").text(msg);
                },
                onDrag: function(data) {
                    var msg = "You dragged an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                    $("#eventMessage").text(msg);
                }
            }
        });



    });

    $(function() {
        $("#ganttChart2").ganttView({
            data: ganttData2,
            slideWidth: 2000,
            behavior: {
                onClick: function(data) {
                    var msg = "You clicked on an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                    $("#eventMessage").text(msg);
                },
                onResize: function(data) {
                    var msg = "You resized an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                    $("#eventMessage").text(msg);
                },
                onDrag: function(data) {
                    var msg = "You dragged an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                    $("#eventMessage").text(msg);
                }
            }
        });


    });
</script>


</body>

</html>