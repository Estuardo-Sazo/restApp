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
                $('#txtUser').val('');
                $('#txtPass').val('');
                $('#Nombre').html(d.usu_nombre+' '+d.usu_apellido);
                $('#load').html(`<div class="spinner-grow text-light" role="status">
                <span class="sr-only">Loading...</span>
                </div>`);
            });
            Inicio();
            
            console.log(Datos);
        });
        
        
        e.preventDefault();
    });

    function Inicio(){
        setInterval(() => {
            var url = "../Inicio/";    
          $(location).attr('href',url)
        }, 3000);
    }

});