<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Short+Stack" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css"
    href = "<?= assets("css/settings_style.css") ?>">
  </head>
  <body>


    <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <h2 class="h3 mb-4 page-title">Settings</h2>
            <div class="my-4">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="<?= base_url("user/profile")?>" role="tab" aria-controls="home" aria-selected="false">Profile</a>
                    </li>
                </ul>
                <form method="POST" action="<?= base_url("")?>">
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                            <div class="avatar avatar-xl">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="..." class="avatar-img rounded-circle" />
                            </div>
                        </div>

                    <hr class="my-4" />
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputPassword4">Old Password*</label>
                                <input name="password"type="password" class="form-control" id="inputPassword5" />
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">New Password*</label>
                                <input name="newPassword" type="password" class="form-control" id="inputPassword5" />
                            </div>
                            <div class="form-group">
                                <label for="inputPassword6">Confirm Password*</label>
                                <input type="password" class="form-control" id="inputPassword6" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2">Password requirements</p>
                            <p class="small text-muted mb-2">To create a new password, you have to meet all of the following requirements:</p>
                            <ul class="small text-muted pl-4 mb-0">
                                <li>Minimum 8 character</li>
                                <li>At least one special character</li>
                                <li>At least one number</li>
                                <li>Can’t be the same as a previous password</li>
                            </ul>
                            <br/>
                            * Required
                        </div>
                    </div>
                    <button type="submit" id="savebtn" class="btn btn-primary">Save Change</button>
                </form>
                </div>
            </div>
        </div>
      </div>

  </body>
</html>
