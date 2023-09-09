<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('favicon-32.png')}}" type="image/x-icon">

        <title>{{ config('app.name', 'SuperTRIO') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=prompt:wght@400,600,700&display=swap"  />
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        @wireUiScripts

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="font-sans text-gray-900 antialiased">
        
        
        @if(strpos($_SERVER['HTTP_USER_AGENT'], 'wv') !== false)
        <div class="min-h-screen flex flex-col justify-center items-center gap-4">
            
            <svg class="mx-auto h-48 " version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 600 600" style="enable-background:new 0 0 600 600;" xml:space="preserve">
                <style type="text/css">
                    .st0{fill:#F21111;}
                </style>
                <path class="st0" d="M303.48,501.31c-53.16,0-106.31,0.1-159.47-0.09c-9.78-0.04-19.74-0.35-29.31-2.15
                    c-29.46-5.52-45.64-41.96-30.63-68.04c33.79-58.7,67.59-117.4,101.44-176.08c23.94-41.51,48.03-82.93,71.9-124.48
                    c5.18-9,10.36-17.7,19.39-23.63c22.85-15,53.14-8.89,67.24,14.55c14.49,24.1,28.24,48.64,42.33,72.98
                    c39.2,67.68,78.49,135.32,117.54,203.09c7.38,12.81,13.65,26.26,20.73,39.26c10.7,19.63-0.94,54.96-30.95,62.15
                    c-7.19,1.72-14.83,2.18-22.26,2.2c-55.99,0.17-111.98,0.1-167.97,0.1C303.48,501.22,303.48,501.26,303.48,501.31z M302.97,469.24
                    c0,0.02,0,0.04,0,0.06c58.67,0,117.34-0.03,176.01,0.04c6.93,0.01,12.43-2.25,15.83-8.42c3.3-5.99,2.25-11.74-1.09-17.51
                    c-49.06-84.88-98.06-169.79-147.06-254.7c-9.4-16.29-18.66-32.67-28.18-48.89c-5.1-8.68-14.27-12.49-21.42-7.98
                    c-4.54,2.86-8.35,7.65-11.13,12.38c-16.98,28.83-33.57,57.89-50.28,86.87c-29.51,51.19-59.02,102.38-88.52,153.56
                    c-11.31,19.61-22.71,39.17-33.88,58.86c-7.65,13.48-0.7,25.66,14.72,25.68C186.3,469.3,244.64,469.24,302.97,469.24z"/>
                <path d="M323.85,255.15c0.31,8.74-0.46,17.66-0.53,23.55c-0.28,22.33-4.7,43.94-6.78,66.02c-0.39,4.11-1.29,8.24-2.57,12.17
                    c-2.04,6.23-6.37,9.24-11.74,8.89c-5.17-0.33-9.49-3.61-10.53-9.7c-1.82-10.64-3.26-21.38-4.08-32.13
                    c-1.95-25.63-6.78-54.37-2.65-79.9c0.56-3.49,1.43-7.06,3.58-9.87c3.22-4.22,8.76-6.01,14.05-6.48c4.6-0.42,9.57,0.09,13.19,2.96
                    C321.7,235.33,323.49,245.12,323.85,255.15z"/>
                <path d="M323.48,409.06c0,11.35-8.83,19.75-20.7,19.7c-11.05-0.05-19.3-8.66-19.2-20.04c0.1-11.46,8.64-19.86,20.07-19.74
                    C314.92,389.09,323.48,397.77,323.48,409.06z"/>
            </svg>

            <x-badge negative lg label="ระบบไม่รองรับการเปิดผ่านไลน์ (Line Application)" />
            <p class="text-blue-600 text-xl">กรุณาเปิดเว็บไซต์ผ่านบราวเซอร์</p>
            <div class="flex">
                <svg class="mx-auto h-16 "  viewBox="-26.4 -44 228.8 264"><defs><linearGradient y2="44.354" x2="81.837" y1="75.021" x1="29.337" gradientUnits="userSpaceOnUse" id="f" xlink:href="#a"/><linearGradient y2="130.33" x2="52.538" y1="164.5" x1="110.87" gradientUnits="userSpaceOnUse" id="g" xlink:href="#b"/><linearGradient y2="114.13" x2="136.55" y1="49.804" x1="121.86" gradientUnits="userSpaceOnUse" id="j" xlink:href="#c"/><linearGradient y2="114.13" x2="136.55" y1="49.804" x1="121.86" gradientUnits="userSpaceOnUse" id="k" xlink:href="#c"/><linearGradient y2="44.354" x2="81.837" y1="75.021" x1="29.337" gradientUnits="userSpaceOnUse" id="n" xlink:href="#a"/><linearGradient y2="130.33" x2="52.538" y1="164.5" x1="110.87" gradientUnits="userSpaceOnUse" id="r" xlink:href="#b"/><circle r="88" cx="96" cy="96" id="d"/></defs><clipPath id="e"><use height="100%" xlink:href="#d" overflow="visible" width="100%"/></clipPath><g clip-path="url(#e)" transform="translate(-8 -8)"><path fill="#db4437" d="M21.97 8v108h39.39L96 56h88V8z"/><linearGradient x1="29.337" x2="81.837" y1="75.021" gradientUnits="userSpaceOnUse" y2="44.354" id="a"><stop offset="0" stop-opacity=".6" stop-color="#A52714"/><stop offset=".66" stop-opacity="0" stop-color="#A52714"/></linearGradient><path fill="url(#f)" d="M21.97 8v108h39.39L96 56h88V8z"/></g><path fill="#3e2723" transform="translate(-8 -8)" d="M62.31 115.65L22.48 47.34l-.58 1 39.54 67.8z" fill-opacity=".15" clip-path="url(#e)"/><g clip-path="url(#e)" transform="translate(-8 -8)"><path fill="#0f9d58" d="M8 184h83.77l38.88-38.88V116H61.36L8 24.48z"/><linearGradient x1="110.87" x2="52.538" y1="164.5" gradientUnits="userSpaceOnUse" y2="130.33" id="b"><stop offset="0" stop-opacity=".4" stop-color="#055524"/><stop offset=".33" stop-opacity="0" stop-color="#055524"/></linearGradient><path fill="url(#g)" d="M8 184h83.77l38.88-38.88V116H61.36L8 24.48z"/></g><path fill="#263238" transform="translate(-8 -8)" d="M129.84 117.33l-.83-.48L90.62 184h1.15l38.1-66.64z" fill-opacity=".15" clip-path="url(#e)"/><g clip-path="url(#e)" transform="translate(-8 -8)"><defs><path d="M8 184h83.77l38.88-38.88V116H61.36L8 24.48z" id="h"/></defs><clipPath id="i"><use height="100%" xlink:href="#h" overflow="visible" width="100%"/></clipPath><g clip-path="url(#i)"><path fill="#ffcd40" d="M96 56l34.65 60-38.88 68H184V56z"/><linearGradient x1="121.86" x2="136.55" y1="49.804" gradientUnits="userSpaceOnUse" y2="114.13" id="c"><stop offset="0" stop-opacity=".3" stop-color="#EA6100"/><stop offset=".66" stop-opacity="0" stop-color="#EA6100"/></linearGradient><path fill="url(#j)" d="M96 56l34.65 60-38.88 68H184V56z"/></g></g><g clip-path="url(#e)" transform="translate(-8 -8)"><path fill="#ffcd40" d="M96 56l34.65 60-38.88 68H184V56z"/><path fill="url(#k)" d="M96 56l34.65 60-38.88 68H184V56z"/></g><g clip-path="url(#e)" transform="translate(-8 -8)"><defs><path d="M96 56l34.65 60-38.88 68H184V56z" id="l"/></defs><clipPath id="m"><use height="100%" xlink:href="#l" overflow="visible" width="100%"/></clipPath><g clip-path="url(#m)"><path fill="#db4437" d="M21.97 8v108h39.39L96 56h88V8z"/><path fill="url(#n)" d="M21.97 8v108h39.39L96 56h88V8z"/></g></g><radialGradient r="84.078" gradientTransform="translate(-576)" cx="668.18" cy="55.948" gradientUnits="userSpaceOnUse" id="o"><stop offset="0" stop-opacity=".2" stop-color="#3E2723"/><stop offset="1" stop-opacity="0" stop-color="#3E2723"/></radialGradient><path fill="url(#o)" transform="translate(-8 -8)" d="M96 56v20.95L174.4 56z" clip-path="url(#e)"/><g clip-path="url(#e)" transform="translate(-8 -8)"><defs><path d="M21.97 8v40.34L61.36 116 96 56h88V8z" id="p"/></defs><clipPath id="q"><use height="100%" xlink:href="#p" overflow="visible" width="100%"/></clipPath><g clip-path="url(#q)"><path fill="#0f9d58" d="M8 184h83.77l38.88-38.88V116H61.36L8 24.48z"/><path fill="url(#r)" d="M8 184h83.77l38.88-38.88V116H61.36L8 24.48z"/></g></g><radialGradient r="78.044" gradientTransform="translate(-576)" cx="597.88" cy="48.52" gradientUnits="userSpaceOnUse" id="s"><stop offset="0" stop-opacity=".2" stop-color="#3E2723"/><stop offset="1" stop-opacity="0" stop-color="#3E2723"/></radialGradient><path fill="url(#s)" transform="translate(-8 -8)" d="M21.97 48.45l57.25 57.24L61.36 116z" clip-path="url(#e)"/><radialGradient r="87.87" gradientTransform="translate(-576)" cx="671.84" cy="96.138" gradientUnits="userSpaceOnUse" id="t"><stop offset="0" stop-opacity=".2" stop-color="#263238"/><stop offset="1" stop-opacity="0" stop-color="#263238"/></radialGradient><path fill="url(#t)" transform="translate(-8 -8)" d="M91.83 183.89l20.96-78.2L130.65 116z" clip-path="url(#e)"/><g clip-path="url(#e)" transform="translate(-8 -8)"><circle fill="#f1f1f1" r="40" cx="96" cy="96"/><circle fill="#4285f4" r="32" cx="96" cy="96"/></g><g clip-path="url(#e)" transform="translate(-8 -8)"><path fill="#3e2723" d="M96 55c-22.09 0-40 17.91-40 40v1c0-22.09 17.91-40 40-40h88v-1z" fill-opacity=".2"/><path fill="#fff" d="M130.6 116c-6.92 11.94-19.81 20-34.6 20-14.8 0-27.69-8.06-34.61-20h-.04L8 24.48v1L61.36 117h.04c6.92 11.94 19.81 20 34.61 20 14.79 0 27.68-8.05 34.6-20h.05v-1z" fill-opacity=".1"/><path fill="#3e2723" d="M97 56c-.17 0-.33.02-.5.03C118.36 56.3 136 74.08 136 96c0 21.92-17.64 39.7-39.5 39.97.17 0 .33.03.5.03 22.09 0 40-17.91 40-40s-17.91-40-40-40z" opacity=".1"/><path fill="#fff" d="M131 117.33c3.4-5.88 5.37-12.68 5.37-19.96 0-4.22-.66-8.28-1.87-12.09.95 3.42 1.5 7.01 1.5 10.73 0 7.28-1.97 14.08-5.37 19.96l.02.04-38.88 68h1.16l38.09-66.64z" fill-opacity=".2"/></g><g clip-path="url(#e)" transform="translate(-8 -8)"><path fill="#fff" d="M96 9c48.43 0 87.72 39.13 87.99 87.5 0-.17.01-.33.01-.5 0-48.6-39.4-88-88-88S8 47.4 8 96c0 .17.01.33.01.5C8.28 48.13 47.57 9 96 9z" fill-opacity=".2"/><path fill="#3e2723" d="M96 183c48.43 0 87.72-39.13 87.99-87.5 0 .17.01.33.01.5 0 48.6-39.4 88-88 88S8 144.6 8 96c0-.17.01-.33.01-.5C8.28 143.87 47.57 183 96 183z" fill-opacity=".15"/></g><radialGradient r="176.75" gradientTransform="translate(-8 -8)" cx="34.286" cy="32.014" gradientUnits="userSpaceOnUse" id="u"><stop offset="0" stop-opacity=".1" stop-color="#fff"/><stop offset="1" stop-opacity="0" stop-color="#fff"/></radialGradient><circle fill="url(#u)" r="88" cx="88" cy="88"/></svg>
                <svg class="mx-auto h-16 "  viewBox="-9.92187 -16.44595 85.98954 98.6757"><defs><linearGradient id="b"><stop offset="0" stop-color="#06c2e7"/><stop offset=".25" stop-color="#0db8ec"/><stop offset=".5" stop-color="#12aef1"/><stop offset=".75" stop-color="#1f86f9"/><stop offset="1" stop-color="#107ddd"/></linearGradient><linearGradient id="a"><stop offset="0" stop-color="#bdbdbd"/><stop offset="1" stop-color="#fff"/></linearGradient><linearGradient gradientTransform="translate(206.7902 159.7726) scale(.35154)" gradientUnits="userSpaceOnUse" y2="59.3922" x2="412.975" y1="237.6078" x1="412.975" id="d" xlink:href="#a"/><filter height="1.0447" y="-.0223" width="1.0418" x="-.0209" id="f" color-interpolation-filters="sRGB"><feGaussianBlur stdDeviation=".9577"/></filter><filter height="1.096" y="-.048" width="1.096" x="-.048" id="c" color-interpolation-filters="sRGB"><feGaussianBlur stdDeviation="3.5643"/></filter><radialGradient gradientTransform="translate(194.5447 155.5804) scale(.38143)" gradientUnits="userSpaceOnUse" r="82.1254" fy="136.8182" fx="413.0613" cy="136.8182" cx="413.0613" id="e" xlink:href="#b"/></defs><path d="M502.0828 148.5a89.1078 89.1078 0 01-89.1078 89.1078A89.1078 89.1078 0 01323.8672 148.5a89.1078 89.1078 0 0189.1078-89.1078A89.1078 89.1078 0 01502.0828 148.5z" transform="matrix(.33865 0 0 .3261 -106.7796 -14.4883)" opacity=".53" paint-order="markers stroke fill" filter="url(#c)"/><path d="M383.2937 211.9767a31.3252 31.3252 0 01-31.3252 31.3252 31.3252 31.3252 0 01-31.3251-31.3252 31.3252 31.3252 0 0131.3251-31.3252 31.3252 31.3252 0 0131.3252 31.3252z" fill="url(#d)" stroke="#cdcdcd" stroke-width=".093" stroke-linecap="round" stroke-linejoin="round" paint-order="markers stroke fill" transform="translate(-318.8956 -180.605)"/><path d="M380.8391 211.9767a28.8706 28.8706 0 01-28.8706 28.8706 28.8706 28.8706 0 01-28.8705-28.8706 28.8706 28.8706 0 0128.8705-28.8706 28.8706 28.8706 0 0128.8706 28.8706z" fill="url(#e)" paint-order="markers stroke fill" transform="translate(-318.8956 -180.605)"/><path d="M33.073 4.0067a.42.42 0 00-.421.421v4.8551a.42.42 0 00.421.421.42.42 0 00.4208-.421V4.4276a.42.42 0 00-.4209-.4209zm-2.7537.174a.386.386 0 00-.0856.0004.42.42 0 00-.375.4623l.2122 2.0312a.42.42 0 00.4623.375.42.42 0 00.375-.4624l-.212-2.0311a.42.42 0 00-.377-.3754zm5.5266.002a.42.42 0 00-.3772.3752l-.2136 2.031a.4202.4202 0 00.3748.4627.4199.4199 0 00.4625-.3746l.2136-2.0312a.42.42 0 00-.3748-.4625.4452.4452 0 00-.0854-.0005zm-8.3553.4082a.42.42 0 00-.4096.508l1.0054 4.7499a.42.42 0 00.499.3246.42.42 0 00.3247-.4988l-1.0055-4.75a.42.42 0 00-.414-.334zm11.1838.004a.4195.4195 0 00-.4142.3336l-1.009 4.7492a.42.42 0 00.3243.4992.42.42 0 00.4992-.3242l1.009-4.7493a.42.42 0 00-.4093-.5082zm-13.8834.7572a.4078.4078 0 00-.1662.0194.42.42 0 00-.2703.5303l.631 1.9424a.4201.4201 0 00.5305.2703.42.42 0 00.2702-.5305l-.6311-1.9423a.4199.4199 0 00-.3641-.2896zm16.5677.001a.42.42 0 00-.3641.2896l-.6315 1.9422a.42.42 0 00.2702.5304.42.42 0 00.5304-.2701l.6315-1.9424a.42.42 0 00-.2701-.5304.4227.4227 0 00-.1664-.0193zm-19.2373.976a.4199.4199 0 00-.1633.0366.42.42 0 00-.2136.5555l1.972 4.4367a.4199.4199 0 00.5555.2136.42.42 0 00.2138-.5555l-1.9721-4.4366a.42.42 0 00-.3923-.2504zm21.937.0148a.4208.4208 0 00-.3926.2498l-1.978 4.434a.42.42 0 00.213.5558.42.42 0 00.5558-.213l1.978-4.4338a.42.42 0 00-.213-.5559.4236.4236 0 00-.1632-.0369zM19.6435 7.6401a.416.416 0 00-.2398.0558.42.42 0 00-.154.575l1.0211 1.7687a.42.42 0 00.575.154.42.42 0 00.154-.575L19.9788 7.85a.42.42 0 00-.3352-.2099zm26.8588 0a.4187.4187 0 00-.335.2098L45.146 9.6186a.42.42 0 00.1542.575.42.42 0 00.575-.154l1.0211-1.7688a.42.42 0 00-.154-.575.4205.4205 0 00-.24-.0557zm-29.265 1.5007a.422.422 0 00-.2328.0803.42.42 0 00-.0935.5879l2.8509 3.93a.4202.4202 0 00.588.0935.42.42 0 00.0935-.5878l-2.851-3.93a.4197.4197 0 00-.355-.1738zm31.7013.0214a.4192.4192 0 00-.3551.1733l-2.8563 3.9262a.42.42 0 00.0928.588.4201.4201 0 00.588-.0926l2.8561-3.9261a.4201.4201 0 00-.0928-.588.4203.4203 0 00-.2327-.0808zm-33.852 1.7823a.4182.4182 0 00-.3037.108.42.42 0 00-.0312.5944l1.3665 1.518a.4199.4199 0 00.5944.0311.4201.4201 0 00.0312-.5945l-1.3663-1.5179a.4197.4197 0 00-.2908-.1391zm35.9757.003a.4214.4214 0 00-.2909.1392l-1.3664 1.5176a.42.42 0 00.031.5946.42.42 0 00.5945-.0312l1.3666-1.5176a.4202.4202 0 00-.0312-.5946.4194.4194 0 00-.3035-.108zm-38.037 1.977a.421.421 0 00-.2907.1392.42.42 0 00.0312.5945l3.6085 3.2483a.42.42 0 00.5944-.0312.4199.4199 0 00-.0311-.5944l-3.6086-3.2483a.4198.4198 0 00-.3038-.108zm40.1083.0143a.4188.4188 0 00-.304.1077l-3.6105 3.2458a.42.42 0 00-.0318.5944.4202.4202 0 00.5946.0316l3.6108-3.2458a.42.42 0 00.0316-.5944.4198.4198 0 00-.2907-.1393zm-41.8225 2.19a.4192.4192 0 00-.3551.1736.4199.4199 0 00.0932.588l1.6522 1.2003a.4198.4198 0 00.5879-.093.4201.4201 0 00-.093-.588l-1.6523-1.2004a.4205.4205 0 00-.2329-.0805zm43.535.0153a.4212.4212 0 00-.2328.0803l-1.653 1.1993a.4202.4202 0 00-.0936.588.42.42 0 00.5879.0935l1.6531-1.1994a.42.42 0 00.0934-.5878.4197.4197 0 00-.355-.1739zM9.7093 17.4799a.4188.4188 0 00-.335.2098.42.42 0 00.154.575l4.2047 2.4276a.42.42 0 00.575-.154.42.42 0 00-.154-.575l-4.2047-2.4276a.4206.4206 0 00-.24-.0558zm46.7274 0a.4167.4167 0 00-.24.0558l-4.2046 2.4276a.42.42 0 00-.154.575.42.42 0 00.575.154l4.2048-2.4275a.42.42 0 00.154-.575.42.42 0 00-.3352-.2098zM8.498 19.986a.419.419 0 00-.3925.2497.42.42 0 00.2129.5559l1.8653.832a.42.42 0 00.5559-.2129.42.42 0 00-.213-.5559l-1.8652-.832a.4198.4198 0 00-.1634-.0367zm49.158.0174a.4208.4208 0 00-.1635.0367l-1.8657.8306a.42.42 0 00-.2135.5557.4203.4203 0 00.556.2134l1.8656-.8307a.42.42 0 00.2133-.5557.4198.4198 0 00-.3922-.25zm-50.2374 2.602a.4197.4197 0 00-.3642.2892.42.42 0 00.2697.5306l4.6163 1.5042a.42.42 0 00.5307-.2698.42.42 0 00-.2698-.5306L7.585 22.6247a.421.421 0 00-.1664-.0194zm51.3148.018a.4078.4078 0 00-.1662.0194l-4.6174 1.5009a.42.42 0 00-.2701.5305.42.42 0 00.5305.27l4.6172-1.5008a.4201.4201 0 00.2703-.5305.4202.4202 0 00-.3643-.2896zM6.7461 25.3548a.4199.4199 0 00-.4144.3337.42.42 0 00.3243.4992l1.9977.4246a.42.42 0 00.4992-.3243.42.42 0 00-.3242-.4992l-1.9976-.4246a.4129.4129 0 00-.085-.009zm52.6546.004a.5176.5176 0 00-.0848.009l-1.9978.4244a.4199.4199 0 00-.3242.499.4202.4202 0 00.4992.3245l1.9976-.4244a.4202.4202 0 00.3244-.4992.4202.4202 0 00-.4144-.3337zM6.237 28.1205a.4198.4198 0 00-.3773.3747.42.42 0 00.3743.463l4.8282.5104a.42.42 0 00.463-.3744.42.42 0 00-.3745-.4629l-4.8283-.5105a.4316.4316 0 00-.0854-.0003zm53.6763.0363a.386.386 0 00-.0856.0003l-4.8288.504a.42.42 0 00-.375.4623.42.42 0 00.4624.375l4.8288-.504a.42.42 0 00.375-.4623.4199.4199 0 00-.3768-.3754zm-53.758 2.7947a.42.42 0 00-.421.421.42.42 0 00.421.4208h2.0423a.4201.4201 0 00.421-.4209.4201.4201 0 00-.421-.421zm51.793 0a.42.42 0 00-.421.421.42.42 0 00.421.4208h2.0423a.42.42 0 00.4209-.4209.42.42 0 00-.421-.421zM11.145 33.246a.3843.3843 0 00-.0854.0004l-4.829.5039a.42.42 0 00-.375.4623.42.42 0 00.4623.375l4.829-.504a.42.42 0 00.375-.4623.42.42 0 00-.377-.3753zm43.8531.0298a.4198.4198 0 00-.3773.3748.42.42 0 00.3742.4629l4.8283.5104a.42.42 0 00.4629-.3744.42.42 0 00-.3744-.4628l-4.8281-.5105a.4337.4337 0 00-.0856-.0004zM8.738 36.1195a.4301.4301 0 00-.085.009l-1.9977.4244a.42.42 0 00-.3243.4992.42.42 0 00.4992.3243l1.9978-.4242a.42.42 0 00.3242-.4992.42.42 0 00-.4142-.3338zm48.6693.004a.4195.4195 0 00-.4142.3335.4199.4199 0 00.324.4993l1.9978.4245a.4199.4199 0 00.4993-.324.4202.4202 0 00-.3243-.4995l-1.9976-.4245a.4129.4129 0 00-.085-.009zM12.102 37.7814a.4078.4078 0 00-.1662.0194l-4.6174 1.5009a.42.42 0 00-.2701.5304.42.42 0 00.5304.2702l4.6172-1.501a.4201.4201 0 00.2703-.5304.4202.4202 0 00-.3642-.2896zm41.9371.0149a.4197.4197 0 00-.3642.2892.42.42 0 00.2698.5306l4.6162 1.5042a.42.42 0 00.5307-.2698.42.42 0 00-.2698-.5306l-4.6163-1.5042a.421.421 0 00-.1664-.0194zm-43.699 3.2725a.4196.4196 0 00-.1634.0365l-1.8659.8307a.42.42 0 00-.2132.5557.42.42 0 00.5557.2133l1.8659-.8306a.42.42 0 00.2132-.5557.42.42 0 00-.3924-.25zm45.4588.016a.419.419 0 00-.3926.2496.42.42 0 00.213.5559l1.865.832a.42.42 0 00.556-.213.42.42 0 00-.213-.5558l-1.865-.832a.4197.4197 0 00-.1634-.0367zm-41.8261.9121a.4167.4167 0 00-.24.0558l-4.2046 2.4276a.42.42 0 00-.154.575.42.42 0 00.5749.154l4.2046-2.4274a.4202.4202 0 00.154-.5751.4198.4198 0 00-.335-.2099zm38.2003 0a.419.419 0 00-.3352.2098.4202.4202 0 00.154.5752l4.2047 2.4274a.4202.4202 0 00.5751-.154.42.42 0 00-.154-.575l-4.2048-2.4276a.42.42 0 00-.2398-.0558zm-39.249 3.5625a.4215.4215 0 00-.233.0805l-1.653 1.1993a.42.42 0 00-.0935.5879.42.42 0 00.5878.0935l1.6532-1.1994a.42.42 0 00.0936-.5878.4202.4202 0 00-.3552-.174zm40.2875.0142a.4192.4192 0 00-.3551.1736.42.42 0 00.0932.588l1.6522 1.2005a.4199.4199 0 00.5879-.0932.42.42 0 00-.093-.5878l-1.6522-1.2005a.4208.4208 0 00-.233-.0807zm-36.5438.1453a.4184.4184 0 00-.3038.1077l-3.6107 3.2458a.42.42 0 00-.0316.5944.42.42 0 00.5944.0316l3.6107-3.2458a.42.42 0 00.0316-.5944.4196.4196 0 00-.2906-.1393zm32.8.0116a.4214.4214 0 00-.2908.1391.42.42 0 00.0312.5945l3.6085 3.2483a.4202.4202 0 00.5945-.0312.42.42 0 00-.0312-.5944l-3.6086-3.2484a.4194.4194 0 00-.3035-.1079zM20.0934 48.814a.4193.4193 0 00-.3553.1733l-2.8561 3.9261a.42.42 0 00.0926.588.42.42 0 00.588-.0926l2.8562-3.9262a.42.42 0 00-.0926-.588.4193.4193 0 00-.2328-.0806zm25.9358.0176a.4212.4212 0 00-.233.0803.42.42 0 00-.0935.5878l2.8508 3.93a.42.42 0 00.5879.0936.42.42 0 00.0936-.5879l-2.8509-3.93a.4198.4198 0 00-.355-.1738zm-29.6228.6064a.4214.4214 0 00-.2909.1391L14.749 51.095a.4201.4201 0 00.0311.5945.4199.4199 0 00.5944-.0313l1.3667-1.5176a.4202.4202 0 00-.0312-.5946.4194.4194 0 00-.3036-.1079zm33.3307.002a.4177.4177 0 00-.3035.1079.42.42 0 00-.0313.5944l1.3663 1.518a.4199.4199 0 00.5944.0312.4201.4201 0 00.0312-.5946l-1.3663-1.5178a.4197.4197 0 00-.2909-.1392zm-25.6552 1.6836a.4188.4188 0 00-.3924.2496l-1.9782 4.434a.42.42 0 00.213.5558.42.42 0 00.5559-.2129l1.9781-4.4339a.42.42 0 00-.213-.5559.4206.4206 0 00-.1634-.0367zm17.9556.0122a.4205.4205 0 00-.1635.0365.42.42 0 00-.2137.5556l1.972 4.4366a.4202.4202 0 00.5557.2136.42.42 0 00.2136-.5555l-1.972-4.4366a.4201.4201 0 00-.3921-.2502zm-21.4316 1.3587a.4187.4187 0 00-.335.2098l-1.0211 1.7687a.42.42 0 00.154.575.42.42 0 00.575-.154L21 53.1252a.42.42 0 00-.1541-.575.4205.4205 0 00-.24-.0557zm24.9342 0a.4169.4169 0 00-.2398.0558.42.42 0 00-.154.575l1.0211 1.7687a.42.42 0 00.575.154.42.42 0 00.154-.575l-1.0211-1.7686a.42.42 0 00-.3352-.2099zm-17.0545.0634a.4195.4195 0 00-.4142.3335l-1.009 4.7493a.42.42 0 00.3243.4992.42.42 0 00.4993-.3243l1.009-4.7492a.42.42 0 00-.4094-.5082zm9.16.003a.4199.4199 0 00-.4094.5078l1.0054 4.75a.42.42 0 00.499.3247.42.42 0 00.3247-.499l-1.0057-4.7497a.42.42 0 00-.414-.334zm-4.5726.479a.42.42 0 00-.4209.421v4.8551a.42.42 0 00.421.421.42.42 0 00.4208-.421v-4.855a.42.42 0 00-.4209-.421zm-7.7265 1.569a.4202.4202 0 00-.3643.2895l-.6313 1.9423a.42.42 0 00.2702.5305.4201.4201 0 00.5304-.2703l.6313-1.9422a.42.42 0 00-.2701-.5304.422.422 0 00-.1662-.0194zm15.4498.001a.4094.4094 0 00-.1662.0192.4201.4201 0 00-.2703.5305l.631 1.9423a.42.42 0 00.5305.2702.42.42 0 00.2704-.5303l-.6313-1.9424a.42.42 0 00-.364-.2895zm-10.3654 1.0817a.42.42 0 00-.3773.375l-.2135 2.0312a.4199.4199 0 00.3746.4625.42.42 0 00.4627-.3746l.2135-2.031a.42.42 0 00-.3746-.4627.4316.4316 0 00-.0854-.0004zm5.2674.002a.386.386 0 00-.0856.0004.42.42 0 00-.375.4623l.2122 2.0314a.4198.4198 0 00.4623.3748.42.42 0 00.375-.4624l-.212-2.0312a.42.42 0 00-.377-.3753z" fill="#f4f2f3" paint-order="markers stroke fill"/><path d="M469.0962 100.6068l-65.5095 38.0612-41.4198 65.2066 60.5938-44.8812z" transform="translate(-112.1054 -20.8324) scale(.35154)" opacity=".409" paint-order="markers stroke fill" filter="url(#f)"/><path d="M36.3734 34.828l-6.601-6.9127 23.4161-15.752z" fill="#ff5150" paint-order="markers stroke fill"/><path d="M36.3734 34.828l-6.601-6.9127-16.815 22.6648z" fill="#f1f1f1" paint-order="markers stroke fill"/><path d="M12.9573 50.58l23.416-15.752 16.8152-22.6647z" opacity=".243"/></svg>
            </div>
            <p class="text-blue-600 text-xl">หรือ สแกนคิวอาร์โค้ดผ่านกล้องปกติ</p>
            
            
            <!-- dots-vertical -->
        </div>
        @elseif( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false)
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                <div>
                    <a href="/">
                        <x-application-logo class="h-20 fill-current text-gray-500" />
                    </a>
                </div>
    
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        @else
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                <div>
                    <a href="/">
                        <x-application-logo class="h-20 fill-current text-gray-500" />
                    </a>
                </div>
    
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        @endif
        @livewireScripts
    </body>
</html>
