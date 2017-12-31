<?php 
     require './common/user.common.php';
     require './payhead.php';
 ?>
 <style>
.footer{
    top:0;
}
 </style>
 <div class="row process" style="background: #f5f5f5;">
            <!-- bg_payorder_1.png -->
            <div class='col-md-8  col-md-push-3 ' id="detailpro" style="top:20px;height: 70px;background-position: 0px -72px;height: 44px!important;background-size: 809px 300px;">
            </div>
        </div>
        <div class="row confirm" style="background: #f5f5f5;padding-bottom: 30px">
    <div class="col-md-7 ok col-md-push-1">
        <div style="width: 72px;height: 72px;background: url(images/icon30.png);"></div>
        <h3 class="onlypay">订单提交成功！只差付款了~</h3>
        <p class="payprice">付款金额（元）： 169.00 元</p>
        <div class="time">请您在 <span id="span1"></span> 内完成支付，否则订单将自动取消</div>
    </div>
    <div class="col-md-7  col-md-push-1 payway">
        <h6>选择支付方式
            <b>[重新选择]</b>
            <div style="width: 100%;height: 100%;border: 1px solid #ccc">
                <div class="cate">第三方支付平台</div>
                <div class="detailcate">
                    <div class="radio" name="sex1">
                        <label><input type="radio" value="" name="sex"><img src="images/alipay_logo1.png" alt=""></label>
                    </div>
                    <div class="radio" name="sex1">
                        <label><input type="radio" value="" name="sex"><img src="images/wechat_logo.gif" alt=""></label>
                    </div>
                    <div class="radio" name="sex1">
                        <label><input type="radio" value="" name="sex"><img src="images/tenpay_logo.gif" alt=""></label>
                    </div>
                </div>
                <div class="cate">分期付款：支持以下各银行储蓄卡及信用卡，查看分期付款</div>
                <div class="detailcate">
                    <div class="radio">
                        <label><input type="radio" value=""><img src="images/alipay_logo1.png" alt=""></label>
                    </div>
                </div>
                <div class="cate">银行网银支持以下各银行储蓄卡及信用卡</div>
                <div class="detailcate">
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/CMB_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/ICBC_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/CCB_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/COMM_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/ABC_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/CITIC_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/SPDB_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/BOC_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/GDB_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/CIB_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/CEB_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                    <!-- TO DO -->
                        <label><input type="radio" value="" name="sex"><img src="images/PSBC_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/SPABANK_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/HZCB_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/CMBC_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/BJRCB_OUT.gif" alt=""></label>
                    </div> 
                </div>
                   <div class="cate">信用卡快捷支付 无需网银</div>
                <div class="detailcate">
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/ICBC_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/CCB_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/COMM_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/ABC_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/CITIC_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/SPDB_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/BOC_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/GDB_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/CIB_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/CMBC_OUT.gif" alt=""></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="" name="sex"><img src="images/BJRCB_OUT.gif" alt=""></label>
                    </div>
                </div>
            </div>
        </h6>
    </div>
    <div class="col-md-7  col-md-push-1 subspan">
        <div>
            <span style="font-size: 14px;  line-height: 20px;display: inline-block;  margin-right:50px; color: #888;">可用代金券金额：0.00元 </span>
            <a href="#">
                <button class="btn btn-danger">确认支付</button>
            </a>
        </div>
    </div>        
</div>
 </div>
 <?php 
     require './carfoot.php';
 ?>
