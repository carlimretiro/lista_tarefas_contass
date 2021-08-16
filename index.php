    <?php  require_once("header.php");?>
    <main class="container">
        <table class="striped">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Descrição</th>
                    <th>Usuário</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <!--Buscando todas as tarefas cadastradas-->
            <?php foreach ($result_tarefas as $tarefa) { ?>
                <td><?= date("d/m/Y", strtotime($tarefa['data_tarefa']));?></td>
                <td><?= date("H:i", strtotime($tarefa['hora_tarefa']));?></a></td>
                <td><?= $tarefa['descricao']?></td>
                <td><?= $tarefa['usuario']?></a></td>
                <td>
                    <a href="visualizar_tarefa.php?id=<?= $tarefa['id']?>" title="Visualizar Tarefa"><i style="font-size: 20px" class="fa fa-eye"></i></a>
                    <a href="editar_tarefa.php?id=<?= $tarefa['id']?>" title="Editar Tarefa"><i style="font-size: 20px" class="fa fa-edit"></i></a>
                    <a href="config/excluir_tarefa.php?id=<?= $tarefa['id']?>" title="Excluir Tarefa"><i style="font-size: 20px" class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </main>
   <?php require_once "footer.php"; ?>