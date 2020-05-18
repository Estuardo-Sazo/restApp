$(document).ready(function (){
    Areas();






    // Funcion encargada de buscar datos en la DB y cargarlos
    function Areas(){
        const datos={
            Valor:'Areas',
            idR:$('#idR').val()
        };
        $.post('php/controlInicio.php',datos,function(response){   //metodo para consultar archivo de php     
                let Datos = JSON.parse(response);
                
                
                let template='';
                let template1='';
                if(Datos.length>0){
                    let v=1;
                    let f='';
                    let f2='';

                    if(v===1){
                        f='show active';
                        f2='true';
                        console.log(f2);
                        
                        f++;
                    }else{
                        f='';
                        f2='false';
                    }
                    Datos.forEach(d => {
                        template+=`
                        <a class="nav-link " id="${d.are_id}-tab" data-toggle="pill" href="#mesas${d.are_id}" role="tab"  aria-selected="${f2}">${d.are_nombre}</a>
                        `;

                        template1+=`
                        <div class="tab-pane fade ${f}" id="mesas${d.are_id}" role="tabpanel" aria-labelledby="${d.are_id}-tab"> 
                            <h2 align="center" class="text-white">Mesas ${d.are_nombre}</h2>
                            <div class="row" id="m${d.are_id}"></div>
                        </div>
                        `;
                        cargarMesas(d.are_id,d.rest_id);
                    });
                    $('#Areas').html(template)
                    $('#Mesas').html(template1)
                }else{
                    template='<h2 class=" text-danger">No tienes Ares o mesas registradas, ingresa en el menu y registra nuevos datos.</h2>';
                    $('#Areas').html(template)
                }
           
        });
        
    }

    //Funcion encargada de buscar y mostrar todas las mesas
    function cargarMesas(idA,idR){
        console.log('Buscando Mesas..');
        
        const datos={
            Valor:'Mesas',
            idR:idR,
            idA:idA
        }

        let template2='';


        $.post('php/controlInicio.php',datos,function(response){
            let Datos = JSON.parse(response);
            let estado='';
            let btn='';
        
                        
            Datos.forEach(d => {
                let id=d.fac_id;
                if(d.mesa_estado>0){
                    estado="bg-secondary text-white";
                    btn='<a href="../Facturas/?idf='+id+'" class="btn btn1 btn-sm btn-primary btn-block text-uppercase">Ver Factura</a>';
                }else{
                    estado='';
                    btn='<a href="../Facturas/php/reservar.php?idM='+d.mesa_id+'" class="btn btn1 btn-sm btn-info btn-block text-uppercase">Usar Mesa</a>';
                }
                template2+=`
                <div class="col-lg-3 col-md-4">
                    <div class="card card-signin my-3 border ${estado}">
                            <div class="card-body">
                            <h5 class="card-title text-center">${d.mesa_no}</h5>
                            ${btn}
                            </div>
                    </div>                                        
                </div>

                `;
            });

            $('#m'+idA).html(template2);
        });
    }
    
});