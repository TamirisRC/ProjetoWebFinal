<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web 2.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a href="#" class="navbar-brand" style="color: #000">
                            <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web 2.0
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Cadastro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="consulta.php">Consulta</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand">Cadastro do Usuario</span>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>

        
        <div class="row">
            <div class="col">
                <form method="post" action="controller/ControllerCadastro.php?funcao=cadastro" id="form" name="form">        
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" required id="txtEmail" name="txtEmail">
                        </div>
                        <div class="col-md-6">
                            <label for="inputSenha4" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="txtSenha" required name="txtSenha">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEndereco4" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="txtEndereco" required name="txtEndereco">
                        </div>
                        <div class="col-md-6">
                            <label for="inputBairro4" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="txtBairro" required name="txtBairro">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCep4" class="form-label">Cep</label>
                            <input type="text" class="form-control" id="txtCep" required name="txtCep">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCidade4" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="txtCidade" required name="txtCidade">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Estado</label>
                            <select class="form-select" required name="cboEstado" id="cboEstado">
                                <option>AC</option>
                                <option>AL</option>
                                <option>AP</option>
                                <option>AM</option>
                                <option>BA</option>
                                <option>CE</option>
                                <option>ES</option>
                                <option>GO</option>
                                <option>MA</option>
                                <option>MT</option>
                                <option>MS</option>
                                <option>MG</option>
                                <option>PA</option>
                                <option>PB</option>
                                <option>PR</option>
                                <option>PE</option>
                                <option>PI</option>
                                <option>RJ</option>
                                <option>RN</option>
                                <option>RS</option>
                                <option>RO</option>
                                <option>RR</option>
                                <option>SP</option>
                                <option>SE</option>
                                <option>TO</option>
                                <option>DF</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
                        </div>
                </form>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>