<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/6d03ab6ee4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/client.css">
    <title>Latihan Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>

<body>
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
                <a href="" class="px-4 py-2 border border-black bg-primary rounded flex items-center ">
                    <i class="fa-solid fa-arrow-right-from-bracket text-sm md:text-lg "></i>
                </a>
                <a href="" class="px-4 py-2 border border-black bg-primary rounded flex gap-4 items-center ">
                    <i class="fa-solid fa-user text-sm md:text-lg"></i>
                    <span class="font-bold text-sm md:text-lg uppercase">Rifal Prasetyo</span>
                </a>
            </div>
        </div>
    </nav>
    {{-- SIDE BAR START  --}}
    <div class="fixed translate-x-[-100%] transition-all ease-in-out duration-1000 left-0 bottom-0 top-0 w-[300px] bg-primary px-8 py-8 flex flex-col "
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
                    <a class="w-full px-4 py-2  text-teks flex gap-8 items-center rounded-md  mb-2 ">
                        <i class="fa-solid fa-house-chimney text-lg w-4"></i>
                        <span class=" text-lg ">Home</span>
                    </a>
                </li>
                <li>
                    <a
                        class="w-full px-4 py-2 bg-accent text-teks flex gap-8 items-center rounded-md shadow-sm shadow-white mb-2 ">
                        <i class="fa-solid fa-chair  text-lg w-4  "></i>
                        <span class=" text-lg ">Branch</span>
                    </a>
                </li>
                <li>
                    <a class="w-full px-4 py-2  text-teks flex gap-8 items-center rounded-md  mb-2 ">
                        <i class="fa-solid fa-house text-lg w-4"></i>
                        <span class=" text-lg ">Studio</span>
                    </a>
                </li>
                <li>
                    <a class="w-full px-4 py-2  text-teks flex gap-8 items-center rounded-md  mb-2 ">
                        <i class="fa-solid fa-film text-lg w-4"></i>
                        <span class=" text-lg ">Film</span>
                    </a>
                </li>
                <li>
                    <a class="w-full px-4 py-2  text-teks flex gap-8 items-center rounded-md  mb-2 ">
                        <i class="fa-solid fa-clock text-lg w-4"></i>
                        <span class=" text-lg ">Schedule</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="w-full mt-auto bottom-0 ">
            <a class="w-full px-4 py-2  text-teks flex gap-4 items-center rounded-md  mb-2 ">
                <i class="fa-solid fa-circle-info text-lg w-4"></i>
                <span class=" text-lg ">Info</span>
            </a>
        </div>
    </div>
    {{-- SIDE BAR END  --}}
    <main class="container mx-auto">
        <div class="w-full flex justify-center">
            <div class=" my-8 w-[80%] md:w-[70%]">
                <h1 class="font-bold text-2xl">Homepage</h1>
                <h2 class="font-light text-lg">check the information</h2>
                <hr class="my-4 text-slate-300">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <a
                        class="px-8 py-4 bg-primary rounded shadow shadow-black transition-all ease-in-out hover:opacity-75">
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
                    <a
                        class="px-8 py-4 bg-accent rounded shadow shadow-black transition-all ease-in-out hover:opacity-75">
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
                    <a
                        class="px-8 py-4 bg-accent1 rounded shadow shadow-black transition-all ease-in-out hover:opacity-75">
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
