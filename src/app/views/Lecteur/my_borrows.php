
<div class="bg-slate-50 text-slate-900 font-sans">
    <main class="container mx-auto px-4 py-10">
        <div class="mb-10">
            <h1 class="text-3xl font-black text-slate-900">Ma Bibliothèque Personnelle</h1>
            <p class="text-slate-500">Gérez vos lectures en cours et consultez votre historique.</p>
        </div>

        <section class="mb-16">
            <h2 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                <span class="flex h-3 w-3 rounded-full bg-emerald-500"></span>
                Emprunts en cours
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <? foreach ($books as $book): ?>
                <div class="bg-white rounded-3xl p-5 border border-slate-200 shadow-sm hover:shadow-md transition">
                    <div class="flex gap-5">
                        <div class="w-24 h-32 bg-slate-100 rounded-xl overflow-hidden shrink-0">
                            <img src="<? echo $book['image_path'] ?>" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-slate-900 leading-tight"><? echo $book['title'] ?></h3>
                                <p class="text-xs text-slate-500 italic"><? echo $book['author'] ?></p>
                            </div>
                            <? if ($book['days_left'] > 3): ?>
                            <div class="bg-indigo-50 p-2 rounded-lg">
                                <p class="text-[10px] text-indigo-400 font-bold uppercase">Date de retour prévue</p>
                                <p class="text-sm font-black text-indigo-700"><? echo $book['return_date'] ?></p>
                            </div>
                            <? else: ?>
                                <div class="bg-amber-50 p-2 rounded-lg border border-amber-100">
                                <p class="text-[10px] text-amber-500 font-bold uppercase">Attention</p>
                                <p class="text-sm font-black text-amber-700">À rendre <? echo $book['days_left'] ?> Day</p>
                            </div>
                            <? endif; ?>
                        </div>
                    </div>
                    <form action="/return_borrows" method="post">
                        <input type="hidden" name="bookId" value="<? echo $book['id'] ?>">
                    <button class="w-full mt-4 py-2 border-2 border-slate-100 rounded-xl text-sm font-bold text-slate-600 hover:bg-slate-50 transition">
                        Prolonger l'emprunt
                    </button>
                    </form>
                </div>
                <? endforeach; ?>
            </div>
        </section>

        <section>
            <h2 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-3">
                <span class="flex h-3 w-3 rounded-full bg-slate-400"></span>
                Historique des lectures
            </h2>

            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-100">
                            <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest">Livre</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest">Auteur</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest">Emprunté le</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest">Rendu le</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <? foreach ($history as $book): ?>
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-6 py-4 font-bold text-slate-700"><?= $book['title'] ?></td>
                            <td class="px-6 py-4 text-slate-500 text-sm"><?= $book['author'] ?></td>
                            <td class="px-6 py-4 text-slate-500 text-sm"><?= $book['borrowDate'] ?></td>
                            <? if ($book['returnDate'] !== null): ?>
                            <td class="px-6 py-4 text-emerald-600 text-sm font-semibold"><?= $book['returnDate'] ?></td>
                            <? else: ?>
                            <td class="px-6 py-4 text-amber-600 text-sm font-semibold">Not returned yet</td>
                            <? endif; ?>
                        </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

</div>