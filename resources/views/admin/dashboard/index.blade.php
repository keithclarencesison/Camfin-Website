<x-layouts.app>
    <form action="{{ route('admin.logout') }}" method="POST" class="">
        @csrf
        <div class="flex">

            <div id="sideBar" class="sidebar h-screen w-98 bg-gray-200 relative transition-all duration-500">
                <div class="sidebar-container flex flex-col justify-between w-full h-full">
                    <div class="sidebar-header">
                        <div id="sidebar-logo" class="sidebar-logo flex justify-between w-full">
                            <img id="camfin-logo" src="/images/camfin_logo.png" alt="" class="w-15 m-1">
                            <img id="sidebar-switch" src="/images/sidebarOpen.png" alt="" class="size-[30px] m-5 cursor-pointer">
                        </div>
                        <div class="divider m-0"></div>
                        <div id="main-menu" role="tablist" class="tabs flex flex-col">
                            <a role="tab" data-tab="dashboard" class="tab p-0 hover:bg-white"><p class="mx-10">Dashboard</p></a>
                            <a role="tab" data-tab="tab2" class="tab p-0 hover:bg-white">Tab 2</a>
                            <a role="tab" class="tab p-0 hover:bg-white">Tab 3</a>
                        </div>
                    </div>

                    <div class="admin-settings self-center h-[80px]">
                        <div class="dropdown dropdown-top dropdown-right">
                            <div tabindex="0" role="button" class="cursor-pointer flex w-full items-center gap-10">

                                <div id="admin-user" class="admin-user">
                                    <p class="">Keith Clarence Sison</p>
                                    <p class="text-center hover:text-green-500">Admin User</p>
                                </div>
                                
                                <div class="avatar">
                                    <div class="w-12 rounded-full">
                                        <img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" />
                                    </div>
                                </div>
                            </div>

                            <ul tabindex="0" class="dropdown-content menu cursor-pointer bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                                <li><a>Account Settings</a></li>
                                <li><button type="submit" class="text-red-500 hover:underline">Logout</button></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="w-full">
                <div id="dashboard" class="tab-panel">@include('admin.dashboard.tabs.overview')</div>

                <div id="tab2" class="tab-panel hidden w-full transition-all duration-500">
                    <p class="text-center">TAB 2</p>
                </div>
            </div>
                
        </div>
    </form>


    <script>
        const sideBar = document.getElementById('sideBar');
        const sidebarSwitch = document.getElementById('sidebar-switch');
        const logo = document.getElementById('camfin-logo');
        const sidebarLogo = document.getElementById('sidebar-logo');
        const adminUser = document.getElementById('admin-user');
        const mainMenu = document.getElementById('main-menu');

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

            mainMenu.classList.toggle('block');
            mainMenu.classList.toggle('hidden');

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
        
    </script>



</x-layouts.app>