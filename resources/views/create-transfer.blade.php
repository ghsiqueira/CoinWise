<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Transferência</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card col-md-8">
            <div class="card-body">
                <h2 class="text-center mb-4">Criar Transferência</h2>
                <form action="/transfer" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <label for="" class="form-label">Título</label>
                            <input type="text" class="form-control" name="title" id="" placeholder="Atribua um título à transferência">
                        </div>
                        <div class="col-sm-3 mt-2">
                            <label for="" class="form-label">Data de Vencimento</label>
                            <input type="date" class="form-control" name="schedule" id="" placeholder="R$ 100,00">
                        </div>
                        <div class="col-md-3 mt-2">
                            <label for="" class="form-label">Categoria</label>
                            <select class="custom-select" name="type" id="inputGroupSelect02">
                                <option selected>Selecione...</option>
                                @for ($i = 0; $i < count($categories); $i++)
                                    <option value="{{$categories[$i]->id}}">{{$categories[$i]->description}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="" class="form-label">Descrição</label>
                            <textarea class="form-control" style="resize: none" rows="4" name="description" id="" placeholder="Descreva o registro financeiro"></textarea>
                        </div>
                        <div class="col-sm-3 mt-2">
                            <label for="" class="form-label">Quantia</label>
                            <input type="text" class="form-control" name="value" id="" placeholder="R$ 100,00">
                            <hr>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="isExpense" id="isExpense">
                                <label class="form-check-label" for="isExpense">Despesa</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="isRecurrent" id="isRecurrent">
                                <label class="form-check-label" for="isRecurrent">Recorrente</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-5 offset-md-7">
                            <input type="submit" class="btn btn-primary col-md-5" value="Criar">
                            <a href="{{ route('dashboard') }}" class="btn btn-link">Voltar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
