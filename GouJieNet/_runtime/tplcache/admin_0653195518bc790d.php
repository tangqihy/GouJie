<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
.themePreview {margin:20px 0 0;}
.themePreview a {border:2px solid #FFFFFF; float:left; height:75px; margin:0 0 5px 5px; position:relative;*z-index:9;}
a:link {color:#3366CC;text-decoration:none;}
.themePreview a img {height:75px; width:100px;}
.themePreview a span {background:none repeat scroll 0 0 #000000; bottom:0;left:0; color:#FFFFFF;display:block;font-weight:normal;height: 22px;line-height: 22px;opacity: 0.4;position: absolute;text-align: center;width: 100px;}
.themePreview a:hover, .themePreview a.current {border: 2px solid #000000;}
</style>

<div class="so_main">
    <div class="page_tit">网站默认皮肤设置</div>
    <div class="form2">
        <form method="post" action="<?php echo Addons::adminUrl('saveConfig');?>">
            <dl class="lineD">
                <dt></dt>
                <dd id="style_list">
                    <div class="themePreview">
                        <div class="colorBox ">
                        <?php if(is_array($defaultStyle)): ?><?php $i = 0;?><?php $__LIST__ = $defaultStyle?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><a rel="<?php echo ($key); ?>" href="javascript:;" onclick="fChange('<?php echo ($key); ?>',$(this));" <?php if($key == $default): ?>class="current"<?php endif; ?>>
                            <img src="<?php echo ($vo["thumb_url"]); ?>" alt="<?php echo ($vo["name"]); ?>" />
                            <span><?php echo ($vo['name']); ?></span>
                        </a><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
                        </div>
                    </div>               
                    <br />
                    <br />
                    <p style="clear:left;padding-left:7px;">
                        当前选中项为网站默认皮肤。设置后，用户可在前台更换其他皮肤。
                    </p>
                </dd>
            </dl>
            <input type="hidden" value="<?php echo ($default); ?>" name="default" id="default" />
            <div class="page_btm">
                <input type="submit" class="btn_b" value="确定" />
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
/**
 * 改变选中样式
 * @param string key 选中样式Key值
 * @param object this 点击按钮对象
 * @return void
 */
var fChange = function(key, obj)
{
    $('#style_list').find('a').removeClass('current');
    $(obj).addClass('current');
    $('#default').val(key);
    return false;
}
</script>