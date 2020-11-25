<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Listar Usuários</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(
            __('Cadastrar'),
            ['controller' => 'users', 'action' => 'add'],
            ['class' => 'btn btn-outline-success btn-sm']
        );
        ?>
    </div>
</div>

<?= $this->Flash->render() ?>

<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>USUÁRIO</th>
                <th>NOME</th>
                <th>SOBRENOME</th>
                <th>DATA ADMISSÃO</th>
                <th>CRIADO</th>
                <th>MODIFICADO</th>
                <th class="text-center">AÇÕES</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->date_admission) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('EXIBIR'), ['controller' => 'users', 'action' => 'view', $user->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                        <?= $this->Html->link(__('EDITAR'), ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>
                        <?= $this->Form->postLink(__('EXCLUIR'), ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Realmente deseja excluir esse usuário # {0}?', $user->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!--inclui paginação criada no element -->
    <?= $this->element('pagination'); ?>

</div>