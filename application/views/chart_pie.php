<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $judul ?></title>
</head>

<body>


    <div id="container"></div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript">
        // Build the chart
        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Perbandingan Stock Buku'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Stock',
                colorByPoint: true,

                //format data buku
                data: [
                    <?php foreach ($data_buku as $buku) : ?> {
                            name: '<?php echo $buku['judul']; ?>',
                            y: <?php echo $buku['stok_tersedia']; ?>
                        },
                    <?php endforeach ?>
                ]

                //format data original
                /*
	        data: [
	        		{
			            name: 'Chrome',
			            y: 61.41
			        }, 
			        {
			            name: 'Internet Explorer',
			            y: 11.84
			        }, 
			        {
			            name: 'Firefox',
			            y: 10.85
			        },
			   	]
			*/
            }]
        });
    </script>

</body>

</html>