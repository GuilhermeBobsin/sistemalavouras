<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatura</title>
    <style>
        /* Estilo Geral */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .invoice-container {
            max-width: 800px;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Cabeçalho */
        .header {
            background: linear-gradient(90deg, #4caf50, #087f23);
            color: white;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            text-align: center;
            position: relative;
        }

        .header img {
            position: absolute;
            top: 10px;
            left: 20px;
            height: 60px;
        }

        .header h1 {
            font-size: 30px;
            margin: 0;
        }

        .header small {
            display: block;
            font-size: 14px;
            margin-top: 5px;
        }

        .info {
            margin: 20px 0;
        }

        .info p {
            font-size: 14px;
            line-height: 1.6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #4caf50;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .payment-info {
            margin-top: 25px;
            font-size: 15px;
        }

        .payment-info p {
            margin: 5px 0;
        }

        .signatures {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .signatures div {
            text-align: center;
            width: 48%;
        }

        .signatures hr {
            border: none;
            border-top: 1px solid #333;
            margin: 10px 0;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <!-- Cabeçalho -->
        <div class="header">
            <h1>Pedido {{ $pedido->id }}</h1>
            <small>Sua satisfação é nossa prioridade!</small>
        </div>

        <!-- Informações do Pedido -->
        <div class="info">
            <p><strong>Data:</strong> {{ date('d/m/Y') }}</p>
            <p><strong>Fatura de:</strong> {{ $pedido->cliente->nome }}</p>
            <p><strong>Endereço:</strong> Tainhas - Rio Grande do Sul</p>
            <p><strong>Email:</strong> hortibobsin@gmail.com</p>
        </div>

        <!-- Tabela de Produtos -->
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço por Dúzias</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $pedido->produto }}</td>
                    <td>{{ $pedido->quantidade }}</td>
                    <td>R$ {{ $pedido->preco_unitario }}</td>
                    <td>R$ {{ $pedido->total }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Informações de Pagamento e Assinaturas -->
        <div class="payment-info">
            <p><strong>Assinaturas:</strong></p>
            <div class="signatures">
                <div>
                    <p>Produtor</p>
                    <hr>
                </div>
                <div>
                    <p>Motorista</p>
                    <hr>
                </div>
            </div>
        </div>

        <!-- Rodapé -->
        <div class="footer">
            <p>Obrigado por fazer negócio conosco!</p>
            <p>&copy; 2025 Empresa Exemplar. Todos os direitos reservados.</p>
        </div>
    </div>
</body>
</html>
