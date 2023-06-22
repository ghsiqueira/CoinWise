<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extrato</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card-container {
            width: 400px;
            margin-right: 20px;
        }

        .btn-primary {
            margin-right: 10px;
        }

        .btn-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
<div class="card-container">
    <h1 class="text-center mb-4">Extrato</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('extrato') }}" method="GET">
                @csrf
                <div class="form-row align-items-center mb-3">
                    <div class="col-auto">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="specific_month" id="specific_month" value="1">
                            <label class="form-check-label" for="specific_month">Selecionar mês</label>
                        </div>
                    </div>
                    <div class="col-auto" id="month_select" style="display: none;">
                        <label for="month">Mês:</label>
                        <select name="month" id="month" class="form-control">
                            <!-- Opções para selecionar o mês -->
                            <option value="">Todos</option>
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <label for="recurrent">Cobranças Recorrentes:</label>
                        <select name="recurrent" id="recurrent" class="form-control">
                            <option value="">Todas</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Visualizar Extrato</button>
                        <a href="{{ route('dashboard') }}" class="btn btn-link">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card-container">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Recorrente</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transfers as $transfer)
                        <tr>
                            <td>{{ $transfer->created_at }}</td>
                            <td>{{ $transfer->description }}</td>
                            <td>{{ $transfer->value }}</td>
                            <td>{{ $transfer->isRecurrent ? 'Sim' : 'Não' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Scripts Bootstrap e jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#specific_month').on('change', function() {
            if ($(this).is(':checked')) {
                $('#month_select').show();
            } else {
                $('#month_select').hide();
            }
        });
    });
</script>

</body>
</html>
