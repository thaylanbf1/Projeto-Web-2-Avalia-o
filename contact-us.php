<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="./img/logo-site.jp.png" type="image/x-icon">
     <script src="js/form.js" defer></script>
    <title>Fale Conosco</title>
</head>
<body>
    <!-- Cabeçaho e indice -->
 <?php 
include 'includes/header.php';
?>
    <!-- Fim do cabeçalho -->

    <!-- Formulário -->
    <main>
        <section class="section_form">
            <form action="processa.php" method="post" id="siteForm">
                <p>Entre em contato conosco pelo formulário abaixo</p>

                <div class="form">
                    <label for="nome">Nome:*</label>
                    <input type="text" name="nome" id="nome" placeholder="ex: Gustavo Pereira" required>
                </div>
                <div class="form">
                    <label for="email">E-mail:*</label>
                    <input type="email" name="email" id="email" placeholder="ex: gustavopereira@gmail.com" required>
                </div>
                <div class="form">
                    <label for="assunto">Assunto:*</label>
                    <select name="assunto" id="assunto" required>
                        <option value="" selected disabled>Selecione...</option>
                        <option value="Horários">Horários</option>
                        <option value="Ballet">Ballet</option>
                        <option value="Zumba">Zumba</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Ballet">Contemporâneo</option>
                        <option value="Hip-Hop">Hip-Hop</option>
                        <option value="Mensalidade">Mensalidade</option>
                    </select>
                </div>
                <div class="form">
                    <label for="mensagem">Sua Mensagem:*</label>
                    <textarea name="mensagem" id="mensagem" placeholder="Escreva Aqui" required></textarea>
                </div>

                <input type="submit" value="Enviar">

                
                <p class="sucesso" id="sucesso_mensagem">Formulário enviado com Sucesso!</p>
                <p id="erro_mensagem">Erro ao enviar, tente novamente mais tarde </p>

            </form>
        </section>
    </main>
    <!-- Fim do Formulário -->

    <!-- Rodapé -->
<?php 
    include 'includes/footer.php';
?>
   
</body>
</html>