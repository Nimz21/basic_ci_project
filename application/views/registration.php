<?php $this->load->view('head/header')?>
<div class="container-fluid bg-warning">
<h3 class="text-center pt-5">User Registration</h3>
 <div class="row mt-5 p-5" style="margin-left:520px;">
 <form  action="<?= base_url().'login/reg_bck'?>" method="post">
 <div class="col-sm-12 ">
 <div class="row">
<div class="form-grp text-center">
<input type="text" class="form-control" name="username" placeholder="Enter your username" required/>
</label><br>
<input type="text" class="form-control" name="fullname" placeholder="Enter your full name" required/>
<br>
<input type="password" class="form-control" name="password" placeholder="Enter your password"required/>
<br>
<input type="email" class="form-control" name="email" placeholder="Enter your email"required/>
<br>
<input type="submit" class="btn btn-success" value="Register"/>
</div>
</div>
</div>
</form>
</div>
</div>
 <?php $this->load->view('foot/footer')?>
