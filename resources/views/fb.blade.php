<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css','resources/css/fb.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-fb-bg">


<header class="bg-fb-header w-full h-[56px] fixed top-0 left-0 right-0 flex justify-between items-center px-4 z-20">
    {{--    header 左--}}
    <div class="flex items-center">
        <!-- FB logo -->
        <svg viewBox="0 0 36 36" class="fill-current text-fb" height="39" width="39">
            <defs>
                <linearGradient
                    x1="50%"
                    x2="50%"
                    y1="97.0782153%"
                    y2="0%"
                >
                    <stop offset="0%" stop-color="#0062E0"></stop>
                    <stop offset="100%" stop-color="#19AFFF"></stop>
                </linearGradient>
            </defs>
            <path
                d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"
            ></path>
            <path
                class="fill-current text-white"
                d="M25 23l.8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"
            ></path>
        </svg>
        <!-- search bar (只在電腦版顯示) -->
        <button class="popover-btn lg:hidden">
            <img src="https://bruce-fe-fb.web.app/image/search.svg"/>
        </button>
        <div class="hidden lg:block bg-fb-input items-center ml-1 py-2 px-3 w-[240px] rounded-full lg:flex ">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-[20px] h-[20px] mr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="#9ba3af"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                />
            </svg>
            <input
                type="text"
                class="h-[15px] w-full bg-transparent text-white focus:outline-none input-noline"
                placeholder="搜尋 Facebook"
            />
        </div>
    </div>
    {{--    header 右--}}
    <div class="flex items-center relative">
        <button
            id="plus-btn"
            class="popover-btn"
        >
            <img src="https://bruce-fe-fb.web.app/image/plus.svg"/>
        </button>
        <button
            id="msg-btn"
            class="popover-btn"
        >
            <img src="https://bruce-fe-fb.web.app/image/messenger.svg"/>
        </button>
        <button
            id="notify-btn"
            class="popover-btn"
        >
            <img src="https://bruce-fe-fb.web.app/image/bell.svg"/>
        </button>
        <button
            id="more-btn"
            class="popover-btn"
        >
            <img src="https://bruce-fe-fb.web.app/image/down.svg"/>
        </button>

        {{--        plus planel--}}
        <div class="popover-panel hidden" id="plus-plan">
            <p class="text-white mb-3 text-2xl">建立</p>

            <div class="flex items-center p-1 mb-2 hover:bg-fb-input rounded-lg cursor-pointer">
                <div class="rounded-full bg-fb-input p-2 mr-2 flex justify-center items-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        width="22"
                        height="22"
                        viewBox="0 0 24 24"
                        stroke="white"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                        />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-white mb-[2px]">貼文</p>
                    <p class="text-xs text-gray-400">在動態消息分享貼文。</p>
                </div>
            </div>
        </div>

        {{--        msg planel--}}
        <div class="popover-panel hidden " id="msg-plan">
            <p class="text-white mb-3 text-2xl">Messenger</p>
            <div class="bg-fb-input rounded-full py-1 px-3 flex items-center mb-4 ">
                <div class="bg-fb-input flex items-center rounded-full py-1 px-3 ">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-[20px] h-[20px] mr-2"
                        fill="none"
                        viewBox="0 0 20 20"
                        stroke="#9ba3af"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                        />
                    </svg>
                    <input
                        type="text"
                        class="h-[15px] w-full bg-transparent text-white focus:outline-none input-noline"
                        placeholder="搜尋 Facebook"
                    />
                </div>
            </div>
            <div class="flex cursor-pointer hover:bg-fb-input">
                <div class="w-[50px] h-[50px] rounded-full overflow-hidden">
                    <img
                        class="w-full object-cover"
                        src="https://bruce-fe-fb.web.app/image/avator.png"
                        alt=""
                    />
                </div>
                <div class="flex-1 ml-3">
                    <p class="text-base text-white mb-[2px]">布魯斯</p>
                    <p class="text-sm text-gray-400">TailwindCSS讚讚！・1分鐘前</p>
                </div>
            </div>
        </div>

        {{--        notify planel--}}
        <div class="popover-panel hidden " id="nofity-plan">
            <p class="text-white mb-3 text-2xl">通知</p>
            <div class="flex ">
                <div class="w-[50px] h-[50px] rounded-full overflow-hidden">
                    <img
                        class="w-full object-cover"
                        src="https://bruce-fe-fb.web.app/image/avator.png"
                        alt=""
                    />
                </div>
                <div class="flex-1 ml-3">
                    <p class="text-base text-white mb-[2px]">布魯斯</p>
                    <p class="text-sm text-blue-500">新課程・1分鐘前</p>
                </div>
            </div>
        </div>


        {{--        more planel--}}
        <div class="popover-panel hidden " id="more-plan">
            <p class="text-white mb-3 text-2xl">通知</p>
            <div class="flex ">
                <div class="w-[50px] h-[50px] rounded-full overflow-hidden">
                    <img
                        class="w-full object-cover"
                        src="https://bruce-fe-fb.web.app/image/avator.png"
                        alt=""
                    />
                </div>
                <div class="flex-1 ml-3">
                    <p class="text-base text-white mb-[2px]">布魯斯</p>
                    <p class="text-sm text-gray-400">查看你的個人檔案</p>
                </div>

            </div>
            <div class="flex hover:bg-fb-bg mt-[15px]">
                <div class="rounded-full bg-fb-input p-2 mr-2 flex justify-center items-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        width="30"
                        height="30"
                        viewBox="0 0 24 24"
                        stroke="white"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                        />
                    </svg>
                </div>
                <div class="text-white text-xl">登出</div>
            </div>
        </div>

    </div>
</header>
<main class="min-h-[100vh] pt-main-span flex">
    {{--左側--}}

    <p id="left-block"
       class="
       hidden
        sticky
        sticky
        top-main-span
        max-w-[360px]
        w-full
        h-full
        pl-4
        lg:block
        ">左側</p>
    </div>

    {{--    動態牆--}}
    <div class="max-w-[744px] w-full mx-auto px4">
        {{--        牆外圍--}}
        <div class="relative">

            <div class="flex overflow-x-auto" id="story-list">
                <div class="flex-1 px-[4px] min-w-[120px] cursor-pointer">
                    <div class="h-full flex flex-col">
                        <div class="h-full overflow-hidden">
                            <img class="object-cover w-full h-full duration-500 hover:scale-105"
                                 src="https://bruce-fe-fb.web.app/image/avator.png"/>
                        </div>
                        <div class="bg-fb-card pt-6 px-2 pb-2 relative">
                            <button
                                class="
                      w-[32px]
                      h-[32px]
                      p-2
                      absolute
                      -top-4
                      left-[calc(50%-16px)]
                      bg-fb
                      rounded-full
                      focus:outline-none
                      ring-fb-card ring
                      flex
                      justify-center
                      items-center
                    "
                            >
                                <img src="https://bruce-fe-fb.web.app/image/plus.svg"/>
                            </button>
                            <p class="w-full text-center text-white">建立限時動態</p>
                        </div>
                    </div>
                </div>

                <div class="flex-1 px-[4px] min-w-[120px] cursor-pointer">
                    <div class="relative">
                        <div
                            class="w-[32px] h-[32px] absolute top-4 left-4 ring-4 ring-fb bg-fb-card rounded-full flex justify-center items-center z-10">
                            <p class="text-white text-sm">布</p>
                        </div>
                        <div
                            class="absolute w-full h-full top-0 left-0 bg-gradient-to-b from-black/30 to-transparent"></div>
                        <img class="w-full h-full duration-500 hover:scale-105"
                             src="https://bruce-fe-fb.web.app/image/story.png"/>
                        <p class="absolute bottom-2 left-2 text-white">布魯斯</p>
                    </div>
                </div>

                <div class="flex-1 px-[4px] min-w-[120px] cursor-pointer">
                    <div class="relative">
                        <div
                            class="w-[32px] h-[32px] absolute top-4 left-4 ring-4 ring-fb bg-fb-card rounded-full flex justify-center items-center z-10">
                            <p class="text-white text-sm">布</p>
                        </div>
                        <div
                            class="absolute w-full h-full top-0 left-0 bg-gradient-to-b from-black/30 to-transparent"></div>
                        <img class="w-full h-full duration-500 hover:scale-105"
                             src="https://bruce-fe-fb.web.app/image/story.png"/>
                        <p class="absolute bottom-2 left-2 text-white z-10">布魯斯</p>
                    </div>
                </div>

                <div class="flex-1 px-[4px] min-w-[120px] cursor-pointer">
                    <div class="relative">
                        <div
                            class="w-[32px] h-[32px] absolute top-4 left-4 ring-4 ring-fb bg-fb-card rounded-full flex justify-center items-center z-10">
                            <p class="text-white text-sm">布</p>
                        </div>
                        <div
                            class="absolute w-full h-full top-0 left-0 bg-gradient-to-b from-black/30 to-transparent"></div>
                        <img class="w-full h-full duration-500 hover:scale-105"
                             src="https://bruce-fe-fb.web.app/image/story.png"/>
                        <p class="absolute bottom-2 left-2 text-white z-10">布魯斯</p>
                    </div>
                </div>

                <div class="flex-1 px-[4px] min-w-[120px] cursor-pointer">
                    <div class="relative">
                        <div
                            class="w-[32px] h-[32px] absolute top-4 left-4 ring-4 ring-fb bg-fb-card rounded-full flex justify-center items-center z-10">
                            <p class="text-white text-sm">布</p>
                        </div>
                        <div
                            class="absolute w-full h-full top-0 left-0 bg-gradient-to-b from-black/30 to-transparent"></div>
                        <img class="w-full h-full duration-500 hover:scale-105"
                             src="https://bruce-fe-fb.web.app/image/story.png"/>
                        <p class="absolute bottom-2 left-2 text-white z-10">布魯斯</p>
                    </div>
                </div>

            </div>

        </div>
        <div class="w-full rounded-lg bg-fb-card mt-3 p-3">
            <div class="flex relative items-center">
                <div class="max-w-[50px] overflow-hidden object-contain rounded-full">
                    <div class=""><img src="https://bruce-fe-fb.web.app/image/avator.png" alt=""></div>
                </div>
                <div class="bg-fb-input rounded-full w-full pl-5 ml-3">
                    <input type="text" placeholder="想什麼呢?.." class="input-noline bg-fb-input rounded-full ">
                </div>

            </div>
            <div class="bg-fb-input mt-3 w-full h-[2px]">
            </div>

            <div class="border-t border-gray-700 flex pt-3">
                <button class="flex-1 h-[40px] rounded-lg hover:bg-fb-input flex items-center justify-center">
                    <div class="w-[16px]">
                        <img src="https://bruce-fe-fb.web.app/image/camera.svg" alt=""/>
                    </div>
                    <p class="text-gray-400 text-sm pl-1.5">直播視訊</p>
                </button>
                <button class="flex-1 h-[40px] rounded-lg hover:bg-fb-input flex items-center justify-center">
                    <div class="w-[16px]">
                        <img src="https://bruce-fe-fb.web.app/image/photo.svg" alt=""/>
                    </div>
                    <p class="text-gray-400 text-sm pl-1.5">相片／影片</p>
                </button>
                <button class="flex-1 h-[40px] rounded-lg hover:bg-fb-input flex items-center justify-center">
                    <div class="w-[16px]">
                        <img src="https://bruce-fe-fb.web.app/image/feel.svg" alt=""/>
                    </div>
                    <p class="text-gray-400 text-sm pl-1.5">感受／活動</p>
                </button>
            </div>
            <div class=""></div>
            <div class=""></div>

        </div>
    </div>


    <!-- 右側聯絡人 -->
    <div
        id="right-block"
        class="hidden sticky top-main-span max-w-[360px] w-full h-full lg:block z-0"
    >
    </div>
</main>


@vite(['resources/js/fb.js', 'resources/js/app.js'])
<div id="app">
</div>
</body>
</html>
