<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" type = "text/css" href = "<?= assets("css/profile_style.css") ?>">
    <title></title>
  </head>
  <body>

    <div class="container">
        <div class="main-body">
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4><?= htmlentities($row["first_name"])?> <?= htmlentities($row["first_name"])?> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inputss col-md-8">
                  <form method="POST" action="<?= base_url('user/change'); ?>">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">First Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input name="input" placeholder="First Name" value="<?= htmlentities($row["first_name"])?>"  disabled/>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Last Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input name="input" placeholder="Last Name" value="<?= htmlentities($row["last_name"])?>" disabled/>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <input type="email" name="input" placeholder="Email" value="<?= htmlentities($row["email"])?>"  disabled />
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text"name="mobile" placeholder="Mobile" value="<?= htmlentities($row["mobile"])?>"/>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input name="address" type="text"  placeholder="Address" value="<?= htmlentities($row["address"])?>"/>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Job</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input name="job" type="text"  placeholder="Job" value="<?= htmlentities($row["job"])?>"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button id="savebutton" type="submit" class="btn btn-primary">Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?= assets("js/profile.js")  ?>"> </script>

  </body>
</html>
