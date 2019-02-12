<div class="header">
    <div class="logo">
        <h1 class="wow zoomIn animated" data-wow-delay=".5s"><a href="index.php">Tasty Food</a></h1>
    </div>
    <div class="top-nav">
        <span class="menu"><img src="images/menu.png" alt=""/></span>
        <ul>
            <li class="wow slideInDown animated" data-wow-delay=".5s"><a href="index.php">Home</a></li>
            <li class="wow slideInDown animated" data-wow-delay=".6s"><a href="about.php">About</a></li>					
            <li class="wow slideInDown animated" data-wow-delay=".7s"><a href="gallery.php">Gallery</a></li>
            <li class="wow slideInDown animated" data-wow-delay=".7s"><a href="codes.php">Codes</a></li>
            <li class="wow slideInDown animated" data-wow-delay=".8s"><a href="blog.php">Blog</a></li>
            <li class="wow slideInDown animated" data-wow-delay=".9s"><a href="contact.php">Contact</a></li>
        </ul>
        <!-- script-for-menu -->
        <script>					
            $("span.menu").click(function(){
                $(".top-nav ul").slideToggle("slow" , function(){
                });
            });
        </script>
        <!-- script-for-menu -->
    </div>
    <div class="clearfix"> </div>
</div>