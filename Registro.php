<?php
include_once "figura.php";
?>
<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    <input type="number" name="fila" placeholder="Ingrese numero de fila">
    <input type="number" name="columna" placeholder="Ingrese numero de columna">
    <input type="submit" name="submit" value="guardar">
</form>
<?php
if (isset($_POST["submit"])) {
    $fila = $_POST["fila"];
    $columna = $_POST["columna"];
    $estudiante = new Estudiante();
    $resultado = $figura->insertar($fila, $columna);

    if ($resultado != 0) {
        header("location: index.php");
    } else {
        echo "Error: Informacion no Eliminada";
    }
}