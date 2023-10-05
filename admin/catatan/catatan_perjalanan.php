<?php

include "../../config/conn.php";

$sql    =  "SELECT * FROM lokasi";
$query  =   mysqli_query($conn, $sql);

while ($dataLokasi   =   mysqli_fetch_array($sql)) :
?>
    <h1>CATATAN PERJALANAN </h1>

    <form action="input_cttnPerjalanan" method="post">
        <select name="" id="">
            <option value=""></option>
        </select>
    </form>
<?php endwhile ?>