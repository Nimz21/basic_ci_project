<?php $this->load->view('head/userdashboard')?>

<div class="col-sm-10 bg-white float-right p-3 mt-3">
 <form enctype="multipart/form-data" action="<?php echo base_url().'upanel/editbck/'.$val[0]['uid']?>" method="post">
  <h1>Edit details</h1>
  
  <div class="col-sm-12">
  <div class="row">
  <div class="col-sm-8 form-group">
  <input type="hidden" name="uid" value="<?= $val[0]['uid']?>"/>
  <label for="dob">Date of birth</label>
  <input type="date" class="form-control" value="<?= $val[0]['dob']?>" name="dob" id="dob" required autofocus><br>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-8 form-group">
  <label for="address">Address</label>
  <textarea class="form-control" name="address" id="address"><?= $val[0]['address']?></textarea><br>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-8 form-group">
  <label for="file2">Id proof</label>
  <img src="<?= base_url().$val[0]['idproof']?>" class="img-fluid" width="50px;" height="50px;"/>
  <input type="file" name="file" id="file" class="form-control"/><br>
  <input type="submit" class="btn btn-success"/>
  </div>
  </form>
</div>
</div>
<?php $this->load->view('foot/footer')?>
