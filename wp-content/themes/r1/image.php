<?php get_header(); ?>
<h1 style="font-size:25px;">Победители квеста «<?php echo get_post_meta ($post->ID, 'Qest', TRUE) ?>»</h1>

<div class="attachment">
<div style="margin:0 auto 20px; width:245px;">
<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
  
<div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir"></div>
</div>







<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40%">&nbsp;</td>
    <td width="20%">
   
    
   <div style="float:left; margin:0 auto; position:relative;"><a class="xroic" onclick="window.history.back();" ></a> <?php twentythirteen_the_attached_image(); ?></div>
   <div style="clear:both;"></div>

<div style="position:relative; padding-top:15px;">
<div class="TimePh">Время прохождения: <?php echo get_post_meta ($post->ID, 'Time_qest', TRUE) ?> </div>
<div class="gallery-description" style="top:13px; padding-right:30px; right:0;"><?php echo get_post_meta ($post->ID, 'Data_qest', TRUE)  ?> </div>
</div>
<div style="clear:both;"></div>









<!--<input class="buttonSend" onclick="window.history.back();" type="button" value="Вернуться"/>-->
    
    
    
    </td>
    <td width="40%">&nbsp;</td>
  </tr>
</table>









<div style="clear:both; height:150px;"></div>
</div>	
</div>
<!-- .wrapper -->
<?php get_footer(); ?>