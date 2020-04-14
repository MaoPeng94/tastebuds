
<link rel="stylesheet" href="/assets/plugins/light-gallery/css/lightgallery.css">
<?php $this->load->view("inc/sidebar"); ?>
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Profile</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Jibe</a></li>
                        <li class="breadcrumb-item"><a href="/users">Users</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a href="<?= base_url("users")?>" class="btn btn-info btn-icon float-right"><i class="zmdi zmdi-arrow-left"></i></a>
                </div>
            </div>
        </div> 
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card mcard_3">
                        <div class="body">
                            <a href="profile.html"><img src="/assets/images/profile_av.jpg" class="rounded-circle shadow " alt="profile-image"></a>
                            <h4 class="m-t-10"><?= $user['firstname']." ".$user['lastname']?></h4>                            
                            <div class="row">
                                <div class="col-12">
                                    <p class="text-muted"><?= $user['country']. " ".$user['city']?></p>
                                </div>
                                <div class="col-4">                                    
                                    <small>Following</small>
                                    <h5>852</h5>
                                </div>
                                <div class="col-4">                                    
                                    <small>Followers</small>
                                    <h5>13k</h5>
                                </div>
                                <div class="col-4">                                    
                                    <small>Post</small>
                                    <h5>234</h5>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <small class="text-muted">Email address: </small>
                            <p><?= $user['email']?></p>
                            <hr>
                            <small class="text-muted">Phone: </small>
                            <p>+ 202-555-0191</p>
                            <hr>
                            <small class="text-muted">Birthday: </small>
                            <p><?= $user['born']?></p>
                            <hr>
                            <small class="text-muted">Gender: </small>
                            <p><?= ucfirst($user['gender'])?></p>
                            <hr>
                            <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                        </div>
                    </div>                    
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Media</strong> Gallery</h2>
                        </div>
                        <div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="/assets/images/image-gallery/1.jpg"> <img class="img-fluid img-thumbnail" src="/assets/images/image-gallery/1.jpg" alt=""> </a> </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="/assets/images/image-gallery/2.jpg" > <img class="img-fluid img-thumbnail" src="/assets/images/image-gallery/2.jpg" alt=""> </a> </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="/assets/images/image-gallery/3.jpg" > <img class="img-fluid img-thumbnail" src="/assets/images/image-gallery/3.jpg" alt=""> </a> </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="/assets/images/image-gallery/4.jpg" > <img class="img-fluid img-thumbnail" src="/assets/images/image-gallery/4.jpg" alt=""> </a> </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="/assets/images/image-gallery/5.jpg" > <img class="img-fluid img-thumbnail" src="/assets/images/image-gallery/5.jpg" alt=""> </a> </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-b-30"> <a href="/assets/images/image-gallery/6.jpg" > <img class="img-fluid img-thumbnail" src="/assets/images/image-gallery/6.jpg" alt=""> </a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Artist</strong> List</h2>
                        </div>
                        <div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 m-b-30"> <a href="/assets/images/image-gallery/1.jpg"> <img class="img-fluid img-thumbnail" src="/assets/images/image-gallery/1.jpg" alt=""> </a> </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 m-b-30"> <a href="/assets/images/image-gallery/1.jpg"> <img class="img-fluid img-thumbnail" src="/assets/images/image-gallery/1.jpg" alt=""> </a> </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 m-b-30"> <a href="/assets/images/image-gallery/1.jpg"> <img class="img-fluid img-thumbnail" src="/assets/images/image-gallery/1.jpg" alt=""> </a> </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 m-b-30"> <a href="/assets/images/image-gallery/1.jpg"> <img class="img-fluid img-thumbnail" src="/assets/images/image-gallery/1.jpg" alt=""> </a> </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 m-b-30"> <a href="/assets/images/image-gallery/1.jpg"> <img class="img-fluid img-thumbnail" src="/assets/images/image-gallery/1.jpg" alt=""> </a> </div>
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 m-b-30"> <a href="/assets/images/image-gallery/1.jpg"> <img class="img-fluid img-thumbnail" src="/assets/images/image-gallery/1.jpg" alt=""> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="/assets/plugins/light-gallery/js/lightgallery-all.min.js"></script> <!-- Light Gallery Plugin Js --> 
<script src="/assets/bundles/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts --> 

<script src="/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="/assets/js/pages/medias/image-gallery.js"></script>
<script src="/assets/js/pages/calendar/calendar.js"></script>
</body>
</html>