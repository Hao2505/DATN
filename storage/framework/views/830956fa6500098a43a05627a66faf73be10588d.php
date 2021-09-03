<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title><?php echo $__env->yieldContent('title'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="/css/style.css" rel='stylesheet' type='text/css' />
<link href="/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="/css/font.css" type="text/css"/>
<link href="/css/font-awesome.css" rel="stylesheet"> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="/js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="/admin" class="logo">
        Hao's blog
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <span class="username">Hao</span>
        </li>
        <!-- user login dropdown end -->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Books</span>
                        <i class="fa fa-angle-down float-right mr-1"></i>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo e(route('get.list.book')); ?>">List Book</a></li>
                        <li><a href="<?php echo e(route('get.list.category.book')); ?>">Category</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Blog</span>
                        <i class="fa fa-angle-down float-right mr-1"></i>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo e(route('get.list.post')); ?>">List post</a></li>
                        <li><a href="<?php echo e(route('get.list.category')); ?>">Category</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="<?php echo e(route('get.list.slider')); ?>">
                        <i class="fa fa-th"></i>
                        <span>Slider</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="<?php echo e(route('get.edit.aboutushome')); ?>">
                        <i class="fa fa-th"></i>
                        <span>About us home</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="<?php echo e(route('get.edit.donationinfomation')); ?>">
                        <i class="fa fa-th"></i>
                        <span>Donation Infomation</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('get.list.newsletter')); ?>">
                        <i class="fa fa-th"></i>
                        <span>Newsletter</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('get.list.order')); ?>">
                        <i class="fa fa-th"></i>
                        <span>Order</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('get.order.report')); ?>">
                        <i class="fa fa-th"></i>
                        <span>Report</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">

	<?php echo $__env->yieldContent('content'); ?>

</section>

<!--main content end-->
</section>
<script src="/js/bootstrap.js"></script>
<script src="/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/jquery.slimscroll.js"></script>
<script src="/js/jquery.nicescroll.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
<script src=<?php echo e(url('ckeditor/ckfinder.js')); ?>></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">

    $('.date').datepicker({  

       format: 'yyyy-mm-dd'

     });  

</script>  
<script>
    CKEDITOR.replace('classic-ckeditor5')
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .catch(error => {
            console.error(error);
        });
</script>
<style>
    .ck-editor__editable_inline {
        height: 400px;
    }
</style>

<script>
    $("#check_featured").on('change', function() {
        if ($(this).is(':checked')) {
            $(this).attr('value', '1');
        } else {
            $(this).attr('value', '0');
        }
    });
    if ($("#check_featured").is(':checked')) {
        $("#check_featured").attr('value', '1');
    } else {
        $("#check_featured").attr('value', '0');
    }
</script>

</body>
</html>
<?php /**PATH D:\work\DATN\blog\resources\views/backend/layout/basic_table.blade.php ENDPATH**/ ?>