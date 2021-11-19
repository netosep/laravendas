<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
</head>

<body>
    <div id="table-area" class="p-4">
        <h3>Produtos</h3>
        <div class="links d-flex">
            <a href="{{ route('index') }}" class="link-primary m-3">Voltar ao Home</a>
            <a href="{{ route('site.cadastrar-produto') }}" class="link-success m-3">Cadastrar um produto</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor <small>(R$)</small></th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr class="text-center">
                        <th scope="row">{{ $produto->id }}</th>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td>R$ {{ number_format($produto->valor, 2, ',', '') }}</td>
                        <td>
                            <a href="{{ route('site.editar-produto', $produto->id) }}" class="btn btn-secondary btn-sm" title="Editar">
                                <i class="far fa-edit"></i>
                            </a>
                            <button class="btn btn-danger btn-sm" onclick="deleteItem('{{ route('site.delete-produto', $produto->id) }}')" title="Deletar">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @isset($mensagem)
        <div class="toast text-white bg-success border-0 m-5" id="toast" style="display: block; position: absolute;">
            <div class="d-flex justify-content-center">
                <div class="toast-body d-flex align-items-center" style="font-size: 15px;">
                    <p class="m-1">{{ $mensagem }}</p>
                    <i class="far fa-check-circle"></i>
                </div>
            </div>
        </div>
    @endisset
</body>

<script src="{{ url('js/toast.js') }}"></script>
<script src="{{ url('js/delete.js') }}"></script>

</html>
