<?php
include "DBleden.php";
$db = new DBleden();

if(isset($_POST["Delete"])){
$db ->VerwijderLid($_POST['ID']);
}

if(isset($_POST["create"])){
    $db->MaakLid($_POST["Naam"], $_POST["Functie"]);
}
$LedenData = $db->SelecteerLid();
?>
<table>
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Functie</th>
        <th>Acties</th>
    </tr>
    <?php
    foreach($LedenData as $Lid){
        $ID = $Lid['ID'];

        echo "<tr>";
        // echo "<td>1</td>";
        // echo "<td>2</td>";
        // echo "<td>3</td>";
        foreach($Lid as $kolom){
            echo "<td>" . $kolom . "</td>";
        }
        echo "<td><form method='POST'><input  type='submit' name='Delete' value='Delete'><input value='$ID' name='ID' type='hidden'/></form></td>";
        echo "</tr>";
    }
        ?>
</table>
<form action="Create.php">
    <button>Create</button>
</form>