<footer id="footer">
  <div class="container"> <?php echo ShowFooterPages(); ?>
    <ul>
      <li><a href="<?php echo SITE_URL; ?>aboutus.php"><?php echo CBE1_FMENU_ABOUT; ?></a></li>
      <li><a href="<?php echo SITE_URL; ?>faq.php"><?php echo CBE1_FMENU_FAQ; ?></a></li>
      <li><a href="<?php echo SITE_URL; ?>news.php"><?php echo CBE1_FMENU_NEWS; ?></a></li>
      <li><a href="<?php echo SITE_URL; ?>terms.php"><?php echo CBE1_FMENU_TERMS; ?></a></li>
      <li><a href="<?php echo SITE_URL; ?>privacy.php"><?php echo CBE1_FMENU_PRIVACY; ?></a></li>
      <li><a href="<?php echo SITE_URL; ?>cookies-policy.php"><?php echo CBE1_FMENU_COOKIESPOLICY; ?></a></li>
      <li><a href="<?php echo SITE_URL; ?>contact.php"><?php echo CBE1_FMENU_CONTACT; ?></a></li>
      <li><a href="<?php echo SITE_URL; ?>rss.php" class="rss"><?php echo CBE1_FMENU_RSS; ?></a></li>
    </ul>
	<div class="social">
		<!--<a href="https://www.facebook.com/rico.goldman.10" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
		<a href="https://twitter.com/RicoGoldman" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a> -->
		
		<a href="https://www.facebook.com/oohmygolds" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
		<a href="https://twitter.com/OOhMyGold" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
		<a href="https://www.youtube.com/channel/UC3sOi2f1jZ26ExXFVftAUkw" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>
		<a href="https://www.instagram.com/oohmygolds/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>
		<a href="https://www.pinterest.com/ohmygolds/" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a>
		
		<!--<a href="https://plus.google.com/u/1/116491183333465041426" target="_blank" title="Google+"><i class="fa fa-google-plus"></i></a>-->
	</div>
	
    <div>&copy; <?php echo date('Y') ?>. <?php echo SITE_TITLE; ?>. <?php echo CBE1_FMENU_RIGHTS; ?>.</div>
  </div>




</footer>

<div class="p8 ff-sans ps-fixed b0 l0 r0 z-banner container-fluid" role="banner" aria-hidden="false" style="background-color: #3b4045; color: white;"> 
  <div class="container">
        <div class="row mx-auto grid grid__center " role="alertdialog" aria-describedby="notice-message">
            <div class="grid--cell col-md-11" aria-label="notice-message">
                <p class="mb0 lh-lg">
                  R2R, inc. ("us", "we", or "our") uses cookies on the <a href="https://www.omg.com.pr" target="blank">https://www.omg.com.pr</a> website (the "Service"), OMG- "Oh My Gold"-TM Rewards Brand. By using the Service, you consent to the use of cookies.
                </p>
            </div>
            <div class="grid--cell col-md-1 paddingss">
                <button class="btn btn-warning js-notice-close" aria-label="notice-dismiss">
                   Ok
                </button>
            </div>
          </div>
        </div>
    </div>
<script>
function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*30*30));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


  var user=getCookie("username");
  if (user != "") {
        $(".z-banner").hide();
  } else {
    $(".js-notice-close").on('click',function(){
         user = "omgcomprcookies";//prompt("Please enter your name:","");
         if (user != "" && user != null) {
         setCookie("username", user, 1);
         $(".z-banner").hide();
     }
    });
     
  }


</script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>js/plugin.js"></script>



<script type="text/javascript">
(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.async=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
'https://omgrewards.ladesk.com/scripts/track.js',
function(e){ LiveAgent.createButton('vz16kr8h', e); });
</script>


</body></html>