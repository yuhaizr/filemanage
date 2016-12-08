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
					

	<div class="panel-body widget-shadow">

		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
		<div class="form-title">
			<h4>档案数据详情 :</h4>
		</div>
		<div class="form-body col-sm-8">
			
				 <div class='row'>
					 <div class="form-group "> 
						 <label for="name" class="col-sm-3 control-label">档案模板名称</label>
						 <div class="col-sm-6"> 
						 	<select disabled="disabled" required="required" id="file_temp_id" name='file_temp_id'  style="width:100%;">
						 		<option value="" />请选择你要添加的模板
						 		<?php if(is_array($info['fileTempList'])): foreach($info['fileTempList'] as $key=>$vo): ?><option <?php if($vo['id'] == $info['file_temp_id'] ): ?>selected="delected"<?php endif; ?> value="<?php echo ($vo["id"]); ?>" /><?php echo ($vo["title"]); endforeach; endif; ?>
						 	</select> 
						 </div> 
					 </div>
				 </div>

				 <hr>
<!-- 				 <div class='row'>
				 	<label for="name" class="col-sm-3 control-label">数据录入</label>
				 	<div class="col-sm-1">
				 		
				 			<a type="submit" id="addRow" class="btn btn-default">添加列</a> 
				 	</div>
				 </div> -->
		
				 <form class="form-horizontal" action="/filemanage/index.php/Home/File/save" method="GET">
				 <input type="hidden" name='id' value="<?php echo ($info['id']); ?>">
				  <input type="hidden" name='file_temp_id' value="<?php echo ($info['file_temp_id']); ?>">
				 
				 <div id="fieldList">
				  <?php if(is_array($tempinfo["name"])): foreach($tempinfo["name"] as $key=>$vo): ?><div class='row feild-item'>
				 		<div class=' col-sm-offset-2  col-sm-2'>
				 			<input type="text" disabled="disabled" required="required" class="form-control keyinput" value="<?php echo ($vo); ?>"   placeholder="列名">
				 		</div>
				 		<div class="col-sm-6">
				 			<div class="input-group">
				 			<input disabled="disabled" type="text" required="required" class="form-control nameinput" id="<?php echo ($key); ?>" name='<?php echo ($key); ?>' placeholder="" value="<?php echo ($info['value'][$key]); ?>">
				 			<span style="display: none;" class="input-group-addon remove-row"><i class="glyphicon glyphicon-remove"></i></span>
                            </div>                    
				 		</div>
				 	</div><?php endforeach; endif; ?>		 					 
				 </div>
	<!-- 			 <div class='row'>
					 <div class="col-sm-offset-4">
					 <button  id='save_button' type="submit" class="btn btn-default">保存</button> 
					 </div>
				 </div> -->
				 
				 </form>
		</div>
		 
		</div>
	</div>	
	
	<div id="add_div" style="display: none;">
	<div class='row feild-item' >
	 	<div class=' col-sm-offset-2  col-sm-2'>
 			<input type="text" required="required" class="form-control keyinput" name='key[]' placeholder="列名">
 		</div>
 		<div class=" col-sm-6">
 			<div class="input-group">
 			<input type="text" required="required" class="form-control nameinput" name='name[]' placeholder="列名">
 			<span class="input-group-addon remove-row"><i class="glyphicon glyphicon-remove"></i></span>
            </div>                    
 		</div>

 	</div>
 	</div>
		

<script type="text/javascript">
$(document).ready(function () {
    //$("#registrationForm").bootstrapValidator();
    $("#file_temp_id").select2();

});

$("#addRow").click(function(){

	var add_div = $("#add_div").html();
	$("#fieldList").append(add_div);
});

$("#file_temp_id").change(function(){
	$file_temp_id = $('#file_temp_id option:selected').val();
	if($file_temp_id){
		location.href = "/filemanage/index.php/Home/File/add?type=menu&file_temp_id="+$file_temp_id;
	}
});

$("#fieldList").on('click','.remove-row',function(){
	if(!confirm("您确定删除?")){
		return false;
	} 
	//$(this).parent().parent().parent().attr('style',"display: none;");
	
	console.log($(".remove-row").length);
	if($(".remove-row").length <= 2){
		alert('最后一个列名不能删除');
		return false;
	}
	
	$(this).parent().parent().parent().remove();


});

/* $("#fieldList").on('keyup','.nameinput',function(){
	var val = $(this).val();
	if(val){
		$flag = true;
		var index = $('.nameinput').index(this);
		$parent = $(this);
		$('.nameinput').each(function($k,$v){
			
				if($k != index ){
					
				var v = $($v).val();
				console.log(val +"=="+v);
				if(v && (v == val)){
					$flag = false;
					$("#save_button").attr("disabled","disabled");
					$(this).attr('style','border-color:red;');
					$parent.attr('style','border-color:red;');
				}else{
					$(this).attr('style','border-color:#ccc;');
					$parent.attr('style','border-color:#ccc;');
				}
			}
		});
		if($flag){
			$("#save_button").removeAttr("disabled");
		
		}
	}
	
}); */



$("#fieldList").on('keyup','.keyinput',function(){
	var val = $(this).val();
	if(val){
		$flag = true;
		var index = $('.keyinput').index(this);
		$parent = $(this);
		$('.keyinput').each(function($k,$v){
			
				if($k != index ){
					
				var v = $($v).val();
				if(v && (v == val)){
					$parent.val(val.substring(0,val.length-1));
					alert("键名标志不能重复");
				}
				
			}
		});

	}
	
});


</script>


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

</body>
</html>