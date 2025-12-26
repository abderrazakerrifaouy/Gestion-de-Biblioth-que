
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
                    <button class="bg-indigo-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-indigo-700 transition">
                        Rechercher
                    </button>
                </div>
                <div class="flex flex-wrap justify-center gap-2 mt-6">
                    <span class="text-indigo-200 text-sm mr-2">Suggestions :</span>
                    <button class="text-xs bg-indigo-800 text-indigo-100 px-3 py-1 rounded-full hover:bg-indigo-700">Philosophie</button>
                    <button class="text-xs bg-indigo-800 text-indigo-100 px-3 py-1 rounded-full hover:bg-indigo-700">Fiction</button>
                    <button class="text-xs bg-indigo-800 text-indigo-100 px-3 py-1 rounded-full hover:bg-indigo-700">Histoire</button>
                    <button class="text-xs bg-indigo-800 text-indigo-100 px-3 py-1 rounded-full hover:bg-indigo-700">Science</button>
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
                                <input type="checkbox" class="w-5 h-5 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                                <span class="text-slate-600 group-hover:text-indigo-600 transition">Disponible (Status: available)</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-5 h-5 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                                <span class="text-slate-600 group-hover:text-indigo-600 transition">Déjà emprunté</span>
                            </label>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-200">
                        <h3 class="font-bold text-slate-900 mb-4 uppercase text-xs tracking-widest">Trier par Année</h3>
                        <select class="w-full bg-white border border-slate-200 p-3 rounded-xl text-slate-600 outline-none focus:ring-2 focus:ring-indigo-500">
                            <option>Plus récents</option>
                            <option>Anciens</option>
                        </select>
                    </div>
                </div>
            </aside>

            <div class="flex-grow">
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
                    
                    <div class="bg-white rounded-3xl border border-slate-100 overflow-hidden hover:shadow-xl transition-shadow group">
                        <div class="aspect-[3/4] bg-slate-200 relative">
                            <img src="https://images.unsplash.com/photo-1543004629-142a2ec4df89?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-emerald-500 text-white text-[10px] font-black px-3 py-1 rounded-full uppercase">Disponible</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="font-bold text-lg text-slate-900 group-hover:text-indigo-600 transition line-clamp-1">L'Alchimiste</h4>
                            <p class="text-slate-500 text-sm mb-4">Paulo Coelho • 1988</p>
                            <button class="w-full bg-indigo-600 text-white py-3 rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-100">
                                Emprunter maintenant
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl border border-slate-100 overflow-hidden opacity-80">
                        <div class="aspect-[3/4] bg-slate-200 relative grayscale">
                            <img src="https://images.unsplash.com/photo-1532012197367-68b206037740?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-500 text-white text-[10px] font-black px-3 py-1 rounded-full uppercase">Emprunté</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="font-bold text-lg text-slate-900 line-clamp-1">1984</h4>
                            <p class="text-slate-500 text-sm mb-4">George Orwell • 1949</p>
                            <button disabled class="w-full bg-slate-100 text-slate-400 py-3 rounded-xl font-bold cursor-not-allowed italic">
                                Indisponible
                            </button>
                        </div>
                    </div>

                    </div>

                <div class="mt-16 flex justify-center items-center gap-4">
                    <button class="p-2 text-slate-400 hover:text-indigo-600 transition">← Précédent</button>
                    <div class="flex gap-2">
                        <button class="w-10 h-10 rounded-full bg-indigo-600 text-white font-bold">1</button>
                        <button class="w-10 h-10 rounded-full bg-white border border-slate-200 hover:bg-indigo-50 transition">2</button>
                    </div>
                    <button class="p-2 text-slate-600 hover:text-indigo-600 transition font-bold">Suivant →</button>
                </div>
            </div>
        </div>
    </main>

</div>
