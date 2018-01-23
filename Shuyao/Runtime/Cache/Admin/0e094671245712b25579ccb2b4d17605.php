<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Highcharts Example</title>

        <style type="text/css">
#container {
    min-width: 310px;
    max-width: 800px;
    height: 400px;
    margin: 0 auto
}
        </style>
    </head>
    <body>
<script src="/cafe/Public/code/highcharts.js"></script>
<script src="/cafe/Public/code/modules/series-label.js"></script>
<script src="/cafe/Public/js/jquery.js"></script>
<script src="/cafe/Public/code/modules/exporting.js"></script>

<div id="container"></div>


<script type="text/javascript">

    $data = eval(<?php echo $list;?>);
    for (i=0;i<$data.length;i++){
        $data[i] = parseInt($data[i]);
    }

     $s = eval(<?php echo $time;?>);
     for (i=0;i<$s.length;i++){
        $date = new Date(parseInt($s[i]));
        $s[i] = ($date.getMonth()+1)+"月";
    }

Highcharts.chart('container', {

    title: {
        text: '蜀肴'
    },

    // subtitle: {
    //     text: 'Source: thesolarfoundation.com'
    // },
    /*X轴*/
    xAxis: {
            categories: $s
    },

    /*Y轴*/
    yAxis: {
        title: {
            text: '营业额(元)'
        },
        tickPositioner: function () {
                var positions = [],
                    tick = Math.floor(this.dataMin),
                    increment = Math.ceil((this.dataMax - this.dataMin) / 6);
                for (tick; tick - increment <= this.dataMax; tick += increment) {
                    positions.push(tick);
                }
                return positions;
            }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    /*plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            //pointStart: 2010
        }
    },*/

    series: [{
        name: '营业额',
        data:$data,
}],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
        </script>
    </body>
</html>