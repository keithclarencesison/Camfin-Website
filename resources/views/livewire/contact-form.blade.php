<div class="flex justify-center flex-wrap shrink my-60 max-sm:my-30">

    <div class="w-[500px] h-[550px] p-4 bg-[rgba(83,143,214,0.25)] rounded shadow">
        @if (session()->has('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit.prevent="submit">
            <div class="w-full flex flex-col justify-center flex-wrap items-center">
                <div class="contact-header mt-3 mb-5 w-full flex">
                    <h1 class="text-3xl font-bold ml-5 text-black/25">Contact Us</h1>
                </div>

                <div class="mb-4 w-[85%] flex justify-center flex-col">
                    <label class="font-bold w-full">Full Name</label>
                    <input type="text" wire:model.lazy="fullname" class="w-full rounded-[10px] p-2 bg-white drop-shadow-lg">
                    @error('fullname') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4 w-[85%] flex gap-5 justify-between">
                    <div class="w-[50%]">
                        <label class="block font-bold">Applying For</label>
                        <select wire:model.lazy="applying_for" class="w-full bg-white drop-shadow-lg rounded-[10px] p-2">
                            <option value="">Select Position</option>
                            <option value="Real Estate">Real Estate</option>
                            <option value="Car Financing">Car Financing</option>
                            <option value="Truck Financing">Truck Financing</option>
                        </select>
                        @error('applying_for') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class=" w-[55%]">
                        <label class="block font-bold">Contact No.</label>
                        <input type="text" wire:model.lazy="contact_no" class="w-full bg-white drop-shadow-lg rounded-[10px] p-2">
                        @error('contact_no') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    
                </div>

                <div class="mb-4 w-[85%]">
                    <label class="block font-bold">Message</label>
                    <textarea wire:model.lazy="message" rows="4" class="w-full bg-white drop-shadow-lg rounded-[10px] p-2"></textarea>
                    @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="bg-blue-500 text-white font-bold mb-4 w-[150px] py-3 rounded hover:bg-blue-600">
                    Send Message
                </button>
                <p class="w-[80%] text-[10px] text-center">By registering, you agree to the processing of your personal data by <span class="text-[#0DA949]">Camfin Lending Inc.</span> as described in the <a href="" class="text-[#002AFD]">Privacy Statement</a></p>

            </div>
        </form>
    </div>

    <div class="w-[500px] h-[550px] rounded shadow relative bg-[#538FD6]">
        <div class="w-[280px] h-[300px] absolute top-10 right-0 max-sm:hidden">
            <img src="images/sirMJ.png" alt="Sir MJ">
        </div>
        
        <div class="w-1/2 h-full flex flex-col justify-between shrink max-sm:items-center max-sm:w-full max-sm:justify-center">
            <div class="ml-5 mt-5 max-sm:w-3/4 max-sm: mb-5">
                <h1 class="text-3xl font-bold text-white">{{ $title }}</h1>
                <p class="text-[14px] text-white">We're just a message away! Reach out anytime and we’ll get back to you as soon as we can.</p>
                <br>
                <h1 class="text-3xl font-bold text-white">Reach out and say Hello</h1>
                <i class="fa-solid fa-phone"></i><span class="font-bold text-white"> Mobile: </span><p>(+63)9 499 939 304</p>
                <i class="fa-solid fa-envelope"></i><span class="font-bold text-white"> Email:</span><p>camfin@sample.com</p>
            </div>
            <div class="flex justify-center flex-col items-center">
                <h1 class="text-xl text-white font-bold">Connect with Us</h1>
                <div class="social-media-icons flex">
                    <a href="" class="size-[40px]"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="" class="size-[40px]"><img src="images/instagram.png" alt="Instagram"></a>
                    <a href="" class="size-[40px]"><img src="images/tiktok.png" alt="TikTok"></a>
                    <a href="" class="size-[40px]"><img src="images/youtube.png" alt="Youtube"></a>
                </div>
                
            </div>
        </div>

    </div>

</div>

