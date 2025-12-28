<div class="bg-slate-50 text-slate-900 font-sans">


    <main class="container mx-auto px-4 py-10">

        <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-black text-slate-900">Gestion de l'Inventaire</h1>
                <p class="text-slate-500 text-sm">Consultez, modifiez ou ajoutez des livres à votre catalogue.</p>
            </div>
            <a href="/create_livre"
                class="w-full md:w-auto bg-indigo-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-100 flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
                Ajouter un nouveau livre
            </a>
        </div>

        <div class="bg-white p-4 rounded-2xl border border-slate-200 mb-6 flex flex-col md:flex-row gap-4 items-center">
            <div class="relative flex-grow w-full">
                <input type="text" placeholder="Rechercher par titre, auteur..."
                    class="w-full pl-11 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-indigo-500 transition">
            </div>
            <select
                class="w-full md:w-48 bg-slate-50 border border-slate-200 px-4 py-2.5 rounded-xl text-slate-600 outline-none">
                <option>Tous les statuts</option>
                <option>Disponible</option>
                <option>Emprunté</option>
            </select>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-100">
                            <th class="px-6 py-4 font-bold text-slate-400 uppercase tracking-widest text-[10px]">Livre
                            </th>
                            <th class="px-6 py-4 font-bold text-slate-400 uppercase tracking-widest text-[10px]">Auteur
                            </th>
                            <th class="px-6 py-4 font-bold text-slate-400 uppercase tracking-widest text-[10px]">Année
                            </th>
                            <th class="px-6 py-4 font-bold text-slate-400 uppercase tracking-widest text-[10px]">Statut
                            </th>
                            <th
                                class="px-6 py-4 font-bold text-slate-400 uppercase tracking-widest text-[10px] text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <?php foreach ($books as $book): ?>
                            <tr class="hover:bg-slate-50/50 transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3 text-slate-400">
                                        <div class="w-10 h-14 bg-slate-100 rounded shadow-sm shrink-0 opacity-50">
                                            <img src="<?= $book->imagePath ?>" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <p class="font-bold"><?= $book->title ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-500"><?= $book->author ?></td>
                                <td class="px-6 py-4 text-slate-500"><?= $book->year ?></td>
                                <td class="px-6 py-4">
                                    <?php if ($book->status === 'available'): ?>
                                        <span
                                            class="bg-emerald-50 text-emerald-600 px-3 py-1 rounded-full text-[10px] font-black uppercase">Disponible</span>
                                    <?php else: ?>
                                        <span
                                            class="bg-amber-50 text-amber-600 px-3 py-1 rounded-full text-[10px] font-black uppercase">Emprunté</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-6 py-4 text-right text-slate-300">
                                    <div class="flex justify-end gap-2">
                                        <button onclick="location.href='/modify_book?book_id=<?= $book->id ?>'"
                                            class="p-2 hover:text-indigo-600 transition">Modifier</button>
                                        <form method="POST" action="/delete_book"
                                            onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?');">
                                            <input type="hidden" name="book_id" value="<?= $book->id ?>">
                                            <input type="submit" class="p-2 hover:text-red-500 transition"
                                                value="Supprimer" />
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div
                class="p-4 bg-slate-50/50 border-t border-slate-100 flex justify-between items-center text-xs font-bold text-slate-400 uppercase tracking-widest">
                <span>Affichage <?php echo count($books); ?> livres</span>
            </div>
        </div>
    </main>

</div>