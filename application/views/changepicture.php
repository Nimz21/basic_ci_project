<?php $this->load->view('head/userdashboard')?>
<div class="col-sm-10 bg-white float-right p-3 mt-3">
 <form enctype="multipart/form-data" action="<?php echo base_url().'upanel/changebck/'.$pic[0]['uid']?>" method="post">
  <h1>Change profile picture</h1>
  <input type="hidden" value="<?= $pic[0]['uid']?>" name="id"/>
  <div class="row">
  <div class="col-sm-8 form-group">
  <label for="file2">Photo</label>
  <img src="<?= base_url().$pic[0]['profile_pic']?>" class="img-fluid" width="100px;" height="100px;"/>
  <input type="file" name="filetwo" id="file"  class="form-control"/><br>
  <input type="submit" class="btn btn-success"/>
  </div>
  </form>
  </div>
  <?php $this->load->view('foot/footer')?>