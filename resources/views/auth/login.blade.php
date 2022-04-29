<x-layout title="Login">
    <div class="bg-app-pink-100 w-full min-h-screen flex items-center justify-center text-app-gray-400 px-5 py-10">
        <div class="w-full sm:w-2/3 lg:w-1/2 2xl:w-720">
            <img src="{{ asset('assets/image/logo.svg') }}" alt="logo" class="mx-auto hidden sm:block" />
            <img src="{{ asset('assets/image/logo_sm.svg') }}" alt="logo" class="mx-auto sm:hidden" />
            <div class=" flex flex-col bg-white rounded-md border-2 border-app-gray px-5 md:px-14 py-12 mt-4">
                <h1 class="text-center text-ph-h1 sm:text-pc-h1 ">ログイン</h1>
                <div class="w-full bg-white flex flex-col gap-24 sm:gap-16 md:gap-12 mt-4">
                    <div class="flex flex-col gap-4">
                        <div class="flex gap-4 items-center text-sm">
                            <p class="text-ph-h4 sm:text-pc-h4">ログインID</p>
                            <div class="rounded-md bg-app-gray-900 px-1 text-white">
                                <p class="text-xs">必須</p>
                            </div>
                        </div>
                        <div
                            class="flex bg-app-blue-100 outline-none py-2 border-2 border-app-gray rounded-md px-4 relative">
                            <input id="edt_email" type="email" class="bg-app-blue-100 outline-none w-full"
                                placeholder="半角英数" />
                            <!-- email clear button -->
                            <button type="button" id="btn_del_email" class="hidden">
                                <img src="{{ asset('assets/icon/xmark_red.svg')}}" alt="xmark" />
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex gap-4 items-center text-sm">
                            <p class="text-ph-h4 sm:text-pc-h4">パスワード</p>
                            <div class="rounded-md bg-app-gray-900 px-1 text-white">
                                <p class="text-xs">必須</p>
                            </div>
                        </div>
                        <div
                            class="flex bg-app-blue-100 outline-none py-2 border-2 border-app-gray rounded-md px-4 relative">
                            <input id="edt_password" type="password" class="bg-app-blue-100 outline-none w-full"
                                placeholder="半角英数" />
                            <!-- password clear button -->
                            <button type="button" id="btn_del_password" class="hidden">
                                <img src="{{ asset('assets/icon/xmark_red.svg')}}" alt="xmark" />
                            </button>
                            <!-- invalid password notification -->
                            <div id="nofig_invalid_password"
                                class="whitespace-nowrap rounded-lg bg-app-red absolute lg:-right-5 lg:translate-x-full left-1/2 lg:left-auto translate-y-full -translate-x-1/2 lg:translate-y-0 -bottom-2 lg:bottom-0">
                                <div class="relative px-4 py-2 text-white text-xs sm:text-sm md:text-base text-center">
                                    <div
                                        class="w-2 h-2 transform rotate-45 bg-app-red absolute left-1/2 lg:left-0 top-0 lg:top-1/2 -translate-x-1/2 -translate-y-1/2">
                                    </div>
                                    <p class="text-ph-h4 sm:text-pc-h4">パスワードが間違っています</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="top" class="mx-auto">
                    <button type="submit"
                    class="w-48 text-center py-2 lg:py-3 rounded-lg bg-app-gray-400 text-white mt-20 lg:mt-8">ログインする</button>
                </a>
                <div class="flex flex-col gap-5 mt-8 ">
                    <div class="flex">パスワードを忘れた方は
                        <a class="text-app-pink" href="auth.reset.password" class="text-ph-h4 sm:text-pc-h4">
                            こちら
                        </a>
                    </div>
                    <p class="text-ph-h4 sm:text-pc-h4">大切な情報の流出のリスクを防ぐために、ご利用頂く端末や場所にはご注意いただきますよう、お願いいたします。</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
