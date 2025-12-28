<div class="bg-slate-50 text-slate-900 font-sans">

    <main class="container mx-auto px-4 py-10">

        <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-6">
            <div>
                <h1 class="text-3xl font-black text-slate-900 italic">Flux des Emprunts</h1>
                <p class="text-slate-500">Suivi des livres sortis et gestion des retours.</p>
            </div>


        </div>

        <div class="flex gap-4 mb-8 overflow-x-auto pb-2">
            <button class="bg-indigo-600 text-white px-6 py-2 rounded-full text-xs font-bold shadow-md">Tous</button>
            <button
                class="bg-white border border-slate-200 text-slate-500 px-6 py-2 rounded-full text-xs font-bold hover:border-indigo-300 transition">En
                cours</button>
            <button
                class="bg-white border border-slate-200 text-red-500 px-6 py-2 rounded-full text-xs font-bold hover:bg-red-50 transition">En
                retard (<?= $countRotareBorrows ?>)</button>
            <button
                class="bg-white border border-slate-200 text-slate-500 px-6 py-2 rounded-full text-xs font-bold hover:border-indigo-300 transition">Terminés</button>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-100">
                            <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest">Livre
                                emprunté</th>
                            <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest">
                                Lecteur</th>
                            <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest">Date
                                Sortie</th>
                            <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest">Date
                                Retour Prévue</th>
                            <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest">Statut
                            </th>
                            <th
                                class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest text-right">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <?php foreach ($borrows as $borrow): ?>
                            <tr class="hover:bg-red-50/30 transition">
                                <td class="px-6 py-5">
                                    <p class="font-bold text-slate-900 leading-none"><?= $borrow['title'] ?></p>
                                    <p class="text-[10px] text-slate-400 mt-1 font-mono italic">ID_BOOK:
                                        #B-<?= $borrow['id'] ?></p>
                                </td>
                                <td class="px-6 py-5">
                                    <p class="text-sm font-semibold text-slate-700"><?= $borrow['firstName'] ?>
                                        <?= $borrow['lastName'] ?>
                                    </p>
                                </td>
                                <td class="px-6 py-5 text-sm text-slate-500"><?= $borrow['borrowDate'] ?></td>
                                <td class="px-6 py-5">.
                                    <?php if ($borrow['returnDate'] != null): ?>
                                        <p class="text-sm font-bold text-slate-400"><?= $borrow['returnDate'] ?></p>
                                    <?php elseif (new DateTime() <= new DateTime($borrow['returnDateAcc'])): ?>
                                        <p class="text-sm font-bold text-indigo-500"><?= $borrow['returnDateAcc'] ?></p>
                                    <?php else: ?>
                                        <p class="text-sm font-bold text-red-600"><?= $borrow['returnDateAcc'] ?></p>
                                    <?php endif; ?>
                                </td>
                                <td class="px-6 py-5">
                                    <?php if ($borrow['returnDate'] != null): ?>
                                        <span
                                            class="border border-slate-200 text-slate-400 px-2 py-1 rounded text-[10px] font-black uppercase">Rendu</span>
                                    <?php elseif (new DateTime() <= new DateTime($borrow['returnDateAcc'])): ?>
                                        <span
                                            class="bg-indigo-50 text-indigo-600 px-2 py-1 rounded text-[10px] font-black uppercase">En
                                            cours</span>
                                    <?php else: ?>
                                        <span
                                            class="bg-red-100 text-red-600 px-2 py-1 rounded text-[10px] font-black uppercase">En
                                            retard</span>
                                    <?php endif; ?>
                                </td>

                                <td class="px-6 py-5 text-right">
                                    <?php if (!$borrow['returnDate'] != null): ?>
                                        <button
                                            class="bg-slate-900 text-white px-4 py-1.5 rounded-lg text-[10px] font-bold hover:bg-indigo-600 transition">Valider
                                            Retour</button>
                                    <?php else: ?>
                                        <button
                                        class="bg-slate-100 text-white px-4 py-1.5 rounded-lg text-[10px] font-bold hover:bg-indigo-600 transition">Valider
                                        Retour</button>
                                    <?php endif; ?>

                                </td>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-8 p-6 bg-indigo-50 rounded-3xl border border-indigo-100 flex items-start gap-4">
            <span class="text-2xl">💡</span>
            <div>
                <p class="text-sm font-bold text-indigo-900">Astuce de gestion</p>
                <p class="text-xs text-indigo-700 mt-1">Valider un retour change automatiquement le statut du livre en
                    <span class="font-bold">"Disponible"</span> dans votre catalogue et libère l'emplacement pour un
                    nouveau lecteur.
                </p>
            </div>
        </div>
    </main>

    <footer class="py-10 text-center text-slate-300 text-[10px] font-bold uppercase tracking-[0.2em]">
        Lumina Library Management Panel &copy; 2024
    </footer>

</div>