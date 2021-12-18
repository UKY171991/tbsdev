
            <div class="loader">
                <div class="loader-inner loading-1 loader-inner-3"></div>
                <div class="loader-inner loading-2 loader-inner-2"></div>
                <div class="loader-inner loading-2 loader-inner-3"></div>
                <div class="loader-inner loading-2 loader-inner-4"></div>
                <div class="loader-inner loading-3 loader-inner-1"></div>
                <div class="loader-inner loading-3 loader-inner-2"></div>
                <div class="loader-inner loading-3 loader-inner-3"></div>
                <div class="loader-inner loading-3 loader-inner-4"></div>
                <div class="loader-inner loading-3 loader-inner-5"></div>
                <div class="loader-inner loading-4 loader-inner-2"></div>
                <div class="loader-inner loading-4 loader-inner-3"></div>
                <div class="loader-inner loading-4 loader-inner-4"></div>
                <div class="loader-inner loading-5 loader-inner-3"></div>
            </div>
           



<style type="text/css" >
.preloader .status {top:40% !important;}

.loader{
    width: 90px;
    height: 90px;
    margin: 50px auto;
    transform: translateZ(0);
}
.loader .loader-inner{
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    position: absolute;
    transform: scale(0);
    -webkit-animation: 2634.65ms loading-1 infinite;
    animation: 2634.65ms loading-1 infinite;
}
.loader .loader-inner:nth-child(1){
    animation-delay: 48.3ms;
}
.loader .loader-inner:nth-child(2){
    animation-delay: 96.6ms;
}
.loader .loader-inner:nth-child(3){
    animation-delay: 144.9ms;
}
.loader .loader-inner:nth-child(4){
    animation-delay: 193.2ms;
}
.loader .loader-inner:nth-child(5){
    animation-delay: 241.5ms;
}
.loader .loader-inner:nth-child(6){
    animation-delay: 289.8ms;
}
.loader .loader-inner:nth-child(7){
    animation-delay: 338.1ms;
}
.loader .loader-inner:nth-child(8){
    animation-delay: 386.4ms;
}
.loader .loader-inner:nth-child(9){
    animation-delay: 434.7ms;
}
.loader .loader-inner:nth-child(10){
    animation-delay: 483ms;
}
.loader .loader-inner:nth-child(11){
    animation-delay: 531.3ms;
}
.loader-inner:nth-child(12){
    animation-delay: 579.6ms;
}
.loader .loader-inner:nth-child(13){
    animation-delay: 627.9ms;
}
.loader .loading-1{ top: 1.3px; }
.loader .loading-2{ top: 18.95px; }
.loader .loading-3{ top: 35.55px; }
.loader .loading-4{ top: 53.2px; }
.loader .loading-5{ top: 69.85px; }
.loader .loader-inner-1{ left: 1.25px; }
.loader .loader-inner-2{ left: 18.85px; }
.loader .loader-inner-3{ left: 35.5px; }
.loader .loader-inner-4{ left: 53.15px; }
.loader .loader-inner-5{ left: 69.8px; }
@-webkit-keyframes loading-1{
    0%{
        -webkit-transform: scale(0);
    }
    27.28%{
        -webkit-transform: scale(1);
    }
    36.36%{
        -webkit-transform: scale(0.857);
    }
    54.55%{
        -webkit-transform: scale(0.857);
    }
    63.64%{
        -webkit-transform: scale(0);
    }
    100%{
        -webkit-transform: scale(0);
    }
}
@keyframes loading-1{
    0%{
        transform: scale(0);
    }
    27.28%{
        transform: scale(1);
    }
    36.36%{
        transform: scale(0.857);
    }
    54.55%{
        transform: scale(0.857);
    }
    63.64%{
        transform: scale(0);
    }
    100%{
        transform: scale(0);
    }
}

</style>