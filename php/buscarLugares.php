<html>
<body>

<?php
    $servername="localhost";
$username="root";
$password="losseisbastardos12";
$dbname="paradise";
// Credentials


$conn= new mysqli($servername	,$username	,$password	,$dbname);

if ($conn->connect_error){
	die("Conexi�n Fallida: ".$conn->connect_error);
    exit();
}



$sql="select * from salon where salNombre like '".$_GET['bar']."%';";
$result=$conn->query($sql);

if ($result->num_rows>0)
{

    while ($row=$result->fetch_assoc()){

    echo "
    <table style='width:22%;margin-right:8%; border:2px solid;margin-bottom:3%;'>
        <tr>
            <td>Numero del Lugar </td>
            <td>".$row['salNum']." </td>
        </tr>

        <tr>
            <td>Nombre del Lugar </td>
            <td>".$row['salNombre']." </td>
        </tr>

        <tr>
            <td>Descripci&oacute;n del Lugar </td>
            <td>".$row['salDesc']." </td>
        </tr>

        <tr>
            <td>Costo del Lugar </td>
            <td>".$row['salCosto']." </td>
        </tr>


        <tr>
            <td>Capacidad del Lugar </td>
            <td>".$row['salCapacidad']." </td>
        </tr>
    </table >
    ";



    }
} else {
    echo "No data founded";

    echo "Sentence:".$sql;
}




?>



</body>
</html>