
            <div class="loader"></div>
        

<style type="text/css" >
.preloader .status {top:40% !important;}
.loader{
    width: 64px;
    height: 32px;
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?> ;
    margin: 50px auto; 
    border-top-left-radius: 32px;
    border-top-right-radius: 32px;
    overflow: hidden;
    position: relative;
}
.loader:before{
    content: "";
    width: 4px;
    height: 26.66667px;
    border-radius: 2px;
    background:  <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_background_color', '#fff' ))  ;  ?> ;
    position: absolute;
    top: 5.33333px;
    left: 30px;
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-animation: loading-1 4000ms infinite ease;
    animation: loading-1 4000ms infinite ease;
}
.loader:after{
    content: "";
    width: 12.8px;
    height: 12.8px;
    border-radius: 8px;
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_background_color', '#fff' ))  ;  ?>;
    position: absolute;
    top: 25.6px;
    left: 25.6px;
}
@-webkit-keyframes loading-1{
    0%{
        -webkit-transform: rotate(-50deg);
        transform: rotate(-50deg);
    }
    10%{
        -webkit-transform: rotate(20deg);
        transform: rotate(20deg);
    }
    20%{
        -webkit-transform: rotate(60deg);
        transform: rotate(60deg);
    }
    24%{
        -webkit-transform: rotate(60deg);
        transform: rotate(60deg);
    }
    40%{
        -webkit-transform: rotate(-20deg);
        transform: rotate(-20deg);
    }
    54%{
        -webkit-transform: rotate(70deg);
        transform: rotate(70deg);
    }
    56%{
        -webkit-transform: rotate(78deg);
        transform: rotate(78deg);
    }
    58% {
        -webkit-transform: rotate(73deg);
        transform: rotate(73deg);
    }
    60%{
        -webkit-transform: rotate(75deg);
        transform: rotate(75deg);
    }
    62%{
        -webkit-transform: rotate(70deg);
        transform: rotate(70deg);
    }
    70%{
        -webkit-transform: rotate(-20deg);
        transform: rotate(-20deg);
    }
    80%{
        -webkit-transform: rotate(20deg);
        transform: rotate(20deg);
    }
    83%{
        -webkit-transform: rotate(25deg);
        transform: rotate(25deg);
    }
    86%{
        -webkit-transform: rotate(20deg);
        transform: rotate(20deg);
    }
    89%{
        -webkit-transform: rotate(25deg);
        transform: rotate(25deg);
    }
    100%{
        -webkit-transform: rotate(-50deg);
        transform: rotate(-50deg);
    }
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(-50deg);
        transform: rotate(-50deg);
    }
    10%{
        -webkit-transform: rotate(20deg);
        transform: rotate(20deg);
    }
    20%{
        -webkit-transform: rotate(60deg);
        transform: rotate(60deg);
    }
    24%{
        -webkit-transform: rotate(60deg);
        transform: rotate(60deg);
    }
    40%{
        -webkit-transform: rotate(-20deg);
        transform: rotate(-20deg);
    }
    54%{
        -webkit-transform: rotate(70deg);
        transform: rotate(70deg);
    }
    56%{
        -webkit-transform: rotate(78deg);
        transform: rotate(78deg);
    }
    58%{
        -webkit-transform: rotate(73deg);
        transform: rotate(73deg);
    }
    60%{
        -webkit-transform: rotate(75deg);
        transform: rotate(75deg);
    }
    62%{
        -webkit-transform: rotate(70deg);
        transform: rotate(70deg);
    }
    70%{
        -webkit-transform: rotate(-20deg);
        transform: rotate(-20deg);
    }
    80%{
        -webkit-transform: rotate(20deg);
        transform: rotate(20deg);
    }
    83%{
        -webkit-transform: rotate(25deg);
        transform: rotate(25deg);
    }
    86%{
        -webkit-transform: rotate(20deg);
        transform: rotate(20deg);
    }
    89%{
        -webkit-transform: rotate(25deg);
        transform: rotate(25deg);
    }
    100%{
        -webkit-transform: rotate(-50deg);
        transform: rotate(-50deg);
    }
}



</style>