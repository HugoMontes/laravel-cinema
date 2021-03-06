@extends('front.layout.main')
@section('title','Principal')
@section('content')
<div class="header">
    <div class="top-header">
        <div class="logo">
            <a href="index.html">
                {{ Html::image('front/images/logo.png') }}       
            </a>
            <p>Movie Theater</p>
        </div>
        <div class="search">
            <form>
                <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
                <input type="submit" value="">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="header-info">
        <h1>BIG HERO 6</h1>
        <p class="age"><a href="#">All Age</a> Don Hall, Chris Williams</p>
        <p class="review">Rating	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;  8,5/10</p>
        <p class="review reviewgo">Genre	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; Animation, Action, Comedy</p>
        <p class="review">Release &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 7 November 2014</p>
        <p class="special">The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.</p>
        <a class="video" href="#"><i class="video1"></i>WATCH TRAILER</a>
        <a class="book" href="#"><i class="book1"></i>BOOK TICKET</a>
    </div>
</div>

<div class="review-slider">
    <ul id="flexiselDemo1">
        <li>{{ Html::image('front/images/r1.jpg') }}</li>
        <li>{{ Html::image('front/images/r2.jpg') }}</li>
        <li>{{ Html::image('front/images/r3.jpg') }}</li>
        <li>{{ Html::image('front/images/r4.jpg') }}</li>
        <li>{{ Html::image('front/images/r5.jpg') }}</li>
        <li>{{ Html::image('front/images/r6.jpg') }}</li>
    </ul>
</div>
<div class="news">
    <div class="col-md-6 news-left-grid">
        <h3>Don’t be late,</h3>
        <h2>Book your ticket now!</h2>
        <h4>Easy, simple & fast.</h4>
        <a href="#"><i class="book"></i>BOOK TICKET</a>
        <p>Get Discount up to <strong>10%</strong> if you are a member!</p>
    </div>
    <div class="col-md-6 news-right-grid">
        <h3>News</h3>
        <div class="news-grid">
            <h5>Lorem Ipsum Dolor Sit Amet</h5>
            <label>Nov 11 2014</label>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
        </div>
        <div class="news-grid">
            <h5>Lorem Ipsum Dolor Sit Amet</h5>
            <label>Nov 11 2014</label>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
        </div>
        <a class="more" href="#">MORE</a>
    </div>
    <div class="clearfix"></div>
</div>
<div class="more-reviews">
    <ul id="flexiselDemo2">
        <li>{{ Html::image('front/images/m1.jpg') }}</li>
        <li>{{ Html::image('front/images/m2.jpg') }}</li>
        <li>{{ Html::image('front/images/m3.jpg') }}</li>
        <li>{{ Html::image('front/images/m4.jpg') }}</li>
    </ul>	
</div>

@include('front.layout.footer')
@endsection

@section('script')
    <!-- Script Flexisel -->
    {!! Html::script('front/js/jquery.flexisel.js') !!} 
    <script type="text/javascript">

    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 6,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,    		
            pauseOnHover: false,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:480,
                    visibleItems: 2
                }, 
                landscape: { 
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: { 
                    changePoint:768,
                    visibleItems: 4
                }
            }
        });
      }); 

    $(window).load(function() {
        $("#flexiselDemo2").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,    		
            pauseOnHover: false,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:480,
                    visibleItems: 2
                }, 
                landscape: { 
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: { 
                    changePoint:768,
                    visibleItems: 3
                }
            }
      });
    });
    </script>
@endsection