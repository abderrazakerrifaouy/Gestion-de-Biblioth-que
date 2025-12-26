
    <div class="flex-grow flex items-center justify-center px-4 m-5">
        <div class="max-w-md w-full bg-white rounded-3xl shadow-xl border border-slate-100 p-8 md:p-10">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-slate-900">Welcome Back</h2>
                <p class="text-slate-500 mt-2">Enter your credentials to access your library account</p>
            </div>

            <form action="/login" method="POST" class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                    <input type="email" name="email" require_onced 
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                        placeholder="name@example.com">
                </div>

                <div>
                    <div class="flex justify-between mb-2">
                        <label class="text-sm font-semibold text-slate-700">Password</label>
                        <a href="#" class="text-sm text-indigo-600 hover:underline">Forgot?</a>
                    </div>
                    <input type="password" name="password" require_onced 
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                        placeholder="••••••••">
                </div>

                <button type="submit" 
                    class="w-full bg-indigo-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-indigo-700 shadow-lg shadow-indigo-100 transition transform active:scale-[0.98]">
                    Sign In
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                <p class="text-slate-600">Don't have an account? 
                    <a href="/create_account" class="text-indigo-600 font-bold hover:underline">Create one for free</a>
                </p>
            </div>
        </div>
    </div>