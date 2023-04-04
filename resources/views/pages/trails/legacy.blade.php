@extends('layouts.app')

@section('title', 'Explore the Legacy Trail on eBikes')

@section('description',
    'Discover the beauty of the Legacy Trail with our premium selection of eBikes. Rent or buy your
    perfect ride and explore the scenic trail like never before. Book your test ride now and experience the joy of
    effortless cycling on the Legacy Trail.')

@section('content')
    <div>
        <div class="overflow-hidden bg-white dark:bg-gray-800 py-32">
            <div class="container mx-auto max-w-7xl px-6 lg:flex lg:px-8">
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
                    <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-200 sm:text-4xl">The Legacy
                            Trail
                        </h2>
                        <p class="mt-6 text-xl leading-8 text-gray-600 dark:text-gray-300">The Legacy Trail is a popular
                            multi-use trail located in Sarasota County, Florida. It is a paved trail that is open to
                            cyclists,
                            walkers, runners, and inline skaters, and is approximately 10.6 miles long.</p>
                        <p class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">The trail starts at the southern
                            end
                            in Sarasota at the historic train station on McIntosh Road and extends to Venice, Florida. The
                            trail
                            winds through scenic landscapes of natural beauty, including wetlands, parks, and wildlife
                            areas.
                        </p>
                        <p class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">Along the way, visitors can
                            explore
                            various communities and attractions, including the Oscar Scherer State Park, the Historic Venice
                            Train Depot, and the Venice Museum and Archives. The trail is also close to various dining and
                            shopping options, making it a great destination for a day trip or weekend getaway.
                        </p>
                        <p class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">The Legacy Trail is
                            well-maintained
                            and offers rest areas, benches, and water fountains along the way. Additionally, the trail has
                            several trailheads and parking areas, making it easily accessible to visitors.
                        </p>
                        <p class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">Overall, The Legacy Trail is a
                            popular and scenic destination for outdoor enthusiasts, and is highly recommended for anyone
                            looking
                            to explore the natural beauty of Sarasota County while getting some exercise.
                        </p>
                        <div class="mt-10 flex">
                            <a href="#"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Join
                                our team <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
                        <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                            <img src="https://www.friendsofthelegacytrail.org/wp-content/uploads/2022/09/IMG_6645-scaled-e1662571159357.jpg"
                                alt=""
                                class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                        </div>
                        <div
                            class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
                            <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/46/Legacy_Trail_South_Terminus_at_Venice.jpg"
                                    alt=""
                                    class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                            <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Legacy_Trail_South_Creek_Trestle.JPG/1920px-Legacy_Trail_South_Creek_Trestle.JPG"
                                    alt=""
                                    class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                            <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Legacy_Trail_Shelter.JPG/1920px-Legacy_Trail_Shelter.JPG"
                                    alt=""
                                    class="aspect-[4/3] w-[24rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-900">
            <div class="continer mx-auto max-w-7xl py-24 sm:py-16 px-6">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">History</h2>
                    <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                        <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
                            <div class="mt-10 max-w-xl text-base leading-7 text-gray-700 dark:text-gray-300">
                                <p>The Legacy Trail is a 12.5-mile trail in Sarasota County that follows the scenic CSX
                                    railroad
                                    corridor, offering opportunities for recreation, historical discovery, and environmental
                                    appreciation. The restored Venice Train Depot serves as a historical resource and
                                    regional
                                    transportation hub. In 2018, voters approved a bond referendum to extend the Legacy
                                    Trail an
                                    additional 7.5 miles north to Payne Park in downtown Sarasota with a connector to the
                                    City
                                    of North Port. The grade level trail part of this extension was completed in 2022, with
                                    overpasses at Clark and Bee Ridge Roads expected to be finished by FDOT in 2024. The
                                    Venice
                                    Area Historical Society provides more information on the Venice Train Depot and the
                                    Legacy
                                    Trail corridor.</p>
                            </div>
                        </div>
                        <div class="lg:flex lg:flex-auto lg:justify-center">
                            <dl class="w-64 space-y-8 xl:w-80">
                                <div class="flex flex-col-reverse gap-y-4">
                                    <dt class="text-base leading-7 text-gray-600 dark:text-gray-400">Miles of trails
                                    </dt>
                                    <dd class="text-5xl font-semibold tracking-tight text-gray-900 dark:text-gray-100">18.5
                                    </dd>
                                </div>

                                <div class="flex flex-col-reverse gap-y-4">
                                    <dt class="text-base leading-7 text-gray-600 dark:text-gray-400">Users every year</dt>
                                    <dd class="text-5xl font-semibold tracking-tight text-gray-900 dark:text-gray-100">
                                        600,000
                                    </dd>
                                </div>

                                <div class="flex flex-col-reverse gap-y-4">
                                    <dt class="text-base leading-7 text-gray-600 dark:text-gray-400"></dt>
                                    <dd class="text-5xl font-semibold tracking-tight text-gray-900 dark:text-gray-100">
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="bg-white dark:bg-gray-800">
                <div class="mx-auto container max-w-7xl py-24 sm:px-6 sm:py-16 lg:px-8">
                    <div class="px-6 py-24 text-center">
                        <h2
                            class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">
                            Looking to purchase an eBike?</h2>
                        <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-900 dark:text-gray-300">Visit eBikes and
                            Cycles to test ride and buy the ideal bike for your ride on the Legacy Trail.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="https://www.ebikesandcycles.com/" target="_blank"
                                class="rounded-md px-3.5 py-2.5 text-sm font-semibold shadow-sm bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                                started</a>
                            {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-800 dark:text-gray-300">Learn more <span aria-hidden="true">→</span></a> --}}
                        </div>
                        {{-- <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
                  <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7" />
                  <defs>
                    <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
                      <stop stop-color="#7775D6" />
                      <stop offset="1" stop-color="#E935C1" />
                    </radialGradient>
                  </defs>
                </svg> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
