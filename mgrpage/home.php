<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>欢迎首页</title>
	<link href="../css/common/common.css" rel="stylesheet" type="text/css">
	<script src="../js/common.js"></script>
	<style>
		#welpage{
			width:100%;
			height:100%;
		}
		#titlecontrol{
			display: block;
			margin:auto;
			text-align: center;
		}
	</style>
</head>

<body id="welpage">
	<?php
	error_reporting( E_ALL || ~E_NOTICE ); #显示除去 E_NOTICE 之外的所有错误信息

	#最终结果值反馈器
	function MSGfeedback( $fbString, $opMode = "printMode" ) {
		if ( $opMode === "echoMode" ) {
			echo $fbString;
		} else {
			print_r( $fbString );
		}
	}

	#最终结果值反馈器
	$SQLcontrolPoint = "";
	#数据库连接函数
	function SQLconnect( $opWay, $host = "" ) {
		if ( $opWay == "on" ) {
			if ( $host != "" ) {
				$GLOBALS[ 'SQLcontrolPoint' ] = mysqli_connect( $host, "store", "storeplmokn", "storemgr" ); # 开始建立MySQL数据库连接控制节点
				if ( !$GLOBALS[ 'SQLcontrolPoint' ] ) {
					MSGfeedback( "服务器无法连接" );
				}
			} else {
				MSGfeedback( "请传递数据库地址！" );
			}
		} elseif ( $opWay == "off" ) {
			if ( $GLOBALS[ 'SQLcontrolPoint' ] != "" ) {
				mysqli_close( $GLOBALS[ 'SQLcontrolPoint' ] );
			}
		} else {
			MSGfeedback( "指令错误", "echoMode" );
		}
	}
	
	function LoaderSettContent(){
		$loadset="select * from usermsg";
		$getsetData=mysqli_query($GLOBALS[ 'SQLcontrolPoint' ],$loadset);
		$fmtDatas=mysqli_fetch_object($getsetData);
		if($fmtDatas['welsay']!=""){
			
		}elseif($fmtDatas['backimg']!=""){
			
		}else{
			MSGfeedback('<div id="welpage"><div id="titlecontrol"><h1>欢迎进入管理系统</h1></div></div>');
		}
	}
	LoaderSettContent();
	?>

</body>

</html>