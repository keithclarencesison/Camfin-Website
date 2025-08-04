<div class="flex flex-col justify-center shrink">
    <footer class="footer sm:footer-horizontal bg-base-200 text-base-content p-10">
        <aside>
            <div class="flex justify-center items-center gap-3">
                <a href="{{ url('/', [], false) }}">
                    <img src="/images/camfin_logo.png" alt="" class="w-[100px] h-[100px]">
                </a>
                <p class="font-bold text-lg ">Camfin <br> Lending Inc.</p>
            </div>
            
            <p class="font-bold text-xl">Ka-Camfin mo sa Pag-asenso</p>

            <div class="head-office flex flex-col gap-3 max-sm:gap-0">
                <h1 class="font-bold">Head Office</h1>
                <p class="text-sm italic">2nd Floor Azure Business Center, <br> 1197 EDSA, Munoz, Quezon City, Metro Manila, Philippines</p>
            </div>
        </aside>
        <nav>
            <h6 class="footer-title">Site Map</h6>
            <a class="link link-hover">Home</a>
            <a class="link link-hover">About Us</a>
            <a class="link link-hover">Help & Support</a>
            <a class="link link-hover">Blog</a>
            <a class="link link-hover">Contact Us</a>
            <a class="link link-hover">Assets</a>
        </nav>
        <nav>
            <h6 class="footer-title">Branches</h6>
            <a class="link link-hover" href="{{ route('branches.show', ['branch' => 'head-office'], false) }}">Head Office</a>
            <a class="link link-hover" href="{{ route('branches.show', ['branch' => 'calasiao'], false) }}">Calasiao</a>
            <a class="link link-hover" href="{{ route('branches.show', ['branch' => 'urdaneta'], false) }}">San Carlos</a>
            <a class="link link-hover">La Trinidad</a>
            <a class="link link-hover">Isabela</a>
            <a class="link link-hover">Tarlac</a>
        </nav>
        <nav class="">
            <h1 class="font-bold text-3xl text-[#538FD6]">STAY IN TOUCH</h1>
            <p class="font-bold">Email</p>
            <p>camfin@sample.com</p>
            <p class="font-bold">Telephone</p>
            <p>(02) 8376 6121 - 22</p>
            <p class="font-bold">Mobile</p>
            <p>(+63)9 499 939 304</p>
        </nav>
    </footer>
</div>