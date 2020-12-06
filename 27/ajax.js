$(document).ready(function() {
	$(".main_menu").click(function(){
		if($(this).find(".in_menu").is(":hidden"))
		{
			$(".in_menu:visible").slideUp('');
			$(this).find(".in_menu").slideDown('');
		}
		else
		{
			$(".in_menu:visible").slideUp(''); 
		}
	});
});

function user_new(type){
	document.getElementById('my_info').style.display = "none";
	document.getElementById('new_info').style.display = "none";
	if(type=='0'){
		document.getElementById('new_info').style.display = "table";
	}else if(type=='1'){
		document.getElementById('my_info').style.display = "table";
	}
}
function status_blur( value, status_img, re ) {
	if ( value == '' ) {
		status_img.src = "../files/style/site/required.png";
		status_img.title = "Значение указано неверно";
	}
	else if ( re.test(value) ) {
		status_img.src = "../files/style/site/validated.png";
		status_img.title = "Значение корректно";
	}
	else {
		status_img.src = "../files/style/site/invalid.png";
		status_img.title = "Пишите разумное количество информации. Мало - плохо. Но и много - тоже нехорошо!";
	}
}
function status_blur_mail( value, status_img, re ) {
	if ( value == '' ) {
		status_img.src = "../files/style/site/required.png";
		status_img.title = "Значение указано неверно";
	}
	else if ( re.test(value) ) {
		status_img.src = "../files/style/site/validated.png";
		status_img.title = "Значение корректно";
	}
	else {
		status_img.src = "../files/style/site/required.png";
		status_img.title = "Значение указано неверно";
	}
}
function status_repeat(value1,value2,status_img) {
	if ( value2 == '' ) {
		status_img.src = "../files/style/site/required.png";
		status_img.title = "Значение указано неверно";
	}
	else if ( value1 == value2 & value1 != '' ) {
		status_img.src = "../files/style/site/validated.png";
		status_img.title = "Адреса совпадают";
	}
	else {
		status_img.src = "../files/style/site/invalid.png";
		status_img.title = "Адреса не совпадают";
	}
}
function status_click( status_img ) {
	status_img.src = "../files/style/site/editing.png";
}

function status_keypress( status_img ) {
	status_img.src="../files/style/site/editing.png";
}
function name_new(name,url,type){
	if(name){
		var elem = document.createElement("script");
		obj=document.body.insertBefore(elem, document.body.firstChild);
		obj.setAttribute("id", "js");
		obj.setAttribute("language", "Javascript");
		obj.setAttribute("type", "text/javascript");
		Query = "?name=" + name + "&type=" + type;
		obj.setAttribute("src", url + Query);
	}
}
function textLook(text) {
	document.getElementById('text' + text).style.display = "";
}
function textLookNo(text) {
	document.getElementById('text' + text).style.display = "none";
}
function guest_type(type,guest_id) {
	if(type=='block'){
		document.getElementById('guestForm').style.display = "";
		document.getElementById('guestForm2').style.display = "";
		document.getElementById('guest_id').value = guest_id;
	}else{
		document.getElementById('guestForm').style.display = "none";
		document.getElementById('guestForm2').style.display = "none";
	}
}
function takePiksiElse(typepiksi,textpiksi){
	if(textpiksi) {
        var elem1 = document.createElement('script');
        var url1 = '../../../../files/pages/piksi.php';
        obj1 = document.body.insertBefore(elem1, document.body.firstChild);
        obj1.setAttribute('id', 'js');
        obj1.setAttribute('language', 'Javascript');
        obj1.setAttribute('type', 'text/javascript');
        Query1 = '?type=' + typepiksi;
        obj1.setAttribute('src', url1 + Query1);
        alert(textpiksi);
        $('#piksi').css('display', 'none');
    }
}
function takePrize(id,ware,type,indbuy){
	if(id) {
        var elem1 = document.createElement('script');
        var url1 = '../../../../files/pages/takeWare.php';
        obj1 = document.body.insertBefore(elem1, document.body.firstChild);
        obj1.setAttribute('id', 'js');
        obj1.setAttribute('language', 'Javascript');
        obj1.setAttribute('type', 'text/javascript');
        if (document.getElementById('dop_value')) {
            dop_value = document.getElementById('dop_value').value;
        } else {
            dop_value = '';
        }
        Query1 = '?type=' + type + '&id=' + id + '&ware=' + ware + '&indbuy=' + indbuy;
        obj1.setAttribute('src', url1 + Query1);
    }
}
function takePiksiGo(type,text){
	if(type) {
        var elem1 = document.createElement('script');
        var url1 = '../../../../files/pages/piksi.php';
        obj1 = document.body.insertBefore(elem1, document.body.firstChild);
        obj1.setAttribute('id', 'js');
        obj1.setAttribute('language', 'Javascript');
        obj1.setAttribute('type', 'text/javascript');
        Query1 = '?type=' + type;
        obj1.setAttribute('src', url1 + Query1);
        alert(text);
        $('#piksi').css('display', 'none');
    }
}