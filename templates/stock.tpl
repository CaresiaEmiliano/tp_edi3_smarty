    {include file="../templates/header.tpl"}
    <div>
    <h1>{$titulo}</h1>
        <table>
            <thead>
                <tr>
                    <th>Sku</th>
                    <th>Nombre</th>
                    <th>Talle</th>
                    <th>Categoria</th>
                    <th>Precio de Costo</th>
                    <th>Stock actual</th>
                </tr>
            </thead>
            {foreach from=$resultado item=fila}
                <tr>
                    <td>{$fila["sku_producto"]}</td>
                    <td>{$fila["nombre"]}</td>
                    <td>{$fila["talle"]}</td>
                    <td>{$fila["categoria"]}</td>
                    <td>{$fila["precio_costo"]}</td>
                    <td>{$fila["totales"]}</td>
                </tr>
            {/foreach}
        </table>
    </div>
    {include file="../templates/footer.tpl"}