
            <div class="loader"></div>
        

<style type="text/css" >
.preloader .status {top:40% !important;}
.loader{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    margin: 60px auto;
    overflow: hidden;
    -webkit-animation: loading-1 0.7s linear infinite alternate;
    animation: loading-1 0.7s linear infinite alternate;
}
@-webkit-keyframes loading-1{
    0%{
        -webkit-box-shadow: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> 0 0 0px 20px;
        box-shadow: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> 0 0 0px 20px;
    }
    40%{
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    100%{
        -webkit-box-shadow: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> 0 0 0px 25px inset;
        box-shadow: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> 0 0 0px 25px inset;
    }
}
@keyframes loading-1{
    0%{
        -webkit-box-shadow: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> 0 0 0px 20px;
        box-shadow: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> 0 0 0px 20px;
    }
    40%{
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    100%{
        -webkit-box-shadow: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> 0 0 0px 25px inset;
        box-shadow: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> 0 0 0px 25px inset;
    }
}


</style>