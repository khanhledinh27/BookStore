<?php
    require 'ketnoiDataBase.php';
    $sql = "SELECT * FROM `sanpham` WHERE 1";
    $querry = mysqli_query($conn,$sql);
    //var_dump($querry); // kiểm tra
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css-->
    <style>
    <?php include 'style.css'; ?>
    </style>

    <title>Home</title>
    
</head>
<body>
    <!-- Header -->
    <header id="home" class="container px-5 pt-8 pb-3 mx-auto">
        <nav class="bg-white px-2 sm:px-4 py-2.5 rounded shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px]">
        <div class="container flex flex-wrap justify-between items-center mx-auto font-mono">
            <a href="#home" class="flex items-center">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                Natasa.
            </span>
            </a>

            <div class="flex items-center">
            <button
                id="menu-toggle"
                type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
            >
                <span class="sr-only">Open main menu</span>
                <!-- Hamburger icon -->
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"
                />
                </svg>
            </button>
            </div>

            <div
            class="w-full md:block md:w-auto hidden"
            id="mobile-menu"
            >
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                <a
                    href="#home"
                    class="block text-lg py-2 pr-4 pl-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white "
                    aria-current="page"
                >
                    Home
                </a>
                </li>
                <li>
                <a
                    href="#book"
                    class="block text-lg py-2 pr-4  pl-4 text-gray-700 border-b border-gray-100  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >
                    Books
                </a>
                </li>
                <li>
                <a
                    href="#about"
                    class="block text-lg py-2 pr-4 pl-4 text-gray-700 border-b border-gray-100  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >
                    About
                </a>
                </li>
                <li>
                <a
                    href="#service"
                    class="block text-lg py-2 pr-4 pl-4 text-gray-700 border-b border-gray-100  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >
                    Services
                </a>
                </li>
                <li>
                <a
                    href="#contact"
                    class="block text-lg py-2 pr-4 pl-4 text-gray-700 hover:bg-gray-50  md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                >
                    Contact
                </a>
                </li>
            </ul>
            </div>

        </div>
        </nav>
    </header>
    <!--admin section-->
    <section class="container px-5 pb-3 mx-auto block">
        <div class="text-right text-xs pr-5 text-gray-400 hover:text-black cursor-pointer">
            <a href="http://localhost:8080/BookStore/products.php">ACCESS TO ADMIN FUNCTION</a>
        </div>
    </section>
    <!--content-->
    <section class="container px-5 pb-8 mx-auto">
        <div class="hero bg-gray-100 py-16">
            <!-- container -->
            <div class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
                <!-- hero wrapper -->
                <div class="hero-wrapper grid grid-cols-1 md:grid-cols-12 gap-8 items-center">

                    <!-- hero text -->
                    <div class="hero-text col-span-6">
                        <h1 class=" font-bold text-4xl md:text-5xl max-w-xl text-gray-900 leading-tight">If you don't like to read, you haven't found the right book.</h1>
                        <p class="text-gray-800 text-base leading-relaxed mt-8 font-semibold">-J.K. Rowling-</p>
                        <hr class=" w-12 h-1 bg-orange-500 rounded-full mt-8">
                        <p class="text-gray-800 text-base leading-relaxed mt-8 font-semibold">The ultimate test of your knowledge is your capacity to convey it to another.</p>
                        
                    </div>

                    <!-- hero image -->
                    <div class="hero-image col-span-6">
                        <img src="./Images/pic.png" alt="">
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <!--books-->
    <div id="book" class="container px-5 py-8 mx-auto">
        <h1 class="mb-12 text-center md:text-left font-mono text-3xl font-light">Books</h1>
            <section id="Projects"
                class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
                <?php while ($row = mysqli_fetch_array($querry)) { ?>
                <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    <a href="#">
                        <img src="./Images/<?= $row['imgURL'] ?>"
                                alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <span class="text-gray-400 mr-3 uppercase text-xs"><?= $row['mota'] ?></span>
                            <p class="text-lg font-bold text-black truncate block capitalize"><?= $row['tensp'] ?></p>
                            <div class="flex items-center">
                                <p class="text-lg font-semibold text-black cursor-auto my-3">$<?= $row['gia'] ?></p>
                                <div class="ml-auto">
                                <a onclick="return muasp()" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </section>
    </div>
    
    <!--about-->
    <section id="about" class="container px-5 pb-8 mx-auto">
        <h1 class="mb-12 text-center font-mono text-3xl font-light">About Us</h1>
        <div
        class="relative overflow-hidden rounded-lg bg-cover bg-no-repeat p-12 text-center"
        style="background-image: url('./Images/background.jpg'); height: 400px">
        <div
            class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.6)">
            <div class="flex h-full items-center justify-center">
            <div class="text-white">
                <h2 class="mb-4 text-4xl font-semibold pb-10">Welcome to Natasa: A book store</h2>
                <h4 class="mb-6 text-xl font-semibold px-1 md:px-20">At Natasa, we believe book is more than just reading. It's about 
                    experiencing a new knowledge, culture, making connection, and feeling like you belong. That's why we're sharing and
                    believing in the power of books.
                </h4>
                <button
                type="button"
                class="rounded border-2 border-neutral-50 px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                data-twe-ripple-init
                data-twe-ripple-color="light">
                Read More
                </button>
            </div>
            </div>
        </div>
        </div>

    </section>
    
    <!--services-->
    <section id="service" class="container px-5 py-8 mx-auto">
        <h1 class=" text-center md:text-left font-mono text-3xl font-light">Our Services</h1>
        <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3 p-4 md:p-8">
            <!-- Ser 1 -->
            <div
                class="p-8 py-12 sm:p-12 rounded-3xl bg-white border border-gray-400 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                <div class="space-y-12">
                    <div class="m-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-50">
                        <span class="font-bold text-xl text-green-600">1</span>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-2xl font-semibold text-gray-800 transition">Books for Cash</h3>
                        <p class="text-gray-600">We buy used books from customers.
                            If you have books you no longer need, you can sell them to the Natasa for cash or store credit.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Ser 2 -->
            <div
                class="p-8 py-12 sm:p-12 rounded-3xl bg-white border border-gray-400 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                <div class="space-y-12">
                    <div class="m-auto flex h-12 w-12 items-center justify-center rounded-full bg-orange-50">
                        <span class="font-bold text-xl text-orange-600">2</span>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-2xl font-semibold text-gray-800 transition">Book Clubs</h3>
                        <p class="text-gray-600">We often organize book clubs where readers can discuss a selected book together. 
                            It's a great way to connect with other book lovers and explore different perspectives.</p>
                    </div>
                </div>
            </div>

            <!-- Ser 3 -->
            <div
                class="p-8 py-12 sm:p-12 rounded-3xl bg-white border border-gray-400 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                <div class="space-y-12">
                    <div class="m-auto flex h-12 w-12 items-center justify-center rounded-full bg-purple-50">
                        <span class="font-bold text-xl text-purple-600">3</span>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-2xl font-semibold text-gray-800 transition">Book Repair Services</h3>
                        <p class="text-gray-600">We may offer book repair services for damaged books. This includes fixing torn pages,
                            re-binding, and restoring antique books.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-->
    <section id="contact" class=" container px-5 pt-14 pb-20 mx-auto">
        <div class="flex items-center justify-start bg-white">
            <div class="mx-auto w-full max-w-lg">
                <h1 class="text-4xl font-medium">Contact us</h1>
                <p class="mt-3">Email us at khanhledinh.work@gmail.com or message us here:</p>

                <form action="https://api.web3forms.com/submit" class="mt-10" method="POST">
                
                <input type="hidden" name="access_key" value="040756df-2009-485a-a171-baec5acf2f93" /> 
                <div class="grid gap-6 sm:grid-cols-2">
                    <div class="relative z-0">
                    <input type="text" name="name" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                    <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your name</label>
                    </div>
                    <div class="relative z-0">
                    <input type="text" name="email" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                    <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your email</label>
                    </div>
                    <div class="relative z-0 col-span-2">
                    <textarea name="message" rows="5" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" "></textarea>
                    <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your message</label>
                    </div>
                </div>
                <button type="submit" class="mt-5 rounded-md bg-blue-800 px-10 py-2 text-white">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    <hr>
    <!--footer-->
    <section class="bg-white container px-5 pt-14 pb-20 mx-auto">
        <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
            <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                <div class="px-5 py-2">
                    <a href="#home" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Home
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#book" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Books
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#about" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        About
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#service" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Services
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#contact" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Contact
                    </a>
                </div>
            </nav>
            <div class="flex justify-center mt-8 space-x-6">
                <a 
                target="_blank"
              rel="noopener noreferrer"
              href="https://www.facebook.com/tenchi.takumi/?locale=vi_VN" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a 
                target="_blank"
              rel="noopener noreferrer"
              href="https://www.linkedin.com/in/khánh-lê-đình-0738aa249/" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Linkedin</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M 6 3 C 4.3489059 3 3 4.3489059 3 6 L 3 18 C 3 19.651094 4.3489059 21 6 21 L 18 21 C 19.651094 21 21 19.651094 21 18 L 21 6 C 21 4.3489059 19.651094 3 18 3 L 6 3 z M 6 4 L 18 4 C 19.110906 4 20 4.8890941 20 6 L 20 18 C 20 19.110906 19.110906 20 18 20 L 6 20 C 4.8890941 20 4 19.110906 4 18 L 4 6 C 4 4.8890941 4.8890941 4 6 4 z M 8.1855469 6.7851562 C 7.4445469 6.7851563 7 7.2293594 7 7.8183594 C 7 8.4113594 7.444375 8.8574219 8.109375 8.8574219 C 8.850375 8.8574219 9.2910156 8.4113594 9.2910156 7.8183594 C 9.2910156 7.2303594 8.8505469 6.7851562 8.1855469 6.7851562 z M 7.0625 9.9628906 L 7.0625 16 L 9.2363281 16 L 9.2363281 9.9628906 L 7.0625 9.9628906 z M 11.033203 9.9628906 L 11.033203 16 L 13.207031 16 L 13.207031 12.697266 C 13.207031 11.718266 13.908141 11.574219 14.119141 11.574219 C 14.330141 11.574219 14.892578 11.785266 14.892578 12.697266 L 14.892578 16 L 17 16 L 17 12.697266 C 17 10.806266 16.154516 9.9628906 15.103516 9.9628906 C 14.052516 9.9628906 13.490031 10.312641 13.207031 10.806641 L 13.207031 9.9628906 L 11.033203 9.9628906 z"></path>
                    </svg>
                </a>
                <a target="_blank"
              rel="noopener noreferrer"
              href="https://github.com/khanhledinh27" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <p class="mt-8 text-base leading-6 text-center text-gray-400">
                © 2021 Natasa, Inc. All rights reserved.
            </p>
        </div>
    </section>


   <!--Tailwind CSS-->
   <script src="https://cdn.tailwindcss.com"></script>

   <script>
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  menuToggle.addEventListener('click', function () {
    mobileMenu.classList.toggle('hidden');
  });
</script>

<script>
        function muasp(){
            var conf = confirm('Mua thanh cong')
            return conf;
        }
    </script>
</body>
</html>