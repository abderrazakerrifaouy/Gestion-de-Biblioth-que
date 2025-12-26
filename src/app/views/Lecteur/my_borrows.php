
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
                <div class="bg-white rounded-3xl p-5 border border-slate-200 shadow-sm hover:shadow-md transition">
                    <div class="flex gap-5">
                        <div class="w-24 h-32 bg-slate-100 rounded-xl overflow-hidden shrink-0">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&q=80&w=200" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-slate-900 leading-tight">L'Étranger</h3>
                                <p class="text-xs text-slate-500 italic">Albert Camus</p>
                            </div>
                            <div class="bg-indigo-50 p-2 rounded-lg">
                                <p class="text-[10px] text-indigo-400 font-bold uppercase">Date de retour prévue</p>
                                <p class="text-sm font-black text-indigo-700">14 Janvier 2025</p>
                            </div>
                        </div>
                    </div>
                    <button class="w-full mt-4 py-2 border-2 border-slate-100 rounded-xl text-sm font-bold text-slate-600 hover:bg-slate-50 transition">
                        Prolonger l'emprunt
                    </button>
                </div>

                <div class="bg-white rounded-3xl p-5 border border-slate-200 shadow-sm hover:shadow-md transition">
                    <div class="flex gap-5">
                        <div class="w-24 h-32 bg-slate-100 rounded-xl overflow-hidden shrink-0">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&q=80&w=200" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-slate-900 leading-tight">Le Petit Prince</h3>
                                <p class="text-xs text-slate-500 italic">Saint-Exupéry</p>
                            </div>
                            <div class="bg-amber-50 p-2 rounded-lg border border-amber-100">
                                <p class="text-[10px] text-amber-500 font-bold uppercase">Attention</p>
                                <p class="text-sm font-black text-amber-700">À rendre demain</p>
                            </div>
                        </div>
                    </div>
                    <button class="w-full mt-4 py-2 bg-slate-900 text-white rounded-xl text-sm font-bold hover:bg-slate-800 transition shadow-lg shadow-slate-200">
                        Marquer comme rendu
                    </button>
                </div>
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
                            <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-widest text-center">Note</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-6 py-4 font-bold text-slate-700">1984</td>
                            <td class="px-6 py-4 text-slate-500 text-sm">George Orwell</td>
                            <td class="px-6 py-4 text-slate-500 text-sm">12 Oct. 2024</td>
                            <td class="px-6 py-4 text-emerald-600 text-sm font-semibold">26 Oct. 2024</td>
                            <td class="px-6 py-4 text-center">⭐⭐⭐⭐⭐</td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-6 py-4 font-bold text-slate-700">Le Meilleur des Mondes</td>
                            <td class="px-6 py-4 text-slate-500 text-sm">Aldous Huxley</td>
                            <td class="px-6 py-4 text-slate-500 text-sm">01 Sept. 2024</td>
                            <td class="px-6 py-4 text-emerald-600 text-sm font-semibold">15 Sept. 2024</td>
                            <td class="px-6 py-4 text-center">⭐⭐⭐⭐</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

</div>