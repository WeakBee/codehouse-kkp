<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
        @include('includes.navbar')

        <div class="grow md:p-10 p-4 sm:ml-64">
            <h1 class="mb-10 text-4xl font-bold text-center md:text-left">Form Messages</h1>
            @if (count($messages) < 1)
                <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Pesan Masih Kosong nih...</h5>
                    <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Coba Refresh kali aja ada pesan yang masuk</p>
                    <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                        <a href="messages" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            <div class="-mt-1 font-sans text-sm font-semibold">Refresh</div>
                        </a>
                    </div>
                </div>
            @endif
            @foreach($messages as $data)
                    <div class="mb-5 text-blue-700 rounded-lg px-5 py-3 flex flex-col md:flex-row items-center border border-blue-700">
                        <p class="md:text-6xl text-xl font-bold md:mr-10">{{$data['id']}}</p>
                        <div>
                            <h1 class="md:text-4xl text-xl font-bold text-center md:text-left">{{$data['client_name']}}</h1>
                            <div class="flex flex-col md:flex-row mb-2 text-sm text-center md:text-left">
                                <p>{{$data['client_email']}} <span class="hidden md:inline md:mx-2">-</span> </p>
                                <p>{{$data['client_company']}} <span class="hidden md:inline md:mx-2">-</span> </p>
                                <p>{{$data['client_phone']}}</p>
                            </div>
                            <p class="text-center md:text-left text-sm md:text-md">"{{$data['how_can_we_help']}}"</p>
                            <p class="text-sm text-center md:text-left text-sm md:text-md">Dikirim: {{$data['created_at']}} </p>
                        </div>
                    </div>
                @endforeach
        </div>

    @include('includes.script')
</body>
</html>