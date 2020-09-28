<?php $this->load->view('head/userdashboard')?>

<div class="col-sm-10 bg-white float-right p-3 mt-3">
 <form enctype="multipart/form-data" action="<?php echo base_url().'upanel/addbck'?>" method="post">
  <h1>Add details</h1>
  <input type="hidden" name="uname" value="<?= $names ?>"/>
  <div class="col-sm-12">
  <div class="row">
  <div class="col-sm-8 form-group">
  
  <label for="dob">Date of birth</label>
  <input type="date" class="form-control" name="dob" id="dob" placeholder="dob" required autofocus><br>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-8 form-group">
  <label for="address">Address</label>
  <textarea class="form-control" name="address" id="address" placeholder="address" ></textarea><br>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-8 form-group">
  <label for="file2">Id proof</label>
  <input type="file" name="file" id="file" placeholder="id proof" class="form-control"/><br>
  <input type="submit" class="btn btn-success"/>
  </div>
  </form>
</div>
</div>

<?php $this->load->view('foot/footer')?>
