//ENVIAR MENSAGEM PHPMAILER (enviar.php)
$('#btn-enviar-email').click(function(){
    event.preventDefault();
    $('#divmensagem').text('Enviando...');
    $('#divmensagem').addClass('alert alert-primary');
    $('#divmensagem').removeClass('alert-danger');
    $('#divmensagem').removeClass('alert-success');
    $.ajax({
        url: "./enviar.php",
        method: "post",
        data: $('form').serialize(),
        dataType: "text", 
        success: function(msg){
            if(msg.trim() === 'Enviado com sucesso'){
                $('#divmensagem').removeClass('alert-info');
                $('#divmensagem').addClass('alert alert-success');
                $('#divmensagem').text(msg);
                $('#nome').val('');
                $('#email').val('');
                $('#telefone').val('');
                $('#mensagem').val('');

            }else if(msg.trim() === 'Preencha o campo nome'){
                $('#divmensagem').addClass('alert alert-danger');
                $('#divmensagem').text(msg);


            }else{
                $('#divmensagem').addClass('alert alert-danger');
                $('#divmensagem').text('Erro ao enviar, servidor sem permissão ');
                $('#divmensagem').text(msg);
            }
        }
    })
})

//CADASTRO DE USUARIO (sistema/cadastrar.php)
$('#btn-cadastrar').click(function(){
    event.preventDefault();
    
    $.ajax({
        url: "sistema/cadastrar.php",
        method: "post",
        data: $('form').serialize(),
        dataType: "text", 
        success: function(msg){
            if(msg.trim() === 'Cadastrado com sucesso'){
                alert('Cadastrado com sucesso');
                //atualizando a pagina
//                location.reload();
            }else{
                alert(msg);
            }
        }
    })
})






























