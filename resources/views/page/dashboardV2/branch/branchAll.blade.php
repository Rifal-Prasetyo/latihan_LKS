<x-header :site="$site" />
{{-- NAVBAR START  --}}
<x-layout.navbar personName="APALAH" />
{{-- NAVBAR END  --}}
{{-- SIDE BAR START  --}}
<x-layout.sidebar active="branch" />
{{-- SIDE BAR END  --}}
<div class="w-full flex justify-center">
    <div class=" my-8 w-[80%] md:w-[70%]">
        <h1 class="font-bold text-2xl">Branch CINEMA XIX</h1>
        <h2 class="font-light text-lg">Manage Branch for Cinema XIX</h2>
        <hr class="my-4 text-slate-300">
        <form action="/home/branch" method="post" class="w-full flex justify-between gap-4 my-4">
            @csrf
            <label for="name_branch" class="block">Branch baru</label>
            <input type="text" name="name" id="name_branch" class="px-4 py-2 rounded w-[70%] border border-black"
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
                                <button onclick="alert('Yakin menghapus?')"
                                    class="px-4 py-2 bg-accent text-teks rounded">DELETE</button>
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
<x-footer />
