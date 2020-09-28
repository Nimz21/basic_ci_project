<?php $this->load->view('admindashboard')?>
<div class="col-sm-10 bg-white float-right p-3 mt-3">
<table class="table table responsive striped hover bordered">
<tr class="active">
<th>No</th>
<th>Date of Birth</th>
<th>Address</th>
<th>ID proof</th>
<th>Back to Main</th>
</tr>
<?php 
$count=0;
foreach($more as $values)
{
    
$count++;

?>
<tr>
<td><?= $count?></td>
<td><?= $values['dob']?></td>
<td><?= $values['address']?></td>
<td><img class="img-fluid" src="<?= base_url().$values['idproof']?>" width="50px" height="50px"/></td>
<td><a class="btn btn-primary" href="<?= base_url().'admin/view_users/'.$values['id']?>">Back</a></td>


</tr>
<?php
}
?>
</table>
</div>
</div>
<?php $this->load->view('foot/footer')?>