<script>
  window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      theme: "light1",
      title: {
        text: ""
      },
      axisX: {
        valueFormatString: ""
      },
      axisY: {
        title: "",
        includeZero: false,
      },
      data: [{
        type: "stackedArea",
        color: "#D8BFD8",
        xValueType: "dateTime",
        xValueFormatString: "",
        yValueFormatString: "#,##0 ",
        dataPoints: <?php echo json_encode($dataPoints); ?>
      }]
    });

    chart.render();

  }
</script>