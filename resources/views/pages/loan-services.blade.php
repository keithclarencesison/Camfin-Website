<x-layouts.app>
    @include('sections.navbar-section')

    <div id="loan-products-section" class="flex justify-center flex-wrap shrink my-20">

        <div class="product-header mb-20 flex flex-col justify-center">
            <h1 class="text-center text-6xl text-[#538FD6] font-bold max-md:text-5xl max-sm:text-3xl">Our Loan Products</h1>
            <p class="text-center text-xl w-3/4 self-center max-md:text-[16px] max-sm:text-[12px]">We offer reliable and flexible financing solutions to help you achieve life’s biggest milestones with confidence and ease.</p>
        </div>
        
        <div class="product-section w-full">
            
            <div class="product1 flex flex-wrap justify-center max-xl:gap-10">

                <div class="product1-description w-[700px] flex flex-col justify-center m-5">
                    <img src="images/loan-services-page/sangla-orcr.png" alt="Pick Up Truck and ORCR" class="w-[600px] self-center rounded-2xl">
                </div>

                
                <div class="card w-96 bg-[#538FD6]/30 shadow-sm mx-5">
                    <div class="card-body">
                        <div class="flex flex-col">
                            <h2 class="text-3xl font-bold">Sangla OR/CR</h2>
                            <p class="mt-3 text-[12px]">Sa aming Sangla OR/CR service, puwede mong gamitin ang Official Receipt at Certificate of Registration 
                            ng iyong sasakyan bilang collateral — at ikaw pa rin ang gagamit ng sasakyan. Mabilis ang proseso, flexible ang terms, at
                            mababa ang interest rate. Perfect ito para sa mga biglaang pangangailangan o dagdag puhunan sa negosyo.</p>
                        </div>
                        <h2 class="mt-5 text-xl font-bold">Requirements :</h2>
                        <ul class="flex flex-col gap-2 text-xs">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                <span>Original Certificate of Registration</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                <span>Original Official Receipt</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                <span>Insurance Policy</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                <span>Franchise for (Public Utilities)</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                        <button class="btn btn-primary btn-block">Inquire Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product2 flex flex-wrap justify-center my-20 max-xl:flex-wrap-reverse">

                <div class="card w-96 bg-[#538FD6]/30 shadow-sm mx-5">
                    <div class="card-body">
                        <div class="flex flex-col">
                            <h2 class="text-3xl font-bold">Truck Purchase</h2>
                            <p class="mt-3 text-[12px]">Sa aming Sangla OR/CR service, puwede mong gamitin ang Official Receipt at Certificate of Registration 
                            ng iyong sasakyan bilang collateral — at ikaw pa rin ang gagamit ng sasakyan. Mabilis ang proseso, flexible ang terms, at
                            mababa ang interest rate. Perfect ito para sa mga biglaang pangangailangan o dagdag puhunan sa negosyo.</p>
                        </div>
                        <h2 class="mt-5 text-xl font-bold">Requirements :</h2>
                        <ul class="flex flex-col gap-2 text-xs">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                <span>Quotation</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                <span>OR/CR</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                <span>Contract</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                <span>List of clients and suppliers</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <button class="btn btn-primary btn-block">Inquire Now</button>
                        </div>
                    </div>
                </div>

                <div class="w-[700px] flex justify-center m-5">
                    <img src="images/loan-services-page/truck-purchase.png" alt="Pick Up Truck and ORCR" class="w-[600px] self-center rounded-2xl">
                </div>
            </div>

            <div class="product3 flex flex-wrap justify-center">

                <div class="w-[700px] flex justify-center m-5">
                    <img src="images/loan-services-page/sangla-titulo.png" alt="Land Title" class="self-center w-[600px] rounded-2xl">
                </div>

                <div class="card w-96 bg-[#538FD6]/30 shadow-sm mx-5">
                    <div class="card-body">
                        <div class="flex flex-col">
                            <h2 class="text-3xl font-bold">Sangla Titulo</h2>
                            <p class="mt-3 text-[12px]">Sa aming Sangla OR/CR service, puwede mong gamitin ang Official Receipt at Certificate of Registration 
                            ng iyong sasakyan bilang collateral — at ikaw pa rin ang gagamit ng sasakyan. Mabilis ang proseso, flexible ang terms, at
                            mababa ang interest rate. Perfect ito para sa mga biglaang pangangailangan o dagdag puhunan sa negosyo.</p>
                        </div>
                        <h2 class="mt-5 text-xl font-bold">Requirements :</h2>
                        <ul class="flex flex-col gap-2 text-xs">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                <span>Title</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                <span>Tax Declaration Land and Bldg.</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                <span>Tax Receipt / Clearance</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                <span>Location / Vicinity Map</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <button class="btn btn-primary btn-block">Inquire Now</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('sections.footer-section')




</x-layouts.app>