<div class="fixed translate-x-[-100%] transition-all z-10 ease-in-out shadow-2xl shadow-black duration-1000 left-0 bottom-0 top-0 w-[300px] bg-primary px-8 py-8 flex flex-col "
    id="sidebar_oooo">
    <div class="flex items-center justify-between gap-2">
        <div class="flex gap-2">

            <img src="/img/logoB.png" alt="logo" srcset="" class="w-8">
            <span class="font-bold text-lg text-teks ">Dashboard</span>
        </div>
        <div class="px-4 py-2 border bg-secondary text-teks border-black rounded cursor-pointer hover:opacity-75 transition-all duration-100 "
            id="button_sidebar1">
            <i class="fa-solid fa-list-ul text-lg "></i>
        </div>
    </div>
    <hr class="my-4 text-slate-400">
    <div class="w-full ">
        <ul class=" list-none leading-10">
            <li>
                <a href="/home"
                    class="w-full px-4 py-2  text-teks flex gap-8 items-center @if ($active == 'home') active_button @endif rounded-md  mb-2 hover:bg-accent ">
                    <i class="fa-solid fa-house-chimney text-lg w-4"></i>
                    <span class=" text-lg ">Home</span>
                </a>
            </li>
            <li>
                <a href="/home/branch"
                    class="w-full px-4 py-2  text-teks flex gap-8 items-center @if ($active == 'branch') active_button @endif rounded-md shadow-sm  mb-2 hover:bg-accent">
                    <i class="fa-solid fa-chair  text-lg w-4  "></i>
                    <span class=" text-lg ">Branch</span>
                </a>
            </li>
            <li>
                <a href="/home/studio"
                    class="w-full px-4 py-2  text-teks flex gap-8 items-center @if ($active == 'studio') active_button @endif rounded-md  mb-2  hover:bg-accent">
                    <i class="fa-solid fa-house text-lg w-4"></i>
                    <span class=" text-lg ">Studio</span>
                </a>
            </li>
            <li>
                <a href="/home/film"
                    class="w-full px-4 py-2  text-teks flex gap-8 items-center @if ($active == 'film') active_button @endif rounded-md  mb-2  hover:bg-accent">
                    <i class="fa-solid fa-film text-lg w-4"></i>
                    <span class=" text-lg ">Film</span>
                </a>
            </li>
            <li>
                <a href="/home/schedule"
                    class="w-full px-4 py-2  text-teks flex gap-8 items-center @if ($active == 'schedule') active_button @endif rounded-md d  mb-2  hover:bg-accent">
                    <i class="fa-solid fa-clock text-lg w-4"></i>
                    <span class=" text-lg ">Schedule</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="w-full mt-auto bottom-0 ">
        <a class="w-full px-4 py-2  text-teks flex gap-4 items-center rounded-md  mb-2 " href="/about">
            <i class="fa-solid fa-circle-info text-lg w-4"></i>
            <span class=" text-lg ">Info</span>
        </a>
    </div>
</div>
