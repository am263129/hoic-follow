<x-layout title="Comments">
  <div class="relative text-app-gray-500 flex justify-center xl:max-w-8xl gap-5 w-full flex-1">
    <!-- side bar -->
    <x-sidebar />

    <div class="w-screen sm:w-full 2xl:pl-0 sm:pr-5 pb-17">
      <x-navbar />
      <div>
        <div class="gap-6 sm:gap-17 flex flex-col">
          <div class="flex flex-col">
            <div class=" flex justify-between relative px-5 sm:px-0 ">
              <div class="">
                <div class="border-b-2  border-app-pink w-32 sm:w-81 sm:px-5">
                  <h2 class="py-1 text-pc-h1 whitespace-nowrap">コメント管理</h2>
                </div>
              </div>
              <div class="border-b-2 border-app-gray-200 w-full flex justify-end">
                <button class="rounded-md bg-app-gray-200 w-7.5 h-7.5">
                  <img src="../../assets/icon/ico_angle_right.svg" alt="right" class="m-auto" />
                </button>
              </div>
            </div>
            <div class="flex flex-col py-6 overflow-auto w-full">
              <div class="flex px-5 sm:px-0">
                <div class="flex flex-col border border-app-gray w-full sm:w-50 h-33 ">
                  <div class="bg-app-gray-100 h-13 flex items-center justify-center">
                    <p class="text-center">未読数</p>
                  </div>
                  <div class="flex items-center justify-center h-full">
                    <p class="text-ph-h1">1</p>
                  </div>
                </div>
              </div>

              <div class="flex justify-between flex-col lg:flex-row mt-14 gap-4 px-5 sm:px-0">
                <button
                  class="bg-app-pink-100 w-33 h-10 text-pc-h4 border border-app-gray rounded-md hidden sm:block">
                  絞り込み検索
                </button>
                <button class="bg-app-pink-100 w-33 h-10 text-pc-h4 border border-app-gray rounded-md sm:hidden">
                  検索
                </button>
                <div class="flex items-center gap-2 justify-between">
                  <p class="text-ph-h4 hidden tiny:block">
                    138個の項目
                  </p>
                  <div class="flex">
                    <button class="rounded-l-md border border-app-gray w-10 h-10">
                      <img src="../../assets/icon/ico_page_first.svg" alt="page first" class="m-auto" />
                    </button>
                    <button class="border border-app-gray w-10 h-10">
                      <img src="../../assets/icon/ico_page_prev.svg" alt="page previous" class="m-auto" />
                    </button>
                    <button class="border border-app-gray w-10 h-10">
                      1
                    </button>
                    <button class="border border-app-gray w-10 h-10">
                      2
                    </button>
                    <button class="border border-app-gray w-10 h-10">
                      3
                    </button>
                    <button class="border border-app-gray w-10 h-10 sm:block hidden">
                      4
                    </button>
                    <button class="border border-app-gray w-10 h-10 sm:block hidden">
                      5
                    </button>
                    <button class="border border-app-gray w-10 h-10">
                      <img src="../../assets/icon/ico_page_next.svg" alt="page next" class="m-auto" />
                    </button>
                    <button class="rounded-r-md border border-app-gray w-10 h-10">
                      <img src="../../assets/icon/ico_page_last.svg" alt="page last" class="m-auto" />
                    </button>
                  </div>
                </div>
              </div>
              <div class="grid grid-cols-1 gap-5 mt-5">
                <div class="w-full  bg-white rounded-xl  overflow-auto sm:block hidden">
                  <div class="mt-2 w-full min-w-90 overflow-x-auto">
                    <table class="w-full border-collapse table-fixed border-t-2 border-app-pink ">
                      <tr class="h-13 bg-app-gray-100">
                        <th class="px-3 border text-left font-normal text-pc-h4 border-app-gray-250" width="18%">
                          日付
                        </th>
                        <th class="px-3 border text-left font-normal text-pc-h4 border-app-gray-250" width="16%">
                          コメント者
                        </th>
                        <th class="px-3 border text-left font-normal text-pc-h4 border-app-gray-250" width="40%">
                          コメント内容
                        </th>
                        <th class="px-3 border text-left font-normal text-pc-h4 border-app-gray-250" width="16%">
                          コメント先
                        </th>
                        <th class="px-3 border text-left font-normal text-pc-h4 border-app-gray-250" width="10%">
                        </th>
                      </tr>
                      <tbody>
                        <tr class="h-24 items-start">
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-4">
                            <div class="w-full h-full">
                              <p>2022年5月24日　10:00</p>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-4">
                            <div class="w-full h-full">
                              <p>一橋　美由紀</p>
                              <p class="text-app-gray-300">サンライズキッズ保育園
                                高槻園</p>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-3">
                            <div class="w-full h-full">
                              <p>私も同じことで困っていたので、共感できました。</p>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-4">
                            <div class="w-full h-full">
                              <a class="text-app-purple underline" href="#">
                                園児同士の歩み寄り
                              </a>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250">
                            <div class="w-full h-24 flex justify-center">
                              <button class="bg-app-pink w-20 h-7 rounded-md text-white mx-auto">
                                未 読
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr class="h-24 items-start">
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-4">
                            <div class="w-full h-full">
                              <p>2022年5月24日　10:00</p>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-4">
                            <div class="w-full h-full">
                              <p>上村　裕樹</p>
                              <p class="text-app-green">聖和学園短期大学 保育学科 准教授</p>
                            </div>
                            <div class="flex items-center">
                              <img src="../../assets/icon/ico_gold_mark.svg" alt="gold mark" class="z-10" />
                              <div class="bg-app-green rounded-md text-center transform -translate-x-2 px-2 w-11/12"
                                style="padding-top: 1px; padding-bottom: 1px;">
                                <p class="text-white text-xs truncate w-11/12 transform translate-x-1 ">専門家のアドバイス</p>
                              </div>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-3">
                            <div class="w-full h-full">
                              <p>保育業界の中でもニーズが高まっている障害児保育は、障害のある子どもに必要なサポートを提供しつつ、保育することが仕事です。
                                障害児の保育を担当する際は、障害についての知識を深めるだけでなく、子どもの保護者</p>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-4">
                            <div class="w-full h-full">
                              <a class="text-app-purple underline" href="#">
                                園児同士の歩み寄り
                              </a>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250">
                            <div class="w-full h-24 flex justify-center">
                              <button class="bg-white w-20 h-7 rounded-md border border-app-gray mx-auto">
                                既 読
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr class="h-24 items-start">
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-4">
                            <div class="w-full h-full">
                              <p>2022年5月24日　10:00</p>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-4">
                            <div class="w-full h-full">
                              <p>市村　幸子</p>
                              <p class="text-app-gray-300">サンライズキッズ保育園
                                高槻園</p>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-3">
                            <div class="w-full h-full">
                              <p>保育業界の中でもニーズが高まっている障害児保育は、障害のある子どもに必要なサポートを提供しつつ、保育することが仕事です。
                                障害児の保育を担当する際は、障害についての知識を深めるだけでなく、子どもの保護者</p>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-4">
                            <div class="w-full h-full">
                              <a class="text-app-purple underline" href="#">
                                園児同士の歩み寄り
                              </a>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250">
                            <div class="w-full h-24 flex justify-center">
                              <button class="bg-white w-20 h-7 rounded-md border border-app-gray mx-auto">
                                既 読
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr class="h-24 items-start">
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-4">
                            <div class="w-full h-full">
                              <p>2022年5月24日　10:00</p>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-4">
                            <div class="flex items-center">
                              <img src="../../assets/icon/ico_avatar.svg" alt="gold mark" class="z-10" />
                              <div class="bg-app-pink rounded-md text-center transform -translate-x-2 px-2 w-11/12"
                                style="padding-top: 1px; padding-bottom: 1px;">
                                <p class="text-white text-xs truncate w-11/12 transform translate-x-1 ">自分のコメント</p>
                              </div>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-3">
                            <div class="w-full h-full">
                              <p>保育業界の中でもニーズが高まっている障害児保育は、障害のある子どもに必要なサポートを提供しつつ、保育することが仕事です。
                                障害児の保育を担当する際は、障害についての知識を深めるだけでなく、子どもの保護者</p>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250 px-4">
                            <div class="w-full h-full">
                              <a class="text-app-purple underline" href="#">
                                園児同士の歩み寄り
                              </a>
                              <p>市村　幸子</p>
                              <p class="text-app-gray-300">サンライズキッズ保育園
                                高槻園</p>
                            </div>
                          </td>
                          <td class="text-pc-h5 border align-top pt-4 border-app-gray-250">
                            <div class="w-full h-24 flex justify-center">
                              <button class="bg-app-pink w-20 h-7 rounded-md text-white mx-auto">
                                未 読
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="sm:hidden border-t-2 border-app-pink">
                  <div class="bg-app-gray-100 h-13 px-5 w-screen sm:w-full flex items-center">
                    <p class="">コメント者</p>
                  </div>
                  <div class="flex flex-col divide-y">
                    <div class="flex px-5 w-screen sm:w-full py-3">
                      <div class="w-1/2">
                        <p class="text-ph-h5">2022年5月24日　10:00</p>
                        <p class="text-ph-h5">一橋　美由紀</p>
                        <p class="text-app-gray-300 text-pc-h5">サンライズキッズ保育園
                          高槻園</p>
                      </div>
                      <div class="w-1/2 flex justify-between items-center">
                        <button class="bg-app-pink w-20 h-7 rounded-md text-white mx-auto text-pc-h5">
                          未 読
                        </button>
                        <button>
                          <img src="../../assets/icon/ico_plus.svg" />
                        </button>
                      </div>
                      <!-- <div> here is expand view </div> -->
                    </div>
                    <div class="flex px-5 w-screen sm:w-full py-3 bg-app-gray-100 flex-col gap-4">
                      <div class="flex">
                        <div class="w-1/2 space-y-1">
                          <p class="text-ph-h5">上村　裕樹</p>
                          <p class="text-app-green text-pc-h5">聖和学園短期大学 保育学科 准教授</p>
                          <div class="flex items-center">
                            <img src="../../assets/icon/ico_gold_mark.svg" alt="gold mark" class="z-10" />
                            <div class="bg-app-green rounded-md text-center transform -translate-x-2 px-4"
                              style="padding-top: 2px; padding-bottom: 2px;">
                              <p class="text-white text-xs truncate transform translate-x-1 ">専門家のアドバイス</p>
                            </div>
                          </div>
                        </div>
                        <div class="w-1/2 flex justify-between items-center">
                          <button class="bg-white w-20 h-7 rounded-md border border-app-gray mx-auto text-pc-h5">
                            既 読
                          </button>
                          <button>
                            <img src="../../assets/icon/ico_minus.svg" />
                          </button>
                        </div>
                      </div>
                      <div class="flex flex-col gap-3">
                        <p class="text-pc-h4">コメント内容</p>
                        <p>保育業界の中でもニーズが高まっている障害児保育は、障害のある子どもに必要なサポートを提供しつつ、保育することが仕事です。
                          障害児の保育を担当する際は、障害についての知識を深めるだけでなく、子どもの保護者</p>
                        <div>
                          <p class="text-pc-h4">コメント先</p>
                          <a class="text-app-purple underline" href="#">
                            園児同士の歩み寄り
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="flex px-5 w-screen sm:w-full py-3">
                      <div class="w-1/2">
                        <p class="text-ph-h5">2022年5月24日　10:00</p>
                        <p class="text-ph-h5">市村　幸子</p>
                        <p class="text-app-gray-300 text-pc-h5">サンライズキッズ保育園高槻園</p>
                      </div>
                      <div class="w-1/2 flex justify-between items-center">
                        <button class="bg-white w-20 h-7 rounded-md border border-app-gray mx-auto text-pc-h5">
                          既 読
                        </button>
                        <button>
                          <img src="../../assets/icon/ico_plus.svg" />
                        </button>
                      </div>
                    </div>
                    <div class="flex px-5 w-screen sm:w-full py-3">
                      <div class="w-1/2">
                        <p class="text-ph-h5">2022年5月24日　10:00</p>
                        <p class="text-ph-h5">一橋　美由紀</p>
                        <p class="text-app-gray-300 text-pc-h5">サンライズキッズ保育園高槻園</p>
                      </div>
                      <div class="w-1/2 flex justify-between items-center">
                        <button class="bg-white w-20 h-7 rounded-md border border-app-gray mx-auto text-pc-h5">
                          既 読
                        </button>
                        <button>
                          <img src="../../assets/icon/ico_plus.svg" />
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>