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
    <?php include 'menu.php' ?>
    <div class="container">
        <div class="row">
            <section class="content">
                <div class="col-md-12 ">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="pull-right">
                                <select id="categoria" class="form-control">
                                    <option value="Ação">Ação</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Terror">Terror</option>
                                    <option value="Suspense">Suspense</option>
                                    <option value="Comédia">Comédia</option>
                                    <option value="Ficção Científica">Ficção Científica</option>
                                    <option value="Policial">Policial</option>
                                    <option value="Aventura">Aventura</option>
                                    <option value="Infantil">Infantil</option>
                                </select>
                                <div class="btn-group" id="filtro">
                                    <button type="button" class="btn btn-success btn-filter " data-target="lancamento">Lançamentos</button>
                                    <button type="button" class="btn btn-warning btn-filter" data-target="catalogo">Catálogo</button>
                                    <button type="button" class="btn btn-danger btn-filter" data-target="disponivel">Disponíveis</button>
                                    <button type="button" class="btn btn-default btn-filter active" data-target="todos">Todos</button>
                                </div>
                                
                            </div>
                            <div class="table-container">
                                <table id="catalogo" class="table table-filter">
                                <tbody></tbody>
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
