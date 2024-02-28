<x-header :site="$site" />
<div class="container mx-auto">
    <div class="flex justify-center items-center">
        <div class=" w-[95%] md:w-[80%] bg-slate-100 px-4 py-4 rounded shadow">
            <div class="bg-primary text-teks px-4 py-2 rounded mb-4 ">
                <h1 class="font-bold text-4xl ">CINEMA XIX</h1>
                <h2 class="font-thin text-lg">SISTEM INFORMASI FILM</h2>
            </div>
            <div class="w-full flex justify-between bg-secondary text-teks px-4 py-2 rounded mb-4
            ">
                <p class="font-bold text-teks text-2xl">Edit Branch</p>
                {{-- <a href="" class="px-4 py-2 bg-primary text-teks border border-black">Make New Branch</a> --}}
            </div>
            <div class="flex justify-end mb-4 gap-4">
                <a href="../branch/" class="px-4 py-2 bg-primary text-teks rounded">Kembali</a>
            </div>
            <form action="/home/branch/{{ $branch->id }}" method="post"
                class="w-full flex justify-between gap-4 my-4">
                @csrf
                @method('put')
                <label for="name_branch" class="block">Edit Branch</label>
                <input type="hidden" value="{{ $branch->id }}" name="id" id="">
                <input type="text" name="name" id="name_branch" value="{{ $branch->name }}"
                    class="px-4 py-2 rounded w-[70%]" placeholder="Masukkan nama Branch Baru" required>
                <button type="submit" class="px-4 py-2 bg-accent text-teks rounded">Edit</button>
            </form>
        </div>
    </div>
</div>
<x-footer />
