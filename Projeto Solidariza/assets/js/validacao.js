// Captação dos elementos do formulário
const formCadastro = document.getElementById('form-cadastro');

// Validação do formulário
if (formCadastro) {
    const inputCep = document.getElementById('cep');
    const inputUf = document.getElementById('uf');
    const inputSenha = document.getElementById('senha');
    const inputConfirmarSenha = document.getElementById('confirma-senha');
    const msgErroSenha = document.getElementById('erro-senha');
    const msgCepStatus = document.getElementById('cep-status');

    // Valida CEP
    if (inputCep) {
        inputCep.addEventListener('input', (evento) => {
            let valor = evento.target.value.replace(/\D/g, '');
            valor = valor.substring(0, 8);

            if (valor.length > 5) {
                valor = valor.replace(/(\d{5})(\d)/, '$1-$2');
            }
            evento.target.value = valor;
            inputCep.classList.remove('erro', 'input-erro');
            
            if (msgCepStatus) {
                msgCepStatus.textContent = '';
                msgCepStatus.classList.remove('texto-erro');
            }
        });
    }

    // Valida UF
    if (inputUf) {
        inputUf.addEventListener('input', (evento) => {
            evento.target.value = evento.target.value.replace(/[^a-zA-Z]/g, '').toUpperCase();
        });
    }

    // Validação da Senha
    function validarSenha() {
        if (!inputSenha || !inputConfirmarSenha) return true;

        const senha = inputSenha.value;
        const confirma = inputConfirmarSenha.value;

        if (confirma === '') {
            if (msgErroSenha) msgErroSenha.textContent = '';
            inputConfirmarSenha.classList.remove('input-erro', 'input-sucesso');
            return false;
        }

        // Se as senhas forem diferentes, mostra o erro
        if (senha !== confirma) {
            if (msgErroSenha) msgErroSenha.textContent = 'As senhas devem coincidir';
            inputConfirmarSenha.classList.add('input-erro');
            inputConfirmarSenha.classList.remove('input-sucesso');
            return false;
        } else {
            if (msgErroSenha) msgErroSenha.textContent = '';
            inputConfirmarSenha.classList.remove('input-erro');
            inputConfirmarSenha.classList.add('input-sucesso');
            return true;
        }
    }

    if (inputSenha) inputSenha.addEventListener('input', validarSenha);
    if (inputConfirmarSenha) inputConfirmarSenha.addEventListener('input', validarSenha);

    // Validação final no envio
    formCadastro.addEventListener('submit', (evento) => {
        let formularioValido = true;

        if (!validarSenha()) {
            formularioValido = false;
            if (inputConfirmarSenha) inputConfirmarSenha.focus();
        }

        if (inputCep) {
            const cep = inputCep.value.replace(/\D/g, '');
            if (cep.length !== 8) {
                formularioValido = false;
                inputCep.classList.add('input-erro');
                if (msgCepStatus) {
                    msgCepStatus.textContent = 'Informe um CEP válido com 8 números';
                    msgCepStatus.classList.add('texto-erro');
                }
            }
        }

        if (!formularioValido) {
            evento.preventDefault();
        }
    });
}