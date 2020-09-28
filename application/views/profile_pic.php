<?php $this->load->view('head/userdashboard')?>
<div class="col-sm-10 bg-white float-right p-3 mt-3">
 <form enctype="multipart/form-data" action="<?php echo base_url().'upanel/profilebck/'.$name?>" method="post">
  <h1>Add profile pic</h1>
  <input type="hidden" name="id" value="<?= $name ?>"/>
  <div class="row">
  <div class="col-sm-8 form-group">
  <label for="file2">Photo</label>
  <input type="file" name="filetwo" id="file" class="form-control"/><br>
  <input type="submit" class="btn btn-success"/>
  </div>
  </form>
  </div>
  <?php $this->load->view('foot/footer')?>