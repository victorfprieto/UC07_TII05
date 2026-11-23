<?php include_once 'includes/header.php'; ?>
 
<main class="conteudo-principal">
    <section class="container-form">
        <div class="card-form card-form-pequeno">
            <div class="cabecalho-form">
                <h2>Entrar no Solidariza</h2>
                <p>Acesse sua conta para acompanhar suas doações e campanhas.</p>
            </div>
 
            <form id="form-login" class="formulario" method="POST" action="actions/auth_login">
                <div class="grupo-input">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" autocomplete="email" required>
                </div>
                <div class="grupo-input">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" autocomplete="current-password" required>
                </div>
                <button type="submit" class="btn-bloco btn-sustentavel">Entrar</button>
            </form>
 
            <div class="rodape-form">
                <p>Ainda não tem conta? <a href="cadastrar.php">Cadastre-se</a></p>
            </div>
        </div>
    </section>
</main>

<?php include_once 'includes/footer.php'; ?>