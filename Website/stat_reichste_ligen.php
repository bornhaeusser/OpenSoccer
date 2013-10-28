<?php include 'zz1.php'; ?>
<title>Reichste Ligen | Ballmanager.de</title>
<style type="text/css">
<!--
.liga_<?php echo $cookie_liga; ?> {
	font-weight: bold;
}
-->
</style>
<?php include 'zz2.php'; ?>
<?php include 'zzsubnav_statistik.php'; ?>
<h1>Reichste Ligen</h1>
<?php if ($loggedin == 1) { ?>
<p>In welcher Liga spielen die reichsten Teams? Diese Statistik zeigt den Durschnitt der Kontostände.</p>
<p>
<table>
<thead>
<tr class="odd">
<th scope="col">&nbsp;</th>
<th scope="col">Liga</th>
<th scope="col">Durchschnitt</th>
</tr>
</thead>
<tbody>
<?php
$ausdruck = "(SELECT AVG(konto) FROM ".$prefix."teams WHERE liga = man_ligen.ids)";
$sql1 = "SELECT ids, name, ".$ausdruck." FROM ".$prefix."ligen ORDER BY ".$ausdruck." DESC LIMIT 0, 26";
$sql2 = mysql_query($sql1);
$counter = 1;
while ($sql3 = mysql_fetch_assoc($sql2)) {
	if ($counter % 2 == 1) { echo '<tr class="liga_'.$sql3['ids'].'">'; } else { echo '<tr class="liga_'.$sql3['ids'].' odd">'; }
	echo '<td>'.$counter.'.</td><td class="link"><a href="/lig_tabelle.php?liga='.$sql3['ids'].'">'.$sql3['name'].'</a></td><td>'.number_format($sql3[$ausdruck], 0, ',', '.').' €</td>';
	echo '</tr>';
	$counter++;
}
?>
</tbody>
</table>
</p>
<?php } else { ?>
<p>Du musst angemeldet sein, um diese Seite aufrufen zu können!</p>
<?php } ?>
<?php include 'zz3.php'; ?>