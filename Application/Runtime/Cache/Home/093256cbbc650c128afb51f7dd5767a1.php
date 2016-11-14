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
				<div class="logo" style="width: 309px;height: 75px;background: #5053BA;font-size: 26px;">
					<span>
						网络工程专业建设档案管理系统

					</span>
				</div>

				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
		
				<!--notification menu end -->
				<div class="profile_details">		
					<ul style="margin-left: 20px;">
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><!-- <img src="/filemanage/assets/images/a.png" alt=""> --> </span> 
									<div class="user-name">
										<p><?php echo ($_SESSION['typename']); ?></p>
										<span><?php echo ($_SESSION['uname']); ?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="/filemanage/index.php/Home/Login/logout"><i class="fa fa-sign-out"></i> 注销</a> </li>
								<li> <a href="/filemanage/index.php/Home/Index/modPassword"><i class="fa fa-sign-out"></i> 密码修改</a> </li>
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
					
	<div class='tables'>

		<div class="bs-example widget-shadow" data-example-id="bordered-table"> 
			<h4>教师设置列表</h4>
			<form action="/filemanage/index.php/Home/TeacherCourse/showList" method="GET">
			
				<div class='row'>

					 <div class="col-sm-3"> 
					    <select  id='course_id_select'name='course_id' >
					    	<option value=''> 请选择课程</option>
					    	<?php if(is_array($courseList)): foreach($courseList as $key=>$vo): ?><option <?php if( $info['course_id'] == $vo["id"] ): ?>selected="selected"<?php endif; ?> value='<?php echo ($vo["id"]); ?>'><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
					    	
					 	</select> 
					 </div> 
					 
					  <div class="col-sm-1"> 
                            <div class="input-group">
                                     <input  class="form-control yearView"  name='year' id='year' value="<?php echo ($info['year']); ?>" type="text" >
                                     <span class="input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                     </span>
                            </div>						 
						 
						 	 
					</div>
					
					<div class="col-sm-1"> 
  					 			
				 		<select id='term' name='term' >
				 			<option value="">请选择学期</option>
				 			<option <?php if( $info['term'] == '1' ): ?>selected="selected"<?php endif; ?> value='1'>上学期</option>
				 			<option <?php if( $info['term'] == '2' ): ?>selected="selected"<?php endif; ?> value='2'>下学期</option>
				 		</select>
				 	 
					</div>  
					
					 <div class="col-sm-3"> 
					    <select   id='class_id_select' name='class_id' >
					    	<option value=''> 请选择班级</option>
					    	<?php if(is_array($classList)): foreach($classList as $key=>$vo): ?><option <?php if( $info['class_id'] == $vo["id"] ): ?>selected="selected"<?php endif; ?> value='<?php echo ($vo["id"]); ?>'><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
					    	
					 	</select> 
					 </div> 					
					 
					<div class='col-sm-2'>
						<input type="submit" id="addRow" class="btn btn-default" value="搜索"> 
					</div>	
	
				</div>
			</form>	
			<div class='row'>
          <table class="table table-striped table-hover table-bordered" id="editabledatatable">
	                    <thead>
	                        <tr role="row">
	                        	<th>序号</th>
	                            <th>创建时间</th>
	                            <th>课程名称</th>
	                            <th>年份</th>
	                            <th>学期</th>
	                            <th>班级</th>
	                            <th>老师</th>
	            
	       	                    <th style="min-width: 150px">操作</th>
	              
	                        </tr>
	                    </thead>
	
	                    <tbody id="tapeListTable">
	                    	<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
		                            <td><?php echo ($key+1); ?></td>
		                            <td><?php echo ($vo["ctime"]); ?></td>
		                            <td><?php echo ($vo["course_id"]); ?></td>
		                            <td><?php echo ($vo["year"]); ?></td>
		                            <td><?php echo ($vo["term"]); ?></td>
		                            <td><?php echo ($vo["class_id"]); ?></td>
		                            <td><?php echo ($vo["teacher_id"]); ?></td>
		          
		              
		                			<td>
		                		
              						<a <?php if($my_detail_btn != 1): ?>style="display: none;"<?php endif; ?> href="/filemanage/index.php/Home/TeacherCourse/detail?type=menu&id=<?php echo ($vo["id"]); ?>" data-bb-handler="confirm" type="button"  class=" my_detail_btn btn btn-primary">详情</a>
           							<a <?php if($my_modify_btn != 1): ?>style="display: none;"<?php endif; ?> href="/filemanage/index.php/Home/TeacherCourse/modify?type=menu&id=<?php echo ($vo["id"]); ?>" data-bb-handler="confirm" type="button"  class=" my_modify_btn btn btn-primary">修改</a>
           							<a <?php if($my_del_btn != 1): ?>style="display: none;"<?php endif; ?> href="/filemanage/index.php/Home/TeacherCourse/del?type=menu&id=<?php echo ($vo["id"]); ?>" data-bb-handler="confirm" type="button"    class=" my_del_btn btn btn-danger  delete">删除</a>
                			
		                			</td>
		          
		             
		                         
		                        </tr><?php endforeach; endif; ?>                        
	                    </tbody>
	                </table>
		    </div>
		    <div class='row'>
			    <div class="col-sm-6 col-sm-offset-5">
	  				<ul class="pagination" id="pageUl">
					<?php echo ($page); ?>
					</ul>
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
	   
   
<script src="/filemanage/Public/js/select2/select2.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    //$("#registrationForm").bootstrapValidator();
    $("#file_temp_id").select2();

});
</script>

</body>
</html>