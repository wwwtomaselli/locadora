<html>
    <head>
        <meta charset="UTF-8">
        <title>Locadora</title>

        <link href="css/bootstrap.css" rel="stylesheet" />
        
        <script type="text/javascript" src="js/jquery-2.2.4.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/catalogo.js"></script>

    </head>
    <body>
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
                        <li class="active"><a href="#">Catálogo</a></li>
                        <li><a href="#about">Cadastro de Filmes</a></li>
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

                <section class="content">
                    
                    <div class="col-md-12 ">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-filter" data-target="pagado">Pagado</button>
                                        <button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendiente</button>
                                        <button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelado</button>
                                        <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
                                    </div>
                                </div>
                                <div class="table-container">
                                    <table id="catalogo" class="table table-filter">
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <p>
                                © - 2016 <br>
                                Criado via recorta-e-cola por EuMesmo
                            </p>
                        </div>
                    </div>
                </section>

            </div>
        </div>


    </body>
</html>
