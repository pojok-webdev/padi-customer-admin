<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $this->load->view("themes/ace/head");?>
	</head>
	<?php $this->load->view("users/modals");?>
	<body class="no-skin">
		<?php $this->load->view("common/navbar");?>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			<?php $this->load->view("common/leftsidebar")?>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="/">Home</a>
							</li>
							<li>
								<a href="/users">Pengguna</a>
							</li>
							<li class="active">Daftar</li>
						</ul><!-- /.breadcrumb -->
					<div class="page-content">
						<?php $this->load->view("common/rightsidebox");?>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<!-- div.table-responsive -->
										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center" width="5%">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th class="center" width="20%">Nama</th>
														<th class="center" width="25%">Role</th>
														<th class="hidden-480 center" width="20%">Branch</th>

														<th class="center" width="10%">
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															Update
														</th>
														<th class="hidden-480 center" width="10%">Status</th>

														<th class="center" width="10%"></th>
													</tr>
												</thead>

												<tbody>
													<?php foreach($users as $user){?>
													<tr>
														<td class="center">
															<label class="pos-rel myid">
																<?php echo $user->id;?>
															</label>
														</td>

														<td class="username">
															<?php echo $user->username;?>
														</td>
														<td><?php echo $user->roles;?></td>
														<td class="hidden-480"><?php echo $user->branches;?></td>
														<td><?php echo $user->email;?></td>

														<td class="hidden-480 text-center">
															<span class="label label-sm label-warning"><?php echo $user->status;?></span>
														</td>

														<td class="text-center">
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-lock bigger-110 btnsetpassword"></i>
																</a>

																<a class="green" href="/users/edit/<?php echo $user->id;?>">
																	<i class="ace-icon fa fa-pencil bigger-110"></i>
																</a>

																<a class="red" href="#">
																	<i class="ace-icon fa fa-trash-o bigger-110"></i>
																</a>
																<a class="red" href="#">
																	<i class="ace-icon fa fa-envelope-o bigger-110"></i>
																</a>
															</div>
 
															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-envelope-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
													<?php }?>

												</tbody>
											</table>
										</div>
									</div>
								</div>


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">PadiNET</span>
							App &copy; 2011-2016
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
		<?php $this->load->view("themes/ace/scripts")?>
	</body>
</html>
