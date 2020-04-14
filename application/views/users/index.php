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
                                        <?php foreach($users as $user):?>
                                        <tr data-id="<?= $user['id']?>">
                                            <td class="text-center"><img src="assets/images/ecommerce/1.png" width="48" alt="Product img"></td>
                                            <td><?= $user['userId']?></td>
                                            <td><?= $user['username']?></td>
                                            <td><?= $user['firstname']." " .$user['lastname']?></td>
                                            <td><a href="mailto:<?= $user['email']?>"><?= $user['email']?></a></td>
                                            <td><?= $user['gender']?></td>
                                            <td><?= $user['born']?></td>
                                            <td><?= $user['country']." ".$user['city']?></td>
                                            <td class="action">
                                            	<a href="<?= base_url('profile/'.$user["userId"])?>" class="btn btn-default waves-effect waves-float btn-sm waves-green" style="padding:5px 8px"><i class="zmdi zmdi-eye"></i></a>
                                            	<a href="<?= base_url("users/delete_user/".$user['userId'])?>" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
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
<script src="assets/plugins/bootstrap-notify/bootstrap-notify.js"></script> <!-- Bootstrap Notify Plugin Js -->
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/users.js"></script>
<script type="text/javascript">
    <?php if($this->session->has_userdata("delete_user")):?>
    <?php $delete_result = $this->session->userdata("delete_user");?>
    <?php if($delete_result['success']) : ?>
        $.notify({
            // options
            message: "<?= $delete_result['msg']?>"
        },{
            // settings
            type: 'success'
        });
    <?php else:?>
        $.notify({
            // options
            message: "<?= $delete_result['msg']?>"
        },{
            // settings
            type: 'danger'
        });
    <?php endif;?>
    <?php endif;?> 
</script>
</body>
</html>