$(document).ready(function (){
    tipoTrab();
    buscarTrab();


    $('#frmTrab').submit(function(e){
        console.log('Formulario');
        
        const datos={
            Valor:'Add',
            txtTipo:$('#txtTipo').val(),
            txtNombre:$('#txtNombre').val(),
            txtSueldo:$('#txtSueldo').val()
           };
               console.log(datos);
               

        $.post('php/controlTrabajador.php',datos,function(response){
                       
           $('#txtNombre').val('');
           $('#txtSueldo').val('');
           $('#txtTipo').val('');
           
           
        });
        
        
        e.preventDefault();
        buscarTrab()
    });

    function tipoTrab(){
        const datos={
            Valor:'Tipo',
            idR:$('#idR').val()
        };

        $.post('php/controlTrabajador.php',datos, function (response) {
           
            
            let Datos = JSON.parse(response);
            let template='';

            Datos.forEach(d => {
                template+=`
                <option value="${d.tb_id}">${d.tb_trabajo}</option>
                `;
            });

            $('#txtTipo').html(template);
            
        });
    }
    function buscarTrab(){
        const datos={
            Valor:'Buscar',
            idR:$('#idR').val()
        };

        $.post('php/controlTrabajador.php',datos, function (response) {
            
            let Datos = JSON.parse(response);
            let template='';
            console.log(Datos);
            if(Datos.length>0){
                Datos.forEach(d => {
                    template+=`
                        <tr idT="${d.trab_id}" >
                        <th scope="row">${d.trab_id}</th>
                        <td>${d.trab_nombre}</td>
                        <td>Q${d.trab_pago}</td>
                        <td>${d.tb_trabajo}</td>
                        <td><button class=" Eliminar btn  btn-sm btn-danger  " >Eliminar </button>
                        <a class="btn  btn-sm btn-info  " href="php/Actualizar.php?idT=${d.trab_id}" >Actualizar </a></td>
                        </tr>
                        
                          
                    `;
                });
                $('#Trab').html(template)
            }else{
                
                $('#Trab').html('<h3  class="text-danger">No hay registros, porfavor agregue uno nuevo.</h3>');
            }
            
            
        });
    }

    //////////////////Eliminar Producto
	$(document).on('click','.Eliminar', function(){
		
		let element = $(this)[0].parentElement.parentElement;
		const datos={
			idT:$(element).attr('idT'),
			Valor:'Eliminar'			
		};
		
		if(confirm("Esta seguro de eliminar")){
			$.post('php/controlTrabajador.php',datos,function(response){		
                console.log(response);
                	   
		        buscarTrab();
			});
		}
	   
		
	});

});