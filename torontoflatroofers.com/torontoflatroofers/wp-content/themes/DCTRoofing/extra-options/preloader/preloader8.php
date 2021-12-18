<div class="cssload-hourglass"></div>

<style type="text/css" >
.preloader .status {top:45% !important;}
.cssload-hourglass{
	position: relative;
	height: 80px;
	width: 80px;
	left: 35%;
	left: calc(50% - 43px);
		left: -o-calc(50% - 43px);
		left: -ms-calc(50% - 43px);
		left: -webkit-calc(50% - 43px);
		left: -moz-calc(50% - 43px);
	border: 3px solid  <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
	border-radius: 80px;
	transform-origin: 50% 50%;
		-o-transform-origin: 50% 50%;
		-ms-transform-origin: 50% 50%;
		-webkit-transform-origin: 50% 50%;
		-moz-transform-origin: 50% 50%;
	animation: cssload-hourglass 2s ease-in-out infinite;
		-o-animation: cssload-hourglass 2s ease-in-out infinite;
		-ms-animation: cssload-hourglass 2s ease-in-out infinite;
		-webkit-animation: cssload-hourglass 2s ease-in-out infinite;
		-moz-animation: cssload-hourglass 2s ease-in-out infinite;
}

.cssload-hourglass:before{
	content: "";
	position: absolute;
	top:8px;
	left: 18px;
	width: 0px;
	height: 0px;
	border-style: solid;
	border-width: 37px 22px 0 22px;
	border-color:  <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> transparent transparent transparent;
}
.cssload-hourglass:after{
	content: "";
	position: absolute;
	top: 35px;
	left: 18px;
	width: 0px;
	height: 0px;
	border-style: solid;
	border-width: 0 22px 37px 22px;
	border-color: transparent transparent  <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>  transparent;
}



@keyframes cssload-hourglass{
		0%{transform:rotate(0deg);}
		100%{transform:rotate(180deg);}
}

@-o-keyframes cssload-hourglass{
		0%{-o-transform:rotate(0deg);}
		100%{-o-transform:rotate(180deg);}
}

@-ms-keyframes cssload-hourglass{
		0%{-ms-transform:rotate(0deg);}
		100%{-ms-transform:rotate(180deg);}
}

@-webkit-keyframes cssload-hourglass{
		0%{-webkit-transform:rotate(0deg);}
		100%{-webkit-transform:rotate(180deg);}
}

@-moz-keyframes cssload-hourglass{
		0%{-moz-transform:rotate(0deg);}
		100%{-moz-transform:rotate(180deg);}
}


</style>

