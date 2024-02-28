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
                <p class="font-bold text-teks text-2xl">BRANCH</p>
                {{-- <a href="" class="px-4 py-2 bg-primary text-teks border border-black">Make New Branch</a> --}}
            </div>
            <div class="flex justify-end mb-4 gap-4">
                <a href="/home" class="px-4 py-2 bg-primary text-teks rounded">Kembali</a>

            </div>
            <form action="/home/branch" method="post" class="w-full flex justify-between gap-4 my-4">
                @csrf
                <label for="name_branch" class="block">Branch baru</label>
                <input type="text" name="name" id="name_branch" class="px-4 py-2 rounded w-[70%]"
                    placeholder="Masukkan nama Branch Baru" required>
                <button type="submit" class="px-4 py-2 bg-accent text-teks rounded">Buat</button>
            </form>
            <div class="relative overflow-x-auto">

                <table class="w-full text-left" border="1" cellpadding="10">
                    <thead class=" bg-slate-200 ">

                        <tr class="py-16 border-b">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    @foreach ($branches as $branch)
                        <tr class=" border-b">
                            <td>{{ $branch->id }}</td>
                            <td>{{ $branch->name }}</td>
                            <td class="text-center flex gap-4">
                                <form action="/home/branch/{{ $branch->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button href="" class="px-4 py-2 bg-accent text-teks rounded">DELETE</button>
                                </form>

                                <a href="/home/branch/{{ $branch->id }}"
                                    class="px-4 py-2 bg-primary text-teks rounded">EDIT</a>
                            </td>
                        </tr>
                    @endforeach


                </table>
            </div>
        </div>
    </div>
</div>
<x-footer />
