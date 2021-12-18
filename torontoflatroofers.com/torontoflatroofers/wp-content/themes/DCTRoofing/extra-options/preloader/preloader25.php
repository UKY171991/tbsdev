
                <div class="loader">
                    <div class="loader-inner">
                        <div class="box box-1"></div>
                        <div class="box box-1"></div>
                        <div class="box box-1"></div>
                    </div>
                    <div class="loader-inner">
                        <div class="box box-2"></div>
                        <div class="box box-2"></div>
                        <div class="box box-2"></div>
                    </div>
                    <div class="loader-inner">
                        <div class="box box-3"></div>
                        <div class="box box-3"></div>
                        <div class="box box-3"></div>
                    </div>
                    <div class="loader-inner">
                        <div class="box box-4"></div>
                        <div class="box box-4"></div>
                        <div class="box box-4"></div>
                    </div>
                </div>
           


<style type="text/css" >
.preloader .status {top:35% !important;left:45% !important;}
.loader{
    width: 270px;
    height: 180px;
    margin:  50px auto;
}
.loader .loader-inner{ display: inline-block; }
.loader .box{
    width: 50px;
    height: 50px;
    border-radius: 3px;
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    margin-bottom: 5px;
    box-shadow: 1px 1px 5px -2px rgba(0,0,0,0.75);
    transform-origin: right bottom;
}
.loader .box-1{ animation: loading-4 4s ease infinite; }
.loader .box-2{ animation: loading-3 4s ease infinite; }
.loader .box-3{ animation: loading-2 4s ease infinite; }
.loader .box-4{ animation: loading-1 4s ease infinite; }
@keyframes loading-1{
    0%{ transform: rotate(0deg) }
    12.5%{ transform: rotate(90deg) }
    87.5%{ transform: rotate(90deg) }
    100%{ transform: rotate(0deg) }
}
@keyframes loading-2{
    12.5%{ transform: rotate(0deg) }
    25%{ transform: rotate(90deg) }
    75%{ transform: rotate(90deg) }
    87.5%{ transform: rotate(0deg) }
}
@keyframes loading-3{
    25%{ transform: rotate(0deg) }
    37.5%{ transform: rotate(90deg) }
    62.5%{ transform: rotate(90deg) }
    75%{ transform: rotate(0deg) }
}
@keyframes loading-4{
    37.5%{ transform: rotate(0deg) }
    50%{ transform: rotate(90deg) }
    62.5%{ transform: rotate(0deg) }
}


</style>