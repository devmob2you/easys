$(function(){
var divListaCliente = $('#listaClientes');
var divNovoCliente = $('#novoCliente');

var btnNovoCliente = $('#btnNovo');
var btnListarCliente = $('#btnGravar');


var endereco = $("#endereco");
ufCampo = $('#uf');
/* JQUERY-UI COMPONENTS*/
$('#aniversario').datepicker({
    showAnim: "explode",
    showOtherMonths: true,
    selectOtherMonths: false,
    showButtonPanel: true,
    changeMonth: true,
    changeYear: true,
    dateFormat: "dd/mm/yy",
    showOn: "button",
    buttonImage: '../public/img/calendar.png',
    buttonImageOnly: true
});

$('.ui-datepicker-trigger')
    .css('padding','7px')
    .css('margin-bottom','5px')
    .css('cursor','pointer');
$('.ui-datepicker-trigger').mouseover(function(){
    $(this).animate({backgroundColor: '#ccc'},500);
}).mouseleave(function(){
   $(this).animate({backgroundColor: 'white'},500); 
});
    

divNovoCliente.hide();

btnNovoCliente.click(function(){
    divListaCliente.fadeOut("slow", function(){
        divNovoCliente.fadeIn("slow");
    });
});

btnListarCliente.click(function(){
    //window.location="http://this.site.com/";
    divNovoCliente.fadeOut("slow", function(){
        divListaCliente.fadeIn("slow");
    });
    
    
});







/*FUNÇÃO BUSCACEP*/

        $("#cep").blur(function(){              

            consulta = $("#cep").val()
            var url = "http://cep.correiocontrol.com.br/" + consulta + ".json";
            $.ajax({
                url: url,
                type:'GET',
                dataType: 'json',
                success: function(json){
                    endereco.val(json.logradouro)
                    $("#bairro").val(json.bairro)
                    $("#cidade").val(json.localidade)
                    ufCampo.val(json.uf)                       
                    },
                });//ajax
            
            //alert(endereco.val());
            
            if(endereco.val().length >2) {
                $("#numero").focus().delay(1000);
                uf1.hide();
                uf2.show();
            }
            else{//$("#endereco") == '' || $("#endereco") == undefined || $("#endereco") == object){
                $("#endereco").focus().delay(1000);
                uf1.show();
                uf2.hide();
                
            }
            
            
            /*if($("#endereco").length < 2){
                $("#numero").focus();
            }*/
        
    });
    //função blur
    $("#numero").blur(function(){
        $("#complemento").focus();
    });








});