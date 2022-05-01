<?PHP

include("access.php");
$datum = date("Y.m.d");
$timestamp = time();

function formular()
{

echo "
<title>Fragebogen Kunden</title>
</head>
<body bgcolor='#f8f8f8'>
<h1 align='center'>Fragebogen Kunden</h1>
<h2 align='left'>
<h1 align='center'>Projekt: Test</h1>
<p align='center'><font size='3'>Die Ausf�llung dieses Fragebogen wird nur wenige Minuten in Anspruch nehmen und dient dazu unsere Qualit�t zu verbessern.</font> </p>
<p align='left'></p>
<p align='left'>
<table border='0' cellspacing='0' cellpadding='3' width='725' align='center' style='WIDTH: 725px; HEIGHT: 841px'>
  <tbody>
  <tr>
    <td bgcolor='#a3aefc'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
       
      </td>
    <td bgcolor='#efefef' >
      <form method='post' name='form1' action='kundenfragebogen.php' target='_self' 
      >
      <p> &nbsp;</p>
      <p align='center'><strong><font face='Arial'>Wie zufrieden sind 
      Sie mit der Projektabwicklung insgesamt?</font></strong><br><br>�berhaupt nicht 
      &nbsp;<input name='RadioQuestion1' value='1' type='radio' 
      > 1<input name='RadioQuestion1' value='2' type='radio' 
      > 2<input name='RadioQuestion1' value='3' type='radio' 
      > 3<input name='RadioQuestion1' value='4' type='radio' 
      > 4<input name='RadioQuestion1' value='5' type='radio' 
      > 5<input name='RadioQuestion1' value='6' type='radio' 
      > 6<input name='RadioQuestion1' value='7' type='radio' 
      > 7<input name='RadioQuestion1' value='8' type='radio' 
      > 8<input name='RadioQuestion1' value='9' type='radio' 
      > 9<input name='RadioQuestion1' value='10' type='radio' 
      > 
      10&nbsp; sehr</p>
      <p align='center'><strong><font face='Arial'>  
      Wurden die Liefertermine und Meilensteine 
      eingehalten?</font></strong><br><br>�berhaupt nicht &nbsp;<input name='RadioQuestion2' value='1' type='radio' 
      > 1<input name='RadioQuestion2' value='2' type='radio' 
      > 2<input name='RadioQuestion2' value='3' type='radio' 
      > 3<input name='RadioQuestion2' value='4' type='radio' 
      > 4<input name='RadioQuestion2' value='5' type='radio' 
      > 5<input name='RadioQuestion2' value='6' type='radio' 
      > 6<input name='RadioQuestion2' value='7' type='radio' 
      > 7<input name='RadioQuestion2' value='8' type='radio' 
      > 8<input name='RadioQuestion2' value='9' type='radio' 
      > 9<input name='RadioQuestion2' value='10' type='radio' 
      > 10&nbsp; 
      immer</p>
      <p align='center'><strong><font 
      face=Arial>&nbsp;Wie&nbsp;beurteilen Sie&nbsp;unser Preis-/ Leistungsverh�ltnis&nbsp;?</font></strong> </p>
      <p align='center'>sehr&nbsp;schlecht&nbsp;&nbsp;<input name='RadioQuestion3' value='1' type='radio' 
      > 1<input name='RadioQuestion3' value='2' type='radio' 
      > 2<input name='RadioQuestion3' value='3' type='radio' 
      > 3<input name='RadioQuestion3' value='4' type='radio' 
      > 4<input name='RadioQuestion3' value='5' type='radio' 
      > 5<input name='RadioQuestion3' value='6' type='radio' 
      > 6<input name='RadioQuestion3' value='7' type='radio' 
      > 7<input name='RadioQuestion3' value='8' type='radio' 
      > 8<input name='RadioQuestion3' value='9' type='radio' 
      > 9<input name='RadioQuestion3' value='10' type='radio' 
      > 10&nbsp; sehr 
      gut</p>
      <p align='center'><font face='Arial'><strong> 
        Wie 
        beurteilen Sie 
        die Betreuung durch das Projektmanagement?</strong></font> </p>
      <p align='center'>sehr schlecht&nbsp;&nbsp;&nbsp;<input name='RadioQuestion4' value='1' type='radio' 
      > 1<input name='RadioQuestion4' value='2' type='radio' 
      > 2<input name='RadioQuestion4' value='3' type='radio' 
      > 3<input name='RadioQuestion4' value='4' type='radio' 
      > 4<input name='RadioQuestion4' value='5' type='radio' 
      > 5<input name='RadioQuestion4' value='6' type='radio' 
      > 6<input name='RadioQuestion4' value='7' type='radio' 
      > 7<input name='RadioQuestion4' value='8' type='radio' 
      > 8<input name='RadioQuestion4' value='9' type='radio' 
      > 9<input name='RadioQuestion4' value='10' type='radio' 
      > 10 sehr 
      gut</p>
      <p align='center'><font face='Arial'><strong> 
      Wie beurteilen 
      Sie die Flexibili�t der Projektmanager?</strong></font> </p>
      <p align='center'>sehr schlecht&nbsp;&nbsp;<input name='RadioQuestion5' value='1' type='radio' 
      > 1<input name='RadioQuestion5' value='2' type='radio' 
      > 2<input name='RadioQuestion5' value='3' type='radio' 
      > 3<input name='RadioQuestion5' value='4' type='radio' 
      > 4<input name='RadioQuestion5' value='5' type='radio' 
      > 5<input name='RadioQuestion5' value='6' type='radio' 
      > 6<input name='RadioQuestion5' value='7' type='radio' 
      > 7<input name='RadioQuestion5' value='8' type='radio' 
      > 8<input name='RadioQuestion5' value='9' type='radio' 
      > 9<input name='RadioQuestion5' value='10' type='radio' 
      > 10 sehr 
      gut</p>
      <p align='center'><font face='Arial'><strong> Wie beurteilen Sie 
      die Kommunikation mit den Projektverantwortlichen?</strong></font> </p>
      <p align='center'>ungen�gend&nbsp;<input name='RadioQuestion6' value='1' type='radio' 
      > 1<input name='RadioQuestion6' value='2' type='radio' 
      > 2<input name='RadioQuestion6' value='3' type='radio' 
      > 3<input name='RadioQuestion6' value='4' type='radio' 
      > 4<input name='RadioQuestion6' value='5' type='radio' 
      > 5<input name='RadioQuestion6' value='6' type='radio' 
      > 6<input name='RadioQuestion6' value='7' type='radio' 
      > 7<input name='RadioQuestion6' value='8' type='radio' 
      > 8<input name='RadioQuestion6' value='9' type='radio' 
      > 9<input name='RadioQuestion6' value='10' type='radio' 
      > 10 sehr gut</p>
      <p align='center'><font face='Arial'><strong>Wie 
      beurteilen Sie unser Unternehmen insgesamt (Image)?</strong></font> </p>
      <p align='center'>sehr schlecht &nbsp;<input name='RadioQuestion7' value='1' type='radio' 
      > 1<input name='RadioQuestion7' value='2' type='radio' 
      > 2<input name='RadioQuestion7' value='3' type='radio' 
      > 3<input name='RadioQuestion7' value='4' type='radio' 
      > 4<input name='RadioQuestion7' value='5' type='radio' 
      > 5<input name='RadioQuestion7' value='6' type='radio' 
      > 6<input name='RadioQuestion7' value='7' type='radio' 
      > 7<input name='RadioQuestion7' value='8' type='radio' 
      > 8<input name='RadioQuestion7' value='9' type='radio' 
      > 9<input name='RadioQuestion7' value='10' type='radio' 
      > 10&nbsp; sehr gut</p>
      <p align='center'><font face='Arial'><strong>Wie beurteilen Sie unsere Leistungen im 
      Vergleich zu Wettbewerbern?</strong><font face='Times New Roman'> 
      </font></font> </p>
      <p align='center'>sehr schlecht&nbsp;&nbsp;<input name='RadioQuestion8' value='1' type='radio' 
      > 1<input name='RadioQuestion8' value='2' type='radio' 
      > 2<input name='RadioQuestion8' value='3' type='radio' 
      > 3<input name='RadioQuestion8' value='4' type='radio' 
      > 4<input name='RadioQuestion8' value='5' type='radio' 
      > 5<input name='RadioQuestion8' value='6' type='radio' 
      > 6<input name='RadioQuestion8' value='7' type='radio' 
      > 7<input name='RadioQuestion8' value='8' type='radio' 
      > 8<input name='RadioQuestion8' value='9' type='radio' 
      > 9<input name='RadioQuestion8' value='10' type='radio' 
      >  10&nbsp;sehr 
      gut</p>
      <p align='center'><strong><font face='Arial'>W�rden Sie 
      unser Unternehmen weiterempfehlen? </font></strong> </p>
      <p align='center'>unwarscheinlich<input name='RadioQuestion9' value='1' type='radio' 
      > 1<input name='RadioQuestion9' value='2' type='radio' 
      > 2<input name='RadioQuestion9' value='3' type='radio' 
      > 3<input name='RadioQuestion9' value='4' type='radio' 
      > 4<input name='RadioQuestion9' value='5' type='radio' 
      > 5<input name='RadioQuestion9' value='6' type='radio' 
      > 6<input name='RadioQuestion9' value='7' type='radio' 
      > 7<input name='RadioQuestion9' value='8' type='radio' 
      > 8<input name='RadioQuestion9' value='9' type='radio' 
      > 9<input name='RadioQuestion9' value='10' type='radio' 
      > 10 sehr 
      warscheinlich</p>
      <p align='center'><strong><font face='Arial'>W�rden Sie in 
      Zukunft wieder ein Projekt bei uns in Auftrag 
      geben?</font></strong>&nbsp;&nbsp; </p>
      <p align='center'>  unwarscheinlich<input name='RadioQuestion10' value='1' type='radio' 
      > 1<input name='RadioQuestion10' value='2' type='radio' 
      > 2<input name='RadioQuestion10' value='3' type='radio' 
      > 3<input name='RadioQuestion10' value='4' type='radio' 
      > 4<input name='RadioQuestion10' value='5' type='radio' 
      >&nbsp;5<input name='RadioQuestion10' value='6' type='radio' 
      > 6<input name='RadioQuestion10' value='7' type='radio' 
      > 7<input name='RadioQuestion10' value='8' type='radio' 
      > 8<input name='RadioQuestion10' value='9' type='radio' 
      > 9<input name='RadioQuestion10' value='10' type='radio' 
      > 10 sehr 
      warscheinlich</p>
      <p align='center'>   
      &nbsp;</p>
      <p align='center'><input name='ProjektID' value='4' type='hidden'><input name='submit' value='Submit' type='submit'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      &nbsp;<input name='reset' value='Reset' type='reset' style='WIDTH: 50px; HEIGHT: 24px' size='17'>   
      </p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p>&nbsp; 
      </form></p></td>
    <td bgcolor='#a3aefc' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      &nbsp;</td></tr></tbody></table></ P> </h2>
</body>
";
}

if(!empty($_POST['RadioQuestion1']) and !empty($_POST['RadioQuestion2']) and !empty($_POST['RadioQuestion3']) and !empty($_POST['RadioQuestion4']) and !empty($_POST['RadioQuestion6']) and !empty($_POST['RadioQuestion7']) and !empty($_POST['RadioQuestion8']) and !empty($_POST['RadioQuestion9']) and !empty($_POST['RadioQuestion10']))
{
echo "<b> Das Formular wurde genutzt!</b><b><b>";
echo "Folgende Daten wurden �bertragen:<br>";
$wert = $_POST['ProjektID'];
$wert2 = $_POST['RadioQuestion1'];
$wert3 = $_POST['RadioQuestion2'];
$wert4 = $_POST['RadioQuestion3'];
$wert5 = $_POST['RadioQuestion4'];
$wert6 = $_POST['RadioQuestion5'];
$wert7 = $_POST['RadioQuestion6'];
$wert8 = $_POST['RadioQuestion7'];
$wert9 = $_POST['RadioQuestion8'];
$wert10 = $_POST['RadioQuestion9'];
$wert11 = $_POST['RadioQuestion10'];
$sql = "INSERT INTO `testdatabase`.`kundenfragebogen` (`AntwortID`, `ProjektID`, `Antwort1`, `Antwort2`, `Antwort3`, `Antwort4`, `Antwort5`, `Antwort6`, `Antwort7`, `Antwort8`, `Antwort9`, `Antwort10`, `FragebogenDate`) VALUES (NULL, '$wert', '$wert2', '$wert3', '$wert4', '$wert5', '$wert6', '$wert7', '$wert8', '$wert9', '$wert10', '$wert11', '$datum')";
mysqli_query($con,$sql);
mysqli_close($con);

while(list($Buttonfeld,$feldwert) = each($_POST))
echo "Die Frage $Buttonfeld hat den Wert $feldwert <br>";
}
else 
{
formular();
}
?>