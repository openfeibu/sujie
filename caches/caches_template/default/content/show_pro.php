<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--内容-->
<div class="outW bor">
    <div class="inW">
            <div class="serverListCon">
                <div id="imgA"><img src="<?php echo $thumb;?>" alt="<?php echo $title;?>"></div>
                <div class="buy">
                    <h1><?php echo $title;?></h1>
                    <p><?php echo $description;?></p>
                    <div class="goBuy">
                        <p>费用合计： <span>￥<?php echo $price;?></span></p>
                    </div>
                </div>

            </div>
    </div>
    <div class="inW proDetail bor2">
        <h3>产品详情</h3>
        <div class="pro">
			<?php echo $content;?>
        </div>
    </div>
</div>
<!--内容 end-->
<?php include template("content","footer"); ?>