<x-layouts.app>
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="flex w-full h-screen shrink max-lg:flex-col">

        <div class="toast toast-top toast-start z-10">
            <div class="alert alert-info">
                <span>Welcome Admin!</span>
            </div>
        </div>

        <div class="w-3/5 max-xl:w-1/2 h-full bg-blue-300/30 relative max-lg:w-full max-lg:h-1/3">
            <div class="admin-header h-full flex flex-col items-center max-lg:flex-row sm:justify-center max-sm:justify-center">
                <div class="admin-photo flex my-20 flex-wrap items-center justify-center xl:my-0 xl:m-0 lg:m-0 max-sm:m-0">
                    <img src="/images/camfin-logo/camfin_logo.png" alt="Camfin Logo" class="xl:size-[380px] ml-auto mr-auto my-10 sm:m-0 lg:size-[300px] md:size-[250px] sm:size-[150px] max-sm:size-[150px] max-sm:m-0">
                    <img src="/images/admin-picture.png" alt="Illustrated Admin" class="xl:size-[380px] lg:size-[300px] md:size-[250px] sm:size-[150px] max-sm:size-[150px]">
                </div>
                <h1 class="text-4xl font-bold text-center max-xl:text-3xl max-lg:hidden max-sm:hidden mx-5">Ka-<span class="text-[#0DA949]">Camfin</span> mo sa Pag-Asenso</h1>
            </div>
            <footer class="footer sm:footer-horizontal footer-center text-base-content bottom-1 absolute">
                <aside>
                    <p class="font-bold max-lg:hidden">Copyright © - All right reserved by <span class="text-[#0DA949]">Camfin Lending Inc.</span></p>
                </aside>
            </footer>
        </div>

        <div class="w-2/5 max-xl:w-1/2 max-lg:h-2/2 max-lg:w-full shrink">
            <form method="POST" action="{{ route('admin.login.submit', [], false) }}" class="w-full h-full flex justify-center items-center">
                @csrf
                    
                    <div class="form-container bg-base-200/50 w-[500px] h-[600px] rounded-2xl flex flex-col justify-center max-lg:h-[500px] max-md:mx-5 max-sm:h-[400px]">
                        <img src="/images/camfin-logo/camfin-logo.png" alt="" class="w-[200px] self-center max-sm:w-[100px]">
                        <p class="text-center font-bold mt-5">Login as a Admin User</p>
                        <label class="input validator self-center my-5 max-sm:w-3/4">
                            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5"fill="none"stroke="currentColor"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></g></svg>
                            <input type="email" name="email" required placeholder="Email" minlength="3" maxlength="30" title="Only letters, numbers or dash" class=""/>
                            </label>
                            <!-- <p class="validator-hint text-center hidden">
                            Must be 3 to 30 characters
                            <br />containing only letters, numbers or dash
                            </p> -->
                                
                        <label class="input validator self-center max-sm:w-3/4">
                            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g
                                stroke-linejoin="round"
                                stroke-linecap="round"
                                stroke-width="2.5"
                                fill="none"
                                stroke="currentColor"
                                >
                                <path
                                    d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z"
                                ></path>
                                <circle cx="16.5" cy="7.5" r=".5" fill="currentColor"></circle>
                                </g>
                            </svg>
                            <input
                                type="password"
                                name="password"
                                required
                                placeholder="Password"
                                title="Must be more than 8 characters, including number, lowercase letter, uppercase letter"
                            />
                        </label>
                        <!-- <p class="validator-hint hidden text-center">
                        Must be more than 8 characters, including
                        <br />At least one number <br />At least one lowercase letter <br />At least one uppercase letter
                        </p> -->
                        <br>
                        <button class="btn btn-info self-center" type="submit">Login</button>
                        <a class="link link-hover text-[14px] text-[#538FD6] self-center mt-5">Forgot Password?</a>
                    </div>
                    <footer class="footer sm:footer-horizontal footer-center text-base-content bottom-1 absolute">
                        <aside>
                            <p class="font-bold lg:hidden max-sm:text-[10px]">Copyright © - All right reserved by Camfin Lending Inc.</p>
                        </aside>
                    </footer>
            </form>
        </div>
    </div>

</x-layouts.app>