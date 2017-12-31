<?php
	
    require './common/user.common.php';
    require './listhead.php';
    //查询出所有产品
   $list = $db->getOneData('product','*','product_id='.$_GET['product_id']);

?>
<div class="single">

<div class="container">
<div class="col-md-12">
	<div class="col-md-5 grid">		
		<div class="flexslider" >
			  <ul class="slides">
			  	<?php
			  		
			  		$imgarr = explode(',', $list['product_img']);
			  		foreach ($imgarr as $key => $value) {
			  		if(!$value){   //因为第一个值 是空的
			  			continue;
			  		}
			  		
			  	?>

			    <li data-thumb="<?=$value?>" >
			        <div class="thumb-image"> <img src="<?=$value?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <?php
			    	}
			    ?>
			  
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						
						<div class="single-para simpleCart_shelfItem" style="position: relative;left: 20%">
							<h1 style="color:#666;"><?=$list['productname']?></h1>
							<p><?=$list['introduced']?></p>
							<div class="star-on">
								<ul>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
								</ul>
								<div class="review">
									<a href="#" style="color:#666;">（共<?=$list['assess']?>条评论） </a>
									
								</div>
							<div class="clearfix"> </div>
							</div>
							
								<del class="add-to item_price" style="color:#ccc;">¥<?=$list['productprice']?></del>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<span style="color:#f00;font-size: 26px;">¥<?=$list['discover']?></span>
							
							<div class="available">
								<h6>华为荣耀手机参数:</h6>
								<ul>
									
								<li>选择容量:
									<select>
										<option>4GB+64GB</option>
										<option>16GB</option>
										<option>128GB</option>
									</select>
								</li>
								<br><br>
								<li>
									选择颜色:
									<select>
										<option>玫瑰金</option>
										<option>玄金黑</option>
								</select>
								</li><br><br>
								<li>
									选择套餐:
									<select>
										<option>手机+耳机+充电器</option>
										<option>手机+内存卡</option>
								</select>
								</li>
								<br><br>
								<li>
									选择制板:
									<select>
										<option>全网通</option>
										<option>只支持移动</option>
										<option>只支持移动、联通</option>
						
								</select>
								</li><br><br>
								<li>
									选择购买数量:
									<select>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
						
								</select>
								</li>
							</ul>
					
						</div>
								<a href="##" class="cart item_add" productid="<?=$list['product_id']?>" id="caradd">加入购物车</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="#" class="cart item_copy">立即支付</a>
						</div>
					</div>
			<div class="clearfix"> </div>
			<div class="content-details" style="width:100%;height: auto;border: 1px solid #ccc;position: relative;left: 2%;margin-top: 60px;">
				<ul class='nav nav-tabs '>
					<li class="bg-info disabled"><a href='#' style="font-size: 25px;color: #666;">产品详情</a><li>
					<li><a href='#' style="font-size: 25px;color: #666;">产品参数</a><li>
					<li><a href='#' style="font-size: 25px;color: #666;">用户评价</a><li>
				</ul>
				<ul style="list-style: none;padding: 0 20px;overflow: hidden;">
					<a href="#"></a>
					<div ><img src="<?=$value?>" alt=""></div>									
					</li>
					<li>
						<a href="#">规格参数</a>
						<div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$list['detail']?></div>
					</li>
					<li>
					<a href="#">主体</a>
					<div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$list['detail']?></div>
					</li>
					<li>
					<a href="#">包装</a>
					<div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$list['detail']?></div>				
					</li>
					<li>
					<a href="#">售后服务</a>
					<div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$list['detail']?></div>									
					</li>
					
				</ul>
			</div>	


			
</div>

			
<!--//seller-->
<!--tag-->
							
		
		<div class="clearfix"> </div>
	</div>
	</div>
<!--footer-->
<div class="footer">
	<address style="margin: 10px auto;text-align: center;">
            <strong style="color:#777;font-weight:normal;font-size: 14px;">法律声明   |   隐私政策   |   免责条款   |   关于cookies   |   产品广告页通用声明   |   新闻与素材通用声明</strong>
            <p style="color: #9e9e9e;">Copyright © 2011-2016 华为软件技术有限公司 版权所有 保留一切权利 | 苏公网安备 32011402010006号 苏ICP备17040376号</small>
                <p>
        </address>
</div>
<!-- slide -->
<script src="js/jquery.min.js"></script>
<script src="js/imagezoom.js"></script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
</body>
</html>