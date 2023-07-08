<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
        @include('includes.navbar')
        <div class="grow p-4 sm:ml-64">
            <h1 class="text-4xl font-bold mb-10">Section 5</h1>
            <p class="mb-5 font-bold"><a href="../section5"><- Kembali</a></p>
            <form action="../create-section5" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                    <input name="file" type="file" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="person_quote" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quote</label>
                    <input name="person_quote" type="text" id="person_quote" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="person_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input name="person_name" type="text" id="person_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="person_position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                    <input name="person_position" type="text" id="person_position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="person_company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perusahaan</label>
                    <input name="person_company" type="text" id="person_company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Section 5</button>
            </form>
        </div>
    @include('includes.script')
</body>
</html>