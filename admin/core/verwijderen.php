<?php
include './placeholderArray.php';

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $sql = "DELETE FROM je_tabel_naam WHERE id = $id";
    
//     if ($conn->query($sql) === TRUE) {
//         echo "Record succesvol verwijderd";
//         header("Location: index.php"); // Redirect terug naar de tabel pagina
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>
