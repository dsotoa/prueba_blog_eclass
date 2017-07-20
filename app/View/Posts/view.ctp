<h1 class="text-center"><?php echo $post['Post']['title']?></h1>

<table class="table">
	<tr>
    	<td class="col-lg-9">
	        <p><?php echo $post['Post']['body']?></p>
	    </td>
	    <td class="col-lg-3">
	    	<p><small>Fecha: <?php echo $post['Post']['created']?></small></p>
	    </td>
    </tr>
</table>