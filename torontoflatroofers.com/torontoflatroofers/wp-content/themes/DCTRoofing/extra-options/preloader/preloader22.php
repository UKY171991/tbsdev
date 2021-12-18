
            <div class="loader">
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
            </div>
        


<style type="text/css" >
.preloader .status {top:40% !important;}
.loader{
    width: 49px;
    height: 96px;
    margin: 0 auto 70px;
    position: relative;
    transform-style: preserve-3d;
    -webkit-animation:  2.3s loading-2 infinite;
    animation: 2.3s loading-2 infinite;
}
.loader .loader-inner{
    width: 15px;
    height: 10px;
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-animation:  loading-1 3.45s infinite cubic-bezier(0.53, 0.68, 0.53, 0.41);
    animation: loading-1 3.45s infinite cubic-bezier(0.53, 0.68, 0.53, 0.41);
}
.loader .loader-inner:nth-of-type(2){
    margin-top: 12px;
    animation-delay: 0.12s;
}
.loader .loader-inner:nth-of-type(3){
    margin-top: 23px;
    animation-delay: 0.23s;
}
.loader .loader-inner:nth-of-type(4){
    margin-top: 35px;
    animation-delay: 0.35s;
}
.loader .loader-inner:nth-of-type(5){
    margin-top: 47px;
    animation-delay: 0.46s;
}
@-webkit-keyframes loading-1{
    0%, 100%{
        -webkit-transform: translateX(-24px) scaleX(0.5);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
    25%{
        -webkit-transform: translateX(0px) scaleY(1) scaleX(5) rotateY(180deg);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
    50%{
        -webkit-transform: translateX(24px) scaleX(0.5);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
    75%{
        -webkit-transform: translateX(0px) scaleY(1) scaleX(5) rotateY(180deg);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
}
@keyframes loading-1{
    0%, 100%{
        transform: translateX(-24px) scaleX(0.5);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
    25%{
        transform: translateX(0px) scaleY(1) scaleX(5) rotateY(180deg);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
    50%{
        transform: translateX(24px) scaleX(0.5);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
    75%{
        transform: translateX(0px) scaleY(1) scaleX(5) rotateY(180deg);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
}
@-webkit-keyframes loading-2{
    0%,100%{
        -webkit-transform: rotateY(0deg);
    }
    50%{
        -webkit-transform: rotateY(360deg);
    }
}
@keyframes loading-2{
    0%,100%{
        transform: rotateY(0deg);
    }
    50%{
        transform: rotateY(360deg);
    }
}


</style>