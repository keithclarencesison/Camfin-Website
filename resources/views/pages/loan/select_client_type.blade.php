<x-layouts.app>
    <div class="container">
    <h2>Start Your Loan Application</h2>
    <p>Please choose how you want to apply:</p>

    <form action="{{ route('loan.chooseType') }}" method="POST">
        @csrf

        <div class="mb-3">
            <select name="client_type" class="form-control" required>
                <option value="">-- Select Client Type --</option>
                <option value="Loan Applicant">Loan Applicant</option>
                <option value="Agent">Agent</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Proceed</button>
    </form>
</div>

</x-layouts.app>
