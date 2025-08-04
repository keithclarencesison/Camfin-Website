<x-layouts.app>
    @include('sections.navbar-section')

    <h1 class="text-center text-4xl font-bold my-10">BRANCHES</h1>

    <div class="branches-container flex flex-wrap justify-around">
        <div class="branches-info flex flex-col m-5">
            <h1 class="text-center text-5xl font-bold">Head Office</h1>
            <br>
            <h1 class="text-3xl font-bold">Where To Find Us</h1>
            <p>📍<span class="italic text-[#538FD6] hover:underline"><a href="https://maps.app.goo.gl/NRMEfNMDTtPhAgJe9">Business Address:  2nd Floor Azure Business Center, 1197 EDSA,<br> Munoz, Quezon City, Metro Manila, Philippines</a></span></p>

            <br>

            <h1 class="text-3xl font-bold">How to Get in Touch?</h1>
            <p>📞 Mobile:  (+63)9 499 939 304 </p>
            <p>📩 Email Address:  camfinlending@sample.com</p>
            <p>☎️ Telephone:  (02) 8376 6121 - 22</p>
            <br>

            <h1 class="text-3xl font-bold">Office Hours</h1>
            <p>Monday to Friday : 8:30am - 5:30pm </p>
            <p>Saturday : 8:00am - 5:30pm </p>
            <br>
            <div class="social-media-section">
                <h1 class="text-3xl font-bold">Connect with Us</h1>
                <p>Stay updated with our latest loan offers, tips, and announcements. Follow us today!</p>
                <div class="social-media-icons flex gap-5">
                    <a href="http://"><img src="/images/social-media-icons/facebook-icon.png" alt="" class=""></a>
                    <a href="http://"><img src="/images/social-media-icons/instagram-icon.png" alt="" class=""></a>
                    <a href="http://"><img src="/images/social-media-icons/tiktok-icon.png" alt="" class=""></a>
                    <a href="http://"><img src="/images/social-media-icons/youtube-icon.png" alt="" class=""></a>

                </div>
            </div>
        </div>

        <div class="flex flex-col gap-10 mb-20 max-xl:my-20">
            <img src="images/map-direction.png" alt="" class="">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.9754644390364!2d121.01557911187741!3d14.657333885776685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b6ee2f6581e9%3A0x3425b59a3e17bae3!2sAncar%20Motors%2C%20Inc.!5e0!3m2!1sen!2sph!4v1754278809877!5m2!1sen!2sph"
                width="500" 
                height="300" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    
    @include('sections.footer-section')

</x-layouts.app>