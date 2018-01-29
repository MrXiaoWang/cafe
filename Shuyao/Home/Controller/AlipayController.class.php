<?php
namespace Home\Controller;
use Think\Controller;
class AlipayController extends Controller {
  
	public function pay(){
        @date_default_timezone_set("PRC");
       //订购日期

        $order_date = date('Y-m-d');

        //订单号码主体（YYYYMMDDHHIISSNNNNNNNN）

        $order_id_main = date('YmdHis') . rand(10000000,99999999);

        //订单号码主体长度

        $order_id_len = strlen($order_id_main);

        $order_id_sum = 0;

        for($i=0; $i<$order_id_len; $i++){
        	$order_id_sum += (int)(substr($order_id_main,$i,1));
        }

        //唯一订单号码（YYYYMMDDHHIISSNNNNNNNNCC）

        $order_id = $order_id_main . str_pad((100 - $order_id_sum % 100) % 100,2,'0',STR_PAD_LEFT);	

        //商户订单号，商户网站订单系统中唯一订单号，必填
        $out_trade_no = $order_id;
        //订单名称，必填
        $proName = "蜀肴餐馆";
        //付款金额，必填
        $total_amount =I('get.money');
        //商品描述，可空
        $body = "蜀肴餐馆";
      
        Vendor('Alipay.aop.AopClient');
        Vendor('Alipay.aop.request.AlipayTradeWapPayRequest');
        //请求
        $c = new \AopClient();
      	
        $c->gatewayUrl = "https://openapi.alipaydev.com/gateway.do";
        $c->appId = '2016082700318505';
      
        $c->rsaPrivateKey = "MIIEpAIBAAKCAQEAvaILVPyU1xeZR97U+oiT6SNXBoE0LpNhbI33oOtBWEGMyhbF1C3+qJRfMh6r24poeX2zcL9w+qgCJLKODuNPj6qOcl6Pxda7zrZwqCyK074FEi2eXVWiksAMb7Lh7zVWNsqX5DCg4TnPsF7WJqicGp02TgVreRgP7jOeSt0dIxufGSx+UL2+FavmfxI61IEcPJim8MbLvwi0uw7hEBKg4eacoba7hLiSElAkATLSgGrJM6AB0vzd2C9J+7GFPwhFZ6zvk2A1/Q7QWfpAhKYi1VFhyd6OQ3gBeaLT0TnCX7uOE0MS/JLvTHRYUHfqkVXO5QxCnLL08kGvIdixz7BPTwIDAQABAoIBAQCIPpqBrw+JEk1wk6rVbbdHc7qc08uYAw+mHMHjfeLu8/mhYIc2EO28VQ2oRt0W2PSDBUsdII6dqIQRta/XBn4tLE834LTPYZ6BwBZk3cvIoeemzdvQFyy83vqQbidh5CJTL2+95SpRZ2XOw/R8xfuSK43OtJoo4J7hd3itNPwwMfWXH8WsGhhZB0nWogt/AGtsZOGTq4icZiZ8tTQofAmWz6X3ZUtYEtPmTGMAamHg6yA4ijCqO3ccrGgMPeZ1PKJsmzvdpBmbHZsEUwO47sIxdBKV393ynxR4j0Jq+4ggjCIcBqbZi3l+l4JC3qZ/lJaBLS91ogXDFu+h9Mqq7cIBAoGBAN67Hm3tNHTgiyTyMmhBKKGwA2RArVwh6PMDx/q/ciUeuAFDZju0flky3Wr4OTgGFy5VZLpHmfZbEyqw2D5ZDGnFxHY6fSiQumAdlVKgaogKt/vNlA+g4DVzgWofIWnmMtJdulJ4CxwDXJw8/ovASc2zi2zxlqIx992llv+xE6fPAoGBANn1T9W3A9zrwQp1gd93UxJ46/Ty26OcvUTC5xNjYgvQF+MxzSxfNH3qM2BVcT7Q8PEFu8oXkdPyqEqcGPMcNIMJmgzYL42bWiKyH7T3x/pvfKMeK8nKqDMQtk0pZt6czpqshAcvWBWEWVpaFUU1LVUH8hHyptM6nSlUTeSIG0CBAoGAAxX8mfFLZMMnql9gq2kbswHJSj5LKJefrp5CywqT/keqrPnOFM2vYnT99Fl0EX6kG5Q7TQlo7KzeWx0QIe0B6wU+b5Tn3wQCUQqX4wkt8KyVV/vFLWJBOPxcsqezws/ZrGh4CGR5Yu34/oEp1a3YV+1A5UWDnMOsd3mv2eMOLqkCgYEAsPqHQ9LiuR1ZV0PJHAoJE0PK3M/iVrzr1oyoE08siskCzIFgxznbJq7n3r4iQU5phlwQeu2ehMpRqpuLisQJQ6mlQ+661jIiA3A9XLWh1RF30/+osKb04tocHRWUKQiMnn2cizT/QiGAaGQjR1oBoDzea4JrwbKjcK66vOljr4ECgYB8tQIKjO4l0ortqhIwA6uwWez91I/IDNnMS1SDQhApWy41zdTMYjHEI1/XK/h/vs8/sNu2Dch9xTjxPTfML/RkFh5DzYncW0MsgpbOrSsX5U39FV8P6tHtUFyDFb61dD0+RUWAGK6VLFsV+jnaOls8JFPUdB8u0g98DGds7JMILw==";
        $c->format = "json";
        $c->postCharset= "UTF-8";
        $c->signType= "RSA2";
        $c->alipayrsaPublicKey = "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsFjpir3S7dzTsrvGD+iEksa8qU5sP8p+VDuvO8qX5+hbu0FiI+yBqggizdjVgwHwwwvny+2Te5KRVY5U0Q+Tt3TLTU0MTQ7VLT5nn/9yvqMeq+YAeQEE6fmFLPuTyzwWvgVpQXNp86tR0+arwbz2bSTZfQXAZPJXhjGjhESIyHUHuZQhyJW9pcTqpjoFvzgwJwM+wcaNevMis+wypws5mfojwYEmtW6RpjpI2mwkNJBAm6ciT54togqAJxA0/R63dyar7HaGiHLTn+fuJsIL5MeeM90BnEy1+HxBTUrt1zfINrkfmQd0EBbJmgbVnOr/HBMVR8AcYZCcH1krsnZlPwIDAQAB";
       
      	$request = new \AlipayTradeWapPayRequest();
        $request->setReturnUrl("http://xiaozhu.moreqian.xin/index.php/Home/Alipay/sure");
        $request->setNotifyUrl("http://xiaozhu.moreqian.xin/index.php/Home/Alipay/sure");
        $request->setBizContent("{" .
            "    \"product_code\":\"FAST_INSTANT_TRADE_PAY\"," .
            "    \"subject\":\"$proName\"," .
            "    \"out_trade_no\":\"$out_trade_no\"," .
            "    \"total_amount\":$total_amount," .
            "    \"body\":\"$body\"" .
            "  }");
     
        $result = $c->pageExecute ($request);
        //输出
        echo $result;
    }
    
   public function sure(){
    
    $u_phone = I("session.u_phone");
    
    //查出所有，用户的点菜数据
    $shopping = M("shoppingcart");
    
    $shopping->create();
    
    $menuid = $shopping->where("cart_uphone = '%s' and cart_isjiesuan = 0 ",$u_phone)->getField("cart_menuid",true);;
    
    $cart_number = $shopping->where("cart_uphone = '%s' and cart_isjiesuan = 0 ",$u_phone)->getField("cart_number",true);
    
    $order = M("order");
    
    $order->create();
    
    $num = "";
    
    for($i=0;$i<count($menuid)-1;$i++){
      $order->cz_id=1;
      $order->o_time = time();
      $order->o_chudan = 1;
      $order->user_id = $u_phone;
      $order->or_num = I('get.out_trade_no').$i;
      $menuinfo_id = $menuid[$i+1];
      $menuinfo_count = $cart_number[$i+1];
      $order->menuinfo_id = $menuinfo_id;
      $order->menuinfo_count = $menuinfo_count;
      $menu = M("menuinfo");
      
      $menuinfo_beforedis = $menu->where("id = '%s'",$menuinfo_id)->getField("minfo_original");
      $menuinfo_afterdis = $menu->where("id = '%s'",$menuinfo_id)->getField("minfo_price");
      
      $order->menuinfo_beforedis = $menuinfo_beforedis;
      $order->menuinfo_afterdis = $menuinfo_afterdis;
      $num +=$order->add();
    }
    
    if($num){
        $shopping->cart_isjiesuan = 1;
        $shopping->where("cart_uphone = '%s'",I("session.u_phone"))->save();
        $this->display('Our/index');

    }
  }

  
  
}