<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/mufin.png">
    <title>Meu Site Exemplo</title>
</head>

<body>
    <?php 
      $nome    = $_GET["name"];       // obtém dado enviado do form e atribui a variável 
      $email   = $_GET["email"];      // obtém dado enviado do form e atribui a variável
      $celular = $_GET["celular"];    // obtém dado enviado do form e atribui a variável
      $agree   = $_GET["agree-term"]; // obtém dado enviado do form e atribui a variável
      $data    = $_GET["dt_nasc"];    // obtém dado enviado do form e atribui a variável

      list($ano, $mes, $dia) = explode('-', $data); // Separa ano, mês e dia, da data recebida
      $aniversario = $dia . '/' . $mes . '/' . $ano; // Formata data: dia, mês e ano

      // Cria data atual
      $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

      // Descobre a unix timestamp da data de nascimento da pessoa
      $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
      $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    ?>
    <div class="sidebar">
        <a href="index.html">Início</a>
        <a href="news.html">Novidades</a>
        <a class="active" href="contact_GET.html">Contato (via GET)</a>
        <a href="contact_POST.html">Contato (via POST)</a>
        <a href="about.html">Sobre nós</a>
    </div>

    <script src="script/script.js"></script>
    <div class="content">

        <h2 class="titleTop">Dados de Contato</h2>
        <h4 class="formType">Dados recebidos via method="GET"</h4>
        <p><b>PHP</b> recebe os dados enviados via <b>GET</b> de um Form HTML</p>

        <table class="tableCSS">
            <tr><th>CAMPO</th><th>VALOR</th></tr>
            <tr><th>Nome</th><td><?php echo $nome; ?></td></tr>
            <tr><th>E-mail</th><td><?php echo $email; ?></td></tr>
            <tr><th>Celular</th><td><?php echo $celular; ?></td></tr>
            <tr><th>Aniversário</th><td><?php echo $aniversario; ?></td></tr>
            <tr><th>Idade</th><td><?php echo $idade; ?></td></tr>
            <tr><th>Concorda Form?</th><td><?php echo $agree; ?></td></tr>
        </table>
            <input type=button class="form-submit" value=" << Retornar" onclick="history.back()">
</body>

</html>