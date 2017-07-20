<h1 class="text-center">Visita Chile</h1>

<table class="table">
<?php foreach ($posts as $post): ?>
	<tr>
    	<td class="col-lg-12">
	        <?php echo 
	            $this->Html->link(
	                $post['Post']['title'], 
	                array('action' => 'view', $post['Post']['id']),
	                array('class' => 'post')
	            );
	        ?>
	    </td>
    </tr>
<?php endforeach; ?>
</table>