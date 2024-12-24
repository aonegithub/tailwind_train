<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/css/stock.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-dark">
<div class="container mx-auto px-4">
    {{--    上--}}
    <header class="flex justify-between items-center h-[60px] mt-4">
        <h1 class="font-mono text-xl font-extrabold text-white">A-One Stock</h1>
        <ul class="hidden justify-between items-center text-white md:flex">
            <li class="mr-6 font-bold cursor-pointer text-sm">HOME</li>
            <li class="mr-6 font-bold cursor-pointer text-sm">TRADE</li>
            <li class="mr-6 font-bold cursor-pointer text-sm">ACCOUNT</li>
            <li class="bg-gray-400 rounded-full w-[40px] h-[40px] flex justify-center items-center">
                A
            </li>
        </ul>
    </header>


    {{--    下--}}
    <div class="flex flex-wrap lg:flex-nowarp h-[100px] ">
        {{--        左--}}
        <div class="w-full lg:w-[75%] bg-card">
            <div class="w-full flex mt-4 overflow-x-scroll scrollbar  scrollbar-medium  ">

                <div class="w-full flex mt-4 overflow-x-scroll scrollbar scrollbar-medium">
                    <div
                        class="flex-none box-border mr-4 p-4 flex flex-col justify-between w-[200px] h-[100px] bg-card shadow-2xl rounded-md">
                        <p class=" text-white text-2xl font-bold">Google</p>
                        <p class="flex justify-between">
                            <span class="text-white">171.16</span>
                            <span class="text-green-500">+50%</span>
                        </p>
                    </div>
                    <div
                        class="flex-none box-border mr-4 p-4 flex flex-col justify-between w-[200px] h-[100px] bg-card shadow-2xl rounded-md">
                        <p class=" text-white text-2xl font-bold">Google</p>
                        <p class="flex justify-between">
                            <span class="text-white">171.16</span>
                            <span class="text-green-500">+50%</span>
                        </p>
                    </div>
                    <div
                        class="flex-none box-border mr-4 p-4 flex flex-col justify-between w-[200px] h-[100px] bg-card shadow-2xl rounded-md">
                        <p class=" text-white text-2xl font-bold">Google</p>
                        <p class="flex justify-between">
                            <span class="text-white">171.16</span>
                            <span class="text-green-500">+50%</span>
                        </p>
                    </div>
                    <div
                        class="flex-none box-border mr-4 p-4 flex flex-col justify-between w-[200px] h-[100px] bg-card shadow-2xl rounded-md">
                        <p class=" text-white text-2xl font-bold">Google</p>
                        <p class="flex justify-between">
                            <span class="text-white">171.16</span>
                            <span class="text-green-500">+50%</span>
                        </p>
                    </div>
                    <div
                        class="flex-none box-border mr-4 p-4 flex flex-col justify-between w-[200px] h-[100px] bg-card shadow-2xl rounded-md">
                        <p class=" text-white text-2xl font-bold">Google</p>
                        <p class="flex justify-between">
                            <span class="text-white">171.16</span>
                            <span class="text-green-500">+50%</span>
                        </p>
                    </div>
                    <div
                        class="flex-none box-border mr-4 p-4 flex flex-col justify-between w-[200px] h-[100px] bg-card shadow-2xl rounded-md">
                        <p class=" text-white text-2xl font-bold">Google</p>
                        <p class="flex justify-between">
                            <span class="text-white">171.16</span>
                            <span class="text-green-500">+50%</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="h-[500px] bg-card mt-4 p-4 shadow-2xl rounded-md">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="height:100%;width:100%">
                    <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
                    <div class="tradingview-widget-copyright"><a href="https://tw.tradingview.com/"
                                                                 rel="noopener nofollow" target="_blank"><span
                                class="blue-text">追蹤TradingView上的所有市場</span></a></div>
                    <script type="text/javascript"
                            src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js" async>
                        {
                            "symbols"
                        :
                            [
                                [
                                    "Apple",
                                    "AAPL|1D"
                                ],
                                [
                                    "NASDAQ:AMD|1D"
                                ],
                                [
                                    "NASDAQ:MSFT|1D"
                                ]
                            ],
                                "chartOnly"
                        :
                            true,
                                "width"
                        :
                            "100%",
                                "height"
                        :
                            "100%",
                                "locale"
                        :
                            "en",
                                "colorTheme"
                        :
                            "light",
                                "autosize"
                        :
                            false,
                                "showVolume"
                        :
                            false,
                                "showMA"
                        :
                            false,
                                "hideDateRanges"
                        :
                            false,
                                "hideMarketStatus"
                        :
                            false,
                                "hideSymbolLogo"
                        :
                            false,
                                "scalePosition"
                        :
                            "left",
                                "scaleMode"
                        :
                            "Normal",
                                "fontFamily"
                        :
                            "Andale Mono, monospace",
                                "fontSize"
                        :
                            "10",
                                "noTimeScale"
                        :
                            false,
                                "valuesTracking"
                        :
                            "1",
                                "changeMode"
                        :
                            "price-and-percent",
                                "chartType"
                        :
                            "area",
                                "maLineColor"
                        :
                            "#2962FF",
                                "maLineWidth"
                        :
                            1,
                                "maLength"
                        :
                            9,
                                "lineWidth"
                        :
                            2,
                                "lineType"
                        :
                            0,
                                "dateRanges"
                        :
                            [
                                "1d|5"
                            ],
                                "lineColor"
                        :
                            "rgba(41, 98, 255, 1)",
                                "topColor"
                        :
                            "rgba(41, 98, 255, 0.24)",
                                "bottomColor"
                        :
                            "rgba(209, 212, 220, 0.13)",
                                "dateFormat"
                        :
                            "MM/dd/yy",
                                "timeHoursFormat"
                        :
                            "12-hours"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>

            {{--            左邊子下半部--}}
            <div class="w-full h-[500px] bg-card-mt-4 p4 shadow-2xl rounded-md"></div>


            <div
                class="h-[300px] bg-card mt-4 p-4 shadow-2xl rounded-md overflow-scroll scrollbar  scrollbar-medium"></div>
        </div>
        {{--        右--}}
        <div class="w-full pl-4 lg:w-[25%]   ">
            <div class="bg-card w-full rounded-md p-4 h-[200px]  "></div>
            <div class="bg-card w-full rounded-md  mt-4 p-4 mt-4 h-[300px]  "></div>
        </div>
    </div>
</div>

@vite(['resources/js/app.js', 'resources/js/app.js'])
<div id="app">
</div>
</body>
</html>
