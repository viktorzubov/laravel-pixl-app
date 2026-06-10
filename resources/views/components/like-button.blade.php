<div class="flex items-center gap-1">
    <button aria-label="Like" @class(['hover:text-pixl', 'text-pixl' => $active])>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="Heart--Streamline-Core-Remix"
            class="w-3">
            <desc>
                Heart Streamline Icon: https://streamlinehq.com
            </desc>
            <g id="Free Remix/Interface Essential/heart--reward-social-rating-media-heart-it-like-favorite-love"
                fill="currentColor">
                <path id="Vector" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="1.25"
                    d="M6.99153 12.3947 1.59688 7.39986c-2.94009 -2.95637 1.34866 -8.68013 5.39465 -4.04982 4.04597 -4.61681 8.37517 1.10695 5.39467 4.04982L6.99153 12.3947Z">
                </path>
            </g>
        </svg>
    </button>
    <span @class(['text-pixl' => $active]) class="text-sm">{{ $count }}</span>
</div>
