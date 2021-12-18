<div class="loader">
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
            </div>

<style type="text/css" >
.preloader .status {left: 45%;
top: 35%; }
.loader{
    width: 300px;
    height: 180px;
    margin: 40px auto;
    position: relative;
	
}
				.loader .loader-inner{
							border-radius: 2px;
							background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> ;
							position: absolute;
							-webkit-animation: loading-1 1s ease infinite;
							animation: loading-1 1s ease infinite;
							opacity:0.7; 
						}
						.loader .loader-inner:nth-child(1){ left: 0; }
						.loader .loader-inner:nth-child(2){
							left: 40px;
							animation-delay: .1s;
						}
						.loader .loader-inner:nth-child(3){
							left: 80px;
							animation-delay: .2s;
						}
						.loader .loader-inner:nth-child(4){
							left: 120px;
							animation-delay: .3s;
						}
						.loader .loader-inner:nth-child(5){
							left: 160px;
							animation-delay: .4s;
						}
						.loader .loader-inner:nth-child(6){
							left: 200px;
							animation-delay: .5s;
						}
						.loader .loader-inner:nth-child(7){
							left: 240px;
							animation-delay: .6s;
						}
						.loader .loader-inner:nth-child(8){
							left: 280px;
							animation-delay: .7s;
						}
						@-webkit-keyframes loading-1{
							0%{
								width: 20px;
								height: 180px;
								margin-top: 0;
								margin-left: 0;
								box-shadow: inset 0 1px 1px rgba(255,255,255,.2), 0 2px 2px rgba(0,0,0,.7);
							}
							50%{
								width: 26px;
								height: 200px;
								margin-left: -3px;
								margin-top:-10px;
								box-shadow: inset 0 1px 1px rgba(255,255,255,.2), 0 20px 25px rgba(0,0,0,.7);
							}
							100%{
								width: 20px;
								height: 180px;
								margin-left: 0;
								margin-top: 0;
								box-shadow: inset 0 1px 1px rgba(255,255,255,.2), 0 2px 2px rgba(0,0,0,.7);
							}
						}
						@keyframes loading-1{
							0%{
								width: 20px;
								height: 180px;
								margin-top: 0;
								margin-left: 0;
								box-shadow: inset 0 1px 1px rgba(255,255,255,.2), 0 2px 2px rgba(0,0,0,.7);
							}
							50%{
								width: 26px;
								height: 200px;
								margin-left: -3px;
								margin-top:-10px;
								box-shadow: inset 0 1px 1px rgba(255,255,255,.2), 0 20px 25px rgba(0,0,0,.7);
							}
							100%{
								width: 20px;
								height: 180px;
								margin-left: 0;
								margin-top: 0;
								box-shadow: inset 0 1px 1px rgba(255,255,255,.2), 0 2px 2px rgba(0,0,0,.7);
							}
						}
						
						@media only screen and (max-width:980px){
							.loader{
								width: 150px;
								height: 30px;
								margin: 5% auto;
								position: relative;
								top:35%;
							}
							.loading-img
							{
								width:40%;
								left: 30%;
								top: 35%;
								text-align: center;
							}
							.loader .loader-inner:nth-child(1){ left: 0; }
							.loader .loader-inner:nth-child(2){
								left: 20px;
								animation-delay: .1s;
							}
							.loader .loader-inner:nth-child(3){
								left: 40px;
								animation-delay: .2s;
							}
							.loader .loader-inner:nth-child(4){
								left: 60px;
								animation-delay: .3s;
							}
							.loader .loader-inner:nth-child(5){
								left: 80px;
								animation-delay: .4s;
							}
							.loader .loader-inner:nth-child(6){
								left: 100px;
								animation-delay: .5s;
							}
							.loader .loader-inner:nth-child(7){
								left: 120px;
								animation-delay: .6s;
							}
							.loader .loader-inner:nth-child(8){
								left: 140px;
								animation-delay: .7s;
							}
							@-webkit-keyframes loading-1{
								0%{
									width: 10px;
									height: 50px;
									margin-top: 0;
									margin-left: 0;
									box-shadow: inset 0 1px 1px rgba(255,255,255,.2), 0 2px 2px rgba(0,0,0,.7);
								}
								50%{
									width: 16px;
									height: 70px;
									margin-left: -3px;
									margin-top:-10px;
									box-shadow: inset 0 1px 1px rgba(255,255,255,.2), 0 20px 25px rgba(0,0,0,.7);
								}
								100%{
									width: 10px;
									height: 50px;
									margin-left: 0;
									margin-top: 0;
									box-shadow: inset 0 1px 1px rgba(255,255,255,.2), 0 2px 2px rgba(0,0,0,.7);
								}
							}
							@keyframes loading-1{
								0%{
									width: 10px;
									height: 50px;
									margin-top: 0;
									margin-left: 0;
									box-shadow: inset 0 1px 1px rgba(255,255,255,.2), 0 2px 2px rgba(0,0,0,.7);
								}
								50%{
									width: 16px;
									height: 70px;
									margin-left: -3px;
									margin-top:-10px;
									box-shadow: inset 0 1px 1px rgba(255,255,255,.2), 0 20px 25px rgba(0,0,0,.7);
								}
								100%{
									width: 10px;
									height: 50px;
									margin-left: 0;
									margin-top: 0;
									box-shadow: inset 0 1px 1px rgba(255,255,255,.2), 0 2px 2px rgba(0,0,0,.7);
								}
							}
						}
</style>