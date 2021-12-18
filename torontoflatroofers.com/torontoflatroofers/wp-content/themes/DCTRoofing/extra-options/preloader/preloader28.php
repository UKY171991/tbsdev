<div class="loader"></div>

<style type="text/css" >

.preloader .status {top:40% !important;}
.loader{
    color: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> !important;
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> !important;
    width: 40px;
    height:80px;
    margin: 40px auto 0;
    position: relative;
    animation: load1 1s infinite ease-in-out;
    animation-delay: -0.16s;
}
.loader:before, .loader:after{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> !important;
    width: 40px;
    height: 80px;
    animation: load1 1s infinite ease-in-out;
}
.loader:before, .loader:after{
    content: "";
    position: absolute;
    top: 0;
}
.loader:before{
    left: -60px;
    animation-delay: -0.32s;
}
.loader:after{ left: 60px; }
@keyframes load1{
    0%,
    80%,
    100% {
        box-shadow: 0 0;
        height: 41px;
    }
    40% {
        box-shadow: 0 -60px;
        background: #c90a66;
        height: 41px;
    }
}

</style>