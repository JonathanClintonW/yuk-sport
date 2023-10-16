@extends('layouts.app')

@section('content')
    <div class="mt-20 dark:bg-dark-primary-bg select-none">
        <div class="flex flex-col items-center mb-[80px]">
            <article class="flex flex-col items-center">
                <h2 class="text-lg font-semibold dark:text-text-light">ABOUT US</h2>
                <h1 class="max-w-[700px] text-5xl font-bold text-center leading-normal mb-3 dark:text-text-light">Welcome to Your Ultimate Travel Experience
                </h1>

                <p class="max-w-[500px] text-sm text-center font-semibold dark:text-text-gray">At Astro Travel, we believe that travel is not just about going
                    from one place
                    to another, it's about
                    creating lasting memories and unforgettable experiences. Our vision is to make your travel dreams come
                    true,
                    turning your journeys into inspiring and fulfilling adventures.</p>
            </article>
        </div>
        <section class="flex flex-col md:flex-row justify-around mb-5">
            <article>
                <p class="text-sm max-w-[400px] mb-3 dark:text-text-gray">With a passionate team of experienced travel experts, we are dedicated
                    to crafting
                    personalized travel
                    itineraries that cater to your unique desires and preferences.</p>
                <p class="text-sm max-w-[400px] mb-3 dark:text-text-gray">Whether you seek a romantic getaway, an
                    exciting adventure, or a relaxing retreat, we have the expertise to make it happen.</p>

                <p class="text-sm max-w-[400px] dark:text-text-gray">Explore the world with confidence, knowing that our travel professionals are
                    here to provide
                    you with expert
                    guidance, seamless planning, and exceptional customer service. Your journey begins with us, and we're
                    committed to ensuring every step of the way is a memorable one.</p>
            </article>

            <figure>
                <img src="{{ asset('images/founder.jpg') }}" alt="Astro Travel Founder" class="h-80 w-80 rounded-xl mb-3">
                <figcaption>
                    <h3 class="font-semibold mb-2 dark:text-text-light">Jonathan Clinton</h3>
                    <p class="dark:text-text-gray">Founder</p>
                </figcaption>
            </figure>
        </section>

        <section class="mx-5 mb-5 bg-dark-secondary-bg rounded-2xl flex justify-around items-center">
            <div class="p-5">
                <h2>
                    <span
                        class="flex tabular-nums text-text-light text-5xl font-medium mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                        x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:30]'">
                        <span class="supports-[counter-set]:sr-only">30</span>+
                    </span>
                </h2>
                <p class="text-text-light">
                    Team Members
                </p>
            </div>
            <div class="p-5">
                <h2>
                    <span
                        class="flex tabular-nums text-text-light text-5xl font-medium mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                        x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:100]'">
                        <span class="supports-[counter-set]:sr-only">100</span>K+
                    </span>
                </h2>
                <p class="text-text-light">
                    Customers
                </p>
            </div>
            <div class="p-5">
                <h2>
                    <span
                        class="flex tabular-nums text-text-light text-5xl font-medium mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                        x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:20]'">
                        <span class="supports-[counter-set]:sr-only">20</span>+
                    </span>
                </h2>
                <p class="text-text-light">
                    Countries
                </p>
            </div>
        </section>

        <section class="mx-5 bg-dark-secondary-bg rounded-2xl flex flex-col justify-around items-center">
            <div class="mb-3 p-4 text-center">
                <h2 class="text-text-light font-semibold text-2xl mb-3">Our Core Values</h2>
                <p class="text-text-gray text-sm max-w-[600px]">It takes great people to make a great product. Our company
                    culture champions diversity and our team members embody Pipedrive's values.</p>
            </div>
            <div class="grid grid-cols-3 justify-items-center gap-5 pb-5">
                <section class="flex flex-col items-center text-center w-80">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#9D4CCC" class="w-6 h-6 mb-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                    <h3 class="text-text-light font-medium mb-2">Team first</h3>
                    <p class="text-text-gray text-sm">Discover how we put our team at the heart and support each other.</p>
                </section>
                <section class="flex flex-col items-center text-center w-80">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#9D4CCC" class="w-6 h-6 mb-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    <h3 class="text-text-light font-medium mb-2">Reach for greatness</h3>
                    <p class="text-text-gray text-sm">We're brave and always trying new things to see what we can discover.
                    </p>
                </section>
                <section class="flex flex-col items-center text-center w-80">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#9D4CCC" class="w-6 h-6 mb-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                    <h3 class="text-text-light font-medium mb-2">No excuses</h3>
                    <p class="text-text-gray text-sm">We take responsibility and understand that where there's a will,
                        there's a
                        way.</p>
                </section>
                <section class="flex flex-col items-center text-center w-80">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#9D4CCC" class="w-6 h-6 mb-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                    </svg>
                    <h3 class="text-text-light font-medium mb-2">Internal drive</h3>
                    <p class="text-text-gray text-sm">we are deeply passionate about our work, and this profound love for
                        what we do.</p>
                </section>
                <section class="flex flex-col items-center text-center w-80">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#9D4CCC" class="w-6 h-6 mb-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                    <h3 class="text-text-light font-medium mb-2">Be ready to learn</h3>
                    <p class="text-text-gray text-sm">We're open-mindedness, proactivity, and a relentless eagerness to
                        acquire new skills.</p>
                </section>
                <section class="flex flex-col items-center text-center w-80">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#9D4CCC" class="w-6 h-6 mb-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>

                    <h3 class="text-text-light font-medium mb-2">Be positive vibes</h3>
                    <p class="text-text-gray text-sm">We celebrate each other's achievements and always find time to
                        spread the love.</p>
                </section>
            </div>
        </section>
        <div class="h-10 dark:bg-dark-primary-bg"></div>
    </div>
@endsection
