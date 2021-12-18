
            <div class="loader">
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
                <div class="loader-inner"></div>
            </div>
         

<style type="text/css" >

.preloader .status {top:40% !important;}
.loader{
    width: 140px;
    height: 50px;
    margin: 40px auto;
}
.loader .loader-inner{
    display: inline-block;
    position: relative;
    z-index: 1;
}
.loader .loader-inner:not(:last-child){
    margin-right: 9px;
}
.loader .loader-inner:before,
.loader .loader-inner:after{
    content: "";
    display: inline-block;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    position: absolute;
}
.loader .loader-inner:nth-child(1):before{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(-200%);
    animation: loading-1 1.15s linear infinite;
    animation-delay: -1.04s;
}
.loader .loader-inner:nth-child(1):after{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(200%);
    animation: loading-2 1.15s linear infinite;
    animation-delay: -1.04s;
}
.loader .loader-inner:nth-child(2):before{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(-200%);
    animation: loading-1 1.15s linear infinite;
    animation-delay: -2.07s;
}
.loader .loader-inner:nth-child(2):after{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(200%);
    animation: loading-2 1.15s linear infinite;
    animation-delay: -2.07s;
}
.loader-inner:nth-child(3):before{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(-200%);
    animation: loading-1 1.15s linear infinite;
    animation-delay: -3.11s;
}
.loader .loader-inner:nth-child(3):after{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(200%);
    animation: loading-2 1.15s linear infinite;
    animation-delay: -3.11s;
}
.loader .loader-inner:nth-child(4):before{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(-200%);
    animation: loading-1 1.15s linear infinite;
    animation-delay: -4.14s;
}
.loader .loader-inner:nth-child(4):after{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(200%);
    animation: loading-2 1.15s linear infinite;
    animation-delay: -4.14s;
}
.loader .loader-inner:nth-child(5):before{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(-200%);
    animation: loading-1 1.15s linear infinite;
    animation-delay: -5.18s;
}
.loader .loader-inner:nth-child(5):after{
    transform: translateY(200%);
    animation: loading-2 1.15s linear infinite;
    animation-delay: -5.18s;
    background-color:<?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
}
.loader .loader-inner:nth-child(6):before{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(-200%);
    animation: loading-1 1.15s linear infinite;
    animation-delay: -6.21s;
}
.loader .loader-inner:nth-child(6):after{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(200%);
    animation: loading-2 1.15s linear infinite;
    animation-delay: -6.21s;
}
.loader .loader-inner:nth-child(7):before{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(-200%);
    animation: loading-1 1.15s linear infinite;
    animation-delay: -7.25s;
}
.loader .loader-inner:nth-child(7):after{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(200%);
    animation: loading-2 1.15s linear infinite;
    animation-delay: -7.25s;
}
.loader .loader-inner:nth-child(8):before{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(-200%);
    animation: loading-1 1.15s linear infinite;
    animation-delay: -8.28s;
}
.loader .loader-inner:nth-child(8):after{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(200%);
    animation: loading-2 1.15s linear infinite;
    animation-delay: -8.28s;
}
.loader .loader-inner:nth-child(9):before{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(-200%);
    animation: loading-1 1.15s linear infinite;
    animation-delay: -9.32s;
}
.loader .loader-inner:nth-child(9):after{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(200%);
    animation: loading-2 1.15s linear infinite;
    animation-delay: -9.32s;
}
.loader-inner:nth-child(10):before{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(-200%);
    animation: loading-1 1.15s linear infinite;
    animation-delay: -10.35s;
}
.loader .loader-inner:nth-child(10):after{
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    transform: translateY(200%);
    animation: loading-2 1.15s linear infinite;
    animation-delay: -10.35s;
}
@-webkit-keyframes loading-1{
    0%{
        -webkit-transform: scale(1) translateY(-200%);
        z-index: 1;
    }
    25%{
        -webkit-transform: scale(1.3) translateY(0);
        z-index: 1;
    }
    50%{
        -webkit-transform: scale(1) translateY(200%);
        z-index: -1;
    }
    75%{
        -webkit-transform: scale(0.7) translateY(0);
        z-index: -1;
    }
    100%{
        -webkit-transform: scale(1) translateY(-200%);
        z-index: -1;
    }
}
@keyframes loading-1{
    0%{
        transform: scale(1) translateY(-200%);
        z-index: 1;
    }
    25%{
        transform: scale(1.3) translateY(0);
        z-index: 1;
    }
    50%{
        transform: scale(1) translateY(200%);
        z-index: -1;
    }
    75%{
        transform: scale(0.7) translateY(0);
        z-index: -1;
    }
    100%{
        transform: scale(1) translateY(-200%);
        z-index: -1;
    }
}
@-webkit-keyframes loading-2{
    0%{
        -webkit-transform: scale(1) translateY(200%);
        z-index: -1;
    }
    25%{
        -webkit-transform: scale(0.7) translateY(0);
        z-index: -1;
    }
    50%{
        -webkit-transform: scale(1) translateY(-200%);
        z-index: 1;
    }
    75%{
        -webkit-transform: scale(1.3) translateY(0);
        z-index: 1;
    }
    100%{
        -webkit-transform: scale(1) translateY(200%);
        z-index: 1;
    }
}
@keyframes loading-2{
    0%{
        transform: scale(1) translateY(200%);
        z-index: -1;
    }
    25%{
        transform: scale(0.7) translateY(0);
        z-index: -1;
    }
    50%{
        transform: scale(1) translateY(-200%);
        z-index: 1;
    }
    75%{
        transform: scale(1.3) translateY(0);
        z-index: 1;
    }
    100%{
        transform: scale(1) translateY(200%);
        z-index: 1;
    }
}

</style>