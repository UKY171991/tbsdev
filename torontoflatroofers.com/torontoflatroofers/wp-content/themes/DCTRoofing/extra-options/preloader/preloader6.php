<div class="cssload-ball"></div>


<style type="text/css" >
.preloader .status {top:45% !important;}
.cssload-ball{
	position: relative;
	height: 78px;
	width: 78px;
	border-radius: 78px;
	border: 3px solid <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
	left: 35%;
	left: calc(50% - 42px);
		left: -o-calc(50% - 42px);
		left: -ms-calc(50% - 42px);
		left: -webkit-calc(50% - 42px);
		left: -moz-calc(50% - 42px);

	transform-origin: 50% 50%;
		-o-transform-origin: 50% 50%;
		-ms-transform-origin: 50% 50%;
		-webkit-transform-origin: 50% 50%;
		-moz-transform-origin: 50% 50%;
	animation: cssload-ball 3.45s linear infinite;
		-o-animation: cssload-ball 3.45s linear infinite;
		-ms-animation: cssload-ball 3.45s linear infinite;
		-webkit-animation: cssload-ball 3.45s linear infinite;
		-moz-animation: cssload-ball 3.45s linear infinite;
}

.cssload-ball:after{
	content: "";
	position: absolute;
	top: -5px;
	left: 19px;
	width: 11px;
	height: 11px;
	border-radius: 10px;
	background-color: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
}



@keyframes cssload-ball{
		0%{transform:rotate(0deg);}
		100%{transform:rotate(360deg);}
}

@-o-keyframes cssload-ball{
		0%{-o-transform:rotate(0deg);}
		100%{-o-transform:rotate(360deg);}
}

@-ms-keyframes cssload-ball{
		0%{-ms-transform:rotate(0deg);}
		100%{-ms-transform:rotate(360deg);}
}

@-webkit-keyframes cssload-ball{
		0%{-webkit-transform:rotate(0deg);}
		100%{-webkit-transform:rotate(360deg);}
}

@-moz-keyframes cssload-ball{
		0%{-moz-transform:rotate(0deg);}
		100%{-moz-transform:rotate(360deg);}
}


</style>