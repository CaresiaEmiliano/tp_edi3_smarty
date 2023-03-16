<!-- Modal -->
<div class="modal fade" id="modalHijosProducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal" aria-label="Close">Volver</button>
                </div>
            <!--Cuando llamo la etiqueta form me trae action, y despues  method... si da error esta aca el problema
                <form action="" method="post"></form>
            -->
                <form method="post" id="formulario" enctype="multipart/form-data"><!--ver si solo el enctype se utiliza para imagenes o para el envio de datos en gral  -->
                        <div class="modal-content">
                            <label for="id_visual" id="label_visual">Ingrese el id</label>
                            <input type="number" name="id_visual" id="id_visual" class="form-control">
                            <br/>
                            <label for="nombre">Ingrese el nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                            <br/>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" id="id"> <!--se queda con la id de la fila -->
                            <input type="hidden" name="operacion" id="operacion"> <!--sirve para identificar el tipo de operación, si es editar o borrar-->
                            <input type="submit" name="action" id="action" class="btn btn-success" value="Crear"> <!--envía los datos, ya sea para editar o no-->
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function modal(in_evento){
    if (in_evento == "crear"){
        $("#formulario")[0].reset();
        $("#id").val(null);
        $(".modal-title").text("Crear");
        $("#action").val("Crear");
        $("#operacion").val("Crear");
        $('#modalHijosProducto').modal('show');
    }else if (in_evento == "editar"){
        $(".modal-title").text("Editar");
        $("#action").val("Editar");
        $("#operacion").val("Editar");
    }
};
</script>