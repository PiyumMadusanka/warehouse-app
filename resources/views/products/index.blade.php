<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL Product</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="min-h-screen flex flex-col">
        <!-- Header Section -->
        <header>
            <!-- Navbar -->
            <nav class="py-3 bg-lightBlue text-white">
                <!-- Flex Container -->
                <div class="flex items-center justify-between px-20">
                    <!-- Logo & First Menu -->
                    <div class="flex items-center justify-between">
                        <!-- Logo -->
                        <div class="px-5">
                            <a href="index.html"><img src="{{asset('img/logo-40-x-56.png')}}" class="h-16"
                                    alt="Logo"></a>
                            {{-- {{ HTML::image(Asset::img('./img/logo-40-x-56.png'), "My logo")) }} --}}
                        </div>
                        <!-- Left Menu-->
                        <div class="hidden items-center pt-3 ml-4 space-x-3.5 text-sm md:block">
                            <ul class="flex space-x-6" id="mainNavLinks">
                                <li><a href="index.html" class="hover:text-lightGold">Home</a></li>
                                <li>
                                    <button id="btnGallery" class="flex items-center hover:text-lightGold">Gallery
                                        <svg class="w-2.5 h-2.5 ms-1 mt-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="listGallery"
                                        class="fixed hidden font-normal bg-darkBlue divide-y divide-gray-100 rounded-lg shadow w-36 z-10">
                                        <ul class="py-2 text-sm">
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-lightGray hover:text-lightGold">Image
                                                    Gallery</a>
                                            </li>
                                            <li>
                                                <a href=" #"
                                                    class="block px-4 py-2 hover:bg-lightGray hover:text-lightGold">Donation
                                                    Event</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <button id="btnDonation" class="flex items-center hover:text-lightGold">Donation
                                        <svg class="w-2.5 h-2.5 ms-1 mt-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="listDonation"
                                        class="fixed hidden font-normal bg-darkBlue divide-y divide-gray-100 rounded-lg shadow w-36 z-10">
                                        <ul class="py-2 text-sm">
                                            <li>
                                                <a href="donation_new.html"
                                                    class="block px-4 py-2 hover:bg-lightGray hover:text-lightGold">New
                                                    Donation</a>
                                            </li>
                                            <li>
                                                <a href="donation.html"
                                                    class="block px-4 py-2 hover:bg-lightGray hover:text-lightGold">Listed
                                                    Donation</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--  Right Menu -->
                    <div class="hidden items-center pt-3 space-x-1.5 text-sm md:block">
                        <a href="" class="hover:text-lightGold">FAQ</a>
                        <a href="" class="hover:text-lightGold">Search</a>
                        <a href="" class="hover:text-lightGold">Login</a>
                    </div>
                </div>

                <!-- HR Line -->
                <hr class="h-px mt-1 ml-24 mr-20 bg-gray-200 border-0">

                <!--Logo Text & Second Menu  -->
                <div class="flex items-center justify-between">
                    <!-- Logo Text -->
                    <div class="pl-24 text-xs">
                        <h6 class="mt-0.5 -mb-0.5">Warehouse Managemenet System</h6>
                        <h6>United Kingdom</h6>
                    </div>
                    <!-- Right Menu Item -->
                    <div class="hidden pr-20 space-x-1.5 text-sm md:block">
                        <ul class="flex space-x-6 pt-1" id="secondNavLinks">
                            <li>
                                <button id="btnServices" class="flex items-center hover:text-lightGold">Services
                                    <svg class="w-2.5 h-2.5 ms-1 mt-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <div id="listServices"
                                    class="fixed hidden font-normal bg-darkBlue divide-y divide-gray-100 rounded-lg shadow w-26 z-10">
                                    <ul class="py-2 text-sm">
                                        <li>
                                            <a href="tender.html"
                                                class="block px-4 py-2 hover:bg-lightGray hover:text-lightGold">Tender</a>
                                        </li>
                                        <li>
                                            <a href=" #"
                                                class="block px-4 py-2 hover:bg-lightGray hover:text-lightGold">Vehicle
                                                Pass</a>
                                        </li>
                                        <li>
                                            <a href=" #"
                                                class="block px-4 py-2 hover:bg-lightGray hover:text-lightGold">Gate
                                                Pass</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <button id="btnInfo" class="flex items-center hover:text-lightGold">Information
                                    <svg class="w-2.5 h-2.5 ms-1 mt-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <div id="listInfo"
                                    class="fixed hidden bg-darkBlue divide-y divide-gray-100 rounded-lg shadow w-24 z-10">
                                    <ul class="py-2 text-sm">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-lightGray hover:text-lightGold">Clinic
                                                Info</a>
                                        </li>
                                        <li>
                                            <a href=" #"
                                                class="block px-4 py-2 hover:bg-lightGray hover:text-lightGold">News</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#" class="hover:text-lightGold">Education</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>
        <!-- Main Section -->
        <main class="flex flex-col items-center justify-between md:flex-row h-screen">
            <div class="flex flex-col px-20 py-4 h-full w-full">
                <div class="flex flex-col">
                    <div class="flex justify-between p-4">
                        <div>
                            <h3 class="text-lg font-bold">All Products</h3>
                        </div>
                        <div> <a href="{{route('product.create')}}"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                                Product</a>
                        </div>
                    </div>
                    <div class="overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Pro. Code
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Pro. Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Pro. Type
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Pro. Weight
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Pro. Label Type
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ( $products as $product)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 uppercase text-xs hover:bg-slate-900 hover:text-white">
                                    <th scope="row" class="px-6 py-1 whitespace-nowra">
                                        {{$product->pro_code}}
                                    </th>
                                    <td class="px-6 py-1">
                                        {{$product->pro_name}}
                                    </td>
                                    <td class="px-6 py-1">
                                        {{$product->pro_type}}
                                    </td>
                                    <td class="px-6 py-1">
                                        {{$product->pro_weight}}{{$product->pro_weight_unit}}
                                    </td>
                                    <td class="px-6 py-1">
                                        {{$product->pro_lbl_type}}
                                    </td>
                                    <td class="px-6 py-1">
                                        <a href="#" class=" text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </main>

        <footer class="p-4 bg-darkBlue text-white text-xs">
            <h6>Warehouse Management</h6>
            <h6>Ifixed Gloabl Solutions © @2024 </h6>
        </footer>
    </div>
</body>

</html>