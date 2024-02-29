<nav class="w-full top-0 bg-slate-100 px-8 md:px-16 py-2 text-teks shadow-lg">
    <div class="flex justify-between">
        <div class="flex items-center gap-2">
            <div class="px-4 py-2 border bg-primary border-black rounded cursor-pointer hover:opacity-70 transition-all duration-100"
                id="button_sidebar">
                <i class="fa-solid fa-list-ul text-lg "></i>
            </div>
            <div class="flex gap-1">
                <img src="/img/logoB.png" alt="logo" srcset="" class="w-8">
                <span class="font-bold text-lg text-primary hidden md:block ">Dashboard</span>
            </div>
        </div>
        <div class="flex gap-2 justify-end">
            <a href="/logout" class="px-4 py-2 border border-black bg-primary rounded flex items-center ">
                <i class="fa-solid fa-arrow-right-from-bracket text-sm md:text-lg "></i>
            </a>
            <a href="" class="px-4 py-2 border border-black bg-primary rounded flex gap-4 items-center ">
                <i class="fa-solid fa-user text-sm md:text-lg"></i>
                <span class="font-bold text-sm md:text-lg uppercase">{{ $personName }}</span>
            </a>
        </div>
    </div>
</nav>
