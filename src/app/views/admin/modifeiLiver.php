<div class="bg-slate-50 text-slate-900 font-sans">

    <main class="container mx-auto px-4 py-12">
        <div class="max-w-5xl mx-auto">

            <div class="mb-6">
                <span
                    class="bg-slate-200 text-slate-600 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">
                    ID Livre: #<?= $book->id ?>
                </span>
            </div>

            <form action="/update_book?book_id=<?= $book->id ?>" method="POST" class="flex flex-col lg:flex-row gap-10">

                <div class="w-full lg:w-1/3">
                    <div class="sticky top-24">
                        <label class="block text-xs font-bold text-slate-400 uppercase mb-4">Aperçu de la
                            couverture</label>
                        <div
                            class="aspect-[3/4] w-full bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden relative group">
                            <img id="coverPreview" src="<?= $book->imagePath ?>" alt="Couverture"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-indigo-900/20 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                <span
                                    class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold">Image
                                    actuelle</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-grow space-y-6">
                    <div class="bg-white p-8 md:p-10 rounded-3xl border border-slate-200 shadow-sm">

                        <div class="grid grid-cols-1 gap-6">

                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Lien URL de l'image
                                    (Image Source)</label>
                                <input type="url" name="image_url" id="imageUrlInput" value="<?= $book->imagePath ?>"
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition font-mono text-sm"
                                    oninput="document.getElementById('coverPreview').src = this.value" />
                                <p class="text-[10px] text-slate-400 mt-2 italic">Collez le lien direct vers l'image
                                    (.jpg, .png).</p>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Titre du
                                    livre</label>
                                <input type="text" name="title" value="<?= $book->title ?>" required
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition font-bold text-lg">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Auteur</label>
                                <input type="text" name="author" value="<?= $book->author ?>" required
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition">
                            </div>


                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Année</label>
                                <input type="number" name="year" value="<?= $book->year ?>" required
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition">
                            </div>

                        </div>

                        <div class="pt-8 flex flex-col sm:flex-row gap-4">
                            <button type="submit"
                                class="flex-grow bg-indigo-600 text-white py-4 rounded-2xl font-bold text-lg hover:bg-indigo-700 shadow-xl shadow-indigo-100 transition transform active:scale-95">
                                Mettre à jour les informations
                            </button>
                            <button type="button" onclick="history.back()"
                                class="px-8 py-4 bg-slate-100 text-slate-500 rounded-2xl font-bold hover:bg-slate-200 transition">
                                Annuler
                            </button>
                        </div>
                    </div>

                    <div class="p-4 bg-amber-50 rounded-2xl border border-amber-100 flex items-center gap-3">
                        <span class="text-amber-500 text-lg">⚠️</span>
                        <p class="text-[11px] text-amber-700 leading-tight">La modification de l'ISBN ou du Titre peut
                            affecter les emprunts historiques liés à ce livre.</p>
                    </div>
                </div>

            </form>
        </div>
    </main>

    <script>
        const input = document.getElementById('imageUrlInput');
        const preview = document.getElementById('coverPreview');

        input.addEventListener('input', function () {
            preview.src = this.value;
        });
    </script>

</div>