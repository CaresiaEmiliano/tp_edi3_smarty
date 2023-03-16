<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/estilos.css"></link>
</head>
<body>
    <div>
        <table id="sucursales">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Domicilio</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            {foreach from=$resultado item=fila}
                <tr>
                    <td>{$fila["id"]}</td>
                    <td>{$fila["nombre"]}</td>
                    <td>{$fila["telefono"]}</td>
                    <td>{$fila["domicilio"]}</td>
                    <td><button type="button" name="editar" id="{$fila['id']}" class="btn btn-warning btn-xs editar" onclick="modal('editar');">Editar</button></td>
                    <td><button type="button" name="borrar" id="{$fila['id']}" class="btn btn-danger btn-xs borrar">Borrar</button></td>
                </tr>
            {/foreach}
        </table>
    </div>
</body>