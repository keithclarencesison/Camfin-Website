<x-layouts.app>
        <div class="flex">
            <div id="sideBar" class="sidebar h-screen w-98 border-r-1 border-gray-400 bg-gray-200 relative transition-all duration-500">
                <div class="sidebar-container flex flex-col justify-between w-full h-full">

                    <div class="sidebar-header">
                        <div id="sidebar-logo" class="sidebar-logo flex justify-between w-full">
                            <img id="camfin-logo" src="/images/camfin-logo/camfin_logo.png" alt="" class="w-15 m-1">
                            <img id="sidebar-switch" src="/images/sidebarOpen.png" alt="" class="size-[30px] m-5 cursor-pointer">
                        </div>

                        <div class="divider m-0"></div>

                        <div id="main-menu" role="tablist" class="tabs flex flex-col justify-center gap-5">
                            <a role="tab" data-tab="dashboard" class="tab flex p-0 hover:bg-white" data-tip="Dashboard">
                                <div class="images w-1/4 flex justify-center">
                                    <img src="/images/dashboard-sidebar-icon/dashboard-overview.png" alt="" class="w-8 ">
                                </div>
                                <span class="sidebar-tab w-1/2 text-xl font-bold">Dashboard</span>
                            </a>
                            <a role="tab" data-tab="blog" class="tab flex p-0 hover:bg-white" data-tip="Blog">
                                <div class="image2 w-1/4 flex justify-center">
                                    <img src="/images/dashboard-sidebar-icon/blog.png" alt="" class="w-8">
                                </div>
                                <span class="sidebar-tab text-xl font-bold w-1/2">Blog</span>
                            </a>

                            <a role="tab" data-tab="asset" class="tab p-0 hover:bg-white" data-tip="Foreclosed Asset">
                                <div class="image3 w-1/4 flex justify-center">
                                    <img src="/images/dashboard-sidebar-icon/asset.png" alt="" class="w-8">
                                </div>
                                <span class="sidebar-tab w-1/2 text-xl font-bold">Asset</span>
                            </a>
                        </div>
                    </div>

                    <div class="admin-settings self-center h-[80px]">
                        <div class="dropdown dropdown-top dropdown-right">
                            <div tabindex="0" role="button" class="cursor-pointer flex w-full items-center gap-10">

                                <div id="admin-user" class="admin-user">
                                    <p class="font-extrabold">Keith Clarence Sison</p>
                                    <p class="text-center hover:text-green-500">Admin User</p>
                                </div>
                                
                                <div class="avatar avatar-online">
                                    <div class="ring-primary ring-offset-base-100 w-12 rounded-full ring-2 ring-offset-2">
                                        <img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp"/>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('admin.logout') }}" method="POST" class="">
                            @csrf
                            <ul tabindex="0" class="dropdown-content menu cursor-pointer bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                                <li><a>Account Settings</a></li>
                                <li><button type="submit" class="text-red-500 hover:underline">Logout</button></li>
                            </ul>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="w-full">
                <div id="dashboard" class="tab-panel">@include('admin.dashboard.tabs.overview')</div>

                <div id="blog" class="tab-panel hidden w-full transition-all duration-500">
                    @include('admin.blog.index')
                </div>

                <div id="asset" class="tab-panel hidden w-full transition-all duration-500">
                    @include('admin.vehicles.index')
                </div>

            </div>
                
        </div>

    <script>
        const sideBar = document.getElementById('sideBar');
        const sidebarSwitch = document.getElementById('sidebar-switch');
        const logo = document.getElementById('camfin-logo');
        const sidebarLogo = document.getElementById('sidebar-logo');
        const adminUser = document.getElementById('admin-user');
        const mainMenu = document.getElementById('main-menu');
        const sidebarTabs = document.querySelectorAll('#main-menu .sidebar-tab');
        const sidebarLinks = document.querySelectorAll('#main-menu a[role="tab"]');

        let isOpen = true;

        sidebarSwitch.addEventListener('click', () =>{
            isOpen = !isOpen;

            sideBar.classList.toggle('w-98');
            sideBar.classList.toggle('w-24');

            logo.classList.toggle('block');
            logo.classList.toggle('hidden');

            sidebarLogo.classList.toggle('justify-between');
            sidebarLogo.classList.toggle('justify-center');

            adminUser.classList.toggle('block');
            adminUser.classList.toggle('hidden');

            // hiding the text of sidebar when collapsed
            sidebarTabs.forEach(tab => {
                tab.classList.toggle('hidden');
            });
            
            //adds a daisyUI tooltip to sidebar tabs, only shows tooltip when sidebar is collapsed
            sidebarLinks.forEach(link => {
                if (!isOpen) {
                    link.classList.add('tooltip', 'tooltip-right');
                } else {
                    link.classList.remove('tooltip', 'tooltip-right');
                }
            });

            sidebarSwitch.src = isOpen ? '/images/sidebarOpen.png' : '/images/sidebarClose.png';
        });

        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('#main-menu .tab');
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

        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('#main-menu .tab');
            const panels = document.querySelectorAll('.tab-panel');

            function showTab(tabName) {
                tabs.forEach(t => t.classList.remove('tab-active'));
                panels.forEach(p => p.classList.add('hidden'));

                const activeTab = document.querySelector(`#main-menu .tab[data-tab="${tabName}"]`);
                if (activeTab) activeTab.classList.add('tab-active');

                const activePanel = document.getElementById(tabName);
                if (activePanel) activePanel.classList.remove('hidden');
            }

            // Handle tab click
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    showTab(tab.dataset.tab);
                });
            });

            // On page load, check URL
            const urlParams = new URLSearchParams(window.location.search);
            const tabFromUrl = urlParams.get('tab') || 'dashboard';
            showTab(tabFromUrl);
        });

        
    </script>



</x-layouts.app>