@if ($type === 'current')
    <div class="flex flex-col bg-app-gray-100">
        <img src="../../assets/image/child_1.jpg" alt="child">
        <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
            <p class="text-pc-h5">{{ $date }}</p>
            <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">{{ $title }}</p>
            <p class="line-clamp-2 text-pc-h5 mt-3">{{ $desc }}</p>
            <div class="justify-around flex text-xs mt-3 gap-1">
                <div class="flex gap-4 items-center">
                    <div class="flex items-center gap-1 whitespace-nowrap">
                        <img src="../../assets/icon/ico_heart.svg" alt="heart" />
                        <p class="lg:block block sm:hidden">リアクション数</p>
                    </div>
                    <p class="text-app-pink text-sm">{{ $like }}</p>
                </div>
                <div class="flex gap-4 items-center">
                    <div class="flex items-centerF gap-1 whitespace-nowrap">
                        <img src="../../assets/icon/ico_chat.svg" alt="chat" />
                        <p class="lg:block block sm:hidden">コメント数</p>
                    </div>
                    <p class="text-app-pink text-sm">{{ $comment }}</p>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="flex flex-col bg-app-gray-100">
        <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
            <div class="relative w-full tiny:w-2/5 sm:w-full">
                <div class="absolute right-0 top-0 sm:w-1/4 md:w-auto">
                    <img src="../../assets/icon/ico_new.png" alt="new" />
                </div>
                <img src="../../assets/image/child_1.jpg" alt="child" class="w-full">
            </div>
            <div class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                    class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                <div class="flex flex-col  sm:truncate">
                    <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                    <p class="text-ph-h4 sm:text-xs">{{ $auth }}</p>
                    <p class="text-pc-h3 sm:text-xs">{{ $date }}</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
            <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">{{ $title }}</p>
            <p class="line-clamp-3 text-pc-h5 mt-3">{{ $desc }}</p>
            <div class="justify-start gap-8 flex text-xs mt-3">
                <div class="flex gap-4 items-center">
                    <img src="../../assets/icon/ico_heart.svg" alt="heart">
                    <p class="text-app-pink text-sm">{{ $like }}</p>
                </div>
                <div class="flex gap-4 items-center">
                    <img src="../../assets/icon/ico_chat.svg" alt="chat">
                    <p class="text-app-pink text-sm">{{ $comment }}</p>
                </div>
                <div class="flex gap-4 items-center">
                    <img src="../../assets/icon/ico_idea.svg" alt="chat">
                    <p class="text-app-green text-sm">{{ $idea }}</p>
                </div>
            </div>
        </div>
    </div>
@endif
