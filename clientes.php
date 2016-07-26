<html>
<head>
    <meta charset="UTF-8">
    <title>Locadora</title>

    <link href="/css/bootstrap.css" rel="stylesheet" />
    
    <script type="text/javascript" src="/js/jquery-2.2.4.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/cadastro.js"></script>

</head>
<body><!-- Bootstrap trabalha com 12 colunas, classe "col-md--##' ocupa o espaço de ## colunas -->
    <?php include 'menu.php' ?>
    <div class="container">
        <div class="row">
            <form class="form-horizontal" id="form-clientes">
            <fieldset>

                <!-- Form Name -->
                <legend>Cliente</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="nome">Nome</label>  
                    <div class="col-md-4">
                        <input id="nome" name="nome" type="text" placeholder="Nome completo" class="form-control input-md">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="data-nascimento">Nascimento</label>  
                    <div class="col-md-4">
                        <input id="data-nascimento" name="data-nascimento" type="text" placeholder="Data de nascimento" class="form-control input-md">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Telefone">Telefone</label>  
                    <div class="col-md-4">
                        <input id="Telefone" name="Telefone" type="text" placeholder="Número do telefone" class="form-control input-md">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">E-mail</label>  
                    <div class="col-md-4">
                        <input id="email" name="email" type="text" placeholder="Endereço do e-mail" class="form-control input-md">
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cadastrar"></label>
                    <div class="col-md-4">
                        <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
                
            </fieldset>
            </form>
        </div>
    </div><!--/.container-collapse -->
</body>
</html>
