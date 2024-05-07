<?php
    include("./template/topo.php");
    //Banco V
    //Buscar todos os usuarios
    //Adicionar eles na TABLE

    $con = new mysqli("127.0.0.1",
                      "root",
                      "",
                      "aula07");
    
    $sql = "SELECT * FROM login";
    $rs = $con->query($sql);
?>
<div class="col-lg-11 col-md-12 mx-auto">
    <div class="card mt-4">
        <div class="card-body p-3 pb-0">
            <div class="col-6">
                <div class="input-group mb-3">
                    <form method="" action="">
                        <input type="text" class="form-control"
                                name="localizar" 
                                placeholder="Digite até 3 letras para procurar"
                            />
                        <input type="submit" class="input-group-text" 
                                value="BUSCAR"/>
                    </form>
                </div>
                <a href="login_cadastro.php" class="btn btn-success">NOVO</a>
            </div>
            <div class="col-12">
                <h2>Listagem de usuários</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Usuário</td>
                            <td>Opções</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($linha = $rs->fetch_assoc()) {
                                echo "  <tr>
                                            <td>" . $linha["id"] . "</td>
                                            <td>" . $linha["usuario"] . "</td>
                                            <td>
                                                <a href='login_alterar.php?id=" . $linha["id"] . "' style='text-decoration:none'>✏️</a>
                                                <a href='' class='btn btn-danger'>🗑️</a>
                                            </td>
                                        </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
    include("./template/rodape.php");

?>