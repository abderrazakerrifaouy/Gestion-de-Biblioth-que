
<div class="bg-slate-50 text-slate-900 font-sans">

    <main class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            
            <form action="/create_livre" method="POST"  class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="md:col-span-2 space-y-6">
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-5">
                        
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Titre du livre</label>
                            <input type="text" name="title" required 
                                class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition"
                                placeholder="ex: Les Misérables">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Auteur</label>
                            <input type="text" name="author" required 
                                class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition"
                                placeholder="ex: Victor Hugo">
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Année de publication</label>
                                <input type="number" name="year" required 
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition"
                                    placeholder="2024">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Couverture du livre</label>
                                <input type="text" name="image" accept="image/*" 
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition">
                        </div>

                        <div class="pt-6 flex gap-3">
                            <input type="submit" class="px-6 py-4 bg-indigo-600 text-slate-300 rounded-2xl font-bold hover:bg-indigo-700 transition" value="Enregistrer le livre" />
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </main>

</div>