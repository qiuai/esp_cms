<?php

/*
  PHP version 5
  Copyright (c) 2002-2015
*/
if (isset($modulesid) && $modulesid == TRUE) {
	$i = isset($modules) ? count($modules) : 0;

	$modules[$i]['plugname'] = '宝付支付';

	$modules[$i]['code'] = basename(__FILE__, '.php');

	$modules[$i]['desc'] = '宝付支付';

	$modules[$i]['is_cod'] = '1';

	$modules[$i]['is_online'] = '1';

	$modules[$i]['pay_fee'] = '0';

	$modules[$i]['website'] = 'http://www.baofoo.com';

	$modules[$i]['version'] = '1.0.1';
	$modules[$i]['config'] = $config;
	$module[$i]['lang'] = $payment_lang;
	return $module;
}

class baofoopay extends connector {
	
	private $payment_lang = array(
		'name'	=>	'宝付支付',
		'baofoo_account'	=>	'商户号',
		'baofoo_key'		=>	'密钥',
		'baofoo_terminal'	=>	'终端号',
		'GO_TO_PAY'	=>	'前往宝付在线支付',
		'VALID_ERROR'	=>	'支付验证失败',
		'PAY_FAILED'	=>	'支付失败',
	
		'baofoo_gateway'	=>	'支持的银行',
		'baofoo_gateway_0'	=>	'网银支付（总）',
		//借记卡
		'baofoo_gateway_3001'	=>	'招商银行',
		'baofoo_gateway_3002'	=>	'工商银行',
		'baofoo_gateway_3003'	=>	'建设银行',
		'baofoo_gateway_3004'	=>	'浦发银行',
		'baofoo_gateway_3005'	=>	'农业银行',
		'baofoo_gateway_3006'	=>	'民生银行',
		'baofoo_gateway_3008'   =>	'深圳发展银行',
		'baofoo_gateway_3009'	=>	'兴业银行',
		'baofoo_gateway_3020'	=>	'交通银行',
		'baofoo_gateway_3022'	=>	'光大银行',
		'baofoo_gateway_3026'	=>	'中国银行',
		'baofoo_gateway_3032'	=>	'北京银行',
		'baofoo_gateway_3033'	=>	'BEA 东亚银行',
		'baofoo_gateway_3034'	=>	'渤海银行',
		'baofoo_gateway_3035'	=>	'平安银行',
		'baofoo_gateway_3036'	=>	'广发银行',
		'baofoo_gateway_3037'	=>	'上海农商银行',
		'baofoo_gateway_3038'	=>	'中国邮政储蓄银行',
		'baofoo_gateway_3039'	=>	'中信银行',
		'baofoo_gateway_3046'	=>	'宁波银行',
		'baofoo_gateway_3047'	=>	'日照银行',
		'baofoo_gateway_3048'	=>	'河北银行',
		'baofoo_gateway_3049'	=>	'湖南省农信联合社',
		'baofoo_gateway_3050'	=>	'华夏银行',
		'baofoo_gateway_3051'	=>	'威海市商业银行',
		'baofoo_gateway_3054'	=>	'重庆农村商业银行',
		'baofoo_gateway_3055'	=>	'大连银行',
		'baofoo_gateway_3056'	=>	'东莞银行',
		'baofoo_gateway_3057'	=>	'富滇银行',
		'baofoo_gateway_3059'	=>	'上海银行',
		'baofoo_gateway_3080'	=>	'银联在线',
		
		//信用卡
		'baofoo_gateway_4001'	=>	'招商银行',
		'baofoo_gateway_4002'	=>	'中国工商银行',
		'baofoo_gateway_4003'	=>	'中国建设银行',
		'baofoo_gateway_4004'	=>	'上海浦东发展银行',
		'baofoo_gateway_4005'	=>	'中国农业银行',
		'baofoo_gateway_4006'	=>	'中国民生银行',
		'baofoo_gateway_4008'	=>	'深圳发展银行',
		'baofoo_gateway_4009'	=>	'兴业银行',
		'baofoo_gateway_4020'	=>	'中国交通银行',
		'baofoo_gateway_4022'	=>	'中国光大银行',
		'baofoo_gateway_4026'	=>	'中国银行',
		'baofoo_gateway_4032'	=>	'北京银行',
		'baofoo_gateway_4033'	=>	'BEA东亚银行	',
		'baofoo_gateway_4034'	=>	'渤海银行',
		'baofoo_gateway_4035'	=>	'平安银行',
		'baofoo_gateway_4036'	=>	'广发银行',
		'baofoo_gateway_4037'	=>	'上海农商银行	',
		'baofoo_gateway_4038'	=>	'中国邮政储蓄银行',
		'baofoo_gateway_4039'	=>	'中信银行',
		'baofoo_gateway_4046'	=>	'宁波银行',
		'baofoo_gateway_4047'	=>	'日照银行',
		'baofoo_gateway_4048'	=>	'河北银行',
		'baofoo_gateway_4049'	=>	'湖南省农信联合社',
		'baofoo_gateway_4050'	=>	'华夏银行',
		'baofoo_gateway_4051'	=>	'威海市商业银行',
		'baofoo_gateway_4054'	=>	'重庆农村商业银行',
		'baofoo_gateway_4055'	=>	'大连银行',
		'baofoo_gateway_4056'	=>	'东莞银行',
		'baofoo_gateway_4057'	=>	'富滇银行',
		'baofoo_gateway_4059'	=>	'上海银行',
		'baofoo_gateway_4080'	=>	'银联在线',
	
	);
	
	private $config = array(
		'baofoo_account'	=>	array(
			'INPUT_TYPE'	=>	'0'
		), //支付宝帐号: 
		'baofoo_key'	=>	array(
			'INPUT_TYPE'	=>	'0'
		), //校验码
		'baofoo_terminal'	=>	array(
			'INPUT_TYPE'	=>	'0'
		), //终端号
		'baofoo_gateway'	=>	array(
			'INPUT_TYPE'	=>	'3',
			'VALUES'	=>	array(
					'0',//'网银支付（总）',
					
					//借记卡
					'3001',//'招商银行',
					'3002',//'工商银行',
					'3003',//'建设银行',
					'3004',//'浦发银行',
					'3005',//'农业银行',
					'3006',//'民生银行',
					'3008',//深圳发展银行	
					'3009',//'兴业银行',
					'3020',//'交通银行',
					'3022',//'光大银行',
					'3026',//'中国银行',
					'3032',//北京银行
					'3033',//东亚银行
					'3034',//渤海银行
					'3035',//'平安银行',
					'3036',//广发银行
					'3037',//上海农商银行
					'3038',//'中国邮政储蓄银行',
					'3039',//'中信银行',
					'3046',//'宁波银行',
					'3047',//'日照银行',
					'3048',//'河北银行',
					'3049',//'湖南省农村信用社联合社',
					'3050',//'华夏银行',
					'3051',//'威海市首页银行',
					'3054',//'重庆农村商业银行',
					'3055',//'大连银行',
					'3056',//'东莞银行',
					'3057',//'富滇银行',
					'3059',//'上海银行',
					'3080',//'银联在线',
					
					//信用卡
					'4001',//招商银行
					'4002',//中国工商银行
					'4003',//中国建设银行
					'4004',//上海浦东发展银行
					'4005',//中国农业银行
					'4006',//中国民生银行
					'4008',//深圳发展银行
					'4009',//兴业银行	
					'4020',//中国交通银行
					'4022',//中国光大银行	
					'4026',//中国银行
					'4032',//北京银行	
					'4033',//BEA东亚银行	
					'4034',//渤海银行	
					'4035',//平安银行	
					'4036',//广发银行|CGB
					'4037',//上海农商银行	
					'4038',//中国邮政储蓄银行
					'4039',//中信银行
					'4046',//宁波银行	
					'4047',//日照银行	
					'4048',//河北银行	
					'4049',//湖南省农村信用社联合社
					'4050',//华夏银行
					'4051',//威海市商业银行
					'4054',//重庆农村商业银行	
					'4055',//大连银行	
					'4056',//东莞银行	
					'4057',//富滇银行	
					'4059',//上海银行	
					'4080',//银联在线	
				)
		), //可选的银行网关
	);

	function bfopay() {
		$this->softbase(false);
        $this->config['baofoo_account'] = '100000178';
        $this->config['baofoo_key'] = '10000001';
        $this->config['baofoo_terminal'] = 'abcdefg';
        $this->config['baofoo_gateway'] = 'http://tgw.bfopay.com/payindex'; // 测试地址
        //$this->config['baofoo_gateway'] = 'http://gw.bfopay.com/payindex'; // 正式地址
	}

	function __construct() {
		$this->bfopay();
	}

	function get_code($oprid) {
		
		$payment_info = $this->db->getRow("select * from ".db_prefix."order_payreceipt where oprid=$oprid");
		
		$payment_notice = $this->db->getRow("select * from ".db_prefix."order where oid=".$payment_info['oid']);
		
		$_TransID = $payment_notice['order_sn'];
		$_OrderMoney = round($payment_notice['productmoney'],2);
		$_Username = $payment_notice['username'];
		
		$_Merchant_url =  admin_rootDIR.'baofoo_response.php';
        $_Return_url = admin_rootDIR.'baofoo_notify.php';
        
        /* 交易日期 */
        $_TradeDate = date('YmdHis',$payment_notice['create_time']);
		$_MerchantID = $this->config['baofoo_account'];
        $_PayID = $payment_info['bankid'];
		if(intval($_PayID) == 1000 || intval($_PayID)==0){
			$_PayID = "";
		}
        $_NoticeType = 1;
        $_Md5Key = $this->config['baofoo_key'];
        $_TerminalID = $this->config['baofoo_terminal'];
       
		$_AdditionalInfo = $oprid;
		$_Md5_OrderMoney = $_OrderMoney*100;
		$MARK = "|";
      	$_Signature=md5($_MerchantID.$MARK.$_PayID.$MARK.$_TradeDate.$MARK.$_TransID.$MARK.$_Md5_OrderMoney.$MARK.$_Merchant_url.$MARK.$_Return_url.$MARK.$_NoticeType.$MARK.$_Md5Key);
        /*交易参数*/
        $parameter = array(
            'MemberID' => $_MerchantID,
            'TransID' => $_TransID,//流水号
			'PayID' => $_PayID,//支付方式
			'TradeDate' => $_TradeDate,//交易时间
			'OrderMoney' => $_OrderMoney*100,//订单金额
			'ProductName' => $_TransID,//产品名称
			'Amount' => 1,//数量
			'ProductLogo' => '',//产品logo
			'Username' => $_Username,//支付用户名
			'AdditionalInfo' => $_AdditionalInfo,//订单附加消息
			'PageUrl' => $_Merchant_url,//商户通知地址 
			'ReturnUrl' => $_Return_url,//用户通知地址
			'NoticeType' => $_NoticeType,//通知方式
			'Signature'=>$_Signature,
			'TerminalID'=>$_TerminalID,
			'InterfaceVersion'=> "4.0",
			'KeyType'=> "1"
        );
		
		foreach ($parameter AS $key => $val) {
            $def_url .= "$key=$val&";
        }
		
		$pay_url = $this->config['baofoo_gateway']."?".$def_url;
		
		return $pay_url;
	}
	
	function get_display_code(){
		$payment_item = $this->db->getRow("select * from ".db_prefix."order_pay where paycode='baofoopay'");
		if($payment_item){
			$display = file_get_contents(admin_ROOT . 'public/plug/payment/baofoopay_'.admin_LNG.'.html');
		}
		return $display;
	}

	function response($request) {
		$return_res = array(
            'info' => '',
            'status' => false,
        );
		
        /* 取返回参数 */
        $MemberID=$request['MemberID'];//商户号
		$TerminalID =$request['TerminalID'];//商户终端号
		$TransID =$request['TransID'];//商户流水号
		$Result=$request['Result'];//支付结果
		$ResultDesc=$request['ResultDesc'];//支付结果描述
		$FactMoney=$request['FactMoney'];//实际成功金额
		$AdditionalInfo=$request['AdditionalInfo'];//订单附加消息
		$SuccTime=$request['SuccTime'];//支付完成时间
		$Md5Sign=$request['Md5Sign'];//md5签名
		

        /*获取支付信息*/
    	
		$_Md5Key= $this->config['baofoo_key'];
		$payment_notice_sn = $AdditionalInfo;
		$gopayOutOrderId =  $TransID;
		
		$MARK = "~|~";
        /*比对连接加密字符串*/
		$WaitSign=md5('MemberID='.$MemberID.$MARK.'TerminalID='.$TerminalID.$MARK.'TransID='.$TransID.$MARK.'Result='.$Result.$MARK.'ResultDesc='.$ResultDesc.$MARK.'FactMoney='.$FactMoney.$MARK.'AdditionalInfo='.$AdditionalInfo.$MARK.'SuccTime='.$SuccTime.$MARK.'Md5Sign='.$_Md5Key);

        if ($Md5Sign != $WaitSign) {
			$return_res['info'] = '无效订单';
        } else {
			$time = time();
	        $is_paid = $this->db->query("update ".db_prefix."order set ordertype=2, paytime=$time, paymoney='$FactMoney', paysn='$TransID' where oid = $payment_notice_sn");
			if ($is_paid == 1){
				$return_res['info'] = '支付成功';
				$return_res['status'] = true;
			}else{
				$return_res['info'] = '支付成功，充值失败';
				$return_res['status'] = true;
			}
        }

		$return_res['oid'] = $AdditionalInfo;

		return $return_res;
    }
	
	function notify($request) {
		$return_res = array(
            'info' => '',
            'status' => false,
        );
		
        /* 取返回参数 */
        $MemberID=$request['MemberID'];//商户号
		$TerminalID =$request['TerminalID'];//商户终端号
		$TransID =$request['TransID'];//商户流水号
		$Result=$request['Result'];//支付结果
		$ResultDesc=$request['ResultDesc'];//支付结果描述
		$FactMoney=$request['FactMoney'];//实际成功金额
		$AdditionalInfo=$request['AdditionalInfo'];//订单附加消息
		$SuccTime=$request['SuccTime'];//支付完成时间
		$Md5Sign=$request['Md5Sign'];//md5签名
		

        /*获取支付信息*/
    	
		$_Md5Key= $this->config['baofoo_key'];
		$payment_notice_sn = $AdditionalInfo;
		$gopayOutOrderId =  $TransID;
		
		$MARK = "~|~";
        /*比对连接加密字符串*/
		$WaitSign=md5('MemberID='.$MemberID.$MARK.'TerminalID='.$TerminalID.$MARK.'TransID='.$TransID.$MARK.'Result='.$Result.$MARK.'ResultDesc='.$ResultDesc.$MARK.'FactMoney='.$FactMoney.$MARK.'AdditionalInfo='.$AdditionalInfo.$MARK.'SuccTime='.$SuccTime.$MARK.'Md5Sign='.$_Md5Key);

        if ($Md5Sign != $WaitSign) {
			$return_res['info'] = 'Md5CheckFail';
			$return_res['status'] = true;
        } else {
			$time = time();
	        $is_paid = $this->db->query("update ".db_prefix."order set ordertype=2, paytime=$time, paymoney='$FactMoney', paysn='$TransID' where oid = $payment_notice_sn");
			if ($is_paid == 1){
				$return_res['info'] = 'ok';
				$return_res['status'] = true;
			}else{
				$return_res['info'] = 'ok';
				$return_res['status'] = true;
			}
        }

		$return_res['oid'] = $AdditionalInfo;

		return $return_res;
    }

}

?>