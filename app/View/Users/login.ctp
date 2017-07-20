<div class="users form">
<br />
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Ingrese usuario y contraseña'); ?>
        </legend>
        <?php echo $this->Form->input('username', array('label' => array('text' => 'Usuario'), 'class' => 'form-control', 'div' => array('class' => 'form-group')));
        echo $this->Form->input('password', array('label' => array('text' => 'Contraseña'), 'class' => 'form-control', 'div' => array('class' => 'form-group')));
    ?>
    </fieldset>
<?php echo $this->Form->submit(__('Ingresar'), array('class' => 'btn btn-primary ')); ?>
</div>
