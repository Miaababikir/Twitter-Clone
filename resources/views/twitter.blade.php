<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="bg-grey-light font-sans">

<div class="bg-white">
    <div class="container mx-auto flex items-center py-4">
        <div class="w-2/5">
            <a class="top-nav-item" href="#"><i class="fa fa-home fa-lg"></i> Home</a>
            <a class="top-nav-item" href="#"><i class="fa fa-bolt fa-lg"></i> Moments</a>
            <a class="top-nav-item" href="#"><i class="fa fa-bell fa-lg"></i> Notifications</a>
            <a class="top-nav-item" href="#"><i class="fa fa-envelop fa-lg"></i> Messages</a>
        </div>
        <div class="w-1/5 text-center"><a href="#"><i class="fab fa-twitter fa-lg text-blue"></i></a></div>
        <div class="w-2/5 flex justify-end">
            <div class="mr-4 relative">
                <input class="bg-grey-lighter h-8 w-48 px-4 py-2 text-sm rounded-full" type="text"
                       placeholder="Search twitter">
                <span class="flex items-center absolute pin-r pin-y mr-3"><i class="fa fa-search text-grey"></i></span>
            </div>
            <div class="mr-4">
                <a href=""><img class="h-8 w-8 rounded-full border-2 border-solid border-grey-light"
                                src="https://pbs.twimg.com/profile_images/1112841636495720449/CwM9Txx2_normal.jpg"
                                alt="avatar"></a>
            </div>
            <div>
                <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Tweet</button>
            </div>
        </div>
        <div></div>
    </div>
</div>

<div class="hero h-112 bg-cover"></div>

<div class="bg-white shadow">
    <div class="container mx-auto flex items-center relative">
        <div class="w-1/4">
            <img class="rounded-full h-48 w-48 absolute pin-l pin-t -mt-24 border-white border-4 border-solid"
                 src="https://pbs.twimg.com/profile_images/1112841636495720449/CwM9Txx2_400x400.jpg" alt="">
        </div>
        <div class="w-1/2">
            <ul class="list-reset flex">
                <li class="text-center py-3 px-4 border-b-2 border-solid border-teal">
                    <a class="text-grey-darker text-teal" href="#">
                        <div class="text-sm font-bold tracking-tight mb-1">Tweets</div>
                        <div class="text-lg tracking-tight font-bold text-teal">60</div>
                    </a>
                </li>
                <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                    <a class="text-grey-darker hover:text-teal" href="#">
                        <div class="text-sm font-bold tracking-tight mb-1">Following</div>
                        <div class="text-lg tracking-tight font-bold">4</div>
                    </a>
                </li>
                <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                    <a class="text-grey-darker hover:text-teal" href="#">
                        <div class="text-sm font-bold tracking-tight mb-1">Followers</div>
                        <div class="text-lg tracking-tight font-bold">3,700</div>
                    </a>
                </li>
                <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                    <a class="text-grey-darker hover:text-teal" href="#">
                        <div class="text-sm font-bold tracking-tight mb-1">Likes</div>
                        <div class="text-lg tracking-tight font-bold">9</div>
                    </a>
                </li>
                <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                    <a class="text-grey-darker hover:text-teal" href="#">
                        <div class="text-sm font-bold tracking-tight mb-1">Moments</div>
                        <div class="text-lg tracking-tight font-bold">1</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-1/4 flex justify-end items-center">
            <div class="mr-4">
                <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Following
                </button>
            </div>
            <div>
                <a class="text-grey-dark" href=""><i class="fa fa-ellipsis-v fa-lg"></i></a>
            </div>
        </div>

    </div>
</div>

<div class="container mx-auto flex mt-3 text-sm leading-normal">
    <div class="w-1/4 pr-6 mt-8 mb-4">

        <h1><a class="text-black" href="#">Mosab Ibrahim</a></h1>

        <div class="mb-4"><a class="text-grey-darker" href="#">@miaababikir</a></div>

        <div class="mb-4">
            <p>Software engineer.. Web developer.. Clean coder.. In love with laravel..~</p>
        </div>

        <div class="mb-2"><i class="fa fa-link fa-lg text-grey-darker mr-1"></i> <a href="">omegateam.io</a></div>
        <div class="mb-2"><i class="fa fa-calendar-alt fa-lg text-grey-darker mr-1"></i> <a href="">Joined August 26</a>
        </div>

        <div class="mb-4">
            <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Tweet To Mosab
                Ibrahim
            </button>
        </div>

        <div class="mb-2"><i class="fa fa-user fa-lg text-grey-darker mr-1"></i> <a href="">17 Followers you know</a>
        </div>

        <div class="mb-4">
            <a href="#"><img
                    src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follower01.jpg"
                    alt="" class="rounded-full h-12 w-12"></a>
            <a href="#"><img
                    src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follower02.jpg"
                    alt="" class="rounded-full h-12 w-12"></a>
            <a href="#"><img
                    src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follower03.jpg"
                    alt="" class="rounded-full h-12 w-12"></a>
            <a href="#"><img
                    src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follower04.jpg"
                    alt="" class="rounded-full h-12 w-12"></a>
            <a href="#"><img
                    src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follower05.jpg"
                    alt="" class="rounded-full h-12 w-12"></a>
            <a href="#"><img
                    src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follower06.jpg"
                    alt="" class="rounded-full h-12 w-12"></a>
            <a href="#"><img
                    src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follower07.jpg"
                    alt="" class="rounded-full h-12 w-12"></a>
            <a href="#"><img
                    src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follower08.jpg"
                    alt="" class="rounded-full h-12 w-12"></a>
            <a href="#"><img
                    src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follower09.jpg"
                    alt="" class="rounded-full h-12 w-12"></a>
            <a href="#"><img
                    src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follower10.jpg"
                    alt="" class="rounded-full h-12 w-12"></a>
        </div>

        <div class="mb-4"><i class="fa fa-image fa-lg text-grey-darker mr-1"></i> <a href="#">Photos and videos</a>
        </div>

        <div class="mb-4">
            <a href="#"><img class="h-20 w-20 mr-1 mb-1"
                             src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/photo1.jpg"
                             alt=""></a>
            <a href="#"><img class="h-20 w-20 mr-1 mb-1"
                             src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/photo2.jpg"
                             alt=""></a>
            <a href="#"><img class="h-20 w-20 mr-1 mb-1"
                             src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/photo3.jpg"
                             alt=""></a>
            <a href="#"><img class="h-20 w-20 mr-1 mb-1"
                             src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/photo4.jpg"
                             alt=""></a>
            <a href="#"><img class="h-20 w-20 mr-1 mb-1"
                             src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/photo5.jpg"
                             alt=""></a>
        </div>

    </div>

    <div class="w-1/2 bg-white mb-4">
        <div class="p-3 text-lg font-bold border-b border-solid border-grey-light">
            <a class="text-black mr-6" href="#">Tweets</a>
            <a class="mr-6" href="#">Tweets &amp; Replies</a>
            <a href="#">Media</a>
        </div>

        <div class="flex border-b border-solid border-grey-light">
            <div class="w-1/6 text-right pl-3 pt-3">
                <div><i class="fa fa-thumbtack text-teal mr-2"></i></div>
                <div><a href="#"><img class="rounded-full h-12 w-12 mr-2"
                                      src="https://pbs.twimg.com/profile_images/1112841636495720449/CwM9Txx2_normal.jpg"
                                      alt=""></a></div>
            </div>

            <div class="w-5/6 p-3 pl-0">
                <div class="text-xs text-grey-darker">Pinned Tweets</div>
                <div class="flex justify-between">
                    <div>
                        <span class="font-bold"><a class="text-black" href="">Mosab Ibrahim</a></span>
                        <span class="text-grey-dark">@miaababikir</span>
                        <span class="text-grey-dark">&middot;</span>
                        <span class="text-grey-dark">12 April 2</span>
                    </div>
                    <div>
                        <a class="text-grey-dark hover:text-teal" href=""><i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>

                <div>
                    <div class="mb-4">
                        <p class="mb-6">🎉 Tailwind CSS v0.4.0 is out!</p>
                        <p class="mb-6">Makes `apply` more useful when using !important utilities, and includes an
                            improved default color palette:</p>
                        <p class="mb-4"><a href="#">github.com/tailwindcss/ta...</a></p>
                        <p><a href="#"><img
                                    src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/tweet1.jpg"
                                    alt="tweet image" class="border border-solid border-grey-light rounded-sm"></a></p>
                    </div>
                    <div class="pb-2">
                        <span class="mr-8"><a href="#"
                                              class="text-grey-dark hover:no-underline hover:text-blue-light"><i
                                    class="fa fa-comment fa-lg mr-2"></i> 9</a></span>
                        <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-green"><i
                                    class="fa fa-retweet fa-lg mr-2"></i> 29</a></span>
                        <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-red"><i
                                    class="fa fa-heart fa-lg mr-2"></i> 135</a></span>
                        <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-teal"><i
                                    class="fa fa-envelope fa-lg mr-2"></i></a></span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="w-1/4 pl-4">
        <div class="bg-white p-3 mb-3">
            <div>
                <span class="text-lg font-bold">Who to follow</span>
                <span>&middot;</span>
                <span><a class="text-xs" href="">Refresh</a></span>
                <span>&middot;</span>
                <span><a class="text-xs" href="">View All</a></span>
            </div>

            <div class="flex border-b border-solid border-grey-light">
                <div class="py-2">
                    <a href="#"><img
                            src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follow1.jpg"
                            alt="follow1" class="rounded-full h-12 w-12"></a>
                </div>
                <div class="pl-2 py-2 w-full">
                    <div class="flex justify-between mb-1">
                        <div>
                            <a href="#" class="font-bold text-black">Nuxt.js</a> <a href="#" class="text-grey-dark">@nuxt_js</a>
                        </div>

                        <div>
                            <a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div>
                        <button
                            class="bg-transparent text-xs hover:bg-teal text-teal font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">
                            Follow
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex border-b border-solid border-grey-light">
                <div class="py-2">
                    <a href="#"><img src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follow2.jpg" alt="follow1" class="rounded-full h-12 w-12"></a>
                </div>
                <div class="pl-2 py-2 w-full">
                    <div class="flex justify-between mb-1">
                        <div>
                            <a href="#" class="font-bold text-black">Laracon EU</a> <a href="#" class="text-grey-dark">@LaraconEU</a>
                        </div>

                        <div>
                            <a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div>
                        <button
                            class="bg-transparent text-xs hover:bg-teal text-teal font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">
                            Follow
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex border-b border-solid border-grey-light">
                <div class="py-2">
                    <a href="#"><img src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/follow3.jpg" alt="follow1" class="rounded-full h-12 w-12"></a>
                </div>
                <div class="pl-2 py-2 w-full">
                    <div class="flex justify-between mb-1">
                        <div>
                            <a href="#" class="font-bold text-black">Laracon US</a> <a href="#" class="text-grey-dark">@LaraconUS</a>
                        </div>

                        <div>
                            <a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div>
                        <button
                            class="bg-transparent text-xs hover:bg-teal text-teal font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">
                            Follow
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex border-b border-solid border-grey-light">
                <div class="py-4">
                    <a href="#" class=" p-1"><img src="https://raw.githubusercontent.com/drehimself/tailwind-examples/master/public/img/twitter/outlook.png" alt="follow1" class="rounded h-6 w-6"></a>
                </div>
                <div class="pl-2 py-2 w-full">
                    <div class="flex justify-between">
                        <div>
                            <a href="#" class="font-bold text-black">Find people you know</a>
                        </div>
                    </div>
                    <div class="text-xs">
                        Import your contacts from Outlook
                    </div>
                </div>
            </div>

            <div class="pt-2">
                <a href="#" class="text-xs">Connect other address book</a>
            </div>
        </div>

        <div class="bg-white p-3 mb-3">
            <div class="mb-3">
                <span class="text-lg font-bold">Trends for you</span>
                <span>&middot;</span>
                <span><a href="#" class="text-xs">Change</a></span>
            </div>

            <div class="mb-3 leading-tight">
                <div><a href="#" class="font-bold">Happy New Year</a></div>
                <div><a href="#" class="text-grey-dark text-xs">645K Tweets</a></div>
            </div>

            <div class="mb-3 leading-tight">
                <div><a href="#" class="font-bold">Happy 2018</a></div>
                <div><a href="#" class="text-grey-dark text-xs">NYE 2018 Celebrations</a></div>
            </div>

            <div class="mb-3 leading-tight">
                <div><a href="#" class="font-bold">#ByeBye2017</a></div>
                <div><a href="#" class="text-grey-dark text-xs">21.7K Tweets</a></div>
            </div>

            <div class="mb-3 leading-tight">
                <div><a href="#" class="font-bold">#SomeHashTag</a></div>
                <div><a href="#" class="text-grey-dark text-xs">45K Tweets</a></div>
            </div>

            <div class="mb-3 leading-tight">
                <div><a href="#" class="font-bold">Something Trending</a></div>
                <div><a href="#" class="text-grey-dark text-xs">36K Tweets</a></div>
            </div>

            <div class="mb-3 leading-tight">
                <div><a href="#" class="font-bold">#ColdAF</a></div>
                <div><a href="#" class="text-grey-dark text-xs">100K Tweets</a></div>
            </div>

        </div>

        <div class="mb-3 text-xs">
            <span class="mr-2"><a href="#" class="text-grey-darker">&copy; 2018 Twitter</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">About</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Help Center</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Terms</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Privacy policy</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Cookies</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Ads info</a></span>
        </div>

    </div>
</div>


</body>
</html>
