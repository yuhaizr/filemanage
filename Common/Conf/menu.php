<?php
return array(
    //1 管理员,2老师,3学生
	array(
	    'title' => '首页',
	    'link' => '/Home/Index',
	    'icon' => 'fa fa-home nav_icon',
	    'childs' => array(
	        array(
	            'title' => '首页',
	            'link' => '/Home/Index/index',
	            'access' => '1,2,3'
	        )
	    )
	        
	),
    array(
        'title' => '班级管理',
        'link'  => 'Home/ClassManage',
        'icon' => 'fa fa-th-large nav_icon',
        'childs' => array(
            array(
                'title' => '添加班级',
                'link' => '/Home/ClassManage/add?type=menu',
                'access' => '1'
            ),            
            array(
                'title' => '班级列表',
                'link' => '/Home/ClassManage/showList',
                'access' => '1,2,3'
            ), 
            
        )
    ),
    array(
        'title' => '课程管理',
        'link' => '/Home/Course',
        'icon' => 'fa fa-table nav_icon',
        'childs' => array(
            array(
                'title' => '添加课程',
                'link' => '/Home/Course/add?type=menu',
                'access' => '1'
            ),
            array(
                'title' => '课程列表',
                'link' => '/Home/Course/showList',
                'access' => '1,2,3'
            ),
            
            array(
                'title' => '成绩录入',
                'link' => '/Home/Score/add?type=menu',
                'access' => '1,2'
            ),
            array(
                'title' => '成绩列表',
                'link' => '/Home/Score/showList?type=menu',
                'access' => '1,2,3'
            ),
            array(
                'title' => '教师课程设置',
                'link' => '/Home/TeacherCourse/add?type=menu',
                'access' => '1'
            ),
            array(
                'title' => '教师课程列表',
                'link' => '/Home/TeacherCourse/showList',
                'access' => '1,2,3'
            ),
        )
    ),
    array(
        'title' => '档案管理',
        'link' => '/Home/File',
        'icon' => 'fa fa-book nav_icon',
        'childs' => array(
            array(
                'title' => '管理员信息添加',
                'link' => '/Home/Admin/add?type=menu',
                'access' => '1'
            ),
            array(
                'title' => '管理员信息列表',
                'link' => '/Home/Admin/showList',
                'access' => '1'
            ),
            array(
                'title' => '学生信息添加',
                'link' => '/Home/Student/add?type=menu',
                'access' => '1,2'
            ),
            array(
                'title' => '学生信息列表',
                'link' => '/Home/Student/showList',
                'access' => '1,2,3'
            ),            
            array(
                'title' => '教师信息添加',
                'link' => '/Home/Teacher/add?type=menu',
                'access' => '1'
            ),
            array(
                'title' => '教师信息列表',
                'link' => '/Home/Teacher/showList',
                'access' => '1,2,3'
            ),  
            array(
                'title' => '添加档案模板信息',
                'link' => '/Home/FileTemp/add?type=menu',
                'access' => '1,2'
            ),
            array(
                'title' => '档案模板列表信息',
                'link' => '/Home/FileTemp/showList',
                'access' => '1,2'
            ),
            array(
                'title' => '添加专业档案数据',
                'link' => '/Home/File/add?type=menu',
                'access' => '1,2'
            ),
            array(
                'title' => '专业档案数据列表',
                'link' => '/Home/File/showList',
                'access' => '1,2'
            ),
        )
    ),
    array(
        'title' => '统计分析',
        'link' => '/Home/Count',
        'icon' => 'fa fa-bar-chart nav_icon',
        'childs' => array(
            array(
                'title' => '学生成绩波动分析',
                'link' => '/Home/Count/changeCount',
                'access' => '1,2,3'
            ),
            array(
                'title' => '学生成绩排名',
                'link' => '/Home/Count/rankCount',
                'access' => '1,2,3'
            ),            
            
            )
        )

		
)
?>