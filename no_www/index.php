<html>
<head>
<script type="text/JavaScript">
<!--
function AutoRefresh(interval) {
	setTimeout("location.reload(true);",interval);
}
//   -->
</script>
<title>Monitoramento CLP</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="black" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onload="JavaScript: AutoRefresh(1000000);">
<!-- Save for Web Slices (web_php_clp_lowres.psd) -->
<!-- O pedaco pra baixo criado em Photoshop foi apenas inserido dentro de uma tag php -->
<?php 

// Conexao com o banco de dados
$dbname = 'redes';
$bdcon = pg_connect("host=localhost port=5432 dbname=redes user=postgres password=redes");
if($bdcon){
		$query = 'SELECT * FROM clp ORDER BY tempo DESC';
		$result = pg_query($query);

		$i = 0;
		while ($i < pg_num_fields($result))
		{
			$fieldName = pg_field_name($result, $i);
			$i = $i + 1;
		}
		$i = 0;
		
		$r11_btn = 0;
		$r12_btn = 0;
		$r13_btn = 0;
		$r14_btn = 0;
		$r15_btn = 0;
		$r16_btn = 0;
		$r17_btn = 0;
		$r18_btn = 0;
		$r19_btn = 0;
		$r20_btn = 0;
		$m6_btn = 0;
		$m7_btn = 0;
		$m8_btn = 0;
		$m9_btn = 0;
		$m10_btn = 0;
		$d4_btn = 0;
		$d5_btn = 0;
		$d6_btn = 0;
		$d7_btn = 0;
		$d8_btn = 0;
		$flag0 = 0;
		$flag1 = 0;
		$flag2 = 0;
		$flag3 = 0;
		$flag4 = 0;
		$flag5 = 0;
		$flag6 = 0;
		$flag7 = 0;
		$flag8 = 0;
		$flag9 = 0;
		$flag10 = 0;
		$flag11 = 0;
		$flag12 = 0;
		$flag13 = 0;
		$flag14 = 0;
		$flag15 = 0;
		$flag16 = 0;
		$flag17 = 0;
		$flag18 = 0;
		$flag19 = 0;
		
		  while ($row = pg_fetch_array($result)) {
		  if ($row["nome"]=="r11" && $flag0==0)
		  { 
			$flag0=1;
			$r11_btn=$row["valor"];
		  }
		  if ($row["nome"]=="r12"&& $flag1==0)
		  { 
			$flag1=1;
			$r12_btn=$row["valor"];
		  }
		  if ($row["nome"]=="r13"&& $flag2==0)
		  { 
			$flag2=1;
			$r13_btn=$row["valor"];			
		  }
		  if ($row["nome"]=="r14"&& $flag3==0)
		  { 
			$flag3=1;
			$r14_btn=$row["valor"];
		  }
		  if ($row["nome"]=="r15"&& $flag4==0)
		  { 
			$flag4=1;
			$r15_btn=$row["valor"];
		  }
		  if ($row["nome"]=="r16"&& $flag5==0)
		  { 
			$flag5=1;
			$r16_btn=$row["valor"];
		  }
		  if ($row["nome"]=="r17"&& $flag6==0)
		  { 
			$flag6=1;
			$r17_btn=$row["valor"];
		  }
		  if ($row["nome"]=="r18"&& $flag7==0)
		  { 
			$flag7=1;
			$r18_btn=$row["valor"];
		  }
		  if ($row["nome"]=="r19"&& $flag8==0)
		  { 
			$flag8=1;
			$r19_btn=$row["valor"];
		  }
		  if ($row["nome"]=="r20"&& $flag9==0)
		  { 
			$flag9=1;
			$r20_btn=$row["valor"];
		  }
		  if ($row["nome"]=="m6"&& $flag10==0)
		  { 
			$flag10=1;
			$m6_btn=$row["valor"];
		  }
		  if ($row["nome"]=="m7"&& $flag11==0)
		  { 
			$flag11=1;
			$m7_btn=$row["valor"];
		  }
		  if ($row["nome"]=="m8"&& $flag12==0)
		  { 
			$flag12=1;
			$m8_btn=$row["valor"];
		  }
		  if ($row["nome"]=="m9"&& $flag13==0)
		  { 
			$flag13=1;
			$m9_btn=$row["valor"];
		  }
		  if ($row["nome"]=="m10"&& $flag14==0)
		  { 
			$flag14=1;
			$m10_btn=$row["valor"];
		  }
		  if ($row["nome"]=="d4"&& $flag15==0)
		  { 
			$flag15=1;
			$d4_btn=$row["valor"];
		  }
		  if ($row["nome"]=="d5"&& $flag16==0)
		  { 
			$flag16=1;
			$d5_btn=$row["valor"];
		  }
		  if ($row["nome"]=="d6"&& $flag17==0)
		  { 
			$flag17=1;
			$d6_btn=$row["valor"];
		  }
		  if ($row["nome"]=="d7"&& $flag18==0)
		  { 
			$flag18=1;
			$d7_btn=$row["valor"];
		  }
		  if ($row["nome"]=="d8"&& $flag19==0)
		  { 
			$flag19=1;
			$d8_btn=$row["valor"];
		  }
		}
		pg_free_result($result);
}
else{
	  echo "not OK";
}

echo'<table valign="middle" align="center" id="Table_01" width="1281" height="679" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="42">
			<img src="images/index_01.jpg" width="1280" height="8" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="8" alt=""></td>
	</tr>
	<tr>
		<td colspan="10">
			<img src="images/rli_details.jpg" width="219" height="16" alt=""></td>
		<td colspan="32" rowspan="2">
			<img src="images/index_03.jpg" width="1061" height="39" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="10">
			<img src="images/index_04.jpg" width="219" height="23" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="23" alt=""></td>
	</tr>
	<tr>
		<td colspan="24">
			<img src="images/main_logo.jpg" width="579" height="78" alt=""></td>
		<td colspan="18" rowspan="2">
			<img src="images/index_06.jpg" width="701" height="103" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="78" alt=""></td>
	</tr>
	<tr>
		<td colspan="24" rowspan="2">
			<img src="images/index_07.jpg" width="579" height="38" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="25" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="19">
			<img src="images/index_08.jpg" width="27" height="234" alt=""></td>
		<td colspan="5" rowspan="5">
			<img src="images/valores_m_details.jpg" width="164" height="51" alt=""></td>
		<td colspan="6" rowspan="10">
			<img src="images/index_10.jpg" width="265" height="110" alt=""></td>
		<td rowspan="14">
			<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4466610U7" target="blank2">
				<img src="images/foto_lattes.jpg" width="96" height="140" border="0" alt=""></a></td>
		<td colspan="4" rowspan="6">
			<img src="images/index_12.jpg" width="149" height="70" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="13" alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/index_13.jpg" width="127" height="22" alt=""></td>
		<td colspan="10" rowspan="2">
			<img src="images/sensores_auxiliares_details.jpg" width="243" height="28" alt=""></td>
		<td colspan="8" rowspan="3">
			<img src="images/index_15.jpg" width="209" height="37" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="22" alt=""></td>
	</tr>
	<tr>
		<td rowspan="31">
			<img src="images/index_16.jpg" width="8" height="493" alt=""></td>
		<td colspan="2" rowspan="11">
			<a href="doc_com_clp_roma.pdf" target="blank3">
				<img src="images/sobre.jpg" width="82" height="92" border="0" alt=""></a></td>
		<td colspan="3" rowspan="2">
			<img src="images/index_18.jpg" width="37" height="15" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="6" alt=""></td>
	</tr>
	<tr>
		<td colspan="10">
			<img src="images/index_19.jpg" width="243" height="9" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="14">
			<img src="images/index_20.jpg" width="29" height="130" alt=""></td>
		<td colspan="2" rowspan="4">';
		if ($r11_btn==0) 
			echo '<img src="images/r11_verm.jpg" width="85" height="46" alt="">';
		else  
			echo '<img src="images/r11_verde.jpg" width="85" height="46" alt="">';
echo'</td>
		<td rowspan="13">
			<img src="images/index_22.jpg" width="8" height="112" alt=""></td>
		<td colspan="4" rowspan="4">';
		if ($r12_btn==0) 
			echo '<img src="images/r12_verm.jpg" width="85" height="46" alt="">';
		else  
			echo '<img src="images/r12_verde.jpg" width="85" height="46" alt="">';
echo'</td>
		<td rowspan="13">
			<img src="images/index_24.jpg" width="8" height="112" alt=""></td>
		<td colspan="4" rowspan="4">';
		if ($r13_btn==0) 
			echo '<img src="images/r13_verm.jpg" width="86" height="46" alt="">';
		else  
			echo '<img src="images/r13_verde.jpg" width="86" height="46" alt="">';
echo'</td>
		<td rowspan="13">
			<img src="images/index_26.jpg" width="9" height="112" alt=""></td>
		<td colspan="3" rowspan="4">';
		if ($r14_btn==0) 
			echo '<img src="images/r14_verm.jpg" width="85" height="46" alt="">';
		else  
			echo '<img src="images/r14_verde.jpg" width="85" height="46" alt="">';
echo'</td>
		<td rowspan="13">
			<img src="images/index_28.jpg" width="9" height="112" alt=""></td>
		<td colspan="2" rowspan="4">';
		if ($r15_btn==0) 
			echo '<img src="images/r15_verm.jpg" width="85" height="46" alt="">';
		else  
			echo '<img src="images/r15_verde.jpg" width="85" height="46" alt="">';
echo'</td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="5" rowspan="5">
			<img src="images/index_30.jpg" width="164" height="59" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="19" alt=""></td>
	</tr>
	<tr>
		<td rowspan="10">
			<img src="images/index_31.jpg" width="6" height="81" alt=""></td>
		<td>
			<a href="callto://+5503499870505">
				<img src="images/index_32.jpg" width="101" height="13" alt=""></td>
			</a>
		<td colspan="2" rowspan="5">
			<img src="images/index_33.jpg" width="42" height="44" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="13" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/index_34.jpg" width="101" height="31" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="13" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/index_35.jpg" width="85" height="6" alt=""></td>
		<td colspan="4">
			<img src="images/index_36.jpg" width="85" height="6" alt=""></td>
		<td colspan="4">
			<img src="images/index_37.jpg" width="86" height="6" alt=""></td>
		<td colspan="3">
			<img src="images/index_38.jpg" width="85" height="6" alt=""></td>
		<td colspan="2">
			<img src="images/index_39.jpg" width="85" height="6" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="6" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="6">';
		if ($r16_btn==0) 
			echo '<img src="images/r16_verm.jpg" width="85" height="45" alt="">';
		else  
			echo '<img src="images/r16_verde.jpg" width="85" height="45" alt="">';
echo'</td>
		<td colspan="4" rowspan="6">';
		if ($r17_btn==0) 
			echo '<img src="images/r17_verm.jpg" width="85" height="45" alt="">';
		else  
			echo '<img src="images/r17_verde.jpg" width="85" height="45" alt="">';
echo'</td>
		<td colspan="4" rowspan="6">';
		if ($r18_btn==0) 
			echo '<img src="images/r18_verm.jpg" width="86" height="45" alt="">';
		else  
			echo '<img src="images/r18_verde.jpg" width="86" height="45" alt="">';
echo'</td>
		<td colspan="3" rowspan="6">';
		if ($r19_btn==0) 
			echo '<img src="images/r19_verm.jpg" width="85" height="45" alt="">';
		else  
			echo '<img src="images/r19_verde.jpg" width="85" height="45" alt="">';
echo'</td>
		<td colspan="2" rowspan="6">';
		if ($r20_btn==0) 
			echo '<img src="images/r20_verm.jpg" width="85" height="45" alt="">';
		else  
			echo '<img src="images/r20_verde.jpg" width="85" height="45" alt="">';
echo'</td>
		<td>
			<img src="images/spacer.gif" width="1" height="8" alt=""></td>
	</tr>
	<tr bgcolor="#FFFFFF">
		<td width="48" height="52" rowspan="7"><center><div style="width:48px; max-height:52px; overflow:auto"><center>';
echo $m6_btn;
echo'</center></div></center></td>
		<td rowspan="9">
			<img src="images/index_46.jpg" width="28" height="124" alt=""></td>
		<td width="47" height="52" rowspan="7"><center><div style="width:47px; max-height:52px; overflow:auto"><center>';
echo $m7_btn;		
echo'</center></div></center></td>
		<td rowspan="9">
			<img src="images/index_48.jpg" width="31" height="124" alt=""></td>
		<td width="48" height="52" colspan="2" rowspan="7"><center><div style="width:48px; max-height:52px; overflow:auto"><center>';
echo $m8_btn;		
echo'</center></div></center></td>
		<td rowspan="18">
			<img src="images/index_50.jpg" width="33" height="358" alt=""></td>
		<td width="47" height="52" rowspan="7"><center><div style="width:47px; max-height:52px; overflow:auto"><center>';
echo $m9_btn;		
echo'</center></div></center></td>
		<td rowspan="18">
			<img src="images/index_52.jpg" width="36" height="358" alt=""></td>
		<td width="48" height="52" rowspan="7"><center><div style="width:48px; max-height:52px; overflow:auto"><center>';
echo $m10_btn;		
echo'</center></div></center></td>
		<td rowspan="18">
			<img src="images/index_54.jpg" width="63" height="358" alt=""></td>
		<td bgcolor="black">
			<img src="images/spacer.gif" width="1" height="4" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="mailto:luiz.c.roma.jr@gmail.com?subject=Contato site CLP" target="blank5">
				<img src="images/index_55.jpg" width="114" height="8" alt=""></td>
			</a>
		<td rowspan="17">
			<img src="images/index_56.jpg" width="29" height="354" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="8" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<img src="images/index_57.jpg" width="114" height="29" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="5" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="5">
			<img src="images/index_58.jpg" width="82" height="53" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="13" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/index_59.jpg" width="96" height="11" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="7" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">
			<img src="images/index_60.jpg" width="85" height="15" alt=""></td>
		<td colspan="4" rowspan="2">
			<img src="images/index_61.jpg" width="85" height="15" alt=""></td>
		<td colspan="4" rowspan="2">
			<img src="images/index_62.jpg" width="86" height="15" alt=""></td>
		<td colspan="3" rowspan="2">
			<img src="images/index_63.jpg" width="85" height="15" alt=""></td>
		<td colspan="2" rowspan="2">
			<img src="images/index_64.jpg" width="85" height="15" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="4" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="4">
			<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4466610U7" target="blank2">
				<img src="images/texto_lattes.jpg" width="216" height="84" border="0" alt=""></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="11" alt=""></td>
	</tr>
	<tr>
		<td width="460" height="276" colspan="19" rowspan="8" bgcolor="#FFFFFF">
			<iframe src=table_load.php width = 99% height = 98% scrolling="auto" frameboarder="0"></iframe>
		</td>
		<td rowspan="2">
			<img src="images/index_67.jpg" width="48" height="72" alt=""></td>
		<td rowspan="2">
			<img src="images/index_68.jpg" width="47" height="72" alt=""></td>
		<td colspan="2" rowspan="2">
			<img src="images/index_69.jpg" width="48" height="72" alt=""></td>
		<td rowspan="6">
			<img src="images/index_70.jpg" width="47" height="186" alt=""></td>
		<td rowspan="6">
			<img src="images/index_71.jpg" width="48" height="186" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="18" alt=""></td>
	</tr>
	<tr>
		<td rowspan="15">
			<img src="images/index_72.jpg" width="1" height="348" alt=""></td>
		<td colspan="2" rowspan="3">
			<a href="mailto:luiz.c.roma.jr@gmail.com?subject=AlarmeCLP!!!&body=Deu pane no sistema !!! Avisa o chefe !!!" target="blank4">
				<img src="images/email_text.jpg" width="82" height="92" border="0" alt=""></a></td>
		<td rowspan="9">
			<img src="images/index_74.jpg" width="28" height="284" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="54" alt=""></td>
	</tr>
	<tr>
		<td rowspan="14">
			<img src="images/index_75.jpg" width="25" height="294" alt=""></td>
		<td colspan="6" rowspan="3">
			<img src="images/valores_d_details.jpg" width="166" height="58" alt=""></td>
		<td rowspan="4">
			<img src="images/index_77.jpg" width="38" height="114" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="8">
			<img src="images/index_78.jpg" width="216" height="233" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="37" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="6">
			<img src="images/index_79.jpg" width="82" height="192" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="20" alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/index_80.jpg" width="166" height="56" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="56" alt=""></td>
	</tr>
	<tr bgcolor="#FFFFFF">
		<td rowspan="10">
			<img src="images/index_81.jpg" width="2" height="180" alt=""></td>
		<td width="48" height="52"><div style="width:48px; max-height:52px; overflow:auto"><center>';
echo $d4_btn;		
echo'</center></div></td>
		<td rowspan="10">
			<img src="images/index_83.jpg" width="28" height="180" alt=""></td>
		<td width="47" height="52"><center><div style="width:47px; max-height:52px; overflow:auto"><center>';
echo $d5_btn;		
echo'</center></div></center></td>
		<td rowspan="5">
			<img src="images/index_85.jpg" width="31" height="120" alt=""></td>
		<td width="48" height="52" colspan="2"><center><div style="width:48px; max-height:52px; overflow:auto"><center>';
echo $d6_btn;		
echo'</center></div></center></td>
		<td width="47" height="52"><center><div style="width:47px; max-height:52px; overflow:auto"><center>';
echo $d7_btn;		
echo'</center></div></center></td>
		<td width="48" height="52"><center><div style="width:48px; max-height:52px; overflow:auto"><center>';
echo $d8_btn;		
echo'</center></div></center></td>
		<td bgcolor="black">
			<img src="images/spacer.gif" width="1" height="52" alt=""></td>
	</tr>
	<tr>
		<td rowspan="9">
			<img src="images/index_89.jpg" width="48" height="128" alt=""></td>
		<td rowspan="4">
			<img src="images/index_90.jpg" width="47" height="68" alt=""></td>
		<td colspan="2" rowspan="4">
			<img src="images/index_91.jpg" width="48" height="68" alt=""></td>
		<td rowspan="4">
			<img src="images/index_92.jpg" width="47" height="68" alt=""></td>
		<td rowspan="4">
			<img src="images/index_93.jpg" width="48" height="68" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="38" alt=""></td>
	</tr>
	<tr>
		<td colspan="19">
			<img src="images/index_94.jpg" width="460" height="23" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="23" alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/index_95.jpg" width="142" height="3" alt=""></td>
		<td colspan="3" rowspan="6">
			<a href="http://www.ufu.br/" target="blank">
				<img src="images/ufu_logo.jpg" width="58" height="58" border="0" alt=""></a></td>
		<td colspan="10">
			<img src="images/index_97.jpg" width="260" height="3" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="3" alt=""></td>
	</tr>
	<tr>
		<td rowspan="6">
			<img src="images/index_98.jpg" width="81" height="64" alt=""></td>
		<td colspan="6" rowspan="3">
			<img src="images/index_99.jpg" width="123" height="48" alt=""></td>
		<td colspan="2" rowspan="6">
			<img src="images/index_100.jpg" width="48" height="64" alt=""></td>
		<td rowspan="6">
			<img src="images/index_101.jpg" width="39" height="64" alt=""></td>
		<td colspan="4" rowspan="4">
			<a href="http://www.feelt.ufu.br/" target="blank">
				<img src="images/feelt_logo.jpg" width="53" height="54" border="0" alt=""></a></td>
		<td colspan="5" rowspan="2">
			<img src="images/index_103.jpg" width="168" height="5" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="4" alt=""></td>
	</tr>
	<tr>
		<td colspan="14" rowspan="5">
			<img src="images/rodape_logo.jpg" width="598" height="60" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/index_105.jpg" width="33" height="59" alt=""></td>
		<td colspan="3">
			<a href="http://www.mecanica.ufu.br/" target="blank">
				<img src="images/femec_logo.jpg" width="116" height="43" border="0" alt=""></a></td>
		<td rowspan="4">
			<img src="images/index_107.jpg" width="19" height="59" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="6" rowspan="3">
			<img src="images/index_108.jpg" width="123" height="16" alt=""></td>
		<td colspan="3" rowspan="3">
			<img src="images/index_109.jpg" width="116" height="16" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="6" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="2">
			<img src="images/index_110.jpg" width="53" height="10" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/index_111.jpg" width="58" height="9" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="8" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="81" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="28" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="8" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="77" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="8" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="6" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="42" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="36" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="8" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="14" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="39" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="12" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="21" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="9" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="11" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="33" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="41" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="9" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="66" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="19" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="25" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="48" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="28" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="47" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="31" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="10" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="38" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="33" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="47" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="36" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="48" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="63" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="96" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="6" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="101" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="29" height="1" alt=""></td>
		<td></td>
	</tr>
</table>';
?>

<!-- End Save for Web Slices -->
</body>
</html>