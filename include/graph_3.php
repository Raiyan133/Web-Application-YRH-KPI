<script>
  window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      title: {
        text: ""
      },
      axisY: {
        includeZero: false,
      },
      legend: {
        cursor: "pointer",
        itemclick: toggleDataSeries
      },
      toolTip: {
        shared: true
      },
      data: [{
          type: "line",
          name: "<?php echo "$year_1"; ?>",
          color: "#CE8792",
          showInLegend: "true",
          xValueType: "dateTime",
          xValueFormatString: "MMM YYYY",
          yValueFormatString: "#,##0.##",
          dataPoints: <?php echo json_encode($dataPoints1); ?>
        },
        {
          type: "line",
          name: "<?php echo "$year_2"; ?>",
          color: "#819AD4",
          showInLegend: "true",
          xValueType: "dateTime",
          xValueFormatString: "MMM YYYY",
          yValueFormatString: "#,##0.##",
          dataPoints: <?php echo json_encode($dataPoints2); ?>
        },
        {
          type: "line",
          name: "<?php echo "$year_3"; ?>",
          color: "#567676",
          showInLegend: "true",
          xValueType: "dateTime",
          xValueFormatString: "MMM YYYY",
          yValueFormatString: "#,##0.##",
          dataPoints: <?php echo json_encode($dataPoints3); ?>
        }
      ]
    });

    chart.render();

    function toggleDataSeries(e) {
      if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
      } else {
        e.dataSeries.visible = true;
      }
      chart.render();
    }

  }
</script>