<?php
$books = $books ?? [];
?>
<div class="bg-slate-50 text-slate-900 font-sans">
    <header class="bg-white border-b border-slate-100 py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-extrabold text-slate-900">Library Catalog</h1>
            <p class="text-slate-500 mt-3 max-w-xl mx-auto">Browse our extensive collection of titles. Sign in to
                reserve
                your next book.</p>

            <div class="mt-8 max-w-2xl mx-auto relative">
                <input type="text" placeholder="Search by title, author, or ISBN..."
                    class="w-full pl-12 pr-4 py-4 rounded-2xl border border-slate-200 focus:ring-4 focus:ring-indigo-50 shadow-sm outline-none transition">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xl">🔍</span>
            </div>
        </div>
    </header>

    <div class="container mx-auto px-4 py-12 flex flex-col md:flex-row gap-8">

        <aside class="w-full md:w-64 space-y-8">
            <div>
                <h3 class="font-bold text-slate-900 mb-4 uppercase tracking-wider text-sm">Status</h3>
                <div class="space-y-2">
                    <label class="flex items-center gap-2 text-slate-600">
                        <input type="checkbox" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        Available Now
                    </label>
                    <label class="flex items-center gap-2 text-slate-600">
                        <input type="checkbox" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        Coming Soon
                    </label>
                </div>
            </div>

            <div>
                <h3 class="font-bold text-slate-900 mb-4 uppercase tracking-wider text-sm">Release Year</h3>
                <select class="w-full p-2 bg-white border border-slate-200 rounded-lg text-slate-600">
                    <option>All Years</option>
                    <option>2024 - Newest</option>
                    <option>2020 - 2023</option>
                    <option>Pre-2020</option>
                </select>
            </div>
        </aside>

        <main class="flex-1">

            <div class="flex justify-between items-center mb-6">
                <p class="text-slate-500 font-medium">Showing <span class="text-slate-900"><? count($books) ?></span>
                    books</p>
                <select class="bg-transparent font-bold text-indigo-600 outline-none">
                    <option>Sort by: Newest</option>
                    <option>Sort by: Title A-Z</option>
                </select>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <?php if (count($books) > 0): ?>
                    <?php foreach ($books as $book): ?>

                        <div
                            class="group bg-white rounded-2xl border border-slate-200 overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition duration-300">
                            <div class="aspect-[3/4] bg-slate-100 relative overflow-hidden">
                                <img src="<? echo $book->imagePath ?>" alt="Book Cover" class="w-full h-full object-cover">
                                <div class="absolute top-3 right-3">
                                    <span
                                        class="bg-green-500 text-white text-[10px] font-black px-2 py-1 rounded uppercase tracking-tighter">Available</span>
                                </div>
                            </div>

                            <div class="p-5">
                                <!-- <p class="text-[10px] font-bold text-indigo-600 uppercase mb-1">Classic Fiction</p> -->
                                <h4 class="font-bold text-slate-900 leading-tight group-hover:text-indigo-600 transition"><? echo $book->title ?></h4>
                                <p class="text-sm text-slate-500 mt-1"><? echo $book->author ?></p>
                                <p class="text-xs text-slate-400 mt-2 italic border-t border-slate-50 pt-2">Published: <? echo $book->year ?></p>

                                <a href="/login"
                                    class="mt-4 block w-full py-3 text-center bg-slate-900 text-white rounded-xl font-bold text-sm hover:bg-indigo-600 transition shadow-lg shadow-slate-100">
                                    Login to Borrow
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-slate-500">No books found in the catalog.</p>
                <?php endif; ?>
            </div>

            <div class="mt-12 flex justify-center space-x-2">
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-slate-200 text-slate-600 font-bold hover:bg-indigo-600 hover:text-white transition shadow-sm">1</button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-slate-200 text-slate-600 font-bold hover:bg-indigo-600 hover:text-white transition shadow-sm">2</button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-slate-200 text-slate-600 font-bold hover:bg-indigo-600 hover:text-white transition shadow-sm">3</button>
            </div>
        </main>
    </div>
</div>