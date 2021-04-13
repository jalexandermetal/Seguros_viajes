<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <header>
        <h1>Registro</h1>
    </header>
    <nav>
        <select name="" id="">
            <option value=""></option>
            <option value="guia">Guia</option>
            <option value="turista">Turista</option>
        </select>
    </nav>
    <section>
        <fieldset>
            <form action="bas.php" metthod="POST">Datos</form>
            <input type="text" placeholder="Nombre" name="nombre"></br>
            <input type="number" placeholder="Documento" name="documento"></br>
            <input type="email" placeholder="Correo" name="email"></br>
            <input type="tel" placeholder="Telefono o movil" name"Telefono"></br>
            <input type="submit" placeholder="Enviar">
            <input type="reset">
        </fieldset>
    </section>
    <footer></footer>
</body>
</html>

