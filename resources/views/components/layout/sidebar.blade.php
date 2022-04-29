<div
    class="-translate-x-full transform duration-300 sm:translate-x-0 fixed sm:relative left-0 top-0 sm:w-46 px-6 py-5 flex flex-col bg-app-pink-100 h-screen sm:h-auto overflow-hidden tiny:max-w-xs w-full bottom-0 flex-shrink-0 z-20 shadow-xl sm:shadow-none" id="sidebar">
    <img src="../../assets/image/logo_sm.svg" alt="logo" class="sm:block hidden" />
    <div class="sm:hidden flex items-end justify-end pb-6 pt-4">
        <button onclick="toggleMenu()">
            <img src="../../assets/icon/xmark_red.svg" alt="close" />
        </button>
    </div>
    <div class="flex gap-6 sm:hidden">
        <button class="bg-app-pink text-white rounded-md w-full h-13 text-center">
            新規投稿
        </button>
        <button class="rounded-md w-13 h-13 bg-white flex-shrink-0">
            <img src="../../assets/icon/ico_search.svg" alt="search" class="m-auto" />
        </button>
    </div>
    <div class="mt-16">
        <ul class="text-pc-h3 gap-11 flex flex-col">
            <li class="">
                <a href="top">
                    >トップページ
                </a>
            <li>
                <a href="comments">
                    >コメント管理
                </a>
            </li>
            <li>
                <a href="mypage">
                    >マイページ
                </a>
            </li>
            <li>
                <a href="#">
                    >すべての投稿一覧
                </a>
            </li>
        </ul>
    </div>
    <div class="text-pc-h4 rounded-md bg-white p-4 mt-25 flex flex-col divide-y divide-app-pink-100">
        <div class="flex flex-col gap-2 items-center justify-center pb-3">
            <img src="../../assets/image/avatar.png" alt="avatar" class="w-20 h-20" />
            <p class="">港　陽子</p>
        </div>
        <p class="text-app-pink text-center pt-4">ログアウト</p>
    </div>
    <div class="grow h-full flex-1"></div>
</div>
