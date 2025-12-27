<div class="bg-slate-50 text-slate-900 font-sans">

    <header class="bg-indigo-900 py-12 px-4 shadow-inner">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-3xl font-bold text-white mb-6 text-center">Que souhaitez-vous lire aujourd'hui ?</h1>
                <div class="flex flex-col md:flex-row gap-3 bg-white p-2 rounded-2xl shadow-2xl">
                    <div class="flex-grow relative">
                        <input type="text" placeholder="Titre, auteur ou année..."
                            class="w-full pl-12 pr-4 py-3 rounded-xl outline-none text-slate-700">
                    </div>
                    <button
                        class="bg-indigo-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-indigo-700 transition">
                        Rechercher
                    </button>
                </div>
                <div class="flex flex-wrap justify-center gap-2 mt-6">
                    <span class="text-indigo-200 text-sm mr-2">Suggestions :</span>
                    <button
                        class="text-xs bg-indigo-800 text-indigo-100 px-3 py-1 rounded-full hover:bg-indigo-700">Philosophie</button>
                    <button
                        class="text-xs bg-indigo-800 text-indigo-100 px-3 py-1 rounded-full hover:bg-indigo-700">Fiction</button>
                    <button
                        class="text-xs bg-indigo-800 text-indigo-100 px-3 py-1 rounded-full hover:bg-indigo-700">Histoire</button>
                    <button
                        class="text-xs bg-indigo-800 text-indigo-100 px-3 py-1 rounded-full hover:bg-indigo-700">Science</button>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-10">

            <aside class="w-full lg:w-64 shrink-0">
                <div class="sticky top-24 space-y-8">
                    <div>
                        <h3 class="font-bold text-slate-900 mb-4 uppercase text-xs tracking-widest">Disponibilité</h3>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="w-5 h-5 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                                <span class="text-slate-600 group-hover:text-indigo-600 transition">Disponible (Status:
                                    available)</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="w-5 h-5 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                                <span class="text-slate-600 group-hover:text-indigo-600 transition">Déjà emprunté</span>
                            </label>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-200">
                        <h3 class="font-bold text-slate-900 mb-4 uppercase text-xs tracking-widest">Trier par Année</h3>
                        <select
                            class="w-full bg-white border border-slate-200 p-3 rounded-xl text-slate-600 outline-none focus:ring-2 focus:ring-indigo-500">
                            <option>Plus récents</option>
                            <option>Anciens</option>
                        </select>
                    </div>
                </div>
            </aside>

            <div class="flex-grow">
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
                    <? foreach ($books as $book): ?>
                        <div
                            class="bg-white rounded-3xl border border-slate-100 overflow-hidden hover:shadow-xl transition-shadow group">
                            <div class="aspect-[3/4] bg-slate-200 relative">
                                <img src="<? echo $book->imagePath ?>" class="w-full h-full object-cover">
                                <div class="absolute top-4 left-4">
                                    <? if ($book->status == "available"): ?>
                                        <span
                                            class="bg-emerald-500 text-white text-[10px] font-black px-3 py-1 rounded-full uppercase">Disponible</span>
                                    <? else: ?>
                                        <span
                                            class="bg-slate-500 text-white text-[10px] font-black px-3 py-1 rounded-full uppercase">Emprunté</span>
                                    <? endif; ?>
                                </div>
                            </div>
                            <div class="p-6">
                                <h4
                                    class="font-bold text-lg text-slate-900 group-hover:text-indigo-600 transition line-clamp-1">
                                    <? echo $book->title ?></h4>
                                <p class="text-slate-500 text-sm mb-4"><? echo $book->author ?> • <? echo $book->year ?></p>
                                <form action="/create_borrows" method="post">
                                    <input type="hidden" name="bookId" value="<? echo $book->id ?>">
                                    <? if ($book->status == "available"): ?>
                                    <button
                                        class="w-full bg-indigo-600 text-white py-3 rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-100">
                                        Emprunter maintenant
                                    </button>
                                    <? endif; ?>
                                </form>
                            </div>
                        </div>
                    <? endforeach; ?>


                </div>
            </div>
        </div>
    </main>

</div>