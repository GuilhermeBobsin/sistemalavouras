<!-- resources/views/formulario.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Dúzias</title>
</head>
<body>
    <h1>Informe a quantidade de caixas:</h1>

    <form action="/formulario" method="POST">
        @csrf
        <label for="caixas">Caixas:</label>
        <input type="number" name="caixas" id="caixas" required>
        <button type="submit">Calcular</button>
    </form>

    @if($duzias !== null)
        <h2>Resultado:</h2>
        <p>Duzias: {{$duzias}}</p>
        <p>Unidades de Brócolis: {{ $unidadesTotais}}</p>
    @endif
</body>
</html>
