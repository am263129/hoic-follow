<x-layout title="confirm password" category="auth">
    <div class="bg-app-pink-100 w-full min-h-screen flex items-center justify-center text-app-gray-400 px-5 py-10">
        <div class="w-full sm:w-2/3 lg:w-1/2 2xl:w-720">
            <img src="../../assets/image/logo.svg" alt="logo" class="mx-auto hidden sm:block" />
            <img src="../../assets/image/logo_sm.svg" alt="logo" class="mx-auto sm:hidden" />
            <div class=" flex flex-col bg-white rounded-md border-2 border-app-gray px-5 md:px-14 py-12 mt-4">
                <h1 class="text-center text-ph-h1 sm:text-pc-h1 ">送信完了</h1>
                <div class="w-full bg-white flex flex-col gap-24 sm:gap-16 md:gap-12 mt-4 text-center">
                    <p class="text-ph-h4 sm:text-pc-h4">パスワードを登録のメールアドレス宛に通知いたしました。</p>
                </div>
                <button type="submit"
                    class="mx-auto w-52 text-center py-2 lg:py-3 rounded-lg bg-app-gray-400 text-white mt-10 lg:mt-12">
                    <!-- remove <a> on product, here is link for navigate page -->
                    <a href="/">ログインページにもどる</a>
                </button>
            </div>
        </div>
    </div>
</x-layout>
