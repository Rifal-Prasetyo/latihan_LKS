<x-header :site="$site" />
<div class="container mx-auto">
    <div class="flex justify-center items-center ">
        <main class="w-full md:w-[40%] bg-slate-100 rounded px-4 py-2">
            <div class="bg-primary text-teks px-4 py-2 rounded mb-4 ">
                <h1 class="font-bold text-4xl ">CINEMA XIX</h1>
                <h2 class="font-thin text-lg">SISTEM INFORMASI FILM</h2>
            </div>
            <x-components.button type="info_success" message="Berhasil Login awwk" />
            <div class="bg-primary text-teks px-4 py-2  rounded mt-4">
                <div class="flex gap-4 items-center">
                    <i class="fa-solid fa-user text-lg"></i>
                    <p class="font-thin">Rifal Prasetyo</p>
                    <p class="font-bold  bg-accent px-2 rounded">ADMIN</p>
                </div>
            </div>
            <div class=" grid grid-cols-2 gap-2 mt-4 text-teks">
                <a href="/" class="bg-primary  hover:opacity-80  px-4 py-4 flex flex-col items-center rounded">
                    <i class="fa-solid fa-code-branch text-4xl"></i>
                    <p class="font-bold">Branch</p>
                </a>
                <a class=" bg-secondary  hover:opacity-80 px-4 py-4 flex flex-col items-center rounded">
                    <i class="fa-solid fa-house text-4xl"></i>
                    <p class="font-bold">Studio</p>
                </a>
                <a class=" bg-accent  hover:opacity-80 px-4 py-4 flex flex-col items-center rounded">
                    <i class="fa-solid fa-film text-4xl"></i>
                    <p class="font-bold">Movie</p>
                </a>
                <a class=" bg-accent1  hover:opacity-80 px-4 py-4 flex flex-col items-center rounded">
                    <i class="fa-solid fa-calendar-days text-4xl"></i>
                    <p class="font-bold">Schedule</p>
                </a>
                <a class=" bg-primary col-span-2  hover:opacity-80 px-4 py-4 flex flex-col items-center rounded">
                    <i class="fa-solid fa-right-from-bracket text-4xl"></i>
                    <p class="font-bold">Logout</p>
                </a>
            </div>
        </main>
    </div>
</div>
<x-footer />
