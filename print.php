<?php
include('connection.php');
include('session.php');
$sql="SELECT username AS KORISNIK, city AS GRAD, contact AS MOJ_KONTAKT, adress AS MOJA_ADRESA, del_adress AS DESTINACIJA, pob AS PBROJ, price AS CIJENA FROM orders WHERE username = '$login_session'";
$result = mysqli_query($dbc,$sql);
if (!$result) {
    die("Query to show fields from table failed");
}
echo "CIJENA JE IZRAŽENA U HRK!<br>";
echo "<a href='slanje_paketa.php'>Povratak na stranicu</a>;";
$fields_num = mysqli_num_fields($result);

echo "<h1>Povijest :</h1>";
echo "<table border='1'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysqli_fetch_field($result);
    echo "<td>$field->name</td>";
}
echo "</tr>\n";
// printing table rows
while($row = mysqli_fetch_row($result))
{
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
mysqli_free_result($result);
?>