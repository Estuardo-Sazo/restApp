$(document).ready(function (){
    cargarMesas();

    $('#frmMesa').submit(function(e){
                
        const datos={
            Valor:'AddMesa',
            idR:$('#Rest').val(),
            idA:$('#Area').val(),
            Nombre:$('#txtMesa').val()
        };
        
        $.post('php/controlAreas.php',datos,function(response){
            
            
           $('#txtMesa').val('');
           cargarMesas();
        });
        
        
        e.preventDefault();
    });


    function cargarMesas(){
        console.log('Buscando Mesas..');
        
        const datos={
            Valor:'Mesas',
            idR:$('#Rest').val(),
            idA:$('#Area').val()
        }

        let template='';


        $.post('php/controlAreas.php',datos,function(response){
            let Datos = JSON.parse(response);
                        
            Datos.forEach(d => {
                template+=`
                    <tr idM="${d.mesa_id}" idR="${d.rest_id}" idA="${d.area_id}">
                    <th scope="row">${d.mesa_id}</th>
                    <td>${d.mesa_no}</td>
                    <td> <a class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Eliminar </a> </td>
                    
                    </tr>

                `;
            });

            $('#Cuerpo').html(template);
        });
    }

});