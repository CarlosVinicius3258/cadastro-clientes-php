<?php
include_once 'includes/header.php';
include_once 'includes/footer.php';
include_once 'php-action/db_connect.php';
include_once 'includes/message.php';
?>
<div class="row">

    <div class="col s12 m6 push-m3">
        <h3 class='light'>Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome </th>
                    <th>E-mail </th>
                    <th>idade </th>
                </tr>
            </thead>
            <tbody>

                <?php
                //Seleciona os dados de Clientes
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);
                while ($dados = mysqli_fetch_array($resultado)) :
                ?>

                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['sobrenome']; ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo $dados['idade']; ?></td>
                        <td><a href="php-action/editar.php?id=<?php echo $dados['id']; ?>" class='btn-floating'><i class='material-icons orange'>edit</i></a></td>
                        <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating modal-trigger"><i class="material-icons red">delete</i></a></td>

                        <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['id']; ?>" class="modal">
                            <div class="modal-content">
                                <h4>Que viagem é essa!!</h4>
                                <p>Té doidé!! Certeza??</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancelar</a>
                                <form action="php-action/deletar.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                    <button type="submit" class="btn red">Continuar</button>

                                </form>
                            </div>
                        </div>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <a href="php-action/adicionar.php" class="btn">Adicionar cliente</a>
    </div>
</div>

<?php

?>