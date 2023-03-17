    {include file="../templates/header.tpl"}
    <div>
    <h1>{$titulo}</h1>
        <table>
            <thead>
                <tr>
                    <th>Sku</th>
                    <th>Nombre</th>
                    <th>Talle</th>
                    <th>Precio de Costo</th>
                    <th>Observación</th>
                    <th>Categoría</th>
                    <th>Tipo de Producto</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Marca</th>
                    <th>Género</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            {foreach from=$resultado item=fila}
                <tr>
                    <td>{$fila["sku"]}</td>
                    <td>{$fila["nombre"]}</td>
                    <td>{$fila["talle"]}</td>
                    <td>{$fila["precio_costo"]}</td>
                    <td>{$fila["descripcion"]}</td>
                    <td>{$fila["categoria"]}</td>
                    <td>{$fila["d_tipo"]}</td>
                    <td>{$fila["d_modelo"]}</td>
                    <td>{$fila["d_color"]}</td>
                    <td>{$fila["d_marca"]}</td>
                    <td>{$fila["d_genero"]}</td>
                    <td><button type="button" name="editar" id="btn_editar">Editar</button></td>
                    <td><button type="button" name="borrar" id="btn_borrar">Borrar</button></td>
                </tr>
            {/foreach}
        </table>
    </div>
    {include file="../templates/footer.tpl"}