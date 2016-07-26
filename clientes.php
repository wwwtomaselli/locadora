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
    <!--?php include 'menu.php' ?-->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Locadora</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/index.php">Catálogo</a></li>
                    <li class="active"><a href="/cadastro.php">Cadastro de Filmes</a></li>
                    <li><a href="#contact">Locação</a></li>
                    <li><a href="#contact">Clientes</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Logout</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <form class="form-horizontal" id="form-cadastro">
            
            <input type="hidden" name="idcadastro" id="idcadastro" />
             
            <fieldset>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

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

            </fieldset>
            </form>
        </div>
    </div><!--/.container-collapse -->
</body>
</html>
