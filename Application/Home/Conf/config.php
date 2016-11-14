<?php
return array(
	//'配置项'=>'配置值'
    'LOG_RECORD'=>true,
    'LOG_LEVEL' => 'EMERG,ALERT,CRIT,ERR',	
    //助教、讲师、副教授、教授
    'TEACHER_LEVEL' => array(
        '100' =>   '助教' ,
        '200' =>   '讲师' ,
        '300' =>   '副教授' ,
        '400' =>   '教授' ,
    )
);