const formCadastro = document.getElementById('form-cadastro');

if (formCadastro) {
    const inputCep = document.getElementById('cep');
    const inputUf = document.getElementById('uf');
    const inputSenha = document.getElementById('senha');
    const inputConfirmaSenha = document.getElementById('confirma-senha');
    const erroSenha = document.getElementById('erro-senha');
    const msgCepStatus = document.getElementById('cep-status');
}

// Testando inputCep
inputCep.addEventListener('input', () => {
    let valor = event.target.value.replace(/\D/g, '');

    valor = valor.substring (0, 8);

    if(valor.length > 5) {
        valor = valor.replace(/(\d{5})(\d)/, '$1-$2');
    }
    event.target.value = valor;

    inputCep.classList.remove('erro');

});
