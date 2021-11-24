<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SET2020 | My Profile</title>

    <!-- CSS Libraries -->
    <?php require_once("../backend/layout/partials/css.php") ?>
    <!-- /.CSS Libraries -->

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- Preloader -->
    <?php require_once("../backend/layout/partials/preloader.php") ?>
    <!-- /.Preloader -->

    <!-- Navbar -->
    <?php require_once("../backend/layout/navbar.php") ?>
    <!-- /.navbar -->

    <!-- Sidebar -->
    <?php require_once("../backend/layout/sidebar.php") ?>
    <!-- /.Sidebar -->

    <!-- Content Wrapper. Contains Page Contents -->
    <div class="content-wrapper">

        <!-- Content Header (Page Header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">My Profile</h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <!-- Container Fluid -->
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                      <div class="card-body box-profile">
                        <div class="text-center">
                          <img class="profile-user-img img-fluid img-circle"
                               src="../theme/backend/AdminLTE/dist/img/shahlal.jpg"
                               alt="Profile Photo">
                        </div>

                        <h3 class="profile-username text-center">Shahlal Hossain</h3>

                        <p class="text-muted text-center">Project Manager</p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                        <p class="text-muted">Khilkhet, Dhaka, Bangladesh</p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>

                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header p-2">
                        <ul class="nav nav-pills">
                          <li class="nav-item"><a class="nav-link active" href="#details" data-toggle="tab">Details</a></li>
                          <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity Logs</a></li>
                        </ul>
                      </div><!-- /.card-header -->
                      <div class="card-body">
                        <div class="tab-content">

                            <div class="active tab-pane" id="details">
                              
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="activity">
                              <!-- The Activity Logs -->
                              <div class="timeline timeline-inverse">
                                <!-- timeline time label -->
                                <div class="time-label">
                                  <span class="bg-danger">
                                    10 Feb. 2014
                                  </span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                  <i class="fas fa-envelope bg-primary"></i>

                                  <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                    <div class="timeline-body">
                                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                      weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                      jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                      quora plaxo ideeli hulu weebly balihoo...
                                    </div>
                                    <div class="timeline-footer">
                                      <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                      <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                  </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div>
                                  <i class="fas fa-user bg-info"></i>

                                  <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                    <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                                    </h3>
                                  </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div>
                                  <i class="fas fa-comments bg-warning"></i>

                                  <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                    <div class="timeline-body">
                                      Take me to your leader!
                                      Switzerland is small and neutral!
                                      We are more like Germany, ambitious and misunderstood!
                                    </div>
                                    <div class="timeline-footer">
                                      <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                    </div>
                                  </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <div class="time-label">
                                  <span class="bg-success">
                                    3 Jan. 2014
                                  </span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                  <i class="fas fa-camera bg-purple"></i>

                                  <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                    <div class="timeline-body">
                                      <img src="https://placehold.it/150x100" alt="...">
                                      <img src="https://placehold.it/150x100" alt="...">
                                      <img src="https://placehold.it/150x100" alt="...">
                                      <img src="https://placehold.it/150x100" alt="...">
                                    </div>
                                  </div>
                                </div>
                                <!-- END timeline item -->
                                <div>
                                  <i class="far fa-clock bg-gray"></i>
                                </div>
                              </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                      </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.Container-fluid -->
        </section>
        <!-- /.Main content -->
    </div>
    <!-- /.Content Wrapper -->

    <!-- Footer -->
    <?php require_once("../backend/layout/footer.php") ?>
    <!-- /.Footer -->
</div>
<!-- ./wrapper -->

<!-- JS Libraries -->
<?php require_once("../backend/layout/partials/js.php") ?>
<!-- /. JS Libraries -->

</body>
</html>
