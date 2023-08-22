<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel = "stylesheet" type = "text/css"
   href = "<?= assets("css/profile_style.css") ?>">
<link rel = "stylesheet" type = "text/css"
      href = "<?= assets("css/note_style.css")?>"/>
<link rel = "stylesheet" type = "text/css"
      href = "<?= assets("css/about_style.css") ?>">
<link rel = "stylesheet" type = "text/css"
      href = "<?= assets("css/settings_style.css") ?>">
      <?php if ($this->extraCSS) : ?>
   <?php foreach ($this->extraCSS as $key => $item) : ?>
     <link href="<?= assets($item) ?>" rel="stylesheet">
   <?php endforeach; ?>
 <?php endif; ?>
        <head>
                <title>Here we go again</title>
        </head>
        <body>


                <div class="container">
                    <div class="main-body">
                        <?php
                        if(Auth::isActive()) {
                          ?>
                          <form method="POST" action="<?= base_url("logout")?>">
                          <nav aria-label="breadcrumb" class="main-breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="note">Note</a></li>
                              <li class="breadcrumb-item"><a href="about">About</a></li>
                              <li class="breadcrumb-item" aria-current="page"><a href="profile">User Profile </a></li>
                              <li class="breadcrumb-item"><a href="settings">Settings</a></li>
                              <button class="logout" type="submit">Log out</button>
                            </ol>
                            </form>

                          </nav>
                        <?php
                      }else{
                        ?>
                        <div class="container">
                          <div class="main-body">
                              <nav aria-label="breadcrumb" class="main-breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="note">Note</a></li>
                                </ol>
                              </nav>
                            </div>
                          </div>
                        <?php
                        }
                        ?>
                        </div>
                      </div>
