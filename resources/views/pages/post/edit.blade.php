<x-layout title="post edit">
    <div class="relative text-app-gray-500 flex justify-center xl:max-w-8xl w-full gap-5 flex-1">
        <x-sidebar />
        <div class="w-screen sm:w-full 2xl:pl-0 sm:pr-5 pb-17">
            <x-navbar />
            <div>
                <div class="gap-6 sm:gap-17 flex flex-col px-5 sm:px-0 ">
                    <div class="flex flex-col">
                        <div class=" flex justify-between relative grow">
                            <div class="">
                                <div class="border-b-2  border-app-pink w-32 sm:w-81 sm:px-5">
                                    <h2 class="py-1 text-pc-h1 whitespace-nowrap">投稿編集</h2>
                                </div>
                            </div>
                            <div class="border-b-2 border-app-gray-200 w-full flex justify-end">
                                <button class="rounded-md bg-app-gray-200 w-7.5 h-7.5">
                                    <img src="../../assets/icon/ico_angle_right.svg" alt="right"
                                        class="m-auto" />
                                </button>
                            </div>
                        </div>
                        <div class="flex gap-7.5 pt-15 flex-col md:flex-row">
                            <div class="w-full grid">
                                <div class="flex h-full flex-col">
                                    <div class="flex flex-col gap-1.5 flex-none">
                                        <div class="flex gap-6">
                                            <p class="text-sm">タイトル</p>
                                            <div
                                                class="rounded-md bg-app-gray-900 px-1 text-white flex items-center justify-center">
                                                <p class="text-xs">必須</p>
                                            </div>
                                        </div>
                                        <input class="rounded-md border border-app-gray outline-none p-5 text-sm"
                                            placeholder="タイトルを入力してください" />
                                    </div>
                                    <div class="flex flex-col gap-1.5 mt-8.5 flex-1">
                                        <div class="flex gap-6">
                                            <p class="text-sm">本文</p>
                                            <div
                                                class="rounded-md bg-app-gray-900 px-1 text-white flex items-center justify-center">
                                                <p class="text-xs">必須</p>
                                            </div>
                                        </div>
                                        <textarea
                                            class="rounded-md border border-app-gray outline-none p-5 text-sm h-full min-h-textarea"
                                            placeholder="文章を入力してください"></textarea>
                                    </div>
                                    <div class="items-center justify-center gap-6 mt-6 sm:flex hidden">
                                        <button class="border border-app-gray rounded-md h-13 w-22">
                                            戻る
                                        </button>
                                        <button class="rounded-md bg-app-pink w-46 h-13 text-white">
                                            内容を確認
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-8.5 text-pc-h4">
                                <div class="flex flex-col gap-1.5">
                                    <div class="flex gap-6">
                                        <p class="text-sm">画像</p>
                                        <div
                                            class="rounded-md bg-app-gray-900 px-1 text-white flex items-center justify-center">
                                            <p class="text-xs">必須</p>
                                        </div>
                                    </div>
                                    <div class="space-y-2.5">
                                        <div
                                            class="flex justify-center items-center md:w-72 h-37 border border-dashed border-app-gray-350">
                                            <div class="gap-2 flex">
                                                <img src="../../assets/icon/ico_img.svg" alt="image upload"
                                                    class="hidden md:block" />
                                                <p class="md:block hidden">アップロード</p>
                                                <p class="md:hidden">1MB以下まで添付できます</p>
                                            </div>
                                        </div>
                                        <div class="border items-center border-app-gray px-3 h-10 md:flex hidden">
                                            <p class="text-sm">1MB以下まで添付できます</p>
                                        </div>
                                        <div class="flex md:hidden gap-1">
                                            <img src="../../assets/icon/ico_img.svg" alt="image upload"
                                                class="" />
                                            <p class="text-sm">アップロード</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <div class="flex gap-6">
                                        <p class="text-sm">クラス</p>
                                        <div
                                            class="rounded-md bg-app-gray-900 px-1 text-white flex items-center justify-center">
                                            <p class="text-xs">必須</p>
                                        </div>
                                    </div>
                                    <input class="rounded-md border border-app-gray outline-none px-3 py-2.5"
                                        placeholder="クラスを選択してください" />
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <div class="flex gap-6">
                                        <p class="text-sm">タグ</p>
                                        <div
                                            class="rounded-md bg-app-gray-900 px-1 text-white flex items-center justify-center">
                                            <p class="text-xs">必須</p>
                                        </div>
                                    </div>
                                    <input class="rounded-md border border-app-gray outline-none px-3 py-2.5"
                                        placeholder="タグを選択してください" />
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <div class="flex gap-6">
                                        <p class="text-sm">日付</p>
                                        <div
                                            class="rounded-md bg-app-gray-900 px-1 text-white flex items-center justify-center">
                                            <p class="text-xs">必須</p>
                                        </div>
                                    </div>
                                    <input class="rounded-md border border-app-gray outline-none px-3 py-2.5"
                                        placeholder="現在時刻" />
                                </div>
                                <div class="items-center justify-center gap-6 mt-6 sm:hidden flex">
                                    <button class="border border-app-gray rounded-md h-13 w-22">
                                        戻る
                                    </button>
                                    <button class="rounded-md bg-app-pink w-46 h-13 text-white">
                                        内容を確認
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
