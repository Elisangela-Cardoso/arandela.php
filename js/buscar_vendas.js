var buscarVenda = document.querySelector("#filtrar_cliente")

buscarVenda.addEventListener("input", function(){
   var info_clientes = document.querySelectorAll('.info_cliente_tabela');
    if(this.value.length > 0){
        for( var i = 0; i < info_clientes.length; i++){
            var cadastro = info_clientes[i];
            var tdNome = cadastro.querySelector(".info_nome");
            var nome = tdNome.textContent;
            var expressao = new RegExp(this.value, "i");
            if(expressao.test(nome)){
                cadastro.classList.remove("invisivel");
            }else{
                cadastro.classList.add("invisivel");
            }
        }
    }else{
        for( var i = 0; i < info_clientes.length; i ++){
            var cadastro = info_clientes[i];
            cadastro.classList.remove("invisivel");
        }
    }


});