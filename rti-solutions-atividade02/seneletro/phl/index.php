<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Document</title>
</head>
<body>
    <!-- Formulario -->
    <form  method="GET" action="contaDeLuz.php">
        <h1>Seneletro</h1>
        <div class="input-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Nome completo" required/>
        </div>

        <div class="input-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" placeholder="Endereço ex: Rua platão, n°524" required/>
        </div>

        <div class="input-group">
            <label for="quilowatts">Quilowatts-hora</label>
            <input type="number" name="consumo" placeholder="Digite o quilowatts-hora" required/>
        </div>

        <button>Calcular</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>
