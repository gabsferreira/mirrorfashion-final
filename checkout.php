<html>
    <head>
        <title>Checkout da Mirror Fashion</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <h1>Ótima escolha!</h1>
        <p>Obrigado por comprar na Mirror Fashion!
        Preencha seus dados para efetivar a compra.</p>
        
        <h2>Sua compra</h2>
        <dl>
            <dt>Cor</dt>
            <dd><?= $_POST['cor'] ?></dd>
            
            <dt>Tamanho</dt>
            <dd><?= $_POST['tamanho'] ?></dd>
            
            <dt>Produto</dt>
            <dd><?= $_POST['nome'] ?></dd>
        </dl>
    </body>
</html>