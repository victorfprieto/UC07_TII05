<?php include_once 'includes/header.php'; ?>

    <main class="conteudo-principal container-form">
        <section class="card-form">
            <div class="cabecalho-form">
                <h2>Cadastre-se no Solidariza</h2>
                <p>Preencha seus dados para participar das campanhas de arrecadação</p>
            </div>

            <form id="form-cadastro" class="formulario" method="POST" action="actions/auth_register.php">
                <fieldset class="grupo-secao">
                    <legend>Dados pessoais e Acesso</legend>
                    <div class="grupo-input">
                        <label for="nome">Nome Completo</label>
                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            placeholder="Digite seu nome"
                            maxlength="150"
                            required
                        >
                    </div>
                    <div class="grupo-input">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="seuemail@exemplo.com"
                            maxlength="150"
                            required
                        >
                    </div>
                    <div class="linha-dupla">
                    <div class="grupo-input">
                        <label for="senha">Senha</label>
                        <input 
                            type="password"
                            id="senha"
                            name="senha"
                            placeholder="Mínimo de 6 caracteres"
                            minlength="6"
                            required
                        >
                    </div>
                    <div class="grupo-input">
                        <!-- ID alterado para confirma-senha -->
                        <label for="confirma-senha">Confirme sua senha</label>
                        <input 
                            type="password"
                            id="confirma-senha"
                            name="confirma-senha"
                            placeholder="Mínimo de 6 caracteres"
                            minlength="6"
                            required
                        >
                        <small id="erro-senha" class="mensagem-erro"></small>
                    </div>
                </div>
                </fieldset>
                <fieldset class="grupo-secao">

                    <legend>Endereço para lojista de coleta</legend>
                    <div class="linha-dupla">
                        <div class="grupo-input">
                            <label for="cep">CEP</label>
                            <input
                                type="text"
                                id="cep"
                                name="cep"
                                placeholder="Ex: 12345-678"
                                maxlength="9"
                                required
                            >
                            <small id="cep-status" class="texto-ajuda"> Digite o CEP para preencimento automatico</small>
                        </div>
                        <div class="grupo-input">
                            <label for="bairro">Bairro</label>
                            <input
                                type="text"
                                id="bairro"
                                name="bairro"
                                placeholder="Preenchimento automático"
                                required
                            >
                        </div>
                    </div>

                    <div class="grupo-input">
                        <label for="logradouro">Logradouro</label>
                        <input
                            type="text"
                            id="logradouro"
                            name="logradouro"
                            placeholder="Ex: Rua Exemplo, 123"
                            maxlength="200"
                            required
                            >
                    </div>
                
                    <div class="linha-dupla"></div>
                    <div class="grupo-input">
                        <label for="localidade">Cidade</label>
                        <input
                            type="text"
                            id="localidade"
                            name="localidade"
                            placeholder="Preenchido automaticamente"
                            maxlength="100"
                            required
                        >
                    </div>
                
                    <div class="grupo-input">
                        <label for="uf">Estado</label>
                        <input
                            type="text"
                            id="uf"
                            name="uf"
                            placeholder="Preenchido automaticamente"
                            maxlength="2"
                            required
                        >
                    </div>
                </fieldset>
                <button type="submit" class="btn-bloco btn-sustentavel">Entrar</button>
            </form>

            <div class="rodape-form">
                Já tem uma conta? <a href="login.php">Entre aqui</a>
            </div>
        </section>
    </main>

<?php include_once 'includes/footer.php'; ?>