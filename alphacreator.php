<?PHP



$Projektname = "Test";
$Projektnr = "5";
$Dateiname = $Projektname.$Projektnr.".php";
$PNAME = $Projektnr.' - '.$Projektname;
$PID = $Projektnr;


$x = $_POST['Listbox1'];


if($_POST['Listbox1'] == 'kunden') 
{

$datei1 = file_get_contents('dateibau\Kunden\part1.txt');


$part0 = "<h1 align='center'>Projekt: $Projektname </h1>
<p align='center'><font size='3'>Die Ausf�llung dieses Fragebogen wird nur wenige Minuten in Anspruch nehmen und dient zu Qualit�tsverbesserungen.</font> </p>
<p align='left'></p>
<p align='left'>";


$part01 = "
<table border='0' cellspacing='0' cellpadding='3' width='725' align='center' style='WIDTH: 725px; HEIGHT: 841px'>
  <tbody>
  <tr>
    <td bgcolor='#a3aefc'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
       
      </td>
    <td bgcolor='#efefef' >
      <form method='post' name='form1' action='$Dateiname' target='_self' 
      >";



$datei2 = file_get_contents('dateibau\Kunden\part2.txt');




$part2= "  <p align='center'><input name='ProjektID' value='$PID' type='hidden'><input name='submit' value='Submit' type='submit'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      &nbsp;<input name='reset' value='Reset' type='reset' style='WIDTH: 50px; HEIGHT: 24px' size='17'>   
      </p>";



$datei3 = file_get_contents('dateibau\Kunden\part3.txt');


$finaldatei = $datei1.$part0.$part01.$datei2.$part2.$datei3;
echo $finaldatei;
file_put_contents($Dateiname,$finaldatei);
echo "
<body bgcolor='#c7c7fe'>
";
echo "<h2 align='center'> Es wurde der Fragebogen als Datei 
$Dateiname erstellt.</h2>";
$pfad1 = dirname(__FILE__);
$link = $pfad1.'\\'.$Dateiname;
echo "<h2 align='center'> Der Hyperlink zum Aufruf des Fragebogens ist:</h2>";
echo "<p align='center'><a 
href='$link'>$link</a></p>";
echo"</body>";

}





elseif($_POST['Listbox1'] =='mitarbeiter') 
{
$Dateiname2 = "M".$Dateiname;
$dateim1 = file_get_contents('dateibau\Mitarbeiter\part1m.txt');

$partM0 = "<h1 align='center'>Projekt: $PNAME </h1>
<p align='center'><font size='3'>Es werden keine Daten zur 
Person erhoben. Der Fragebogen ist anonym.</font> </p>
<p align='left'></p>
<p align='left'>
<table border='0' cellspacing='0' cellpadding='3' width='725' align='center' style='WIDTH: 725px; HEIGHT: 841px'>
  <tbody>
  <tr>
    <td bgcolor='#a3aefc'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
       
      </td>
    <td bgcolor='#efefef' >";
$partM1 = "<form method='post' name='form1' action='$Dateiname2' target='_self' 
      >";

$dateim2 = file_get_contents('dateibau\Mitarbeiter\part2m.txt');

$partM2 = "<p align='center'><input name='ProjektID' value='$PID' type='hidden'><input name='submit' value='Submit' type='submit'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      &nbsp;<input name='reset' value='Reset' type='reset' style='WIDTH: 50px; HEIGHT: 24px' size='17'>   
      </p>";
$dateim3 = file_get_contents('dateibau\Mitarbeiter\part3m.txt');



$finaldatei2 = $dateim1.$partM0.$partM1.$dateim2.$partM2.$dateim3;
echo $finaldatei2;
file_put_contents($Dateiname2,$finaldatei2);
echo "
<body bgcolor='#c7c7fe'>
";
echo "<h2 align='center'> Es wurde der Fragebogen als Datei 
$Dateiname2 erstellt.</h2>";
$pfad1 = dirname(__FILE__);
$link = $pfad1.'\\'.$Dateiname2;
echo "<h2 align='center'> Der Hyperlink zum Aufruf des Fragebogens ist:</h2>";
echo "<p align='center'><a 
href='$link'>$link</a></p>";
echo"</body>";

}


elseif($_POST['Listbox1'] =='einkauf') 
{
$Dateiname3 = "E".$Dateiname;
$dateiE1 = file_get_contents('dateibau\Einkauf\part1E.txt');
$partE0 = "<h1 align='center'>$PNAME</h1>
<p align='center'>&nbsp; </p>
<p align='left'></p>
<p align='left'>
<table border='0' cellspacing='0' cellpadding='3' width='725' align='center' style='WIDTH: 725px; HEIGHT: 841px'>
  <tbody>
  <tr>
    <td bgcolor='#a3aefc'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
       
      </td>
    <td bgcolor='#efefef' >
      <form method='post' name='form1' action='$Dateiname3.php' target='_self' 
      >";




}












?>


