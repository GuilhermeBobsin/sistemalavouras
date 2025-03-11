<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatura</title>
    <style>
        /* Seu CSS aqui */
    </style>
</head>
<body>
    <div class="invoice-container">
        <!-- Cabeçalho -->
        <div class="header">
            <h1>Pedidos de {{ $cliente->nome }}</h1>
            <small>Sua satisfação é nossa prioridade!</small>
        </div>

        <!-- Informações do Cliente -->
        <div class="info">
            <p><strong>Cliente:</strong> {{ $cliente->nome }}</p>
            <p><strong>Endereço:</strong> {{ $cliente->endereco }}</p>
            <p><strong>Email:</strong> {{ $cliente->email }}</p>
        </div>

        <!-- Tabela de Pedidos -->
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->produto }}</td>
                        <td>{{ $pedido->quantidade }}</td>
                        <td>R$ {{ number_format($pedido->preco_unitario, 2, ',', '.') }}</td>
                        <td>R$ {{ number_format($pedido->total, 2, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Rodapé -->
        <div class="footer">
            <p>&copy; 2025 Empresa Exemplar. Todos os direitos reservados.</p>
        </div>
    </div>
</body>
</html>
