<div class="bg-slate-50 text-slate-900 font-sans">

    

    <header class="bg-white py-10 border-b border-slate-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div>
                    <h1 class="text-3xl font-extrabold text-slate-900">Welcome back, Alex! 👋</h1>
                    <p class="text-slate-500 mt-1">You have <span class="text-indigo-600 font-bold">2 books</span> currently borrowed.</p>
                </div>
                <div class="mt-6 md:mt-0 flex gap-3">
                    <a href="/books" class="bg-indigo-600 text-white px-6 py-3 rounded-xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition">Browse New Books</a>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <div class="lg:col-span-2 space-y-8">
                <div>
                    <h2 class="text-xl font-bold mb-6 flex items-center gap-2">
                        <span class="w-2 h-6 bg-indigo-600 rounded-full"></span>
                        Currently Reading
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-200 flex gap-4">
                            <div class="w-24 h-32 bg-slate-200 rounded-lg shrink-0"></div>
                            <div class="flex flex-col justify-between py-1">
                                <div>
                                    <h4 class="font-bold text-slate-900 leading-tight">Thinking, Fast and Slow</h4>
                                    <p class="text-xs text-slate-500">Daniel Kahneman</p>
                                </div>
                                <div class="mt-4">
                                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Due Date</p>
                                    <p class="text-sm font-bold text-amber-600">Dec 30, 2024</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-200 flex gap-4">
                            <div class="w-24 h-32 bg-slate-200 rounded-lg shrink-0"></div>
                            <div class="flex flex-col justify-between py-1">
                                <div>
                                    <h4 class="font-bold text-slate-900 leading-tight">Atomic Habits</h4>
                                    <p class="text-xs text-slate-500">James Clear</p>
                                </div>
                                <div class="mt-4">
                                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Due Date</p>
                                    <p class="text-sm font-bold text-indigo-600">Jan 12, 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-xl font-bold mb-6">Recent History</h2>
                    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-slate-50 text-slate-500 font-bold">
                                <tr>
                                    <th class="px-6 py-4">Book Title</th>
                                    <th class="px-6 py-4">Borrowed On</th>
                                    <th class="px-6 py-4">Returned On</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr>
                                    <td class="px-6 py-4 font-medium italic">The Great Gatsby</td>
                                    <td class="px-6 py-4 text-slate-500">Nov 15, 2024</td>
                                    <td class="px-6 py-4"><span class="text-green-600 font-bold">Returned</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <div class="bg-indigo-900 rounded-3xl p-8 text-white shadow-xl">
                    <h3 class="font-bold text-lg mb-4">Reading Stats</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-indigo-800/50 p-4 rounded-2xl border border-indigo-700">
                            <p class="text-2xl font-black">12</p>
                            <p class="text-xs text-indigo-300">Total Books</p>
                        </div>
                        <div class="bg-indigo-800/50 p-4 rounded-2xl border border-indigo-700">
                            <p class="text-2xl font-black">0</p>
                            <p class="text-xs text-indigo-300">Overdue</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-3xl border border-slate-200">
                    <h3 class="font-bold text-slate-900 mb-4">Recommended for You</h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 group cursor-pointer">
                            <div class="w-12 h-16 bg-slate-100 rounded group-hover:bg-indigo-100 transition"></div>
                            <div>
                                <p class="text-sm font-bold group-hover:text-indigo-600 transition">The Psychology of Money</p>
                                <p class="text-xs text-slate-400">Morgan Housel</p>
                            </div>
                        </div>
                        </div>
                    <button class="w-full mt-6 py-3 border-2 border-slate-100 rounded-xl text-sm font-bold text-slate-600 hover:bg-slate-50 transition">View Recommendations</button>
                </div>
            </div>

        </div>
    </main>

</div>