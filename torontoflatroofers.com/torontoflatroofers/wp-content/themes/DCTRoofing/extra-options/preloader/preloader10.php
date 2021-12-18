
            <div class="loader">
                <div class="loader-inner">
                    <div class="box-1"></div>
                    <div class="box-2"></div>
                    <div class="box-3"></div>
                    <div class="box-4"></div>
                </div>
                <span class="text">loading</span>
            </div>
       


<style type="text/css" >
.preloader .status {top:40% !important;}
.loader{
    width: 90px;
    height: 90px;
    margin: 40px auto;
}
.loader .loader-inner{
    width: 60px;
    height: 60px;
    position: relative;
    margin: 0 auto;
}
.loader .loader-inner div{
    content: "";
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> ;
    position: absolute;
    top: 10px;
    left: 10px;
    transform-origin: 20px 20px;
    -webkit-animation: loading-1 2s infinite cubic-bezier(0.5, 0, 0.5, 1);
    animation: loading-1 2s infinite cubic-bezier(0.5, 0, 0.5, 1);
}
.loader .loader-inner .box-2{
    top: 10px;
    left: auto;
    right: 10px;
    transform-origin: -4px 20px;
    -webkit-animation: loading-2 2s infinite cubic-bezier(0.5, 0, 0.5, 1);
    animation: loading-2 2s infinite cubic-bezier(0.5, 0, 0.5, 1);
}
.loader .loader-inner .box-3{
    top: auto;
    left: auto;
    right: 10px;
    bottom: 10px;
    transform-origin: -4px -4px;
    -webkit-animation: loading-3 2s infinite cubic-bezier(0.5, 0, 0.5, 1);
    animation: loading-3 2s infinite cubic-bezier(0.5, 0, 0.5, 1);
}
.loader .loader-inner .box-4{
    top: auto;
    bottom: 10px;
    transform-origin: 20px -4px;
    -webkit-animation: loading-4 2s infinite cubic-bezier(0.5, 0, 0.5, 1);
    animation: loading-4 2s infinite cubic-bezier(0.5, 0, 0.5, 1);
}
.loader .text{
    display: block;
    font-size: 12px;
    color:  <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    text-align: center;
}
@-webkit-keyframes loading-1{
    0% {
        transform: rotate(90deg);
    }
    0% {
        transform: rotate(90deg);
    }
    50% {
        transform: rotate(180deg);
    }
    75% {
        transform: rotate(270deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
@keyframes loading-1{
    0% {
        transform: rotate(90deg);
    }
    0% {
        transform: rotate(90deg);
    }
    50% {
        transform: rotate(180deg);
    }
    75% {
        transform: rotate(270deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
@-webkit-keyframes loading-2{
    0% {
        transform: rotate(90deg);
    }
    25% {
        transform: rotate(90deg);
    }
    25% {
        transform: rotate(180deg);
    }
    75% {
        transform: rotate(270deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
@keyframes loading-2{
    0% {
        transform: rotate(90deg);
    }
    25% {
        transform: rotate(90deg);
    }
    25% {
        transform: rotate(180deg);
    }
    75% {
        transform: rotate(270deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
@-webkit-keyframes loading-3{
    0% {
        transform: rotate(90deg);
    }
    25% {
        transform: rotate(90deg);
    }
    50% {
        transform: rotate(180deg);
    }
    50% {
        transform: rotate(270deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
@keyframes loading-3{
    0% {
        transform: rotate(90deg);
    }
    25% {
        transform: rotate(90deg);
    }
    50% {
        transform: rotate(180deg);
    }
    50% {
        transform: rotate(270deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
@-webkit-keyframes loading-4{
    0% {
        transform: rotate(90deg);
    }
    25% {
        transform: rotate(90deg);
    }
    50% {
        transform: rotate(180deg);
    }
    75% {
        transform: rotate(270deg);
    }
    75% {
        transform: rotate(360deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
@keyframes loading-4{
    0% {
        transform: rotate(90deg);
    }
    25% {
        transform: rotate(90deg);
    }
    50% {
        transform: rotate(180deg);
    }
    75% {
        transform: rotate(270deg);
    }
    75% {
        transform: rotate(360deg);
    }
    100% {
        transform: rotate(360deg);
    }
}



</style>