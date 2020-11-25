<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Usuário</h2>
    </div>
    <a href="listar.html">
        <div class="p-2">
            <?= $this->Html->link(__('Listar'), [
                'controller' => 'users',
                'action' => 'index'
            ], ['class' => 'btn btn-outline-info btn-sm']) ?>
        </div>
    </a>
</div>
<hr>
<?= $this->Flash->render()?> <!--Exibe msg de erro -->

<!--Inicia o form -->
<?= $this->Form->create($user) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Nome</label>
        <?= $this->Form->control('name', [
            'class' => 'form-control',
            'placeholder' => 'Nome', 'label' => false
        ]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Sobrenome</label>
        <?= $this->Form->control('last_name', [
            'class' => 'form-control',
            'placeholder' => 'Sobrenome', 'label' => false
        ]) ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Usuário</label>
        <?= $this->Form->control('username', [
            'class' => 'form-control',
            'placeholder' => 'Login', 'label' => false
        ]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Senha</label>
        <?= $this->Form->control('password', [
            'class' => 'form-control',
            'placeholder' => 'A Senha deve conter no mínimo 6 carecteres', 'label' => false
        ]) ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Admissão</label>
        <?= $this->Form->control('date_admission', [
            'class' => 'form-control','label' => false
        ]) ?>
    </div>
</div>

<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(__('SALVAR'), ['class' => 'btn btn-success']) ?>

<!--Fim form -->