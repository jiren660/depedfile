<div class="min-h-screen bg-gray-100 flex flex-col">
    <nav class="bg-[#2206a0] text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold italic">DepEd Zamboanga City - Inventory</h1>
            <span class="text-sm">Welcome, {{ auth()->user()->name }}</span>
        </div>
    </nav>

    <main class="container mx-auto p-6 flex-grow">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-[#c00000]">
                <h3 class="text-gray-500 text-sm uppercase">Total Inventory Items</h3>
                <p class="text-3xl font-bold text-gray-800">1,240</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-yellow-500">
                <h3 class="text-gray-500 text-sm uppercase">Low Stock Alerts</h3>
                <p class="text-3xl font-bold text-gray-800">12</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
                <h3 class="text-gray-500 text-sm uppercase">Pending Approvals</h3>
                <p class="text-3xl font-bold text-gray-800">5</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-lg font-semibold mb-4 text-gray-700">Recent Transactions</h2>
            <p class="text-gray-500 italic">No records to show now...</p>
        </div>
    </main>

    <footer class="bg-white p-4 text-center text-xs text-gray-400 border-t">
        &copy; 2026 DepEd Zamboanga City Inventory System. All Rights Reserved.
    </footer>
</div>