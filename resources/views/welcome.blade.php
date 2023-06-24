<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeHouse</title>
    
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ url('assets/images/favicon2.ico') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <section class='bg-myBlue text-white relative'>
        <nav class="text-white py-5 relative z-10">
            <div class="container mx-auto flex items-center px-5">
                <div class='flex items-center'>
                    <a href="#"><img class='w-48 mr-10' src="assets/images/logo-putih2.png"/></a>
                    <a class='mx-14' href="#">Portfolio</a>
                    <a href="#">Career</a>
                    <a class='mx-14' href="#">About</a>
                </div>
                <div class='flex flex-auto justify-end'>
                    <button class='py-3 px-5 bg-myGreen text-myBlack rounded-md font-semibold border-2 border-myGreen hover:bg-transparent hover:text-myGreen duration-300'>Codehouse Academy</button>
                </div>
            </div>
        </nav>
        <img class='robot-hand absolute inset-y-0 right-0 z-0' src="assets/images/robot-hand2.png"/>
        <div class='container mx-auto pt-16 pb-10 px-5 z-10 relative'>
            @foreach ($section1 as $data)
                <div class='flex items-center'>
                    <img class='rotate-animation' src="assets/images/Sunlight_fill.svg"/>
                    <p class='font-medium ml-3'>{{$data['text1']}}</p>
                </div>
                <h1 class='ml-24 my-10 text-8xl font-bold w-2/3'>{{$data['text2']}}</h1>
                <p class='font-medium w-1/3'>{{$data['text3']}}</p>
                <div class='flex items-center'>
                    <div>
                        <button class='flex items-center py-3 px-5 my-20 bg-myGreen text-myBlack rounded-md font-semibold button-arrow'>{{$data['buttontext']}}<img class='ml-4 arrow' src="assets/images/Arrow-2.svg"/></button>
                    </div>
                    <div class='flex-auto flex justify-end'>
                        <img class='mr-10 mt-3' src="assets/images/Arrow-1.svg" />
                        <div>
                            <p class='mb-2'>Terdaftar di:</p>
                            <div class='flex'>
                                <div class='w-28 h-28 bg-white rounded-xl drop-shadow-xl mx-2 p-3 hover:scale-110 duration-300'>
                                    <img src="assets/images/logo-kominfo.png"/>
                                </div>
                                <div class='w-28 h-28 bg-white rounded-xl drop-shadow-xl mx-2 p-3 hover:scale-110 duration-300'>
                                    <img src="assets/images/logo-ristek.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="section-2" class='bg-white text-myBlack relative'>
        <div class='container mx-auto pt-16 pb-10 px-5'>
            <h1 class='font-bold text-5xl mb-5'>Trusted By</h1>
            <p>Menyediakan solusi digital untuk Startup dan Korporat di Indonesia</p>
        </div>
        <div class="marquee">
            <div class="marquee-content"> 
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-1.png" alt="">
              </div>
              
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-2.png" alt="">
              </div>
              
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-3.png" alt="">
              </div>
              
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-4.png" alt="">
              </div>
              
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-5.png" alt="">
              </div>
              
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-6.png" alt="">
              </div>
              
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-7.png" alt="">
              </div>
              
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-8.png" alt="">
              </div> 
              
              {{-- batas --}}
              
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-1.png" alt="">
              </div>
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-2.png" alt="">
              </div>
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-3.png" alt="">
              </div>
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-4.png" alt="">
              </div>
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-5.png" alt="">
              </div>
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-6.png" alt="">
              </div>
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-7.png" alt="">
              </div>
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-8.png" alt="">
              </div>

              {{-- batas --}}

              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-1.png" alt="">
              </div>
              <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-2.png" alt="">
              </div>
            </div>
        </div>
        <div class="white-shadow"></div>
    </section>

    <section id="section-3" class='bg-white text-myBlack py-10 relative'>
        <div class="container mx-auto px-5 py-10 text-center">
            <h1 class="text-5xl font-bold mb-4">Core Service</h1>
            <p>Kami punya 6 Pelayanan yang diberikan kepada pelanggan sebagai Produk Utama kami.</p>
        </div>
        <div class="flex justify-center items-center relative">
            <div class="cch card-carousel0"></div>
            <div class="card-carousel cch cch-1" place="1">
                <img class="gambar-carousel absolute" src="assets/images/core-service/uiuxdesign.jpg">
                <div class="gradient-black"></div>
                <div class="flex mb-5 w-full items-center z-10">
                    <img class="mr-3 icon-carousel" src="assets/icons/uiux.svg">
                    <p class="text-myGreen">UI/UX Design</p>
                </div>
                <div class="flex flex-auto z-10">
                    <p class="font-semibold text-xl">Kami tidak hanya mengikuti tren desain tetapi juga fokus pada interaksi dan pengalaman pengguna.</p>
                </div>
            </div>
            <div class="card-carousel cch cch-2" place="2">
                <img class="gambar-carousel absolute" src="assets/images/core-service/app-dev.jpg">
                <div class="gradient-black"></div>
                <div class="flex mb-5 w-full items-center z-10">
                    <img class="mr-3 icon-carousel" src="assets/icons/app.svg">
                    <p class="text-myGreen">App Development</p>
                </div>
                <div class="flex flex-auto z-10">
                    <p class="font-semibold text-xl">Kami adalah spesialis Flutter, yang dapat membangun aplikasi Android & iOS dengan cepat dan aman.</p>
                </div>
            </div>
            <div class="card-carousel cch cch-3" place="3">
                <img class="gambar-carousel absolute" src="assets/images/core-service/website-dev.jpg">
                <div class="gradient-black"></div>
                <div class="flex mb-5 w-full items-center z-10">
                    <img class="mr-3 icon-carousel" src="assets/icons/web.svg">
                    <p class="text-myGreen">Website Development</p>
                </div>
                <div class="flex flex-auto z-10">
                    <p class="font-semibold text-xl">Dari tim yang berpengalaman tinggi dalam membangun custom website dari ide hingga pemeliharaan.</p>
                </div>
            </div>
            <div class="card-carousel cch cch-4" place="4">
                <img class="gambar-carousel absolute" src="assets/images/core-service/procurement-system.jpg">
                <div class="gradient-black"></div>
                <div class="flex mb-5 w-full items-center z-10">
                    <img class="mr-3 icon-carousel" src="assets/icons/procurement.svg">
                    <p class="text-myGreen">Procurement System</p>
                </div>
                <div class="flex flex-auto z-10">
                    <p class="font-semibold text-xl">Kami sudah memiliki sistem procurement dengan fitur yang cukup kompleks, cocok untuk corporate.</p>
                </div>
            </div>
            <div class="card-carousel cch cch-5" place="5">
                <img class="gambar-carousel absolute" src="assets/images/core-service/e-commerce.jpg">
                <div class="gradient-black"></div>
                <div class="flex mb-5 w-full items-center z-10">
                    <img class="mr-3 icon-carousel" src="assets/icons/ecom.svg">
                    <p class="text-myGreen">E-Commerce</p>
                </div>
                <div class="flex flex-auto z-10">
                    <p class="font-semibold text-xl">Dengan tim yang berpengalaman tinggi, kami mampu membangun website & aplikasi berbasis e-commerce.</p>
                </div>
            </div>
            <div class="card-carousel cch cch-6" place="6">
                <img class="gambar-carousel absolute" src="assets/images/core-service/blockchain.jpg">
                <div class="gradient-black"></div>
                <div class="flex mb-5 w-full items-center z-10">
                    <img class="mr-3 icon-carousel" src="assets/icons/blockchain.svg">
                    <p class="text-myGreen">Blockchain</p>
                </div>
                <div class="flex flex-auto z-10">
                    <p class="font-semibold text-xl">Kami juga sudah membangun sebuah sistem blockchain dengan cepat serta tingkat keamanan yang tinggi.</p>
                </div>
            </div>
        </div>
        <div class="arrow-carousel ac-left"><-</div>
        <div class="arrow-carousel ac-right">-></div>
    </section>

    <section id="section-4" class="bg-white text-myBlack py-10">
        <div class="container mx-auto flex px-5 py-5 items-center mb-5">
            <div class="w-1/2">
                <h1 class="font-bold text-5xl">Case Study</h1>
            </div>
            <div class="w-1/2">
                <p class="text-lg">Kami memiliki beberapa contoh Studi Kasus yang dapat menjawab rasa penasaran anda</p>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="inline-flex">
                <div class="case-study-card w-1/4 rounded-lg mx-3">
                    <div class="gradient-black"></div>
                    <img class="bg-case-img" src="assets/images/case-study/localio.jpg">
                    <div class="flex flex-col p-7 h-full">
                        <p class="text-myGreen font-light mb-3 z-10">Localio.id - Marketplace for SMEs (Web & App)</p>
                        <p class="text-white font-medium flex-auto z-10">Localio.id is available on Google Play Store and Apple App Store. Built with Flutter and WPA to support micro economy by connecting local homemade culinary sellers with buyers through an online marketplace which allows buying and selling seamlessly.</p>
                        <button class='flex items-center justify-center py-2 bg-myGreen text-myBlack rounded-md font-semibold button-arrow z-10 hover:scale-110 duration-300'>Explore <img class='ml-4' src="assets/images/Arrow-2.svg"/></button>
                    </div>
                </div>
                <div class="case-study-card w-1/4 rounded-lg mx-3">
                    <div class="gradient-black"></div>
                    <img class="bg-case-img" src="assets/images/case-study/travelmed.jpg">
                    <div class="flex flex-col p-7 h-full">
                        <p class="text-myGreen font-light mb-3 z-10">Travelmed.asia - Travel Medical Advisor (Web & App)</p>
                        <p class="text-white font-medium flex-auto z-10">Find The Right Doctor & Book Appointment with TravelMed. With TravelMed, your medical care is our priority.</p>
                        <button class='flex items-center justify-center py-2 bg-myGreen text-myBlack rounded-md font-semibold button-arrow z-10 hover:scale-110 duration-300'>Explore <img class='ml-4' src="assets/images/Arrow-2.svg"/></button>
                    </div>
                </div>
                <div class="case-study-card w-1/4 rounded-lg mx-3">
                    <div class="gradient-black"></div>
                    <img class="bg-case-img" src="assets/images/case-study/kliklaw.jpg">
                    <div class="flex flex-col p-7 h-full">
                        <p class="text-myGreen font-light mb-3 z-10">Kliklaw.id</p>
                        <p class="text-white font-medium flex-auto z-10">Di Klik Law, kami mempermudah orang-orang untuk mengakses hal-hal yang berkaitan dengan hukum dan menghubungkannya dengan tenaga profesional di bidang hukum agar dapat membantu menyelesaikan persoalan hukumnya.</p>
                        <button class='flex items-center justify-center py-2 bg-myGreen text-myBlack rounded-md font-semibold button-arrow z-10 hover:scale-110 duration-300'>Explore <img class='ml-4' src="assets/images/Arrow-2.svg"/></button>
                    </div>
                </div>
                <div class="case-study-card w-1/4 rounded-lg mx-3">
                    <div class="gradient-black"></div>
                    <img class="bg-case-img" src="assets/images/case-study/franknco.jpg">
                    <div class="flex flex-col p-7 h-full">
                        <p class="text-myGreen font-light mb-3 z-10">Frankncojewellery.com</p>
                        <p class="text-white font-medium flex-auto z-10">Frank & Co seeks a re-design and re-development of existing website. The existing website has a slow page load time and lack of users functionality that can impact user experience and search engine visibility.</p>
                        <button class='flex items-center justify-center py-2 bg-myGreen text-myBlack rounded-md font-semibold button-arrow z-10 hover:scale-110 duration-300'>Explore <img class='ml-4' src="assets/images/Arrow-2.svg"/></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-5" class="bg-white text-myBlack py-10">
        <div class="container mx-auto flex px-5 py-5 items-center mb-5">
            <div class="w-1/2">
                <h1 class="font-bold text-5xl">How We Work</h1>
            </div>
            <div class="w-1/2">
                <p class="text-lg">Kolaborasi dengan Anda, dari ide hingga pemeliharaan. Untuk memastikan kelancaran dan sesuai ekspektasi Anda.</p>
            </div>
        </div>
        <div class="container mx-auto pb-10">
            <div class="method-card">
                <div class="card">
                    <img src="assets/images/how-we-work/planning-design.jpg" alt="">
                    <div class="card-title">
                        <h3>PLANNING & <br>DESIGN</h3>
                    </div>
                    <div class="card-body">
                        <p>Kami pastikan teknikal spesifikasi sesuai dengan objektif dan ekspektasi Anda. Kemudian kami berikan prototype desain yang dibangun menggunakan Adobe XD, sehingga Anda dapat menguji pengalaman interface sebelum sistem dibangun.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/how-we-work/development-testing.jpg" alt="">
                    <div class="card-title">
                        <h3>DEVELOPMENT & <br>TESTING</h3>
                    </div>
                    <div class="card-body">
                        <p>Tim kami bekerja menggunakan metode Agile Scrum mulai dari desainer, project manager, programmer hingga testing. Anda juga akan ikut terlibat dan memberikan masukkan selama pembangunan sistem berlangsung.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/how-we-work/handover-maintenance.jpg" alt="">
                    <div class="card-title">
                        <h3>HANDOVER & <br>MAINTENANCE</h3>
                    </div>
                    <div class="card-body">
                        <p>Pekerjaan kami tidak hanya pengembangan saja. Kami bekerja ekstra untuk Anda. Kami melakukan Audit keamanan rutin, backup kode setiap bulan, memantau lalu lintas dan mengoptimalkan beban server.</p>
                    </div>
                </div>
            </div>
        </div>  
    </section>

    <section class='bg-myBlue text-white pb-12'>
        <div class="container mx-auto px-5 pt-20 mb-7">
            <h1 class="text-5xl font-semibold mb-4">Customer is Our<br/>Top Priority</h1>
            <p class="font-light">Kami mensurvey seluruh Client kami, dan hasilnya akan diberikan langsung ke CEO kami.</p>
        </div>

        <div class="container mx-auto mb-16 overflow-hidden relative">
            <div class="cust-quote-container flex relative">
                <div class="cust-card flex indi-1 items-center active">
                    <img src="assets/images/default-people.png">
                    <div>
                        <p class="text-6xl font-bold mb-5 w-2/3">" The team has in-depth knowledge in UI/UX Design  "</p>
                        <p class="font-bold">- Person Name</p>
                        <p>Director, PT Lorem</p>
                    </div>
                </div>
                <div class="cust-card flex indi-2 items-center">
                    <img src="assets/images/default-people.png">
                    <div>
                        <p class="text-6xl font-bold mb-5">" Lorem Ipsum Dolor Sit Amet "</p>
                        <p class="font-bold">- Person Name</p>
                        <p>Director</p>
                    </div>
                </div>
                <div class="cust-card flex indi-3 items-center">
                    <img src="assets/images/default-people.png">
                    <div>
                        <p class="text-6xl font-bold mb-5">" Lorem Ipsum Dolor Sit Amet "</p>
                        <p class="font-bold">- Person Name</p>
                        <p>Director</p>
                    </div>
                </div>
            </div>
            <div class="circle-indicator flex gap-2">
                <span class="indi-circle flex w-3 h-3 bg-gray-200 rounded-full active" indicator="indi-1"></span>
                <span class="indi-circle flex w-3 h-3 bg-gray-200 rounded-full" indicator="indi-2"></span>
                <span class="indi-circle flex w-3 h-3 bg-gray-200 rounded-full" indicator="indi-3"></span>
            </div>
        </div>

        <div class="container flex bg-white mx-auto p-5 rounded-lg">
            <div class="bg-myBlack text-white rounded-lg p-5 w-1/4">
                <p class="font-semibold mb-10">CODEHOUSE</p>
                <h2 class="text-4xl font-semibold mb-5">Start your journey with us.</h2>
                <h3 class="text-xl mb-10">Diskusikan keinginan anda bersama kami</h3>

                <div class="flex mb-4">
                    <img class="w-4 mr-4" src="assets/icons/handphone.svg">
                    <div>
                        <p class="font-medium"><a href="#">+62-895-6223-87600</a></p>
                        <p class="font-light">Jakarta</p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <img class="w-4 mr-4" src="assets/icons/handphone.svg">
                    <div>
                        <p class="font-medium"><a href="#">+62-856-2874-500</a></p>
                        <p class="font-light">Bandung</p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <img class="w-4 mr-4" src="assets/icons/handphone.svg">
                    <div>
                        <p class="font-medium"><a href="#">+65-8837-4219</a></p>
                        <p class="font-light">Singapore</p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <img class="w-5 mr-4" src="assets/icons/instagram.svg">
                    <div>
                        <p class="font-medium"><a href="">Codehouse.id</a></p>
                    </div>
                </div>
                <div class="flex mb-10">
                    <img class="w-8 -ml-1 mr-3" src="assets/icons/place.svg">
                    <div>
                        <p class="font-medium"><a href="">Boulevard Kelapa Gading RA19/11 
                            Jakarta 14240</a> </p>
                        <p class="font-light">Headquarter</p>
                    </div>
                </div>
            </div>
            <div class="w-3/4 px-5 text-black" >
                <P class="font-bold mb-5">Looking For ?</P>
                <form action="/create-form" method="POST">
                    @csrf
                    <div class="flex mb-5 gap-4">
                        <div class="flex grow items-center pl-4 border border-gray-200 rounded-lg">
                            <input id="bordered-radio-1" type="radio" value="Website" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-1" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Website</label>
                        </div>
                        <div class="flex grow items-center pl-4 border border-gray-200 rounded-lg">
                            <input checked id="bordered-radio-2" type="radio" value="Android" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-2" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Android</label>
                        </div>
                        <div class="flex grow items-center pl-4 border border-gray-200 rounded-lg">
                            <input checked id="bordered-radio-3" type="radio" value="IOS" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-3" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">IOS</label>
                        </div>
                        <div class="flex grow items-center pl-4 border border-gray-200 rounded-lg">
                            <input checked id="bordered-radio-4" type="radio" value="Other" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-4" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                        </div>
                    </div>
                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="client_email" class="border-gray-300 rounded-lg py-1 px-2 mb-3"><br>
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="client_name" class="border-gray-300 rounded-lg py-1 px-2 mb-3"><br>
                    <label for="company">Company</label><br>
                    <input type="text" id="company" name="client_company" class="border-gray-300 rounded-lg py-1 px-2 mb-3"><br>
                    <label for="phone">Phone</label><br>
                    <input type="text" id="phone" name="client_phone" class="border-gray-300 rounded-lg py-1 px-2 mb-3"><br>
                    <label for="how">How can we help ?</label><br>
                    <textarea type="text" rows="7" name="how_can_we_help" class="border-gray-300 rounded-lg py-1 px-2 mb-3" id="how"></textarea>
                    <button class="bg-myBlue w-full py-4 text-white font-medium rounded-lg border-2 border-myBlue hover:bg-transparent hover:border-myBlack  hover:text-myBlack duration-300">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-myBlack py-10">
        <div class="container mx-auto text-white">
            <div class="flex pt-5 pb-10 border-b-2">
                <img class="w-14" src="assets/images/logo-biru-bulat.png">
                <div class="flex flex-auto items-center justify-end">
                    <p class="mr-10">Siap memulai ?</p>
                    <button class="py-3 px-10 bg-myBlue text-white rounded-md font-semibold border-2 border-myBlue hover:bg-transparent hover:border-white duration-300">Dapatkan Solusi Anda</button>
                </div>
            </div>
            <div class="flex py-10 nav-footer">
                <div class="w-1/5">
                    <p class="font-bold"><a href="#">CodeHouse Academy</a></p>
                    <p><a href="#">Roadmap</a></p>
                    <p><a href="#">Kurikulum</a></p>
                    <p><a href="#">Beasiswa</a></p>
                </div>
                <div class="w-1/5">
                    <p class="font-bold"><a href="#">About</a></p>
                    <p><a href="#">Our Story</a></p>
                    <p><a href="#">Meet The Team</a></p>
                </div>
                <div class="w-1/5">
                    <p class="font-bold"><a href="#">Jobs</a></p>
                    <p><a href="#">Job Archive</a></p>
                </div>
                <div class="w-1/5">
                    <p class="font-bold"><a href="#">Portfolio</a></p>
                </div>
                <div class="w-1/5 flex items-end justify-end">
                    <a href="#"><img class="w-7" src="assets/icons/instagram.svg"></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>