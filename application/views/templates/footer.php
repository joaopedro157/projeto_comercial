       

        <div class="footer" > 
            <div>
                <strong>Copyright</strong> Solides Tecnologia LTDA &copy; 2018-2020
            </div> 


    
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/curvedLines.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <script>
        $(document).ready(function() {

            var lineData = {
                labels: ["<?php echo $grafico['0']['data_ganho'] ?>", "<?php echo $grafico['1']['data_ganho'] ?>", "<?php echo $grafico['2']['data_ganho'] ?>", "<?php echo $grafico['3']['data_ganho']?>", "<?php echo $grafico['4']['data_ganho'] ?>","<?php echo $grafico['5']['data_ganho'] ?>","<?php echo $grafico['6']['data_ganho'] ?>","<?php echo $grafico['7']['data_ganho'] ?>","<?php echo $grafico['8']['data_ganho'] ?>","<?php echo $grafico['9']['data_ganho'] ?>","<?php echo $grafico['10']['data_ganho'] ?>","<?php echo $grafico['11']['data_ganho'] ?>","<?php echo $grafico['12']['data_ganho'] ?>"],
                datasets: [
                    {
                        label: "Ganhos Por Dia(atual)",
                        backgroundColor: "rgba(26,179,148,0.5)",
                        borderColor: "rgba(26,179,148,0.7)",
                        pointBackgroundColor: "rgba(26,179,148,1)",
                        pointBorderColor: "#fff",
                        data: [<?php echo round($grafico['0']['SUM(value)']) ?>,<?php echo round($grafico['1']['SUM(value)']) ?>,<?php echo round($grafico['2']['SUM(value)']) ?>,<?php echo round($grafico['3']['SUM(value)']) ?>,<?php echo round($grafico['4']['SUM(value)']) ?>,<?php echo round($grafico['5']['SUM(value)']) ?>,<?php echo round($grafico['6']['SUM(value)']) ?>,<?php echo round($grafico['7']['SUM(value)']) ?>,<?php echo round($grafico['8']['SUM(value)']) ?>,<?php echo round($grafico['9']['SUM(value)']) ?>,<?php echo round($grafico['10']['SUM(value)']) ?>,<?php echo round($grafico['11']['SUM(value)']) ?>,<?php echo round($grafico['12']['SUM(value)']) ?>]
                    },
                    {
                        label: "Ganho Por Dia(mes passado)",
                        backgroundColor: "rgba(220,220,220,0.5)",
                        borderColor: "rgba(220,220,220,1)",
                        pointBackgroundColor: "rgba(220,220,220,1)",
                        pointBorderColor: "#fff",
                        data: [60, 59, 80, 81, 56, 55, 40]
                    }
                ]
            };

            var lineOptions = {
                responsive: true
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});

        });
    </script>
</body>
</html>
