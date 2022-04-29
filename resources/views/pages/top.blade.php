<x-layout title="TopPage">
    <div class="relative text-app-gray-500 flex justify-center  xl:max-w-8xl mx-auto gap-5 flex-1">
        <!-- side bar -->
        <x-sidebar />
        <div class="w-full 2xl:ml-0 sm:mr-5 pb-17">
            <x-navbar />
            <div>
                <div class="gap-6 sm:gap-17 flex flex-col px-5 sm:px-0 ">
                    <div class="flex flex-col">
                        <x-page-title pagetitle="コメント管理" link="#" />
                        <div class="flex flex-col gap-3 py-6">
                            <div
                                class="flex flex-col sm:flex-row gap-1 items-start sm:gap-17 justify-start sm:items-center">
                                <div class="text-ph-h4 sm:text-pc-h5 flex sm:gap-2 sm:flex-row flex-col">
                                    <p class="">2022年2月10日</p>
                                    <p>園児同士の歩み寄り」にコメントが付きました。</p>
                                </div>
                                <div class="flex px-2 py-1 rounded-md bg-app-blue gap-2 text-white">
                                    <p class="text-xs whitespace-nowrap">確認する</p>
                                    <img src="../../assets/icon/ico_angle_right_wh.svg" alt="angle" />
                                </div>
                            </div>
                            <div
                                class="flex flex-col sm:flex-row gap-1 items-start sm:gap-17 justify-start sm:items-center">
                                <div class="text-ph-h4 sm:text-pc-h5 flex sm:gap-2 sm:flex-row flex-col">
                                    <p class="">2022年2月9日</p>
                                    <p>メンションの付いたコメントがあります。</p>
                                </div>
                                <div class="flex px-2 py-1 rounded-md bg-app-blue gap-2 text-white">
                                    <p class="text-xs whitespace-nowrap">確認する</p>
                                    <img src="../../assets/icon/ico_angle_right_wh.svg" alt="angle" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <x-page-title pagetitle="港 陽子さんの投稿" link="#" />
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-6 xl:gap-10 mt-4 sm:p-5">
                            {{-- @foreach ($recentPost as $post)
                                <x-dynamic-component :component="post-item" date={{ $post['postDate'] }}
                                    title={{ $post['postTitle'] }} desc={{ $post['postDesc'] }}
                                    comment={{ $post['comment'] }} like={{ $post['like'] }}
                                    author={{ $post['author'] }} />
                            @endforeach --}}
                            <div class="flex flex-col bg-app-gray-100">
                                <img src="../../assets/image/child_1.jpg" alt="child">
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h5">2022年2月8日投稿</p>
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-2 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-around flex text-xs mt-3 gap-1">
                                        <div class="flex gap-4 items-center">
                                            <div class="flex items-center gap-1 whitespace-nowrap">
                                                <img src="../../assets/icon/ico_heart.svg" alt="heart" />
                                                <p class="lg:block block sm:hidden">リアクション数</p>
                                            </div>
                                            <p class="text-app-pink text-sm">23</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <div class="flex items-centerF gap-1 whitespace-nowrap">
                                                <img src="../../assets/icon/ico_chat.svg" alt="chat" />
                                                <p class="lg:block block sm:hidden">コメント数</p>
                                            </div>
                                            <p class="text-app-pink text-sm">23</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <img src="../../assets/image/child_2.jpg" alt="child">
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h5">2022年2月8日投稿</p>
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-2 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-around flex text-xs mt-3 gap-1">
                                        <div class="flex gap-4 items-center">
                                            <div class="flex items-center gap-1 whitespace-nowrap">
                                                <img src="../../assets/icon/ico_heart.svg" alt="heart" />
                                                <p class="lg:block block sm:hidden">リアクション数</p>
                                            </div>
                                            <p class="text-app-pink text-sm">23</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <div class="flex items-center gap-1 whitespace-nowrap">
                                                <img src="../../assets/icon/ico_chat.svg" alt="chat" />
                                                <p class="lg:block block sm:hidden">コメント数</p>
                                            </div>
                                            <p class="text-app-pink text-sm">23</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <img src="../../assets/image/child_3.jpg" alt="child">
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h5">2022年2月8日投稿</p>
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-2 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-around flex text-xs mt-3 gap-1">
                                        <div class="flex gap-4 items-center">
                                            <div class="flex items-center gap-1 whitespace-nowrap">
                                                <img src="../../assets/icon/ico_heart.svg" alt="heart" />
                                                <p class="lg:block block sm:hidden">リアクション数</p>
                                            </div>
                                            <p class="text-app-pink text-sm">23</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <div class="flex items-center gap-1 whitespace-nowrap">
                                                <img src="../../assets/icon/ico_chat.svg" alt="chat" />
                                                <p class="lg:block block sm:hidden">コメント数</p>
                                            </div>
                                            <p class="text-app-pink text-sm">23</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <x-page-title pagetitle="最新の投稿" link="#" />
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-6 xl:gap-10 mt-4 sm:p-5">
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
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <div class="absolute right-0 top-0 sm:w-1/4 md:w-auto">
                                            <img src="../../assets/icon/ico_new.png" alt="new" />
                                        </div>
                                        <img src="../../assets/image/child_1.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <div class="absolute right-0 top-0 sm:w-1/4 md:w-auto">
                                            <img src="../../assets/icon/ico_new.png" alt="new" />
                                        </div>
                                        <img src="../../assets/image/child_2.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <img src="../../assets/image/child_3.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <img src="../../assets/image/child_4.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <img src="../../assets/image/child_5.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <img src="../../assets/image/child_1.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <img src="../../assets/image/child_6.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <img src="../../assets/image/child_7.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <img src="../../assets/image/child_8.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <img src="../../assets/image/child_1.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <img src="../../assets/image/child_2.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <img src="../../assets/image/child_3.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <img src="../../assets/image/child_4.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col bg-app-gray-100">
                                <div class="flex flex-col tiny:flex-row sm:flex-col gap-3 items-center">
                                    <div class="relative w-full tiny:w-2/5 sm:w-full">
                                        <img src="../../assets/image/child_5.jpg" alt="child" class="w-full">
                                    </div>
                                    <div
                                        class="flex gap-3 px-4 w-full tiny:w-3/5 sm:w-full items-center flex-shrink-0">
                                        <img src="../../assets/image/avatar_2.jpg" alt="avatar"
                                            class="w-12.5 h-12.5 sm:w-12 sm:h-12 flex-shrink-0" />
                                        <div class="flex flex-col  sm:truncate">
                                            <p class="text-app-pink text-pc-h5 sm:text-xs">サンライズキッズ保育園北区園</p>
                                            <p class="text-ph-h4 sm:text-xs">風村　和也</p>
                                            <p class="text-pc-h3 sm:text-xs">2022年2月8日</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col px-2 md:px-4 xl:px-8 py-6 gap-2">
                                    <p class="text-pc-h4 md:text-pc-h3 lg:text-pc-h2">園児同士の歩み寄り</p>
                                    <p class="line-clamp-3 text-pc-h5 mt-3">いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。
                                        タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。
                                        仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。</p>
                                    <div class="justify-start gap-8 flex text-xs mt-3">
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_heart.svg" alt="heart">
                                            <p class="text-app-pink text-sm">609</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_chat.svg" alt="chat">
                                            <p class="text-app-pink text-sm">2</p>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <img src="../../assets/icon/ico_idea.svg" alt="chat">
                                            <p class="text-app-green text-sm">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center flex-col items-center gap-2 mt-6 sm:mt-17">
                    <div class="flex gap-3">
                        <button class="bg-app-gray-100 rounded-md w-16 h-7.5 flex items-center justify-around px-2">
                            <img src="../../assets/icon/ico_prev.svg" alt="prev" />
                            前へ
                        </button>
                        <div class="flex gap-2">
                            <button class="bg-app-pink text-center rounded-md w-7.5 h-7.5 text-white">
                                1
                            </button>
                            <button class="bg-app-gray-100 text-center rounded-md w-7.5 h-7.5">
                                2
                            </button>
                            <button class="bg-app-gray-100 text-center rounded-md w-7.5 h-7.5">
                                3
                            </button>
                            <button class="bg-app-gray-100 text-center rounded-md w-7.5 h-7.5">
                                4
                            </button>
                            <button class="bg-app-gray-100 text-center rounded-md w-7.5 h-7.5">
                                5
                            </button>
                        </div>
                        <button class="bg-app-gray-100 rounded-md w-16 h-7.5 flex items-center justify-around px-2">
                            次へ
                            <img src="../../assets/icon/ico_next.svg" alt="prev" />
                        </button>
                    </div>
                    <p class="text-ph-h3 sm:block hidden">（5ページまで）</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
