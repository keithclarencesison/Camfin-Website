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
                            data-application="{{ json_encode([
                                'id' => $application->id,
                                'first_name' => $application->first_name,
                                'middle_name' => $application->middle_name,
                                'last_name' => $application->last_name,
                                'suffix' => $application->suffix,
                                'email' => $application->email,
                                'mobile_number' => $application->mobile_number,
                                'client_type' => $application->client_type,
                                'date_of_birth' => $application->date_of_birth,
                                'created_at' => $application->created_at->format('Y-m-d H:i')
                            ]) }}"
                            onclick="openApplicationModal(JSON.parse(this.dataset.application))">
                            View
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center">No applications found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $applications->links() }} <!-- Pagination links -->
        </div>

        <!-- Modal -->
        <dialog id="applicationModal" class="modal">
            <div class="modal-box">
                <h3 class="font-bold text-lg">Application Info</h3>
                <div id="modalContent"></div>
                <div class="modal-action">
                    <a id="exportBtn" href="#" class="btn btn-success">Export to Excel</a>
                    <button onclick="closeModal()" class="btn">Close</button>
                </div>
            </div>
        </dialog>
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

            modal.showModal()
        }

        function closeModal() {
            let modal = document.getElementById('applicationModal');
            modal.close();
        }
    </script>
</x-layouts.app>
