<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="bg-grey-light font-sans">
    <div class="container mx-auto pt-6">
        <div class="flex justify-between border-b border-grey pb-3">
            <div class="text-xl font-semibold text-grey-darkest">Change Plan</div>
            <div class="text-grey-darkest">Cancel your plan</div>
        </div>

        <div class="flex justify-between p-4">
            <div class="flex flex-col w-40 h-40 bg-white shadow rounded-lg p-6 border-2 border-solid hover:border-teal-light hover:bg-teal-lightest hover:cursor-pointer">

                <div class="flex justify-between pb-4">
                    <div>
                        <span class="text-sm font-semibold text-grey-darkest uppercase">Hobby</span>
                    </div>
                    <div>
                        <div class="h-4 w-4 bg-teal-light rounded-full flex justify-center items-center">
                            <i class="fa fa-check text-xs text-grey-darker"></i>
                        </div>
                    </div>
                </div>

                <div class="pb-1">
                    <span class="text-5xl text-grey-darkest">1</span>
                    <span class="text-xl font-semibold text-grey-darkest">GB</span>
                </div>

                <div>
                    <span class="text-lg font-semibold text-grey-darkest">$5</span>
                    <span class="text-sm">/ mo</span>
                </div>

            </div>

            <div class="flex flex-col w-40 h-40 bg-white shadow rounded-lg p-6 border-2 border-solid hover:border-teal-light hover:bg-teal-lightest hover:cursor-pointer">

                <div class="flex justify-between pb-4">
                    <div>
                        <span class="text-sm font-semibold text-grey-darkest uppercase">Growth</span>
                    </div>
                    <div>
                        <div class="h-4 w-4 bg-teal-light rounded-full flex justify-center items-center">
                            <i class="fa fa-check text-xs text-grey-darker"></i>
                        </div>
                    </div>
                </div>

                <div class="pb-1">
                    <span class="text-5xl text-grey-darkest">5</span>
                    <span class="text-xl font-semibold text-grey-darkest">GB</span>
                </div>

                <div>
                    <span class="text-lg font-semibold text-grey-darkest">$10</span>
                    <span class="text-sm">/ mo</span>
                </div>

            </div>
            <div class="flex flex-col w-40 h-40 bg-white shadow rounded-lg p-6 border-2 border-solid hover:border-teal-light hover:bg-teal-lightest hover:cursor-pointer">

                <div class="flex justify-between pb-4">
                    <div>
                        <span class="text-sm font-semibold text-grey-darkest uppercase">Business</span>
                    </div>
                    <div>
                        <div class="h-4 w-4 bg-teal-light rounded-full flex justify-center items-center">
                            <i class="fa fa-check text-xs text-grey-darker"></i>
                        </div>
                    </div>
                </div>

                <div class="pb-1">
                    <span class="text-5xl text-grey-darkest">10</span>
                    <span class="text-xl font-semibold text-grey-darkest">GB</span>
                </div>

                <div>
                    <span class="text-lg font-semibold text-grey-darkest">$15</span>
                    <span class="text-sm">/ mo</span>
                </div>

            </div>
            <div class="flex flex-col w-40 h-40 bg-white shadow rounded-lg p-6 border-2 border-solid hover:border-teal-light hover:bg-teal-lightest hover:cursor-pointer">

                <div class="flex justify-between pb-4">
                    <div>
                        <span class="text-sm font-semibold text-grey-darkest uppercase">Enterprise</span>
                    </div>
                    <div>
                        <div class="h-4 w-4 bg-teal-light rounded-full flex justify-center items-center">
                            <i class="fa fa-check text-xs text-grey-darker"></i>
                        </div>
                    </div>
                </div>

                <div class="pb-1">
                    <span class="text-5xl text-grey-darkest">20</span>
                    <span class="text-xl font-semibold text-grey-darkest">GB</span>
                </div>

                <div>
                    <span class="text-lg font-semibold text-grey-darkest">$20</span>
                    <span class="text-sm">/ mo</span>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
