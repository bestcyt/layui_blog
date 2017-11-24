{{--轮播图--}}
<div class="row">
    <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            {{--<div class="active item">…</div>--}}
            {{--<div class="item">…</div>--}}
            {{--<div class="item">…</div>--}}
            <div class="item active"><img src="{{ asset('1.jpg') }}"></div>
            <div class="item"><img src="{{ asset('2.jpg') }}"></div>
            <div class="item"><img src="{{ asset('3.jpg') }}"></div>
            <div class="item"><img src="{{ asset('4.jpg') }}"></div>
            <div class="item"><img src="{{ asset('5.jpg') }}"></div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
