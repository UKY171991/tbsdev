<div class="cssload-aim"></div>

<style type="text/css" >

.cssload-aim{
	position: relative;
	width: 80px;
	height: 80px;
	left: 35%;
	left: calc(50% - 43px);
		left: -o-calc(50% - 43px);
		left: -ms-calc(50% - 43px);
		left: -webkit-calc(50% - 43px);
		left: -moz-calc(50% - 43px);
	left: calc(50% - 43px);

	border-radius: 50px;
	background-color: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_background_color', '#000' ))  ;  ?>;
	border-width: 40px;
	border-style: double;
	border-color:transparent	<?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;

	box-sizing:border-box;
		-o-box-sizing:border-box;
		-ms-box-sizing:border-box;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
	transform-origin:	50% 50%;
		-o-transform-origin:	50% 50%;
		-ms-transform-origin:	50% 50%;
		-webkit-transform-origin:	50% 50%;
		-moz-transform-origin:	50% 50%;
	animation: cssload-aim 2s linear infinite;
		-o-animation: cssload-aim 2s linear infinite;
		-ms-animation: cssload-aim 2s linear infinite;
		-webkit-animation: cssload-aim 2s linear infinite;
		-moz-animation: cssload-aim 2s linear infinite;
	
}



@keyframes cssload-aim{
		0%{transform:rotate(0deg);}
		100%{transform:rotate(360deg);}
}

@-o-keyframes cssload-aim{
		0%{-o-transform:rotate(0deg);}
		100%{-o-transform:rotate(360deg);}
}

@-ms-keyframes cssload-aim{
		0%{-ms-transform:rotate(0deg);}
		100%{-ms-transform:rotate(360deg);}
}

@-webkit-keyframes cssload-aim{
		0%{-webkit-transform:rotate(0deg);}
		100%{-webkit-transform:rotate(360deg);}
}

@-moz-keyframes cssload-aim{
		0%{-moz-transform:rotate(0deg);}
		100%{-moz-transform:rotate(360deg);}
}


</style>