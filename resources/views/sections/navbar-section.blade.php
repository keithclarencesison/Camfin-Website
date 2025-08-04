<div class="navbar bg-base-100 shadow-sm">
    <div class="navbar-start max-lg:flex-1">
        <div class="avatar mr-3">
            <a href="{{ url('/', [], false) }}">
                <div class="w-16 rounded max-sm:w-8">
                    <img src="/images/camfin_logo.png" />
                </div>
            </a>
            
        </div>
        <p class="font-bold max-sm:text-xs">Camfin <br> Lending Inc.</p>
    </div>
    
    <div class="navbar-center max-lg:hidden">
        <ul class="menu menu-horizontal gap-5">
            <li><a href="{{ route('about', [], false) }}">About</a></li>
            <li><a href="/#help-support">Loan Services</a></li>
            <li><a href="{{ route('branches.show', ['branch' => 'head-office'], false) }}">Branches</a></li>
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
            <li><a href="{{ route('about', [], false) }}">About</a></li>
            <li><a href="{{ url('/') }}">Help & Support</a></li>
        </ul>
    </div>
</div>