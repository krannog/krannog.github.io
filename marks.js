<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251"></head><body>text2 = '';
$(document).ready(function() {
	$(".block_lk_pum").click(function(){
		$(".block_lk_pam").show('');
		$(".block_lk_info").hide('');
		$(".block_lk_pum").hide('');
		$(".block_lk").addClass('block_lk_height');
	});
	$(".block_lk_pam").click(function(){
		$(".block_lk_pum").show('');
		$(".block_lk_info").show('');
		$(".block_lk_pam").hide('');
		$(".block_lk").removeClass('block_lk_height');
	});
});

text2 +='<div class="block_lk">';
text2 +='	<div class="block_lk_pum"></div>';
text2 +='	<div style="display:none;" class="block_lk_pam"></div>';
text2 +='	<div class="block_lk_info">';
				text2 +='			<form method="post" action="http://argemona.ru/marks.html">';
text2 +='				<div>';
text2 +='					<ul>';
text2 +='						<li>';
text2 +='							<span>Имя:</span>';
text2 +='							<input type="text" name="name">';
text2 +='						</li>';
text2 +='						<li>';
text2 +='							<span>Пароль:</span>';
text2 +='							<input type="password" name="pwd" value="">';
text2 +='						</li>';
text2 +='					</ul>';
text2 +='					<a href="http://argemona.ru/pass.html">забыли пароль?</a>';
text2 +='					<input type="submit" value="Войти" name="enter">';
text2 +='					';
text2 +='				</div>';
text2 +='			</form>';

		text2 +='	</div>';
text2 +='</div>';
document.write(text2);</body></html>