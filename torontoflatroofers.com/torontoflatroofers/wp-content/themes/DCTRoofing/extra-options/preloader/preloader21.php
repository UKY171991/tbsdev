
            <div class="loader">
                <div class="loader-inner-1">
                    <div class="loading">
                        <div class="loading">
                            <div class="loading">
                                <div class="loading">
                                    <div class="loading">
                                        <div class="loading"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="loader-inner-2">
                    <div class="loading">
                        <div class="loading">
                            <div class="loading">
                                <div class="loading">
                                    <div class="loading">
                                        <div class="loading"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="loader-inner-3">
                    <div class="loading">
                        <div class="loading">
                            <div class="loading">
                                <div class="loading">
                                    <div class="loading">
                                        <div class="loading"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="loader-inner-4">
                    <div class="loading">
                        <div class="loading">
                            <div class="loading">
                                <div class="loading">
                                    <div class="loading">
                                        <div class="loading"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       




<style type="text/css" >
.preloader .status {top:35% !important;}
.loader{
    width: 200px;
    height: 200px;
    margin: 0 auto 20px;
    position: relative;
}
.loader .loader-inner-1{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: rotate(90deg);
}
.loader .loader-inner-2{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: rotate(-90deg);
}
.loader .loader-inner-3{
    position: absolute;
    top: 50%;
    left: 50%;
}
.loader .loader-inner-4{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: rotate(-180deg);
}
.loader .loading{
    display: block;
    width: 8px;
    height: 29px;
    border-radius: 10px;
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    -webkit-animation: loading-1 2.88s ease infinite;
    animation: loading-1 2.88s ease infinite;
}
@-webkit-keyframes loading-1{
    0%{
        -webkit-transform: translateX(0) translateY(0) rotate(0);
    }
    50%{
        -webkit-transform: translateX(400%) translateY(100%) rotate(90deg);
    }
    100%{
        -webkit-transform: translateX(0) translateY(0) rotate(0);
    }
}
@keyframes loading-1{
    0%{
        transform: translateX(0) translateY(0) rotate(0);
    }
    50%{
        transform: translateX(400%) translateY(100%) rotate(90deg);
    }
    100%{
        transform: translateX(0) translateY(0) rotate(0);
    }
} 


</style>