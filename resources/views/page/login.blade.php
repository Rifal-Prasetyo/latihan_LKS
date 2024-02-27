<x-header :site=$site />
<div class="container">
    <main>
        <div class="w-full h-screen flex">
            <div class="w-full md:w-1/2 flex justify-center items-center bg-primary">
                <div class=" px-8 py-2">
                    <h1 class="font-bold text-lg md:text-4xl text-teks ">SELAMAT DATANG DI WEB CINEMA</h1>
                    <h2 class="font-light text-sm md:text-lg text-teks">Sistem Informasi Jadwal Web Cinema</h2>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex justify-center items-center px-4 py-2">
                <div class="">
                    <h3 class="font-bold text-sm md:text-lg text-primary">Masukkan Kredensial Valid anda</h3>
                    <form action="" method="POST" class="flex flex-col  px-4 py-2 rounded w-full">
                        <label for="username">Masukkan Username</label>
                        <input type="text" name="username" id="username"
                            class="rounded px-4 py-2 focus:bg-teks mb-4 border border-primary"
                            placeholder="Masukkan Username">
                        <label for="password">Masukkan Password</label>
                        <input type="password" name="password" id="password"
                            class="rounded px-4 py-2 focus:bg-teks mb-4 border border-primary"
                            placeholder="Masukkan Sandi">
                        <button type="submit"
                            class="bg-primary text-teks px-4 py-2 hover:opacity-70 rounded-md">Kirim</button>
                    </form>
                </div>


            </div>
        </div>
    </main>
</div>
<x-footer />
