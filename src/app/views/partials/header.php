<nav class="bg-white border-b border-slate-200 p-4 sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-2xl font-black tracking-tighter text-indigo-900 flex items-center gap-2">
            <span class="bg-indigo-600 text-white p-1 rounded">L</span>
            <span>LUMINA<span class="text-indigo-600">LIB</span></span>
        </a>

        <?php $role = $_SESSION['role'] ?? 'visitor'; ?>

        <div class="hidden md:flex items-center space-x-8 font-semibold text-slate-600">
            <?php if($role == "visitor"): ?>
                <a href="/" class="hover:text-indigo-600 transition">Home</a>
                <a href="/books" class="hover:text-indigo-600 transition">Explore Catalog</a>
                <a href="/how-it-works" class="hover:text-indigo-600 transition">How it Works</a>
            <?php elseif($role == "lecteur"): ?>
                <a href="/" class="hover:text-indigo-600 transition">Home</a>
                <a href="/books" class="hover:text-indigo-600 transition flex items-center gap-1">
                    Explore
                </a>
                <a href="/my-borrows" class="hover:text-indigo-600 transition">My Borrows</a>
            <?php elseif($role == "admin"): ?>
                <a href="/" class="hover:text-indigo-600 transition">Home</a>
                <a href="/admin" class="text-indigo-600 flex items-center gap-2 bg-indigo-50 px-3 py-1.5 rounded-lg">
                    <span>Admin Panel</span>
                </a>
                <a href="/books/manage" class="hover:text-indigo-600 transition">Inventory</a>
                <a href="/users" class="hover:text-indigo-600 transition">Users</a>
                <a href="/borrows" class="hover:text-indigo-600 transition">Requests</a>
            <?php endif; ?>
        </div>

        <div class="flex items-center space-x-4">
            <?php if($role == "visitor"): ?>
                <a href="/login" class="text-slate-600 hover:text-indigo-600 font-bold px-4 py-2 transition">Log in</a>
                <a href="/create_account" class="bg-indigo-600 text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition transform hover:-translate-y-0.5">
                    Join Now
                </a>
            <?php else: ?>
                <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs font-bold text-slate-900 leading-none">
                            <?php echo $_SESSION['user']->firstName ?? 'User'; ?>
                        </p>
                        <p class="text-[10px] text-slate-500 uppercase tracking-widest font-bold">
                            <?php echo $role; ?>
                        </p>
                    </div>
                    
                    <a href="/profile" class="w-10 h-10 bg-indigo-100 border border-indigo-200 rounded-full flex items-center justify-center text-indigo-700 font-bold hover:bg-indigo-200 transition">
                        <?php echo strtoupper(substr($_SESSION['firstName'] ?? 'U', 0, 1)); ?>
                    </a>

                    <a href="/logout" class="p-2 text-slate-400 hover:text-red-500 transition" title="Logout">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>