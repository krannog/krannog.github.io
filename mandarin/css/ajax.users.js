//Р”РѕР±Р°РІРёС‚СЊ СЌС„РёСЂ
        function Ajax_timetable(url,form_id) {
            jQuery.ajax({
                url:    url, 
                type:     "POST", 
                dataType: "html",
                data: jQuery("#"+form_id).serialize(), 
				success: function(response) { 
								$('#content').notice_l({text: response, type: 'success', sticked: false});
						show() ;
				},
				error: function(response) { 
						$('#leftColumn').notice_l({text:'РћС€РёР±РєР°! РџРѕРїСЂРѕР±СѓР№С‚Рµ РµС‰С‘ СЂР°Р·, РІ СЃР»СѓС‡Р°Рµ РїРѕРІС‚РѕСЂРЅРѕР№ РЅРµСѓРґР°С‡Рё, РѕР±СЂР°С‚РёС‚РµСЃСЊ Рє Р°РґРјРёРЅРёСЃС‚СЂР°С‚РѕСЂСѓ СЂР°РґРёРѕ.', type: 'error', sticked: false});
				}
            });
            return false;   }
                 //РљРѕРЅРµС† РґРѕР±Р°РІР»РµРЅРёСЏ СЌС„РёСЂР°
                 
                 //РЈРґР°Р»РёС‚СЊ СЌС„РёСЂ
        function Ajax_del_timetable(url,form_id) {
            jQuery.ajax({
                url:    url, 
                type:     "POST", 
                dataType: "html",
                data: jQuery("#"+form_id).serialize(), 
				success: function(response) { 
								$('#content').notice_l({text: response, type: 'success', sticked: false});
						show() ;
				},
				error: function(response) { 
						$('#leftColumn').notice_l({text:'РћС€РёР±РєР°! РџРѕРїСЂРѕР±СѓР№С‚Рµ РµС‰С‘ СЂР°Р·, РІ СЃР»СѓС‡Р°Рµ РїРѕРІС‚РѕСЂРЅРѕР№ РЅРµСѓРґР°С‡Рё, РѕР±СЂР°С‚РёС‚РµСЃСЊ Рє Р°РґРјРёРЅРёСЃС‚СЂР°С‚РѕСЂСѓ СЂР°РґРёРѕ.', type: 'error', sticked: false});
				}
            });
            return false;   }
                 //РљРѕРЅРµС† СѓРґР°Р»РµРЅРёСЏ СЌС„РёСЂР°
                 
                 //РћР±РЅРѕРІР»РµРЅРёРµ СЂР°СЃРїРёСЃР°РЅРёСЏ
                 function show()  
        {  
            $.ajax({  
                url: "/mandarin/software/timetable_now.php",  
                cache: false,  
                success: function(html){  
                    $("#dj_timetable_content").html(html);  
                }  
            });  
        }  
                 //РљРѕРЅРµС† РѕР±РЅРѕРІР»РµРЅРёСЏ СЂР°СЃРїРёСЃР°РЅРёСЏ
                 
                //РЈРґР°Р»РёС‚СЊ СЌС„РёСЂ
        function Ajax_off_on(url,form_id) {
            jQuery.ajax({
                url:    url, 
                type:     "POST", 
                dataType: "html",
                data: jQuery("#"+form_id).serialize(), 
				success: function(response) { 
								$('#content').notice_l({text: response, type: 'success', sticked: false});
						show1() ;
				},
				error: function(response) { 
						$('#leftColumn').notice_l({text:'РћС€РёР±РєР°! РџРѕРїСЂРѕР±СѓР№С‚Рµ РµС‰С‘ СЂР°Р·, РІ СЃР»СѓС‡Р°Рµ РїРѕРІС‚РѕСЂРЅРѕР№ РЅРµСѓРґР°С‡Рё, РѕР±СЂР°С‚РёС‚РµСЃСЊ Рє Р°РґРјРёРЅРёСЃС‚СЂР°С‚РѕСЂСѓ СЂР°РґРёРѕ.', type: 'error', sticked: false});
				}
            });
            return false;   }
                 //РљРѕРЅРµС† СѓРґР°Р»РµРЅРёСЏ СЌС„РёСЂР°
                 
                 //РћР±РЅРѕРІР»РµРЅРёРµ Р°РєС‚РёРІРЅРѕСЃС‚Рё СЃС‚РѕР»Р° Р·Р°РєР°Р·РѕРІ
                 function show1()  
        {  
            $.ajax({  
                url: "/mandarin/software/off_on_now.php",  
                cache: false,  
                success: function(html){  
                    $("#orderActive").html(html);  
                }  
            });  
        }  
                 //РљРѕРЅРµС† РѕР±РЅРѕРІР»РµРЅРёРµ Р°РєС‚РёРІРЅРѕСЃС‚Рё СЃС‚РѕР»Р° Р·Р°РєР°Р·РѕРІ
                 
    //Р”РѕР±Р°РІРёС‚СЊ Р·Р°РєР°Р·
        function Ajax_order_add(url,form_id) {
            jQuery.ajax({
                url:    url, 
                type:     "POST", 
                dataType: "html",
                data: jQuery("#"+form_id).serialize(), 
				success: function(response) { 
								$('#content').notice_l({text: response, type: 'success', sticked: false});
				$('#name').val('');
				$('#music').val('');
				$('#editor').val('');
				
				},
				error: function(response) { 
						$('#leftColumn').notice_l({text:'РћС€РёР±РєР°! РџРѕРїСЂРѕР±СѓР№С‚Рµ РµС‰С‘ СЂР°Р·, РІ СЃР»СѓС‡Р°Рµ РїРѕРІС‚РѕСЂРЅРѕР№ РЅРµСѓРґР°С‡Рё, РѕР±СЂР°С‚РёС‚РµСЃСЊ Рє Р°РґРјРёРЅРёСЃС‚СЂР°С‚РѕСЂСѓ СЂР°РґРёРѕ.', type: 'error', sticked: false});
				}
            });
            return false;   }
                 //РљРѕРЅРµС† РґРѕР±Р°РІР»РµРЅРёСЏ Р·Р°РєР°Р·Р°
//РћР±СЂР°Р±РѕС‚Р°РЅС‹Р№ Р·Р°РєР°Р·
        function Ajax_check(url,form_id) {
            jQuery.ajax({
               url:    url, 
                type:     "POST", 
                dataType: "html",
                data: jQuery("#"+form_id).serialize(),
				success: function(response) { 
								$('#content').notice_l({text: response, type: 'success', sticked: false});
						 show2(); 
				},
				error: function(response) { 
						$('#leftColumn').notice_l({text:'РћС€РёР±РєР°! РџРѕРїСЂРѕР±СѓР№С‚Рµ РµС‰С‘ СЂР°Р·, РІ СЃР»СѓС‡Р°Рµ РїРѕРІС‚РѕСЂРЅРѕР№ РЅРµСѓРґР°С‡Рё, РѕР±СЂР°С‚РёС‚РµСЃСЊ Рє Р°РґРјРёРЅРёСЃС‚СЂР°С‚РѕСЂСѓ СЂР°РґРёРѕ.', type: 'error', sticked: false});
				}
            });
            return false;   }
                 //РљРѕРЅРµС† РѕР±СЂР°Р±РѕС‚Р°РЅРЅРѕРіРѕ Р·Р°РєР°Р·Р°
//РћС‚РєР°Р·Р°РЅС‹Р№ Р·Р°РєР°Р·
        function Ajax_delete(url,form_id) {
            jQuery.ajax({
                url:    url, 
                type:     "POST", 
                dataType: "html",
                data: jQuery("#"+form_id).serialize(),
				success: function(response) { 
								$('#content').notice_l({text: response, type: 'success', sticked: false});
						  show2();
				},
				error: function(response) { 
						$('#leftColumn').notice_l({text:'РћС€РёР±РєР°! РџРѕРїСЂРѕР±СѓР№С‚Рµ РµС‰С‘ СЂР°Р·, РІ СЃР»СѓС‡Р°Рµ РїРѕРІС‚РѕСЂРЅРѕР№ РЅРµСѓРґР°С‡Рё, РѕР±СЂР°С‚РёС‚РµСЃСЊ Рє Р°РґРјРёРЅРёСЃС‚СЂР°С‚РѕСЂСѓ СЂР°РґРёРѕ.', type: 'error', sticked: false});
				}
            });
            return false;   }
                 //РљРѕРЅРµС† РѕС‚РєР°Р·Р°РЅРЅРѕРіРѕ Р·Р°РєР°Р·Р°
                 
                 //РћР±РЅРѕРІР»РµРЅРёРµ СЃС‚РѕР»Р° Р·Р°РєР°Р·РѕРІ
                 function show2()  
        {  
            $.ajax({  
                url: "/mandarin/software/order_now.php",  
                cache: false,  
                success: function(html){  
                    $("#dj_order_content").html(html);  
                }  
            });  
        }  
                 //РљРѕРЅРµС† РѕР±РЅРѕРІР»РµРЅРёСЏ СЃС‚РѕР»Р° Р·Р°РєР°Р·РѕРІ
                 setInterval("show2();", 10000);