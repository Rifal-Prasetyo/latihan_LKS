<x-header :site="$site" />
<x-layout.navbar personName="APALAH" />
{{-- NAVBAR END  --}}
{{-- SIDE BAR START  --}}
<x-layout.sidebar active="branch" />
{{-- SIDE BAR END  --}}
<div class="w-full flex justify-center">
    <div class=" my-8 w-[80%] md:w-[70%]">
        <h1 class="font-bold text-2xl">Branch Edit | {{ $branch->name }} </h1>
        <h2 class="font-light text-lg">Manage Branch for Cinema XIX</h2>
        <hr class="my-4 text-slate-300">
        @if (session('status'))
            <x-components.button type="info_success" message="{{ session('status') }}" />
        @endif
        <div class="flex justify-end w-full mt-4">
            <a href="/home/branch" class="px-4 py-2 bg-primary text-teks hover:opacity-75 rounded">
                <i class="fa-solid fa-backward text-lg"></i>
            </a>
        </div>
        <form action="/home/branch/{{ $branch->id }}" method="post" class="w-full flex justify-between gap-4 my-4">
            @csrf
            @method('put')
            <label for="name_branch" class="block">Edit Branch</label>
            <input type="hidden" value="{{ $branch->id }}" name="id" id="">
            <input type="text" name="name" id="name_branch" value="{{ $branch->name }}"
                class="px-4 py-2 rounded w-[70%] border border-black" placeholder="Masukkan nama Branch Baru" required>
            <button type="submit" class="px-4 py-2 bg-accent text-teks rounded">Edit</button>
        </form>
    </div>
</div>
<x-footer />
