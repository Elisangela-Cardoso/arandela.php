
    function adicionarLinha() {
      var tabela = document.getElementById("minhaTabela").getElementsByTagName("tbody")[0];
      var novaLinha = tabela.insertRow();
      var codigo = novaLinha.insertCell();
      var desc_produto = novaLinha.insertCell();
      var quantidade = novaLinha.insertCell();
      var valor = novaLinha.insertCell();
      var data = novaLinha.insertCell();
      
      codigo.innerHTML = "<input type='text'>";
      desc_produto.innerHTML = "<input type='text'>";
      quantidade.innerHTML = "<input type='text'>";
      valor.innerHTML = "<input type='text'>";
      data.innerHTML = "<input type='date'>";
     
  }
  
  



   

