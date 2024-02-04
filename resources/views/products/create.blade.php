<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
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
                                <li><a href="{{route('product.index')}}" class="hover:text-lightGold">Product</a></li>
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
        <main class="flex flex-col items-center justify-between md:flex-row">
            <div class="flex flex-col px-20 py-4 h-full w-full">
                <div class="flex flex-col">
                    {{-- <div
                        class="flex bg-lightGray space-x-1 justify-between text-center items-center h-24 hover:scale-x-105 cursor-pointer hover:bg-sky-100">
                        <div class="w-1/12 font-semibold">
                            <h4>2023-09-14</h4>
                        </div>
                        <div class="w-6/12 text-left pl-2">
                            <h4 class="text-lg font-semibold">Invitaion for Quoations for Sale of Disposable Offcut
                                Papers</h4>
                            <h6 class="text-xs text-gray-500">Invitaion for Quoations for Sale of Disposable Offcut
                                Papers,
                                Invitaion
                                for Quoations for Sale of Disposable Offcut Papers. for Quoations for Sale of Disposable
                                Offcut Papers</h6>
                        </div>
                        <div class="w-4/12">
                            <h4 class="text-red-600 font-semibold">Closing At 03:00 PM, on 29th January 2024</h4>
                        </div>
                        <div class="w-1/12 font-semibold">
                            <a href="http://">
                                <h4>Download</h4>
                            </a>
                        </div>
                    </div> --}}


                    {{-- <form action="" method="post">
                        <div class="flex">
                            <label for="" class=" p-1">Product Code</label>
                            <input class="border-2 border-slate-950 p-1 rounded-lg w-1/3" type="text"
                                placeholder="Product Code" name="pro_code">
                        </div>
                        <div class="flex">
                            <label for="" class=" p-1">Product Name</label>
                            <input class="border-2 border-slate-950 p-1 rounded-lg w-1/3" type="text"
                                placeholder="Product Code" name="pro_code">
                        </div>
                        <div class="flex">
                            <label for="" class=" p-1">Product Type</label>
                            <input class="border-2 border-slate-950 p-1 rounded-lg w-1/3" type="text"
                                placeholder="Product Code" name="pro_code">
                        </div>
                        <div class="flex">
                            <label for="" class=" p-1">Product Description</label>
                            <input class="border-2 border-slate-950 p-1 rounded-lg w-1/3" type="text"
                                placeholder="Product Code" name="pro_code">
                        </div>
                        <div class="flex">
                            <label for="" class=" p-1">Number of Product Per Box</label>
                            <input class="border-2 border-slate-950 p-1 rounded-lg w-1/3" type="text"
                                placeholder="Product Code" name="pro_code">
                        </div>
                        <div class="flex">
                            <label for="" class=" p-1">Weight</label>
                            <input class="border-2 border-slate-950 p-1 rounded-lg w-1/3" type="text"
                                placeholder="Product Code" name="pro_code">
                        </div>
                        <div class="flex">
                            <label for="" class=" p-1">Weight Units</label>
                            <input class="border-2 border-slate-950 p-1 rounded-lg w-1/3" type="text"
                                placeholder="Product Code" name="pro_code">
                        </div>
                    </form> --}}



                    <form method="post" action="{{route('product.store')}}">
                        @csrf
                        @method('post')
                        <div class="flex items-center justify-center bg-center py-12 px-4 sm:px-6 lg:px-8 bg-gray-100">

                            <div class="space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
                                <div class="grid  gap-8 grid-cols-1">
                                    <div class="flex flex-col ">
                                        <div class="flex flex-col sm:flex-row items-center">
                                            <h2 class="font-semibold text-lg mr-auto">Create Product</h2>
                                            <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="form">
                                                {{-- <div class="md:space-y-2 mb-3">
                                                    <label class="text-xs font-semibold text-gray-600 py-2">Product
                                                        Image<abbr class="hidden" title="required">*</abbr></label>
                                                    <div class="flex items-center py-6">
                                                        <div
                                                            class="w-12 h-12 mr-4 flex-none rounded-xl border overflow-hidden">
                                                            <img class="w-12 h-12 mr-4 object-cover"
                                                                src="https://images.unsplash.com/photo-1611867967135-0faab97d1530?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1352&amp;q=80"
                                                                alt="Avatar Upload">
                                                        </div>
                                                        <label class="cursor-pointer ">
                                                            <span
                                                                class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-green-400 hover:bg-green-500 hover:shadow-lg">Browse</span>
                                                            <input type="file" class="hidden" :multiple="multiple"
                                                                :accept="accept">
                                                        </label>
                                                    </div>
                                                </div> --}}
                                                <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                                    <div class="mb-3 space-y-2 w-full text-xs">
                                                        <label class="font-semibold text-gray-600 py-2">Product Code
                                                            <abbr title="required">*</abbr></label>
                                                        <input placeholder="Product Code"
                                                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                            required="required" type="text" name="pro_code">
                                                        <p class="text-red text-xs hidden">Please fill out this field.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                                    <div class="mb-3 space-y-2 w-full text-xs">
                                                        <label class="font-semibold text-gray-600 py-2">Product Name
                                                            <abbr title="required">*</abbr></label>
                                                        <input placeholder="Product Name"
                                                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                            required="required" type="text" name="pro_name">
                                                        <p class="text-red text-xs hidden">Please fill out this field.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="w-full flex flex-col mb-3 text-xs">
                                                    <label class="font-semibold text-gray-600 py-2">Product Type <abbr
                                                            title="required">*</abbr></label>
                                                    <select
                                                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                        required="required" name="pro_type">
                                                        <option value="reynolad">Reynolad</option>
                                                        <option value="danata">Danata</option>
                                                    </select>
                                                    <p class="text-sm text-red-500 hidden mt-3" id="error">Please fill
                                                        out this field.</p>
                                                </div>

                                                <div class="w-full flex flex-col mb-3 text-xs">
                                                    <label class="font-semibold text-gray-600 py-2">Label Print Type
                                                        <abbr title="required">*</abbr></label>
                                                    <select
                                                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                        required="required" name="pro_lbl_type">
                                                        <option value="both">Both</option>
                                                        <option value="bag">Bag Only</option>
                                                    </select>
                                                    <p class="text-sm text-red-500 hidden mt-3" id="error">Please fill
                                                        out this field.</p>
                                                </div>

                                                <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                                    <div class="mb-3 space-y-2 w-full text-xs">
                                                        <label class="font-semibold text-gray-600 py-2">Product Weight
                                                            <abbr title="required">*</abbr></label>
                                                        <input placeholder="Product Weight"
                                                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                            required="required" type="number" step=".01"
                                                            name="pro_weight">
                                                        <p class="text-red text-xs hidden">Please fill out this field.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                                    <div class="mb-3 space-y-2 w-full text-xs">
                                                        <label class="font-semibold text-gray-600 py-2">Product Qty Per
                                                            Box
                                                            <abbr title="required">*</abbr></label>
                                                        <input placeholder="Product Qty Per Box"
                                                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                            required="required" type="number" name="pro_qty_per_box">
                                                        <p class="text-red text-xs hidden">Please fill out this field.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="w-full flex flex-col mb-3 text-xs">
                                                    <label class="font-semibold text-gray-600 py-2">Product Weight Unit
                                                        <abbr title="required">*</abbr></label>
                                                    <select
                                                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                        required="required" name="pro_weight_unit">
                                                        <option value="kg">KG</option>
                                                    </select>
                                                    <p class="text-sm text-red-500 hidden mt-3" id="error">Please fill
                                                        out this field.</p>
                                                </div>


                                                {{-- <div class="mb-3 space-y-2 w-full text-xs">
                                                    <label class="font-semibold text-gray-600 py-2">Company
                                                        Website</label>
                                                    <div class="flex flex-wrap items-stretch w-full mb-4 relative">
                                                        <div class="flex">
                                                            <span
                                                                class="flex items-center leading-normal bg-grey-lighter border-1 rounded-r-none border border-r-0 border-blue-300 px-3 whitespace-no-wrap text-grey-dark text-sm w-12 h-10 bg-blue-300 justify-center rounded-lg text-white">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <input type="text"
                                                            class="flex-shrink flex-grow flex-auto leading-normal w-px border border-l-0 h-10 border-grey-light rounded-lg rounded-l-none px-3 relative focus:border-blue focus:shadow"
                                                            placeholder="https://">
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                                    <div class="w-full flex flex-col mb-3">
                                                        <label class="font-semibold text-gray-600 py-2">Company
                                                            Address</label>
                                                        <input placeholder="Address"
                                                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                            type="text" name="integration[street_address]"
                                                            id="integration_street_address">
                                                    </div>
                                                    <div class="w-full flex flex-col mb-3">
                                                        <label class="font-semibold text-gray-600 py-2">Location<abbr
                                                                title="required">*</abbr></label>
                                                        <select
                                                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                            required="required" name="integration[city_id]"
                                                            id="integration_city_id">
                                                            <option value="">Seleted location</option>
                                                            <option value="">Cochin,KL</option>
                                                            <option value="">Mumbai,MH</option>
                                                            <option value="">Bangalore,KA</option>
                                                        </select>
                                                        <p class="text-sm text-red-500 hidden mt-3" id="error">Please
                                                            fill
                                                            out this field.</p>
                                                    </div>
                                                </div> --}}
                                                <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                                    <label class="font-semibold text-gray-600 py-2">Note</label>
                                                    <textarea name="note"
                                                        class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                                        placeholder="Enter your comapny info"
                                                        spellcheck="false"></textarea>
                                                    {{-- <p class="text-xs text-gray-400 text-left my-3">You inserted 0
                                                        characters</p> --}}
                                                </div>
                                                <p class="text-xs text-red-500 text-right my-3">Required fields are
                                                    marked
                                                    with an
                                                    asterisk <abbr title="Required field">*</abbr></p>
                                                <div
                                                    class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                                    <button
                                                        class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                                        Cancel </button>
                                                    <button type="submit"
                                                        class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
        </main>

        <footer class="p-4 bg-darkBlue text-white text-xs">
            <h6>Warehouse Management</h6>
            <h6>Ifixed Gloabl Solutions © @2024 </h6>
        </footer>
    </div>
</body>

</html>