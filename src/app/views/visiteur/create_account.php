<div class="bg-slate-50 min-h-screen flex items-center justify-center  md:p-8">
    <div
        class="max-w-5xl w-full  bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row border border-slate-100">

        <div class="hidden md:flex md:w-5/12 bg-indigo-900 p-10 flex-col justify-between text-white relative ">
            <div class="z-10">
                <h1 class="text-3xl font-black tracking-tighter text-indigo-400 mb-6">LUMINA<span
                        class="text-white">LIB</span></h1>
                <h2 class="text-4xl font-bold leading-tight">Start your reading journey with us.</h2>
                <p class="text-indigo-200 mt-6 leading-relaxed">Create a free account to borrow books, track your
                    reading history, and receive notifications on due dates.</p>
            </div>
        </div>

        <div class="flex-1 p-8 md:p-12 lg:p-16">
            <div class="mb-10 text-center md:text-left">
                <h3 class="text-3xl font-extrabold text-slate-900">Create Account</h3>
                <p class="text-slate-500 mt-2">Please fill in the details below to register.</p>
            </div>

            <form action="create_account" method="POST" class="space-y-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1">First Name</label>
                        <input type="text" name="firstName" require_onced
                            class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition"
                            placeholder="Alex">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1">Last Name</label>
                        <input type="text" name="lastName" require_onced
                            class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition"
                            placeholder="Rivera">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Email Address</label>
                    <input type="email" name="email" require_onced
                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition"
                        placeholder="alex@example.com">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Phone Number</label>
                    <input type="tel" name="phone_number" require_onced
                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition"
                        placeholder="+1 (555) 000-0000">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Password</label>
                    <input type="password" name="password" require_onced
                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition"
                        placeholder="••••••••">
                </div>

                <div class="pt6">
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-indigo-700 shadow-xl shadow-indigo-200 transition transform active:scale-95">
                        Register Now
                    </button>
                </div>
            </form>

            <div class="mt-10 text-center">
                <p class="text-slate-600">Already a member?
                    <a href="/login"
                        class="text-indigo-600 font-bold hover:underline decoration-2 underline-offset-4">Log in
                        here</a>
                </p>
            </div>
        </div>
    </div>
</div>