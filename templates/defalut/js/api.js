var Api = {
	visitorIp : null,
	visitorCountry : null,
	visitorCountryId : null,
	visitorPrefix : null,
	visitor : null,
	countryBlocked : false,
	regAllowrd : true,
	countryObject : null,
	apiUrl : null,
	customer : null,
    phase : 1,

	init : function () {
		Api.getReutersTicker();
		
		if (true == SO.model.Customer.isLoggedIn()) {
			 $('#ucenter').show();
			 $('#login').hide();
			 var id = SO.model.Customer.currentCustomer.id;
			 Api.customer = SO.model.Customer.currentCustomer;
			 Api.buildPersonalHeader();
		} else {
			 $('#login').show();
			 $('#ucenter').hide();
		}
		$('#shclColor').hide();
		Api.getGeoData();
		Api.getCountries();
		
		$('#loginBtn').click(function () {   
               
        $('#lgbtn').hide();
        $('#lgloding').show();
        
        SO.model.Customer.login({
               email : $("#email").val(),
               password : $("#password").val(),
               onSuccess : function (data) {                         
                       location.reload();                            
               },
               onError : function (data) {
                       alert(SiteSettings.terms.apiLoginOnError);
               },
               onFail : function (err) {
                       alert(SiteSettings.terms.apiLoginOnFail + err);
               }
        });
        
        return false; 
        
});
		/*
		$('#loginBtn').click(function () {   
			var email = $("#email").val();
			var password = $("#password").val();
			var extRedir = $("#extRedir").val()
			if(email==""){
				alert('邮箱不能为空');
				return false;
			}
			if(password==""){
				alert('密码不能为空');
				return false;
			}
			
			$('#lgbtn').hide();
			$('#lgloding').show();
			
			$.ajax({ 
				url: '../api/login.php', 
				type: "POST", 
				dataType : 'json',  
				data: {"email":email,"password":password}, 
				success: function(result){  
					//alert(result.status.Customer.data_authKey);
					console.log(result);
					if(result.code == -1){
						$('#lgbtn').show();
						$('#lgloding').hide();
						alert('账号或密码错误！');
					}
					else{
						SO.model.Customer.loginByAuth({ 
					        auth : result.status.Customer.data_authKey,
					        onFail :  function(){ 
					            //alert('Failed to login!'); 
					        }, 
					        onError : function(){ 
					            //alert('Failed to login! Network error occurred'); 
					        }, 
					        onSuccess : function(){ 
					            //alert('Logged in successfuly'); 
					            window.location.href= extRedir;
					            //document.location.reload(); 
					        } 
					    }); 
					}
					
				} 
				 
			}); 
			
			return false; 
			
		});
		*/
		
		
		
		
		
		$('#loginOut').click(function () {
			SO.model.Customer.logout({
				onFail : function () {
					location.reload();
				},
				onSuccess : function () {
					//SO.model.Customer.onLogout();
					SO.lib.SessionMgr.destroy();
					SO.packages.Common.Loader.getWebstorageMgr('customer').remove();
					$.removeCookie('customerId',SO.lib.SessionMgr.getCookieOptions());
					location.reload();

				}
			});

			return false;
		});
		
		if (!isNaN($('#so_container')))
			SpotOption.load("#so_container", 'en');
		
	},

	

	/***
	 *	Function 		: 	buildPersonalHeader
	 *	Functionality 	: 	Updates the login area
	 *	Parameters		: 	user object
	 *	Requries		: 	User must me loggedin | getCustomerDetails()
	 *
	 ***/
	buildPersonalHeader : function () {
		var logedin = $('#loggedInBox');

		console.log(SO.model.Customer.currentCustomer.FirstName)
		$('#cBlack').text('欢迎您: ' + SO.model.Customer.currentCustomer.FirstName + ' ' + SO.model.Customer.currentCustomer.LastName)
        /*
		$('#userLoginForm').remove();
		if (general.customAfterLogin)
			general.customAfterLogin();
		else
			$('.menu-topnav-container a').removeAttr('title');
		*/
	},



	/***
	 *	Function 		: 	loginSubmit
	 *	Functionality 	: 	Login the user to the system
	 *	Parameters		: 	url
	 *	Requries		: 	Login Form
	 *
	 ***/
	loginSubmit : function (url) {                
		SO.model.Customer.login({
			email : $('#userLoginForm input[name="email"]').val(),
			password : $('#userLoginForm input[name="password"]').val(),
			onSuccess : function (data) {
                                if (SiteSettings.oldIE){
                                        Api.phase = 2;
                                        $('#userLoginForm').submit();
                                        return;
                                }
                                    
			
				if (typeof(url) == "undefined")
					location.reload();
				else
					window.location = url;
				//Api.customer = SO.model.Customer.fetchCustomer();
				//Api.buildPersonalHeader();
				//console.log(Api.customer);
			},
			onError : function (data) {
				alert(SiteSettings.terms.apiLoginOnError);
			},
			onFail : function (err) {
				alert(SiteSettings.terms.apiLoginOnFail + err);
			}
		});

	},

	
	getReutersTicker : function () {
		$.ajax({
			url : 'http://spotplatform.qooptions.com/RPCWP/getJsonFile/LastOptions.json',
			type : "POST",
			dataType : 'json',
			success : function (result) {
				 //console.log(result);
				var marquee = '<marquee id="reuters" behavior="scroll" scrollamount="3" direction="left"  onmouseover="this.stop();" onmouseout="this.start();">';
				var Container = $('#marqueeTopParent');
				$.each(result, function (key, asset) {
					if (asset.color == 1)
						marquee += '<span class="up" style="padding:0 10px;">' + '  ' + asset.assetName + ' ' + asset.endRate + ' ' + asset.endDate + '</span>';
					else
						marquee += '<span class="drop" style="padding:0 10px;">' + asset.assetName + ' ' + asset.endRate + ' ' + asset.endDate + '</span>';
				});
				marquee += '</marquee>';
				$(Container).append(marquee);

			}
		});

	},
	
	getGeoData : function () {
		$.getJSON('http://spotplatform.qooptions.com/RPCWP/visitorData', function (result) {
			Api.visitorIp = result.ip;
			Api.visitorCountry = result.country;
			Api.countryBlocked = result.countryBlocked;
			Api.regAllowrd = result.regAllowrd;

		});
	},

	getCountries : function () {
		var urlCountry = 'http://spotplatform.qooptions.com/RPCWP/getJsonFile/Countries.json';
		$.ajax({
			url : urlCountry,
			type : "POST",
			dataType : 'json',
			success : function (result) {
				var selected = null;
				var container = $('select.countrylist');
				container.children('option').remove();
				Api.countryObject = result;
				
				$.each(result, function (key, country) {
					if (country.iso == Api.visitorCountry) {
						Api.visitorCountryId = country.id;
						//$('form#needHelp input[name="prefix"]').val(country.prefix);
					}
					var html = '<option value="' + country.id + '" prefix="' + country.prefix + '" >' + country.name + '</option>';
					container.append(html);
				})

				container.val(Api.visitorCountryId);
				if (typeof $('input[name="Prefix"]') == 'object')
					$('input[name="Prefix"]').val($('input[name="phone_area"]').val());
					//$('input[name="Prefix"]').val($('form#needHelp select :selected').attr('prefix'));
				if (typeof $('input[name="phone_prefix"]') == 'object')
					$('input[name="phone_prefix"]').val($('input[name="phone_area"]').val());
					//$('input[name="phone_prefix"]').val($('select#country :selected').attr('prefix'));

				if ($(".countrylist").css('direction') == 'rtl') {
					$(".countrylist").addClass('chzn-rtl');
				}
				$(".countrylist").chosen({});
				$('.countrylist').show();

			}
		});
	},
	

	setCookie : function (c_name, value, extime) {
		var date = new Date();
		date.setTime(date.getTime() + extime * 60);
		var c_value = escape(value) + ((extime == null) ? "" : "; expires=" + date.toUTCString());
		document.cookie = c_name + "=" + c_value + ";path=/";
	},

	addFunctionalCookie : function (data, cname) {
		var c_name = cname;
		var value = data;
		var extime = 5 * 60;
		Api.setCookie(c_name, value, extime);
	}

}

$(document).bind('spotoptionPlugin.ready', Api.init);