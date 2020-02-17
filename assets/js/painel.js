$(document).ready(function(){

setInterval(contarMensagem, 1000);
setInterval(listarCliente, 1000);

contarMensagem();
listarCliente();
lerMensagem();
carregarElementos();

function carregarElementos()
{
    $('.sidenav').sidenav();

	$('.tabs').tabs();

    $('select').formSelect();

    $('.modal').modal();

    $('.tooltipped').tooltip();

    $('.collapsible').collapsible();

}

//Conta as mensagens não lidas
function contarMensagem()
{
    $.ajax({

		url:"../processamento/cliente.php",
		dataType:"html",

		success:function(Result)
		{

			$("#Conta").html(Result);
			$("#Count").html(Result);

		}


	});

}

//Conta as mensagens não lidas
function listarCliente()
{
    var a = "listarCliente";

	$.ajax({
             
            type: "GET",
            data: { primeiro:a},
             
            url: "../processamento/cliente.php",
            dataType: "html",
            success: function(result)
            { 

            	$('#todosClientes').html(result);
       			
            }
    });

}

//Attach dados no ver mensagem
function lerMensagem()
{
	
	$('ul .avatar').click(function(){

		var a = $('#Name').text();

		$('#Nome').text(a);

	});

}
    
});