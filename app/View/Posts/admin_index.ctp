<h1>Administrador de Posts</h1>
<p><?php echo $this->Html->link("Agregar Post", array('action' => 'admin_add'), array('class' => 'btn btn-danger')); ?></p>
<table class="table table-striped">
    <tr>
        <th>Título</th>
        <th class="text-center">Acciones</th>
    </tr>

<?php foreach ($posts as $post): ?>
    <tr >
        <td class="col-lg-10">
            <?php echo $post['Post']['title'];?>
        </td>
        <td class="col-lg-2 text-center">
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', '/admin/edit/' . $post['Post']['id'], array('escape' => false));?>
            <?php echo $this->Form->postLink(
                '<span class="glyphicon glyphicon-remove text-danger"></span>',
                array('action' => 'admin_delete', $post['Post']['id']),
                array('confirm' => '¿Estás seguro que desea eliminar este post?', 'escape' => false)
            )?>
        </td>
    </tr>
<?php endforeach; ?>

</table>