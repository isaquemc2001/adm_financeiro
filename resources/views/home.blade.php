<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Style CSS-->
    <link rel="stylesheet" href="css/style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <title>Controle Financeiro</title>
</head>

<body>
    <header>
        <nav>
            <a class="logo nav-link" href="#" style="color: white;">Controle Financeiro</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li class="nav-item"><a href="#" class="nav-link mt-3 d-flex" style="color: white;">Inicio</a></li>
                <li class="nav-item"><a class="nav-link mt-3 d-flex" style="color: white; cursor: pointer;">Cadastro</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link mt-3 d-flex" style="color: white;">Sair</a></li>
                <li></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="row" style="margin-left: 10rem; margin-bottom: 2rem;">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="title-entradas">Total Entradas</h5>
                        <h1 class="valor-card">R$ 200,00</h1>
                        <button class="btn badge bg-success" data-bs-toggle="modal" data-bs-target="#entrada">Adicionar
                            Entrada</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="title-saidas">Total Saidas</h5>
                        <h1 class="valor-card">R$ 200,00</h1>
                        <button class="btn badge bg-danger" data-bs-toggle="modal" data-bs-target="#saida">Adicionar
                            Saida</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-left: 10rem;">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="title-economizado">Total Economizado</h5>
                        <h1 class="valor-card">R$ 200,00</h1>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="title-diferenca">Total Diferença</h5>
                        <h1 class="valor-card">R$ 200,00</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Entradas -->
    <div class="modal fade" id="entrada" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Inserir entrada</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Valor</label>
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Saidas -->
    <div class="modal fade" id="saida" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
