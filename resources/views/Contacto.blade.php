<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>FORMULARIO DE CONTACTO</h1>
    <form action="recibe_formulario" method="POST">
        @csrf
    <label for = "nombre">nombre:</label><br>
    <input type="text" id = "nombre" name = "nombre" required><br>
    <label for = "correo">correo:</label><br>
    <input type="email" id = "correo" name = "correo" required><br>
    <label for = "mensaje">mensaje:</label><br>
    <textarea id = "mensaje" name = "mensaje"  cols="30" rows="10" required></textarea>
    <button type = "submit">enviar</button>
    </form>
</body>
</html>