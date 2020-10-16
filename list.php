<?php
$title = "学习笔记";
$keywords = "在学习笔记，日有所进，终有所成。";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
    <meta name="description" content="整理了非常实用的前端源码，并提供在线预览的网址。">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="//cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .jumbotron {
            background-color: #286090;
            color: #fff;
        }

        .jumbotron a {
            color: #fff;
        }

        header {
            height: 35vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main {
            margin-bottom: 50px;
        }

        .list-group{
            width:100%;
        }

        .list-group a {
            text-decoration: none;
            display: block;
            transition: 0.2s;
            padding:30px;
        }

        .list-group a:hover {
            box-shadow: 10px 10px 20px #ccc;
            transform: scale(1.1);
        }

        footer {
            background-color: #333;
            color: #fff;
            height: 10vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        footer a {
            color: #fff;
        }

        footer a:hover {
            color: #fff;
        }
    </style>
</head>

<body>
    <header class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-3"><a href=""><?php echo $title ?></a></h1>
            <p class="lead"><?php echo $keywords ?></p>
        </div>
    </header>
    <section class="main">
        <div class="container">
            <div class="row">
                <?php
                $hostdir = dirname(__FILE__) . '/data';
                //获取本文件目录的文件夹地址
                $filesnames = scandir($hostdir);
                $filesnames = array_reverse($filesnames);
                //获取也就是扫描文件夹内的文件及文件夹名存入数组 $filesnames
                // print_r ($filesnames);
                //在线截屏
                // $img = "//blinky.nemui.org/shot/400x300?http://9ba6f223-176a-4423-8c63-5cf0f058a583.coding.io/";
                echo '<div class="list-group">';
                foreach ($filesnames as $name) {
                    if ($name != '.' && $name != '..' && $name != 'README.md' && $name != 'index.md' && $name != 'index copy.md' && $name != '.git' && $name != '.idea' && $name != 'index.php') {
                        $url = $name;
                        // print_r($url);
                        $link = 'index.html?name='.$url.':index';
                        echo "<a href='$link' class='list-group-item list-group-item-action' target='_blank'>$url</a>";
                    }
                }
                echo '</div>';
                ?>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            &copy; <a href="http://gtd.sbsh.me">学习路径</a> 2020/10/15
        </div>
    </footer>
    <script src="//cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/jquery_lazyload/1.9.1/jquery.lazyload.min.js"></script>
    <script>
        //获取0-几的随机数
        var ranNum;
        //样式来自：http://getbootstrap.com/docs/4.0/components/card/
        var arr = ["bg-primary", "bg-success", "bg-danger", "bg-warning", "bg-info"];
        var arrLength = arr.length;
        var alert = document.querySelectorAll(".main .card");
        for (var i = 0; i < alert.length; i++) {
            ranNum = Math.floor(Math.random() * arrLength);
            alert[i].className += " " + arr[ranNum];
        }
        //js初始化lazyload并设置图片显示方式
        $(function() {
            $("img").lazyload({
                effect: "fadeIn"
            });
        });
    </script>
</body>

</html>