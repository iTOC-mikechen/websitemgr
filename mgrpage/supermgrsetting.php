<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>超级管理员、设置</title>
    <link href="../css/common/common.css" type="text/css" rel="stylesheet">
    <style>
		/**页面标题**/
        #pageTitle {
			display: inline-block;
            font-size: 24px;
			width:100%;
			background-color: white;
        }
		/**页面标题**/
		
		/*页面内容*/
        #pageContents {
            display: flex;
            flex-direction: row;
            background-color: transparent;
            flex:1;
            width: 100%;
            height:100%;
        }
		/*页面内容*/

        /**左侧列表区**/
        .settinglistview {
            display: flex;
			position:absolute;
            width: 20%;
        }

        .settinglist {
            display: flex;
            height: 64px;
            width: 100% !important;
            align-items: center;
            justify-content: center;
        }

        /**左侧列表区**/

        /**右侧内容区**/
        .settinglistcontent {
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
		.contentCont{
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
		.contentCont>p{
			display: inline-flex;
			flex-direction: row;
			width:100%;
			justify-content: center;
		}
		
		#presonSet {
            
        }

        #mgrInterfaceSet {
			
        }
        /**右侧内容区**/
    </style>
</head>

<body style="display: flex;flex-direction: column;">
<br>
<br>
<p id="pageTitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;超级管理员、设置中心</p>
<br>
<div id="pageContents">
    <div class="settinglistview">
        <ul style="width:100%;height:100%;">
            <li class="settinglist">个人设置</li>
            <li class="settinglist">管理界面设置</li>
        </ul>
    </div>
    <div class="settinglistcontent">
        <div id="presonSet" class="contentCont">
            <p>昵称：<input type="text">&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox">替换欢迎语上的真实名称</p>
            <p>头像：<input type="file"></p>
            <p><input type="button" value="确定提交更改"></p>
        </div>
        <div id="mgrInterfaceSet" class="contentCont">
			<p>系统界面背景:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="bgpSel" type="radio" id="bgpSel_1">&nbsp;纯白色背景&nbsp;&nbsp;&nbsp;
				<input name="bgpSel" type="radio" id="bgpSel_2">&nbsp;自定义颜色&nbsp;&nbsp;&nbsp;
				<input name="bgpSel" type="radio" id="bgpSel_3">&nbsp;自定义图片&nbsp;&nbsp;&nbsp;
			</p>
        </div>
    </div>
</div>
</body>

</html>