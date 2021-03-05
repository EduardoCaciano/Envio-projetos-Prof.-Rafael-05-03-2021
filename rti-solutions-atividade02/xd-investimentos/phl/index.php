<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Document</title>
</head>
<body>
    <!-- Formulario -->
    <form  method="GET" action="conversaoMonetaria.php">
        <h1>XD Investimentos</h1>

        <div class="input-group">
            <label for="nome">Real R$:</label>
            <input type="number" name="reais" placeholder="Digite o valor de conversão ex: 500.00" required/>
        </div>

        <p style="margin-bottom: 0;">Selecione a moeda de conversão:</p>
        <div>
            <input type="radio" id="dolar" value="Dolar" name="moedas" />
            <label for="dolar">Dolar</label>
        </div>

        <div>
            <input type="radio" id="euro" value="Euro" name="moedas" />
            <label for="euro">Euro</label>
        </div>

        <button>Calcular</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>