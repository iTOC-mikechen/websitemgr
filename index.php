<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>艾提欧斯软件分享、交易管理平台</title>
	<link href="css/index.css" type="text/css" rel="stylesheet">
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
	<script src="js/common.js" type="text/javascript" language="javascript"></script>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" id="navLogoText">艾提欧斯软件分享、交易管理平台</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="inverseNavbar1">
				<ul class="nav navbar-nav navbar-right">
					<li><a onclick="PageLinker('mgrpage/home.php');">返回首页</a>
					</li>
					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">当日下载、购买量排行榜</a>
							</li>
							<li><a href="#">软件存储实体订单</a>
							</li>
							<li><a href="#">最近上架软件产品</a>
							</li>
							<li><a onClick="PageLinker('mgrpage/userPermissions.php');">权限管理</a>
							</li>
							<li role="separator" class="divider"></li>
							<li><a onClick="PageLinker('mgrpage/supermgrsetting.php');">超级管理员设置</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<div id="mgrface"></div>
	<?php
	$getSessionLoginName = $_REQUEST[ 'loginName' ];
	$getSessionLoginPswd = $_REQUEST[ 'loginPswd' ];

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

	function initVers() {
		SQLconnect( "on", "libertylife.wicp.net:51071" );
		$SQLCode = "select * from usermsg";
		$getRootUserData = mysqli_query( $GLOBALS[ 'SQLcontrolPoint' ], $SQLCode );
		$fmtData = mysqli_fetch_array( $getRootUserData ); //格式化获得的数据
		if ( $GLOBALS[ 'getSessionLoginName' ] != "" && $GLOBALS[ 'getSessionLoginName' ] == $fmtData[ 'userName' ] ) {
			if ( $GLOBALS[ 'getSessionLoginPswd' ] == "" || $GLOBALS[ 'getSessionLoginPswd' ] != $fmtData[ 'userPswd' ] ) {
				MSGfeedback( "<script>window.close();</script>", "echoMode" );
			}else{
				$keyss=$GLOBALS['getSessionLoginName'];
				$keyva=$GLOBALS['getSessionLoginPswd'];
				MSGfeedback("<script>setCookieMsg('$keyss','$keyva',60);</script>","echoMode");
			}
		} else {
			MSGfeedback( "<script>window.close();</script>", "echoMode" );
		}
	}
	initVers();
	#数据库连接函数

	?>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/index.js" type="text/javascript"></script>

</body>

</html>