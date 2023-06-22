<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Transferência</title>

    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid col-md-8 align-items-center">
        <h2>Criar Transferência</h2>
        <form class="row" action="/transfer" method="POST">
            @csrf
            <div class="col-md-6 mt-2">
                <label for="" class="form-label">Título</label>
                <input type="text" class="form-control" name="title" id="" placeholder="Atribua um título a transferência">
            </div>
            <div class="col-sm-3 mt-2">
                <label for="" class="form-label">Data de Vencimento</label>
                <input type="date" class="form-control" name="schedule" id="" placeholder="R$ 100,00">
            </div>
            <div class="col-md-6 mt-2">
                <label for="" class="form-label">Descrição</label>
                <textarea class="form-control" style="resize: none" rows="4" name="description" id="" placeholder="Descreva o registro financeiro"></textarea>
            </div>
            <div class="col-sm-3 mt-2">
                <label for="" class="form-label">Quantia</label>
                <input type="text" class="form-control" name="value" id="" placeholder="R$ 100,00">
                <div class="input-group mb-3">
                    <select class="custom-select" name="type" id="inputGroupSelect02">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                        </div>
                        <option selected>Selecione...</option>
                        @for ($i = 0; $i < count($categories); $i++)
                            <option value="{{$categories[$i]->id}}">{{$categories[$i]->description}}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="div col-md-3">
                <div class="form-check mt-2">
                    <input type="checkbox" class="form-check-input" name="isExpense" id="isExpense">
                    <label class="form-check-label" for="expense">Despesa</label>
                </div>
                <div class="form-check mt-2">
                    <input type="checkbox" class="form-check-input" name="isRecurrent" id="isRecurrent">
                    <label class="form-check-label" for="recurrent">Recorrente</label>
                </div>
            </div>
            <div class="col-md-5 mt-4">
                <input type="submit" class="btn btn-primary col-md-5" value="Criar">
            </div>
        </form>
    </div>
</body>
</html>