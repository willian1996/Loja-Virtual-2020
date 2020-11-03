//CADASTRO DE USUARIO (sistema/cadastrar.php)
$('#btn-cadastrar').click(function(){
    event.preventDefault();
    
    $.ajax({
        url: "sistema/cadastrar.php",
        method: "post",
        data: $('form').serialize(),
        dataType: "text", 
        success: function(msg){
                if(msg.trim() === 'Cadastrado com Sucesso!'){
                    
                    window.location='sistema/painel-cliente';
                    }
                 else{
                    alert(msg);
                   

                 }
        }
    })
})

//LOGIN DE USUARIO (sistema/autenticar.php)
$('#btn-login').click(function(){
    event.preventDefault();
    
    $.ajax({
        url: "sistema/autenticar.php",
        method: "post",
        data: $('form').serialize(),
        dataType: "text", 
        success: function(msg){
            if(msg.trim() != "Email ou senha invalidos"){
                window.location='sistema/painel-'+msg;
            }else{
                alert(msg);
            }
        }
    })
})
