<x-header :site="$site" />
{{-- NAVBAR START  --}}
<x-layout.navbar personName="RIFALCOY" />
{{-- NAVBAR END  --}}
{{-- SIDE BAR START  --}}
<x-layout.sidebar active="home" />
{{-- SIDE BAR END  --}}
<main class="container mx-auto">
    <div class="w-full flex justify-center">
        <div class=" my-8 w-[80%] md:w-[70%]">
            <h1 class="font-bold text-2xl">Welcome in CINEMA XIX Dashboard</h1>
            <h2 class="font-light text-lg">Press button to more info</h2>
            <hr class="my-4 text-slate-300">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <a class="px-8 py-4 bg-primary rounded shadow shadow-black transition-all ease-in-out hover:opacity-75">
                    <div class="flex justify-between text-teks  ">
                        <div class="flex flex-col items-start leading-3">
                            <span class="text-2xl md:text-4xl">999</span>
                            <span class="text-sm md:text-lg font-thin">Branch</span>
                        </div>
                        <div>
                            <i class="fa-solid fa-chair text-4xl md:text-6xl"></i>
                        </div>
                    </div>
                </a>
                <a
                    class="px-8 py-4 bg-secondary rounded shadow shadow-black transition-all ease-in-out hover:opacity-75">
                    <div class="flex justify-between text-teks  ">
                        <div class="flex flex-col items-start leading-3">
                            <span class="text-2xl md:text-4xl">56</span>
                            <span class="text-sm md:text-lg font-thin">Studio</span>
                        </div>
                        <div>
                            <i class="fa-solid fa-house text-4xl md:text-6xl"></i>
                        </div>
                    </div>
                </a>
                <a class="px-8 py-4 bg-accent rounded shadow shadow-black transition-all ease-in-out hover:opacity-75">
                    <div class="flex justify-between text-teks  ">
                        <div class="flex flex-col items-start leading-3">
                            <span class="text-2xl md:text-4xl">567</span>
                            <span class="text-sm md:text-lg font-thin">Movie</span>
                        </div>
                        <div>
                            <i class="fa-solid fa-film text-4xl md:text-6xl"></i>
                        </div>
                    </div>
                </a>
                <a class="px-8 py-4 bg-accent1 rounded shadow shadow-black transition-all ease-in-out hover:opacity-75">
                    <div class="flex justify-between text-teks  ">
                        <div class="flex flex-col items-start leading-3">
                            <span class="text-2xl md:text-4xl">8</span>
                            <span class="text-sm md:text-lg font-thin">Schedule</span>
                        </div>
                        <div>
                            <i class="fa-solid fa-clock text-4xl md:text-6xl"></i>
                        </div>
                    </div>
                </a>
            </div>
            <hr class="my-4 text-slate-300">
            <h1 class="font-bold text-lg">User Registered</h1>
            <h2 class="font-light text-lg">This User has been register in this website</h2>
            <div class=" relative overflow-x-auto mt-8">
                <table class="w-full text-left " cellpading="">
                    <thead class="bg-slate-300  leading-loose ">
                        <tr class="">
                            <th class="px-8">Name</th>
                            <th class="px-8">Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="leading-loose">
                            <td class="px-8">User </td>
                            <td class="px-8">User 1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<script>
    const open = () => {
        document.getElementById('sidebar_oooo').classList.toggle('translate-x-[-100%]');
    }
    document.getElementById('button_sidebar').addEventListener('click', open);
    document.getElementById('button_sidebar1').addEventListener('click', open);
</script>
</body>

</html>
