# Viver a Dança - Site de Academia de Dança

Este projeto é um site para a "Viver a Dança", uma academia de dança. Foi desenvolvido originalmente como um projeto para a disciplina de Programação Web da Universidade do Estado do Pará.

O site fornece informações sobre a academia, suas aulas, horários e permite que os usuários entrem em contato por meio de um formulário de contato.

## Funcionalidades

*   **Página Inicial:** Uma página de boas-vindas com uma visão geral da missão, visão e estrutura da academia.
*   **Ritmos de Dança (`ritmos.php`):** Informações sobre os diferentes estilos de dança oferecidos.
*   **Horários (`horarios.php`):** Uma página detalhando os horários das aulas.
*   **Dicas (`dicas.php`):** Uma seção com dicas para dançarinos.
*   **Agendamento (`agendamento.php`):** Informações sobre como agendar aulas particulares via WhatsApp.
*   **Formulário de Contato (`contact-us.php`):** Um formulário para os usuários enviarem mensagens para a academia, que são armazenadas no banco de dados.
*   **Painel de Administração (`admin.php`):** Um painel simples para visualizar todas as mensagens enviadas através do formulário de contato. **Atenção:** Esta página não possui autenticação e é de acesso público.

## Tecnologias Utilizadas

*   **Frontend:** HTML, CSS, JavaScript
*   **Backend:** PHP
*   **Banco de Dados:** MySQL

## Instruções para Instalação Local

Para executar este projeto localmente, você precisará de um ambiente de servidor web que suporte PHP e MySQL (por exemplo, XAMPP, WAMP, MAMP).

### 1. Configuração do Banco de Dados

1.  Inicie seus servidores Apache e MySQL.
2.  Abra uma ferramenta de gerenciamento de banco de dados como o phpMyAdmin.
3.  Crie um novo banco de dados e nomeie-o `bdform`.
4.  Selecione o banco de dados `bdform` e importe o arquivo `bdform202503111501.sql` fornecido neste projeto. Isso criará a tabela `formulario` e a preencherá com alguns dados de exemplo.

### 2. Conexão com o Banco de Dados

O projeto se conecta ao banco de dados usando credenciais que estão hardcoded nos arquivos PHP.

-   Abra o arquivo `admin.php`.
-   Por volta da linha 5, você encontrará as configurações de conexão com o banco de dados:
    ```php
    $server = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "bdform";
    ```
-   Se a sua configuração local do MySQL usar um nome de usuário ou senha diferente, atualize as variáveis `$usuario` e `$senha`.
-   As mesmas credenciais são usadas em `processa.php`, que lida com o envio do formulário de contato. Pode ser necessário atualizá-lo lá também.

### 3. Executando o Projeto

1.  Coloque a pasta inteira do projeto no diretório raiz do seu servidor web (por exemplo, a pasta `htdocs` no XAMPP).
2.  Abra seu navegador e navegue para `http://localhost/nome-da-pasta-do-seu-projeto/`.

Você deve agora ver a página inicial do site "Viver a Dança". Você pode acessar o painel de administração navegando para `http://localhost/nome-da-pasta-do-seu-projeto/admin.php`.
