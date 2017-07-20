<h1>Agregar Post</h1>
<?php
    echo $this->Form->create('Post', array(
    	'url' => array('controller' => 'posts', 'action' => 'admin_add'), 
    	array('class' => 'form-horizontal')
    ));
    echo $this->Form->input('title', array('label' => array('text' => 'Título'), 'div' => array('class' => 'form-group'), 'class' => 'form-control'));
    echo $this->Form->input('body', array('rows' => '7', 'label' => array('text' => 'Descripción'), 'div' => array('class' => 'form-group'), 'class' => 'form-control'));
    echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary'));
?>