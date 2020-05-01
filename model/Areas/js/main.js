$(document).ready(function (){
    Areas();

    $('#frmArea').submit(function(e){
        console.log('Formulario');
        
        const datos={
            Valor:'Add',
            idR:$('#idR').val(),
            Nombre:$('#txtNombre').val()
        };
        console.log(datos);
        

        $.post('php/controlAreas.php',datos,function(response){
            console.log('Envio');
            
           $('#txtNombre').val('');
           Areas();
        });
        
        
        e.preventDefault();
    });

    function Inicio(){
        setInterval(() => {
            var url = "../Inicio/";    
          $(location).attr('href',url)
        }, 3000);
    }

    // Funcion encargada de buscar datos en la DB y cargarlos
    function Areas(){
        const datos={
            Valor:'Areas',
            idR:$('#idR').val()
        };
        $.post('php/controlAreas.php',datos,function(response){   //metodo para consultar archivo de php     
                let Datos = JSON.parse(response);
                let template='';
                if(Datos.length>0){
                    Datos.forEach(d => {
                        template+=`
                        <div class="col-lg-3 col-md-4">
                            <div class="card card-signin my-3">
                                    <div class="card-body">
                                    <h5 class="card-title text-center">${d.are_nombre} </h5>
                                    <a href="Mesas.php?r=${d.rest_id}&a=${d.are_id}&name=${d.are_nombre}" class="btn btn1 btn-sm btn-primary btn-block text-uppercase" >Ver Mesas</a>
                                    <button class="btn btn1 btn-sm btn-danger btn-block text-uppercase" >Eliminar Area</button>
                                    </div>
                            </div>
                                
                        </div>
                        `;
                    });
                    $('#Areas').html(template)
                }else{
                    
                    $('#Areas').html('<h1  class="text-white">No hay registros, porfavor agregue uno nuevo.</h1>');
                }
           
        });
        
    }

});