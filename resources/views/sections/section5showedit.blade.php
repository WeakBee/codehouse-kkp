<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
        @include('includes.navbar')
        <div class="grow p-4 sm:ml-64">
            <h1 class="text-4xl font-bold mb-10">Section 5 Edit</h1>
            <p class="mb-5 font-bold"><a href="../section5"><- Kembali</a></p>
            <form action="../edit-section5/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                    <input name="file" type="file" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @if($data->person_image)
                        <p class="text-gray-500 mt-2">{{$data->person_image}}</p>
                    @else
                        <p class="text-gray-500 mt-2">No file chosen</p>
                    @endif
                </div>

                <div class="mb-6">
                    <label for="person_quote" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quote</label>
                    <input value="{{$data->person_quote}}" name="person_quote" type="text" id="person_quote" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="person_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input value="{{$data->person_name}}" name="person_name" type="text" id="person_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="person_position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                    <input value="{{$data->person_position}}" name="person_position" type="text" id="person_position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="person_company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perusahaan</label>
                    <input value="{{$data->person_company}}" name="person_company" type="text" id="person_company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Section 5</button>
            </form>
        </div>
    @include('includes.script')
    <script>
        const fileInput = document.getElementById('image');
        const fileNameDisplay = document.getElementById('file-name');
    
        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                fileNameDisplay.textContent = file.name;
            } else {
                fileNameDisplay.textContent = '';
            }
        });
    </script>
</body>
</html>