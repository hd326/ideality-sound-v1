<div id="strip">
    <div id="date-join">
        <div id="date"></div>

        <script>
            function formatDate(date) {
                var monthNames = [
                    "January", "February", "March",
                    "April", "May", "June", "July",
                    "August", "September", "October",
                    "November", "December"
                ];

                var dayNames = [
                    "Monday", "Tuesday", "Wednesday",
                    "Thursday", "Friday", "Saturday", "Sunday"
                ];
                var nameDay = dayNames[date.getDay()];
                var day = date.getDate();
                var monthIndex = date.getMonth();
                var year = date.getFullYear();

                return nameDay + ', ' + monthNames[monthIndex] + ' ' + day + ', ' + year;
            }

            document.getElementById('date').innerHTML = formatDate(new Date());

        </script>
    </div>
    <nav>
        <ul>
            <li><i class="fab fa-youtube"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-twitter"></i></li>
            <li><i class="fab fa-facebook"></i></li>
            <li>
                <form action="/search/" method="POST" role="search">
                    @csrf
                    <input placeholder="Search" name="q">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </li>

        </ul>
    </nav>
</div>
<section id="login-strip">
    Login / Register
</section>
<div id="logo">
    <h1><i class="fas fa-microphone"></i>&nbsp;<span>Ideality</span><span>-sound</span></h1>
</div>
<header>
    <nav>
        <ul>
            <!--<li class="categories">
                Home +
                <div class="sub-holder">
                    <div class="sub-container">
                        <div class="columns">
                            <nav>
                                <ul>
                                    <li>Full Size</li>
                                    <li>Portables</li>
                                    <li>Electrostatics</li>
                                    <li>Orthodynamics</li>
                                    <li>Wireless</li>
                                </ul>
                            </nav>
                        </div>
                        <div class="columns">hey</div>
                        <div class="columns">hey</div>
                        <div class="columns">hey</div>
                    </div>
                </div>
            </li>-->
            <li id="icon">
                <div id="hamburger"></div>
            </li>
            <script>
                $(document).ready(function(){
                    $('#icon').click(function(){
                        $('#mobile-nav').toggleClass('active-nav');
                        $('body').toggleClass('active-body');
                    });
                    $('.side-categories i').click(function(){
                        $('#mobile-nav').toggleClass('active-nav');
                        $('body').toggleClass('active-body');
                    });
                    
                    $(window).resize(function() {
                        var width = $(window).width();
                        var active = "0";
                        if(width > 1533) {
                            var active1 = $('#mobile-nav').hasClass('active-nav');
                            if(active1) {
                                $('#mobile-nav').removeClass('active-nav');
                                $('body').removeClass('active-body');
                                
                            }
                            var active = "1";
                        } 
                        
                        if(width < 800) {
                            if (active == "1") {
                                $('#mobile-nav').addClass('active-nav');
                                $('body').addClass('active-body');
                            }
                        }

                        //var active1 = $('body').hasClass('active-body');
                        //if(width == 800) {
                        //    if(active1) {
                        //        $('#mobile-nav').toggleClass('active-nav');
                        //        $('body').toggleClass('active-body');
                        //    }
                        //}
                    });
                    //$mobileNavBar = $('#mobile-nav');
                    //$mainContent = $('body'); 
                    //$('#icon').click(function(){
                    //    $mobileNavBar.toggleClass('isOut');
                    //    var isOut = $mobileNavBar.hasClass('isOut');
                    //    $mobileNavBar.animate({marginLeft: isOut ? '315px' : 0}, 300);
                    //    $mainContent.toggleClass('isOut1');
                    //    var isOut1 = $mainContent.hasClass('isOut1');
                    //    $mainContent.animate({marginLeft: isOut1 ? '315px' : 'none'}, 300);
                    //});
                    //$('.side-categories i').click(function(){
                    //    $mobileNavBar.toggleClass('isOut');
                    //    var isOut = $mobileNavBar.hasClass('isOut');
                    //    $mobileNavBar.animate({marginLeft: isOut ? '315px' : 0}, 300);
                    //    $mainContent.toggleClass('isOut1');
                    //    var isOut1 = $mainContent.hasClass('isOut1');
                    //    $mainContent.animate({marginLeft: isOut1 ? '315px' : 'none'}, 300);
                    //});
                });
            </script>
            <li class="categories">
                <a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a>
            </li>
            <li class="categories">
                <a href="/tags/reviews" class="{{ (request()->is('tags/reviews')) ? 'active' : '' }}">Reviews</a>
            </li>
            <li class="categories">
                <a href="/tags/blog" class="{{ (request()->is('tags/blog')) ? 'active' : '' }}">Blog</a>
            </li>
            <li class="categories">
                <a href="/category/headphones/"
                    class="{{ (request()->is('category/headphones*')) ? 'active' : '' }}">Headphones <i
                        class="caret fas fa-chevron-down fa-1x"></i></a>
                <nav>
                    <ul>
                        <li><a href="/category/headphones/fullsize">Full Size</a></li>
                        <li><a href="/category/headphones/portables">Portable</a></li>
                        <li><a href="/category/headphones/planars">Planar</a></li>
                        <li><a href="/category/headphones/electrostatics">Electrostatic</a></li>
                    </ul>
                </nav>
            </li>
            <li class="categories">
                <a href="/category/source" class="{{ (request()->is('category/source*')) ? 'active' : '' }}">Sources <i
                        class="caret fas fa-chevron-down fa-1x"></i></a>
                <nav>
                    <ul>
                        <li><a href="/category/source/portable-source">DAPs</a></li>
                        <li><a href="/category/source/desktop-source">DACs</a></li>
                    </ul>
                </nav>
            </li>

            <li class="categories">
                <a href="/category/amplifiers"
                    class="{{ (request()->is('category/amplifiers*')) ? 'active' : '' }}">Amplification <i
                        class="caret fas fa-chevron-down fa-1x"></i></a>
                <nav>
                    <ul>
                        <li><a href="/category/amplifiers/portable-amplifiers">Portable AMPS</a></li>
                        <li><a href="/category/amplifiers/solid-state">Solid State</a></li>
                        <li><a href="/category/amplifiers/tube-amplifiers">Tubes</a></li>
                    </ul>
                </nav>
            </li>
            <li class="categories">
                <a href="/tags/best-gear" class="{{ (request()->is('tags/best-gear')) ? 'active' : '' }}">Best Gear</a>
            </li>
        </ul>
    </nav>
</header>
<section id="about-us-strip">
    <nav>
        <ul>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
            <li><a href="{{ route('disclaimer') }}">Disclaimer/Copyright</a></li>
        </ul>
    </nav>
</section>
<section id="sponsor-placement">
    Sponsor Here
</section>
