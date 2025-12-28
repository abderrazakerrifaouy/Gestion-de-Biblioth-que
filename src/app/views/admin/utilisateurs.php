


<div class="bg-slate-50 text-slate-900 font-sans">
    <main class="container mx-auto px-4 py-10">
        <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-6">
            <div>
                <h1 class="text-3xl font-black text-slate-900">Comptes Utilisateurs</h1>
                <p class="text-slate-500">Gérez les accès, les rôles et les informations des membres.</p>
            </div>

            <div class="w-full md:w-96 relative">
                <input type="text" placeholder="Rechercher un nom ou un email..."
                    class="w-full pl-12 pr-4 py-3 bg-white border border-slate-200 rounded-2xl shadow-sm outline-none focus:ring-2 focus:ring-indigo-500 transition">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-3xl border border-slate-200 flex items-center gap-5">

                <div>
                    <p class="text-2xl font-black"><?= $totalUsers ?></p>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Inscrits Totaux</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-slate-200 flex items-center gap-5">

                <div>
                    <p class="text-2xl font-black"><?= $activeUsers ?></p>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Actifs (7 jours)</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-slate-200 flex items-center gap-5">

                <div>
                    <p class="text-2xl font-black"><?= $adminUsers ?></p>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Administrateurs</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-100">
                            <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.1em]">
                                Utilisateur</th>
                            <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.1em]">
                                Contact</th>
                            <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-[0.1em]">Rôle
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <?php foreach ($users as $user): ?>
                            <tr class="hover:bg-slate-50/50 transition">
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 bg-slate-200 text-slate-500 rounded-full flex items-center justify-center font-bold text-sm">
                                            JD</div>
                                        <div>
                                            <p class="font-bold text-slate-900"><?= $user->firstName ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-5">
                                    <p class="text-sm text-slate-600"><?= $user->email ?></p>
                                </td>
                                <td class="px-6 py-5">
                                    <span
                                        class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-tighter">Lecteur</span>
                                </td>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>

            <div class="p-6 bg-slate-50/50 border-t border-slate-100 flex justify-center">

            </div>
        </div>
    </main>



</div>