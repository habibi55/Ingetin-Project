@extends('layouts.home')

@section('content')

<div class="container mx-auto w-full lg:px-44">
  <header class="flex justify-between p-4 lg:px-0 flex-wrap">
    <div class="flex items-center">
      <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="500" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="id1"><path d="M 109.035156 32.359375 L 342.859375 32.359375 L 342.859375 266 L 109.035156 266 Z M 109.035156 32.359375 " clip-rule="nonzero"/></clipPath><clipPath id="id2"><path d="M 32.359375 109.035156 L 266 109.035156 L 266 342.859375 L 32.359375 342.859375 Z M 32.359375 109.035156 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#id1)"><path fill="#111" d="M 109.496094 32.363281 L 109.496094 93.015625 L 146.953125 93.015625 L 146.953125 69.816406 L 305.402344 69.816406 L 305.402344 228.269531 L 146.953125 228.269531 L 146.953125 163.433594 L 109.496094 163.433594 L 109.496094 265.722656 L 342.855469 265.722656 L 342.855469 32.363281 L 109.496094 32.363281 " fill-opacity="1" fill-rule="nonzero"/></g><g clip-path="url(#id2)"><path fill="#3AAFA9" d="M 228.265625 305.402344 L 69.816406 305.402344 L 69.816406 146.953125 L 228.265625 146.953125 L 228.265625 211.785156 L 265.722656 211.785156 L 265.71875 109.5 L 32.359375 109.5 L 32.359375 342.859375 L 265.722656 342.859375 L 265.722656 282.203125 L 228.265625 282.203125 L 228.265625 305.402344 " fill-opacity="1" fill-rule="nonzero"/></g></svg>
      <h2 class="pl-1 text-2xl font-bold">Rapih</h2>
    </div>

    <button
      class="text-bold inline-flex p-3 rounded lg:hidden ml-auto hover:text-primer focus:outline focus:outline-2 nav-toggler"
      data-target="#navigation">
      <i class="fa-solid fa-bars"></i>
    </button>

    <nav class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto pt-6 lg:pt-0" id="navigation">
      <div class="w-full flex flex-col items-start lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto lg:items-center
        lg:h-auto space-y-4 lg:space-y-0 lg:space-x-6">
        <a href="{{ route('login') }}" class="w-full lg:w-auto text-center border-2 lg:border-0 font-medium rounded-md px-4 py-2 hover:bg-gray-200"> 
            Log
            In</a>
        <a href="{{ route('register') }}" class="w-full text-center lg:w-auto text-white font-medium bg-primer px-3 py-2 rounded-md hover:bg-primer_2"> 
            Register
        </a>
      </div>
    </nav>
  </header>

  <main class="flex flex-col">
    <div class="flex flex-col-reverse lg:flex-row py-5 md:py-10">
      <div class="flex flex-col p-3 md:p-0 w-full md:w-1/2 justify-center items-center md:items-start">
        <div class="leading-snug font-semibold text-3xl md:text-4xl md:mb-4 py-3 md:py-0 text-center md:text-left">Rapih organize every task <br> that ur built</div>
        <p class="text-base p-3 md:p-0 md:text-lg mb-2 md:mb-10 text-center md:text-left">Manage schedule and reach new productivity peaks <br> Private workspace for every
          students
          <br>
          Rapih know
          what
          u
          need.</p>
        <button class="w-full md:w-fit text-white font-medium bg-primer px-3 py-2  rounded-md hover:bg-primer_2"> <a
            href="{{ route('register') }}">Get Rapih
            for
            free</a>
        </button>
      </div>

      <div class="flex w-full md:w-1/2 justify-center pb-3 md:pb-0">
        <svg class="md:max-h-80 max-h-60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 947.48 1240.91">
          <defs>
            <style>
              .cls-1,
              .cls-15,
              .cls-16,
              .cls-19 {
                fill: #fff;
              }

              .cls-1,
              .cls-14,
              .cls-4 {
                stroke: #3f4d79;
              }

              .cls-1,
              .cls-14,
              .cls-17,
              .cls-18,
              .cls-4 {
                stroke-linecap: round;
              }

              .cls-1,
              .cls-12,
              .cls-13,
              .cls-14,
              .cls-15,
              .cls-17,
              .cls-18,
              .cls-19,
              .cls-4 {
                stroke-miterlimit: 10;
              }

              .cls-1,
              .cls-12,
              .cls-14,
              .cls-17,
              .cls-19 {
                stroke-width: 5px;
              }

              .cls-2 {
                fill: #ffb000;
              }

              .cls-3 {
                fill: #e2631e;
              }

              .cls-12,
              .cls-13,
              .cls-14,
              .cls-17,
              .cls-18,
              .cls-4 {
                fill: none;
              }

              .cls-18,
              .cls-4 {
                stroke-width: 7px;
              }

              .cls-5 {
                fill: #ffc0b7;
              }

              .cls-6 {
                fill: #3c4564;
              }

              .cls-7 {
                fill: #fe7523;
              }

              .cls-8 {
                fill: #ffcfc9;
              }

              .cls-9 {
                fill: #3f4d79;
              }

              .cls-10 {
                fill: #fab6ad;
              }

              .cls-11 {
                fill: #ceeff7;
              }

              .cls-12 {
                stroke: #84d7ec;
              }

              .cls-13 {
                stroke: #fe7523;
                stroke-width: 3px;
              }

              .cls-15 {
                stroke: #ecbe02;
                stroke-width: 6px;
              }

              .cls-17,
              .cls-18 {
                stroke: #3cbfd4;
              }

              .cls-19 {
                stroke: #ffb000;
              }
            </style>
          </defs>
          <g id="Layer_2" data-name="Layer 2">
            <g id="Слой_1" data-name="Слой 1">
              <g id="_2" data-name="2">
                <g id="CHAIR">
                  <path class="cls-1"
                    d="M440.7,1234.31h0a6.11,6.11,0,0,1-6.11-5.91l27.2-380.52h37.82l-52.8,380.52A6.11,6.11,0,0,1,440.7,1234.31Z" />
                  <path class="cls-1"
                    d="M675.7,1234.31h0a6.11,6.11,0,0,1-6.11-5.91l-52.8-380.52h37.82l27.2,380.52A6.11,6.11,0,0,1,675.7,1234.31Z" />
                  <path class="cls-1"
                    d="M784.7,1234.31h0a6.11,6.11,0,0,1-6.11-5.91l-52.8-380.52h37.82l27.2,380.52A6.11,6.11,0,0,1,784.7,1234.31Z" />
                  <polygon class="cls-1" points="798.68 766.29 787.76 810.09 751.86 810.09 762.78 766.29 798.68 766.29" />
                  <polygon class="cls-1" points="658.55 766.29 647.63 810.09 611.73 810.09 622.65 766.29 658.55 766.29" />
                  <rect class="cls-2" x="394.97" y="807.08" width="420.05" height="44.79" rx="22.4" />
                  <path class="cls-2"
                    d="M947,458.53l-68.05,273a49.79,49.79,0,0,1-48.31,37.74h-248c-13.73,0-23.28-20.75-18.55-40.32l67.79-280.34c3.22-13.32,11.57-22.16,20.92-22.16H922.24C933.18,426.45,950.73,443,947,458.53Z" />
                </g>
                <g id="CHARACTER">
                  <g id="LEGS">
                    <g id="LEFT_LEG" data-name="LEFT LEG">
                      <g id="FOOT">
                        <path class="cls-3"
                          d="M164.34,1168.44c0,6.92,21.41,28.11,14.2,63.53,0,0-52.82.08-78.73.24-30.8.19-96.31.19-96.31.19s-6.36-28.23,27.38-32.14,76.51-39.57,76.51-39.57Z" />
                        <path class="cls-4" d="M180.81,1235.21c-30.8.19-177.31.19-177.31.19" />
                        <path class="cls-5"
                          d="M108.39,1160.69c3.34-9.31,8.15-39.72,8.15-39.72l54.27,4.76s-9,20.33-7.47,41.71C163.86,1174.65,104.72,1170.9,108.39,1160.69Z" />
                      </g>
                      <path id="PANT" class="cls-6"
                        d="M656.08,781.24c-60.34,24.66-343.21,9.09-343.21,9.09s-5.79,221.61-112.16,336.33c0,0-73.37-2.46-93.48-7.65,0,0,55.6-331.66,95.35-396.81,21-34.49,257.44-87.12,308.42-91.55a286.07,286.07,0,0,0,48.13,25.8C605.47,676,653,683,688.74,685.07,694.23,717.11,695.1,765.3,656.08,781.24Z" />
                    </g>
                    <g id="RIGHT_LEG" data-name="RIGHT LEG">
                      <g id="FOOT-2" data-name="FOOT">
                        <path class="cls-7"
                          d="M205.34,1168.44c0,6.92,21.41,28.11,14.2,63.53,0,0-52.82.08-78.73.24-30.8.19-96.31.19-96.31.19s-6.36-28.23,27.38-32.14,76.51-39.57,76.51-39.57Z" />
                        <path class="cls-4" d="M221.81,1235.21c-30.8.19-177.31.19-177.31.19" />
                        <path class="cls-8"
                          d="M149.39,1160.69c3.34-9.31,8.15-39.72,8.15-39.72l62.27,6.76s-11.3,10.36-15.47,39.71C203.32,1174.59,145.72,1170.9,149.39,1160.69Z" />
                      </g>
                      <path id="PANT-2" data-name="PANT" class="cls-9"
                        d="M699.75,807.31C639.41,832,356.54,816.4,356.54,816.4s5.84,193-127.78,311.68c0,0-66.86-4.81-87-10,0,0,85.64-313.36,104.46-369.81,10.3-30.9,273-90.48,312.88-91.82C624.89,684.21,693,686.6,726.54,685.7,732.53,706,752.26,785.86,699.75,807.31Z" />
                    </g>
                  </g>
                  <g id="LEFT_HAND" data-name="LEFT HAND">
                    <path class="cls-5"
                      d="M527.25,547c-68.44,13.65-232.86,7.8-301.79-6.05a105.47,105.47,0,0,1-11.76,7.89c-9,5.17-26.33,9.35-30.44,9.12s-29.33-4.1-29.33-4.1-.9-2.85,2.79-6.61,30.74-.77,20.85-9c-4.4-3.68-26.31,4.6-35.84,13.78s-14,1.91-14,1.91,9.12-17,12.39-20.08,25-16.14,39.72-18.13c10.66-1.44,36.3.54,49.87,3.81C280,507.6,376.49,492.38,445.19,492.93c9.13-38,20.22-84.52,23.17-98.28l48.84,32Z" />
                    <path class="cls-10" d="M468.36,394.65l-3.08,13.65s12.65,32.05,53.48,42.63l-1.56-24.3Z" />
                  </g>
                  <g id="T-SHIRT">
                    <path class="cls-11"
                      d="M765.82,480.06s-3.65-.23-9.8-.86c-7,51.69-13.16,95.11-13.16,104.64,0,25.61,5,100.61,5,100.61S613,699.58,510.14,630.06c0,0,23.84-32.09,11.47-133.21-8.22-67.27-4.41-70.22-4.41-70.22S492,413.49,456.26,385.18c0,0,18.55-91.7,48.14-109.69s75.51-26.38,106-37.86,76.84-23.4,76.84-23.4c12.37,10.15,71.1,38.86,85.67,56.08C793.67,289.34,822.13,364.81,765.82,480.06Z" />
                    <path class="cls-12" d="M647.25,449.9s12.61-20.71,27.82-96.21" />
                    <path class="cls-12" d="M516.08,424.72c-1.44-18.26.5-52.43,2.86-71.42" />
                  </g>
                  <g id="RIGHT_HAND" data-name="RIGHT HAND">
                    <path class="cls-8"
                      d="M756,479.2s-53.45,135.08-77.65,137.32c-78.82,7.29-210.54-67.77-239-68.65l-12.48-.4c-7,4.11-15.9,7.61-23.43,5.4-15.18-4.44-27.34-15.41-37.4-10.7s-21.67,13.75-28.05,13c-13.35-1.61-21.05-8.7-21.05-8.7s8.31-9.06,16.7-17.67c-5.95,2.33-15,8.73-19.63,10.93-7,3.31-10.6-2.61-10.6-2.61s15.61-13.79,21-17.06c5.21-3.15,19.83-6.46,27.21-6.62,8.93-1.2,57.91-7.89,83.15-5.23,28.94-1.07,87,1,189.28,20.23l29.31-75.18S697.87,473.05,756,479.2Z" />
                    <path class="cls-10"
                      d="M756,479.21s-4.83,12.21-12.25,29.35c-24.31-7.18-63.72-22.43-92-51.18l1.61-4.14S697.88,473.05,756,479.21Z" />
                  </g>
                  <g id="HEAD">
                    <g id="NECK">
                      <path class="cls-8"
                        d="M633.78,124.14s4,57,53.43,90.09c0,0-26.05,57-86.11,60.94s-14.77-29.79-14.77-29.79S570.66,193.53,568,181.17Z" />
                      <path class="cls-10"
                        d="M633.6,153.74c-3,26.07-26,63.44-54.53,67.27-4.48-15.25-9.64-33.22-11.06-39.84L630.46,127l1.94,3.86S634.24,148.24,633.6,153.74Z" />
                    </g>
                    <path id="HEAD-2" data-name="HEAD" class="cls-8"
                      d="M629.08,128.22s.93,17.87-1.47,22.86c-11.05,23-45.7,49.4-72.64,49.4-20.85,0-45.28-63.53-47.48-86.94s.88-60.5,57.4-64.91,60.5,54.31,60.5,54.31Z" />
                    <g id="HAIR">
                      <path class="cls-7"
                        d="M464.21,89.7s-10.51-20.88,7.06-36.21C492,35.38,511,43.77,521.62,32.29s32.81-36,65.8-31.81c29.58,3.76,38.21,24.3,38.21,24.3s18.3-7.71,34.19,13-22.49,107-22.49,107S627,110.4,625.39,103c-3.61-16.57-36.21-12.66-33.56-45.05,0,0-8.83,22.08-42.39,21.66-10-.12-22.92-2.86-35.75-4.76-7.1,12.57-7.29,27.3-6.2,38.74C507.49,113.54,477.48,113.08,464.21,89.7Z" />
                      <path class="cls-13" d="M624.72,24.78s14.82-14.09,30.55-.62" />
                      <path class="cls-13" d="M591.83,56.08s-6.15,29.73-39.66,31.67" />
                    </g>
                    <g id="HEADPHONES">
                      <path class="cls-14" d="M634.27,93.54,623.61,13.05a10.59,10.59,0,0,0-11.27-9.18" />
                      <path class="cls-14"
                        d="M643.14,151.92C646,166,670.9,204.51,627.61,278s13,95.38-15.47,145.72-90.19,47.58-87,131.82c2.1,55.43-47.6,62.93-44.73,0" />
                      <path class="cls-14" d="M552.43,480.07c14.86-12.13,29.89-80.82,6.05-119.9s-47.14-91.76-12-158.12" />
                      <rect class="cls-15" x="615.37" y="93.35" width="44.68" height="59.05" rx="11.71"
                        transform="translate(-11.2 96.67) rotate(-8.59)" />
                    </g>
                  </g>
                </g>
                <g id="TABLE">
                  <path class="cls-16"
                    d="M20.9,575.65H559c5.72,0,10.36,6.64,10.36,14.84v1.36c0,8.19-4.64,14.83-10.36,14.83H153.9" />
                  <path class="cls-17"
                    d="M26.9,573.65H559c5.72,0,10.36,6.64,10.36,14.84v1.36c0,8.19-4.64,14.83-10.36,14.83H155.9" />
                  <polygon class="cls-16"
                    points="533.71 1240.91 431.76 605.68 466.86 605.68 567.81 1239.91 533.71 1240.91" />
                  <polygon class="cls-11"
                    points="472.79 637.94 434.93 623.81 431.75 605.68 466.87 605.68 472.79 637.94" />
                  <polyline class="cls-18" points="531.71 1236.91 431.76 605.68 466.86 605.68 565.81 1235.91" />
                </g>
                <g id="LAPTOP">
                  <path class="cls-19"
                    d="M405.1,547.5H102.27a19.59,19.59,0,0,1-18.4-12.84L14.08,344.47a15.59,15.59,0,0,1,14.64-21H335.55A22.08,22.08,0,0,1,356.28,338L423.5,521.16A19.6,19.6,0,0,1,405.1,547.5Z" />
                  <path class="cls-19"
                    d="M391.92,547.5H99.27a19,19,0,0,1-17.78-12.84L14.05,344.47c-3.61-10.17,3.67-21,14.15-21H324.71a21.38,21.38,0,0,1,20,14.48l65,183.17C414.23,534,405.08,547.5,391.92,547.5Z" />
                  <rect class="cls-19" x="88.58" y="547.5" width="455.83" height="20.66" rx="10.07" />
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
    </div>


    <div class="flex md:hidden border-t-2 m-4">

    </div>

    <div class="flex flex-col items-center pt-4 md:pt-10 py-0 md:py-10">
      <div class="font-medium text-2xl text-center">
        It’s more than work. It’s a way of work well.
      </div>

      <div class="text-center py-4 px-2 md:px-44">
        Start with a rapih board, lists, and cards. Customize and expand with more features. Manage projects, organize tasks, and your spirit—all in one place.
      </div>

      <div>
        <svg class="max-h-96" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300" width="406" height="306" class="illustration styles_illustrationTablet__1DWOa"><ellipse cx="207.55" cy="256.09" rx="164.68" ry="11.38" fill="#e6e6e6" opacity="0.45"></ellipse><path d="M111.88,179.92,103,208.24A29.06,29.06,0,0,1,87.75,225.8l-13,6.19.52,3.84,19.46-4.2a34.26,34.26,0,0,0,21.09-17.88l13.74-28.29Z" fill="#f4a28c"></path><path d="M300.22,244.67s-8.93-2.44-10.87-10.75c0,0,13.83-2.79,14.23,11.49Z" fill="#3AAFA9" opacity="0.19"></path><path d="M301.32,243.79s-6.24-9.86-.75-19.08c0,0,10.52,6.68,5.84,19.1Z" fill="#3AAFA9" opacity="0.51"></path><path d="M302.92,243.79s3.3-10.41,13.26-12.38c0,0,1.87,6.76-6.45,12.41Z" fill="#3AAFA9"></path><polygon points="296.45 243.56 298.26 255.94 309.66 255.99 311.34 243.62 296.45 243.56" fill="#24285b"></polygon><rect x="182.93" y="93.02" width="98.07" height="163.13" fill="#24285b"></rect><rect x="178.2" y="36.86" width="98.07" height="37.7" transform="translate(-6.03 37.6) rotate(-9.34)" fill="#24285b"></rect><rect x="194.12" y="26.29" width="58.34" height="10.89" transform="matrix(0.99, -0.16, 0.16, 0.99, -2.19, 36.65)" fill="#3AAFA9"></rect><rect x="191.02" y="141.61" width="81.71" height="26.09" rx="9.29" fill="#fff" opacity="0.07"></rect><circle cx="257.83" cy="154.69" r="6.98" fill="#3AAFA9"></circle><rect x="199.39" y="151.37" width="41.13" height="6.63" fill="#fff"></rect><rect x="191.02" y="103.61" width="81.71" height="26.09" rx="9.29" fill="#fff" opacity="0.07"></rect><circle cx="257.83" cy="116.69" r="6.98" fill="#3AAFA9"></circle><rect x="199.39" y="113.37" width="41.13" height="6.63" fill="#fff"></rect><rect x="186.28" y="42.68" width="81.71" height="26.09" rx="9.29" transform="matrix(0.99, -0.16, 0.16, 0.99, -6.03, 37.59)" fill="#fff" opacity="0.07"></rect><circle cx="252.76" cy="51.54" r="6.98" fill="#3AAFA9"></circle><rect x="194.82" y="54.37" width="41.13" height="6.63" transform="translate(-6.51 35.71) rotate(-9.34)" fill="#fff"></rect><rect x="191.02" y="181.26" width="81.71" height="26.09" rx="9.29" fill="#fff" opacity="0.07"></rect><circle cx="257.83" cy="194.34" r="6.98" fill="#3AAFA9"></circle><rect x="199.39" y="191.02" width="41.13" height="6.63" fill="#fff"></rect><rect x="191.02" y="220.91" width="81.71" height="26.09" rx="9.29" fill="#fff" opacity="0.07"></rect><circle cx="257.83" cy="233.99" r="6.98" fill="#3AAFA9"></circle><rect x="199.39" y="230.67" width="41.13" height="6.63" fill="#fff"></rect><polygon points="141.22 187.91 145.38 248.56 141.51 249.9 126.11 193.16 141.22 187.91" fill="#f4a28c"></polygon><path d="M146.17,249.6s.84,3.59,3.55,4.71,1.34,5-2.74,2.65a26.25,26.25,0,0,1-3.6-2.52,7.71,7.71,0,0,0-3.65-1.56,1.24,1.24,0,0,1-1-1c-.55-2,3.95-3.86,3.95-3.86Z" fill="#3AAFA9"></path><path d="M75.26,235.83s-2.74,2.1-2.66,4.84-3.78,3.07-3.31-1.32a24.35,24.35,0,0,1,.76-4,7.08,7.08,0,0,0-.07-3.71,1.2,1.2,0,0,1,.52-1.25c1.49-1.22,4.82,1.9,4.82,1.9Z" fill="#3AAFA9"></path><polygon points="118.01 100 119.45 105.83 114.72 108.33 113.89 98.35 118.01 100" fill="#f4a28c"></polygon><path d="M112.78,92.73a3.56,3.56,0,0,1,5.94-.52c1.75,2.2,3.8,5.64,1,7.2-4.21,2.39-7.48-3-7.48-3A6.54,6.54,0,0,1,112.78,92.73Z" fill="#f4a28c"></path><rect x="67.37" y="123.51" width="34.3" height="24.23" transform="translate(29.61 285.7) rotate(-127.97)" fill="#ffd200"></rect><path d="M93.36,118.29S73,150.13,77.07,154.82c12.94,14.88,41.67-18.64,41.67-18.64Z" fill="#f4a28c"></path><path d="M139.42,113.54A35.15,35.15,0,0,0,99,112.81c-5.33,3.63-9.44,9-7.56,16.9,4.41,18.4,18.51,30.53,19,46.72l33.38-2.24V153.35a14.27,14.27,0,0,1,4.55-10.51c2.91-2.68,5.8-7.05,3.82-13.06C150.39,124.45,145.84,118.25,139.42,113.54Z" fill="#3AAFA9"></path><path d="M115.43,96.45s-1-.94-1.52.24,1.2,1.91,1.79,1.34S115.43,96.45,115.43,96.45Z" fill="#f4a28c"></path><path d="M122.9,122.21s-7.21,13.79,1.16,27.23-7.5,26.58-7.5,26.58l27.22-1.83V162.31s-1.68-15,3.51-18.41c0,0,8.88-6.4,4.1-16.09s-28.49-5.6-28.49-5.6" opacity="0.08"></path><path d="M109,114c.64-2.49,3.61-7-.58-15.19-.88-1.73-1.58-5.78.09-8.58,4-6.71,10.38-4.42,9.62-.66s-1.29,5.55-1.29,5.55,12.12,8.69,10.35,15.1C125.62,115.87,106.3,124.34,109,114Z" fill="#24285b"></path><polygon points="108.93 167.91 143.78 167.91 149.33 216.13 97.63 213.8 108.93 167.91" fill="#24285b"></polygon><path d="M124.28,132a9.79,9.79,0,0,1,1.44-13.86,50.17,50.17,0,0,1,6.38-4.24c13.29-7.61,35.38-24.43,44.68-47.63,0,0,2.18-8.48,8.65-8.18s4.24,8.34-2.2,8.26c0,0-5.27,50.34-43.94,69.07a12.46,12.46,0,0,1-15-3.42Z" fill="#f4a28c"></path><polygon points="100 47.99 100 66.36 111.87 66.36 114.47 73.67 117.54 66.36 129.41 66.36 129.41 47.99 100 47.99" fill="#e6e6e6"></polygon><path d="M113.22,61.28h0a.91.91,0,0,1-.68-.36l-3.11-4a.92.92,0,0,1,1.45-1.13l2.44,3.14,6-6.5a.92.92,0,1,1,1.35,1.25L113.9,61A.93.93,0,0,1,113.22,61.28Z" opacity="0.12"></path></svg>
      </div>
    </div> 

  </main>

    <div class="flex md:hidden border-t-2 m-4">
    </div>

    <footer class="flex flex-col justify-center opacity-90">
      <div class="flex flex-col md:flex-row gap-8 p-6 md:p-0 justify-between py-8 md:py-8">
        <div class="flex items-center self-start">
          <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="500" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="id1"><path d="M 109.035156 32.359375 L 342.859375 32.359375 L 342.859375 266 L 109.035156 266 Z M 109.035156 32.359375 " clip-rule="nonzero"/></clipPath><clipPath id="id2"><path d="M 32.359375 109.035156 L 266 109.035156 L 266 342.859375 L 32.359375 342.859375 Z M 32.359375 109.035156 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#id1)"><path fill="#111" d="M 109.496094 32.363281 L 109.496094 93.015625 L 146.953125 93.015625 L 146.953125 69.816406 L 305.402344 69.816406 L 305.402344 228.269531 L 146.953125 228.269531 L 146.953125 163.433594 L 109.496094 163.433594 L 109.496094 265.722656 L 342.855469 265.722656 L 342.855469 32.363281 L 109.496094 32.363281 " fill-opacity="1" fill-rule="nonzero"/></g><g clip-path="url(#id2)"><path fill="#3AAFA9" d="M 228.265625 305.402344 L 69.816406 305.402344 L 69.816406 146.953125 L 228.265625 146.953125 L 228.265625 211.785156 L 265.722656 211.785156 L 265.71875 109.5 L 32.359375 109.5 L 32.359375 342.859375 L 265.722656 342.859375 L 265.722656 282.203125 L 228.265625 282.203125 L 228.265625 305.402344 " fill-opacity="1" fill-rule="nonzero"/></g></svg>
          <h2 class="pl-1 text-2xl font-semibold">Rapih</h2>
        </div>
        <div class="flex flex-col font-semibold gap-2">
          <div>
            About Rapih
          </div>
          <div class="font-normal">
            Overview
          </div>
          <div class="font-normal">
            Pricing
          </div>
          <div class="font-normal">
            Desktop apps
          </div>
          <div class="font-normal">
            Web Clipper
          </div>
        </div>

        <div class="flex flex-col font-semibold gap-2">
          <div>
            Social Media
          </div>
          <div class="font-normal">
            Instagram
          </div>
          <div class="font-normal">
            Twitter
          </div>
          <div class="font-normal">
            Youtube
          </div>
        </div>

        <div class="flex flex-col font-semibold gap-2">
          <div>
            Community
          </div>
          <div class="font-normal">
            Discord
          </div>
          <div class="font-normal">
            Github
          </div>
        </div>
      </div>

      <div class="flex justify-center border-t-2">
        <div class="text-sm my-4">Copyright © 2022 Rapih</div>
      </div>
    


  </footer>

</div>





@endsection



