<?php
if (!empty($graph_1) && !empty($graph_2) && empty($graph_3) && empty($graph_4) && empty($graph_5)) {
  ?>
<script>
  window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      title: {
        text: ""
      },
      axisY: {
        title: "ผลรวมของจำนวนทั้งหมด",
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
<?php
} else if (!empty($graph_1) && !empty($graph_2) && !empty($graph_3) && empty($graph_4) && empty($graph_5)) {
  ?>
<script>
  window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      title: {
        text: ""
      },
      axisY: {
        title: "ผลรวมของจำนวนทั้งหมด",
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
<?php
} else if (!empty($graph_1) && !empty($graph_2) && !empty($graph_3) && !empty($graph_4) && empty($graph_5)) {
  ?>
<script>
  window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      title: {
        text: ""
      },
      axisY: {
        title: "ผลรวมของจำนวนทั้งหมด",
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
        },
        {
          type: "line",
          name: "<?php echo "$year_4"; ?>",
          color: "#DC7633",
          showInLegend: "true",
          xValueType: "dateTime",
          xValueFormatString: "MMM YYYY",
          yValueFormatString: "#,##0.##",
          dataPoints: <?php echo json_encode($dataPoints4); ?>
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
<?php
} else if (!empty($graph_1) && !empty($graph_2) && !empty($graph_3) && !empty($graph_4) && !empty($graph_5)) {
  ?>




<script>
  window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      title: {
        text: ""
      },
      axisY: {
        title: "ผลรวมของจำนวนทั้งหมด",
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
        },
        {
          type: "line",
          name: "<?php echo "$year_4"; ?>",
          color: "#DC7633",
          showInLegend: "true",
          xValueType: "dateTime",
          xValueFormatString: "MMM YYYY",
          yValueFormatString: "#,##0.##",
          dataPoints: <?php echo json_encode($dataPoints4); ?>
        },
        {
          type: "line",
          name: "<?php echo "$year_5"; ?>",
          color: "#76448A",
          showInLegend: "true",
          xValueType: "dateTime",
          xValueFormatString: "MMM YYYY",
          yValueFormatString: "#,##0.##",
          dataPoints: <?php echo json_encode($dataPoints5); ?>
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

<?php } ?>