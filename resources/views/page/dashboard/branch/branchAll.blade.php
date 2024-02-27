<x-header :site="$site" />
<div class="container mx-auto">
    <div class="w-[80%] bg-slate-100 px-4 py-4 rounded shadow">
        <div class="bg-primary text-teks px-4 py-2 rounded mb-4 ">
            <h1 class="font-bold text-4xl ">CINEMA XIX</h1>
            <h2 class="font-thin text-lg">SISTEM INFORMASI FILM</h2>
        </div>
        <div class="w-full flex justify-between bg-secondary text-teks px-4 py-2 rounded mb-16
        ">
            <p class="font-bold text-teks text-2xl">BRANCH</p>
            {{-- <a href="" class="px-4 py-2 bg-primary text-teks border border-black">Make New Branch</a> --}}
        </div>
        <div class="relative overflow-x-auto">

            <table class="w-full text-left" border="1" cellpadding="10">
                <tr class="py-16 border-b">
                    <th>No.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                <tr class=" border-b">
                    <td class="text-center">APA</td>
                    <td class="text-center">COBA</td>
                    <td class="text-center flex justify-center gap-4">
                        <a href="" class="px-4 py-2 bg-accent text-teks rounded">DELETE</a>
                        <a href="" class="px-4 py-2 bg-accent text-teks rounded">EDIT</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<x-footer />
