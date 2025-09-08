<x-layouts.app>
    <div class="container py-5">
        <h2 class="text-2xl font-bold mb-5">Loan Applications</h2>
        <table class="table w-full border">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Client Type</th>
                    <th>Date of Birth</th>
                    <th>Submitted At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($applications as $application)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $application->first_name }} {{ $application->middle_name }} {{ $application->last_name }} {{ $application->suffix }}</td>
                    <td>{{ $application->email }}</td>
                    <td>{{ $application->mobile_number }}</td>
                    <td>{{ $application->client_type }}</td>
                    <td>{{ $application->date_of_birth }}</td>
                    <td>{{ $application->created_at->format('M d, Y H:i') }}</td>
                    <td>
                        <button 
                            class="btn btn-sm btn-primary"
                            onclick="openApplicationModal(@json($application))">
                            View
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No applications found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $applications->links() }} <!-- Pagination links -->
        </div>

        <div id="applicationModal" class="modal">
            <div class="modal-box w-11/12 max-w-2xl">
                <h3 class="font-bold text-lg">Application Info</h3>
                <div id="modalContent" class="py-4 space-y-2 max-h-96 overflow-y-auto">
                    <!-- Filled dynamically -->
                </div>
                <div class="modal-action">
                    <a id="exportBtn" href="#" class="btn btn-success">Export to Excel</a>
                    <button class="btn" onclick="closeModal()">Close</button>
                </div>
            </div>
            <div class="modal-backdrop" onclick="closeModal()"></div>
        </div>
    </div>

    <script>
        function openApplicationModal(application) {    
            let content = document.getElementById('modalContent');
            let exportBtn = document.getElementById('exportBtn');
            let modal = document.getElementById('applicationModal');

            content.innerHTML = `
                <p><strong>Name:</strong> ${application.first_name} ${application.middle_name ?? ''} ${application.last_name} ${application.suffix ?? ''}</p>
                <p><strong>Email:</strong> ${application.email}</p>
                <p><strong>Mobile:</strong> ${application.mobile_number}</p>
                <p><strong>Client Type:</strong> ${application.client_type}</p>
                <p><strong>Date of Birth:</strong> ${application.date_of_birth}</p>
                <p><strong>Submitted At:</strong> ${application.created_at}</p>
            `;

            exportBtn.href = `/admin/applications/${application.id}/export`;

            // Open modal
            // document.getElementById('applicationModal').checked = true;
            modal.classList.add('modal-open');
        }

        function closeModal() {
            let modal = document.getElementById('applicationModal');
            modal.classList.remove('modal-open');
        }

        document.addEventListener('click', function(event) {
            let modal = document.getElementById('applicationModal');
            if (event.target === modal) {
                closeModal();
            }
        });
    </script>


    
</x-layouts.app>
