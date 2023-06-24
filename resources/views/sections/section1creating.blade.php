<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <section class="flex">
        @include('includes.navbar')
        <div class="grow p-10">
            <h1 class="text-4xl font-bold mb-10">Section 1</h1>
            <form action="/admin/create-section1" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="text-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Text 1</label>
                    <input name="text1" type="text" id="text-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" equired>
                </div>
                <div class="mb-6">
                    <label for="text-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Text 2</label>
                    <input name="text2" type="text" id="text-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="text-3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Text 3</label>
                    <input name="text3" type="text" id="text-3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="buttontext-3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Button Text</label>
                    <input name="buttontext" type="text" id="buttontext-3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Section 1</button>
            </form>
        </div>
    </section>

    @include('includes.script')
</body>
</html>