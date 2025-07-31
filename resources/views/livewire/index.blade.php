<x-layouts.app>
    <div class="overflow-x-hidden">
        <div class="navbar bg-base-100 shadow-sm">
            <div class="navbar-start max-lg:flex-1">
                <div class="avatar mr-3">
                    <div class="w-16 rounded max-sm:w-8">
                        <img src="{{ asset('images/camfin_logo.png') }}" />
                    </div>
                </div>
                <p class="font-bold max-sm:text-xs">Camfin <br> Lending Inc.</p>
            </div>
            
            <div class="navbar-center max-lg:hidden">
                <ul class="menu menu-horizontal gap-5">
                    <li><a>About</a></li>
                    <li><a>Loan Services</a></li>
                    <li><a>Branches</a></li>
                    <li><a>Blog</a></li>
                    <li><a>Contact</a></li>
                    <li><a>Assets</a></li>
                </ul>
            </div>

            <div class="navbar-end max-lg:hidden">
                <button class="btn">Apply Now</button>
            </div>

            <div class="dropdown lg:hidden max-lg:flex-none">
                <div tabindex="0" role="button" class="btn btn-ghost m-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path> </svg>
                </div>
                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                </ul>
            </div>
        </div>

        <div class="welcome-page w-screen flex justify-center bg-[#538FD6] my-5">
            <div class="carousel w-7xl">
                <div id="slide1" class="carousel-item relative w-full">
                    <img src="{{ asset('images/frontpage.png') }}" class="w-full" />
                    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide3" class="btn btn-circle">❮</a>
                        <a href="#slide2" class="btn btn-circle">❯</a>
                    </div>
                    <button class="btn btn-primary absolute top-[53%] left-[7%] max-md:hidden">Apply Now</button>
                </div>

                <div id="slide2" class="carousel-item relative w-full">
                    <img
                    src="images/frontpage2.png"
                    class="w-full" />
                    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                    <a href="#slide1" class="btn btn-circle">❮</a>
                    <a href="#slide3" class="btn btn-circle">❯</a>
                    </div>
                </div>

                <div id="slide3" class="carousel-item relative w-full">
                    <img
                    src="{{ asset('images/frontpage3.png') }}"
                    class="w-full" />
                    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                    <a href="#slide2" class="btn btn-circle">❮</a>
                    <a href="#slide1" class="btn btn-circle">❯</a>
                    </div>
                </div>
            </div>
        </div>

        <livewire:contact-form />
        
        @include('sections.loan-steps')
        @include('sections.loan-products')
        @include('sections.client-testimonials')
        @include('sections.help-support-center')
        @include('sections.footer-section')
    </div>

</x-layouts.app>


