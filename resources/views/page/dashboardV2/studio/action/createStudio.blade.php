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
            <h1 class="font-bold text-2xl">Create new Studio CINEMA XIX</h1>
            <h2 class="font-light text-lg">Create a new Data Studio</h2>
            <hr class="my-4 text-slate-300">
            <h3 class="font-bold text-2xl mb-4">Input Data Here</h3>
            <form action="/home/studio" method="POST" class="w-full">
                @csrf
                <label for="name_studio" class="block">Name Studio</label>
                <input type="text" name="name" id="name_studio"
                    class="px-4 py-2 rounded w-[70%] border border-black mb-4" placeholder="Input studio name" required>
                <label for="price_studio" class="block">Price</label>
                <input type="number" name="price" id="price_studio"
                    class="px-4 py-2 rounded w-[70%] border border-black mb-4" placeholder="1.000.000" required>
                <label for="branch_studio" class="block">Branch</label>
                <select id="branch_studio" class="px-4 py-2 rounded w-[70%] border border-black ">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </select>
                <p class="mb-4 font-light text-sm text-primary">If the Branch name is not listed, create a <a
                        href="" class="font-bold underline text-accent"> New branch</a></p>
                <label for="price_additional_friday_price" class="block">Price in Friday</label>
                <input type="number" name="additional_friday_price" id="price_additional_friday_price"
                    class="px-4 py-2 rounded w-[70%] border border-black mb-4" placeholder="450.000" required>
                <label for="price_additional_saturday_price" class="block">Price in Saturday</label>
                <input type="number" name="additional_saturday_price" id="price_additional_saturday_price"
                    class="px-4 py-2 rounded w-[70%] border border-black mb-4" placeholder="450.000" required>
                <label for="price_additional_sunday_price" class="block">Price in Monday</label>
                <input type="number" name="additional_sunday_price" id="price_additional_sunday_price"
                    class="px-4 py-2 rounded w-[70%] border border-black mb-4" placeholder="450.000" required>
                <br>
                <button type="submit" class="px-4 py-2 bg-accent text-teks rounded">Add</button>
            </form>
        </div>
    </div>
</main>

<x-footer />
