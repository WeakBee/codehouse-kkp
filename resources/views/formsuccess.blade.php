<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <section class="bg-myBlue py-10 min-h-screen flex items-center justify-center">
        <div class="container mx-auto w-1/3 bg-white p-10 text-center">
            <h1 class="text-4xl font-bold mb-5">Form anda telah berhasil masuk</h1>
            <p class="mb-10 ">Silahkan Tunggu feedback dari admin kami</p>
            <a href="/" class="bg-myBlue w-full py-4 px-5 text-white font-medium rounded-lg border-2 border-myBlue hover:bg-transparent hover:border-myBlack hover:text-myBlack duration-300">Kembali</a>
        </div>
    </section>
    @include('includes.script')
</body>
</html>