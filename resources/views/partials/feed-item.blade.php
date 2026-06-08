<li class="flex items-start gap-4 not-first:pt-2.5">
    <a href="/profile" class="shrink-0">
        <img src="{{ $item->profile->avatar }}" alt="Avatar of {{ $item->profile->name }}" class="size-10 object-cover" />
    </a>
    <div class="grow pt-1.5">
        <div class="border-pixl-light/10 border-b pb-5">
            <!-- User meta -->
            <div class="flex items-center justify-between gap-4">
                <div class="flex items-center gap-2.5">
                    <p><a class="hover:underline" href="/profile">{{ $item->profile->name }}</a></p>
                    <p class="text-pixl-light/40 text-xs">{{ $item->postedDateTime }}</p>
                    <p class="text-pixl-light/40 text-xs">
                        <a class="hover:text-pixl-light/60" href="/profile">{{ $item->profile->handle }}</a>
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
                                id="Chat-Bubble-Typing-Oval--Streamline-Core-Remix" height="14" width="14"
                                class="w-3">
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.835 -0.835 20 20" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                id="Repeat--Streamline-Lucide" height="20" width="20" class="w-5">
                                <desc>
                                    Repeat Streamline Icon: https://streamlinehq.com
                                </desc>
                                <path d="m12.98375 1.5275 3.055 3.055 -3.055 3.055" stroke-width="1.67">
                                </path>
                                <path
                                    d="M2.2912500000000002 8.401250000000001v-0.76375a3.055 3.055 0 0 1 3.055 -3.055h10.6925"
                                    stroke-width="1.67"></path>
                                <path d="m5.34625 16.802500000000002 -3.055 -3.055 3.055 -3.055" stroke-width="1.67">
                                </path>
                                <path d="M16.03875 9.92875v0.76375a3.055 3.055 0 0 1 -3.055 3.055H2.2912500000000002"
                                    stroke-width="1.67"></path>
                            </svg>
                        </button>
                        <span class="text-sm">23</span>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="flex items-center gap-1">
                        <button aria-label="Save">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.585 -0.585 14 14" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                id="Bookmark--Streamline-Lucide" height="14" width="14" class="w-3.5">
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.585 -0.585 14 14" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                id="Share-2--Streamline-Lucide" height="14" width="14" class="w-3.5">
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
                                <path d="m4.5920708333333335 7.222220833333334 3.651204166666667 2.127641666666667"
                                    stroke-width="1.17"></path>
                                <path d="m8.237929166666667 3.4801375000000005 -3.645858333333334 2.127641666666667"
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

                @include('partials.post-form', [
                    'labelText' => 'Reply body',
                    'fieldName' => 'reply',
                    'placeholder' => 'Reply to this post',
                    'rows' => 5,
                ])

            </div>
        </div>

        <!-- Threaded replies -->
        <ol class="">
            <!-- Reply -->
            <li class="group/li relative flex items-start gap-4 pt-4">
                <!-- Line through -->
                <div aria-hidden="true" class="bg-pixl-light/10 absolute top-0 left-5 h-full w-px group-last/li:h-4">
                </div>
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
                                <span class="text-sm">6</span>
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
                                <span class="text-sm">1</span>
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
                                        <path d="m12.98375 1.5275 3.055 3.055 -3.055 3.055" stroke-width="1.67"></path>
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
                </div>
            </li>
            <!-- More replies... -->
        </ol>
    </div>
</li>
