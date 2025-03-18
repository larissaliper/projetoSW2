<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felipe</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid bg-dark text-white text-center p-5">
        <h1>Projeto SW2</h1>
        <p>
            Elaborado por Larissa Liper
        </p>
    </div>

    <div class="container mt-5">
        <div class="row">

            <div class="col-sm-4">
                <a href='administrador.php' style="text-decoration : none"><h1 class="bg-primary text-warning">Administrador</h1></a>
                <p class="text-primary">
                    Utilize essa opção para realizar o cadastro de novos administradores, ou edita-los.
                </p>
            </div>

            <div class="col-sm-4">
                <a href='categoria.php' style="text-decoration : none"><h1 class="bg-danger text-white">Categorias</h1></a>
                <p class="text-danger">
                    Utilize essa opção para realizar o cadastro das categorias do produtos que serão vendidos online, ou edita-las.
                </p>
            </div>
                

            <div class="col-sm-4">
                <a href='fornecedor.php'  style="text-decoration : none"><h1 class="bg-success text-danger">Fornecedor</h1></a>
                <p class="text-success">
                    Utilize essa opção para realizar o cadastro dos fornecedores dos produtos que serão vendidos online, ou edita-las.
                </p>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href='produto.php'  style="text-decoration : none"><h1 class="bg-warning">Produtos</h1></a>
                <p class="text-warning">Use essa opção para cadastrar os produtos que serão vendidos no site</p>
        </div>
        <div class="col-sm-6">
            <h1 class="bg-secondary">Vendas</h1>
            <p class="text-secondary">Use essa opção para consultar as vendas realizadas pelos clientes</p>
        </div>
    </div>
</div>
</body>
</html>