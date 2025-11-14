<!DOCTYPE html>
<html lang="fr" class=" scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF token pour fetch() -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portfolio Joycie</title>
    <link rel="stylesheet" href="{{asset('css/output.css')}}">
    <link rel="stylesheet" href="{{asset('resources/css/input.css')}}">
    <link rel="stylesheet" href="{{asset('resources/css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-linear-to-r from-pink-50 via-pink-300 to-pink-500">

    <!-- First-page -->

        <section id="home" class=" gap-52  mx-auto container flex h-screen">

            <div class="home__content  flex-col md:flex-row ">

                <div  id="navbar" class="">
                    <ul class="flex items-center lg:flew-row  gap-16 pt-16 font-bold">
                        <li class="nav-link hover:text-pink-500 active"><a href="#home">Home</a></li>
                        <li class="nav-link hover:text-pink-500 "><a href="#about">About</a></li>
                        <li class="nav-link hover:text-pink-500 "><a href="#portfolio">Portfolio</a></li>
                        <li class="nav-link hover:text-pink-500 "><a href="#skills">Skills</a></li>
                        <li class="nav-link hover:text-pink-500 "><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div id="hamburger" class=" text-xl sm:text-3xl cursor-pointer z-50 lg:hidden ">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <div class=" mt-28">

                    <div class=" ">
                        <p class=" text-2xl">Hello !!! I'm <span class="font-bold">JOYCIE KAMGO, </span><br>Junior
                            <span id="typewriter" class="font-bold text-4xl text-pink-500"></span><span class="typewriter-caret"></span>
                        </p>
                        <div class="flex gap-2">
                            <p class="mt-4 font-bold text-2xl">Welcome on my portfolio,</p>
                        </div>
                        <p class="mt-2">From intuitive interfaces to robust server-side logic. Curious, adaptable <br>and driven by innovation, I constantly improve my skills to deliver <br>efficient and impactful solutions tailored to real-world needs.</p>
                    </div>

                    <div class=" flex mt-10 gap-8">
                        <div>
                            <button class="bg-pink-500 p-2 w-36 border-2 cursor-pointer animate-bounce hover:drop-shadow-2xl"><a href="#portfolio">Portfolio</a></button>
                        </div>
                        <div>
                            <button class="hover:bg-pink-500 p-2 w-36 border-2 cursor-pointer animate-bounce hover:drop-shadow-2xl"><a href="#skills">Skills</a></button>
                        </div>
                    </div>

                    <div class=" mt-10 text-3xl tracking-[25px]">
                       <a href="https://web.facebook.com/profile.php?id=61553464023382" target="_blank"> <i class="fa-brands fa-facebook-f hover:text-pink-500 duration-300 cursor-pointer"></i></a>
                        <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github hover:text-pink-500 duration-300 cursor-pointer"></i></a>
                        <a href="https://www.linkedin.com/feed/?trk=guest_homepage-basic_nav-header-signin" target="_blank"><i class="fa-brands fa-linkedin-in hover:text-pink-500 duration-300 cursor-pointer"></i></a>
                    </div>
                </div>
            </div>



            <div class=" home__image relative p-20 mt-40 bg-transparent shadow-2xl h-[438px] w-full">
                <img src="{{asset('images/girl.png')}}" class=" h-[500px] w-[600px] -mt-35 " alt="">
            </div>
        </section>

    <!-- Second-page -->

        <div class="bg-pink-300 p-20">

            <div class="flex flex-col md:flex-row justify-between mx-auto container">

                <div class=" service__card justify-items-center">
                    <i class="fa-solid fa-desktop text-5xl ml-20"></i>
                    <p class=" font-bold mt-6">Technical Versatility</p>
                    <p>As a fullstack developer, I master <br>both frontend  and backend.</p>
                </div>

                <div class=" service__card justify-items-center ">
                    <i class="fa-solid fa-user-shield text-5xl ml-24"></i>
                    <p class=" font-bold mt-6">Efficient Problem Solving</p>
                    <p>Ability to quickly analyze a bug, error <br>or requirement an appropriate solution.</p>
                </div>

                <div class=" service__card justify-items-center">
                    <i class="fa-solid fa-user-graduate text-5xl ml-28"></i>
                    <p class=" font-bold mt-6">Innovation and Adaptability Mindset</p>
                    <p>Easily adaptable to new technologies <br>frameworks and modern methodologies.</p>
                </div>
            </div>
        </div>

    <!-- Third-page -->

        <section id="about" class=" min-h-screen mx-auto container mt-16" >
            <div class=" about__top">
                <p class="text-5xl font-bold text-pink-500">What I Do</p><br>
                <p>Passionate about web development, I work as a full-stack developer with <br>expertise in both front-end and back-end. My goal is to create modern <br>high-performing digital solutions that are tailored to real user needs.</p>
            </div>

            <div class="mt-10">
                <div class=" about__item__img-1 flex flex-col md:flex-row justify-between">
                    <div class="bg-pink-500  p-6 w-[400px] rounded-xl hover:drop-shadow-2xl hover:bg-pink-300">
                        <img src="/images/logo_html-removebg-preview.png" class="w-16" alt="">
                        <p class="font-bold text-white mt-4">HTML5</p>
                        <p class=" mt-2">I use HTML5 to structure clean semantic <br> and accessible web pages that follow modern standards.</p>
                    </div>
                    <div class="bg-pink-500 p-6 w-[400px] rounded-xl hover:drop-shadow-2xl hover:bg-pink-300">
                        <img src="/images/tailwind.png" class="w-16 h-16" alt="">
                        <p class="font-bold text-white  mt-4">TAILWIND CSS</p>
                        <p class=" mt-2">With Tailwind css, I create responsive <br>visually appealing interfaces with animations and flexible layouts.</p>
                    </div>
                    <div class="bg-pink-500 p-6 w-[400px] rounded-xl hover:drop-shadow-2xl hover:bg-pink-300">
                        <img src="/images/logo_mysql-removebg-preview.png" class="w-16" alt="">
                        <p class="font-bold text-white  mt-4">MySQL</p>
                        <p class=" mt-2">I use MySQL to design and manage structured <br>databases with reliable performance and data integrity.</p>
                    </div>
                </div>
                <div class="flex about__item__content-1 flex-col md:flex-row justify-between mt-8">
                    <div class="bg-pink-500 p-6  w-[400px] rounded-xl hover:shadow-2xl hover:bg-pink-300">
                        <img src="/images/laravel.png" class="w-16" alt="">
                        <p class="font-bold text-white  mt-4">LARAVEL</p>
                        <p class=" mt-2">With Laravel, I build secure scalable applications <br>using clean architecture and optimized workflows.</p>
                    </div>
                    <div class="bg-pink-500 p-6  w-[400px] rounded-xl hover:shadow-2xl hover:bg-pink-300">
                        <img src="/images/logo_php-removebg-preview.png" class="w-14 h-16" alt="">
                        <p class="font-bold text-white  mt-4">JavaScript</p>
                        <p class=" mt-2">I use JavaScript to build dynamic, interactive <br>and user-friendly experiences on the web.</p>
                    </div>
                    <div class="bg-pink-500 p-6 w-[400px] rounded-xl hover:shadow-2xl hover:bg-pink-300">
                        <img src="/images/figma.png" class="h-15 " alt="">
                        <p class="font-bold text-white  mt-4">Figma</p>
                        <p class=" mt-2">I use JavaScript to build dynamic, interactive <br>and user-friendly experiences on the web.</p>
                    </div>
                </div>
            </div>
        </section>

    <!-- My portfolio -->

    <section id="portfolio" class=" mx-auto container mt-16">
        <p class=" portfolio__card font-bold text-5xl text-pink-500">My Portfolio</p><br>
        <p class=" portfolio__item__text-1" >My portfolio showcases a collection of projects that highlight my skills <br>creativity, and ability to turn ideas into real, functional solutions. Each <br>work reflects my growth, technical expertise, and dedication to delivering <br>quality results</p>


        <div class="mt-10">

            <div class="flex portfolio__top flex-col md:flex-row justify-between">
                <div class=" bg-pink-50">
                    <div class="">
                        <img src="{{asset('images/desktop-remove.png')}}" class="w-96 shadow-2xl" alt="">
                    </div>
                    <div class=" p-7 bg-pink-500">
                        <p class="font-bold text-xl text-white">E-déménagement 237</p>
                        <p class="text-sm mt-1">A platform designed to simplify and modernize <br>the organization of moving services, <br>delivering efficiency and peace of mind</p>
                        <div class="flex justify-between mt-5">
                            <a href="https://joycie.rf.gd/" target="_blank" class="bg-transparent font-bold text-white shadow-2xl p-2.5 hover:text-black cursor-pointer">View project</a>
                            <a href="https://github.com/joyciedev/E-d-m-nagement_237.git" target="_blank" class="bg-transparent font-bold text-white shadow-2xl  shadow-2xl p-2.5 hover:text-black cursor-pointer">Source Code</a>
                        </div>
                    </div>
                </div>
                <div class=" bg-pink-50">
                    <div class="">
                        <img src="{{asset('images/desktop-plante.png')}}" class="w-96" alt="">
                    </div>
                    <div class=" p-7 bg-pink-500">
                        <p class="font-bold text-xl text-white">IdoroPlants</p>
                        <p class="text-sm mt-1">Find the perfect plant for your perfect <br>space, Where nature meets <br>your home.</p>
                        <div class="flex justify-between mt-5">
                            <a href="https://cerulean-cat-bbc6d8.netlify.app/" target="_blank" class="bg-transparent font-bold text-white shadow-2xl p-2.5 hover:text-black cursor-pointer">View project</a>
                            <a href="https://github.com/joyciedev/Plantes_vertes.git" target="_blank" class="bg-transparent font-bold text-white shadow-2xl  shadow-2xl p-2.5 hover:text-black cursor-pointer">Source Code</a>
                        </div>
                    </div>
                </div>
                <div class=" bg-pink-50">
                    <div class="">
                        <img src="{{asset('images/desktop-performa.png')}}" class="w-96" alt="">
                    </div>
                    <div class=" p-7 bg-pink-500">
                        <p class="font-bold text-xl text-white">Performa</p>
                        <p class="text-sm mt-1">Driving excellence through smart performance <br>management, from performance <br>to progress.</p>
                        <div class="flex justify-between mt-5">
                            <a href="" target="_blank" class="bg-transparent font-bold text-white shadow-2xl p-2.5 hover:text-black cursor-pointer">View project</a>
                            <a href="https://github.com/joyciedev/performa.git" target="_blank" class="bg-transparent font-bold text-white shadow-2xl  shadow-2xl p-2.5 hover:text-black cursor-pointer">Source Code</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- My Skills -->

    <section id="skills" class="bg-pink-300 mt-20 p-20">

        <div class="mx-auto container ">
            <p class=" skills__top text-5xl font-bold text-pink-500">My Skills</p><br>
            <p class=" skills__text__item-1">Through my training and hands-on experience, I’ve built a solid set of technical <br>and creative skills that I continuously refine. This section highlights the tools <br>languages, and technologies I work with, and how I apply them with professionalism <br>in my projects.”</p>

            <div class="flex flex-col md:flex-row justify-between mt-10">
                <div class=" skills__itms__progress-1">
                    <p class="font-bold text-xl">HTML5</p>
                    <p class=" text-xl">99%</p>

                    <div class="w-[610px] bg-gray-200 rounded-full h-5">
                        <div class="bg-pink-500 h-5 rounded-full" style="width: 99%"></div>
                    </div>
                </div>
                <div class=" skills__itms__progress-1">
                    <p class="font-bold text-xl">MySQL</p>
                    <p class=" text-xl">80%</p>

                    <div class="w-[610px] bg-gray-200 rounded-full h-5">
                        <div class="bg-pink-500 h-5 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between mt-20">
                <div class=" skills__itms__progress-1">
                    <p class="font-bold text-xl">JavaScript</p>
                    <p class=" text-xl">60%</p>

                    <div class="w-[610px] bg-gray-200 rounded-full h-5">
                        <div class="bg-pink-500 h-5 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
                <div class=" skills__itms__progress-1">
                    <p class="font-bold text-xl">Laravel</p>
                    <p class=" text-xl">70%</p>

                    <div class="w-[610px] bg-gray-200 rounded-full h-5">
                        <div class="bg-pink-500 h-5 rounded-full" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between mt-20">
                <div class=" skills__itms__progress-1">
                    <p class="font-bold text-xl">Tailwindcss</p>
                    <p class=" text-xl">90%</p>

                    <div class="w-[610px] bg-gray-200 rounded-full h-5">
                        <div class="bg-pink-500 h-5 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
                <div class=" skills__itms__progress-1">
                    <p class="font-bold text-xl">Figma</p>
                    <p class=" text-xl">85%</p>

                    <div class="w-[610px] bg-gray-200 rounded-full h-5">
                        <div class="bg-pink-500 h-5 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact us -->

    <section id="contact" class=" contact__top mx-auto container mt-16">
        <div>
            <p class="text-5xl font-bold text-pink-500">Contact</p><br>
            <p>If you have a project in mind, a collaboration proposal, or simply a question, feel <br>free to reach out. I’m open to conversations, opportunities, and always ready to discuss <br>new ideas.</p>
        </div>

        <form id="contactForm" action="{{ route('portfolio.store')}} " method="POST" class="mt-10">
            @csrf


            <label for="name">Name</label><br><br>
            <input id="name" type="text" name="name" class="border-b-2 w-[800px] h-8 hover:bg-pink-500 hover:shadow-2xl duration-300" required><br><br><br><br><br>

            <label for="email">Email</label><br><br>
            <input id="email" type="email" name="email" class="border-b-2 w-[800px] h-8 hover:bg-pink-500 hover:shadow-2xl duration-300" required><br><br><br>

            <label for="message" >Enter your message</label><br> <br>
            <textarea id="message" name="message" type="text" class="border w-[800px] h-80" required></textarea><br><br><br>
            <button type="submit" class="border w-36 h-10 cursor-pointer hover:bg-pink-500 hover:text-white">Submit</button>
        </form>

        <div id="toastContainer" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;"></div>
    </section>

    <!-- footer -->

    <footer class=" footer__bottom justify-items-center bg-pink-300 p-12 mt-28">
        <p class="text-xl font-bold">JOYCIE KAMGO</p>
        <div class=" text-2xl tracking-[20px] mt-4">
            <a href="https://web.facebook.com/profile.php?id=61553464023382" target="_blank"> <i class="fa-brands fa-facebook-f hover:text-pink-500 duration-300 cursor-pointer"></i></a>
            <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github hover:text-pink-500 duration-300 cursor-pointer"></i></a>
            <a href="https://www.linkedin.com/feed/?trk=guest_homepage-basic_nav-header-signin" target="_blank"><i class="fa-brands fa-linkedin-in hover:text-pink-500 duration-300 cursor-pointer"></i></a>
        </div>
        <p class="mt-4"> &copy; made by love, all right reserved for Joycie Kamgo  </p>
    </footer>

    <a href="#" id="scroll-up" class=" fixed right-4 -bottom-1/2 text-4xl text-pink-500 bg-black rounded-2xl inline-block z-50 animate-bounce mr-7 mb-4 hover:text-white">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </a>



    <script src="{{asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
