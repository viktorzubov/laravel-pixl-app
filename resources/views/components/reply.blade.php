<li class="group/li relative flex items-start gap-4 pt-4">
    <!-- Line through -->
    <div aria-hidden="true" class="bg-pixl-light/10 absolute top-0 left-5 h-full w-px group-last/li:h-4">
    </div>
    <a href="{{ route('profiles.show', $post->profile) }}" class="isolate shrink-0">
        <img src="{{ $post->profile->avatar_url }}" alt="Avatar of {{ $post->profile->name }}"
            class="size-10 object-cover" />
    </a>
    <div class="border-pixl-light/10 grow border-b pt-1.5 pb-5">
        <div class="flex items-center justify-between gap-4">
            <div class="flex items-center gap-2.5">
                <p>
                    <a class="hover:underline"
                        href="{{ route('profiles.show', $post->profile) }}">{{ $post->profile->name }}</a>
                </p>
                <p class="text-pixl-light/40 text-xs">
                    <a href="{{ route('post.show', [$post->profile, $post]) }}">{{ $post->created_at }}</a>
                </p>
                <p class="text-pixl-light/40 text-xs">
                    <a class="hover:text-pixl-light/60"
                        href="{{ route('profiles.show', $post->profile) }}">{{ $post->profile->handle }}</a>
                </p>
            </div>
            <button class="group flex gap-0.75 py-2" aria-label="More options">
                <span class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"></span>
                <span class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"></span>
                <span class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"></span>
            </button>
        </div>
        <div class="mt-4 flex flex-col gap-3 text-sm">
            {{ $post->content }}
        </div>
        @if ($showEngagement)
            <!-- Post actions (like, comment, share) -->
            <div class="mt-6 flex items-center justify-between gap-4">
                <div class="flex items-center gap-8">
                    <!-- Likes -->
                    <x-like-button :active="$post->has_liked" :count="$post->likes_count" :id="$post->id" />
                    <!-- Comments -->
                    <x-reply-button :count="$post->replies_count" :id="$post->id" />
                    <!-- Repost -->
                    <x-repost-button :active="$post->has_reposted" :count="$post->reposts_count" :id="$post->id" />
                </div>
                <div class="flex items-center gap-3">
                    <!-- Save -->
                    <x-save-button :id="$post->id" />
                    <!-- Share -->
                    <x-share-button :id="$post->id" />
                </div>
            </div>
        @endif

        @if ($showReplies)
            <!-- Threaded replies -->
            <ol>
                <!-- Reply -->
                @foreach ($post->replies as $reply)
                    <x-reply :post="$reply" :show-replies="$showReplies" :show-engagement="$showEngagement" />
                @endforeach
            </ol>
        @endif

    </div>
</li>
