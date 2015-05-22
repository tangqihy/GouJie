<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(($_title)  !=  ""): ?><?php echo ($_title); ?> - <?php echo ($site["site_name"]); ?><?php else: ?><?php echo ($site["site_name"]); ?> - <?php echo ($site["site_slogan"]); ?><?php endif; ?></title>
<meta content="<?php if(($_keywords)  !=  ""): ?><?php echo ($_keywords); ?><?php else: ?><?php echo ($site["site_header_keywords"]); ?><?php endif; ?>" name="keywords">
<meta content="<?php if(($_description)  !=  ""): ?><?php echo ($_description); ?><?php else: ?><?php echo ($site["site_header_description"]); ?><?php endif; ?>" name="description">
<?php echo Addons::hook('public_meta');?>
<link href="__THEME__/image/favicon.ico?v=<?php echo ($site["sys_version"]); ?>" type="image/x-icon" rel="shortcut icon">
<!-- <link href="__THEME__/css/global.css?v=<?php echo ($site["sys_version"]); ?>" rel="stylesheet" type="text/css" />
<link href="__THEME__/css/module.css?v=<?php echo ($site["sys_version"]); ?>" rel="stylesheet" type="text/css" />
<link href="__THEME__/css/menu.css?v=<?php echo ($site["sys_version"]); ?>" rel="stylesheet" type="text/css" />
<link href="__THEME__/css/form.css?v=<?php echo ($site["sys_version"]); ?>" rel="stylesheet" type="text/css" />
<link href="__THEME__/css/jquery.atwho.css?v=<?php echo ($site["sys_version"]); ?>" rel="stylesheet" type="text/css" /> -->
<link href="__THEME__/css/css.php?t=css&f=global.css,module.css,menu.css,form.css,jquery.atwho.css&v=<?php echo ($site["sys_version"]); ?>.css" rel="stylesheet" type="text/css" />
<?php if(!empty($appCssList)): ?>
<?php if(is_array($appCssList)): ?><?php $i = 0;?><?php $__LIST__ = $appCssList?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$cl): ?><?php ++$i;?><?php $mod = ($i % 2 )?><link href="<?php echo APP_PUBLIC_URL;?>/<?php echo ($cl); ?>?v=<?php echo ($site["sys_version"]); ?>" rel="stylesheet" type="text/css"/><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
<?php endif; ?>
<script>
/**
 * 全局变量
 */
var SITE_URL  = '<?php echo SITE_URL; ?>';
var UPLOAD_URL= '<?php echo UPLOAD_URL; ?>';
var THEME_URL = '__THEME__';
var APPNAME   = '<?php echo APP_NAME; ?>';
var MID		  = '<?php echo $mid; ?>';
var UID		  = '<?php echo $uid; ?>';
var initNums  =  '<?php echo $initNums; ?>';
var SYS_VERSION = '<?php echo $site["sys_version"]; ?>'
// Js语言变量
var LANG = new Array();
</script>
<?php if(!empty($langJsList)) { ?>
<?php if(is_array($langJsList)): ?><?php $i = 0;?><?php $__LIST__ = $langJsList?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><script src="<?php echo ($vo); ?>?v=<?php echo ($site["sys_version"]); ?>"></script><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
<?php } ?>
<!-- <script src="__THEME__/js/jquery-1.7.1.min.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/jquery.form.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/common.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/core.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/module.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/module.common.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/jwidget_1.0.0.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/jquery.atwho.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/jquery.caret.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/ui.core.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/ui.draggable.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/plugins/core.comment.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/plugins/core.digg.js?v=<?php echo ($site["sys_version"]); ?>"></script> -->
<script src="__THEME__/js/js.php?t=js&f=jquery-1.7.1.min.js,jquery.form.js,common.js,core.js,module.js,module.common.js,jwidget_1.0.0.js,jquery.atwho.js,jquery.caret.js,ui.core.js,ui.draggable.js,plugins/core.comment.js,plugins/core.digg.js&v=<?php echo ($site["sys_version"]); ?>.js"></script>
<script src="__THEME__/js/plugins/core.comment.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/plugins/core.digg.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<?php echo Addons::hook('public_head',array('uid'=>$uid));?>
</head>
<body>

<div id="body_page" name='body_page'>
    <div id="body-bg">
    <div id="header" name="header">
    	<?php echo constant(" 未登录时 *");?>
    	<?php if( !isset($_SESSION["mid"])): ?><div class="header-wrap">
        	<div class="head-bd">
                <!-- logo -->
                <div class="reg">
                    <a href="<?php echo U('public/Register');?>"><?php echo L('PUBLIC_REGISTER');?></a>
                    <i class="vline"> | </i>
                    <a href="<?php echo U('public/Passport/login');?>"><?php echo L('PUBLIC_LOGIN');?></a>
                </div>
                <div class="logo" <?php if(strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 6.0') !== false): ?>style="_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo ($site["logo"]); ?>', sizingMethod='crop');_background:none;"<?php else: ?>style="background:url(<?php echo ($site["logo"]); ?>) no-repeat;"<?php endif; ?>><a href="<?php echo SITE_URL;?>"></a></div>
                <!-- logo -->
                <div class="nav">
                    <ul>
                        <?php if(is_array($site_guest_nav)): ?><?php $i = 0;?><?php $__LIST__ = $site_guest_nav?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$st): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li <?php if(APP_NAME == $st['app_name'] || $_GET['page'] == $st['app_name']): ?> class="current" <?php endif; ?> ><a href="<?php echo ($st["url"]); ?>" target="<?php echo ($st["target"]); ?>" class="app"><?php echo ($st["navi_name"]); ?></a>
                            <?php if(isset($st['child'])): ?><div model-node="drop_menu_list" class="dropmenu" style="width:100px;display:none;">
                                <dl class="acc-list" >
                                    <?php if(is_array($st["child"])): ?><?php $i = 0;?><?php $__LIST__ = $st["child"]?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$stc): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dd><a href="<?php echo ($stc["url"]); ?>" target="<?php echo ($stc["target"]); ?>"><?php echo (getshort($stc["navi_name"],6)); ?></a></dd><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
                                </dl>
                            </div><?php endif; ?>
                          </li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
		</div><?php endif; ?>

		<?php echo constant(" 登录后 *");?>
		<?php if(isset($_SESSION["mid"])): ?><div class="header-wrap">
        	<div class="head-bd">
                <!-- logo -->
                <div class="logo" <?php if(strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 6.0') !== false): ?>style="_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo ($site["logo"]); ?>', sizingMethod='crop');_background:none;"<?php else: ?>style="background:url(<?php echo ($site["logo"]); ?>) no-repeat;"<?php endif; ?>>
                    <a href="<?php echo SITE_URL;?>"></a>
                </div>
                <!-- logo -->
                <?php if($user['is_init'] == 1): ?>
                <div class="nav">
                    <ul>
                        <?php if(is_array($site_top_nav)): ?><?php $i = 0;?><?php $__LIST__ = $site_top_nav?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$st): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li <?php if(APP_NAME == $st['app_name'] || $_GET['page'] == $st['app_name']): ?> class="current" <?php endif; ?> ><a href="<?php echo ($st["url"]); ?>" target="<?php echo ($st["target"]); ?>" class="app"><?php echo ($st["navi_name"]); ?></a>
                            <?php if(isset($st['child'])): ?><div model-node="drop_menu_list" class="dropmenu" style="width:100px;display:none;">
                                <dl class="acc-list" >
                                    <?php if(is_array($st["child"])): ?><?php $i = 0;?><?php $__LIST__ = $st["child"]?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$stc): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dd><a href="<?php echo ($stc["url"]); ?>" target="<?php echo ($stc["target"]); ?>"><?php echo (getshort($stc["navi_name"],6)); ?></a></dd><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
                                </dl>
                            </div><?php endif; ?>
                          </li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
                        <li style="*z-index:100;">
                        <a href="###" class="app">应用</a>
                        <div model-node="drop_menu_list" class="dropmenu" style="width:370px;left:-50px;display:none;z-index:100;">
                            <ul class="acc-list app-list clearfix">
                                <?php if(is_array($site_nav_apps)): ?><?php $i = 0;?><?php $__LIST__ = $site_nav_apps?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$li): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li><a href="<?php echo U($li['app_name']);?>"><img src="<?php echo empty($li['icon_url_large']) ? APPS_URL.'/'.$li['app_name'].'/Appinfo/icon_app_large.png':$li['icon_url_large']; ?>" width="50" height="50" /><?php echo (getshort($li["app_alias"],4)); ?></a></li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
                                <li><a href="<?php echo U('public/App/addapp');?>"><img src="__THEME__/image/more.png" width="50" height="50" />更多应用</a></li>
                            </ul>
                        </div>
                        </li>
                    </ul>
                </div>
                <?php endif; ?>
                 <?php if(($user["is_init"])  ==  "0"): ?><div class="person">
                    <ul>
                        <li model-node="person" class="dorp-right"><a href="javascript:void(0);" class="app name" style="cursor:default">欢迎，<?php echo ($user['uname']); ?></a></li>
                        <li class="dorp-right"><a href="<?php echo U('public/Passport/logout');?>" class="app name">退出</a></li>
                    </ul>
                  </div>
                <?php else: ?>
                <div class="search">
                    <div id="mod-search" model-node="drop_search">
                    <form name="search_feed" id="search_feed" method="get" action="<?php echo U('public/Search/index');?>">
                        <input name="app" value="public" type="hidden"/>
                        <input name="mod" value="Search" type="hidden"/>
                        <input type="hidden" name="t" value="2"/>
                        <input type="hidden" name="a" value="public"/>
                        <dl>
                            <dt class="clearfix"><input id="search_input" class="s-txt left"  type="text" value="搜微博 / 昵称 / 标签" onfocus="this.value=''" onblur="setTimeout(function(){ $('#search-box').remove();} , 200);if(this.value=='') this.value='搜微博 / 昵称 / 标签';" event-node="searchKey" name='k'  autocomplete="off"><a href="javascript:void(0)" class="ico-search left" onclick="if(getLength($('#search_input').val()) && $('#search_input').val()!=='搜微博 / 昵称 / 标签'){ $('#search_feed').submit(); return false;}"></a>
                            </dt>
                        </dl>
                    </form>
                    </div>
                </div> 
                <div class="person">
                    <ul>
                        <li model-node="person" class="dorp-right">
                            <a href="<?php echo ($user['space_url']); ?>" class="username"><?php echo (getshort($user['uname'],6)); ?></a>
                        </li>                       
                        <li model-node="notice" class="dorp-right"><a href="javascript:void(0);" class="app"><?php echo L('PUBLIC_MESSAGE');?></a>
                            <div  class="dropmenu" model-node="drop_menu_list">
                            	<ul class="message_list_container message_list_new"  style="display:none">
                                    <li rel="new_folower_count" style="display:none">
                                        <span></span>，<a href="<?php echo U('public/Index/follower',array('uid'=>$mid));?>"><?php echo L('PUBLIC_FOLLOWERS_REMIND');?></a></li>
                                    <li rel="unread_comment" style="display:none"><span></span>，<a href="<?php echo U('public/Comment/index',array('type'=>'receive'));?>">
                                        <?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
                                    <li rel="unread_message" style="display:none"><span></span>，<a href="<?php echo U('public/Message');?>" ><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
                                    <li rel="unread_atme" style="display:none"><span></span>，<a href="<?php echo U('public/Mention');?>"><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
                                    <li rel="unread_notify" style="display:none"><span></span>，<a href="<?php echo U('public/Message/notify');?>"><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
                                </ul>
                                <dl class="acc-list W-message" >
                                    <dd><a  href="<?php echo U('public/Mention/index');?>">@提到我的</a></dd>
                                    <dd><a  href="<?php echo U('public/Comment/index', array('type'=>'receive'));?>">收到的评论</a></dd>
                                    <dd><a  href="<?php echo U('public/Comment/index', array('type'=>'send'));?>">发出的评论</a></dd>
                                    <dd><a  href="<?php echo U('public/Message/index');?>">我的私信</a></dd>
                                    <dd><a  href="<?php echo U('public/Message/notify');?>">系统消息</a></dd>
                                    <!-- 消息菜单钩子 -->
                                    <?php echo Addons::hook('header_message_dropmenu');?>
                                <?php if(CheckPermission('core_normal','send_message')){ ?>
                                <dd class="border"><a event-node="postMsg" href="javascript:void(0)" onclick="ui.sendmessage()"><?php echo L('PUBLIC_SEND_PRIVATE_MESSAGE');?>&raquo;</a></dd>
                                <?php } ?>
                                </dl>
                            </div>
                        </li>
                        <li model-node="account" class="dorp-right"><a href="javascript:void(0);" class="app"><?php echo L('PUBLIC_ACCOUNT');?></a>
                            <div model-node="drop_menu_list" class="dropmenu" style="width:100px">
                                <dl class="acc-list">
                                <dd><a href="<?php echo U('public/Account/index');?>"><?php echo L('PUBLIC_SETTING');?></a></dd>
                                
                                <?php if(CheckTaskSwitch()): ?>
                                <dd><a href="<?php echo U('public/Task/index');?>">任务中心</a></dd>
                                <dd><a href="<?php echo U('public/Medal/index');?>">勋章馆</a></dd>
                                <?php endif; ?>
                                
                                <dd><a href="<?php echo U('public/Rank/weibo');?>">排行榜</a></dd>

                                <?php if(!isVerified($user['uid'])): ?>
                                <dd><a href="<?php echo U('public/Account/authenticate');?>">申请认证</a></dd>
                                <?php endif; ?>

                                <?php if(isInvite() && CheckPermission('core_normal','invite_user')): ?>
                                <dd><a href="<?php echo U('public/Invite/invite');?>"><?php echo L('PUBLIC_INVITE_COLLEAGUE');?></a></dd>
                                <?php endif; ?>
                                <!-- 个人设置菜单钩子 -->
                                <?php echo Addons::hook('header_account_dropmenu');?>
                                <?php if(CheckPermission('core_admin','admin_login')){ ?>
                                <dd><a href="<?php echo U('admin');?>"><?php echo L('PUBLIC_SYSTEM_MANAGEMENT');?></a></dd>
                                <?php } ?>

                                <dd class="border"><a href="<?php echo U('public/Passport/logout');?>"><?php echo L('PUBLIC_LOGOUT');?>&raquo;</a></dd>
                                <dd></dd>
                                </dl>
                            </div>
                        </li>
                    </ul>
                </div>        
                <?php if(MODULE_NAME !='Register'): ?>
                <div id="message_container" class="layer-massage-box" style="display:none">
                	<ul class="message_list_container" >
                        <li rel="new_folower_count" style="display:none"><span></span>，<a href="<?php echo U('public/Index/follower',array('uid'=>$mid));?>"><?php echo L('PUBLIC_FOLLOWERS_REMIND');?></a></li>
                		<li rel="unread_comment" style="display:none"><span></span>，<a href="<?php echo U('public/Comment/index',array('type'=>'receive'));?>"><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
                        <li rel="unread_message" style="display:none"><span></span>，<a href="<?php echo U('public/Message');?>" ><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
 	                    <li rel="unread_atme" style="display:none"><span></span>，<a href="<?php echo U('public/Mention');?>"><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
     	                <li rel="unread_notify" style="display:none"><span></span>，<a href="<?php echo U('public/Message/notify');?>"><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
     	                <li rel="unread_group_atme" style="display:none"><span></span>，<a href="<?php echo U('group/SomeOne/index');?>"><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li>
     	                <li rel="unread_group_comment" style="display:none"><span></span>，<a href="<?php echo U('group/SomeOne/index');?>"><?php echo L('PUBLIS_MESSAGE_REMIND');?></a></li> 
                	</ul>
                <a href="javascript:void(0)" onclick="core.dropnotify.closeParentObj()" class="ico-close1"></a>
                </div>
                <?php endif; ?><?php endif; ?>
        	</div>
        </div>
        <?php if(MODULE_NAME != 'Search'): ?>
        <div id="search"  class="mod-at-wrap search_footer" model-node='search_footer' style="display:none;z-index:-1">
            <div class="search-wrap">
                <div class="input">
                     <form id="search_form" action="<?php echo U('public/Search/index');?>" method="GET">
                        <div class="search-menu" model-node='search_menu' model-args='a=<?php echo ($curApp); ?>&t=<?php echo ($curType); ?>'>
                            <a href="javascript:;" id='search_cur_menu'><?php echo (($curTypeName)?($curTypeName):"全站"); ?><i class="ico-more"></i></a>
                        </div>
                        <input name="app" value="public" type="hidden" />
                        <input name="mod" value="Search" type="hidden" />
                        <input name="a" value="<?php echo ($curApp); ?>" id='search_a' type="hidden"/>
                        <input name="t" value="<?php echo ($curType); ?>" id='search_t' type="hidden"/>
                        <input name="k" value="<?php echo (t($_GET['k'])); ?>" type="text" class="s-txt" onblur="this.className='s-txt'" onfocus="this.className='s-txt-focus'" autocomplete="off">
                        <a class="btn-red left" href="javascript:void(0);" onclick="$('#search_form').submit();"><span class="ico-search"></span></a>
                    </form>
                </div>
            </div>
        </div>
        <div class="mod-at-wrap" id="search_menu" ison='no' style="display:none" model-node="search_menu_ul">
        <div class="mod-at">
            <div class="mod-at-list">
                <ul class="at-user-list">
                    <li onclick="core.search.doShowCurMenu(this)" a='public' t='' typename='<?php echo L('PUBLIC_ALL_WEBSITE');?>'><?php echo L('PUBLIC_ALL_WEBSITE');?></li>
                <?php if(is_array($menuList)): ?><?php $i = 0;?><?php $__LIST__ = $menuList?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$m): ?><?php ++$i;?><?php $mod = ($i % 2 )?><?php if($m['app_name'] == $curApp && $m['type_id'] == $curType){
                            $curTypeName = $m['type'];
                        } ?>
                    <li onclick="core.search.doShowCurMenu(this)" a='<?php echo ($m["app_name"]); ?>' t='<?php echo ($m["type_id"]); ?>' typename='<?php echo ($m["type"]); ?>'><?php echo ($m["type"]); ?></li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>   
                </ul>
            </div>
        </div>
        </div>
       <?php endif; ?> 
    <script type="text/javascript">
    $(document).ready(function(){
        $("#mod-product dd").hover(function() {
            $(this).addClass("hover");
        },function() {
            $(this).removeClass("hover");
        });
        core.plugInit('search');
    });
    core.plugFunc('dropnotify',function(){
        setTimeout(function(){
            core.dropnotify.init('message_list_container','message_container');
        },320);   
    });
    </script><?php endif; ?>
    </div>
<?php //出现注册提示的页面
$show_register_tips = array('public/Profile','public/Topic','weiba/Index');
if(!$mid && in_array(APP_NAME.'/'.MODULE_NAME,$show_register_tips)){ ?>
<?php $registerConf = model('Xdata')->get('admin_Config:register'); ?>
<!--未登录前-->
<div class="login-no-bg">
  <div class="login-no-box boxShadow clearfix">       
    <div class="login-reg right">
        <?php if($registerConf['register_type'] == 'open'){ ?>
        <a href="<?php echo U('public/Register/index');?>" class="btn-reg">立即注册</a>
        <?php } ?>
        <span>已有帐号？<a href="javascript:quickLogin()">立即登录</a></span>
    </div>
    <p class="left"><span>欢迎来到<?php echo ($site["site_name"]); ?></span>赶紧注册与朋友们分享快乐点滴吧！</p>
  </div>
</div>
<?php } ?>

<div id="page-wrap">
  <div id="main-wrap">
    <div id="st-index-grid">
      <!--左边 -->
      <div id="col1" class="st-index-left">
<div class="left-wrap">
<!--个人信息-->
<div class="mod-person">
<a href="<?php echo U('public/Profile/index',array('uid'=>$mid));?>" class="face"><img src="<?php echo ($user["avatar_small"]); ?>" width="48" /></a>
<a href="<?php echo U('public/Profile/index',array('uid'=>$mid));?>"><span class="name"><?php echo ($user["uname"]); ?></span></a>
</div>
<!--左导航菜单-->
<div class="mod-sub-nav">
<ul class="basic-list">
	<li <?php if(MODULE_NAME =='Index' && APP_NAME=='public'){ ?> class="current"<?php } ?> ><a href="<?php echo U('public/Index/index');?>" class="app"><i class="arrow-current"></i><i class="icon ico-home"></i><?php echo L('PUBLIC_MY_HOME');?></a></li>
	<li <?php if(MODULE_NAME =='Mention'){ ?> class="current"<?php } ?>><a href="<?php echo U('public/Mention');?>" class="app"><i class="arrow-current"></i><i class="icon ico-at"></i><?php echo L('PUBLIC_MY_MENTIONS');?></a></li>
	<li <?php if(MODULE_NAME =='Comment'){ ?> class="current"<?php } ?>><a href="<?php echo U('public/Comment');?>" class="app"><i class="arrow-current"></i><i class="icon ico-comment"></i><?php echo L('PUBLIC_MY_COMMENTS');?></a></li>
	<li <?php if(MODULE_NAME =='Collection'){ ?> class="current"<?php } ?>><a href="<?php echo U('public/Collection');?>" class="app"><i class="arrow-current"></i><i class="icon ico-favorites"></i><?php echo L('PUBLIC_MY_FAVORITES');?></a></li>
	<li><a target="_blank" href="<?php echo U('public/Profile/index',array('uid'=>$uid));?>" class="app"><i class="arrow-current"></i><i class="icon ico-wbo"></i><?php echo L('PUBLIC_MY_WEIBO');?></a></li>		
	<li><a target="_blank" href="<?php echo U('public/Profile/data',array('uid'=>$uid));?>" class="app"><i class="arrow-current"></i><i class="icon ico-record"></i><?php echo L('PUBLIC_MY_PROFILE');?></a></li>

</ul>
</div>
<!--应用-->
<div class="mod-app">
<h3 class="hd"><?php echo L('PUBLIC_APPLICATION');?></h3>
<ul class="app-list">
<?php if(is_array($_userApp)): ?><?php $i = 0;?><?php $__LIST__ = $_userApp?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$ua): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li <?php if($ua['app_name'] == APP_NAME ): ?> class="current" <?php endif; ?> >
	<a href="<?php echo ($ua['app_entry']); ?>" class="app" id='leftApp<?php echo ($ua["app_id"]); ?>'>
	<i class="arrow-current"></i><img src="<?php echo ($ua["icon_url"]); ?>" width='16'> 
	<?php echo L('PUBLIC_APPNAME_'.$ua['app_name']);?>
	</a>
</li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
</ul>
<div class="app-add"><a href="<?php echo U('public/App/index');?>" class="app"><i class="icon ico-add"></i><?php echo L('PUBLIC_APP_INEX');?></a></div>
</div>
</div>
</div>
      <div id="col8" class="content-bg clearfix boxShadow" style="width:auto">
        <div id="col4" class="main-left">
          <!--tab菜单-->
          <div id="aside" class="pad">
            <dl class="nav-left mt10 border-no">
              <dd class="current"><a href="<?php echo U('public/Mention');?>">@提到我的</a></dd>
              <dd><a href="<?php echo U('public/Comment/index',array('app_name'=>t($_GET['app_name']),'type'=>'receive'));?>">收到的评论</a></dd>
              <dd><a href="<?php echo U('public/Comment/index',array('app_name'=>t($_GET['app_name']),'type'=>'send'));?>">发出的评论</a></dd>
              <dd><a href="<?php echo U('public/Message');?>">我的私信</a></dd>
              <dd><a href="<?php echo U('public/Message/notify');?>">系统消息</a></dd>
            </dl>
          </div>
        </div>
        <div id="col7" class="main-right">
          <div class="extend minh person-set">
            <!--tab menu-->
            <div class="feed-nav">
              <div class="set-hd">
                <h3>@提到我的</h3>
              </div>
              <div class="mod-feed-tab">
                <ul class="inner-feed-nav">
                  <!--                  <li <?php if(($_GET["t"])  ==  ""): ?>class="current"<?php endif; ?> <?php if(($_GET["t"])  ==  "feed"): ?>class="current"<?php endif; ?>><a href="<?php echo U('public/Mention/index',array('t'=>'feed'));?>"><?php echo L('PUBLIC_WEIBO');?></a></li>-->
                  <li 
                  <?php if(($_GET["t"])  ==  ""): ?>class="current"<?php endif; ?>
                  > <a href="<?php echo U('public/Mention');?>"><?php echo L('PUBLIC_ALL_STREAM');?></a>
                  </li>
                  <?php if(is_array($tab)): ?><?php $i = 0;?><?php $__LIST__ = $tab?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$t): ?><?php ++$i;?><?php $mod = ($i % 2 )?><?php if($tabHash[$key]){ ?>
                    <li 
                    <?php if(($_GET["t"])  ==  $key): ?>class="current"<?php endif; ?>
                    > <a href="<?php echo U('public/Mention',array('t'=>$key));?>"><?php echo ($tabHash[$key]); ?></a>
                    </li>
                    <?php } ?><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
                </ul>
              </div>
            </div>
            <!--feed list-->
            <div class="feed_lists">
              <?php if(($data)  !=  ""): ?><?php if(is_array($data)): ?><?php $i = 0;?><?php $__LIST__ = $data?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dl class="feed_list clearfix" model-node="feed_list">
                    <dt class="face">
                      <?php if($vo['source_table'] == 'comment'): ?>
                      <a href="<?php echo ($vo["comment_user_info"]["space_url"]); ?>"> <img src="<?php echo ($vo["comment_user_info"]["avatar_small"]); ?>"  event-node="face_card" uid="<?php echo ($vo["comment_user_info"]["uid"]); ?>" width="50" height="50"></a>
                      <?php else: ?>
                      <a href="<?php echo ($vo["source_user_info"]["space_url"]); ?>"> <img src="<?php echo ($vo["source_user_info"]["avatar_small"]); ?>"  event-node="face_card" uid="<?php echo ($vo["source_user_info"]["uid"]); ?>" width="50" height="50"></a>
                      <?php endif; ?>
                    </dt>
                    <dd class="content">
                      <p class="hd">
                        <?php if($vo['source_table'] == 'comment'): ?>
                        <!-- 评论模板开始 -->
                        <?php if($vo['sourceInfo']['app'] != 'public'): ?>
                        <?php echo getUserSpace($vo["comment_user_info"]["uid"],'','','{uname}') ?>
                        ：<span class="f12 ico-bar-top"><?php echo ($vo["source_type"]); ?></span><?php echo ($vo["source_content"]); ?>
                      <dl class="comment">
                        <dt class="arrow bgcolor_arrow"><em class="arrline">◆</em><span class="downline">◆</span></dt>
                        <dd class="name">
                          <?php echo getUserSpace($vo["sourceInfo"]["source_user_info"]["uid"],'','','@{uname}') ?>
                        </dd>
                        <dd><?php echo (format($vo["sourceInfo"]["source_body"],true)); ?></dd>
                      </dl>
                      <?php else: ?>
                      <?php echo getUserSpace($vo["comment_user_info"]["uid"],'','','{uname}') ?>
                      ：<span class="f12 ico-bar-top"><?php echo ($vo["source_type"]); ?></span>
                      <?php if($vo['is_audit']){echo $vo[source_content];}else{echo '内容正在审核';} ?>
                      <dl class="comment">
                        <dt class="arrow bgcolor_arrow"><em class="arrline">◆</em><span class="downline">◆</span></dt>
                        <dd class="name">
                          <?php echo getUserSpace($vo["sourceInfo"]["source_user_info"]["uid"],'','','@{uname}') ?>
                        </dd>
                        <dd>
                          <?php if($vo['sourceInfo']['is_audit']){ echo format($vo[sourceInfo][source_body], true);}else{echo '内容正在审核';} ?>
                        </dd>
                        <p class="info"> <span class="right"> <a href="<?php echo U('public/Profile/feed',array('uid'=>$vo['sourceInfo']['uid'],'feed_id'=>$vo['sourceInfo']['feed_id']));?>">原文转发
                          <?php if(($vo["sourceInfo"]["repost_count"])  !=  "0"): ?>(<?php echo ($vo["sourceInfo"]["repost_count"]); ?>)<?php endif; ?>
                          </a><i class="vline">|</i> <a href="<?php echo U('public/Profile/feed',array('uid'=>$vo['sourceInfo']['uid'],'feed_id'=>$vo['sourceInfo']['feed_id']));?>">原文评论
                          <?php if(($vo["sourceInfo"]["comment_count"])  !=  "0"): ?>(<?php echo ($vo["sourceInfo"]["comment_count"]); ?>)<?php endif; ?>
                          </a> </span> <span><a href="<?php echo U('public/Profile/feed',array('uid'=>$vo['sourceInfo']['uid'],'feed_id'=>$vo['sourceInfo']['feed_id']));?>" date="<?php echo ($vo["sourceInfo"]["publish_time"]); ?>" class="date"><?php echo (friendlydate($vo["sourceInfo"]["publish_time"])); ?></a><span>来自网站</span></span> </p>
                      </dl>
                      <?php endif; ?>
                      <!-- 评论模板结束 -->
                      <?php else: ?>
                      <?php echo getUserSpace($vo["uid"],'','','{uname}') ?>
                      ：<span class="f12 ico-bar-top"><?php echo ($vo["source_type"]); ?></span>
                      <?php if($vo['is_audit']){ echo format($vo[source_body],ture);}else{echo '内容正在审核';} ?>
                      <?php endif; ?>
                      </p>
                      <p class="info">
                        <?php if($vo['is_audit']){ ?>
                        <span class="right">
	<?php if(CheckPermission('vtask_admin','vtask_recommend')): ?>
	<em class="hover">
	   <a href="javascript:void(0);" onclick="addToVtask(<?php echo ($vo["feed_id"]); ?>);">添加到事务</a>
	   <i class="vline">|</i>	
	   </em>
	<?php endif; ?>
                        <?php if($vo['source_table'] == 'feed'): ?>
                        <?php echo W('Digg', array('feed_id'=>$vo['feed_id'], 'digg_count'=>$vo['digg_count'], 'diggArr'=>$diggArr));?>
                        <i class="vline">|</i>
                        <?php endif; ?>
                        <a href="<?php echo ($vo["source_url"]); ?>" ><?php echo L('PUBLIC_VIEW');?></a>
                        <?php if(in_array('repost',$weibo_premission) || $vo['widget_stype'] !='feed'): ?>
                        <?php if($vo['source_table'] == 'comment'): ?>
                        <?php if(in_array('comment',$weibo_premission) && CheckPermission('core_normal','feed_comment') ): ?>
                        <i class="vline">|</i> <a href="javascript:void(0);" onclick="ui.reply(<?php echo ($vo['source_id']); ?>)"><?php echo L('PUBLIC_STREAM_REPLY');?></a>
                        <?php endif; ?>
                        <?php else: ?>
                        <?php if(in_array('repost',$weibo_premission) && CheckPermission('core_normal','feed_share')): ?>
                        <i class="vline">|</i> <?php echo W('Share',array('sid'=>$vo['widget_share_sid'],'stable'=>$vo['widget_stype'],'current_id'=>$vo['widget_curid'],'current_table'=>$vo['widget_curtable'],'nums'=>$vo['repost_count'],'appname'=>$vo['app'],'feed_type'=>$vo['type'],'is_repost'=>$vo['is_repost']));?>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php if($vo['source_table'] != 'comment'): ?>
                        <i class="vline">|</i> <?php echo W('Collection',array('type'=>'following','sid'=>$vo['widget_sid'],'stable'=>'feed','sapp'=>$vo['app']));?>
                        <?php if(in_array('comment',$weibo_premission)): ?>
                        <?php $cancomment = intval(CheckPermission('core_normal','feed_comment')); ?>
                        <i class="vline">|</i> <a event-node="comment" href="javascript:void(0)" event-args="row_id=<?php echo ($vo['widget_sid']); ?>&app_uid=<?php echo ($vo['widget_suid']); ?>&to_comment_id=0&to_uid=0&table=<?php echo ($vo['widget_stype']); ?>&app_row_id=<?php echo ($vo['widget_sid']); ?>&app_row_table=<?php echo ($vo['app_row_table']); ?>&cancomment=<?php echo ($cancomment); ?>&app_name=<?php echo ($vo["app"]); ?>"><?php echo L('PUBLIC_STREAM_COMMENT');?>
                        <?php if(($vo["comment_count"])  !=  "0"): ?>(<?php echo ($vo["comment_count"]); ?>)<?php endif; ?>
                        </a>
                        <?php endif; ?>
                        <?php endif; ?>
                        </span> <span><a class="date" date="<?php echo ($vo["ctime"]); ?>" href="<?php echo ($vo["source_url"]); ?>"><?php echo (friendlydate($vo["ctime"])); ?></a><span>来自网站</span></span>
                        <?php if($vo['uid'] != $mid && $vo['source_table'] != 'comment'): ?>
                        <?php if(CheckPermission('core_normal','feed_report')): ?>
                        <em class="hover"> <a href="javascript:void(0)" event-node="denounce" event-args="aid=<?php echo ($vo['widget_sid']); ?>&type=<?php echo ($vo['widget_stype']); ?>&uid=<?php echo ($vo['widget_suid']); ?>"><?php echo L('PUBLIC_STREAM_REPORT');?></a> </em>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php if($i <= $unread_atme_count): ?>
                        <img src="__THEME__/image/icon_new.gif" class="icon-new"/>
                        <?php endif; ?>
                        <?php } ?>
                      </p>
                      <div model-node="comment_detail" class="repeat clearfix" style="display:none;"></div>
                    </dd>
                  </dl><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
                <?php else: ?>
                <div class="note"><?php echo L('PUBLIC_NO_MENTIONS');?></div><?php endif; ?>
              <div id='page' class='page'><?php echo ($html); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="__THEME__/js/module.weibo.js"></script>
<script type="text/javascript">
/**
 * 时间更新效果
 * return void
 */
core.loadFile(THEME_URL+'/js/core.weibo.js', function () {
  var wTime = parseInt("<?php echo time(); ?>");
  var updateTime = function () {
    $('.date').each(function (i, n) {
      var date = $(this).attr('date');
      if (typeof date !== 'undefined') {
        $(this).html(core.weibo.friendlyDate(date, wTime));
      }
    });
  };
  updateTime();
  setInterval(function () {
    wTime += 10;
    updateTime();
  }, 10000);
});

  //旋转图片
function revolving (type, id) {
  var img = $("#image_index_"+id);
  img.rotate(type);
}


$.fn.rotate = function(p){

  var img = $(this)[0],
    n = img.getAttribute('step');
  // 保存图片大小数据
  if (!this.data('width') && !$(this).data('height')) {
    this.data('width', img.width);
    this.data('height', img.height);
  };
  this.data('maxWidth',img.getAttribute('maxWidth'))

  if(n == null) n = 0;
  if(p == 'left'){
    (n == 0)? n = 3 : n--;
  }else if(p == 'right'){
    (n == 3) ? n = 0 : n++;
  };
  img.setAttribute('step', n);

  // IE浏览器使用滤镜旋转
  if(document.all) {
    if(this.data('height')>this.data('maxWidth') && (n==1 || n==3) ){
      if(!this.data('zoomheight')){
        this.data('zoomwidth',this.data('maxWidth'));
        this.data('zoomheight',(this.data('maxWidth')/this.data('height'))*this.data('width'));
      }
      img.height = this.data('zoomwidth');
      img.width  = this.data('zoomheight');
      
    }else{
      img.height = this.data('height');
      img.width  = this.data('width');
    }
    
    img.style.filter = 'progid:DXImageTransform.Microsoft.BasicImage(rotation='+ n +')';
    // IE8高度设置
    if ($.browser.version == 8) {
      switch(n){
        case 0:
          this.parent().height('');
          //this.height(this.data('height'));
          break;
        case 1:
          this.parent().height(this.data('width') + 10);
          //this.height(this.data('width'));
          break;
        case 2:
          this.parent().height('');
          //this.height(this.data('height'));
          break;
        case 3:
          this.parent().height(this.data('width') + 10);
          //this.height(this.data('width'));
          break;
      };
    };
  // 对现代浏览器写入HTML5的元素进行旋转： canvas
  }else{
    var c = this.next('canvas')[0];
    if(this.next('canvas').length == 0){
      this.css({'visibility': 'hidden', 'position': 'absolute'});
      c = document.createElement('canvas');
      c.setAttribute('class', 'maxImg canvas');
      img.parentNode.appendChild(c);
    }
    var canvasContext = c.getContext('2d');
    switch(n) {
      default :
      case 0 :
        img.setAttribute('height',this.data('height'));
        img.setAttribute('width',this.data('width'));
        c.setAttribute('width', img.width);
        c.setAttribute('height', img.height);
        canvasContext.rotate(0 * Math.PI / 180);
        canvasContext.drawImage(img, 0, 0);
        break;
      case 1 :
        if(img.height>this.data('maxWidth') ){
          h = this.data('maxWidth');
          w = (this.data('maxWidth')/img.height)*img.width;
        }else{
          h = this.data('height');
          w = this.data('width');
        }
        c.setAttribute('width', h);
        c.setAttribute('height', w);
        canvasContext.rotate(90 * Math.PI / 180);
        canvasContext.drawImage(img, 0, -h, w ,h );
        break;
      case 2 :
        img.setAttribute('height',this.data('height'));
        img.setAttribute('width',this.data('width'));
        c.setAttribute('width', img.width);
        c.setAttribute('height', img.height);
        canvasContext.rotate(180 * Math.PI / 180);
        canvasContext.drawImage(img, -img.width, -img.height);
        break;
      case 3 :
        if(img.height>this.data('maxWidth') ){
          h = this.data('maxWidth');
          w = (this.data('maxWidth')/img.height)*img.width;
        }else{
          h = this.data('height');
          w = this.data('width');
        }
        c.setAttribute('width', h);
        c.setAttribute('height', w);
        canvasContext.rotate(270 * Math.PI / 180);
        canvasContext.drawImage(img, -w, 0,w,h);
        break;
    };
  };
};
</script>

<div class="footer">
   <div class="login-footer">
    <?php if(!empty($site_bottom_nav) && $site_bottom_child_nav){ ?>
      <div class="foot clearfix">
         <?php if(is_array($site_bottom_nav)): ?><?php $i = 0;?><?php $__LIST__ = $site_bottom_nav?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$nv): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dl>
            <dt><a href="<?php echo ($nv["url"]); ?>" target="<?php echo ($nv["target"]); ?>"><?php echo ($nv['navi_name']); ?></a></dt>
            <?php if(is_array($nv["child"])): ?><?php $i = 0;?><?php $__LIST__ = $nv["child"]?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$cv): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dd><a href="<?php echo ($cv["url"]); ?>" target="<?php echo ($cv["target"]); ?>"><?php echo ($cv['navi_name']); ?></a></dd><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
         </dl><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
      </div>
    <?php } else if(!empty($site_bottom_nav)) { ?>
      <div class="foot foot1 clearfix">
         <?php if(is_array($site_bottom_nav)): ?><?php $i = 0;?><?php $__LIST__ = $site_bottom_nav?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$nv): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dl>
            <dt><a href="<?php echo ($nv["url"]); ?>" target="<?php echo ($nv["target"]); ?>"><?php echo ($nv['navi_name']); ?></a></dt>
         </dl><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
      </div>
    <?php } ?>
    <p>
      <span class="right">Powered By <a href="http://localhost" title="购捷网" target="_blank">GouJieNet</a></span>
      <?php echo ($GLOBALS["ts"]["site"]["site_footer"]); ?>
    </p>
  </div>
</div><!--footer end-->

</div><!--page end-->
<?php echo Addons::hook('public_footer');?>
<!-- 统计代码-->
<div id="site_analytics_code" style="display:none;">
<?php echo (base64_decode($site["site_analytics_code"])); ?>
</div>
<?php if(($site["site_online_count"])  ==  "1"): ?><script src="<?php echo SITE_URL;?>/online_check.php?uid=<?php echo ($mid); ?>&uname=<?php echo ($user["uname"]); ?>&mod=<?php echo MODULE_NAME;?>&app=<?php echo APP_NAME;?>&act=<?php echo ACTION_NAME;?>&action=trace"></script><?php endif; ?>
</body>
</html>