<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Arquivos Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">

    <!-- Arquivos Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Arquivos CSS -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/list-service.css">
    <link rel="stylesheet" href="styles/responsive.css">
 
    <title>Victor Rosa</title>

<body>
    <div id="page-list-service">

        <div class="content">
        
            <header>
                <figure>
                    <img src="assets/logo-home.png" alt="Logomarca">
                </figure>
                
                <a href="index.html">
                    <span></span>
                    Voltar para home
                </a>
    
            </header>

            <main>

                <h6>Veja todos os serviços oferecidos por nossos profissionais...</h6>

                <div class="painel-servicos">

                <?php
                    
                    $db = new PDO("mysql:host=localhost;dbname=appservice;charset=utf8","root","");
                    $resultado = $db->query("SELECT * FROM cad_servicos");

                    foreach($resultado as $pessoa)
                    {
                ?>
                        
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pessoa["nomeServico"] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $pessoa["nome"] ?></h6>
                            <p class="card-text"><?= $pessoa["descricao"] ?></p>
                            <a href="#" data-id="<?= $pessoa["id_pessoa"]?>" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Mais Informações</a>
                        </div>
                    </div>

                <?php
                }
                ?>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Informações do Profissional</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">

                                            <label for="recipient-name" class="col-form-label">Nome:</label>
                                            <h6>Felipe</h6>

                                            <label for="recipient-name" class="col-form-label">Endereço:</label>
                                            <h6>Av. Desem. Antonio Jose Miguel Feu Rosa</h6>

                                            <label for="recipient-name" class="col-form-label">Telefone:</label>
                                            <h6>27 30800047</h6>

                                            <label for="recipient-name" class="col-form-label">Celular:</label>
                                            <h6>27 998817992</h6>

                                            <label for="recipient-name" class="col-form-label">E-mail:</label>
                                            <h6>Felipe.silva@hotmail.com</h6>

                                        </div>
                                        <div class="dropdown-divider"></div>
                                        
                                        <label for="recipient-name" class="col-form-label">E-mail de contato:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                        
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Informe o que deseja no campo abaixo:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>