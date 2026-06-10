<div class="flex items-center gap-1">
    <button aria-label="Re-posts" @class(['hover:text-pixl', 'text-yellow-500' => $active])>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.835 -0.835 20 20" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" id="Repeat--Streamline-Lucide" height="20" width="20"
            class="w-5">
            <desc>
                Repeat Streamline Icon: https://streamlinehq.com
            </desc>
            <path d="m12.98375 1.5275 3.055 3.055 -3.055 3.055" stroke-width="1.67">
            </path>
            <path d="M2.2912500000000002 8.401250000000001v-0.76375a3.055 3.055 0 0 1 3.055 -3.055h10.6925"
                stroke-width="1.67"></path>
            <path d="m5.34625 16.802500000000002 -3.055 -3.055 3.055 -3.055" stroke-width="1.67">
            </path>
            <path d="M16.03875 9.92875v0.76375a3.055 3.055 0 0 1 -3.055 3.055H2.2912500000000002" stroke-width="1.67">
            </path>
        </svg>
    </button>
    <span @class(['text-sm', 'text-pixl' => $active])>{{ $count }}</span>
</div>
