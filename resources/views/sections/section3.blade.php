<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
        @include('includes.navbar')
        <div class="grow p-4 sm:ml-64">
            <h1 class="text-4xl font-bold mb-10">Section 3</h1>
            <div class="flex mb-5 items-center">
                <p class="font-bold w-3/4"><a href="../admin"><- Kembali</a></p>
                <div class="w-1/4 flex justify-end items-center">
                    <a href="./section3/creating"><p class="px-8 py-2 bg-black text-white">Create +</p></a>
                </div>
            </div>
            <div>
                <table class="border border-black w-full">
                    <tr class="border border-black">
                        <th class="border border-black p-2">Case Image</th>
                        <th class="border border-black p-2">Title</th>
                        <th class="border border-black p-2">Small Description</th>
                        <th class="border border-black p-2">Description</th>
                        <th class="border border-black p-2">Action</th>
                    </tr>
                    @foreach ($section3 as $data)
                    <tr class="border border-black">
                        <td class="border border-black p-2"><img class="w-20 h-20" src="{{ asset('storage/uploads/Section3/' . $data->case_image) }}" alt={{ $data->title }}></td>
                        <td class="border border-black p-2">{{ $data->title }}</td>
                        <td class="border border-black p-2">{{ $data->small_description }}</td>
                        <td class="border border-black p-2">{{ $data->description }}</td>
                        <td class="border border-black p-2">
                            <div class="flex align-center justify-center p-2 h-full gap-2">
                                <a href="./section3/{{ $data->id }}">
                                    <div class="px-5 py-2 bg-yellow-300 text-black">Edit</div>
                                </a>
                                <a href="./section3/delete/{{ $data->id }}">
                                    <div class="px-5 py-2 bg-red-700 text-white">Hapus</div>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    @include('includes.script')
</body>
</html>