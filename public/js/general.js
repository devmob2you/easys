$(function(){
var divListaCliente = $('#listaClientes');
var divNovoCliente = $('#novoCliente');

var btnNovoCliente = $('#btnNovo');
var btnListarCliente = $('#btnGravar');

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
    divNovoCliente.fadeOut("slow", function(){
        divListaCliente.fadeIn("slow");
    });
});

});