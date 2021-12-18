
            <div class="loader">
                <div class="box-1"></div>
                <div class="box-2"></div>
                <div class="box-3"></div>
                <div class="box-4"></div>
                <div class="box-5"></div>
                <div class="box-6"></div>
                <div class="box-7"></div>
                <div class="box-8"></div>
                <div class="box-9"></div>
                <div class="box-10"></div>
                <div class="box-11"></div>
                <div class="box-12"></div>
                <div class="box-13"></div>
                <div class="box-14"></div>
                <div class="box-15"></div>
                <div class="box-16"></div>
            </div>
        


<style type="text/css" >
.preloader .status {top:35% !important;}
.loader{
    width: 58px;
    height: 58px;
    margin: 100px auto;
    position: relative;
}
.loader div{
    display: block;
    width: 12px;
    height: 12px;
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    opacity: 0;
    position: absolute;
    -webkit-animation: loading-1 4.6s ease-in-out infinite;
    animation: loading-1 4.6s ease-in-out infinite;
}
.loader .box-1{
    top: 0;
    left: 0;
    animation-delay: 1.06s;
}
.loader .box-2{
    top: 0;
    left: 16px;
    animation-delay: 0.97s;
}
.loader .box-3{
    top: 0;
    left: 31px;
    animation-delay: 0.87s;
}
.loader .box-4{
    top: 0;
    left: 47px;
    animation-delay: 0.78s;
}
.loader .box-5{
    top: 16px;
    left: 0;
    animation-delay: 0.69s;
}
.loader .box-6{
    top: 16px;
    left: 16px;
    animation-delay: 0.6s;
}
.loader .box-7{
    top: 16px;
    left: 31px;
    animation-delay: 0.51s;
}
.loader .box-8{
    top: 16px;
    left: 47px;
    animation-delay: 0.41s;
}
.loader .box-9{
    top: 31px;
    left: 0;
    animation-delay: 0.32s;
}
.loader .box-10{
    top: 31px;
    left: 16px;
    animation-delay: 0.23s;
}
.loader .box-11{
    top: 31px;
    left: 31px;
    animation-delay: 0.14s;
}
.loader .box-12{
    top: 31px;
    left: 47px;
    animation-delay: 0.05s;
}
.loader .box-13{
    top: 47px;
    left: 0;
    animation-delay: -0.05s;
}
.loader .box-14{
    top: 47px;
    left: 16px;
    animation-delay: -0.14s;
}
.loader .box-15{
    top: 47px;
    left: 31px;
    animation-delay: -0.23s;
}
.loader .box-16{
    top: 47px;
    left: 47px;
    animation-delay: -0.32s;
}
@-webkit-keyframes loading-1{
    0%{
        opacity: 0;
        -webkit-transform: translateY(-97px);
    }
    15%{
        opacity: 0;
        -webkit-transform: translateY(-97px);
    }
    30%{
        opacity: 1;
        -webkit-transform: translateY(0);
    }
    70%{
        opacity: 1;
        -webkit-transform: translateY(0);
    }
    85%{
        opacity: 0;
        -webkit-transform: translateY(97px);
    }
    100%{
        opacity: 0;
        -webkit-transform: translateY(97px);
    }
}
@keyframes loading-1{
    0%{
        opacity: 0;
        transform: translateY(-97px);
    }
    15%{
        opacity: 0;
        transform: translateY(-97px);
    }
    30%{
        opacity: 1;
        transform: translateY(0);
    }
    70%{
        opacity: 1;
        transform: translateY(0);
    }
    85%{
        opacity: 0;
        transform: translateY(97px);
    }
    100%{
        opacity: 0;
        transform: translateY(97px);
    }
}


</style>