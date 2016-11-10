
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Dark Admin</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/dark-theme-admin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/dark-theme-admin/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/dark-theme-admin/css/local.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/padi/css/padi.css" />

    <script type="text/javascript" src="<?php echo base_url()?>plugins/datatables-1.10.12/js/jquery.js"></script>
    <!--<script type="text/javascript" src="<?php echo base_url()?>plugins/dark-theme-admin/js/jquery.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url()?>plugins/dark-theme-admin/bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/shieldui/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/shieldui/dark-bootstrap/all.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/datatables-1.10.12/css/dataTables.foundation.css" />
    <link rel="stylesheet" type="text/css" <!--href="https://cdn.datatables.net/v/ju-1.11.4/jq-2.2.3/dt-1.10.12/af-2.1.2/b-1.2.2/datatables.min.css"/>-->

    <script type="text/javascript" src="<?php echo base_url()?>plugins/shieldui/shieldui-all.min.js"></script>
    <!--<script type="text/javascript" src="<?php echo base_url()?>plugins/prepbootstrap/gridData.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url()?>plugins/canvasjs/js/canvasjs.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>plugins/datatables-1.10.12/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>plugins/datatables-1.10.12/js/dataTables.jqueryui.js"></script>
    <!--<script type="text/javascript" src="https://cdn.datatables.net/v/ju-1.11.4/jq-2.2.3/dt-1.10.12/af-2.1.2/b-1.2.2/datatables.min.js"></script>-->

    <script type="text/javascript" src="<?php echo base_url()?>plugins/page/users/index.js"></script>
	<script>
		$(document).ready(function(){
			$("#tUsers").DataTable();
            $("#tUsers").on("click",".btnedit",function(){
                console.log("Edit");
            });
		});
        
	</script>    
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Back to Admin</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.html"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="portfolio.html"><i class="fa fa-tasks"></i> Portfolio</a></li>
                    <li><a href="blog.html"><i class="fa fa-globe"></i> Blog</a></li>
                    <li><a href="signup.html"><i class="fa fa-list-ol"></i> SignUp</a></li>
                    <li><a href="register.html"><i class="fa fa-font"></i> Register</a></li>
                    <li><a href="timeline.html"><i class="fa fa-font"></i> Timeline</a></li>
                    <li><a href="forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
                    <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                    <li><a href="bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
                    <li class="selected"><a href="bootstrap-grid.html"><i class="fa fa-table"></i > Bootstrap Grid</a></li>            
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">2 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

       <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table id="tUsers" class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Role</th>
                                        <th class="text-center">Cabang</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users as $user){?>
                                    <tr>
                                        <td><?php echo $user->id;?></td>
                                        <td class="text-left"><?php echo $user->username;?></td>
                                        <td class="text-left"><?php echo $user->email;?></td>
                                        <td class="text-left"><?php echo $user->roles;?></td>
                                        <td class="text-left"><?php echo $user->branches;?></td>
                                        <td><button class="btn btn-primary btnedit">Edit</button></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div>
    </div>

</body>
</html>
