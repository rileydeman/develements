<?php
include './placeholderArray.php';

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $sql = "SELECT * FROM je_tabel_naam WHERE id = $id";
//     $result = $conn->query($sql);
//     $row = $result->fetch_assoc();
// }

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    foreach($diensten as $dienstBox) {
        if($id = $dienstBox['id']) {
            print_r("ok :)");
        }
    }
}

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $id = $_POST['id'];
//     $naam = $_POST['naam'];
//     $beschrijving = $_POST['beschrijving'];

//     $sql = "UPDATE je_tabel_naam SET naam='$naam', beschrijving='$beschrijving', laatst_bewerkt=NOW() WHERE id=$id";
    
//     if ($conn->query($sql) === TRUE) {
//         echo "Record succesvol bijgewerkt";
//         header("Location: index.php"); // Redirect terug naar de tabel pagina
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $dienst = $_POST['dienst'];
    $tekst = $_POST['tekst'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewerk Gegevens</title>
</head>
<body>

<h2>Bewerk Gegevens</h2>

<form method="post" action="bewerken.php">
    <input type="hidden" name="id" value="<?php echo $dienstBox['id']; ?>">
    <label for="naam">Naam:</label><br>
    <input type="text" id="naam" name="naam" value="<?php echo $dienstBox['dienst']; ?>"><br>
    <label for="beschrijving">Beschrijving:</label><br>
    <textarea id="beschrijving" name="beschrijving"><?php echo $dienstBox['tekst']; ?></textarea><br>
    <input type="submit" value="Bijwerken">
</form>

</body>
</html>
