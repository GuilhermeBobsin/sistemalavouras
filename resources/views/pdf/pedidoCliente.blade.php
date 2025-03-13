<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos {{ $cliente->nome }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            width: 100%;
            padding: 20px;
        }

        .invoice-container {
            width: 90%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            margin-left: 0px;
            margin-top: 50px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 22px;
            color: #333;
        }

        .header small {
            font-size: 14px;
            color: #777;
        }

        .info {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background: #f9f9f9;
        }

        .info p {
            font-size: 14px;
            margin: 5px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background: #f1f1f1;
            font-size: 14px;
        }

        table td {
            font-size: 14px;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #555;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        @media print {
            body {
                padding: 0;
            }

            .invoice-container {
                border: none;
                box-shadow: none;
            }

            .footer {
                position: absolute;
                bottom: 10px;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="header">
            <h1>Pedidos de {{ $cliente->nome }}</h1>
        </div>

        <div class="info">
            <p><strong>HortiBobsin</strong></p>
            <p><strong>Endereço:</strong> Tainhas/Serra Gaúcha - Rio Grande do Sul</p>
            <p><strong>Email:</strong> hortibobsin@gmail.com</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Data</th>
                    <th>Preço</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->produto }}</td>
                        <td>{{ $pedido->quantidade }}</td>
                        <td>{{ $pedido->created_at->format('d/m/Y') }}</td>
                        <td>R$ {{ number_format($pedido->preco_unitario, 2, ',', '.') }}</td>
                        <td>R$ {{ number_format($pedido->total, 2, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
            <p>&copy; Horti Bobsin {{ date('Y') }} Todos os direitos reservados.</p>
        </div>
    </div>
</body>
</html>
