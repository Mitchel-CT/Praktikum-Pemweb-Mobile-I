<?php
include('connect.php');
$qsel =  mysqli_query($koneksi, "SELECT GENRE_GAME AS 'GENRE GAME',COUNT(GENRE_GAME) AS 'Jumlah' FROM survei GROUP BY GENRE_GAME;");
$rsel = mysqli_fetch_all($qsel, MYSQLI_ASSOC);
?>

<html>
<head>
<script src="chart.js"></script>
<title>Hasil Survei</title>
</head>

<body>
    <h1>Hasil Suvei Genre Game </h1>
    <br><br>
    <table border="1" id="datatabel">
        <thead>
            <th>Genre Game</th>
            <th>Jumlah</th>
        </thead>
        <tbody>
            <?php foreach ($rsel as $vsel) { ?>
                <tr>
                    <td><?=  $vsel['GENRE GAME'] ?></td>
                    <td><?=  $vsel['Jumlah']?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br></br>

<canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php foreach ($rsel as $vsel) { echo "'".$vsel['GENRE GAME']."',"; } ?>],
        datasets: [{
        label: '# of Votes',
            data: [<?php foreach ($rsel as $vsel) {  echo "'".$vsel['Jumlah']."',";} ?>],
            backgroundColor: [
                'rgba(252, 3, 3, 0.5)',
                'rgba(252, 3, 3, 0.5)',
                'rgba(252, 3, 3, 0.5)',
                'rgba(252, 3, 3, 0.5)',
                'rgba(252, 3, 3, 0.5)',
                'rgba(252, 3, 3, 0.5)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive : false
    }
});
</script>
</body>
</html>

