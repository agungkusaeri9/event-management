<x-frontend.main-layout>
    <div class="w-2/3 text-left">
        <h2 class="font-semibold text-white mb-5 text-3xl">OUR VISION</h2>
        <p class="text-white text-xs leading-6 font-light">
            {{ $item->vision }}
        </p>
    </div>
    <div class="flex justify-end">
        <div class="w-2/3 text-right">
            <h2 class="font-semibold text-white mb-5 text-3xl">OUR MISSION</h2>
            <p class="text-white text-xs leading-6 font-light">
                {{ $item->mission }}
            </p>
        </div>
    </div>
    <div class="w-full mt-7 mb-10">
        <h1 class="text-3xl font-bold text-white text-center mb-5">Previous Events</h1>

        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                @foreach ($previous_events as $prev)
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ $prev->image() }}"
                            class="absolute block brightness-80 w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                        <a href="{{ route('frontend.previous-events.show', $prev->slug) }}"
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white border-2 border-white px-5 py-2">JIFF
                            2018</a>
                    </div>
                    <!-- Item 2 -->
                @endforeach

            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                @foreach ($previous_events as $key => $prev)
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="{{ $key }}"></button>
                @endforeach
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>

    <div class="w-full mt-7">
        <h1 class="text-3xl font-bold text-white text-center mb-10">GET NO KNOW US</h1>
        <h3 class="text-white uppercase text-md mb-5">STEERING COMMITTEE</h3>

        <div class="flex flex-row w-full gap-5 mb-5">
            <div class="w-[20%]">
                <img src="{{ asset('assets/frontend/images/about1.png') }}" class="w-full" alt="">
            </div>
            <div class="w-[80%]">
                <p class="text-gray-400 text-sm text-justify leading-6">
                    <span class="font-bold">Didik Nini Thowok</span> is a renowned Indonesian
                    dancer and
                    choreographer
                    known for
                    his mastery of
                    cross-gender dance performance and his ability to blend traditional Indonesian dance styles with
                    modern
                    and comedic elements. His expertise is in performing male and female roles in traditional dances, a
                    practice called “gender wayang” or cross-gender performance. He is a highly respected figure for his
                    contributions to the preservation and innovation of Indonesian performing arts and is known for his
                    Topeng dance (masked dance) and his ability to seamlessly integrate various dance traditions from
                    Java,
                    Bali, Sunda, and even Chinese, Japanese and Indian influences into his performance. In addition to
                    his
                    performances, Didik Nini Thowok is also an advocate for preserving Indonesia’s rich dance heritage
                    and
                    has contributed significantly to teaching and promoting traditional Indonesian dance forms. With a
                    career spanning over several decades, he remains an influential figure in both Indonesian and
                    international performing arts. Didik has received numerous awards that recognize his artistic
                    excellence
                    and commitment to cultural preservation and has been honoured with the prestigious "Anugerah
                    Kebudayaan"
                    from the Indonesian government, acknowledging his role in advancing traditional arts.
                </p>
            </div>
        </div>


        <div class="flex flex-row w-full gap-5 mb-5">
            <div class="w-[20%]">
                <img src="{{ asset('assets/frontend/images/about2.png') }}" class="w-full" alt="">

            </div>
            <div class="w-[80%]">
                <p class="text-gray-400 text-sm text-justify leading-6">
                    <span class="font-bold">Ni Nyoman Sudewi</span> is a scholar and expert on traditional Balinese
                    dance, specifically the Legong
                    Keraton dance. She has extensively researched the evolution and influence of this classical dance
                    form, which originated in the royal courts of Bali in the late 19th century. Her doctoral
                    dissertation, The Development and Influence of Legong Keraton on the Growth of Bali Dance
                    (1920-2005), focuses on how this dance style has influenced modern Balinese dance forms, as well as
                    how it has been preserved and adapted over time. Sudewi argues that Legong Keraton, once exclusive
                    to the Balinese royal courts, has become a foundational influence in Balinese performing arts. This
                    dance is marked by its intricate, flexible movements and has inspired various other dance forms,
                    including ballet and the modern kebyar genre. She emphasizes the importance of preserving
                    traditional Balinese arts amidst modernization, highlighting the need for collaborative efforts to
                    keep these cultural treasures alive. Additionally, Sudewi is a lecturer at the Institut Seni
                    Indonesia (ISI) in Yogyakarta, where she continues to promote and teach Balinese performing arts.
                    Her work ensures that future generations recognize the cultural and artistic significance of Legong
                    Keraton and other traditional Balinese dances.
                </p>
            </div>
        </div>

    </div>
    <div class="w-full mt-7 mb-7">
        <h3 class="text-white uppercase text-md mb-5">ART DIRECTOR</h3>

        <div class="flex flex-row w-full gap-5 mb-5">
            <div class="w-[20%]">
                <img src="{{ asset('assets/frontend/images/about3.png') }}" class="w-full" alt="">

            </div>
            <div class="w-[80%]">
                <p class="text-gray-400 text-sm text-justify leading-6">
                    <span class="font-bold">Maria Darmaningsih</span> is a prominent Indonesian dancer and educator
                    known for contributing to
                    contemporary and traditional dance in Indonesia. As one of the co-founders of the Indonesian Dance
                    Festival (IDF) – the oldest international contemporary dance festival in Southeast Asia, and the
                    fifth oldest in the world - she received an award from the Ministry of Tourism of the Republic of
                    Indonesia as the Best Festival Organizer in Indonesia (2014), together with Nungki Kusumastuti and
                    Ina Suryadewi. Maria's background includes a degree in dance from the Indonesian Institute of the
                    Arts in Yogyakarta and a Ford Foundation scholarship for a master's of education from the University
                    of Lethbridge, Canada. Throughout her career, Maria has performed and collaborated with renowned
                    Indonesian choreographers such as Ben Suharto, Sardono W. Kusumo, and Retno Maruti. A former
                    educator at the Jakarta Institute of the Arts (IKJ), she founded Ardhanari Performing Arts Studio, a
                    dance school that focuses on traditional and contemporary dance forms. As a former director of IDF,
                    Maria has been instrumental in nurturing young talent and fostering cross-cultural dialogue through
                    dance, helping many Indonesian dancers gain international recognition. Her dedication to the
                    Indonesian dance scene extends beyond performance to education and advocacy for the performing arts.
                    In 2018, she received the Chevalier de l’Ordre des Arts et des Lettres award from the Ministry of
                    Culture of the French Republic.
                </p>
            </div>
        </div>

    </div>
</x-frontend.main-layout>
