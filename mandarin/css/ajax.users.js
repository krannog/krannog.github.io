//Добавить эфир
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
						$('#leftColumn').notice_l({text:'Ошибка! Попробуйте ещё раз, в случае повторной неудачи, обратитесь к администратору радио.', type: 'error', sticked: false});
				}
            });
            return false;   }
                 //Конец добавления эфира
                 
                 //Удалить эфир
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
						$('#leftColumn').notice_l({text:'Ошибка! Попробуйте ещё раз, в случае повторной неудачи, обратитесь к администратору радио.', type: 'error', sticked: false});
				}
            });
            return false;   }
                 //Конец удаления эфира
                 
                 //Обновление расписания
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
                 //Конец обновления расписания
                 
                //Удалить эфир
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
						$('#leftColumn').notice_l({text:'Ошибка! Попробуйте ещё раз, в случае повторной неудачи, обратитесь к администратору радио.', type: 'error', sticked: false});
				}
            });
            return false;   }
                 //Конец удаления эфира
                 
                 //Обновление активности стола заказов
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
                 //Конец обновление активности стола заказов
                 
    //Добавить заказ
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
						$('#leftColumn').notice_l({text:'Ошибка! Попробуйте ещё раз, в случае повторной неудачи, обратитесь к администратору радио.', type: 'error', sticked: false});
				}
            });
            return false;   }
                 //Конец добавления заказа
//Обработаный заказ
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
						$('#leftColumn').notice_l({text:'Ошибка! Попробуйте ещё раз, в случае повторной неудачи, обратитесь к администратору радио.', type: 'error', sticked: false});
				}
            });
            return false;   }
                 //Конец обработанного заказа
//Отказаный заказ
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
						$('#leftColumn').notice_l({text:'Ошибка! Попробуйте ещё раз, в случае повторной неудачи, обратитесь к администратору радио.', type: 'error', sticked: false});
				}
            });
            return false;   }
                 //Конец отказанного заказа
                 
                 //Обновление стола заказов
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
                 //Конец обновления стола заказов
                 setInterval("show2();", 10000);