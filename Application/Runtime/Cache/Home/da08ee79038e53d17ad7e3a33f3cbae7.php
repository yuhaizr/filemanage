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
					

<div class="row">
	<div class="col-lg-12 col-sm-6 col-xs-12">
		<div class="widget flat radius-bordered">
			<div class="widget-header bg-themeprimary">
                    <span class="widget-caption">授权管理</span>
            </div>
            <div class="widget-body">
				<div class="widget-main ">
                        <div class="tabbable">
                            <ul class="nav nav-tabs tabs-flat" id="myTab11">
                                <li id="tab1">
                                    <a data-toggle="tab" href="#home11">
                                        	模块授权
                                    </a>
                                </li>
                                <li id="tab3">
                                    <a data-toggle="tab" href="#action11">
                                        	控制器授权
                                    </a>
                                </li>
                                <li id="tab2">
                                    <a data-toggle="tab" href="#profile11">
                                        	操作授权
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content tabs-flat">
                                <div id="home11" class="tab-pane in active">
                                	<h6>当前用户组</h6>
                                	<form action="/filemanage/index.php/Home/Role/setRoleMedule" method="post" id="rolemedule">
	                                	<select id="role" style="width:100%;" onchange="dochangerole()" name="rolegroup">
		                                 	<?php if(is_array($rolelist)): foreach($rolelist as $key=>$value): ?><option value="<?php echo ($value["id"]); ?>" <?php if($value["roleselect"] == 1): ?>selected<?php endif; ?> /><?php echo ($value["name"]); endforeach; endif; ?>
	                            		</select>
	                           			<div class="col-lg-15 col-sm-15 col-xs-15">
				                       		<div class="widget flat radius-bordered">
				                              <h5>Checkboxes</h5>
				                              <?php if(is_array($moduleList)): foreach($moduleList as $key=>$value): ?><div class="col-lg-4 col-sm-4 col-xs-4">
				                                      <div class="checkbox">
				                                          <label>
				                                              <input type="checkbox" name="groupId[]" value="<?php echo ($key); ?>" <?php if($value["selected"] == 1): ?>checked="checked"<?php endif; ?>>
				                                              <span class="text"><?php echo ($value["title"]); ?></span>
				                                          </label>
				                                      </div>
											      </div><?php endforeach; endif; ?>
	                               			</div>
	                               		</div>
                                 	</form>
                            		<button type="submit" class="btn btn-blue" onclick="setrolemodule()">Submit</button>
                        		</div>
                                <div id="action11" class="tab-pane">
              							 <h6>当前用户组</h6>
	                                   <form action="/filemanage/index.php/Home/Role/setActionList" method="post" id="rolemedule">
		                                   <select id="roleb" style="width:100%;" onchange="dochangeroleb()" name="groupId">
				                           <?php if(is_array($rolelist)): foreach($rolelist as $key=>$value): ?><option value="<?php echo ($value["id"]); ?>" <?php if($value["roleselect"] == 1): ?>selected<?php endif; ?> /><?php echo ($value["name"]); endforeach; endif; ?>
		                             	   </select>
				                              <h6>当前模块</h6>
				                              <select id="actionb" style="width:100%;"  name="actionId" onchange="getActionb()" >
				                              		<option value="0">请选择</option>
				                                   <?php if(is_array($moduleList)): foreach($moduleList as $key=>$value): if($value["selected"] == 1): ?><option value="<?php echo ($key); ?>" <?php if($key == $actionid): ?>selected<?php endif; ?>><?php echo ($value["title"]); ?></option><?php endif; endforeach; endif; ?>
				                              </select>
				          
				                              <div class="col-lg-15 col-sm-15 col-xs-15">
				                       		  	  <div class="widget flat radius-bordered">
				                              	  <h5>Checkboxes</h5>
					                              <?php if(is_array($actionlist)): foreach($actionlist as $key=>$value): ?><div class="col-lg-4 col-sm-4 col-xs-4">
							                                 <div class="checkbox">
							                                     <label>
							                                         <input type="checkbox" name="actionList[]" value="<?php echo ($key); ?>" <?php if($value["selected"] == 1): ?>checked<?php endif; ?>>
							                                         <span class="text"><?php echo ($value["title"]); ?></span>
							                                     </label>
							                                 </div>
						       						     </div><?php endforeach; endif; ?>
					     					  	  </div>
					     					  </div>
					     					  <input type='hidden' name="action" value="<?php echo ($action); ?>"/>
				     						  <button type="submit" class="btn btn-blue" onclick="setrolemodule()">Submit</button>
	     						      	</form>
                        		</div>
                                <div id="profile11" class="tab-pane">
	                                   <h6>当前用户组</h6>
	                                   <form action="/filemanage/index.php/Home/Role/setRoleAction" method="post" id="rolemedule">
		                                   <select id="rolea" style="width:100%;" onchange="dochangerolea()" name="groupId">
				                           <?php if(is_array($rolelist)): foreach($rolelist as $key=>$value): ?><option value="<?php echo ($value["id"]); ?>" <?php if($value["roleselect"] == 1): ?>selected<?php endif; ?> /><?php echo ($value["name"]); endforeach; endif; ?>
		                             	   </select>
				                              <h6>当前模块</h6>
				                              <select id="action" style="width:100%;"  name="actionId" onchange="getAction()" >
				                              		<option value="0">请选择</option>
				                                   <?php if(is_array($moduleList)): foreach($moduleList as $key=>$value): if($value["selected"] == 1): ?><option value="<?php echo ($key); ?>" <?php if($key == $actionid): ?>selected<?php endif; ?>><?php echo ($value["title"]); ?></option><?php endif; endforeach; endif; ?>
				                              </select>
				                              <h6>当前控制器</h6>
				                              <select id="function" style="width:100%;"  name="funId" onchange="getFunc()" >
				                              		<option value="0">请选择</option>
				                                   <?php if(is_array($myActionlist)): foreach($myActionlist as $key=>$value): ?><option value="<?php echo ($key); ?>" <?php if($key == $funid): ?>selected<?php endif; ?>><?php echo ($value["title"]); ?></option><?php endforeach; endif; ?>
				                              </select>
				                              <div class="col-lg-15 col-sm-15 col-xs-15">
				                       		  	  <div class="widget flat radius-bordered">
				                              	  <h5>控制器列表</h5>
					                              <?php if(is_array($funList)): foreach($funList as $key=>$value): ?><div class="col-lg-4 col-sm-4 col-xs-4">
							                                 <div class="checkbox">
							                                     <label>
							                                         <input type="checkbox" name="funcaction[]" value="<?php echo ($key); ?>" <?php if($value["selected"] == 1): ?>checked<?php endif; ?>>
							                                         <span class="text"><?php echo ($value["title"]); ?></span>
							                                     </label>
							                                 </div>
						       						     </div><?php endforeach; endif; ?>
					     					  	  </div>
					     					  </div>
					     					  <input type='hidden' name="action" value="<?php echo ($action); ?>"/>
				     						  <button type="submit" class="btn btn-blue" onclick="setrolemodule()">Submit</button>
	     						      	</form>
     						 	</div>
						</div>
                   	</div>
                 </div>         
			</div>
		</div>
	</div>
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
	   
   
<!--Basic Scripts-->
<script src="/filemanage/Public/js/jquery-2.0.3.min.js"></script>
<script src="/filemanage/Public/js/bootstrap.min.js"></script>

<!--Beyond Scripts-->
<script src="/filemanage/Public/js/beyond.min.js"></script>
 <!--Page Related Scripts-->
<script src="/filemanage/Public/js/validation/bootstrapValidator.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    //$("#registrationForm").bootstrapValidator();
    var action = "<?php echo ($action); ?>";
    if(action == '1'){
    	$("#home11").attr('class','tab-pane in active');
    	$("#profile11").attr('class','tab-pane');
    	$("#action11").attr('class','tab-pane');
    	$("#tab1").attr('class','active');
    }else if(action == '2') {
    	$("#home11").attr('class','tab-pane');
    	$("#action11").attr('class','tab-pane');
    	$("#profile11").attr('class','tab-pane in active');
    	$("#tab2").attr('class','active');
    }else{
    	$("#home11").attr('class','tab-pane');
    	$("#profile11").attr('class','tab-pane');
    	$("#action11").attr('class','tab-pane in active');
    	$("#tab3").attr('class','active');    	
    }
});
function dochangerole(){
	var val  = $("#role").find("option:selected").val();
	window.location.href=__URL+"/roleAuth?action=1&id="+val;
}
function dochangerolea(){
  var val  = $("#rolea").find("option:selected").val();
  window.location.href=__URL+"/roleAuth?action=2&id="+val;
}
function dochangeroleb(){
  var val  = $("#roleb").find("option:selected").val();
  window.location.href=__URL+"/roleAuth?action=3&id="+val;
}
function setrolemodule(){
 $("#rolemedule").submit();
}
function getAction(){
  var val  = $("#rolea").find("option:selected").val();
  var val2 = $("#action").find("option:selected").val();
  window.location.href=__URL+"/roleAuth?action=2&id="+val+"&actionId="+val2;
}
function getActionb(){
  var val  = $("#roleb").find("option:selected").val();
  var val2 = $("#actionb").find("option:selected").val();
  window.location.href=__URL+"/roleAuth?action=3&id="+val+"&actionId="+val2;
}
function getFunc(){
	var val  = $("#rolea").find("option:selected").val();
	  var val2 = $("#action").find("option:selected").val();
	  var val3 = $("#function").find("option:selected").val();
	  window.location.href=__URL+"/roleAuth?action=2&id="+val+"&actionId="+val2+"&funId="+val3;
}
</script>

</body>
</html>