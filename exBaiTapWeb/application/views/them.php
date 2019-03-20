<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Clothing Template, free HTML CSS template</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <
    <!--
    Template 2062 Clothing
    http://www.tooplate.com/view/2062-clothing
    -->
    <link href="<?php
    echo LAYOUT_URL
    ?>tooplate_style.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="<?php
    echo LAYOUT_URL
    ?>css/ddsmoothmenu.css"/>

    <script type="text/javascript" src="<?php
    echo LAYOUT_URL
    ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php
    echo LAYOUT_URL
    ?>js/ddsmoothmenu.js">

        /***********************************************
         * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
         * This notice MUST stay intact for legal use
         * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
         ***********************************************/

    </script>

    <script type="text/javascript">

        ddsmoothmenu.init({
            mainmenuid: "tooplate_menu", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })

    </script>

    <link rel="stylesheet" type="text/css" media="all" href="<?php
    echo LAYOUT_URL
    ?>css/jquery.dualSlider.0.2.css"/>

    <script src="<?php
    echo LAYOUT_URL
    ?>js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="<?php
    echo LAYOUT_URL
    ?>js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="<?php
    echo LAYOUT_URL
    ?>js/jquery.timers-1.2.js" type="text/javascript"></script>
    <script src="<?php
    echo LAYOUT_URL
    ?>js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>


    <script type="text/javascript">

        $(document).ready(function () {

            $("#carousel").dualSlider({
                auto: false,
                autoDelay: 6000,
                easingCarousel: "swing",
                easingDetails: "easeOutBack",
                durationCarousel: 1000,
                durationDetails: 600
            });

        });


    </script>

    <link rel="stylesheet" href="<?php
    echo LAYOUT_URL
    ?>css/slimbox2.css" type="text/css" media="screen"/>
    <script type="text/JavaScript" src="<?php
    echo LAYOUT_URL
    ?>js/slimbox2.js"></script>

</head>
<body>

<div id="tooplate_wrapper">
    <div id="tooplate_header">
        <div id="header_top">
            <div id="site_title"><a href="index">Clothing Template</a></div>
            <div id="tooplate_menu" class="ddsmoothmenu">
                <ul>
                    <li><a href="index" class="selected">Trang chủ</a></li>
                    <li><a href="manageProducts">Sản phẩm</a>
                    </li>
                    <li><a href="viewCart">Thanh Toán</a></li>
                    <li><a href="manageProducts">Quản Lý</a></li>
                    <?php
                    if (isset($_SESSION['user']))
                    {
                        echo "<li><a href='DangNhap1.html' class='last'>Hello {$_SESSION['user'][0]['tenkh']}</a></li>";
                        echo "<li><a href='logout' class='last'>Đăng Xuất
                </a></li>";
                    } else
                    {
                        echo '<li><a href="login" class="last">Đăng Nhập</a></li>';
                    }
                    ?>

                </ul>
                <br style="clear: left"/>
            </div> <!-- end of tooplate_menu -->
        </div> <!-- END of header top -->

        <div id="header_bottom">

            <div id="tooplate_search">
                <form action="#" method="get">
                    <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)"
                           onblur="clearText(this)" class="txt_field"/>
                    <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="search"
                           class="sub_btn"/>
                </form>
            </div>
        </div> <!-- END of header bottom -->
    </div> <!-- END of header -->

    <div id="tooplate_main"><span class="main_border main_border_t"></span><span
                class="main_border main_border_b"></span>
        <div class="col col_1">
            <h1>Thêm</h1>
        </div>
        <form action="addProduct" method="POST" enctype='multipart/form-data'>
            <div class="col col_2">
                <label>Mã Nhà Sản Xuất:<label>
                        <input name="Masx" type="text" id="fullname" style="width:300px;"/>
                        <label>Mã Loại:</label>
                        <input name="Loai" type="text" id="address" style="width:300px;"/>
                        <label>Mã Hàng:</label>
                        <input name="Ma" type="text" id="city" style="width:300px;"/>
                        <label>Hình:</label>
                        <input type="file" name="hinh"/>
            </div>

            <div class="col col_2">
                <label>Tên Hàng:</label>
                <input name="Ten" type="text" id="country" style="width:300px;"/>
                <label>Mô Tã:</label>
                <input name="Mota" type="text" id="country" style="width:300px;"/>
                <label>Giá:</label>
                <input name="Gia" type="text" id="country" style="width:300px;"/>
                </br>
                <input type="submit" value="Thêm"/>
            </div>
        </form>
    </div>
    <hr/>
    <div class="col col_1">
        <p><a href="#"><img src="images/1311260370_paypal-straight.png" alt="paypal"/></a>&nbsp;Recommended if you have
            a PayPal account. Fastest delivery time.</p>
    </div>
    <div class="clear"></div>
</div> <!-- END of main -->

</div> <!-- END of wrapper -->

<div id="tooplate_bottom_wrapper">
    <div id="tooplate_bottom">
        <div class="col col_4">
            <h4>Information</h4>
        </div>
        <div class="col col_4">
            <h4>Services &amp; Support</h4>

        </div>
        <div class="col col_4 twitter">
            <h4>Pages</h4>


        </div>
        <div class="col col_4">
            <h4>Newsletter</h4>
            <div class="clear h30"></div>
            <a href="#"><img src="<?php echo LAYOUT_URL;?>images/facebook.png" alt="Facebook"/></a>
            <a href="#"><img src="<?php echo LAYOUT_URL;?>images/google.png" alt="Google"/></a>
            <a href="#"><img src="<?php echo LAYOUT_URL;?>images/skype.png" alt="Skype"/></a>
            <a href="#"><img src="<?php echo LAYOUT_URL;?>images/twitter2.png" alt="Twitter"/></a>
        </div>
        <div class="clear"></div>
    </div> <!-- END of bottom -->
</div> <!-- END of bottom wrapper -->

<div id="tooplate_footer_wrapper">
    <div id="tooplate_footer">
        Copyright © 2048 Your Company Name

        - Designed by <a href="http://www.tooplate.com">Tooplate</a>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->


</body>
</html>