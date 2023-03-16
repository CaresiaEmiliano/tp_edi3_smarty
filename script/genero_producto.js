$(document).ready(function(){
    $(document).on('submit','#formulario',function(event){
    event.preventDefault();
    var nombre = $('#nombre').val();
    if(nombre != '' ){
        $.ajax({
            url         :"http://localhost:6060/Clases/Controladores/Controller.php",
            method      : "POST",
            data        : new FormData(this),//ver si corresponde o solo es por las imágenes del curso
            contentType : false,//ver si corresponde o solo es por las imágenes del curso
            processData :false,//ver si corresponde o solo es por las imágenes del curso
            success:function(data){
                alert(data);
                $('#formulario')[0].reset();
                $('#modalHijosProducto').modal('hide');
                datatable.ajax.reload();
            }
        });
    }else{
        alert("Algunos campos son obligatorios");
    }
    });

    $(document).on('click','.editar',function(){
        var v_id = $(this).attr("id");
        $.ajax({
            url:"http://localhost:6060/Clases/Controladores/Controller.php",
            method:"POST",
            data:{id:v_id,operacion:"Buscar"},
            dataType:"json",
            success:function(data)
                {
                    $('#id_visual').val(v_id);
                    $('#nombre').val(data.nombre);
                    $('#id').val(v_id);
                    $('#modalHijosProducto').modal('show');
                },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                }
            })//Fin del ajax
    });//Fin funcion on click

    $(document).on('click','.borrar',function(){
        var v_id = $(this).attr("id");
        if(confirm("¿Seguro desea borrar?")){
            $.ajax({
            url:"http://localhost:6060/Clases/Controladores/Controller.php",
            method:"POST",
            data:{operacion:"Borrar",id:v_id},
            dataType:"json",
            success:function(data){
                alert(data);
                datatable.ajax.reload();
                },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                }
            })
        }else{
            return false;
        }
    });
})