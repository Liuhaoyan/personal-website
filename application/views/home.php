<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <link  id="skin" rel="stylesheet" type="text/css" href="assets/css/themes/pink.css">
</head>
<body>
<!-----------banner开始------------->
    <div id="switcher" >
        <a id="switch-panel" class="hide-panel" ><span id="icon"></span></a>
        <p style="font-size:10px">choose</p>
        <ul class="lists">
            <li><a title="Pink" id="pink" class="pink" onclick="skin1();"></a></li>
            <li><a title="Green" id="green" class="green" onclick="skin2();"></a></li>
            <li><a title="Blue" id="blue" class="blue" onclick="skin3();"></a></li>
            <li><a title="Brown" id="brown" class="brown" onclick="skin4();"></a></li>
        </ul>
    </div>
    <div id="home-banner">
        <div class="overlayer">
            <div class="container">
                <div class="row move-me pad-top-bottom">
                    <div class="col-lg-5 col-md-5 col-sm-5 text-center">
                        <img src="assets/img/1.jpg" class="main-img img-circle wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt="" id="picture1">
                            <h1 class="banner-title wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">柳昊妍个人网站</h1>
                            <h3 class="banner-information wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">黑龙江大学</h3>
                            <a class="btn custom-btn-one btn-lg wow bounceIn animated" href="#about-sec" data-wow-duration="1s" data-wow-delay=".8s">EXPLORE MYSELF</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center">
                        <a href="#about-sec" class="first wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".1s">
                            <span></span>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">ABOUT ME</h3>
                        </a>
                        <a href="#skill-sec" class="second wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".3s">
                            <span></span>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">SKILL</h3>
                        </a>
                        <a href="#portfolio-sec" class="three wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".5s">
                            <span></span>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">PROFILE</h3>
                        </a>
                        <a href="#hire-sec" class="four wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".7s">
                            <span></span>
                            <h3>CONTACT ME</h3>
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 text-center">
                        <img src="assets/img/2.jpg" class="main-img-2 img-circle wow bounceIn animated" id="picture2" data-wow-duration="1s" data-wow-delay=".2s" alt="">
                        <h1 class="banner-title wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">EXPERIENCE OF</h1>
                        <h3 class="banner-information wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">5</h3>
                        <a class="btn custom-btn-one btn-lg wow bounceIn animated" href="#" data-wow-duration="1s" data-wow-delay=".8s">点赞吧</a>
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
                <div class="cil-lg-4 col-md-4 col-sm-4 left wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                    <h1>WHAT TO KNOW</h1>
                    <h1>ABOUT ME ?</h1>
                    <div class="color-strip"></div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 right wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                    <p>
                       基础知识扎实，对工作认真负责，积极主动，反应迅速，具有良好的沟通能力<br/>
                       有良好的团队合作意识，有较强的协调能力，团队精神，集体荣誉感强<br/>
                       听从领导的指挥，服从组织安排，有较强的学习能力，自学能力较强<br/>
                    </p>
                    <p>
                        有进取心，能吃苦，平易近人，通情分明事理<br/>
                        遇事冷静，热情，性格较为温婉平淡<br/>
                        喜欢运动，有耐心有韧性，喜欢健身，喜欢旅游，喜欢挑战新鲜事物<br/>
                        喜欢看书，丰富自己 .<br/>
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
                <div class="row pad-top-bottom move-me">
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                        <span class="chart" data-percent="75">
                            <span class="percent">
                                "75"
                            </span>
                            <span class="percent-icon">%</span>
                        </span>
                        <h4>JQUERY</h4>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                        <span class="chart" data-percent="95">
                            <span class="percent">
                                "95"
                            </span>
                            <span class="percent-icon">%</span>
                        </span>
                        <h4>PHP</h4>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center  wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">
                        <span class="chart" data-percent="65">
                            <span class="percent">
                                "65"
                            </span>
                            <span class="percent-icon">%</span>
                        </span>
                        <h4>NODEJS</h4>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center  wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">
                        <span class="chart" data-percent="80">
                            <span class="percent">
                                "80"
                            </span>
                            <span class="percent-icon">%</span>
                        </span>
                        <h4>HTML5</h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 text-center  wow bounceIn animated skill-detail" data-wow-duration="1s" data-wow-delay=".8s">
                        <table>
                            <tr>
                                <td>
                                    1、熟练使用HTML&CSS,了解常见的HTML和CSS兼容性问题，能够编写符合WEB标准的页面
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2、熟悉原生JS和DOM结构，封装过一些常见的DOM API,熟悉常见JS兼容性和性能优化
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3、熟练使用jQuery，阅读过jQuery源代码，了解其原理及常见优化方案
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4、熟练使用require.js进行前端模块化开发，了解其运行原理
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5、熟练使用HTML5和CSS3，常使用的特性有：HTML5新标签，HTML5新表单属性，HTML5Web存储,Canvas,HTML5历史管理,CSS3新选择器，CSS3新UI样式，CSS3动画，CSS3弹性核模型等
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6、了解Angular.js,可以使用其制作简单的单页面程序
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    7、了解Node.js，可以使用node+express,完成MVC模式整站开发
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    8、了解vue.js，会使用基本的方法，了解echarts组件，绘制图表
                                </td>
                            </tr>
                        </table>
<!--                        <div>1、熟练使用HTML&CSS,了解常见的HTML和CSS兼容性问题，能够编写符合WEB标准的页面</div>-->
<!--                        <div>2、熟悉原生JS和DOM结构，封装过一些常见的DOM API,熟悉常见JS兼容性和性能优化</div>-->
<!--                        <div>3、熟练使用jQuery，阅读过jQuery源代码，了解其原理及常见优化方案</div>-->
<!--                        <div>4、熟练使用require.js进行前端模块化开发，了解其运行原理</div>-->
<!--                        <div>5、熟练使用HTML5和CSS3，常使用的特性有：HTML5新标签，HTML5新表单属性，HTML5Web存储,Canvas,HTML5历史管理,CSS3新选择器，CSS3新UI样式，CSS3动画，CSS3弹性核模型等</div>-->
<!--                        <div>6、了解Angular.js,可以使用其制作简单的单页面程序</div>-->
<!--                        <div>7、了解Node.js，可以使用node+express,完成MVC模式整站开发</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------SKILL结束-------------->
    <!--------------HOBBY开始-------------->
    <div id="hob-sec">
        <div class="container">
            <div class="row">
                    <ul class="nav nav-tabs" id="hobby-category">
                        <?php  foreach ($categories as $category){
                        ?>
                            <li  role="presentation" ><a ><?php echo $category->hobby_cate_name;?></a></li>
                        <?php
                        }?>
                    </ul>
                    <div id="selected-content">
<!--                        --><?php //foreach ($hobbies as $hobby){
//                         ?>
<!--                            <div>-->
<!--                                <img src="--><?php //echo $hobby->hobby_img?><!--" alt="" class="col-lg-4 col-md-4 col-sm-4">-->
<!--                                <img src="--><?php //echo $hobby->hobby_img?><!--" alt="" class="col-lg-4 col-md-4 col-sm-4">-->
<!--                                <img src="--><?php //echo $hobby->hobby_img?><!--" alt="" class="col-lg-4 col-md-4 col-sm-4">-->
<!--                            </div>-->
<!--                         --><?php //
//                        }?>
                        <div id="travel-imgs"  class="selected">
                            <img src="assets/img/travel1.jpg" alt="" class="col-lg-4 col-md-4 col-sm-4">
                            <img src="assets/img/travel2.jpg" alt="" class="col-lg-4 col-md-4 col-sm-4">
                            <img src="assets/img/travel3.jpg" alt="" class="col-lg-4 col-md-4 col-sm-4">
                        </div>
                        <div id="sport-imgs">
                            <img src="assets/img/sport1.jpg" alt="" class="col-lg-4 col-md-4 col-sm-4">
                            <img src="assets/img/sport2.jpg" alt="" class="col-lg-4 col-md-4 col-sm-4">
                            <img src="assets/img/sport3.jpg" alt="" class="col-lg-4 col-md-4 col-sm-4">
                        </div>
                        <div id="eat-imgs">
                            <img src="assets/img/eat1.jpg" alt="" class="col-lg-4 col-md-4 col-sm-4">
                            <img src="assets/img/eat2.jpg" alt="" class="col-lg-4 col-md-4 col-sm-4">
                            <img src="assets/img/eat3.jpg" alt="" class="col-lg-4 col-md-4 col-sm-4">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--------------HOBBY结束-------------->
    <!--------------PEOFILE开始-------------->
<div id="portfolio-sec">
    <div class="container">
        <div class="row text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center">
                <h1>RECENT PROJECTS</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
        </div>
        <div class="row  wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s" id="project">
            <div id="project-content">
                <?php foreach($results as $result){
                    ?>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  blog" id="blog">
                        <div class="grid">
                            <figure class="effect-sadie">
                                <img src="<?php echo $result->img;?>" alt=""/>
                                <figcaption>
                                    <h2><?php echo $result->title;?></h2>
                                    <p><?php echo $result->content;?></p>
                                    <a href="blog/blog_detail">View more</a>
                                </figcaption>
                            </figure>
                        </div>

                    </div>
                    <?php
                }?>
            </div>

        </div>
    </div>
</div>
    <!--------------PEOFILE结束-------------->
    <!--------------CONTACT开始-------------->
        <div id="hire-sec">
            <div class="overlay">
                <div class="container">
                    <div class="row text-center pad-top-bottom wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                            <h1>CONTACT ME</h1>
                            <p>here you can speak everything,if you have some precious advices,please leave a message to know each other.</p>
                            <br />
                        </div>
                    </div>
                    <div class="row  move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s" >
                        <div class="col-lg-6  col-md-6  col-sm-6" id="message-sub">
                            <form action="home/get_message" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Your Name"  id="name" name="name"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Your Email" id="email" name="email"/>
                                    <input type="text" class="" id="attention" name="attention" value="">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message"  class="form-control" style="min-height: 100px;" placeholder="Message" ></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit"  class="btn custom-btn-one " id="sub" value="CONTACT ME"/>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 col-lg-offset-1  col-md-4  col-md-offset-1 col-sm-4 col-sm-offset-1" id="footer-sec">
                            <h3><strong>MY LOCATION </strong></h3>
                            <p>哈尔滨市黑龙江大学 </p>
                            <p><i>ADDRESS :</i> 南岗区</p>
                            <p><i>EMAIL :</i> 854215903@qq.com</p>
                         </div>
                     </div>
                 </div>
            </div>
        </div>

     <!--------------CONTACTE结束-------------->
     <!--------------FOOTER开始-------------->


     <!--------------FOOTER开始-------------->
       <!--------------回到顶部开始-------------->
       <div class="move-me">
           <a href="#home-banner" class="scrollup"><span id="top"></span></a>
       </div>

        <!--------------回到顶部开始-------------->

<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/active.js"></script>
<script src="assets/js/require.js" data-main="assets/js/index" ></script>
<!--<script src="assets/js/react.js" ></script>-->
<!--<script src="assets/js/react-dom.js"></script>-->
<script src="assets/js/footer.js" type=""></script>
<script>
    function skin1(){
        var skin=document.getElementById('skin');
        skin.href="assets/css/themes/pink.css";
    }
    function skin2(){
        var skin=document.getElementById('skin');
        skin.href="assets/css/themes/green.css";
    }
    function skin3(){
        var skin=document.getElementById('skin');
        skin.href="assets/css/themes/blue.css";
    }
    function skin4(){
        var skin=document.getElementById('skin');
        skin.href="assets/css/themes/brown.css";
    }
</script>
</body>
</html>