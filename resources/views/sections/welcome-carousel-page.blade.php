<div class="welcome-page w-screen flex justify-center  my-2">
    <div class="carousel w-8xl">
        <div id="slide1" class="carousel-item relative w-full">
            <img src="images/welcome-page-carousel/frontpage.png" class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide3" class="btn btn-circle">❮</a>
                <a href="#slide2" class="btn btn-circle">❯</a>
            </div>
            <button class="btn btn-primary absolute top-[53%] left-[7%] max-md:hidden"><a href="{{ route('loan.start') }}">Apply Now</a></button>
        </div>

        <div id="slide2" class="carousel-item relative w-full">
            <img
            src="images/welcome-page-carousel/frontpage2.png"
            class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
            <a href="#slide1" class="btn btn-circle">❮</a>
            <a href="#slide3" class="btn btn-circle">❯</a>
            </div>
        </div>

        <div id="slide3" class="carousel-item relative w-full">
            <img
            src="images/welcome-page-carousel/frontpage3.png"
            class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
            <a href="#slide2" class="btn btn-circle">❮</a>
            <a href="#slide1" class="btn btn-circle">❯</a>
            </div>
        </div>
    </div>
</div>