<x-layouts.app>
    <div class="w-screen h-screen flex flex-col shrink">
        <div class="navbar bg-base-100 shadow-sm">
            <div class="navbar-start"></div>
            <div class="navbar-center">
                <div class="avatar mr-3">
                    <a href="{{ url('/', [], false) }}">
                        <div class="w-16 rounded max-sm:w-8">
                            <img src="/images/camfin-logo/camfin_logo.png" />
                        </div>
                    </a>
                </div>
            </div>
        </div>  

        <h2 class="text-center my-5 text-4xl font-bold">Loan Application Form</h2>

        <div class="w-screen flex flex-wrap shrink justify-center"> 
            <div class="card card-border bg-base-100 w-3xl mx-5 max-sm:w-md">
                <div class="card-body flex justify-center">
                    <form action="{{ route('loan.store') }}" method="POST" class="w-full h-full flex flex-wrap flex-col">
                        @csrf
                        <!-- Hidden field for client type -->
                        <input type="hidden" name="client_type" value="{{ $client_type }}">
                        <h4 class="text-3xl text-center font-bold">Personal Information</h4>
                        <p class="text-center"><strong>Applying as:</strong> {{ $client_type }}</p>

                        <!-- Personal Info -->

                        <fieldset class="fieldset w-full justify-center self-center flex flex-wrap shrink">
                            <div>
                                <legend class="fieldset-legend">First Name</legend>
                                <input type="text" class="input" name="first_name" placeholder="Type here" required />
                            </div>
                            <div>
                                <legend class="fieldset-legend">Last Name</legend>
                                <input type="text" class="input" name="last_name" placeholder="Type here" required />
                            </div>
                        </fieldset>

                        <fieldset class="fieldset w-full justify-center self-center flex flex-wrap shrink">
                            <div>
                                <legend class="fieldset-legend">Middle Initial</legend>
                                <input type="text" class="input" name="middle_name" placeholder="Middle Name" />
                                <p class="label">Optional</p>
                            </div>

                            <div>
                                <legend class="fieldset-legend">Suffix</legend>
                                <input type="text" class="input" name="suffix" placeholder="Suffix" />
                                <p class="label">Optional</p>
                            </div>
                        
                        </fieldset>

                        <fieldset class="fieldset self-center">
                            <legend class="fieldset-legend">Date of Birth</legend>
                            <input type="date" class="input" name="date_of_birth" required />
                        </fieldset>
                        
                        <fieldset class="fieldset self-center">
                            <legend class="fieldset-legend">Mobile Number</legend>
                            <label class="input validator">
                            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                <g fill="none">
                                <path
                                    d="M7.25 11.5C6.83579 11.5 6.5 11.8358 6.5 12.25C6.5 12.6642 6.83579 13 7.25 13H8.75C9.16421 13 9.5 12.6642 9.5 12.25C9.5 11.8358 9.16421 11.5 8.75 11.5H7.25Z"
                                    fill="currentColor"
                                ></path>
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M6 1C4.61929 1 3.5 2.11929 3.5 3.5V12.5C3.5 13.8807 4.61929 15 6 15H10C11.3807 15 12.5 13.8807 12.5 12.5V3.5C12.5 2.11929 11.3807 1 10 1H6ZM10 2.5H9.5V3C9.5 3.27614 9.27614 3.5 9 3.5H7C6.72386 3.5 6.5 3.27614 6.5 3V2.5H6C5.44771 2.5 5 2.94772 5 3.5V12.5C5 13.0523 5.44772 13.5 6 13.5H10C10.5523 13.5 11 13.0523 11 12.5V3.5C11 2.94772 10.5523 2.5 10 2.5Z"
                                    fill="currentColor"
                                ></path>
                                </g>
                            </svg>
                            <input
                                type="tel"
                                class="tabular-nums"
                                required
                                placeholder="Phone"
                                pattern="[0-9]*"
                                minlength="10"
                                maxlength="10"
                                title="Must be 10 digits"
                                name="mobile_number"
                            />
                            </label>
                            <p class="validator-hint hidden">Must be 10 digits</p>
                        </fieldset>
                        

                        <fieldset class="fieldset self-center mb-5">
                            <legend class="fieldset-legend">Email Address</legend>
                            <label class="input validator ">
                                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g
                                    stroke-linejoin="round"
                                    stroke-linecap="round"
                                    stroke-width="2.5"
                                    fill="none"
                                    stroke="currentColor"
                                    >
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </g>
                                </svg>
                            <input type="email" placeholder="mail@site.com" name="email" required />
                            </label>
                            <div class="validator-hint hidden">Enter valid email address</div>
                        </fieldset>

                        <button type="submit" class="btn btn-primary self-center">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
        
           

            
    </div>
    

</x-layouts.app>