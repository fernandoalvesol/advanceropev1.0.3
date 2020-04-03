$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

function ajxContraCheques(id){
                                   
    $.ajax({
        type: 'post',
        url: "ajxContraCheques",
        dataType: 'html',
        data: {
            '_token'    : $('input[name=_token]').val(),
            'funcionario'  : id         
        },
        beforeSend: function () {

            $('#pleaseWaitDialog').modal();

        },                    
        success: function (msg){

            $('#pleaseWaitDialog').modal('hide');  
            
            var obj = jQuery.parseJSON( msg );

            //console.log(obj);

            tabela = "<table name='documentosExame' class='table table-striped jambo_table'>"
                    +"<thead>"
                        +"<tr class='headings'>"                                                                          
                            +"<th class='column-title' width='40%'>Mês</th>" 
                            +"<th class='column-title' width='30%'>Ano</th>"                                   
                            +"<th class='column-title' width='30%'>Contra Cheque</th>"                                                                                                  
                        +"</th>"
                    +"</thead>"
                    +"<tbody>";
            
            obj.forEach(function(val){
        
                tabela += "<tr class='even pointer'>";
                    /* tabela += "<td>"+val.MES+"</td>"; */
                    switch(val.MES) {
                        case '01':
                            tabela += "<td>JANEIRO</td>";   
                            break;
                        case '02':
                            tabela += "<td>FEVEREIRO</td>";   
                            break;
                        case '03':
                            tabela += "<td>MARÇO</td>";   
                            break;
                        case '04':
                            tabela += "<td>ABRIL</td>";   
                            break;
                        case '05':
                            tabela += "<td>MAIO</td>";   
                            break;
                        case '06':
                            tabela += "<td>JUNHO</td>";   
                            break;
                        case '07':
                            tabela += "<td>JULHO</td>";   
                            break;
                        case '08':
                            tabela += "<td>AGOSTO</td>";   
                            break;
                        case '09':
                            tabela += "<td>SETEMBRO</td>";   
                            break;
                        case '10':
                            tabela += "<td>OUTUBRO</td>";   
                            break;
                        case '11':
                            tabela += "<td>NOVEMBRO</td>";   
                            break;
                        case '12':
                            tabela += "<td>DEZEMBRO</td>";   
                            break;
                        default:
                          // code block
                      }
                      tabela += "<td>"+val.ANO+"</td>";                     
                    tabela += "<td><a class='btn btn-success' title='Download do PDF' href='download?id="+val.RECNO+"'><span class='glyphicon glyphicon-download'></span></a></td>";

                tabela += "</tr>";

            });    
                                       
            tabela +="<tbody>"; 
                            
            $('#resultAjax').html(tabela);

            $('#ModalSelectMes').modal('toggle');
                
            /* if (obj == "0") {                                
                
                if (getLocale() == "en") {
                    texto = 'Direct sent succesfully.'; 
                } else {
                    texto = 'Direct Enviada com Sucesso.'; 
                }
                
            } else {

                if (getLocale() == "en") {
                    texto = 'Failed to send Direct.'; 
                } else {
                    texto = 'Falha ao enviar a Direct.'; 
                } 
                                    
            } 

            swal(texto, {
                buttons: false,
                timer: 1800,
                }).then(function() {
                window.location = "/directmessage";
            }); */                                
            
        }
    });
    
}


