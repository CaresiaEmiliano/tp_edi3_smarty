    {include file="../templates/header.tpl"}
    <div>
    <h1>{$titulo}</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
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
                    <td><button type="button" name="editar" id="btn_editar">Editar</button></td>
                    <td><button type="button" name="borrar" id="btn_borrar">Borrar</button></td>
                </tr>
            {/foreach}
        </table>
    </div>
    {include file="../templates/footer.tpl"}