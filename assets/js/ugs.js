$(document).ready(function(){
$('.collapsible').collapsible();

//OBS: Operações com ajax devem ser carregadas primeiro em relação as normais
cadastrarCliente();
carregarElementos();
function carregarElementos()
{
  $('.sidenav').sidenav();

  $('.slider').slider({
    indicators: false,
    height: 500
  });
  // Init Slider
  $('.sli').slider({
    indicators: true,
    height: 290
  });

  $(".dropdown-trigger").dropdown(
  {
    hover: true, 
    gutter: 0, 
    coverTrigger: false, 

  });

  $(".dropdown-cand").dropdown(
  {
    hover: true, 
    gutter: 0, 
    coverTrigger: true,
    alignment:'right'

  });

}

function cadastrarCliente()
{
  
  $("#CadastrarCliente").click(function(event){

    event.preventDefault();

        $.ajax({

            data:$("form").serialize() ,
            method:"post",
            url:"processamento/cliente.php",
            dataType:"text",
            success:function(strMessage){

                $("#MensagemContacto").text(strMessage).fadeToggle(5000);

            }

        });

    $("input[type=text]").val("");
    $("textarea").val("");


  });


}

});