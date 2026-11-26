<footer class="rodape-principal">
    <div class="rodape-conteudo">
        <p>&copy; <?php echo date("Y")?> Solidariza. Todos os direitos reservados.</p>
        <p><small>Desenvolvido para fins educacionais - Turma TII05 @ Senac Santos</small></p>
    </div>
</footer>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/validacao.js"></script>
    <script src="assets/js/viacep.js"></script>

    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const menuLinks = document.querySelector('.menu-links');

        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('ativo');
            menuLinks.classList.toggle('ativo');
        });
    </script>
</body>
</html>