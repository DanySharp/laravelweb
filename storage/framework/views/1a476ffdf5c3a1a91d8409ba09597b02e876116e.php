<!DOCTYPE html>
<html>
<title>PHP Programminh | راههای ارتباطی</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo e(asset('css/w3.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/w3-theme-black.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
<body>

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
    <h1 class="w3-xxxlarge w3-text-theme">منوی ارتباطی</h1>
    <button class="w3-bar-item w3-button" onclick="w3_close()">بازگشت <i class="fa fa-remove"></i></button>
    <a href="http://localhost/posts/php-tech2" class="w3-bar-item w3-button">صفحه اصلی سایت</a>
    <a href="ayromloo.ir/buy" class="w3-bar-item w3-button"> فروشگاه سایت</a>
    <a href="/" class="w3-bar-item w3-button"> ارسال پیام</a>
</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
    <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i>
    <div class="w3-center">
        <h4>طراحی سایت و نرم افزار </h4>
        <h1 class="w3-xxxlarge w3-animate-bottom">طراحی سایت با لاراول</h1>
        <div class="w3-padding-32">
            <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">بازگشت به صفحه اصلی</button>
        </div>
    </div>
</header>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
        <header class="w3-container w3-theme-l1">
        <span onclick="document.getElementById('id01').style.display='none'"
              class="w3-button w3-display-topright">×</span>
            <h4>سوال : می خواهید به صفحه قبل برگردید؟</h4>
            <h5> <i class="fa fa-smile-o"></i></h5>
        </header>
        <div class="w3-padding">
            <p></p>
            <p>   <a class="w3-btn" href="/">بازگشت به صفحه اصلی</a></p>
        </div>
        <footer class="w3-container w3-theme-l1">
            <p></p>
        </footer>
    </div>
</div>

<?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linkha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<div class="w3-row-padding w3-center w3-margin-top">
    <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:460px">
            <h3><?php echo e($linkha->title); ?></h3><br>
            <i class="fa fa-at w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
            <a style="text-decoration: none;color: #FFFFFF" href=""><p style="color: #2a45ff;font-family: 'Segoe UI'"><?php echo e($linkha->phone); ?></p></a><br>
            <a style="text-decoration: none;color: #FFFFFF" href=""><p style="color: #2a45ff;font-family: 'Segoe UI'"><?php echo e($linkha->email); ?></p></a><br>
            <a style="text-decoration: none;color: #FFFFFF" href="<?php echo e($linkha->link); ?>"><p style="color: #2a45ff;font-family: 'Segoe UI'"><?php echo e($linkha->link); ?></p></a>


        </div>
    </div>

    <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:460px">
            <h3>شبکه های اجتماعی</h3><br>
            <i class="fa fa-500px w3-text-theme" style="font-size:120px"></i>
            <a style="text-decoration: none;color: #FFFFFF" href="<?php echo e($linkha->telegram); ?>"><p style="color: #2a45ff;font-family: 'Segoe UI'"><?php echo e($linkha->telegram); ?></p></a><br>
            <a style="text-decoration: none;color: #FFFFFF" href="<?php echo e($linkha->linkedin); ?>"><p style="color: #2a45ff;font-family: 'Segoe UI'"><?php echo e($linkha->linkedin); ?></p></a><br>
            <a style="text-decoration: none;color: #FFFFFF" href=""><p style="color: #2a45ff;font-family: 'Segoe UI'"><?php echo e($linkha->instagram); ?></p></a>
        </div>
    </div>

    <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:460px">

            <i class="fa fa-angellist w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
            <p style="font-family: 'B Yekan';"><?php echo e($linkha->matn); ?></p>

        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="w3-container">
    <hr>
    <div class="w3-center">
        <h2></h2>
    </div>

    <div class="w3-row">
        <div class="w3-col w3-container m2 w3-red"><p>JS</p></div>
        <div class="w3-col w3-container m2 w3-blue"><p>C#</p></div>
        <div class="w3-col w3-container m2 w3-blue-grey"><p> PHP</p></div>
        <div class="w3-col w3-container m2 w3-teal"><p>JAVA</p></div>
        <div class="w3-col w3-container m2 w3-yellow"><p>CSS</p></div>
        <div class="w3-col w3-container m2 w3-orange"><p>HTML</p></div>
    </div>

    <hr>





    <hr>

</div>


<hr>

<h2 style="font-family: 'Segoe UI'" class="w3-center">My Programming Status</h2>
<div class="w3-container">

    <div class="w3-light-gray">
        <div   id="myBar" class="w3-center w3-padding w3-theme" style="width:90%">HTML&CSS 90%</div>
        <br>
        <br>
        <div id="myBar" class="w3-center w3-padding w3-theme" style="width:80%">CSharp 80% </div>

        <br>
        <div id="myBar" class="w3-center w3-padding w3-theme" style="width:75%">PHP 75%</div>
        <br>
        <div id="myBar" class="w3-center w3-padding w3-theme" style="width:65%">laravel 65%</div>
    </div><br></div>
<hr>




<hr>


<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
    <h3></h3>
    <p style="text-align: center">Powered by <a href="https://www.ayremloo.ir" target="_blank">Https://Ayromloo.ir</a></p>
    <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
        <span class="w3-text w3-theme-light w3-padding">برو به اول صفحه</span> 
        <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
    // Side navigation
    function w3_open() {
        var x = document.getElementById("mySidebar");
        x.style.width = "100%";
        x.style.fontSize = "40px";
        x.style.paddingTop = "10%";
        x.style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }

    // Tabs
    function openCity(evt, cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        var activebtn = document.getElementsByClassName("testbtn");
        for (i = 0; i < x.length; i++) {
            activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " w3-dark-grey";
    }

    var mybtn = document.getElementsByClassName("testbtn")[0];
    mybtn.click();

    // Accordions
    function myAccFunc(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // Slideshows
    var slideIndex = 1;

    function plusDivs(n) {
        slideIndex = slideIndex + n;
        showDivs(slideIndex);
    }

    function showDivs(n) {
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }

    showDivs(1);

    // Progress Bars
    function move() {
        var elem = document.getElementById("myBar");
        var width = 5;
        var id = setInterval(frame, 10);
        function frame() {
            if (width == 100) {
                clearInterval(id);
            } else {
                width++;
                elem.style.width = width + '%';
                elem.innerHTML = width * 1  + '%';
            }
        }
    }
</script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\sitecms\resources\views/partials/about.blade.php ENDPATH**/ ?>