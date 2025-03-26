{{-- <x-frontend.main-layout>
    <div class="flex gap-5">
        <a href="{{ route('frontend.home') }}" class="mb-10">
            <svg fill="#ffffff" width="34px" height="34px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                stroke="#ffffff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g data-name="Layer 2">
                        <g data-name="arrow-back">
                            <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0"></rect>
                            <path
                                d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z">
                            </path>
                        </g>
                    </g>
                </g>
            </svg>
        </a>
        <h1 class="text-xl font-bold text-white">Participant Data</h1>
    </div>

    <form action="{{ route('frontend.registration.step2') }}" method="post">
        @csrf
        <input type="text" id="event_id" name="event_id" value="{{ $event->id }}" hidden class="text-black">
        <input type="text" id="qty" name="qty" hidden class="text-black" value="1">
        <div class="flex flex-row gap-2 mb-4">
            <div class="">
                <label for="country" class="block mb-2 text-sm font-medium text-white dark:text-white">Country</label>
                <input type="text" id="country" name="country"
                    class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('country')
                    <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="city" class="block mb-2 text-sm font-medium text-white dark:text-white">City</label>
                <input type="text" id="city" name="city"
                    class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('city')
                    <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-row gap-4 mb-4">
            <div class="w-1/2">
                <label for="address" class="block mb-2 text-sm font-medium text-white dark:text-white">Address</label>
                <input type="text" id="address" name="address"
                    class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('address')
                    <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="postal_code" class="block mb-2 text-sm font-medium text-white dark:text-white">Postal
                    Code</label>
                <input type="text" id="postal_code" name="postal_code"
                    class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('postal_code')
                    <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-row gap-2 mb-4">
            <div class="">
                <label for="phone_number"
                    class="block mb-2 text-sm font-medium text-white dark:text-white">Telephon/Phone Number</label>
                <input type="text" id="phone_number" name="phone_number"
                    class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('phone_number')
                    <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="website" class="block mb-2 text-sm font-medium text-white dark:text-white">Website (if
                    any)</label>
                <input type="text" id="website" name="website"
                    class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('website')
                    <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                @enderror
            </div>
            <div class="ml-1">
                <label for="instagram" class="block mb-2 text-sm font-medium text-white dark:text-white">Instagram
                    (if
                    any)</label>
                <input type="text" id="instagram" name="instagram"
                    class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('instagram')
                    <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-row gap-4 mb-4">
            <div class="w-1/2">
                <label for="name_in_certificate" class="block mb-2 text-sm font-medium text-white dark:text-white">The
                    name that you want to be
                    written on the Acceptance Letter and on Certificate</label>
                <input type="text" id="name_in_certificate" name="name_in_certificate"
                    class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('name_in_certificate')
                    <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-row gap-4 mb-4 justify-between items-center">
            <div class="w-1/2">
                <h2 class="text-white">Total Pax</h2>
                <p class="text-white text-xs">People who will come to the ecent <br> (including participants, managers,
                    PIC) </p>
                <div class="flex gap-3 items-center text-center mt-2">
                    <div class="bg-white h-5 w-5 rounded-sm cursor-pointer" id="btnMinus">
                        -
                    </div>
                    <div class="text-white font-semibold" id="displayQty">
                        1
                    </div>
                    <div class="bg-white h-5 w-5 rounded-sm cursor-pointer" id="btnPlus">
                        +
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="bg-gray-500 px-10 py-3 text-white rounded-lg cursor-pointer">Next
                    Section</button>
            </div>
        </div>
    </form>

    @push('scripts')
        <script>
            $(function() {
                console.log('object');
                let qty = 1;
                $('#btnPlus').click(function() {
                    qty++;
                    $('#qty').val(qty);
                    $('#displayQty').html(qty);
                })
                $('#btnMinus').click(function() {
                    qty--;
                    $('#qty').val(qty);
                    $('#displayQty').html(qty);
                })
            })
        </script>
    @endpush
</x-frontend.main-layout> --}}

<x-frontend.main-layout>
    <div class="flex flex-col gap-5 p-5">
        <div class="flex items-center gap-5">
            <a href="#" class="text-white">
                <svg fill="#ffffff" width="34px" height="34px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1 1 0 0 0 0 1.28l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z" />
                </svg>
            </a>
            <h1 class="text-xl font-bold text-white"></h1>
        </div>

        <form id="multiStepForm" class="flex flex-col gap-4">
            <!-- SECTION 1 -->
            <div id="section1" class="step">
                <h2 class="text-white text-lg font-semibold mb-4">Step 1: Participant Data</h2>
                <input type="text" id="event_id" name="event_id" value="{{ $event->id }}" hidden
                    class="text-black">
                <input type="text" id="qty" name="qty" hidden class="text-black" value="1">
                <div class="flex flex-row gap-2 mb-4">
                    <div class="">
                        <label for="country"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Country</label>
                        <input type="text" id="country" name="country"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('country')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="city"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">City</label>
                        <input type="text" id="city" name="city"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('city')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-row gap-4 mb-4">
                    <div class="w-1/2">
                        <label for="address"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Address</label>
                        <input type="text" id="address" name="address"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('address')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="postal_code"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Postal
                            Code</label>
                        <input type="text" id="postal_code" name="postal_code"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('postal_code')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-row gap-2 mb-4">
                    <div class="">
                        <label for="phone_number"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Telephon/Phone
                            Number</label>
                        <input type="text" id="phone_number" name="phone_number"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('phone_number')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="website" class="block mb-2 text-sm font-medium text-white dark:text-white">Website
                            (if
                            any)</label>
                        <input type="text" id="website" name="website"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('website')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="ml-1">
                        <label for="instagram"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Instagram
                            (if
                            any)</label>
                        <input type="text" id="instagram" name="instagram"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('instagram')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-row gap-4 mb-4">
                    <div class="w-1/2">
                        <label for="name_in_certificate"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">The
                            name that you want to be
                            written on the Acceptance Letter and on Certificate</label>
                        <input type="text" id="name_in_certificate" name="name_in_certificate"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('name_in_certificate')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-row gap-4 mb-4 justify-between items-center">
                    <div class="w-1/2">
                        <h2 class="text-white">Total Pax</h2>
                        <p class="text-white text-xs">People who will come to the ecent <br> (including participants,
                            managers,
                            PIC) </p>
                        <div class="flex gap-3 items-center text-center mt-2">
                            <div class="bg-white h-5 w-5 rounded-sm cursor-pointer" id="btnMinus">
                                -
                            </div>
                            <div class="text-white font-semibold" id="displayQty">
                                1
                            </div>
                            <div class="bg-white h-5 w-5 rounded-sm cursor-pointer" id="btnPlus">
                                +
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="bg-gray-500 px-10 py-3 text-white rounded-lg cursor-pointer nextBtn">Next
                            Section</button>
                    </div>
                </div>
                {{-- <div class="flex justify-end mt-4">
                    <button type="button" class="px-6 py-2 bg-gray-500 text-white rounded-lg mt-4 ">Next
                        Section</button>
                </div> --}}
            </div>

            <!-- SECTION 2 -->
            <div id="section2" class="step hidden">
                <h2 class="text-white text-lg font-semibold mb-4">Step 2: Contact Person</h2>
                <div class="flex flex-row gap-2 mb-4">
                    <div class="">
                        <label for="first_name"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">First
                            Name</label>
                        <input type="text" id="first_name" name="first_name"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('first_name')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-white dark:text-white">Last
                            Name</label>
                        <input type="text" id="last_name" name="last_name"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('last_name')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-row gap-2 mb-4">
                    <div class="">
                        <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">Email
                            Address</label>
                        <input type="text" id="email" name="email"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('email')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email_confirmation"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Confirm Email
                            Address</label>
                        <input type="text" id="email_confirmation" name="email_confirmation"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('email_confirmation')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="ml-1">
                        <label for="phone_number"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Phone
                            Number</label>
                        <input type="text" id="phone_number" name="phone_number"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('phone_number')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-between mt-4">
                    <button type="button"
                        class="px-6 py-2 bg-gray-400 text-white rounded-lg prevBtn">Previous</button>
                    <button type="button" class="px-6 py-2 bg-gray-500 text-white rounded-lg nextBtn">Next
                        Section</button>
                </div>
            </div>

            <!-- SECTION 3 -->
            <div id="section3" class="step hidden">
                <h2 class="text-white text-lg font-semibold mb-4">Step 3: Performance</h2>
                <div class="flex flex-row gap-2 mb-4">
                    <div class="w-1/2">
                        <label for="type_performance"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Type
                            Of Performance</label>
                        <input type="text" id="type_performance" name="type_performance"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('type_performance')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-row gap-2 mb-4">
                    <div class="w-1/2">
                        <label for="name_performance"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Name/Title of
                            Performance</label>
                        <input type="text" id="name_performance" name="name_performance"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('name_performance')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="time_performance"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Time
                            of Perfomance (minutes)</label>
                        <input type="text" id="time_performance" name="time_performance"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('time_performance')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div class="flex flex-row gap-2 mb-4">
                    <div class="w-1/2">
                        <label for="type_music" class="block mb-2 text-sm font-medium text-white dark:text-white">Type
                            Of Music</label>
                        <input type="text" id="type_music" name="type_music"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('type_music')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-row gap-2 mb-4">
                    <div class="">
                        <label for="number_performance"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Number
                            of Perfomances</label>
                        <input type="text" id="number_performance" name="number_performance"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                        @error('number_performance')
                            <p class="text-red-400 text-xs mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-between mt-4">
                    <button type="button"
                        class="px-6 py-2 bg-gray-400 text-white rounded-lg prevBtn">Previous</button>
                    <button type="button" class="px-6 py-2 bg-gray-500 text-white rounded-lg nextBtn">Next
                        Section</button>
                </div>
            </div>

            <!-- SECTION 4 -->
            <div id="section4" class="step hidden">
                <h2 class="text-white text-lg font-semibold mb-4">Step 3: Registration Summary</h2>
                <div class="flex w-fullborder-4  justify-center">
                    <div>
                        <h2 class="text-white text-lg mb-3 font-normal">Event Details</h2>
                        <div class="flex gap-4 w-full">
                            <div class="w-1/3">
                                <img src="{{ asset('assets/img/example-image.jpg') }}" class="h-12 w-full"
                                    alt="">
                            </div>
                            <div>
                                <h2 class="text-white">Event Name</h2>
                                <p class="text-xs text-white">Location</p>
                                <p class="text-xs text-white">Waktu</p>
                            </div>
                            <div class="border-t border-white border-4 h-2"></div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between mt-4">
                    <button type="button"
                        class="px-6 py-2 bg-gray-400 text-white rounded-lg prevBtn">Previous</button>
                    <button type="submit"
                        class="px-6 py-2 bg-green-500 text-white rounded-lg cursor-pointer">Submit</button>
                </div>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            let qty = 1;
            $('#btnPlus').click(function() {
                qty++;
                $('#qty').val(qty);
                $('#displayQty').html(qty);
            })
            $('#btnMinus').click(function() {
                qty--;
                $('#qty').val(qty);
                $('#displayQty').html(qty);
            })

            let currentStep = 0;
            const steps = document.querySelectorAll(".step");
            const nextBtns = document.querySelectorAll(".nextBtn");
            const prevBtns = document.querySelectorAll(".prevBtn");

            function showStep(step) {
                steps.forEach((s, index) => {
                    s.classList.toggle("hidden", index !== step);
                });
            }

            nextBtns.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentStep < steps.length - 1) {
                        currentStep++;
                        showStep(currentStep);
                    }
                });
            });

            prevBtns.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentStep > 0) {
                        currentStep--;
                        showStep(currentStep);
                    }
                });
            });

            showStep(currentStep);
        </script>
    @endpush

</x-frontend.main-layout>
