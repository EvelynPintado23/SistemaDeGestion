<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
        include '../../../config/conexionBD.php';
        $cod=isset($_GET["codigo"]) ? trim($_GET["codigo"]) : null;
        
        $sql = "SELECT * FROM usuario WHERE usu_codigo=".$cod.";";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    ?>

    <form id="formulario01" method="POST" action="../../controladores/eliminar.php">
        <input type="hidden" name="codigo" value="<?php echo($cod)?>">
        <label for="cedula">Cedula (*)</label>
        <input type="text" id="cedula" name="cedula" value="<?php echo($row["usu_cedula"])?>" placeholder="Ingrese el número de cedula ..." required />
        <br>
        <label for="nombres">Nombres (*)</label>
        <input type="text" id="nombres" name="nombres" value="<?php echo($row["usu_nombres"])?>" placeholder="Ingrese sus dos nombres..." required />
        <br>
        <label for="apellidos">Apelidos (*)</label>
        <input type="text" id="apellidos" name="apellidos" value="<?php echo($row["usu_apellidos"])?>" placeholder="Ingrese sus dos apellidos..."
            required />
        <br>
        <label for="direccion">Dirección (*)</label>
        <input type="text" id="direccion" name="direccion" value="<?php echo($row["usu_direccion"])?>" placeholder="Ingrese su dirección ..." required />
        <br>
        <label for="telefono">Teléfono (*)</label>
        <input type="text" id="telefono" name="telefono" value="<?php echo($row["usu_telefono"])?>" placeholder="Ingrese su número telefónico..."
            required />
        <br>
        <label for="fecha">Fecha Nacimiento (*)</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo($row["usu_fecha_nacimiento"])?>"
            placeholder="Ingrese sufecha de nacimiento ..." required />
        <br>
        <label for="correo">Correo electrónico (*)</label>
        <input type="email" id="correo" name="correo" value="<?php echo($row["usu_correo"])?>" placeholder="Ingrese su correo electrónico..."
            required />
        <br>
        <input type="submit" id="crear" name="crear" value="Eliminar" />
        <input type="reset" id="cancelar" name="cancelar" value="Regresar" />
    </form>
</body>

</html>