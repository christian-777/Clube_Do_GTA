function alterarpalavra(codigo, palavra, dica, superdica1, superdica2){
    
    document.getElementById('codigo').value = codigo;
    document.getElementById('palavra').value = palavra;
    document.getElementById('dica').value = dica;
    document.getElementById('superdica1').value = superdica1;
    document.getElementById('superdica2').value = superdica2;
    document.getElementById('modo').value = 1;
    
    $('#modalTeste').modal();
}

function inserirTeste(codigo){
    
    document.getElementById('codigo').value = codigo;
    document.getElementById('modo').value = 0;
    
    $('#modalTeste').modal();
}

function alterarUsuario(codigo, nome, email){
    
    document.getElementById('codigo').value = codigo;
    document.getElementById('nome_u').value = nome;
    document.getElementById('email_u').value = email;
    document.getElementById('modo').value = 1;
    
    $('#modalUsuario').modal();
}

function inserirletra(){
    
    $('#modalletra').modal();
}
function inserirpalavra(){
    
    $('#modalpalavra').modal();
}

function mensagens(variavel)
{
	if(variavel==1)
	{
		window.alert("Você ganhou!!!");
	}
	else
	{
		window.alert("Você Perdeu!! ;-; ");
	}
}