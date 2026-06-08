<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="color-scheme" content="dark" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Feed | Pixl</title>
</head>

<body class="bg-pixl-dark text-pixl-light flex gap-8 px-4 sm:h-dvh sm:overflow-clip xl:gap-16">
    <!-- Navigation -->
    <header class="my-4 ml-48 hidden shrink-0 flex-col justify-between gap-8 pl-4 sm:flex xl:w-40">
        <div class="overflow-y-auto">
            <!-- Logo -->
            <a href="/">
                <svg class="h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 182 61" fill="none">
                    <path fill="#EEE" d="M10.083 0H0v10.083h10.083V0Zm10.084 0H10.084v10.083h10.083V0Z"></path>
                    <path fill="#EEE"
                        d="M30.25 0H20.165v10.083h10.083V0ZM10.083 10.083H0v10.084h10.083V10.083Zm30.25 0H30.25v10.084h10.083V10.083Zm-30.25 10.084H0V30.25h10.083V20.167Zm30.25 0H30.25V30.25h10.083V20.167ZM10.083 30.25H0v10.083h10.083V30.25Zm10.084 0H10.084v10.083h10.083V30.25Z">
                    </path>
                    <path fill="#EEE"
                        d="M30.25 30.25H20.165v10.083h10.083V30.25ZM10.083 40.333H0v10.084h10.083V40.333Zm0 10.084H0V60.5h10.083V50.417ZM60.5 0H50.415v10.083h10.083V0Zm10.083 0H60.5v10.083h10.083V0Zm10.084 0H70.584v10.083h10.083V0ZM70.583 10.083H60.5v10.084h10.083V10.083Zm0 10.084H60.5V30.25h10.083V20.167Zm0 10.083H60.5v10.083h10.083V30.25Zm0 10.083H60.5v10.084h10.083V40.333Zm0 10.084H60.5V60.5h10.083V50.417ZM60.5 50.416H50.415V60.5h10.083V50.416Zm20.167 0H70.584V60.5h10.083V50.416Z">
                    </path>
                    <path fill="#ECA749"
                        d="M100.833 0H90.75v10.083h10.083V0Zm0 10.083H90.75v10.084h10.083V10.083ZM131.083 0H121v10.083h10.083V0Zm0 10.083H121v10.084h10.083V10.083Zm-30.25 30.25H90.75v10.084h10.083V40.333Zm0 10.084H90.75V60.5h10.083V50.417Zm30.25-10.084H121v10.084h10.083V40.333Zm0 10.084H121V60.5h10.083V50.417ZM110.917 30.25h-10.083v10.083h10.083V30.25Zm10.082-10.084h-10.083V30.25h10.083V20.166Z">
                    </path>
                    <path fill="#ECA749"
                        d="M110.917 20.166h-10.083V30.25h10.083V20.166Zm10.082 10.084h-10.083v10.083h10.083V30.25Z">
                    </path>
                    <path fill="#EEE" d="M151.249 0h-10.083v10.083h10.083V0Zm0 10.084h-10.083v10.083h10.083V10.083Z">
                    </path>
                    <path fill="#EEE"
                        d="M151.249 20.166h-10.083V30.25h10.083V20.166Zm0 10.084h-10.083v10.083h10.083V30.25Zm0 10.084h-10.083v10.083h10.083V40.333Z">
                    </path>
                    <path fill="#EEE"
                        d="M151.249 50.416h-10.083V60.5h10.083V50.416Zm10.084.001H151.25V60.5h10.083V50.417Zm10.084-.001h-10.083V60.5h10.083V50.416Z">
                    </path>
                    <path fill="#EEE" d="M181.499 50.416h-10.083V60.5h10.083V50.416Z"></path>
                </svg>
            </a>
            <!-- Navigation links -->
            <nav class="mt-10">
                <ul class="flex flex-col gap-4">
                    <li><a class="hover:underline" href="#">Home</a></li>
                    <li><a class="hover:underline" href="#">Explore</a></li>
                    <li class="-ml-4 flex items-center gap-2">
                        <div class="bg-pixl size-2 shrink-0"></div>
                        <a class="hover:underline" href="#">Notifications</a>
                    </li>
                    <li><a class="hover:underline" href="#">Messages</a></li>
                    <li><a class="hover:underline" href="#">Lists</a></li>
                    <li><a class="hover:underline" href="#">Bookmarks</a></li>
                    <li><a class="hover:underline" href="#">Profile</a></li>
                    <li><a class="hover:underline" href="#">Jobs</a></li>
                    <li><a class="hover:underline" href="#">Communities</a></li>
                </ul>
            </nav>
        </div>
        <!-- User profile and actions -->
        <div class="flex gap-3.5">
            <a href="/profile" class="shrink-0">
                <img src="/images/adrian.png" alt="Adrian's profile picture" class="size-11 object-cover" />
            </a>
            <div class="flex flex-col gap-1 text-sm">
                <p>_adrian</p>
                <p class="text-pixl-light/60">@tudssss</p>
            </div>
            <button class="group flex gap-0.75 py-2" aria-label="More options">
                <span class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"></span>
                <span class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"></span>
                <span class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"></span>
            </button>
        </div>
    </header>
    <!-- Main Content -->
    <main class="-mx-4 flex grow flex-col gap-4 overflow-y-auto px-4 py-4">
        <div class="h-full">
            <nav class="overflow-x-auto [scrollbar-width:none]">
                <ul class="flex min-w-max justify-end gap-8 text-sm">
                    <li><a href="#">For you</a></li>
                    <li>
                        <a class="text-pixl-light/60 hover:text-pixl-light/80" href="#">Idea streams</a>
                    </li>
                    <li>
                        <a class="text-pixl-light/60 hover:text-pixl-light/80" href="#">Following</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Post prompt -->
        <div class="border-pixl-light/10 mt-8 flex items-start gap-4 border-b pb-4">
            <a href="/profile" class="shrink-0">
                <img class="size-10 object-cover" src="/images/adrian.png" alt="Avatar of Adrian" />
            </a>
            <form class="grow" action="">
                <label class="sr-only" for="post">Post body</label>
                <textarea name="post" id="post" placeholder="What's on your mind?" class="w-full resize-none text-lg"></textarea>
                <div class="flex items-center justify-between gap-4">
                    <div class="flex gap-4">
                        <button type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="none" viewBox="0 0 24 19">
                                <g fill="#EEE" clip-path="url(#a)">
                                    <path
                                        d="M1.598 1.584h-1.6v1.584h1.6V1.584ZM3.196 0h-1.6v1.584h1.6V0Zm1.601 0h-1.6v1.584h1.6V0ZM6.4 0H4.8v1.584h1.6V0ZM8 0H6.4v1.584H8V0Z" />
                                    <path d="M9.598 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Z" />
                                    <path
                                        d="M12.794 0h-1.6v1.584h1.6V0ZM14.4 0h-1.6v1.584h1.6V0ZM16 0h-1.6v1.584H16V0Zm1.6 0H16v1.584h1.6V0ZM3.196 12.668h-1.6v1.583h1.6v-1.583Zm1.601-1.584h-1.6v1.584h1.6v-1.584ZM6.4 9.5H4.8v1.584h1.6V9.501ZM8 11.084H6.4v1.584H8v-1.584Zm1.598 1.584h-1.6v1.583h1.6v-1.583Zm1.6-1.584h-1.6v1.584h1.6v-1.584ZM12.794 9.5h-1.6v1.584h1.6V9.501ZM14.4 7.917h-1.6V9.5h1.6V7.917ZM16 6.333h-1.6v1.584H16V6.333Zm1.6 1.584H16V9.5h1.6V7.917ZM19.196 9.5h-1.6v1.584h1.6V9.501Zm1.6 1.584h-1.6v1.584h1.6v-1.584Zm1.604 1.584h-1.6v1.583h1.6v-1.583Z" />
                                    <path d="M19.196 0h-1.6v1.584h1.6V0Z" />
                                    <path
                                        d="M20.796 0h-1.6v1.584h1.6V0ZM22.4 0h-1.6v1.584h1.6V0ZM1.598 3.168h-1.6V4.75h1.6V3.168Zm0 1.584h-1.6v1.583h1.6V4.752Z" />
                                    <path
                                        d="M1.598 6.333h-1.6v1.584h1.6V6.333Zm0 1.584h-1.6V9.5h1.6V7.917Zm0 1.583h-1.6v1.584h1.6V9.501Zm0 1.584h-1.6v1.584h1.6v-1.584Zm0 1.584h-1.6v1.583h1.6v-1.583Z" />
                                    <path d="M1.598 14.25h-1.6v1.584h1.6V14.25Z" />
                                    <path
                                        d="M1.598 15.834h-1.6v1.583h1.6v-1.583Zm22.403-14.25h-1.6v1.584h1.6V1.584Zm0 1.584h-1.6V4.75h1.6V3.168Zm0 1.584h-1.6v1.583h1.6V4.752Z" />
                                    <path
                                        d="M24.001 6.333h-1.6v1.584h1.6V6.333Zm0 1.584h-1.6V9.5h1.6V7.917Zm0 1.583h-1.6v1.584h1.6V9.501Zm0 1.584h-1.6v1.584h1.6v-1.584Zm0 1.584h-1.6v1.583h1.6v-1.583Z" />
                                    <path d="M24.001 14.25h-1.6v1.584h1.6V14.25Z" />
                                    <path
                                        d="M24.001 15.834h-1.6v1.583h1.6v-1.583ZM3.196 17.418h-1.6V19h1.6v-1.583Zm1.601 0h-1.6V19h1.6v-1.583Zm1.603 0H4.8V19h1.6v-1.583Zm1.6 0H6.4V19H8v-1.583Z" />
                                    <path d="M9.598 17.418h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Z" />
                                    <path
                                        d="M12.794 17.418h-1.6V19h1.6v-1.583Zm1.606 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19H16v-1.583Zm1.6 0H16V19h1.6v-1.583Z" />
                                    <path d="M19.196 17.418h-1.6V19h1.6v-1.583Z" />
                                    <path
                                        d="M20.796 17.418h-1.6V19h1.6v-1.583Zm1.604 0h-1.6V19h1.6v-1.583ZM8 4.752H6.4v1.583H8V4.752Zm1.598-1.584h-1.6V4.75h1.6V3.168Zm1.6 1.584h-1.6v1.583h1.6V4.752Z" />
                                    <path d="M9.598 6.333h-1.6v1.584h1.6V6.333Z" />
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="#fff" d="M0 0h24v19H0z" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                        <button type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-6" viewBox="0 0 24 19">
                                <g fill="#EEE" clip-path="url(#a)">
                                    <path
                                        d="M1.602 1.584h-1.6v1.584h1.6V1.584ZM3.202 0h-1.6v1.584h1.6V0Zm1.601 0h-1.6v1.584h1.6V0Z" />
                                    <path d="M6.403 0h-1.6v1.584h1.6V0Z" />
                                    <path
                                        d="M8.001 0h-1.6v1.584h1.6V0Zm1.601 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Zm1.601 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Z" />
                                    <path d="M19.203 0h-1.6v1.584h1.6V0Z" />
                                    <path d="M20.8 0h-1.6v1.584h1.6V0Z" />
                                    <path d="M22.4 0h-1.6v1.584h1.6V0ZM1.602 3.167h-1.6v1.584h1.6V3.167Z" />
                                    <path
                                        d="M1.602 4.75h-1.6v1.584h1.6V4.751Zm0 1.584h-1.6v1.583h1.6V6.334Zm0 1.584h-1.6V9.5h1.6V7.918Zm0 1.582h-1.6v1.584h1.6V9.5Z" />
                                    <path
                                        d="M1.602 11.083h-1.6v1.584h1.6v-1.584Zm0 1.584h-1.6v1.583h1.6v-1.583Zm0 1.583h-1.6v1.583h1.6V14.25Zm0 1.584h-1.6v1.583h1.6v-1.583ZM24 1.584h-1.6v1.583H24V1.584Zm0 1.583h-1.6v1.584H24V3.167Z" />
                                    <path
                                        d="M24 4.75h-1.6v1.584H24V4.751Zm0 1.584h-1.6v1.583H24V6.334Zm0 1.583h-1.6v1.584H24V7.917Z" />
                                    <path
                                        d="M24 9.5h-1.6v1.584H24V9.5Zm0 1.584h-1.6v1.583H24v-1.583Zm0 1.583h-1.6v1.584H24v-1.584Z" />
                                    <path
                                        d="M24 14.25h-1.6v1.583H24V14.25Zm0 1.583h-1.6v1.584H24v-1.584ZM3.202 17.417h-1.6V19h1.6v-1.583Zm1.601 0h-1.6V19h1.6v-1.583Z" />
                                    <path d="M6.403 17.417h-1.6V19h1.6v-1.583Z" />
                                    <path
                                        d="M8.001 17.417h-1.6V19h1.6v-1.583Zm1.601 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Zm1.601 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Z" />
                                    <path d="M19.203 17.417h-1.6V19h1.6v-1.583Z" />
                                    <path d="M20.8 17.417h-1.6V19h1.6v-1.583Z" />
                                    <path
                                        d="M22.4 17.417h-1.6V19h1.6v-1.583ZM11.202 3.167h-1.6v1.584h1.6V3.167Zm-1.6 1.584h-1.6v1.583h1.6V4.751Zm0 1.583h-1.6v1.583h1.6V6.334Zm0 1.583h-1.6v1.584h1.6V7.917Z" />
                                    <path
                                        d="M9.602 9.5h-1.6v1.584h1.6V9.5Zm0 1.584h-1.6v1.583h1.6v-1.583Zm0 1.583h-1.6v1.584h1.6v-1.584Zm1.6 1.583h-1.6v1.583h1.6V14.25Zm6.401-6.333h-1.6v1.584h1.6V7.917Z" />
                                    <path
                                        d="M17.603 9.5h-1.6v1.584h1.6V9.5Zm-1.6-3.166h-1.6v1.583h1.6V6.334ZM14.402 4.75h-1.6v1.584h1.6V4.751Zm-1.6-1.583h-1.6v1.584h1.6V3.167Zm3.201 7.917h-1.6v1.583h1.6v-1.583Zm-1.601 1.583h-1.6v1.584h1.6v-1.584Zm-1.6 1.583h-1.6v1.583h1.6V14.25Z" />
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="#fff" d="M0 0h24v19H0z" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </div>
                    <button
                        class="bg-pixl hover:bg-pixl/90 active:bg-pixl/95 text-pixl-dark border border-transparent px-4 py-1 text-sm"
                        type="button">
                        Post
                    </button>
                </div>
            </form>
        </div>

        <!-- Feed -->
        <ol class="mt-4">
            <!-- Feed item -->
            <li class="flex items-start gap-4 not-first:pt-2.5">
                <a href="/profile" class="shrink-0">
                    <img src="/images/michael.png" alt="Avatar of Michael" class="size-10 object-cover" />
                </a>
                <div class="grow pt-1.5">
                    <div class="border-pixl-light/10 border-b pb-5">
                        <!-- User meta -->
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-2.5">
                                <p><a class="hover:underline" href="/profile">Michael</a></p>
                                <p class="text-pixl-light/40 text-xs">3h</p>
                                <p class="text-pixl-light/40 text-xs">
                                    <a class="hover:text-pixl-light/60" href="/profile">@michael</a>
                                </p>
                            </div>
                            <button class="group flex gap-0.75 py-2" aria-label="More options">
                                <span class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"></span>
                                <span class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"></span>
                                <span class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"></span>
                            </button>
                        </div>
                        <!-- Post content -->
                        <div class="[&_a]:text-pixl mt-4 flex flex-col gap-3 text-sm [&_a]:hover:underline">
                            <p>
                                I made this!
                                <a href="#">#myartwork</a>
                                <a href="#">#pixl</a>
                            </p>
                            <img src="/images/simon-chilling.png" alt="Simon Chilling's artwork" />
                        </div>

                        <!-- Post actions (like, comment, share) -->
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <div class="flex items-center gap-8">
                                <!-- Likes -->
                                <div class="flex items-center gap-1">
                                    <button aria-label="Like" class="hover:text-pixl">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                            id="Heart--Streamline-Core-Remix" class="w-3">
                                            <desc>
                                                Heart Streamline Icon: https://streamlinehq.com
                                            </desc>
                                            <g id="Free Remix/Interface Essential/heart--reward-social-rating-media-heart-it-like-favorite-love"
                                                fill="currentColor">
                                                <path id="Vector" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.25"
                                                    d="M6.99153 12.3947 1.59688 7.39986c-2.94009 -2.95637 1.34866 -8.68013 5.39465 -4.04982 4.04597 -4.61681 8.37517 1.10695 5.39467 4.04982L6.99153 12.3947Z">
                                                </path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span class="text-sm">23</span>
                                </div>
                                <!-- Comments -->
                                <div class="flex items-center gap-1">
                                    <button aria-label="Comments">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                            id="Chat-Bubble-Typing-Oval--Streamline-Core-Remix" height="14"
                                            width="14" class="w-3">
                                            <desc>
                                                Chat Bubble Typing Oval Streamline Icon:
                                                https://streamlinehq.com
                                            </desc>
                                            <g
                                                id="Free Remix/Mail/Mail/Chat Bubble/chat-bubble-typing-oval--messages-message-bubble-typing-chat">
                                                <path id="Union" fill="currentColor" fill-rule="evenodd"
                                                    d="M1.24903 6.9999c0 -3.17619 2.57479 -5.751 5.75095 -5.751 3.17612 0 5.75092 2.57481 5.75092 5.751 0 3.1762 -2.5748 5.751 -5.75092 5.751 -0.88497 0 -1.72167 -0.1995 -2.46907 -0.5554 -0.12633 -0.0774 -0.28051 -0.1105 -0.43779 -0.0821l-0.00513 0.001 -0.00005 0 -2.4914 0.4505 0.68071 -1.8111 0.00001 0 0.00102 -0.0027c0.08014 -0.2133 0.03618 -0.4428 -0.09588 -0.6091 -0.59023 -0.90291 -0.93337 -1.98151 -0.93337 -3.1421Zm5.75095 7.001c-1.02789 0 -2.0055 -0.2219 -2.88622 -0.6209l-3.378517 0.6109c-0.221356 0.04 -0.447146 -0.042 -0.591212 -0.2147 -0.1440659664 -0.1728 -0.1841815 -0.4097 -0.1050391 -0.6202l0.9586831 -2.5507C0.363683 9.5519 -0.000967839 8.31768 -0.000967839 6.9999c0 -3.86654 3.134427839 -7.00099863 7.000947839 -7.00099863S14.0009 3.13336 14.0009 6.9999c0 3.8665 -3.1344 7.001 -7.00092 7.001ZM4.25193 8c-0.55228 0 -1 -0.44772 -1 -1s0.44772 -1 1 -1c0.55229 0 1 0.44772 1 1s-0.44771 1 -1 1Zm3.75 -1c0 -0.55228 -0.44771 -1 -1 -1 -0.55228 0 -1 0.44772 -1 1s0.44772 1 1 1c0.55229 0 1 -0.44772 1 -1Zm1.75 1c-0.55228 0 -1 -0.44772 -1 -1s0.44772 -1 1 -1c0.55227 0 0.99997 0.44772 0.99997 1s-0.4477 1 -0.99997 1Z"
                                                    clip-rule="evenodd" stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span class="text-sm">23</span>
                                </div>
                                <!-- Share -->
                                <div class="flex items-center gap-1">
                                    <button aria-label="Re-posts">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.835 -0.835 20 20"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" id="Repeat--Streamline-Lucide" height="20"
                                            width="20" class="w-5">
                                            <desc>
                                                Repeat Streamline Icon: https://streamlinehq.com
                                            </desc>
                                            <path d="m12.98375 1.5275 3.055 3.055 -3.055 3.055" stroke-width="1.67">
                                            </path>
                                            <path
                                                d="M2.2912500000000002 8.401250000000001v-0.76375a3.055 3.055 0 0 1 3.055 -3.055h10.6925"
                                                stroke-width="1.67"></path>
                                            <path d="m5.34625 16.802500000000002 -3.055 -3.055 3.055 -3.055"
                                                stroke-width="1.67"></path>
                                            <path
                                                d="M16.03875 9.92875v0.76375a3.055 3.055 0 0 1 -3.055 3.055H2.2912500000000002"
                                                stroke-width="1.67"></path>
                                        </svg>
                                    </button>
                                    <span class="text-sm">23</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1">
                                    <button aria-label="Save">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.585 -0.585 14 14"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" id="Bookmark--Streamline-Lucide" height="14"
                                            width="14" class="w-3.5">
                                            <desc>
                                                Bookmark Streamline Icon: https://streamlinehq.com
                                            </desc>
                                            <path
                                                d="m10.157083333333334 11.226250000000002 -3.742083333333334 -2.1383333333333336 -3.742083333333334 2.1383333333333336V2.672916666666667a1.0691666666666668 1.0691666666666668 0 0 1 1.0691666666666668 -1.0691666666666668h5.345833333333334a1.0691666666666668 1.0691666666666668 0 0 1 1.0691666666666668 1.0691666666666668v8.553333333333335z"
                                                stroke-width="1.17"></path>
                                        </svg>
                                    </button>
                                    <span class="text-pixl-light/40 text-sm">Save</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <button aria-label="Share">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.585 -0.585 14 14"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" id="Share-2--Streamline-Lucide" height="14"
                                            width="14" class="w-3.5">
                                            <desc>
                                                Share 2 Streamline Icon: https://streamlinehq.com
                                            </desc>
                                            <path
                                                d="M8.01875 2.672916666666667a1.6037500000000002 1.6037500000000002 0 1 0 3.2075000000000005 0 1.6037500000000002 1.6037500000000002 0 1 0 -3.2075000000000005 0"
                                                stroke-width="1.17"></path>
                                            <path
                                                d="M1.6037500000000002 6.415000000000001a1.6037500000000002 1.6037500000000002 0 1 0 3.2075000000000005 0 1.6037500000000002 1.6037500000000002 0 1 0 -3.2075000000000005 0"
                                                stroke-width="1.17"></path>
                                            <path
                                                d="M8.01875 10.157083333333334a1.6037500000000002 1.6037500000000002 0 1 0 3.2075000000000005 0 1.6037500000000002 1.6037500000000002 0 1 0 -3.2075000000000005 0"
                                                stroke-width="1.17"></path>
                                            <path
                                                d="m4.5920708333333335 7.222220833333334 3.651204166666667 2.127641666666667"
                                                stroke-width="1.17"></path>
                                            <path
                                                d="m8.237929166666667 3.4801375000000005 -3.645858333333334 2.127641666666667"
                                                stroke-width="1.17"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Reply Form-->
                        <div class="border-pixl-light/10 bg-pixl-light/3 mt-8 flex items-start gap-4 border-t p-4">
                            <a href="/profile" class="shrink-0">
                                <img class="size-10 object-cover" src="/images/adrian.png" alt="Avatar of Adrian" />
                            </a>
                            <form class="grow" action="">
                                <label class="sr-only" for="reply">reply body</label>
                                <textarea name="reply" id="reply" placeholder="Reply to this post" class="w-full resize-none text-sm"
                                    rows="5"></textarea>
                                <div class="flex items-center justify-between gap-4">
                                    <div class="flex gap-4">
                                        <button type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="none"
                                                viewBox="0 0 24 19">
                                                <g fill="#EEE" clip-path="url(#a)">
                                                    <path
                                                        d="M1.598 1.584h-1.6v1.584h1.6V1.584ZM3.196 0h-1.6v1.584h1.6V0Zm1.601 0h-1.6v1.584h1.6V0ZM6.4 0H4.8v1.584h1.6V0ZM8 0H6.4v1.584H8V0Z" />
                                                    <path d="M9.598 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Z" />
                                                    <path
                                                        d="M12.794 0h-1.6v1.584h1.6V0ZM14.4 0h-1.6v1.584h1.6V0ZM16 0h-1.6v1.584H16V0Zm1.6 0H16v1.584h1.6V0ZM3.196 12.668h-1.6v1.583h1.6v-1.583Zm1.601-1.584h-1.6v1.584h1.6v-1.584ZM6.4 9.5H4.8v1.584h1.6V9.501ZM8 11.084H6.4v1.584H8v-1.584Zm1.598 1.584h-1.6v1.583h1.6v-1.583Zm1.6-1.584h-1.6v1.584h1.6v-1.584ZM12.794 9.5h-1.6v1.584h1.6V9.501ZM14.4 7.917h-1.6V9.5h1.6V7.917ZM16 6.333h-1.6v1.584H16V6.333Zm1.6 1.584H16V9.5h1.6V7.917ZM19.196 9.5h-1.6v1.584h1.6V9.501Zm1.6 1.584h-1.6v1.584h1.6v-1.584Zm1.604 1.584h-1.6v1.583h1.6v-1.583Z" />
                                                    <path d="M19.196 0h-1.6v1.584h1.6V0Z" />
                                                    <path
                                                        d="M20.796 0h-1.6v1.584h1.6V0ZM22.4 0h-1.6v1.584h1.6V0ZM1.598 3.168h-1.6V4.75h1.6V3.168Zm0 1.584h-1.6v1.583h1.6V4.752Z" />
                                                    <path
                                                        d="M1.598 6.333h-1.6v1.584h1.6V6.333Zm0 1.584h-1.6V9.5h1.6V7.917Zm0 1.583h-1.6v1.584h1.6V9.501Zm0 1.584h-1.6v1.584h1.6v-1.584Zm0 1.584h-1.6v1.583h1.6v-1.583Z" />
                                                    <path d="M1.598 14.25h-1.6v1.584h1.6V14.25Z" />
                                                    <path
                                                        d="M1.598 15.834h-1.6v1.583h1.6v-1.583Zm22.403-14.25h-1.6v1.584h1.6V1.584Zm0 1.584h-1.6V4.75h1.6V3.168Zm0 1.584h-1.6v1.583h1.6V4.752Z" />
                                                    <path
                                                        d="M24.001 6.333h-1.6v1.584h1.6V6.333Zm0 1.584h-1.6V9.5h1.6V7.917Zm0 1.583h-1.6v1.584h1.6V9.501Zm0 1.584h-1.6v1.584h1.6v-1.584Zm0 1.584h-1.6v1.583h1.6v-1.583Z" />
                                                    <path d="M24.001 14.25h-1.6v1.584h1.6V14.25Z" />
                                                    <path
                                                        d="M24.001 15.834h-1.6v1.583h1.6v-1.583ZM3.196 17.418h-1.6V19h1.6v-1.583Zm1.601 0h-1.6V19h1.6v-1.583Zm1.603 0H4.8V19h1.6v-1.583Zm1.6 0H6.4V19H8v-1.583Z" />
                                                    <path
                                                        d="M9.598 17.418h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Z" />
                                                    <path
                                                        d="M12.794 17.418h-1.6V19h1.6v-1.583Zm1.606 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19H16v-1.583Zm1.6 0H16V19h1.6v-1.583Z" />
                                                    <path d="M19.196 17.418h-1.6V19h1.6v-1.583Z" />
                                                    <path
                                                        d="M20.796 17.418h-1.6V19h1.6v-1.583Zm1.604 0h-1.6V19h1.6v-1.583ZM8 4.752H6.4v1.583H8V4.752Zm1.598-1.584h-1.6V4.75h1.6V3.168Zm1.6 1.584h-1.6v1.583h1.6V4.752Z" />
                                                    <path d="M9.598 6.333h-1.6v1.584h1.6V6.333Z" />
                                                </g>
                                                <defs>
                                                    <clipPath id="a">
                                                        <path fill="#fff" d="M0 0h24v19H0z" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                        <button type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-6"
                                                viewBox="0 0 24 19">
                                                <g fill="#EEE" clip-path="url(#a)">
                                                    <path
                                                        d="M1.602 1.584h-1.6v1.584h1.6V1.584ZM3.202 0h-1.6v1.584h1.6V0Zm1.601 0h-1.6v1.584h1.6V0Z" />
                                                    <path d="M6.403 0h-1.6v1.584h1.6V0Z" />
                                                    <path
                                                        d="M8.001 0h-1.6v1.584h1.6V0Zm1.601 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Zm1.601 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Z" />
                                                    <path d="M19.203 0h-1.6v1.584h1.6V0Z" />
                                                    <path d="M20.8 0h-1.6v1.584h1.6V0Z" />
                                                    <path
                                                        d="M22.4 0h-1.6v1.584h1.6V0ZM1.602 3.167h-1.6v1.584h1.6V3.167Z" />
                                                    <path
                                                        d="M1.602 4.75h-1.6v1.584h1.6V4.751Zm0 1.584h-1.6v1.583h1.6V6.334Zm0 1.584h-1.6V9.5h1.6V7.918Zm0 1.582h-1.6v1.584h1.6V9.5Z" />
                                                    <path
                                                        d="M1.602 11.083h-1.6v1.584h1.6v-1.584Zm0 1.584h-1.6v1.583h1.6v-1.583Zm0 1.583h-1.6v1.583h1.6V14.25Zm0 1.584h-1.6v1.583h1.6v-1.583ZM24 1.584h-1.6v1.583H24V1.584Zm0 1.583h-1.6v1.584H24V3.167Z" />
                                                    <path
                                                        d="M24 4.75h-1.6v1.584H24V4.751Zm0 1.584h-1.6v1.583H24V6.334Zm0 1.583h-1.6v1.584H24V7.917Z" />
                                                    <path
                                                        d="M24 9.5h-1.6v1.584H24V9.5Zm0 1.584h-1.6v1.583H24v-1.583Zm0 1.583h-1.6v1.584H24v-1.584Z" />
                                                    <path
                                                        d="M24 14.25h-1.6v1.583H24V14.25Zm0 1.583h-1.6v1.584H24v-1.584ZM3.202 17.417h-1.6V19h1.6v-1.583Zm1.601 0h-1.6V19h1.6v-1.583Z" />
                                                    <path d="M6.403 17.417h-1.6V19h1.6v-1.583Z" />
                                                    <path
                                                        d="M8.001 17.417h-1.6V19h1.6v-1.583Zm1.601 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Zm1.601 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Z" />
                                                    <path d="M19.203 17.417h-1.6V19h1.6v-1.583Z" />
                                                    <path d="M20.8 17.417h-1.6V19h1.6v-1.583Z" />
                                                    <path
                                                        d="M22.4 17.417h-1.6V19h1.6v-1.583ZM11.202 3.167h-1.6v1.584h1.6V3.167Zm-1.6 1.584h-1.6v1.583h1.6V4.751Zm0 1.583h-1.6v1.583h1.6V6.334Zm0 1.583h-1.6v1.584h1.6V7.917Z" />
                                                    <path
                                                        d="M9.602 9.5h-1.6v1.584h1.6V9.5Zm0 1.584h-1.6v1.583h1.6v-1.583Zm0 1.583h-1.6v1.584h1.6v-1.584Zm1.6 1.583h-1.6v1.583h1.6V14.25Zm6.401-6.333h-1.6v1.584h1.6V7.917Z" />
                                                    <path
                                                        d="M17.603 9.5h-1.6v1.584h1.6V9.5Zm-1.6-3.166h-1.6v1.583h1.6V6.334ZM14.402 4.75h-1.6v1.584h1.6V4.751Zm-1.6-1.583h-1.6v1.584h1.6V3.167Zm3.201 7.917h-1.6v1.583h1.6v-1.583Zm-1.601 1.583h-1.6v1.584h1.6v-1.584Zm-1.6 1.583h-1.6v1.583h1.6V14.25Z" />
                                                </g>
                                                <defs>
                                                    <clipPath id="a">
                                                        <path fill="#fff" d="M0 0h24v19H0z" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                    </div>
                                    <button
                                        class="bg-pixl/10 hover:bg-pixl/15 active:bg-pixl/20 text-pixl cursor-pointer border border-transparent px-4 py-1 text-sm"
                                        type="button">
                                        Post
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Threaded replies -->
                    <ol class="">
                        <!-- Reply -->
                        <li class="group/li relative flex items-start gap-4 pt-4">
                            <!-- Line through -->
                            <div aria-hidden="true"
                                class="bg-pixl-light/10 absolute top-0 left-5 h-full w-px group-last/li:h-4"></div>
                            <a href="/profile" class="isolate shrink-0">
                                <img src="/images/adelle.png" alt="Avatar of Alex" class="size-10 object-cover" />
                            </a>
                            <div class="border-pixl-light/10 grow border-b pt-1.5 pb-5">
                                <div class="flex items-center justify-between gap-4">
                                    <div class="flex items-center gap-2.5">
                                        <p>
                                            <a class="hover:underline" href="/profile">Alex</a>
                                        </p>
                                        <p class="text-pixl-light/40 text-xs">2h</p>
                                        <p class="text-pixl-light/40 text-xs">
                                            <a class="hover:text-pixl-light/60" href="/profile">@alex-in-paris</a>
                                        </p>
                                    </div>
                                    <button class="group flex gap-0.75 py-2" aria-label="More options">
                                        <span class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"></span>
                                        <span class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"></span>
                                        <span class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"></span>
                                    </button>
                                </div>
                                <div class="mt-4 flex flex-col gap-3 text-sm">
                                    <p>Lmao, I'm buying this I don't even care!</p>
                                </div>
                                <!-- Post actions (like, comment, share) -->
                                <div class="mt-6 flex items-center justify-between gap-4">
                                    <div class="flex items-center gap-8">
                                        <!-- Likes -->
                                        <div class="flex items-center gap-1">
                                            <button aria-label="Like" class="hover:text-pixl">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14" id="Heart--Streamline-Core-Remix"
                                                    class="w-3">
                                                    <desc>
                                                        Heart Streamline Icon: https://streamlinehq.com
                                                    </desc>
                                                    <g id="Free Remix/Interface Essential/heart--reward-social-rating-media-heart-it-like-favorite-love"
                                                        fill="currentColor">
                                                        <path id="Vector" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.25"
                                                            d="M6.99153 12.3947 1.59688 7.39986c-2.94009 -2.95637 1.34866 -8.68013 5.39465 -4.04982 4.04597 -4.61681 8.37517 1.10695 5.39467 4.04982L6.99153 12.3947Z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </button>
                                            <span class="text-sm">6</span>
                                        </div>
                                        <!-- Comments -->
                                        <div class="flex items-center gap-1">
                                            <button aria-label="Comments">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14"
                                                    id="Chat-Bubble-Typing-Oval--Streamline-Core-Remix" height="14"
                                                    width="14" class="w-3">
                                                    <desc>
                                                        Chat Bubble Typing Oval Streamline Icon:
                                                        https://streamlinehq.com
                                                    </desc>
                                                    <g
                                                        id="Free Remix/Mail/Mail/Chat Bubble/chat-bubble-typing-oval--messages-message-bubble-typing-chat">
                                                        <path id="Union" fill="currentColor" fill-rule="evenodd"
                                                            d="M1.24903 6.9999c0 -3.17619 2.57479 -5.751 5.75095 -5.751 3.17612 0 5.75092 2.57481 5.75092 5.751 0 3.1762 -2.5748 5.751 -5.75092 5.751 -0.88497 0 -1.72167 -0.1995 -2.46907 -0.5554 -0.12633 -0.0774 -0.28051 -0.1105 -0.43779 -0.0821l-0.00513 0.001 -0.00005 0 -2.4914 0.4505 0.68071 -1.8111 0.00001 0 0.00102 -0.0027c0.08014 -0.2133 0.03618 -0.4428 -0.09588 -0.6091 -0.59023 -0.90291 -0.93337 -1.98151 -0.93337 -3.1421Zm5.75095 7.001c-1.02789 0 -2.0055 -0.2219 -2.88622 -0.6209l-3.378517 0.6109c-0.221356 0.04 -0.447146 -0.042 -0.591212 -0.2147 -0.1440659664 -0.1728 -0.1841815 -0.4097 -0.1050391 -0.6202l0.9586831 -2.5507C0.363683 9.5519 -0.000967839 8.31768 -0.000967839 6.9999c0 -3.86654 3.134427839 -7.00099863 7.000947839 -7.00099863S14.0009 3.13336 14.0009 6.9999c0 3.8665 -3.1344 7.001 -7.00092 7.001ZM4.25193 8c-0.55228 0 -1 -0.44772 -1 -1s0.44772 -1 1 -1c0.55229 0 1 0.44772 1 1s-0.44771 1 -1 1Zm3.75 -1c0 -0.55228 -0.44771 -1 -1 -1 -0.55228 0 -1 0.44772 -1 1s0.44772 1 1 1c0.55229 0 1 -0.44772 1 -1Zm1.75 1c-0.55228 0 -1 -0.44772 -1 -1s0.44772 -1 1 -1c0.55227 0 0.99997 0.44772 0.99997 1s-0.4477 1 -0.99997 1Z"
                                                            clip-rule="evenodd" stroke-width="1"></path>
                                                    </g>
                                                </svg>
                                            </button>
                                            <span class="text-sm">1</span>
                                        </div>
                                        <!-- Share -->
                                        <div class="flex items-center gap-1">
                                            <button aria-label="Re-posts">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.835 -0.835 20 20"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" id="Repeat--Streamline-Lucide"
                                                    height="20" width="20" class="w-5">
                                                    <desc>
                                                        Repeat Streamline Icon: https://streamlinehq.com
                                                    </desc>
                                                    <path d="m12.98375 1.5275 3.055 3.055 -3.055 3.055"
                                                        stroke-width="1.67"></path>
                                                    <path
                                                        d="M2.2912500000000002 8.401250000000001v-0.76375a3.055 3.055 0 0 1 3.055 -3.055h10.6925"
                                                        stroke-width="1.67"></path>
                                                    <path d="m5.34625 16.802500000000002 -3.055 -3.055 3.055 -3.055"
                                                        stroke-width="1.67"></path>
                                                    <path
                                                        d="M16.03875 9.92875v0.76375a3.055 3.055 0 0 1 -3.055 3.055H2.2912500000000002"
                                                        stroke-width="1.67"></path>
                                                </svg>
                                            </button>
                                            <span class="text-sm">6</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="flex items-center gap-1">
                                            <button aria-label="Save">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.585 -0.585 14 14"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" id="Bookmark--Streamline-Lucide"
                                                    height="14" width="14" class="w-3.5">
                                                    <desc>
                                                        Bookmark Streamline Icon: https://streamlinehq.com
                                                    </desc>
                                                    <path
                                                        d="m10.157083333333334 11.226250000000002 -3.742083333333334 -2.1383333333333336 -3.742083333333334 2.1383333333333336V2.672916666666667a1.0691666666666668 1.0691666666666668 0 0 1 1.0691666666666668 -1.0691666666666668h5.345833333333334a1.0691666666666668 1.0691666666666668 0 0 1 1.0691666666666668 1.0691666666666668v8.553333333333335z"
                                                        stroke-width="1.17"></path>
                                                </svg>
                                            </button>
                                            <span class="text-pixl-light/40 text-sm">Save</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <button aria-label="Share">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.585 -0.585 14 14"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" id="Share-2--Streamline-Lucide"
                                                    height="14" width="14" class="w-3.5">
                                                    <desc>
                                                        Share 2 Streamline Icon: https://streamlinehq.com
                                                    </desc>
                                                    <path
                                                        d="M8.01875 2.672916666666667a1.6037500000000002 1.6037500000000002 0 1 0 3.2075000000000005 0 1.6037500000000002 1.6037500000000002 0 1 0 -3.2075000000000005 0"
                                                        stroke-width="1.17"></path>
                                                    <path
                                                        d="M1.6037500000000002 6.415000000000001a1.6037500000000002 1.6037500000000002 0 1 0 3.2075000000000005 0 1.6037500000000002 1.6037500000000002 0 1 0 -3.2075000000000005 0"
                                                        stroke-width="1.17"></path>
                                                    <path
                                                        d="M8.01875 10.157083333333334a1.6037500000000002 1.6037500000000002 0 1 0 3.2075000000000005 0 1.6037500000000002 1.6037500000000002 0 1 0 -3.2075000000000005 0"
                                                        stroke-width="1.17"></path>
                                                    <path
                                                        d="m4.5920708333333335 7.222220833333334 3.651204166666667 2.127641666666667"
                                                        stroke-width="1.17"></path>
                                                    <path
                                                        d="m8.237929166666667 3.4801375000000005 -3.645858333333334 2.127641666666667"
                                                        stroke-width="1.17"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- More replies... -->
                    </ol>
                </div>
            </li>
            <!-- More feed items... -->
        </ol>

        <footer class="mt-30 ml-14">
            <p class="text-center">Thank you for visiting Pixl!</p>
            <hr class="border-pixl-light/10 my-4" />
            <!-- Add any additional footer content here -->
            <div class="h-20 bg-[url('/images/white-noise.gif')]"></div>
        </footer>
    </main>
    <!-- Sidebar -->
    <aside class="-mx-4 my-4 hidden w-80 shrink-0 overflow-y-auto px-4 lg:block">
        <input type="text" placeholder="#Search an idea or pixel" class="w-full text-sm" />
        <hr class="border-pixl-light/10 mt-4" />
        <!-- Artists to follow -->
        <div class="border-pixl-light/10 mt-10 border p-4">
            <h2 class="text-pixl-light/60 text-sm">Artists to follow</h2>
            <ol class="mt-4 flex flex-col gap-4">
                <li class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-2.5">
                        <img class="size-8 object-cover" src="/images/alessia.png" alt="Avatar of Alessia" />
                        <p class="truncate text-sm">alessia_draws</p>
                    </div>
                    <button
                        class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 hover:border-pixl/75 text-pixl border px-2 py-1 text-sm">
                        Follow
                    </button>
                </li>
                <li class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-2.5">
                        <img class="size-8 object-cover" src="/images/anne.png" alt="Avatar of Anne" />
                        <p class="truncate text-sm">just_Anne</p>
                    </div>
                    <button
                        class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 hover:border-pixl/75 text-pixl border px-2 py-1 text-sm">
                        Follow
                    </button>
                </li>
                <li class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-2.5">
                        <img class="size-8 object-cover" src="/images/mr-anderson.png"
                            alt="Avatar of Mr. Anderson" />
                        <p class="truncate text-sm">Mr.Anderson</p>
                    </div>
                    <button
                        class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 hover:border-pixl/75 text-pixl border px-2 py-1 text-sm">
                        Follow
                    </button>
                </li>
                <li class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-2.5">
                        <img class="size-8 object-cover" src="/images/michael.png" alt="Avatar of Michael" />
                        <p class="truncate text-sm">Michael</p>
                    </div>
                    <button
                        class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 hover:border-pixl/75 text-pixl border px-2 py-1 text-sm">
                        Follow
                    </button>
                </li>
            </ol>
            <a href="#" class="text-pixl-light/60 mt-4 inline-block text-sm">Show more</a>
        </div>

        <!-- Follow idea streams -->
        <div class="border-pixl-light/10 mt-4 border p-4">
            <h2 class="text-pixl-light/60 text-sm">Follow idea streams</h2>
            <ol class="mt-4 flex flex-col gap-2.5">
                <li class="flex items-center justify-between gap-4">
                    <p class="truncate text-sm">Breakfast ideas and whatever</p>
                    <button
                        class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 hover:border-pixl/75 text-pixl border px-1.5 py-0.5 text-2xl leading-none">
                        +
                    </button>
                </li>
                <li class="flex items-center justify-between gap-4">
                    <p class="truncate text-sm">Breakfast ideas and whatever</p>
                    <button
                        class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 hover:border-pixl/75 text-pixl border px-1.5 py-0.5 text-2xl leading-none">
                        +
                    </button>
                </li>
                <li class="flex items-center justify-between gap-4">
                    <p class="truncate text-sm">Breakfast ideas and whatever</p>
                    <button
                        class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 hover:border-pixl/75 text-pixl border px-1.5 py-0.5 text-2xl leading-none">
                        +
                    </button>
                </li>
            </ol>
            <a href="#" class="text-pixl-light/60 mt-4 inline-block text-sm">Show more</a>
        </div>
    </aside>
</body>

</html>
