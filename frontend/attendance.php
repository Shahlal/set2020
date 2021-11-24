<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Set2020 | Attendance</title>

    <!-- Bootstrap as External CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <!-- Bootstrap and other JS as External JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <!-- Internal CSS -->
    <style>
        /* Fixes dropdown menus placed on the right side */
        .ml-auto {
            left: auto !important;
            right: 0px;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php">
                <img src="http://set2020.com.bd/images/siteconfigs/1621148396.png" alt="SET2020" height="90px" width="90px">
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link btn btn-outline-success" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-success" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link btn btn-success" href="admission.php">Admission</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-success" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-success" href="courses.php">Courses</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-success" href="class-schedule.php">Class Schedule</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-success" href="notices.php">Notice Board</a></li>
                <!-- <li class="nav-item"><a class="nav-link btn btn-outline-success" href="gallary.php">Image Gallary</a></li> -->
                <li class="nav-item"><a class="nav-link btn btn-outline-success" href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <br><br>

    <div class="container pt-3 text-center">
        <h4>নারীর স্বনির্ভরতায় ই-প্রশিক্ষণ</h4>
        <p>Online Application for Self Reliant E-Training (SET) Programme for Women</p>
        <p class="text-success"><strong>Online Attendance</strong></p>
        <hr>
    </div>

    <div class="container pt-3 container-box">
        <form action="" method="POST">
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label text-right">Participant Name (অংশ গ্রহনকারীর নাম):</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control input-bg" id="name" name="name" value="" placeholder="Your Full Name (আপনার পুরো নাম)" required="required" size="50">
                </div>
            </div>

            <div class="form-group row">
                <label for="mobile" class="col-sm-4 col-form-label text-right">Mobile/Phone (মোবাইল নাম্বার):</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control input-bg" id="mobile" name="mobile" value="" placeholder="Mobile/Phone (মোবাইল নাম্বার)" required="required" size="15">
                </div>
            </div>

            <div class="form-group row">
                <label for="trade" class="col-sm-4 col-form-label text-right">Trade Name (কোন ট্রেডের প্রশিক্ষণার্থী):</label>
                <div class="col-sm-7">
                    <select class="form-control input-bg" id="trade" name="trade">
                        <option value=""> ট্রেড সিলেক্ট করুন</option>
                        <option value="1"> Microsoft Office</option>
                        <option value="3"> Graphic Design</option>
                        <option value="4"> Computer Hardware</option>
                        <option value="5"> Software Development</option>
                        <option value="6"> Search Engine Optimization</option>
                        <option value="7"> Digital Marketing</option>
                        <option value="8"> গহনা তৈরি</option>
                        <option value="9"> ক্রিস্টাল শোপিস তৈরি</option>
                        <option value="10"> বিউটিফিকেশন</option>
                        <option value="11"> নকশী কাথা ও এম্ব্রয়ডারি</option>
                        <option value="12"> পোল্ট্রি ও ডেইরি</option>
                        <option value="13"> ফ্যাশন ডিজাইন</option>
                        <option value="14"> খাদ্য প্রক্রিয়াজাতকরণ ও সংরক্ষণ</option>
                        <option value="15"> মাশরুম ও মধু চাষ</option>
                        <option value="16"> হর্টিকালচার ও নার্সারি</option>
                        <option value="17"> ইলেক্ট্রনিক প্রোডাক্ট সার্ভিসিং</option>
                        <option value="18"> কুকিং এন্ড ক্যাটারিং</option>
                        <option value="19"> হাউজকিপিং এন্ড কেয়ারগিভিং</option>
                        <option value="21"> হিউমেন রিসোর্স ম্যানেজমেন্ট</option>
                        <option value="22"> সাপ্লাই চেইন মেনেজমেন্ট</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-11 text-right">
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                    <input type="reset" class="btn btn-primary">
                    <input type="submit" class="btn btn-success" name="save" value="Submit">
                </div>
            </div>

        </form>
        <hr>
    </div>

    <br><br><br>

    <!-- Footer -->
    <footer class="text-center" style="background-color: lightgray;">
        <!-- Grid container -->
        <div class="container p-4">

            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary m-1" style="background-color: #3b5998" href="##########" role="button">
                    <i class="bi bi-facebook"></i>
                </a>

                <!-- Twitter -->
                <a class="btn btn-primary m-1" style="background-color: #55acee" href="##########" role="button">
                    <span class="bi bi-twitter"></span>
                </a>

                <!-- Google -->
                <a class="btn btn-primary m-1" style="background-color: #dd4b39" href="##########" role="button">
                    <i class="bi bi-google"></i>
                </a>

                <!-- Instagram -->
                <a class="btn btn-primary m-1" style="background-color: #ac2bac" href="##########" role="button">
                    <i class="bi bi-instagram"></i>
                </a>

                <!-- Linkedin -->
                <a class="btn btn-primary m-1" style="background-color: #0082ca" href="##########" role="button">
                    <i class="bi bi-linkedin"></i>
                </a>
                <!-- Github -->
                <a class="btn btn-primary m-1" style="background-color: #333333" href="##########" role="button">
                    <i class="bi bi-github"></i>
                </a>
                <!-- Youtube -->
                <a class="btn btn-primary m-1" style="background-color: #fa1e33" href="##########" role="button">
                    <i class="bi bi-youtube"></i>
                </a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Want to get Newsletter</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" class="form-control" name="news_letter_email" placeholder="Email Address">
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary mb-4">
                                Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->

            <hr>

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    সেপ্টেম্বর ২০২০ থেকে সেন্টার ফর পলিসি অ্যান্ড ডেভেলপমেন্ট রিসার্চ (সি পি ডি আর) এর নিজস্ব অর্থায়নে এবং Looptech Company Limited এর কারিগরি সহায়তায় ৭ টি সেশান সম্পূর্ণ করার পর ৫ এপ্রিল ২০২১ থেকে ২০টি ট্রেডে সম্পূর্ণ সরকারী অনুদানে মহিলা ও শিশু বিষয়ক মন্ত্রণালয়ের আওতাধীন নারীর স্বনির্ভরতায় ই-প্রশিক্ষণ কর্মসূচীটি পরিচালনা করা হচ্ছে।
                </p>
            </section>
            <!-- Section: Text -->

            <hr>

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row text-left">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="##########" class="text-dark">About Us</a>
                            </li>
                            <li>
                                <a href="##########" class="text-dark">Contact Us</a>
                            </li>
                            <li>
                                <a href="##########" class="text-dark">Our Services</a>
                            </li>
                            <li>
                                <a href="##########" class="text-dark">Our Courses</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="##########" class="text-dark">News & Events</a>
                            </li>
                            <li>
                                <a href="##########" class="text-dark">Customer Support</a>
                            </li>
                            <li>
                                <a href="##########" class="text-dark">Privacy & Policy</a>
                            </li>
                            <li>
                                <a href="##########" class="text-dark">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="##########" class="text-dark">Your Feedback</a>
                            </li>
                            <li>
                                <a href="##########" class="text-dark">FAQ</a>
                            </li>
                            <li>
                                <a href="##########" class="text-dark">Blog Post</a>
                            </li>
                            <li>
                                <a href="##########" class="text-dark">Career</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="##########" class="text-dark">Our Team</a>
                            </li>
                            <li>
                                <a href="##########" class="text-dark">Link 2</a>
                            </li>
                            <li>
                                <a href="##########" class="text-dark">Link 3</a>
                            </li>
                            <li>
                                <a href="##########" class="text-dark">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
       <span class="copyright">
              © Copyright  -
              <a href="./">
                  নারীর স্বনির্ভরতায় ই-প্রশিক্ষণ কর্মসূচি  | Self Reliant E-Training (SET) Programme for Women
              </a>
              <br>
              Designed & Developed By:
              <a href="./">
                  Shahlal Hossain & Web Development Batch 15
              </a>
          </span>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

</body>
</html>
