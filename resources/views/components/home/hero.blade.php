{{--Hero Section Start--}}
<div class="relative bg-white dark:bg-slate-800 pt-[60px] pb-[110px] lg:pt-[80px]">
  <div class="container mx-auto">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4 lg:w-5/12">
        <div class="hero-content">
          <h1
            class="mb-3 text-4xl font-bold leading-snug text-dark dark:text-gray-200 sm:text-[42px] lg:text-[40px] xl:text-[42px]"
          >
            My Name Is <br>
            Sajjad Khalafi
          </h1>
          <p class="mb-8 max-w-[480px] text-base text-body-color">
            I am Junior Backend Developer. <br>
            I always wanted to make a website, that's why I learned programming.
          </p>

          <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
            My Projects
          </x-button-link>

          <div class="clients pt-16">
            <h6
              class="mb-2 flex items-center text-xs font-normal text-body-color dark:text-gray-300"
            >
              Follow me on Social Media
              <span
                class="ml-2 inline-block h-[1px] w-8 bg-body-color"
              ></span>
            </h6>

            <x-social-icons class="py-3" />

          </div>
        </div>
      </div>
      <div class="hidden px-4 lg:block lg:w-1/12"></div>
      <div class="w-full px-4 lg:w-6/12">
        <div class="lg:ml-auto lg:text-right">
          <div class="relative z-10 inline-block pt-11 lg:pt-0">
            <img
              src="{{ url('img/hero-image-01.png') }}"
              alt="hero"
              class="max-w-full lg:ml-auto"
            />
            <span class="absolute -left-8 -bottom-8 z-[-1]">
                  <svg
                    width="93"
                    height="93"
                    viewBox="0 0 93 93"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                  </svg>
                </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{--Hero Section End--}}
