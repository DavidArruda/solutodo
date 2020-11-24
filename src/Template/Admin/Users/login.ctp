<?= $this->Form->create('post', ['class' => 'form-signin']) ?>

<h1 class="h3 mb-3 font-weight-normal">Área restrita</h1>

<div class="form-group">
    <label>Usuário</label>
    <?= $this->Form->input('username', [
        'class' => 'form-control',
        'placeholder' => 'Digite seu usuário', 'label' => false
    ]) ?>
</div>

<div class="form-group">
    <label>Senha</label>
    <?= $this->Form->input('password', [
        'class' => 'form-control',
        'placeholder' => 'Digite sua senha', 'label' => false
    ]) ?>
</div>

<?= $this->Form->button(__('ENTRAR'), ['class' => 'btn btn-lg btn-primary btn-block']); ?>
<?= $this->Form->end() ?>