<?php $this->load->view('head/header')?>
  <div class="jumbotron text-dark text-center"><h1 class="h3 mb-3 font-weight-normal">Admin Login</h1></div>
  <div class="row text-center" style="margin-left:500px;">
  <div class="col-sm-5">
  <form class="form-signin" action="<?= base_url().'admin/adminbck'?>" method="post">
  <input type="text" name="adname" id="un" class="form-control" placeholder="username" required autofocus><br>
  <input type="password" name="apswd" id="ps" class="form-control" placeholder="Password" required><br>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button><br>
 
  </div>
  </div>
  </div>
</form>
  </body>
</html>