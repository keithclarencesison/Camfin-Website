<x-layouts.app>
    <div class="w-screen h-screen flex flex-col">
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
        
        <div class="content w-full h-full flex justify-center items-center">
            <form action="{{ route('loan.chooseType') }}" method="POST" class="">
                @csrf
                <div class="card card-border bg-base-100 ">
                    <div class="card-body p-10">
                        <h2 class="text-5xl m-5 font-bold">Start Your Loan Application</h2>
                        <p class="text-center text-3xl mb-5">Please choose how you want to apply:</p>            

                        <select name="client_type" class="select form-control self-center m-5" required>
                            <option disabled selected value="">-- Select Client Type --</option>
                            <option value="Loan Applicant">Loan Applicant</option>
                            <option value="Agent">Agent</option>
                        </select>

                        <button type="submit" class="btn btn-primary w-56 self-center">Proceed</button>
                    </div>
                </div>
            </form> 
        </div>
        
    </div>


</x-layouts.app>
