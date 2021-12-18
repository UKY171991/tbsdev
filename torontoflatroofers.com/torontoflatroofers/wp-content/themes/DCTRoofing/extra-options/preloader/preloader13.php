
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
       

<style type="text/css" >
.preloader .status {top:35% !important;}
.loader{
    width: 100px;
    height: 70px;
    margin: 50px auto;
    position: relative;
}
.loader span{
    display: block;
    width: 5px;
    height: 10px;
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    position: absolute;
    bottom: 0;
    animation: loading-1 2.25s  infinite ease-in-out;
}
.loader span:nth-child(2){
    left: 11px;
    animation-delay: .2s;
}
.loader span:nth-child(3){
    left: 22px;
    animation-delay: .4s;
}
.loader span:nth-child(4){
    left: 33px;
    animation-delay: .6s;
}
.loader span:nth-child(5){
    left: 44px;
    animation-delay: .8s;
}
.loader span:nth-child(6){
    left: 55px;
    animation-delay: 1s;
}
.loader span:nth-child(7){
    left: 66px;
    animation-delay: 1.2s;
}
.loader span:nth-child(8){
    left: 77px;
    animation-delay: 1.4s;
}
.loader span:nth-child(9){
    left: 88px;
    animation-delay: 1.6s;
}
@-webkit-keyframes loading-1{
    0%{
        height: 10px;
        transform: translateY(0px);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
    25%{
        height: 60px;
        transform: translateY(15px);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
    50%{
        height: 10px;
        transform: translateY(-10px);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
    100%{
        height: 10px;
        transform: translateY(0px);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
}
@keyframes loading-1{
    0%{
        height: 10px;
        transform: translateY(0px);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
    25%{
        height: 60px;
        transform: translateY(15px);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
    50%{
        height: 10px;
        transform: translateY(-10px);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
    100%{
        height: 10px;
        transform: translateY(0px);
        background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    }
}

</style>