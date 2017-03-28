<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
</head>
<body>
<!-----------banner开始------------->
    <div id="switcher">
        <a id="switch-panel" class="show-panel"><span id="icon"></span></a>
        <p style="font-size:10px">choose</p>
        <ul class="lists">
            <li><a id="pink" class="pink" data-original-title="Pink"></a></li>
            <li><a id="green" class="green" data-original-title="Green"></a></li>
            <li><a id="blue" class="blue" data-original-title="Blue"></a></li>
            <li><a id="brown" class="brown" data-original-title="Brown"></a></li>
        </ul>
    </div>
    <div id="home-banner">
        <div class="overlayer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 text-center">
                        <img src="assets/img/sad.jpg" class="main-img">
                            <h1 class="banner-title">柳昊妍个人网站</h1>
                            <h3 class="banner-information">黑龙江大学</h3>
                            <a class="btn btn-lg" href="about-sec">EXPLORE MYSELF</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center">
                        <a href="#about-sec" class="first">
                            <span></span>
                            <h3>ABOUT ME</h3>
                        </a>
                        <a href="#about-sec" class="second">
                            <span></span>
                            <h3>RESUME</h3>
                        </a>
                        <a href="#about-sec" class="three">
                            <span></span>
                            <h3>PROFILE</h3>
                        </a>
                        <a href="#about-sec" class="four">
                            <span></span>
                            <h3>HIRE ME</h3>
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 text-center">
                        <img src="assets/img/smile.jpg" class="main-img">
                        <h1 class="banner-title">experience of</h1>
                        <h3 class="banner-information">5</h3>
                        <a class="btn btn-lg" href="about-sec">点赞吧</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------banner结束------------------>

    <!--------------ABOUT ME开始--------------->
    <div id="about-sec">
        <div class="container">
            <div class="row">
                <div class="cil-lg-4 col-md-4 col-sm-4 left">
                    <h1>WHAT TO KNOW</h1>
                    <h1>ABOUT ME ?</h1>
                    <div class="color-strip"></div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 right">
                    <p>
                        Nulla facilisi. In hac habitasse platea dictumst.
                        Nulla facilisi. In hac habitasse platea dictumst.
                        Nulla pretium lectus vel justo iaculis blandit.
                        Nulla facilisi. In hac habitasse platea dictumst.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nulla pretium lectus vel justo iaculis blandit.
                        Nulla facilisi. In hac habitasse platea dictumst.
                    </p>
                    <p>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nulla pretium lectus vel justo iaculis blandit.
                        Nulla facilisi. In hac habitasse platea dictumst.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nulla pretium lectus vel justo iaculis blandit.
                        Nulla facilisi. In hac habitasse platea dictumst.
                        Nulla facilisi. In hac habitasse platea dictumst.

                    </p>
                </div>
            </div>
        </div>
    </div>



    <!--------------ABOUT ME结束-------------->
    <!--------------SKILL开始-------------->
    <div id="skill-sec">
        <div class="overlayer">
            <div class="container">
                <div class="row pad-top-bottom">
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center">
                        <span class="chart" data-percent="75">
                            <span class="percent">
                                "75"
                            </span>
                            <canvas height="150" width="150"></canvas>
                        </span>
                        <h4>JQUERY</h4>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center">
                        <span class="chart" data-percent="95">
                            <span class="percent">
                                "95"
                            </span>
                            <canvas height="150" width="150"></canvas>
                        </span>
                        <h4>PHP</h4>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center">
                        <span class="chart" data-percent="65">
                            <span class="percent">
                                "65"
                            </span>
                            <canvas height="150" width="150"></canvas>
                        </span>
                        <h4>NODEJS</h4>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center">
                        <span class="chart" data-percent="80">
                            <span class="percent">
                                "80"
                            </span>
                            <canvas height="150" width="150"></canvas>
                        </span>
                        <h4>HTML5</h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h1>CHECKOUT MY</h1>
                        <h1>SKILL SET</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nulla pretium lectus vel justo iaculis blandit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------SKILL结束-------------->

<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/active.js"></script>
</body>
</html>