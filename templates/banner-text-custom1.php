<div class="bnr-text wow slideInUp animated" data-wow-delay=".5s">
   <div class="flexslider">
        <ul class="slides">
            <li>
                <h2 class="bnr-title">Traditional baking of food</h2>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum fuga.</p>								
            </li>
            <li>								
                <h3 class="bnr-title">We have a lot of foodstuffs</h3>
                <p>Vero eos at et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum fuga.</p>
            </li>
            <li>
                <h3 class="bnr-title">Delicious food recipes & Soups</h3>
                <p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum fuga.</p>
            </li>
        </ul>
        <div class="clearfix"></div>
        <!--FlexSlider-->
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
                });
            });
        </script>
        <!--End-slider-script-->
   </div>
   <a href="about.html" class="more more-right">More About</a>
   <a href="single.html" class="more more-left">Learn More</a>
</div>