<div class="flex flex-col justify-center">

    <div class="navbar bg-gray-200 border-b-1 border-gray-400 shadow-sm">
        <div class="flex-1">
            <h1 class="text-4xl font-bold">Dashboard</h1>    
        </div>
    </div>

    <div class="p-6 bg-white shadow rounded">
        <h2 class="text-4xl font-bold">Website Analytics</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Total Views Graph -->
        <div class="w-md">
            <h3 class="text-lg font-semibold mb-2">Total Views</h3>
            <canvas id="totalViewsChart" height="20"></canvas>
        </div>

        <!-- Today's Views Graph -->
        <div class="w-md">
            <h3 class="text-lg font-semibold mb-2">Today's Views</h3>
            <canvas id="todayViewsChart" height="100"></canvas>
        </div>

    </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Total Views Chart
    new Chart(document.getElementById('totalViewsChart'), {
        type: 'doughnut',
        data: {
            labels: ['Total Views'],
            datasets: [{
                label: 'Total Views',
                data: [],
                backgroundColor: ['rgba(54, 162, 235, 0.6)'],
                borderColor: ['rgba(54, 162, 235, 1)'],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: { display: false }
            }
        }
    });

    // Today's Views Chart
    new Chart(document.getElementById('todayViewsChart'), {
        type: 'bar',
        data: {
            labels: ['Today'],
            datasets: [{
                label: 'Today\'s Views',
                data: [],
                backgroundColor: 'rgba(255, 99, 132, 0.6)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>