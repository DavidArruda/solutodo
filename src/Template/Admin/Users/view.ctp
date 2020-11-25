<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Usuário</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('LISTAR'), [
                'controller' => 'users',
                'action' => 'index'
            ], ['class' => 'btn btn-outline-info btn-sm']) ?>

            <?= $this->Html->link(__('EDITAR'), [
                'controller' => 'users',
                'action' => 'edit', $user->id
            ], ['class' => 'btn btn-outline-warning btn-sm']) ?>

            <?= $this->Form->postlink(__('EXCLUIR'), [
                'controller' => 'users',
                'action' => 'delete', $user->id
            ], [
                'class' => 'btn btn-outline-danger btn-sm',
                'confirm' => __('Realmente deseja excluir este usuário # {0}?', $user->id)
            ]) ?>
        </span>

        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                AÇÕES
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                <?= $this->Html->link(__('LISTAR'), [
                    'controller' => 'users',
                    'action' => 'index'
                ], ['class' => 'dropdown-item']) ?>

                <?= $this->Html->link(__('EDITAR'), [
                    'controller' => 'users',
                    'action' => 'edit', $user->id
                ], ['class' => 'dropdown-item']) ?>

                <?= $this->Form->postlink(__('EXCLUIR'), [
                    'controller' => 'users',
                    'action' => 'delete', $user->id
                ], [
                    'class' => 'dropdown-item',
                    'confirm' => __('Realmente deseja excluir este usuário # {0}?', $user->id)
                ]) ?>
            </div>
        </div>
    </div>
</div>
<hr>

<dl class="row">
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($user->id) ?></dd>

    <dt class="col-sm-3">Nome</dt>
    <dd class="col-sm-9"><?= h($user->name) ?></dd>
    </dd>

    <dt class="col-sm-3">Sobrenome</dt>
    <dd class="col-sm-9">cesar@celke.com.br</dd>

    <dt class="col-sm-3">Usuário</dt>
    <dd class="col-sm-9"><?= h($user->username) ?></dd>

    <dt class="col-sm-3 text-truncate">Data de admissão</dt>
    <dd class="col-sm-9"><?= h($user->date_admission) ?></dd>

    <dt class="col-sm-3 text-truncate">Data do Cadastro</dt>
    <dd class="col-sm-9"><?= h($user->created) ?></dd>

    <dt class="col-sm-3 text-truncate">Data de modificação</dt>
    <dd class="col-sm-9"><?= h($user->modified) ?></dd>

</dl>
