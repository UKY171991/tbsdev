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
    width: 150px;
    height: 80px;
    margin: 40px auto;
    position: relative;
}
.loader .loader-inner{
    width: 6px;
    height: 52px;
    background: <?php echo esc_attr( et_get_option( 'divi_DCT_preloader_color', '#fff' ))  ;  ?>;
    margin: 6px 4px;
    float: left;
}
.loader .loader-inner:nth-child(1n){
    margin-left: 4px;
    animation: loading-1 linear 500ms infinite;
}
.loader .loader-inner:nth-child(2n){ animation: loading-2 linear 500ms infinite; }
.loader .loader-inner:nth-child(3n){ animation: loading-3 linear 500ms infinite; }
.loader .loader-inner:nth-child(4n){ animation: loading-4 linear 500ms infinite; }
@keyframes loading-1{
    0%,50%,100%{
        transform: translateY(0);
    }
    25%{
        transform: translateY(-6px);
    }
    75%{
        transform: translateY(6px);
    }
}
@keyframes loading-2{
    0%,100%{
        transform: translateY(-6px);
    }
    25%,75%{
        transform: translateY(0);
    }
    50%{
        transform: translateY(6px);
    }
}
@keyframes loading-3{
    0%,100%{
        transform: translateY(6px);
    }
    25%,75%{
        transform: translateY(0);
    }
    50%{
        transform: translateY(-6px);
    }
}
@keyframes loading-4{
    0%,50%,100%{
        transform: translateY(0);
    }
    25%{
        transform: translateY(6px);
    }
    75%{
        transform: translateY(-6px);
    }
}

</style>