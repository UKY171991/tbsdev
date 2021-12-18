
                <div class="loader">
                    <div class="loader-inner"></div>
                    <div class="loader-inner"></div>
                    <div class="loader-inner"></div>
                    <div class="loader-inner"></div>
                </div>
             

<style type="text/css" >
.preloader .status {top:35% !important;}
.loader{
    width: 100px;
    height: 100px;
    margin: 50px auto;
    position: relative;
}
.loader .loader-inner{
    width: 12px;
    height: 12px;
    border: 2px solid <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    margin: 0 auto;
    position: absolute;
    top: 40px;
    left: 0;
    right: 0;
    animation-iteration-count: infinite;
    animation-duration: 1000ms;
}
.loader .loader-inner:nth-child(1){
    animation-name: loading-1;
    animation-delay: 500ms;
}
.loader .loader-inner:nth-child(2){
    animation-name: loading-2;
    animation-delay: 0ms;
}
.loader .loader-inner:nth-child(3){
    animation-name: loading-3;
    animation-delay: 500ms;
}
.loader .loader-inner:nth-child(4){
    animation-name: loading-4;
    animation-delay: 0ms;
}
@keyframes loading-1{
    50%{ transform: translate(150%,150%) scale(2,2); }
}
@keyframes loading-2{
    50%{ transform: translate(-150%,150%) scale(2,2); }
}
@keyframes loading-3{
    50%{ transform: translate(-150%,-150%) scale(2,2); }
}
@keyframes loading-4{
    50%{ transform: translate(150%,-150%) scale(2,2); }
}


</style>