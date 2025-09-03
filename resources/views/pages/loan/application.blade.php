<x-layouts.app>

    <div class="navbar bg-base-100 shadow-sm">
    <a class="btn btn-ghost text-xl">daisyUI</a>
    </div>

    <div class="container">
        <h2>Loan Application Form</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('loan.store') }}" method="POST">
            @csrf

            <!-- Hidden field for client type -->
            <input type="hidden" name="client_type" value="{{ $client_type }}">

            <p><strong>Applying as:</strong> {{ $client_type }}</p>

            <!-- Personal Info -->
            <h4>Personal Information</h4>
            <div class="mb-3">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Middle Name</label>
                <input type="text" name="middle_name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Suffix</label>
                <input type="text" name="suffix" class="form-control" placeholder="Jr., Sr., III">
            </div>

            <div class="mb-3">
                <label>Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Mobile Number</label>
                <input type="text" name="mobile_number" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <!-- Loan Info -->
            <!-- <h4>Loan Information</h4>
            <div class="mb-3">
                <label>Loan Amount</label>
                <input type="number" name="amount" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Loan Term (months)</label>
                <input type="number" name="term" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Purpose</label>
                <textarea name="purpose" class="form-control" required></textarea>
            </div> -->

            <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
    </div>

</x-layouts.app>