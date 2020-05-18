$(document).ready(function (){

    $('#frmLogin').submit(function(e){
        const datos={
            Valor:'login',
            User:$('#txtUser').val(),
            PWD:$('#txtPass').val()
        };

        $.post('php/controlUser.php',datos,function(response){
            let Datos = JSON.parse(response);
            
            if(Datos.length>0){
                Datos.forEach(d => {
                    $('#txtUser').val('');
                    $('#txtPass').val('');
                    $('#Nombre').html(d.usu_nombre+' '+d.usu_apellido);
                    $('#load').html(`<div class="spinner-grow text-light" role="status">
                    <span class="sr-only">Loading...</span>
                    </div>`);
                });
                Inicio();
            }else{
                $('#alert1').html(`
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR!</strong> No hay considencia con los datos ingresados.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                `);
            }
            
            
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