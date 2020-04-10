<?php $this->load->view("inc/sidebar"); ?>
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<style type="text/css">
	#user_list td{
		vertical-align: middle;
	}

	#user_list td.action a{
		background-color:white;
		color: black;
	}
	
</style>
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>User Accounts</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item">User Accuont</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable" id="user_list">
                                    <thead>
                                        <tr>
                                        	<th>Photo</th>
                                        	<th>User ID</th>
                                        	<th>User Name</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Birthday</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><img src="assets/images/ecommerce/1.png" width="48" alt="Product img"></td>
                                            <td>User ID</td>
                                            <td>samcheng</td>
                                            <td>Sam Cheng</td>
                                            <td><a href="mailto:samcheng955@outlook.com">samcheng955@outlook.com</a></td>
                                            <td>Male</td>
                                            <td>2011/04/25</td>
                                            <td>China, Shenyang</td>
                                            <td class="action">
                                            	<a href="<?= base_url('profile/user1000000')?>" class="btn btn-default waves-effect waves-float btn-sm waves-green" style="padding:5px 8px"><i class="zmdi zmdi-eye"></i></a>
                                            	<a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td class="text-center"><img src="assets/images/ecommerce/1.png" width="48" alt="Product img"></td>
                                            <td>User ID</td>
                                            <td>samcheng</td>
                                            <td>Sam Cheng</td>
                                            <td><a href="mailto:samcheng955@outlook.com">samcheng955@outlook.com</a></td>
                                            <td>Male</td>
                                            <td>2011/04/25</td>
                                            <td>China, Shenyang</td>
                                            <td class="action">
                                            	<a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green" style="padding:5px 8px"><i class="zmdi zmdi-eye"></i></a>
                                            	<a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/users.js"></script>
</body>
</html>