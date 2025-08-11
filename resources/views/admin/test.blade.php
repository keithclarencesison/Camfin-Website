<x-layouts.app>
<div class="flex">
    <!-- Sidebar Tabs -->
    <div id="sidebar-tabs" class="tabs tabs-vertical w-64 bg-gray-200 p-4">
        <button data-tab="dashboard" class="tab tab-lifted tab-active">Dashboard</button>
        <button data-tab="tab2" class="tab tab-lifted">Tab 2</button>
        <button data-tab="tab3" class="tab tab-lifted">Tab 3</button>
    </div>

    <!-- Content Area -->
    <div class="flex-1 p-6">
        <div id="dashboard" class="tab-panel w-screen">Welcome to Dashboard!</div>
        <div id="tab2" class="tab-panel hidden">This is Tab 2 content.</div>
        <div id="tab3" class="tab-panel hidden">This is Tab 3 content.</div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('#sidebar-tabs .tab');
    const panels = document.querySelectorAll('.tab-panel');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('tab-active'));

            // Hide all panels
            panels.forEach(p => p.classList.add('hidden'));

            // Activate clicked tab
            tab.classList.add('tab-active');

            // Show the matching panel
            document.getElementById(tab.dataset.tab).classList.remove('hidden');
        });
    });
});
</script>


</x-layouts.app>
