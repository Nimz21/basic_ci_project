<?php $this->load->view('head/header')?>
  <div class="jumbotron text-dark text-center"><h1 class="h3 mb-3 font-weight-normal">Welcome to ci project</h1></div>
  <div class="row text-center" style="margin-left:500px;">
  <div class="col-sm-5">
  <form class="form-signin" action="<?= base_url().'login/check'?>" method="post">
  <input type="text" name="uname" id="un" class="form-control" placeholder="username" required autofocus><br>
  <input type="password" name="password" id="ps" class="form-control" placeholder="Password" required><br>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button><br>
 <a href="<?= base_url('login/user_reg')?>">Register</a>
  </div>
  </div>
  </div>
</form>
  </body>
</html>