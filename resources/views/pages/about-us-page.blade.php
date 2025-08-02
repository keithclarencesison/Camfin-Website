<x-layouts.app>
    @include('sections.navbar-section')
    
    <div class="about-us-front bg-[#538FD6]/20 flex flex-wrap gap-15 justify-center shrink max-lg:gap-5">
        <div class="about-us-description h-auto flex w-1/4 max-lg:w-1/2 max-lg:mt-10 max-sm:w-3/4">
            <div class="about-us content self-center">
                <h1 class="text-5xl font-bold">About Us</h1>
                <p class="">"Discover our journey and be inspired by our unwavering passion to serve every Filipino in their pursuit of financial stability,
                 growth, and true freedom."</p>
            </div>
        </div>

        <div class=" w-[600px] mt-10">
            <img src="images/about-us-group.png" alt="" class="top-0 left-0">
        </div>
    </div>

    <div class="our-story-section my-50 flex flex-col justify-center gap-5 max-sm:my-20">
        <h1 class="text-center text-6xl font-bold max-sm:text-5xl">Our Story</h1>
        <p class="text-center w-3/4 self-center text-lg max-sm:text-sm max-sm:w-[90%]">Camfin lending, Inc. was established in 2008 by Filipino investors who have gained experience in financial industries.
             We aim to help more Filipinos by expanding our business nationwide and offering a wider variety of loan services from collateralized
              to clean loans with fast approval, flexible term and affordable rate to all of our clients. To served with respect, integrity and
               excellence is our commitment.
            </p>
    </div>
    
    @include('sections.corporate-identity')
    @include('sections.about-official-logo')



</x-layouts.app>