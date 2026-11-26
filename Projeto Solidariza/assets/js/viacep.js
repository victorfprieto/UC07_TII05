async function buscarCep(cep) {
    const url = `https://viacep.com.br/ws/${cep}/json/`;

    try {
        console.log(`Buscando CEP: ${url}`);

        const resposta = await fetch(url);

        if (!resposta.ok) {
            throw new Error(`Erro ao buscar CEP: ${resposta.status}`);
        }

        const dados = await resposta.json();

        if (dados.erro) {
            console.error(`CEP não encontrado: ${cep}`);
            return { erro: true };
        }

        return {
            erro: false,
            cep: dados.cep,
            logradouro: dados.logradouro,
            bairro: dados.bairro,
            localidade: dados.localidade,
            uf: dados.uf
        };

    } catch (erro) {
        console.error(`Erro ao buscar o CEP: ${erro.message}`);
        return null;
    }
}

const campoCep = document.getElementById('cep');

if (campoCep) {
    const campoLogradouro = document.getElementById('logradouro');
    const campoBairro = document.getElementById('bairro');
    const campoLocalidade = document.getElementById('localidade');
    const campoUf = document.getElementById('uf');
    const cepStatus = document.getElementById('cep-status');

    function limparCamposEndereco() {
        if (campoLogradouro) campoLogradouro.value = '';
        if (campoBairro) campoBairro.value = '';
        if (campoLocalidade) campoLocalidade.value = '';
        if (campoUf) campoUf.value = '';
    }

    campoCep.addEventListener('blur', async () => {
        const cepLimpo = campoCep.value.replace(/\D/g, '');

        if (cepLimpo.length !== 8) {
            return;
        }

        cepStatus.textContent = 'Buscando CEP...';
        cepStatus.classList.remove('texto-erro');

        const endereco = await buscarCep(cepLimpo);

        if (!endereco || endereco.erro) {
            cepStatus.textContent = 'CEP não encontrado, verifique os números digitados';
            cepStatus.classList.add('texto-erro');
            campoCep.classList.add('input-erro');
            limparCamposEndereco();
            return;
        }

        campoLogradouro.value = endereco.logradouro || '';
        campoBairro.value = endereco.bairro || '';
        campoLocalidade.value = endereco.localidade || '';
        campoUf.value = endereco.uf || '';

        cepStatus.textContent = 'Endereço preenchimento automático realizado com sucesso!';
        cepStatus.classList.remove('texto-erro');
        campoCep.classList.remove('input-erro');
        campoCep.classList.add('input-sucesso');
    });
}