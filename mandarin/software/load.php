 <? session_start();
           include("bd.php");
 
        $order_data=mysql_query("SELECT * FROM `order_conf` WHERE `conf`='off_on'");
      $order = mysql_fetch_array($order_data);
      
        if($order['active']=='1'){
        echo'
        <div class="order">
        <span class="nameTable">Сделать заказ<a id="various1" href="#inline1"></a></span>
       <div class="order_content">
	<div style="display: none;">
		<div id="inline1" style="width:530px;height:450px;overflow:auto;">
<p>Для заказа песни обязательно представьтесь. (Даже выбирая пункт «Аноним»)</p>
<p>Выберите пункт «Аноним», если не хотите, чтобы Dj говорил от кого заказ.</p>
<p>Просим вас подойди к заказу песни с ответственностью, ибо DJ не может знать всех песен в мире, а поэтому в случае нарушения правил Аргемоны, Краннога или РФ накажут именно Вас. Надеемся на понимание.</p>
<p>В поле ввода композиции постарайтесь написать как можно точнее в формате «Исполнитель – название песни», так Dj намного быстрее сможет исполнить ваш заказ.</p>
<p>Вы можете написать комментарий. Если вы хотите, чтобы ваш комментарий прозвучал в эфире, выберите пункт «В эфир».  (Например, «Хочу передать привет всем Кранножцам, я вас очень люблю и эта песня специально для вас»)</p>
<p>Если вы хотите уточнить что-то по поводу заказа напишите это в комментарии и выберите пункт «Dj-ю» подобные комментарии не будут зачитаны в эфире. (Например, «У этой песни много ремиксов, пожалуйста, поставьте оригинал»)</p>
<p>Если у вас будут особые примечания и при этом вы хотите, чтобы комментарий прозвучал в эфире, выберите оба пункта и «В эфир» и «Dj-ю». (Например, «Зачитайте, пожалуйста, поздравление после песни «Поздравляю всех с наступающим Новым Годом»»)</p>
<p>Песни выставляются в эфир за усмотрением DJ и обычно в порядке очереди.</p>
<p>Дублировать заказы не стоит, дублированные заказы аннулируются.</p>
<p>Вас не выставили в эфир? Не стоит огорчаться и тем более обижаться, есть разные причины и мы просим вашего понимания.</p>
<p>Слушайте Мандарин FM и пусть весь мир подождет;)</p>
</div>
	</div><div class="form_order">
                 <form method="post" name="order" class="add_order">
                        <p>
                           <input type="text" name="name" placeholder="Представьтесь" />
                           <input id="an" type="checkbox" /><label for="an">Анонимно</label>
                        </p>
                        <p>
                            <input type="text" name="music" placeholder="Композиция" />
                        </p>
                           <p> <textarea id="editor" placeholder="Комментарий"></textarea></p>
                           <p class="text"><input type="checkbox" id="k1" /> <label for="k1">DJ-ю</label><br>
                             <input type="checkbox" id="k2" /> <label for="k2">В эфир</label>
                             <button class="submit">Отправить</button></p>
                            
                    </form>
                 </div>
           </div> </div>';}//<!--End order -->
                     ?>