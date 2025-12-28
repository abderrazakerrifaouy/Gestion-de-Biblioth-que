<div class="bg-slate-50 text-slate-900 font-sans">
    <main class="container mx-auto px-4 py-8">

        <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-4">
            <div>
                <h1 class="text-3xl font-black text-slate-900">Tableau de Bord</h1>
                <p class="text-slate-500">Aperçu global de l'activité de la bibliothèque.</p>
            </div>
            <div class="flex gap-3">
                 
                <a href="/create_livre"
                    class="bg-indigo-600 text-white px-5 py-2.5 rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-100 flex items-center gap-2">
                    <span>+</span> Ajouter un Livre
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm">
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Total Livres</p>
                <div class="flex items-center justify-between mt-2">
                    <p class="text-3xl font-black text-slate-900"><?= count($books) ?></p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm">
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Emprunts Actifs</p>
                <div class="flex items-center justify-between mt-2">
                    <p class="text-3xl font-black text-slate-900"><?= count($borrowsActives) ?></p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm">
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Lecteurs</p>
                <div class="flex items-center justify-between mt-2">
                    <p class="text-3xl font-black text-slate-900"><?= count($users) ?></p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm border-l-4 border-l-red-500">
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest ">Retards</p>
                <div class="flex items-center justify-between mt-2">
                    <p class="text-3xl font-black text-red-600"><?= count($rotareBorrows) ?></p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm">
                <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                    <h3 class="font-bold text-slate-900 uppercase text-sm tracking-tight">Emprunts Récents</h3>
                    <a href="/borrows" class="text-xs text-indigo-600 font-bold hover:underline">Voir tout</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-slate-50 text-slate-400 font-bold">
                            <tr>
                                <th class="px-6 py-4">Livre</th>
                                <th class="px-6 py-4">Lecteur</th>
                                <th class="px-6 py-4">Date</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <?php foreach ($lastBorrows as $row): ?>
                                <tr>
                                    <td class="px-6 py-4 font-bold">
                                        <?= htmlspecialchars($row['book_title']) ?>
                                    </td>

                                    <td class="px-6 py-4 text-slate-600">
                                        <?= htmlspecialchars($row['reader_name']) ?>
                                    </td>

                                    <td class="px-6 py-4 text-slate-400 text-xs">
                                        <?= Helper::timeAgo($row['borrowDate']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>

            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm">
                <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                    <h3 class="font-bold text-slate-900 uppercase text-sm tracking-tight">Nouveaux Lecteurs</h3>
                    <a href="/users" class="text-xs text-indigo-600 font-bold hover:underline">Gérer les comptes</a>
                </div>
                <div class="p-6 space-y-4">
                    <?php foreach ($users as $user): ?>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 bg-slate-100 rounded-full flex items-center justify-center font-bold text-xs text-indigo-600">
                                <?= strtoupper($user->firstName[0] . $user->lastName[0]) ?></div>
                            <div>
                                <p class="text-sm font-bold"><?= $user->firstName . ' ' . $user->lastName ?></p>
                                <p class="text-[10px] text-slate-400 italic"><?= $user->email ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>

        </div>
    </main>



</div>