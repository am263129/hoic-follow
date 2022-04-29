<div class=" flex justify-between relative">
    <div class="">
        <div class="border-b-2  border-app-pink w-32 sm:w-81 sm:px-5">
            <h2 class="py-1 text-pc-h1 whitespace-nowrap">{{ $pagetitle }}</h2>
        </div>
    </div>
    @isset($link)
        <div class="border-b-2 border-app-gray-200 w-full flex justify-end">
            <a href={{ $link }}>
                <button class="rounded-md bg-app-gray-200 w-7.5 h-7.5">
                    <img src="../../assets/icon/ico_angle_right.svg" alt="right" class="m-auto" />
                </button>
            </a>
        </div>
    @endisset
</div>
