<header class="bg-slate-100 p-5 flex">
    <a href="/" class="grow">
        <h1 class="text-slate-400 text-2xl font-bold text-center">
            Newspaper Inc.
        </h1>
    </a>

    @auth
        {{-- if logged in --}}

        <a href="/articles/create">
            <button class="text-white bg-slate-500 hover:bg-slate-600 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 mr-2 transition duration-200">
                <i class="fa-solid fa-sheet-plastic"></i>
            </button>
        </a>

        <a href="/articles/manage">
            <button class="text-white bg-slate-500 hover:bg-slate-600 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 mr-2 transition duration-200">
                <i class="fa-solid fa-gear"></i>
            </button>
        </a>

        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="text-white bg-slate-500 hover:bg-slate-600 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 transition duration-200">
                Log out
            </button>
        </form>
    @else
        {{-- if NOT logged in --}}

        <a href="/register">
            <button class="text-white bg-slate-500 hover:bg-slate-600 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 mr-2 transition duration-200">
                Register
            </button>
        </a>

        <a href="/login">
            <button class="text-white bg-slate-500 hover:bg-slate-600 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 transition duration-200">
                Log in
            </button>
        </a>
    @endauth
</header>