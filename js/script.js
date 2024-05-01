document.getElementById('login-screen').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede a atualização da página e perca dos dados inseridos pelo usuário
  
    // Obtenha os valores dos campos de login e senha
    let login = document.getElementById('login').value;
    let password = document.getElementById('password').value;

    // Exemplo: verificar os valores de login e senha
    if (login === 'usuario' && password === 'senha') {
        console.log('Login bem-sucedido!');
      
    } else {
        console.log('Credenciais inválidas. Tente novamente.');
        
    }
});
