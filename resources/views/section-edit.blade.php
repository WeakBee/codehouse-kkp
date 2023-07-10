<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @auth
        @include('includes.navbar')
        <div class="grow p-4 sm:ml-64">
            <h1 class="mb-5">Silahkan Pilih Section</h1>
            <div class="section-edit grid grid-cols-2 md:grid-cols-3 gap-4">
                <a href="./admin/section1">Section 1</a>
                <a href="./admin/section2">Section 2</a>
                <a href="./admin/section3">Section 3</a>
                <a href="./admin/section4">Section 4</a>
                <a href="./admin/section5">Section 5</a>
            </div>
        </div>
    @endauth


    @include('includes.script')
</body>
</html>