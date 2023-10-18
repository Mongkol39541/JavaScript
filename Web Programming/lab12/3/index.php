<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container-fuild mt-5">
        <center>
        <?php
        $url = "http://10.0.15.21/lab12/restapis/products.php?list=10";   
        $dataPoints = file_get_contents($url);
        $result = json_decode($dataPoints);
        $data = "[";
        foreach ($result as $item) {
            $data .= json_encode(array('label' => $item->ProductCode, 'y' => floatval($item->UnitPrice))) . ",";
        }
        $data .= "]";
        ?>
        <div id="chartContainer" style="height: 450px; width: 80%;"></div>
        </center>
    </div>
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Price of Products"
                },
                axisY: {
                    title: "Revenue (in THB)",
                    includeZero: true,
                    prefix: "",
                    suffix: "M"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0M",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    indexLabelFontColor: "white",
                    dataPoints: <?php echo $data; ?>
                }]
            });
            chart.render();
        }
    </script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<body>
</body>
</html>