{{-- resources/views/layouts/dashboard.blade.php --}}
<x-app-layout>
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-72 text-white min-h-screen p-6" style="background-color: #3D539F;">
            <div class="flex items-center space-x-3 mb-10">
                <img src="{{ asset('images/logo.png') }}" class="w-10 h-10">
                <span class="font-bold text-sm leading-tight">
                    SISTEM INFORMASI SEKSI KESELAMATAN LLAJ KAB. BOGOR
                </span>
            </div>
            <nav class="space-y-2">
                <a href={{ route('dashboard') }}
                   class="flex items-center space-x-2 p-2 rounded relative transition-all duration-300"
                   style="background-color: #3D539F;"
                   onmouseover="this.style.backgroundColor='#EBECFF'; this.style.color='#3D539F'; this.querySelector('.menu-border').style.display='block';"
                   onmouseout="this.style.backgroundColor='#3D539F'; this.style.color='white'; this.querySelector('.menu-border').style.display='none';">
                    <span>🏠</span><span>Beranda</span>
                    <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                </a>
                <!-- Dropdown Audit SMK-PAU -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                            class="flex items-center space-x-2 p-2 rounded w-full text-left relative transition-all duration-300"
                            style="background-color: transparent;"
                            :style="open ? 'background-color:#3D539F;color:white;' : 'background-color:transparent;color:white;'"
                            @mouseover="Object.assign($el.style, {backgroundColor:'#EBECFF',color:'#3D539F'}); $el.querySelector('.menu-border').style.display='block';"
                            @mouseout="Object.assign($el.style, open ? {backgroundColor:'#3D539F',color:'white'} : {backgroundColor:'transparent',color:'white'}); $el.querySelector('.menu-border').style.display='none';">
                        <span>🛣️</span><span>Audit SMK-PAU</span>
                        <svg class="ml-auto w-4 h-4 transform transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 max-h-0"
                         x-transition:enter-end="opacity-100 max-h-screen"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 max-h-screen"
                         x-transition:leave-end="opacity-0 max-h-0"
                         class="flex flex-col space-y-1 bg-blue-900 rounded shadow-lg py-2 mt-1 ml-6"
                         style="overflow:hidden;">
                        <a href="#" class="flex items-center space-x-2 p-2 rounded relative transition-all duration-300"
                           style="background-color: transparent; color: white;"
                           onmouseover="this.style.backgroundColor='#EBECFF'; this.style.color='#3D539F'; this.querySelector('.menu-border').style.display='block';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='white'; this.querySelector('.menu-border').style.display='none';">
                            <span>📊</span><span>Dashboard Audit</span>
                            <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 p-2 rounded relative transition-all duration-300"
                           style="background-color: transparent; color: white;"
                           onmouseover="this.style.backgroundColor='#EBECFF'; this.style.color='#3D539F'; this.querySelector('.menu-border').style.display='block';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='white'; this.querySelector('.menu-border').style.display='none';">
                            <span>🏢</span><span>Data Perusahaan</span>
                            <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 p-2 rounded relative transition-all duration-300"
                           style="background-color: transparent; color: white;"
                           onmouseover="this.style.backgroundColor='#EBECFF'; this.style.color='#3D539F'; this.querySelector('.menu-border').style.display='block';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='white'; this.querySelector('.menu-border').style.display='none';">
                            <span>🔎</span><span>Detail Perusahaan</span>
                            <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 p-2 rounded relative transition-all duration-300"
                           style="background-color: transparent; color: white;"
                           onmouseover="this.style.backgroundColor='#EBECFF'; this.style.color='#3D539F'; this.querySelector('.menu-border').style.display='block';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='white'; this.querySelector('.menu-border').style.display='none';">
                            <span>📝</span><span>Form Inspeksi</span>
                            <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 p-2 rounded relative transition-all duration-300"
                           style="background-color: transparent; color: white;"
                           onmouseover="this.style.backgroundColor='#EBECFF'; this.style.color='#3D539F'; this.querySelector('.menu-border').style.display='block';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='white'; this.querySelector('.menu-border').style.display='none';">
                            <span>📋</span><span>Laporan Inspeksi</span>
                            <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 p-2 rounded relative transition-all duration-300"
                           style="background-color: transparent; color: white;"
                           onmouseover="this.style.backgroundColor='#EBECFF'; this.style.color='#3D539F'; this.querySelector('.menu-border').style.display='block';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='white'; this.querySelector('.menu-border').style.display='none';">
                            <span>⚠️</span><span>Rekomendasi Perbaikan</span>
                            <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 p-2 rounded relative transition-all duration-300"
                           style="background-color: transparent; color: white;"
                           onmouseover="this.style.backgroundColor='#EBECFF'; this.style.color='#3D539F'; this.querySelector('.menu-border').style.display='block';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='white'; this.querySelector('.menu-border').style.display='none';">
                            <span>📑</span><span>Daftar Inspeksi</span>
                            <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                        </a>
                    </div>
                </div>
                <a href="#" class="flex items-center space-x-2 p-2 rounded relative transition-all duration-300"
                   style="background-color: transparent; color: white;"
                   onmouseover="this.style.backgroundColor='#EBECFF'; this.style.color='#3D539F'; this.querySelector('.menu-border').style.display='block';"
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='white'; this.querySelector('.menu-border').style.display='none';">
                    <span>📄</span><span>Penilaian PO</span>
                    <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                </a>
                <a href="#" class="flex items-center space-x-2 p-2 rounded relative transition-all duration-300"
                   style="background-color: transparent; color: white;"
                   onmouseover="this.style.backgroundColor='#EBECFF'; this.style.color='#3D539F'; this.querySelector('.menu-border').style.display='block';"
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='white'; this.querySelector('.menu-border').style.display='none';">
                    <span>👶</span><span>Sosialisasi Anak</span>
                    <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                </a>
                <a href="{{ route('laporanmasyarakat.index') }}" class="flex items-center space-x-2 p-2 rounded relative transition-all duration-300"
                   style="background-color: transparent; color: white;"
                   onmouseover="this.style.backgroundColor='#EBECFF'; this.style.color='#3D539F'; this.querySelector('.menu-border').style.display='block';"
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='white'; this.querySelector('.menu-border').style.display='none';">
                    <span>📢</span><span>Laporan Masyarakat</span>
                    <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                </a>
                <a href="#" class="flex items-center space-x-2 p-2 rounded relative transition-all duration-300"
                   style="background-color: transparent; color: white;"
                   onmouseover="this.style.backgroundColor='#EBECFF'; this.style.color='#3D539F'; this.querySelector('.menu-border').style.display='block';"
                   onmouseout="this.style.backgroundColor='transparent'; this.style.color='white'; this.querySelector('.menu-border').style.display='none';">
                    <span>🚪</span><span>Keluar</span>
                    <span class="menu-border" style="display:none; position:absolute; right:0; top:0; height:100%; width:4px; background:#3D539F; border-radius:0 4px 4px 0; transition:background 0.3s;"></span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-gray-100 p-6">
            @yield('content')
        </main>
    </div>
</x-app-layout>
