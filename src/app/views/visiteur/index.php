<header class="bg-indigo-900 py-24 px-4 text-white">
    <div class="container mx-auto flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 text-center md:text-left mb-12 md:mb-0">
            <span
                class="bg-indigo-800 text-indigo-300 px-4 py-1 rounded-full text-sm font-bold tracking-wide uppercase">Public
                Digital Archive</span>
            <h2 class="text-5xl md:text-7xl font-extrabold mt-4 leading-tight">Your next story <br><span
                    class="text-indigo-400">starts here.</span></h2>
            <p class="text-indigo-200 text-lg mt-6 max-w-lg">Join 3,000+ readers today. Browse our collection of over
                10,000 titles and borrow them for free with a membership.</p>

            <div
                class="mt-10 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center md:justify-start">
                <button
                    class="bg-white text-indigo-900 px-8 py-4 rounded-xl font-bold text-lg hover:bg-indigo-50 transition">Browse
                    the Catalog</button>
                <button
                    class="border border-indigo-400 text-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-indigo-800 transition">Learn
                    More</button>
            </div>
        </div>
        <div class="md:w-1/2 flex justify-center">
            <div class="grid grid-cols-2 gap-4">
                <div
                    class="w-40 h-56 bg-indigo-700 rounded-lg transform rotate-3 shadow-2xl border-4 border-indigo-500/30">
                </div>
                <div
                    class="w-40 h-56 bg-indigo-500 rounded-lg transform -rotate-6 shadow-2xl border-4 border-indigo-300/30 -mt-8">
                </div>
            </div>
        </div>
    </div>
</header>
<section class="py-20 container mx-auto px-4">
    <div class="text-center mb-16">
        <h3 class="text-3xl font-bold">Borrowing made simple</h3>
        <p class="text-slate-500">Become a member in three easy steps</p>
    </div>

    <div class="grid md:grid-cols-3 gap-12">
        <div class="text-center">
            <div
                class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-6">
                1</div>
            <h4 class="font-bold text-xl mb-3">Register</h4>
            <p class="text-slate-600">Create your account using your email and phone number.</p>
        </div>
        <div class="text-center">
            <div
                class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-6">
                2</div>
            <h4 class="font-bold text-xl mb-3">Reserve</h4>
            <p class="text-slate-600">Find a book that is "Available" and hit the reserve button.</p>
        </div>
        <div class="text-center">
            <div
                class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center text-2xl mx-auto mb-6">
                3</div>
            <h4 class="font-bold text-xl mb-3">Read</h4>
            <p class="text-slate-600">Pick up your book or read digitally from your dashboard.</p>
        </div>
    </div>
</section>

<section class="bg-slate-100 py-20 px-4">
    <div class="container mx-auto">
        <div class="flex items-center justify-between mb-10">
            <h3 class="text-2xl font-bold text-slate-800 italic underline decoration-indigo-500">Currently Trending</h3>
            <div class="flex space-x-2">
                <button class="p-2 bg-white rounded-full border border-slate-200 hover:bg-indigo-50">←</button>
                <button class="p-2 bg-white rounded-full border border-slate-200 hover:bg-indigo-50">→</button>
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <? foreach ($books as $book): ?>
                <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-200 hover:shadow-md transition">
                    <div class="aspect-[3/4] bg-slate-200 rounded-xl mb-4 overflow-hidden">
                        <img src="<? echo $book->imagePath ?>" class="w-full h-full object-cover">
                    </div>

                    <? if ($book->status == "available"): ?>
                        <span
                            class="bg-green-500 text-white text-[10px] font-black px-2 py-1 rounded uppercase tracking-tighter">Available</span>
                    <? else: ?>
                        <span
                            class="bg-red-500 text-white text-[10px] font-black px-2 py-1 rounded uppercase tracking-tighter">Unavailable</span>
                    <? endif; ?>
                    <h4 class="font-bold mt-2 text-slate-900"><? echo $book->title ?></h4>
                    <p class="text-sm text-slate-500"><? echo $book->author ?> • <? echo $book->year ?> </p>
                    <a href="/login"
                        class="block text-center mt-4 py-2 border-2 border-indigo-600 text-indigo-600 rounded-lg font-bold hover:bg-indigo-600 hover:text-white transition">log
                        in to Borrow</a>
                </div>
            <? endforeach ?>
        </div>
    </div>
</section>