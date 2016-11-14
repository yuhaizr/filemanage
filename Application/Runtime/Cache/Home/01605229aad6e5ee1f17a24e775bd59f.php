<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Blank Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="/filemanage/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/filemanage/assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="/filemanage/assets/css/font-awesome.css" rel="stylesheet"> 
<link id="beyond-link" href="/filemanage/Public/css/beyond.min.css" rel="stylesheet" />
<!-- //font-awesome icons -->
 <!-- js-->
<script src="/filemanage/assets/js/jquery-1.11.1.min.js"></script>
<script src="/filemanage/assets/js/modernizr.custom.js"></script>

<!--animate-->
<link href="/filemanage/assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="/filemanage/assets/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="/filemanage/assets/js/metisMenu.min.js"></script>
<script src="/filemanage/assets/js/custom.js"></script>
<link href="/filemanage/assets/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">

						<?php if(is_array($menu)): foreach($menu as $key=>$value): ?><li>
                        	  <a href= "#" <?php if($value["link"] == $NOW_MENU): ?>class="active"<?php endif; ?> >
	                            <i class="<?php echo ($value["icon"]); ?>"></i>
	                             <?php echo ($value["title"]); ?> 
	                            <span class="fa arrow"></span>
                        	</a>
                       
                        	
                    
                        	<ul class="nav nav-second-level collapse">
                        		<?php if(is_array($value["childs"])): foreach($value["childs"] as $key=>$v): ?><li    >
                        				<?php if(empty($v["childs"])): ?><a href="/filemanage/index.php<?php echo ($v["link"]); ?>" <?php if($v["link"] == $SECOND_NOW_MENU): ?>class='active'<?php endif; ?> >
			                                	<i class="<?php echo ($v["icon"]); ?>"></i>
			                                    <?php echo ($v["title"]); ?>
			                          
			                                </a> 
		                               	<?php else: ?>
		                               		<a href="#" <?php if($v["link"] == $SECOND_NOW_MENU): ?>class='active'<?php endif; ?> >
		                                       	<i class="<?php echo ($v["icon"]); ?>"></i>
			                                    <?php echo ($v["title"]); ?>
			                              		<span class="fa arrow"></span>
				                            </a> 
				                            <ul class="nav nav-second-level collapse">
				                                <?php if(is_array($v["childs"])): foreach($v["childs"] as $key=>$cv): ?><li>
						                                	  <a href="/filemanage/index.php<?php echo ($cv["link"]); ?>" >
							                                        <i class="<?php echo ($cv["icon"]); ?>"></i>
			                                   						 <?php echo ($cv["title"]); ?>
						                              		  </a>
					                                	</li><?php endforeach; endif; ?> 
				                            </ul><?php endif; ?>
		                            </li><?php endforeach; endif; ?>
                        	</ul>
                    	</li><?php endforeach; endif; ?>
						
					
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush" style="display: none;"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo" style="width: 309px;">
					<a href="index.html">
						<h1>NOVUS</h1>
						<span>AdminPanel</span>
					</a>
				</div>

				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
		
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="/filemanage/assets/images/a.png" alt=""> </span> 
									<div class="user-name">
										<p>Wikolia</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper" style="padding:0 0 0 0 ;margin-top: 76px;min-height: 600px;margin-left:310px;">
			<div class="main-page">
					

<div class='panel-body widget-shadow'>



<ul id="myTab" class="nav nav-tabs">
   <li class="active">
		 <a href="#home" data-toggle="tab">权限列表</a>
   </li>
   <li>
		<a href="javascript:;" onclick="add()">添加权限</a>
	</li>
</ul>
<div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="home">
		<table class="table table-striped table-bordered table-hover table-condensed">
			<tr>
				<th>权限名</th>
				<th>权限</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
					<td><?php echo ($v['_name']); ?></td>
					<td><?php echo ($v['name']); ?></td>
					<td>
						<a href="javascript:;" ruleId="<?php echo ($v['id']); ?>" onclick="add_child(this)">添加子权限</a> |
						<a href="javascript:;" ruleId="<?php echo ($v['id']); ?>" ruleName="<?php echo ($v['name']); ?>" ruleTitle="<?php echo ($v['title']); ?>" onclick="edit(this)">修改</a> |
						<a href="javascript:if(confirm('确定删除？'))location='<?php echo U('Admin/Rule/delete',array('id'=>$v['id']));?>'">删除</a>
					</td>
				</tr><?php endforeach; endif; ?>
		</table>
   </div>
</div>

<!-- 添加菜单模态框开始 -->
<div class="modal fade" id="bjy-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		 <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					添加权限
				</h4>
			</div>
			<div class="modal-body">
				<form id="bjy-form" class="form-inline" action="<?php echo U('Admin/Rule/add');?>" method="post">
					<input type="hidden" name="pid" value="0">
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th width="12%">权限名：</th>
							<td>
								<input class="form-control" type="text" name="title">
							</td>
						</tr>
						<tr>
							<th>权限：</th>
							<td>
								<input class="form-control" type="text" name="name"> 输入模块/控制器/方法即可 例如 Admin/Rule/index
							</td>
						</tr>
						<tr>
							<th></th>
							<td>
								<input class="btn btn-success" type="submit" value="添加">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- 添加菜单模态框结束 -->

<!-- 修改菜单模态框开始 -->
<div class="modal fade" id="bjy-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		 <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					修改权限
				</h4>
			</div>
			<div class="modal-body">
				<form id="bjy-form" class="form-inline" action="<?php echo U('Admin/Rule/edit');?>" method="post">
					<input type="hidden" name="id">
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th width="12%">权限名：</th>
							<td>
								<input class="form-control" type="text" name="title">
							</td>
						</tr>
						<tr>
							<th>权限：</th>
							<td>
								<input class="form-control" type="text" name="name"> 输入模块/控制器/方法即可 例如 Admin/Rule/index
							</td>
						</tr>
						<tr>
							<th></th>
							<td>
								<input class="btn btn-success" type="submit" value="修改">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- 修改菜单模态框结束 -->
<bootstrapjs />
<script>
// 添加菜单
function add(){
	$("input[name='title'],input[name='name']").val('');
	$("input[name='pid']").val(0);
	$('#bjy-add').modal('show');
}

// 添加子菜单
function add_child(obj){
	var ruleId=$(obj).attr('ruleId');
	$("input[name='pid']").val(ruleId);
	$("input[name='title']").val('');
	$("input[name='name']").val('');
	$('#bjy-add').modal('show');
}

// 修改菜单
function edit(obj){
	var ruleId=$(obj).attr('ruleId');
	var ruletitle=$(obj).attr('ruletitle');
	var ruleName=$(obj).attr('ruleName');
	$("input[name='id']").val(ruleId);
	$("input[name='title']").val(ruletitle);
	$("input[name='name']").val(ruleName);
	$('#bjy-edit').modal('show');
}
</script>



</div>

			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="/filemanage/assets/js/classie.js"></script>
		<style type="text/css">
			.tables{
				padding: 15px;
			}
			select{
				width: 100% !important 
			}
			.select2-container{
				width: 100%;
			}
		</style>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="/filemanage/assets/js/jquery.nicescroll.js"></script>
	<script src="/filemanage/assets/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="/filemanage/assets/js/bootstrap.js"> </script>
   
   <script src="/filemanage/Public/js/select2/select2.js"></script>
   
   <link href="/filemanage/Public/css/bootstrap-datetimepicker.css" rel="stylesheet" />

<!--Basic Scripts-->



<!--Beyond Scripts-->
<script src="/filemanage/Public/js/select2/select2.js"></script>
<script src="/filemanage/Public/js/datetime/bootstrap-timepicker.js"></script>  


<script src="/filemanage/Public/js/datetime/bootstrap-datetimepicker.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
	    //$("#registrationForm").bootstrapValidator();
	    
		$('.yearView').datetimepicker({
			autoclose: true,
			startView:4,minView:4,
	        lang:"ch",           
	        format:"yyyy",      
	        timepicker:false,  
	    
	        minDate: 0,   
	  
	        });
		
		
		$('.yearView').datetimepicker('setEndDate',(new Date()).getFullYear());
	});


	$(function(){
	
	$("select").select2();
	});
	</script>
	   
   



</body>
</html>