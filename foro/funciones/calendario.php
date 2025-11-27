<?php 
///

//$FCP = array('2','5','7','9','12','14',22,19,26,11,25);
$FCP = $DDF;
////FECHA RAIZ
////
$D = $DiaR = 1;
$M = $MesR = $DFM;
$A = $AniR = $DFA;
///////////
function diaconpartido($D,$Fechas,$F,$urlact){
	if(in_array($D,$Fechas)){
		list($aa,$mm,$dd) = split('-',$F);
		$F = date("Y-m-d",mktime(0, 0, 0, $mm, $dd, $aa));
		$D = "<a href=\"".$urlact."&fechadia=".$F."\"><strong>".$D."</strong></a>";
	}
	return $D;
}
///
echo "<table width=\"210\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\" class=\"tablehead2\">
  <tr class=\"colhead\">
    <td width=\"30\" align=\"center\">L</td>
    <td width=\"30\" align=\"center\">M</td>
    <td width=\"30\" align=\"center\">M</td>
    <td width=\"30\" align=\"center\">J</td>
    <td width=\"30\" align=\"center\">V</td>
    <td width=\"30\" align=\"center\">S</td>
    <td width=\"30\" align=\"center\">D</td>
  </tr>
";
for($i=0;$i<6;$i++){
			$DL = "&nbsp;";
			$DD2 = date("j",mktime(0, 0, 0, $M, $D, $A));
			$DD3 = date("D",mktime(0, 0, 0, $M, $D, $A));
			if($DD3 == "Mon" && checkdate($M, $D, $A)){ 
				$DL = diaconpartido($DD2,$FCP,$A."-".$M."-".$D,$urlact); 
				$D++;
				}
			echo "\n<tr>\n";
			echo "<td width=\"30\" align=\"center\" class=\"oddrow\">".$DL."</td>\n";
			///
			$DL = "&nbsp;";
			$DD2 = date("j",mktime(0, 0, 0, $M, $D, $A));
			$DD3 = date("D",mktime(0, 0, 0, $M, $D, $A));
			if($DD3 == "Tue"  && checkdate($M, $D, $A)){ 
				$DL = diaconpartido($DD2,$FCP,$A."-".$M."-".$D,$urlact);
				$D++;
				}
			echo "<td width=\"30\" align=\"center\" class=\"oddrow\">".$DL."</td>\n";
			///
			$DL = "&nbsp;";
			$DD2 = date("j",mktime(0, 0, 0, $M, $D, $A));
			$DD3 = date("D",mktime(0, 0, 0, $M, $D, $A));
			if($DD3 == "Wed"  && checkdate($M, $D, $A)){ 
				$DL = diaconpartido($DD2,$FCP,$A."-".$M."-".$D,$urlact);
				$D++;
				}
			echo "<td width=\"30\" align=\"center\" class=\"oddrow\">".$DL."</td>\n";
			///
			$DL = "&nbsp;";
			$DD2 = date("j",mktime(0, 0, 0, $M, $D, $A));
			$DD3 = date("D",mktime(0, 0, 0, $M, $D, $A));
			if($DD3 == "Thu" && checkdate($M, $D, $A)){ 
				$DL = diaconpartido($DD2,$FCP,$A."-".$M."-".$D,$urlact);
				$D++;
				}
			echo "<td width=\"30\" align=\"center\" class=\"oddrow\">".$DL."</td>\n";
			///
			$DL = "&nbsp;";
			$DD2 = date("j",mktime(0, 0, 0, $M, $D, $A));
			$DD3 = date("D",mktime(0, 0, 0, $M, $D, $A));
			if($DD3 == "Fri" && checkdate($M, $D, $A)){ 
				$DL = diaconpartido($DD2,$FCP,$A."-".$M."-".$D,$urlact);
				$D++;
				}
			echo "<td width=\"30\" align=\"center\" class=\"oddrow\">".$DL."</td>\n";
			///
			$DL = "&nbsp;";
			$DD2 = date("j",mktime(0, 0, 0, $M, $D, $A));
			$DD3 = date("D",mktime(0, 0, 0, $M, $D, $A));
			if($DD3 == "Sat" && checkdate($M, $D, $A)){ 
				$DL = diaconpartido($DD2,$FCP,$A."-".$M."-".$D,$urlact);
				$D++;
				}
			echo "<td width=\"30\" align=\"center\" class=\"evenrow\">".$DL."</td>\n";
			///
			$DL = "&nbsp;";
			$DD2 = date("j",mktime(0, 0, 0, $M, $D, $A));
			$DD3 = date("D",mktime(0, 0, 0, $M, $D, $A));
			if($DD3 == "Sun" && checkdate($M, $D, $A)){ 
				$DL = diaconpartido($DD2,$FCP,$A."-".$M."-".$D,$urlact);
				$D++;
				}
			echo "<td width=\"30\" align=\"center\" class=\"evenrow\">".$DL."</td>\n";
			echo "\n</tr>\n";
}	
echo "</table>";
?>