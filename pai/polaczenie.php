
<html>
<head>
<title> mysql_connect </title>
</head>
<body>
<?php
$q=mysqli_connect('localhost','root','','baza') or die ('Brak połączenia z bazą');
$c=mysqli_query($q,"SELECT * from tabela1 ");
while ($w=mysqli_fetch_assoc ($c)) {
echo $w['imie'].'   '.$w['zawod'].'<br>';
}
mysqli_close($q);
?>
</body>
</html>
