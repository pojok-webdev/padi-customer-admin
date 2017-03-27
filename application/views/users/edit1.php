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
							<li class="active">Edit</li>
						</ul><!-- /.breadcrumb -->
					<div class="page-content">
						<?php $this->load->view("common/rightsidebox");?>
						<div class="row">
							<div class="col-xs-4">
                                <form class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label" for="form-field-1">Nama</label>
                                        <div class="controls">
                                            <input type="text" id="form-field-1" placeholder="Username" />
                                        </div>
                                        <label class="control-label" for="form-field-1">Email</label>
                                        <div class="controls">
                                            <input type="text" id="form-field-1" placeholder="Email" />
                                        </div>
                                    </div>
                                </form>
							</div><!-- /.col -->
							<div class="col-xs-4">
                                <form class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label" for="form-field-1">Nama</label>
                                        <div class="controls">
                                            <input type="text" id="form-field-1" placeholder="Username" />
                                        </div>
                                        <label class="control-label" for="form-field-1">Email</label>
                                        <div class="controls">
                                            <input type="text" id="form-field-1" placeholder="Email" />
                                        </div>
                                    </div>
                                </form>
							</div><!-- /.col -->
							<div class="col-xs-4">
                                <form class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label" for="form-field-1">Nama</label>
                                        <div class="controls">
                                            <input type="text" id="form-field-1" placeholder="Username" />
                                        </div>
                                        <label class="control-label" for="form-field-1">Email</label>
                                        <div class="controls">
                                            <input type="text" id="form-field-1" placeholder="Email" />
                                        </div>
                                    </div>
                                </form>
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
