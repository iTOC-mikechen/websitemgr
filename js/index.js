// JavaScript Document
var mgrContent=document.getElementById('mgrface');

/*AJAX*/

/*AJAX默认回调函数*/
function defaultFunc(msg) {
    "use strict";
    alert("请到终端控制台查看输出的数据");
    console.log(msg);
}

/*AJAX默认回调函数*/

/*AJAX数据连接控制节点*/
var mgrsite = {};
mgrsite.URL = "/res/interface/";
mgrsite.Method = "post";
mgrsite.AsyncRequest = false;
mgrsite.showNrlTips = false;
mgrsite.NoCallbackFunction = true;
mgrsite.CallbackFunction = defaultFunc;
/*AJAX数据连接控制节点*/

/*AJAX数据连接控制节点控制器*/
function defaultAJAX() {
    /*重设AJAX连接控制节点*/
    "use strict";
    mgrsite.showNrlTips = false; //取消显示正常的提示信息
    mgrsite.Method = "post"; //数据提交方式为post
    mgrsite.AsyncRequest = false; //不启用异步
    mgrsite.CallbackFunction = defaultFunc; //默认回调函数
	mgrsite.NoCallbackFunction = false;//不启用回调函数，true为不启用
}

/*AJAX数据连接控制节点控制器*/

/*AJAX*/

function PageLinker(PageURL){
	"use strict";
	defaultAJAX();
	mgrsite.URL=PageURL;
	mgrsite.NoCallbackFunction=true;
	mgrContent.innerHTML=(ajaxConnectRequest(mgrsite));
}

window.onload=function(){
	"use strict";
	PageLinker('mgrpage/home.php');
};