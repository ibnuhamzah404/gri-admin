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
    const xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
    const yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

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



</body>

</html>