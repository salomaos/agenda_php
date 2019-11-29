<?php

$mes = [
    "1" => "Janeiro",
    "2" => "Fevereiro",
    "3" => "Março",
    "4" => "Abril",
    "5" => "Maio",
    "6" => "Junho",
    "7" => "Julho",
    "8" => "Agosto",
    "9" => "Setembro",
    "10" => "Outubro",
    "11" => "Novembro",
    "12" => "Dezembro"
];
require_once "classes/contatos.php";
$contatos = new contatos();

?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Quantidade por mês'],
        <?php foreach ($contatos->aniversariantes($_SESSION["idUsuario"]) as $key => $value) : ?>
            [<?php echo json_encode($mes[$value->mes]); ?>, <?php echo json_encode(intval($value->quantidade)); ?>],
        <?php endforeach ?>
    ]);

    var options = {
        title: 'Aniversariantes do Mês',
        is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
    }
</script>

<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
