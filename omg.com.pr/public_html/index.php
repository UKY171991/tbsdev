<?php
/*******************************************************************\
 * CashbackEngine v3.0
 * http://www.CashbackEngine.net
 *
  * Copyright (c) 2010-2017 CashbackEngine Software. All rights reserved.
 * ------------ CashbackEngine IS NOT FREE SOFTWARE --------------
\*******************************************************************/
	if (file_exists("./install.php"))
	{
		header ("Location: install.php");
		exit();
	}
	session_start();
	require_once("inc/config.inc.php");
	/* save referral id */
	if (isset($_GET['ref']) && is_numeric($_GET['ref']))
	{
		$ref_id = (int)$_GET['ref'];
		setReferral($ref_id);
		
		if (!isLoggedIn())
		{
			smart_mysql_query("UPDATE cashbackengine_users SET ref_clicks=ref_clicks+1 WHERE user_id='$ref_id' LIMIT 1");
		}
		header("Location: index.php");
		exit();
	}
	/* set language */
	if (isset($_GET['lang']) && $_GET['lang'] != "")
	{
		$site_lang	= strtolower(getGetParameter('lang'));
		$site_lang	= preg_replace("/[^0-9a-zA-Z]/", " ", $site_lang);
		$site_lang	= substr(trim($site_lang), 0, 30);
		
		if ($site_lang != "")
		{
			setcookie("site_lang", $site_lang, time()+3600*24*365, '/');
		}
		header("Location: index.php");
		exit();
	}
	$content = GetContent('home');
	/*  Page config  */
	$PAGE_TITLE			= SITE_HOME_TITLE;
	$PAGE_DESCRIPTION	= $content['meta_description'];
	$PAGE_KEYWORDS		= $content['meta_keywords'];
	require_once("inc/header.inc.php");
?>

<div class="slider">
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item">
	<img src="<?php echo SITE_URL; ?>images/slider-1.jpg" alt="">
		<div class="carousel-caption"><div class="container">
        <div class="desc"><h1>GOLD-BACK REBATE PROGRAM - THE ONLY ONE OF ITS KIND...its a : GLOBAL GOLD- MINE...Start Mining the only truly Secured Savings NOW !</h1>
        <h1 style="font-size:50px"><span class="flash-text">PATENTED </span></h1></h1></div>
		</div></div>
	</div>	
    </div>
</div>
</div>


<div class="innerContent">
<div class="container">
    
    
    <style>
    .welcometxt iframe {
    width: 77%;
    min-height: 381px;
}
@media(max-width:576px){ .welcometxt iframe{width:100%;min-height
    300px;
}}
</style
<div class="welcometxt">
<?php
	echo $content['text'];
?>

<!--<iframe style="width: 77%;min-height: 381px;"  src="vedio/jaguarman77_20200102_v2.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->



</div>
</div>

<section class="ourprocess">
<div class="container">

	<h1><span class="flash-text">PATENTED </span>Power-Purchases Process...</h1>
	<?php /* $json = file_get_contents('https://data-asg.goldprice.org/dbXRates/USD');
$decoded = json_decode($json);
$item = $decoded->items;
$date = $decoded->date;
$gold_price = $item[0]->xauPrice;
echo //"Gold price on ".$date." is ".$gold_price;*/

?>
	
	<div class="row">
		<div class="col-sm-3 item text-center">
		<a href="<?php echo SITE_URL; ?>signup.php" class="btn btn-warning">Join Free Now</a>
			<h3>Join US</h3>
			<div class="thumb"><img src="images/icon-process-1.png" alt=""></div>
			<p><strong>Join</strong> the <strong>OMG Rewards</strong> Community Membership <strong>for FREE</strong>. All your <strong>Rebates</strong> on purchases are <strong>in Physical 24 K Gold!</strong> Not Cash-Back (Fiat I.O.U.), Points, Air-Miles or "Store Bucks", or Digital Currencies , but <strong>Real 24K GOLD as Physical Money!</strong> </p>
			<p>We: <strong>Store it</strong>, securely, in the top Private Vaults Globally ,<strong>Insure it</strong> (Via Top Global firms) , and <strong>Account it</strong> (Via Top firms Globally)... <strong>all for FREE for you</strong>. If you want to hold it...just pay shipping and handling only.**</p>
			<p>It is: <strong>Free-Gold, Tax-Free, and a Free Membership...on all purchases made through us...that’s as good as it gets! **</strong> </p>
		</div>
		<div class="col-sm-3 item text-center">
			<a href="<?php echo SITE_URL; ?>retailers.php" class="btn btn-warning">Members Shop Now</a>
			<h3>Go Shopping</h3>
			<div class="thumb"><img src="images/icon-process-2.png" alt=""></div>
			<p>Login to Membership area, go to the&nbsp;<strong>OMG Rewards</strong>&nbsp;links there, of your favorite online retailers,and start shopping! Get your best price on what you want, and get free Gold-back,on top.</p>
		</div>
		<div class="col-sm-3 item text-center">
			<a href="<?php echo SITE_URL; ?>login.php" class="btn btn-warning">Members Login</a>
			<h3>Get Rebates</h3>
			<div class="thumb"><img src="images/icon-process-3.png" alt=""></div>
			<p>When&nbsp;<strong>OMG</strong>&nbsp;receives the rebates for every cleared purchase you make -- we add it to your account, all in the form of pure physical Gold.&nbsp;<strong>Free-Gold, Tax-Free</strong>.</p>
		</div>
		<div class="col-sm-3 item text-center">
			<a href="<?php echo SITE_URL; ?>login.php" class="btn btn-warning">Members Login</a>
			<h3>Build Savings</h3>
			<div class="thumb"><img src="images/icon-process-4.png" alt=""></div>
			<p><strong>OMG Rewards</strong>, will store your Gold Rebates for you ,in our partners secure insured Private Bullion Vaults -- far away from unreliable banks. Our accounting software gives you 24/7 access to your accounts, so you can literally see the savings building up. Plus, sell any or all of your (cleared/settled) Gold to us at OMG whenever you want! Or have it shipped to you, just pay Shipping &amp; Handling.</p>
		</div>
	</div>
	<h2 class="text-center">“Membership has its Precious (Metals) Rewards!”-™</h2>
</div>
</section>


<div class="container">
	<div class="home-disclaimer">
	<p><span class="large">Disclaimer:</span> We are not selling investments in paper or physical Gold, it is Free-Gold/Tax-Free on every purchase you make through OMG Rewards. No better way to accumulate Secured Savings, than through your normal Spending needs and wants. End of Story...but just the beginning of your never-ending Golden Treasures Secured-Savings Success Saga !** </p>
	<p>For all Asterisked items above and more go to: **<a href="<?php echo SITE_URL; ?>aboutus.php">About Us</a>: <a href="<?php echo SITE_URL; ?>aboutus.php"">"Our WHY"</a>  ** & the <a href="<?php echo SITE_URL; ?>faq.php">FAQ</a>/<a href="<?php echo SITE_URL; ?>help.php">Help</a>... for details! </p>
	<div class="row">
	<div class="col-sm-3">
		<img src="<?php echo SITE_URL; ?>images/goldman.png" alt=""  style="
    margin-top: 20%;
">
	</div>
	<div class="col-sm-9">
	
	<script type="text/javascript" src="https://www.bullionvault.com/chart/bullionvaultchart.js" ></script>
		<script type="text/javascript" >
			var options = {
				bullion: 'gold',
				currency: 'USD',
				time: '1 mint',
				//timeframe: '1M',
				chartType: 'line',
				miniChartModeAxis : 'oz',
				referrerID: 'GOLDMAN79',
				containerDefinedSize: true,
				miniChartMode: false,
				displayLatestPriceLine: true,
				switchBullion: true,
				switchCurrency: true,
				switchTimeframe: true,
				switchChartType: true,
				exportButton: true
			};
			var chartBV = new BullionVaultChart(options, 'embed');
		</script>
		
		<div id="embed" style="height: 500px; width: 820px; "></div>
	<!--script type="text/javascript" src="https://www.bullionvault.com/banners/live_price_widget.js"></script>-->
	<!--div style="width: 100%; height: 578px"><iframe src="https://gold-feed.com/charts/goldfeed29v9234ltlvl234l66l324/chart.php" scrolling="no" height="100%" width="100%" frameborder="0"></iframe></div>

	<div id="banner1"></div>


	<script type="text/javascript">
		var options = {
			referrerID: "JOHNSMITH101",
			size: "250x250",
			bullion: "gold",
			currency: "EUR",
			weightUnit: "TOZ"
		};
		new BullionVaultPriceWidget('banner1', options);
	</script-->
	
<div class="row">
<div class="col-md-12 text-danger">
<strong>
NOTICE: OMG/R2R does not sell Gold/nor any Precious Metals now, we only give "free-gold tax free" rebates on your qualified purchases, into your Virtual IRA-"International Rebate Account". If you want to buy more, go to our FAQ page item #6 here <a href="https://omg.com.pr/faq.php">https://omg.com.pr/faq.php</a> . Then return to click on the Bullion Vault logo above or: <a href="http://www.bullionvaultaffiliate.com/goldman79/en">http://www.bullionvaultaffiliate.com/goldman79/en</a>, to apply for your own direct personal allocated account. 
</strong>
<br><br><br>
</div>
</div>
	</div>
	
	</div>



</div>
	</div>


	
	<?/* // Featured store listing*** not remove code 
		<?php
			if (FEATURED_STORES_LIMIT > 0)
			{
				$result_featured = smart_mysql_query("SELECT * FROM cashbackengine_retailers WHERE featured='1' AND (end_date='0000-00-00 00:00:00' OR end_date > NOW()) AND status='active' ORDER BY RAND() LIMIT ".FEATURED_STORES_LIMIT);
				$total_featured = mysqli_num_rows($result_featured);
				if ($total_featured > 0) { 
		?>
			<div style="clear: both;"></div>
			<h3 class="brd"><?php echo CBE1_HOME_FEATURED_STORES; ?></h3>
			<div class="featured_stores">
			<?php while ($row_featured = mysqli_fetch_array($result_featured)) { ?>
				<div class="imagebox"><a href="<?php echo GetRetailerLink($row_featured['retailer_id'], $row_featured['title']); ?>"><img src="<?php if (!stristr($row_featured['image'], 'http')) echo SITE_URL."img/"; echo $row_featured['image']; ?>" width="<?php echo IMAGE_WIDTH; ?>" height="<?php echo IMAGE_HEIGHT; ?>" alt="<?php echo $row_featured['title']; ?>" title="<?php echo $row_featured['title']; ?>" border="0" /></a></div>
			<?php } ?>
			</div>
		<?php
				}
			} 
		?>
		<?php
			if (TODAYS_COUPONS_LIMIT > 0)
			{
				$result_todays_coupons = smart_mysql_query("SELECT c.*, DATE_FORMAT(c.end_date, '".DATE_FORMAT."') AS coupon_end_date, UNIX_TIMESTAMP(c.end_date) - UNIX_TIMESTAMP() AS time_left, c.title AS coupon_title, r.image, r.title FROM cashbackengine_coupons c LEFT JOIN cashbackengine_retailers r ON c.retailer_id=r.retailer_id WHERE (c.start_date<=NOW() AND (c.end_date='0000-00-00 00:00:00' OR c.end_date > NOW())) AND c.status='active' AND DATE(c.last_visit)=DATE(NOW()) AND (r.end_date='0000-00-00 00:00:00' OR r.end_date > NOW()) AND r.status='active' ORDER BY visits_today DESC LIMIT ".TODAYS_COUPONS_LIMIT);
				$total_todays_coupons = mysqli_num_rows($result_todays_coupons);
				if ($total_todays_coupons > 0) { 
		?>
			<div style="clear: both;"></div>
			<h3 class="brd"><?php echo CBE1_HOME_TOP_COUPONS; ?></h3>
			<table align="center" width="100%" border="0" cellspacing="0" cellpadding="5">
			<?php while ($row_todays_coupons = mysqli_fetch_array($result_todays_coupons)) { ?>
				<tr>
					<td class="td_coupon" width="<?php echo IMAGE_WIDTH; ?>" align="center" valign="top">
						<div class="imagebox"><a href="<?php echo GetRetailerLink($row_todays_coupons['retailer_id'], $row_todays_coupons['title']); ?>"><img src="<?php if (!stristr($row_todays_coupons['image'], 'http')) echo SITE_URL."img/"; echo $row_todays_coupons['image']; ?>" width="<?php echo IMAGE_WIDTH; ?>" height="<?php echo IMAGE_HEIGHT; ?>" alt="<?php echo $row_todays_coupons['title']; ?>" title="<?php echo $row_todays_coupons['title']; ?>" border="0" /></a></div>
						<br/><a class="more" href="<?php echo GetRetailerLink($row_todays_coupons['retailer_id'], $row_todays_coupons['title']); ?>#coupons"><?php echo CBE1_COUPONS_SEEALL; ?></a>
					</td>
					<td width="80%" class="td_coupon" align="left" valign="top">
						<span class="coupon_name"><?php echo $row_todays_coupons['title']; ?> <a href="<?php echo SITE_URL; ?>go2store.php?id=<?php echo $row_todays_coupons['retailer_id']; ?>&c=<?php echo $row_todays_coupons['coupon_id']; ?>" target="_blank"><?php echo $row_todays_coupons['coupon_title']; ?></b></span>
						<?php echo ($row_todays_coupons['visits'] > 0) ? "<span class='coupon_times_used'><sup>".$row_todays_coupons['visits']." ".CBE1_COUPONS_TUSED."</sup></span>" : ""; ?>
						<br/>
						<?php if ($row_todays_coupons['description'] != "") { ?><div class="coupon_description"><?php echo TruncateText($row_todays_coupons['description'], COUPONS_DESCRIPTION_LIMIT, $more_link = 1); ?>&nbsp;</div><?php } ?>
						<?php if ($row_todays_coupons['end_date'] != "0000-00-00 00:00:00") { ?>
							<span class="expires"><?php echo CBE1_COUPONS_EXPIRES; ?>: <?php echo $row_todays_coupons['coupon_end_date']; ?></span> &nbsp; 
							<span class="time_left"><?php echo CBE1_COUPONS_TIMELEFT; ?>: <?php echo GetTimeLeft($row_todays_coupons['time_left']); ?></span>
						<?php } ?>
					</td>
					<td class="td_coupon" align="left" valign="bottom">
						<?php if ($row_todays_coupons['code'] != "") { ?><span class="coupon_code"><?php echo (HIDE_COUPONS == 0 || isLoggedIn()) ? $row_todays_coupons['code'] : CBE1_COUPONS_CODE_HIDDEN; ?></span><?php } ?>
						<a class="go2store" href="<?php echo SITE_URL; ?>go2store.php?id=<?php echo $row_todays_coupons['retailer_id']; ?>&c=<?php echo $row_todays_coupons['coupon_id']; ?>" target="_blank"><?php echo ($row_todays_coupons['code'] != "") ? CBE1_COUPONS_LINK : CBE1_COUPONS_LINK2; ?></a>
					</td>
				</tr>
			<?php } ?>
			</table>
		<?php } } ?>
		
		<?php
			if (HOMEPAGE_REVIEWS_LIMIT > 0)
			{
				$reviews_query = "SELECT r.*, DATE_FORMAT(r.added, '".DATE_FORMAT."') AS review_date, u.user_id, u.username, u.fname, u.lname FROM cashbackengine_reviews r LEFT JOIN cashbackengine_users u ON r.user_id=u.user_id WHERE r.status='active' ORDER BY r.added DESC LIMIT ".HOMEPAGE_REVIEWS_LIMIT;
				$reviews_result = smart_mysql_query($reviews_query);
				$reviews_total = mysqli_num_rows($reviews_result);
				if ($reviews_total > 0) {
		?>
			<div style="clear: both"></div>
			<h3 class="brd"><?php echo CBE1_HOME_RECENT_REVIEWS; ?></h3>
			<?php while ($reviews_row = mysqli_fetch_array($reviews_result)) { ?>
            <div id="review">
                <span class="review-author"><?php echo $reviews_row['fname']." ".substr($reviews_row['lname'], 0, 1)."."; ?></span>
				<span class="review-date"><?php echo $reviews_row['review_date']; ?></span><br/><br/>
				<b><a href="<?php echo GetRetailerLink($reviews_row['retailer_id'], GetStoreName($reviews_row['retailer_id'])); ?>"><?php echo GetStoreName($reviews_row['retailer_id']); ?></a></b><br/>
				<img src="<?php echo SITE_URL; ?>images/icons/rating-<?php echo $reviews_row['rating']; ?>.gif" />&nbsp;
				<span class="review-title"><?php echo $reviews_row['review_title']; ?></span><br/>
				<div class="review-text"><?php echo $reviews_row['review']; ?></div>
                <div style="clear: both;"></div>
            </div>
			<?php } ?>
			<div style="clear: both"></div>
		<?php }} ?>
		
	*/ ?>	
</div>





</div> <!-- //close innerContent -->
		
<?php require_once("inc/footer.inc.php"); ?>