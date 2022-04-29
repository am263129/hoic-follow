<footer class="z-10 xl:max-w-8xl mx-auto w-full flex">
    <div class="h-17 flex items-center bg-app-pink w-full justify-between pl-4">
        <img src="{{asset('assets/image/logo_white.svg')}}" alt="white logo" />
        <ul class="md:flex justify-center md:gap-8 lg:gap-14 text-white items-center hidden">
            <li>
                <a href="top" class="text-pc-h5">
                    トップページ
                </a>
            </li>
            <li>
                <a href="comments" class="text-pc-h5">
                    コメント管理
                </a>
            </li>
            <li>
                <a href="mypage" class="text-pc-h5">
                    マイページ
                </a>
            </li>
            <li>
                <a href="#" class="text-pc-h5">
                    すべての投稿一覧
                </a>
            </li>
        </ul>
        <div class="flex items-center justify-center w-17 sm:w-29 bg-app-gray-400 h-full cursor-pointer" onclick="scrolltoTop()">
            <img src="../../assets/icon/ico_up.svg" alt="up" />
        </div>
    </div>
</footer>
