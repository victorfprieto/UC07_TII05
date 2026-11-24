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
                            <label for="senha">Confirme sua senha</label>
                            <input 
                                type="password"
                                id="senha"
                                name="senha"
                                placeholder="Mínimo de 6 caracteres"
                                minlength="6"
                                required
                            >
                        </div>
                    </div>
                </fieldset>
                <fieldset class="grupo-secao">
                    <legend>Endereço para logística de coleta</legend>
                    <div class="linha-dupla">
                        <div class="grupo-input">
                            <label for="cep">CEP</label>
                            <input 
                                type="text"
                                id="cep"
                                name="cep"
                                placeholder="Ex. 12345-678"
                                maxlength="9"
                                required
                            >
                            <small id="cep-status" class="texto-ajuda">Digite o CEP para preenchimento automático</small>
                        </div>
                        <div class="grupo-input"></div>
                    </div>
                    <div class="grupo-input"></div>
                    <div class="linha-dupla"></div>
                </fieldset>
                <button type="submit" class="btn-bloco btn-sustentavel">Entrar</button>
            </form>

            <div class="rodape-form">
                Já tem uma conta? <a href="login.php">Entre aqui</a>
            </div>
        </section>
    </main>

<?php include_once 'includes/footer.php'; ?>