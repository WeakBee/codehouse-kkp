<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
        @include('includes.navbar')
        <div class="grow p-4 sm:ml-64">
            <h1 class="text-4xl font-bold mb-10">Section 5</h1>
            <div class="flex mb-5 items-center">
                <p class="font-bold w-3/4"><a href="../admin"><- Kembali</a></p>
                <div class="w-1/4 flex justify-end items-center">
                    <a href="./section5/creating"><p class="px-8 py-2 bg-black text-white">Create +</p></a>
                </div>
            </div>
            <div>
                <table class="border border-black w-full">
                    <tr class="border border-black">
                        <th class="border border-black p-2">Profile Picture</th>
                        <th class="border border-black p-2">Quote</th>
                        <th class="border border-black p-2">Name</th>
                        <th class="border border-black p-2">Position</th>
                        <th class="border border-black p-2">Company</th>
                        <th class="border border-black p-2">Action</th>
                    </tr>
                    @foreach ($section5 as $data)
                        <tr class="border border-black">
                            <td class="border border-black p-2"><img class="w-20 h-20" src="{{ asset('storage/uploads/section5/' . $data->person_image) }}" alt={{ $data->person_name }}></td>
                            <td class="border border-black p-2">{{ $data->person_quote }}</td>
                            <td class="border border-black p-2">{{ $data->person_name }}</td>
                            <td class="border border-black p-2">{{ $data->person_position }}</td>
                            <td class="border border-black p-2">{{ $data->person_company }}</td>
                            <td class="border border-black p-2">
                                <div class="flex align-center justify-center p-2 h-full gap-2">
                                    <a href="./section5/{{ $data->id }}">
                                        <div class="px-5 py-2 bg-yellow-300 text-black">Edit</div>
                                    </a>
                                    <a href="./section5/delete/{{ $data->id }}">
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