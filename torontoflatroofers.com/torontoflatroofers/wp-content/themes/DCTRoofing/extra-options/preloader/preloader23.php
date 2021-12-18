
            <div class="loader"></div>
         

<style type="text/css" >

.preloader .status {top:35% !important;}
.loader{
    width: 100px;
    height: 100px;
    margin: 50px auto;
    position: relative;
}
.loader:before,
.loader:after{
    content: "";
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: solid 8px transparent;
    position: absolute;
    -webkit-animation: loading-1 1.4s ease infinite;
    animation: loading-1 1.4s ease infinite;
}
.loader:before{
    border-top-color: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    border-bottom-color: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
}
.loader:after{
    border-left-color: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    border-right-color: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    -webkit-animation-delay: 0.7s;
    animation-delay: 0.7s;
}
@-webkit-keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg) scale(1);
        transform: rotate(0deg) scale(1);
    }
    50%{
        -webkit-transform: rotate(180deg) scale(0.5);
        transform: rotate(180deg) scale(0.5);
    }
    100%{
        -webkit-transform: rotate(360deg) scale(1);
        transform: rotate(360deg) scale(1);
    }
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg) scale(1);
        transform: rotate(0deg) scale(1);
    }
    50%{
        -webkit-transform: rotate(180deg) scale(0.5);
        transform: rotate(180deg) scale(0.5);
    }
    100%{
        -webkit-transform: rotate(360deg) scale(1);
        transform: rotate(360deg) scale(1);
    }
}

</style>