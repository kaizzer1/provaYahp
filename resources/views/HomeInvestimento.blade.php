<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investimentos</title>
</head>
<body>
    <h1>Investimentos dos Funcionarios</h1>
    <p>{{ $investimento->idFuncionario }}</p>
    <p>{{ $investimento->descricao }}</p>
    <p>{{ $investimento->rentabilidade }}</p>
    <p>{{ $investimento->tipo }}</p>
    
</body>
</html>