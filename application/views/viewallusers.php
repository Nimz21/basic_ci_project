<?php $this->load->view('admindashboard')?>
<div class="col-sm-10 bg-white float-right p-3 mt-3">
<table class="table table responsive striped hover bordered">
<tr class="active">
<th>no</th>
<th>username</th>
<th>fullname</th>
<th>email</th>
<th>More Details</th>
<th>Approve</th>
<th>Reject</th>

</tr>
<?php 
$count=0;
foreach($users as $values)
{
    
$count++;

?>
<tr>
<td><?= $count?></td>
<td><?= $values['username']?></td>
<td><?= $values['fullname']?></td>
<td><?= $values['email']?></td>
<td><a class="btn btn-primary" href="<?= base_url().'admin/more/'.$values['id'].'/'.$values['username']?>">Details</a></td>
<td><a class="btn btn-success" href="<?= base_url().'admin/approve/'.$values['username']?>" onclick="alert('User Approved')">Approve</td>
<td><a class="btn btn-danger" href="<?= base_url().'admin/reject/'.$values['username']?>" onclick="alert('User Rejected')" >Reject</a></td>

</tr>
<?php
}
?>
</table>
</div>
</div>
<?php $this->load->view('foot/footer')?>