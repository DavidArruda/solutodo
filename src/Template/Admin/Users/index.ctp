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
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!--inclui paginação criada no element -->
    <?= $this->element('pagination'); ?>

</div>