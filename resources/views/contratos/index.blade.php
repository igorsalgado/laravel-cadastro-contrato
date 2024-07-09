<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contratos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Sistema de Contratos</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Contratos</a>
            </li></ul>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Lista de Contratos</h1>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>Nome do Banco</th>
                    <th>Verba</th>
                    <th>Código do Contrato</th>
                    <th>Data de Inclusão</th>
                    <th>Valor</th>
                    <th>Prazo</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($contratos as $contrato)
                    <tr>
                        <td>{{ $contrato->convenioServico->convenio->banco->nome }}</td>
                        <td>{{ number_format($contrato->convenioServico->convenio->verba, 2, ',', '.') }}</td>
                        <td>{{ $contrato->codigo }}</td>
                        <td>{{ \Carbon\Carbon::parse($contrato->data_inclusao)->format('d/m/Y') }}</td>
                        <td>{{ number_format($contrato->valor, 2, ',', '.') }}</td>
                        <td>{{ $contrato->prazo }} meses</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">© 2024 Sistema de Contratos. Todos os direitos reservados.</span>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
