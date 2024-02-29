<x-header :site="$site" />
{{-- NAVBAR START  --}}
<x-layout.navbar personName="RIFALCOY" />
{{-- NAVBAR END  --}}
{{-- SIDE BAR START  --}}
<x-layout.sidebar active="studio" />
{{-- SIDE BAR END  --}}
<main class="container mx-auto">
    <div class="w-full flex justify-center">
        <div class=" my-8 w-[80%] md:w-[70%]">
            <h1 class="font-bold text-2xl">Studio CINEMA XIX</h1>
            <h2 class="font-light text-lg">List all studio appear here</h2>
            <hr class="my-4 text-slate-300">
            <div class="flex justify-end w-full mt-4 mb-8">
                <a href="/home/studio/create" class="px-4 py-2 bg-primary text-teks hover:opacity-75 rounded">
                    <i class="fa-solid fa-square-plus text-lg"></i>
                    <span class="font-bold text-lg ">ADD</span>
                </a>
            </div>
            <div class="w-full text-teks grid md:grid-cols-2 grid-cols-1 ">
                <div class="bg-primary px-8 py-2 rounded shadow shadow-black flex justify-between">
                    <div class="flex justify-center items-center w-1/3">
                        <i class="fa-solid fa-ticket text-lg md:text-4xl"></i>
                    </div>
                    <div class="p flex flex-col w-2/3">
                        <span class="font-bold text-lg ">Name Studio</span>
                        <span class="font-thin text-sm ">Nama Branch</span>
                        <span class="font-bold font-serif text-2xl mb-2 ">Rp. 8.000.000 </span>
                        <span class="font-thin text-sm text-accent1">Rp. 8.900.000 - Friday</span>
                        <span class="font-thin text-sm text-accent1">Rp. 9.000.000 - Saturday</span>
                        <span class="font-thin text-sm text-accent1">Rp. 9.900.000 - Sunday</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<x-footer />
