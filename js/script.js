window.onload = function() {
    // Verifica se a URL contém "logado=true"
    if (window.location.href.indexOf("logado=true") > -1) {
        alert("Logado com sucesso!"); // Alerta de sucesso
    } else if (window.location.href.indexOf("logado=false") > -1) {
        alert("Credenciais inválidas. Tente novamente."); // Alerta de erro
    } else if (window.location.href.indexOf("logado=empty") > -1) {
        alert("Por favor, preencha todos os campos."); // Alerta de campos vazios
    }
};
