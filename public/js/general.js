$(function(){
var divListaCliente = $('#listaClientes');
var divNovoCliente = $('#novoCliente');

var btnNovoCliente = $('#btnNovo');
var btnListarCliente = $('#btnGravar');

/* JQUERY-UI COMPONENTS*/
$('#aniversario').datepicker();

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