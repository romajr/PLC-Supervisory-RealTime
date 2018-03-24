<?php
$h1 = 4+3;
$h2 = "4+3 = ";
$h3 = "$h2$h1";
$h4 = "Teste ".$h3;
echo $h4."<br>";
$dbname = 'redes';
$bdcon = pg_connect("host=localhost port=5432 dbname=redes user=postgres password=redes");
if($bdcon){
		$query = 'SELECT * FROM clp';

		$result = pg_query($query);

		$i = 0;
		echo '<html><body><table><tr>';
		while ($i < pg_num_fields($result))
		{
			$fieldName = pg_field_name($result, $i);
			echo '<td>' . $fieldName . '</td>';
			$i = $i + 1;
		}
		echo '</tr>';
		$i = 0;

		while ($row = pg_fetch_row($result)) 
		{
			echo '<tr>';
			$count = count($row);
			$y = 0;
			while ($y < $count)
			{
				$c_row = current($row);
				echo '<td>' . $c_row . '</td>';
				next($row);
				$y = $y + 1;
			}
			echo '</tr>';
			$i = $i + 1;
		}
		pg_free_result($result);
}
else{
	  echo "not OK";
}
?>