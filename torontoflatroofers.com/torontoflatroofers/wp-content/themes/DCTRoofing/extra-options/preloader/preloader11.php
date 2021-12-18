
            <div class="loader">
                <div class="loader-inner-1"></div>
                <div class="loader-inner-2"></div>
                <div class="loader-inner-3"></div>
                <div class="loader-inner-4"></div>
                <div class="loader-inner-5"></div>
                <div class="loader-inner-6"></div>
                <div class="loader-inner-7"></div>
                <div class="loader-inner-8"></div>
                <div class="loader-inner-9"></div>
                <div class="loader-inner-10"></div>
            </div>
       

<style type="text/css" >
.preloader .status {top:40% !important;}
.loader{
    width: 80px;
    height: 30px;
    margin: 100px auto;
}
.loader > div{
    display: inline-block;
    width: 8px;
    height: 100%;
    background:  <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    margin-right: 0;
    float: left;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transform: scaleY(0.1);
    -moz-transform: scaleY(0.1);
    -ms-transform: scaleY(0.1);
    -o-transform: scaleY(0.1);
    transform: scaleY(0.1);
    -webkit-animation: loading 1.5s infinite ease-in-out;
    -moz-animation: loading 1.5s infinite ease-in-out;
    -o-animation: loading 1.5s infinite ease-in-out;
    animation: loading 1.5s infinite ease-in-out;
}
.loader .loader-inner-1{
    -webkit-animation-delay: 0.05s;
    -moz-animation-delay: 0.05s;
    -o-animation-delay: 0.05s;
    animation-delay: 0.05s;
}
.loader .loader-inner-2{
    -webkit-animation-delay: 0.1s;
    -moz-animation-delay: 0.1s;
    -o-animation-delay: 0.1s;
    animation-delay: 0.1s;
}
.loader .loader-inner-3{
    -webkit-animation-delay: 0.15s;
    -moz-animation-delay: 0.15s;
    -o-animation-delay: 0.15s;
    animation-delay: 0.15s;
}
.loader .loader-inner-4{
    -webkit-animation-delay: 0.2s;
    -moz-animation-delay: 0.2s;
    -o-animation-delay: 0.2s;
    animation-delay: 0.2s;
}
.loader .loader-inner-5{
    -webkit-animation-delay: 0.25s;
    -moz-animation-delay: 0.25s;
    -o-animation-delay: 0.25s;
    animation-delay: 0.25s;
}
.loader .loader-inner-6{
    -webkit-animation-delay: 0.3s;
    -moz-animation-delay: 0.3s;
    -o-animation-delay: 0.3s;
    animation-delay: 0.3s;
}
.loader .loader-inner-7{
    -webkit-animation-delay: 0.35s;
    -moz-animation-delay: 0.35s;
    -o-animation-delay: 0.35s;
    animation-delay: 0.35s;
}
.loader .loader-inner-8{
    -webkit-animation-delay: 0.4s;
    -moz-animation-delay: 0.4s;
    -o-animation-delay: 0.4s;
    animation-delay: 0.4s;
}
.loader .loader-inner-9{
    -webkit-animation-delay: 0.45s;
    -moz-animation-delay: 0.45s;
    -o-animation-delay: 0.45s;
    animation-delay: 0.45s;
}
.loader .loader-inner-10{
    -webkit-animation-delay: 0.5s;
    -moz-animation-delay: 0.5s;
    -o-animation-delay: 0.5s;
    animation-delay: 0.5s;
}
@-webkit-keyframes loading{
    50%{
        -webkit-transform: scaleY(1.5);
        -moz-transform: scaleY(1.5);
        -ms-transform: scaleY(1.5);
        -o-transform: scaleY(1.5);
        transform: scaleY(1.5);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
        opacity: 1;
        filter: alpha(opacity=100);
    }
}
@-moz-keyframes loading{
    50%{
        -webkit-transform: scaleY(1.5);
        -moz-transform: scaleY(1.5);
        -ms-transform: scaleY(1.5);
        -o-transform: scaleY(1.5);
        transform: scaleY(1.5);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> ;
        opacity: 1;
        filter: alpha(opacity=100);
    }
}
@-o-keyframes loading{
    50%{
        -webkit-transform: scaleY(1.5);
        -moz-transform: scaleY(1.5);
        -ms-transform: scaleY(1.5);
        -o-transform: scaleY(1.5);
        transform: scaleY(1.5);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
        opacity: 1;
        filter: alpha(opacity=100);
    }
}
@keyframes loading{
    50%{
        -webkit-transform: scaleY(1.5);
        -moz-transform: scaleY(1.5);
        -ms-transform: scaleY(1.5);
        -o-transform: scaleY(1.5);
        transform: scaleY(1.5);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
        opacity: 1;
        filter: alpha(opacity=100);
    }
}


</style>