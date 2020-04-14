<?php $this->load->view("inc/sidebar"); ?>
 		<section class="content">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Resource</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                            <li class="breadcrumb-item active">Resource</li>
                            <li class="breadcrumb-item active">Basic Data</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">                
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
        	 <div class="container-fluid">
            	<div class="row clear-fix">
            		<div class="col-xs-6 col-sm-4">
            			<label class="form-control-label">Body Types</label>
            			<div class="table-resposive">
            				<table class="table table-bordered table-striped table-hover dataTable">
            					<thead>
            						<th>#</th>
            						<th>Type</th>
            						<th>Action</th>
            					</thead>
            					<tbody>
            						<?php foreach($bodyTypes as $key => $one):?>
            						<tr>
            							<td><?= ($key + 1)?></td>
            							<td><?= $one['title']?></td>
            							<td class="pt-1 pb-1">
            								<form action="/resource/delete_bodytype/<?= $one['id']?>">
	            								<button class="btn btn-sm btn-danger waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></button>
	            							</form>
            							</td>
            						</tr>
            						<?php endforeach;?>
            					</tbody>
            				</table>
            			</div>
            			<form action="/resource/insert_bodytype">
	            			<div class="input-group mb-3">
							  	<input type="text" class="form-control" placeholder="Enter new body type" aria-label="Enter new body type" aria-describedby="basic-addon2" required name="bodytype">
							  	<div class="input-group-append">
							    	<button class="btn btn-outline-secondary" >Add</button>
							  	</div>
							</div>
						</form>
            		</div>
            		<div class="col-xs-6 col-sm-4">
            			<label class="form-control-label">Ethnicity</label>
            			<div class="table-resposive">
            				<table class="table table-bordered table-striped table-hover dataTable">
            					<thead>
            						<th>#</th>
            						<th>Type</th>
            						<th>Action</th>
            					</thead>
            					<tbody>
            						<?php foreach($ethnicity as $key => $one):?>
            						<tr>
            							<td><?= ($key + 1) ?></td>
            							<td><?= $one['title']?></td>
            							<td class="pt-1 pb-1">
            								<form action="/resource/delete_ethnicity/<?= $one['id']?>">
	            								<button class="btn btn-sm btn-danger waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></button>
	            							</form>
            							</td>
            						</tr>
            						<?php endforeach;?>
            					</tbody>
            				</table>
            			</div>
            			<form action="/resource/insert_ethnicity">
	            			<div class="input-group mb-3">
							  	<input type="text" class="form-control" placeholder="Enter new ethnicity" aria-label="Enter new body type" aria-describedby="basic-addon2" required name="input">
							  	<div class="input-group-append">
							    	<button class="btn btn-outline-secondary">Add</button>
							  	</div>
							</div>
						</form>
            		</div>
            		<div class="col-xs-6 col-sm-4">
            			<label class="form-control-label">Religion</label>
            			<div class="table-resposive">
            				<table class="table table-bordered table-striped table-hover dataTable">
            					<thead>
            						<th>#</th>
            						<th>Type</th>
            						<th>Action</th>
            					</thead>
            					<tbody>
            						<?php foreach($religion as $key => $one):?>
            						<tr>
            							<td><?= ($key + 1)?></td>
            							<td><?= $one['title']?></td>
            							<td class="pt-1 pb-1">
            								<form action="/resource/delete_religion/<?= $one['id']?>">
	            								<button class="btn btn-sm btn-danger waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></button>
	            							</form>
            							</td>
            						</tr>
            						<?php endforeach;?>
            					</tbody>
            				</table>
            			</div>
            			<form action="/resource/insert_religion">
	            			<div class="input-group mb-3">
							  	<input type="text" class="form-control" placeholder="Enter new religion" aria-label="Enter new body type" aria-describedby="basic-addon2" required name="input">
							  	<div class="input-group-append">
							    	<button class="btn btn-outline-secondary">Add</button>
							  	</div>
							</div>
						</form>
            		</div>
            		<div class="col-xs-6 col-sm-4">
            			<label class="form-control-label">Orientation</label>
            			<div class="table-resposive">
            				<table class="table table-bordered table-striped table-hover dataTable">
            					<thead>
            						<th>#</th>
            						<th>Type</th>
            						<th>Action</th>
            					</thead>
            					<tbody>
            						<?php foreach($orientations as $key => $one):?>
            						<tr>
            							<td><?= ($key + 1)?></td>
            							<td><?= $one['title']?></td>
            							<td class="pt-1 pb-1">
            								<form action="/resource/delete_orientation/<?= $one['id']?>">
	            								<button class="btn btn-sm btn-danger waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></button>
	            							</form>
            							</td>
            						</tr>
            						<?php endforeach;?>
            					</tbody>
            				</table>
            			</div>
            			<form action="/resource/insert_orientation">
	            			<div class="input-group mb-3">
							  	<input type="text" class="form-control" placeholder="Enter new orientation" aria-label="Enter new body type" aria-describedby="basic-addon2" required name="input">
							  	<div class="input-group-append">
							    	<button class="btn btn-outline-secondary" >Add</button>
							  	</div>
							</div>
						</form>
            		</div>
            		<div class="col-xs-6 col-sm-4">
            			<label class="form-control-label">Status</label>
            			<div class="table-resposive">
            				<table class="table table-bordered table-striped table-hover dataTable">
            					<thead>
            						<th>#</th>
            						<th>Type</th>
            						<th>Action</th>
            					</thead>
            					<tbody>
            						<?php foreach($status as $key=>$one):?>
            						<tr>
            							<td><?=($key + 1)?></td>
            							<td><?= $one['title']?></td>
            							<td class="pt-1 pb-1">
            								<form action="/resource/delete_status/<?= $one['id']?>">
	            								<button class="btn btn-sm btn-danger waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></button>
	            							</form>
            							</td>
            						</tr>
            						<?php endforeach;?>
            					</tbody>
            				</table>
            			</div>
            			<form action="/resource/insert_status">
	            			<div class="input-group mb-3">
							  	<input type="text" class="form-control" placeholder="Enter new status" aria-label="Enter new body type" aria-describedby="basic-addon2" required name="input">
							  	<div class="input-group-append">
							    	<button class="btn btn-outline-secondary">Add</button>
							  	</div>
							</div>
						</form>
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

</body>
</html>