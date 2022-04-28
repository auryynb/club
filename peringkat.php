<style>
    table, th, td {
  border: 1px solid;
}
</style>
<table>
  <tr>
    <th>Rank</th>
    <th>Club</th>
    <th>Poin</th>
    <th>Total Menang</th>
    <th>Total Kalah</th>
    <th>Total Seri</th>
    <th>Total Gol</th>
    <th>Total Kebobol</th>
    <th>Selisih Gol</th>
  </tr>
<tbody>
    <?php
    $j = count($peringkat);
    for ($i = 0; $i < $j; $i++) //loop through the array..
    {
        echo "<tr><td>".($i+1)."</td><td>" . $peringkat[$i]["nama"] . "</td><td>" . $peringkat[$i]["poin"] . "</td><td>" .
            $peringkat[$i]["totalmenang"] . "</td><td>" . $peringkat[$i]["totalkalah"] . "</td><td>" .
            $peringkat[$i]["totalseri"] . "</td><td>" . $peringkat[$i]["totalgol"] . "</td><td>" .
            $peringkat[$i]["totalkebobol"] . "</td><td>" . ($peringkat[$i]["selisihgol"]) . "</td></tr>";
    }
    ?>
    </tbody>
</table>