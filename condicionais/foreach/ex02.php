<form>

    <input type="text" name="Nome">
    <input type="date" name="Nascimento">
    <input type="submit" value="OK">

</form>

<?php 

if (isset($_GET)) {
    
    foreach ($_GET as $name => $value) {

        echo "Nome do campo: $name <br>";
        echo "Valor do campo $value";
        echo "<hr>";

    }

}


?>