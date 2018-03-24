<html>
<head>
<title>Monitoramento CLP</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php
$bdcon = pg_connect("host=localhost port=5432 dbname=redes user=postgres password=redes");
if($bdcon){
		
		echo '<html><body>';
		
		$query = 'SELECT * FROM clp ORDER BY tempo ASC';

		$result = pg_query($query);

		$i = 0;
				
		$vec_tempo = array();
		$vec_tempo_limpo = array();
		
		//ComboBox 1 para inicio		
		echo '<form method="get">
		  <select name="ComboBox1">
			<option>Comeco Leitura</option>';
		  while ($row = pg_fetch_array($result)){
			array_push($vec_tempo, $row["tempo"]);
		  }
		  $vec_tempo_limpo = array_keys(array_flip($vec_tempo));
		  for ($i = 0 ; $i < count($vec_tempo_limpo); $i++){
			echo'<option>';
			echo $vec_tempo_limpo[$i];
			echo'</option>';
		  }
		  echo'</select>';
		
		//ComboBox 2 para inicio
		echo'<select name="ComboBox2">
			<option>Fim Leitura</option>';
		  for ($i = 0 ; $i < count($vec_tempo_limpo); $i++){
			echo'<option>';
			echo $vec_tempo_limpo[$i];
			echo'</option>';
		  }
		  echo'</select>
			<input type="submit" name="submit" value="Pesquisar">
		</form>';
		
		$inicio_str = $_GET["ComboBox1"];
		$fim_str = $_GET["ComboBox2"];
		//Tratamento de erro para usuario
		if($inicio_str == "Comeco Leitura"){
			$inicio_str = "1991-01-07 00:00:00.000";
		}
		if($fim_str == "Fim Leitura"){
			$fim_str = "now";
		}
		
		$query2 = "SELECT * FROM clp WHERE(tempo >= '$inicio_str' AND tempo <= '$fim_str') ORDER BY tempo ASC, nome ASC";
		$result2 = pg_query($query2);
		//echo $query2;
			
		//Composicao da tabela principal	
		echo '<table border="2" style="font-size:8">';
		
		$var_help_time_antes = 0;
		$var_help_time_atual = 0;
		$linha_nova = 1;
		$escrito = false;
		$position_cell_atual = 0;
		echo '<tr><td>Time</td><td>R11</td><td>R12</td><td>R13</td><td>R14</td><td>R15</td><td>R16</td><td>R17</td><td>R18</td><td>R19</td><td>R20</td><td>M6</td><td>M7</td><td>M8</td><td>M9</td><td>M10</td><td>D4</td><td>D5</td><td>D6</td><td>D7</td><td>D8</td><tr>';
		
		//Leitura dos dados do banco de dados por ordem de tempo
		while ($row = pg_fetch_array($result2)){
			$escrito = false;
			while($escrito == false){
				if($linha_nova == 1){
					$position_cell_atual = 0;
					echo '</tr><tr><td>';
					echo $row["tempo"];
					echo '</td>';
					$linha_nova = 0;
					$position_cell_atual = 1;
				}
				else{				
					if($row["nome"]=="r11"){
						if($position_cell_atual == 1){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 2;
							$escrito = true;
						}
						else if($position_cell_atual > 1){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 1){
							//Nao faz nada eh impossivel
						}
					}
					else if($row["nome"]=="r12"){
						if($position_cell_atual == 2){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 3;
							$escrito = true;
						}
						else if($position_cell_atual > 2){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 2){
							echo '<td></td>';
							$position_cell_atual = 2;
						}
					}
					else if($row["nome"]=="r13"){
						if($position_cell_atual == 3){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 4;
							$escrito = true;
						}
						else if($position_cell_atual > 3){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 3){
							$i = 0;
							while($i != (3-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 3;
						}
					}
					else if($row["nome"]=="r14"){
						if($position_cell_atual == 4){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 5;
							$escrito = true;
						}
						else if($position_cell_atual > 4){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 4){
							$i = 0;
							while($i != (4-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 4;
						}
					}
					else if($row["nome"]=="r15"){
						if($position_cell_atual == 5){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 6;
							$escrito = true;
						}
						else if($position_cell_atual > 5){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 5){
							$i = 0;
							while($i != (5-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 5;
						}
					}
					else if($row["nome"]=="r16"){
						if($position_cell_atual == 6){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 7;
							$escrito = true;
						}
						else if($position_cell_atual > 6){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 6){
							$i = 0;
							while($i != (6-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 6;
						}
					}
					else if($row["nome"]=="r17"){
						if($position_cell_atual == 7){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 8;
							$escrito = true;
						}
						else if($position_cell_atual > 7){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 7){
							$i = 0;
							while($i != (7-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 7;
						}
					}
					else if($row["nome"]=="r18"){
						if($position_cell_atual == 8){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 9;
							$escrito = true;
						}
						else if($position_cell_atual > 8){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 8){
							$i = 0;
							while($i != (8-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 8;
						}
					}
					else if($row["nome"]=="r19"){
						if($position_cell_atual == 9){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 10;
							$escrito = true;
						}
						else if($position_cell_atual > 9){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 9){
							$i = 0;
							while($i != (9-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 9;
						}
					}
					else if($row["nome"]=="r20"){
						if($position_cell_atual == 10){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 11;
							$escrito = true;
						}
						else if($position_cell_atual > 10){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 10){
							$i = 0;
							while($i != (10-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 10;
						}
					}
					else if($row["nome"]=="m6"){
						if($position_cell_atual == 11){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 12;
							$escrito = true;
						}
						else if($position_cell_atual > 11){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 11){
							$i = 0;
							while($i != (11-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 11;
						}
					}
					else if($row["nome"]=="m7"){
						if($position_cell_atual == 12){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 13;
							$escrito = true;
						}
						else if($position_cell_atual > 12){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 12){
							$i = 0;
							while($i != (12-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 12;
						}
					}
					else if($row["nome"]=="m8"){
						if($position_cell_atual == 13){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 14;
							$escrito = true;
						}
						else if($position_cell_atual > 13){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 13){
							$i = 0;
							while($i != (13-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 13;
						}
					}
					else if($row["nome"]=="m9"){
						if($position_cell_atual == 14){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 15;
							$escrito = true;
						}
						else if($position_cell_atual > 14){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 14){
							$i = 0;
							while($i != (14-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 14;
						}
					}
					else if($row["nome"]=="m10"){
						if($position_cell_atual == 15){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 16;
							$escrito = true;
						}
						else if($position_cell_atual > 15){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 15){
							$i = 0;
							while($i != (15-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 15;
						}
					}
					else if($row["nome"]=="d4"){
						if($position_cell_atual == 16){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 17;
							$escrito = true;
						}
						else if($position_cell_atual > 16){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 16){
							$i = 0;
							while($i != (16-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 16;
						}
					}
					else if($row["nome"]=="d5"){
						if($position_cell_atual == 17){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 18;
							$escrito = true;
						}
						else if($position_cell_atual > 17){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 17){
							$i = 0;
							while($i != (17-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 17;
						}
					}
					else if($row["nome"]=="d6"){
						if($position_cell_atual == 18){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 19;
							$escrito = true;
						}
						else if($position_cell_atual > 18){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 18){
							$i = 0;
							while($i != (18-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 18;
						}
					}
					else if($row["nome"]=="d7"){
						if($position_cell_atual == 19){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$position_cell_atual = 20;
							$escrito = true;
						}
						else if($position_cell_atual > 19){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 19){
							$i = 0;
							while($i != (19-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 19;
						}
					}
					else if($row["nome"]=="d8"){
						if($position_cell_atual == 20){
							echo '<td>';
							echo $row["valor"];
							echo '</td>';
							$linha_nova = 1;
							$position_cell_atual = 21;
							$escrito = true;
						}
						else if($position_cell_atual > 20){
							$linha_nova = 1;
						}
						else if($position_cell_atual < 20){
							$i = 0;
							while($i != (20-$position_cell_atual)){
								echo '<td></td>';
								$i++;
							}
							$position_cell_atual = 20;
						}
					}
					if($position_cell_atual >= 21){
						$position_cell_atual = 0;
						$linha_nova = 1;
						$escrito = true;
					}
				}
			}
		}
		
		echo '</table>';
		pg_free_result($result);
	}

else{
	  echo "not OK";
}
?>

</body>
</html>