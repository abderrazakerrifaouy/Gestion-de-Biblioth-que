<?
$user = $_SESSION['user'];
?>


<main class="container mx-auto px-4 py-12">
    <div class="max-w-5xl mx-auto flex flex-col md:flex-row gap-8">

        <div class="w-full md:w-1/3">
            <div class="bg-white rounded-3xl border border-slate-200 p-8 text-center shadow-sm">
                <div
                    class="w-24 h-24 bg-indigo-600 text-white rounded-full flex items-center justify-center text-3xl font-black mx-auto mb-4 border-4 border-indigo-50">
                    <?= strtoupper($user->firstName[0] . $user->lastName[0]) ?>
                </div>  
                <h2 class="text-2xl font-bold text-slate-900"><?= $user->firstName ?></h2>
                <p class="text-indigo-600 font-semibold text-sm uppercase tracking-widest mt-1"><?= $_SESSION['role']?></p>
            </div>
        </div>

        <div class="flex-grow">
            <div class="bg-white rounded-3xl border border-slate-200 p-8 md:p-10 shadow-sm">
                <h3 class="text-xl font-bold text-slate-900 mb-8 border-b border-slate-50 pb-4">Informations
                    Personnelles</h3>

                <form action="/modify_profile" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Prénom</label>
                            <input type="text" name="firstName" value="<?= $user->firstName ?>"
                                class="w-full bg-slate-50 border border-slate-200 px-4 py-3 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Nom</label>
                            <input  type="text" name="lastName" value="<?= $user->lastName ?>"
                                class="w-full bg-slate-50 border border-slate-200 px-4 py-3 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Adresse Email</label>
                        <input type="email" name="email" value="<?= $user->email ?>"
                            class="w-full bg-slate-50 border border-slate-200 px-4 py-3 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition">
                    </div>

                    

                    <div class="pt-4">
                        <h3 class="text-xl font-bold text-slate-900 mb-6 border-b border-slate-50 pb-4">Sécurité</h3>
                        <div>
                            <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Nouveau mot de
                                passe</label>
                            <input type="password" placeholder="••••••••"
                                class="w-full bg-slate-50 border border-slate-200 px-4 py-3 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition">
                            <p class="text-[10px] text-slate-400 mt-2 italic">Laissez vide pour conserver le mot de
                                passe actuel.</p>
                        </div>
                    </div>

                    <div class="pt-6 flex justify-end">
                        <button type="submit"
                            class="bg-indigo-600 text-white px-10 py-3 rounded-xl font-bold hover:bg-indigo-700 shadow-lg shadow-indigo-100 transition transform active:scale-95">
                            Sauvegarder les modifications
                        </button>
                    </div>
                </form>
            </div>

            <div class="mt-8 bg-red-50 rounded-3xl p-6 border border-red-100 flex items-center justify-between">
                <div>
                    <h4 class="text-red-700 font-bold">Supprimer le compte</h4>
                    <p class="text-red-500 text-sm">Ceci effacera définitivement vos données de la bibliothèque.</p>
                </div>
                <button class="text-red-700 font-bold hover:underline">Continuer</button>
            </div>
        </div>

    </div>
</main>