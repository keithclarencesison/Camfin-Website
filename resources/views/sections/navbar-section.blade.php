<div class="navbar bg-base-100 shadow-sm">
  <div class="navbar-start">
    <div class="avatar mr-3">
        <a href="{{ url('/', [], false) }}">
            <div class="w-16 rounded max-sm:w-8">
                <img src="/images/camfin-logo/camfin_logo.png" />
            </div>
        </a>
    </div>
    <p class="font-bold max-sm:text-xs">Camfin <br> Lending Inc.</p>
  </div>

  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1 gap-10">
        <li><a href="{{ route('about', [], false) }}">About</a></li>
        <li><a href="{{ route('loan-services', [], false) }}">Loan Services</a></li>
        <li>
            <details>
            <summary>Branches</summary>
            <ul class="w-36 p-2 z-10">
                <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'head-office'], false) }}">Head Office</a></li>
                <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'urdaneta'], false) }}">Urdaneta</a></li>
                <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'calasiao'], false) }}">Calasiao</a></li>
                <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'san-carlos'], false) }}">San Carlos</a></li>
                <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'la-trinidad'], false) }}">La Trinidad</a></li>
                <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'isabela'], false) }}">Isabela</a></li>
                <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'tarlac'], false) }}">Tarlac</a></li>
            </ul>
            </details>
        </li>
        <li><a href="{{ route('blog.index') }}">Blog</a></li>
        <li><a href="/#help-support">Help & Support</a></li>
        <li><a href="{{ route('assets.index') }}">Assets</a></li>
    </ul>
  </div>

    <div class="navbar-end">
        <button class="btn max-lg:hidden">Apply Now</button>
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
            </div>
            <ul
                tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li><a href="{{ route('about', [], false) }}">About</a></li>
                <li><a href="/#loan-products-section">Loan Services</a></li>
                <li>
                    <details>
                    <summary>Branches</summary>
                    <ul class="w-36 p-2 z-10">
                        <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'head-office'], false) }}">Head Office</a></li>
                        <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'urdaneta'], false) }}">Urdaneta</a></li>
                        <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'calasiao'], false) }}">Calasiao</a></li>
                        <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'san-carlos'], false) }}">San Carlos</a></li>
                        <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'la-trinidad'], false) }}">La Trinidad</a></li>
                        <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'isabela'], false) }}">Isabela</a></li>
                        <li><a class="link link-hover" href="{{ route('branches.show', ['branch' => 'tarlac'], false) }}">Tarlac</a></li>
                    </ul>
                    </details>
                </li>
                <li><a>Blog</a></li>
                <li><a href="/#help-support">Help & Support</a></li>
                <li><a>Assets</a></li>
            </ul>
        </div>
    </div>
</div>