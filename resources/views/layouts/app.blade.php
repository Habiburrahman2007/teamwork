<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortoHub Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for icons and responsive sidebar */
        @media (max-width: 767px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease-in-out;
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .overlay {
                display: none;
            }

            .overlay.active {
                display: block;
            }
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Header / Navbar -->
    <header class="bg-white shadow-sm p-4 flex items-center justify-between sticky top-0 z-50">
        <div class="flex items-center">
            <button id="sidebar-toggle"
                class="md:hidden p-2 mr-2 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <div class="text-2xl font-bold text-gray-800">PortoHub</div>
        </div>

        <!-- Quick Menu -->
        <nav class="flex items-center space-x-4 ">
            <button class="p-2 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300">
                🔍 <span class="sr-only">Search</span>
            </button>
            <div class="relative">
                <button id="profile-dropdown-toggle"
                    class="flex items-center p-2 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300">
                    👤 <span class="sr-only">User Profile</span>
                </button>
                <!-- Dropdown Menu -->
                <div id="profile-dropdown-menu"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Akun</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="flex flex-1">
        <!-- Sidebar Navigation -->
        <aside
            class="sidebar bg-white w-64 p-4 shadow-md md:relative absolute inset-y-0 left-0 z-40 flex-shrink-0 md:translate-x-0">
            <nav class="mt-4">
                <ul>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded-md">
                            🏠 <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded-md">
                            📁 <span class="ml-3">Portofolio Saya</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded-md">
                            ➕ <span class="ml-3">Tambah Proyek</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </aside>

        <!-- Overlay for mobile sidebar -->
        <div id="sidebar-overlay" class="overlay fixed inset-0 bg-black opacity-50 z-30 hidden md:hidden"></div>

        <!-- Main Content Area (Pinterest-like grid) -->
        {{ $slot }}
    </div>

    <script>
    document.addEventListener("livewire:navigated", () => {
        initSidebar();
        initDropdown();
    });

    function initSidebar() {
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.querySelector('.sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        sidebarToggle?.addEventListener('click', () => {
            sidebar.classList.toggle('open');
            sidebarOverlay.classList.toggle('active');
        });

        sidebarOverlay?.addEventListener('click', () => {
            sidebar.classList.remove('open');
            sidebarOverlay.classList.remove('active');
        });
    }

    function initDropdown() {
        const profileDropdownToggle = document.getElementById('profile-dropdown-toggle');
        const profileDropdownMenu = document.getElementById('profile-dropdown-menu');

        profileDropdownToggle?.addEventListener('click', () => {
            profileDropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!profileDropdownToggle?.contains(event.target) && !profileDropdownMenu?.contains(event.target)) {
                profileDropdownMenu?.classList.add('hidden');
            }
        });
    }
</script>

</body>

</html>
