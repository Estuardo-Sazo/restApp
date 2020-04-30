$(document).ready(function (){

    $('#frmLogin').submit(function(e){
        const datos={
            Valor:'login',
            User:$('#txtUser').val(),
            PWD:$('#txtPass').val()
        };

        $.post('php/controlUser.php',datos,function(response){
            let Datos = JSON.parse(response);
            Datos.forEach(d => {
                $('#Nombre').html(d.usu_nombre+' '+d.usu_apellido)
            });
            
            console.log(Datos);
        });
        
        
        e.preventDefault();
    });

});