<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>权限管理</title>
<link href="../css/common/common.css" rel="stylesheet" type="text/css">
	<style>
		#PerPageTitles{
			display: block;
			font-size:24px;
		}
		#PrePageContent{
			display: flex;
            flex-direction: row;
            background-color: transparent;
            flex:1;
            width: 100%;
            height:100%;
		}
		
		/**左侧内容区域**/
		#PreSettList{
			display: flex;
			width:20%;
			position: absolute;
		}
		#PreSettList>ul{
			display: flex;
			flex-direction: column;
			align-items: center;
			width:100%;
		}
		#PreSettList>ul>li{
			display: flex;
			justify-content: center;
			align-items: center;
			height:64px;
			width:100%;
			
		}
		/**左侧内容区域**/
		
		/**右侧设置项详细内容**/
		#PreSettContent{
			display: block;
            position: absolute;
            width: 80%;
            top:0px;
            right:0px;
            bottom: 0px;
            flex-direction: column;
            overflow-y: scroll;
            overflow-x: hidden;
		}
		.PreSettBlock{
			margin-left: auto;
			margin-right: auto;
			margin-top:64px;
			margin-bottom: 64px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			box-shadow: 0px 0px 7px 1px black;
			height: 300px !important;
            width: 90% !important;
		}
		/**右侧设置项详细内容**/
	</style>
</head>

<body style="display: flex;flex-direction: column;">
	<br>
	<br>
	<p id="PerPageTitles">&nbsp;&nbsp;&nbsp;&nbsp;权限管理</p>
	<br>
	<div id="PrePageContent">
		<div id="PreSettList">
			<ul>
				<li>买家的基本权限</li>
				<li>卖家的基本权限</li>
			</ul>
		</div>
		<div id="PreSettContent">
			<div class="PreSettBlock"></div>
			<div class="PreSettBlock"></div>
		</div>
	</div>
</body>
</html>
