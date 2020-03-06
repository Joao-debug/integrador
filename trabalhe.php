<?php

// Configuração inicial da página
require ('config.php');

// Define o título "desta" página
$titulo = "";

// Opção ativa no menu principal
$menu = "pedido";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "/css/trabalhe.css";

// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

/*********************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/

// "Declarando" variáveis
$nome = $email = $telefone = $endereço = $erro = $msgErro = $msgOk = $msgMail = $cpf = $curriculo ='';

// Se o formulário foi enviado
if ( isset($_POST['enviado']) ) :

    // Obtém o nome do form
    $nome = sanitiza( filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING) );

    // Obtém o e-mail do form
    $email = sanitiza( filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) );

    // Obtém o nome do form
    $telefone = sanitiza( filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING) );

    // Obtém o nome do form
    $endereço = filter_input(INPUT_POST, 'endereço', FILTER_SANITIZE_STRING);

    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);

    $curriculo = filter_input(INPUT_POST, 'curriculo', FILTER_SANITIZE_STRING);
    
    // Verificar o preenchimento do nome
    if (strlen($nome) < 2) {
        $erro .= "<li>Seu nome está muito curto.</li>";
    }

    // Verificar o preenchimento do e-mail
    // O sinal "!" inverte TRUE com FALSE
    if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        $erro .= "<li>Seu e-mail parece inválido.</li>";
    }

    // Verificar o preenchimento do assunto
    if (strlen($telefone) < 4) {
        $erro .= "<li>O telefone está muito curto.</li>";
    }
    
    // Verificar o preenchimento da mensagem
    if (strlen($endereço) < 4) {
        $erro .= "<li>O endereço está muito curto.</li>";
    }
    if (strlen($cpf) < 4) {
        $erro .= "<li>O endereço está muito curto.</li>";
    }
    if (strlen($curriculo) < 4) {
        $erro .= "<li>O endereço está muito curto.</li>";
    }

    // Validando erros
    if ($erro != '') :

        // Cria mensagem de erros. Usamos HEREDOC.
        $msgErro .= <<<TEXTO
<div class="msgErro">
    <h3>Ooooops!</h3>
    <p>Ocorreram erros que impedem o envio do seu contato:</p>
    <ul>{$erro}</ul>
    <p>Por favor corrija os erros e tente novamente.</p>
</div>
        
TEXTO;

    else :
        
        // Preparando para salvar os dados
        $sql = <<<SQL
INSERT INTO trabalhe
    (id_nome, id_email, id_telefone, id_endereço, id_cpf, id_curriculo)
VALUES
    ('{$nome}', '{$email}', '{$telefone}', '{$endereço}', '{$cpf}', '{$curriculo}')
;
SQL;

        // Executa a query gerada em $sql
        $conn->query($sql);

        // Prepara dados para envio por e-mail
        $msgMail .= <<<TEXTO
Um novo contato foi enviado para o site "SemNome":
    Nome: {$nome}
    E-mail: {$email}
    Telefone: {$telefone}
    Endereço: {$endereço}
    Cpf: {$cpf}
    Curriculo: {$curriculo} 
TEXTO;

        // Enviando e-mail --> Não funciona no XAMPP
        // O "@" oculta mensagens de erro --> CUIDADO!
        // Dê preferência a bibliotecas de e-mail à função "mail()" do PHP
        // Por exemplo, pesquise por "PHPMailer" e outras similares
        @mail('admin@semnome.com', 'Novo contato com SemNome', $msgMail);

        // Obtendo partes do nome
        // O primeiro nome estará em $partes[0]
        $partes = explode(' ', $nome);

        // Gerando mensagem de agradecimento
        $msgOk .= <<<TEXTO
<div class="msgOk">
    <h3>Olá {$partes[0]}!</h3>
    <p>Seu contato foi enviado para a equipe do site.</p>
    <p>Se necessário, em breve responderemos.</p>
    <p><em>Obrigado...</em></p>
</div>
TEXTO;
     
    endif;

endif;

/************************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/

// Inclui o cabeçalho do template
require ('header.php');

?>

<div class="row">
    <div class="col1">

        

        <?php
        if ($msgOk == ''):
        ?>

        

        <?php echo $msgErro ?>

        <h1>Escolha seu sabor</h1>

<p></p>

<label for="cars">Lista de sabores</label>

<center><select id="cars">
  <option value="pepperoni">Pepperoni</option>
  <option value="portuguesa">Portuguesa</option>
  <option value="4queijos">4 Queijos</option>
  <option value="calabresa">Calabresa</option>
  <option value="frango">Frango com Catupiry</option>
  <p>
                <label for="endereço">Endereço:</label>
                <input type="text" name="endereço" id="endereço" placeholder="Seu endereço" value="<?php echo $endereço ?>">
            </p>
  <label></label>
  <button type="submit">Pedir</button>
</select></div>

</body>
</html>


        <?php
        else:
            echo $msgOk;
        endif;
        ?>

    </div>
    







<?php

// Inclui o rodapé do template
require ('footer.php');

?>