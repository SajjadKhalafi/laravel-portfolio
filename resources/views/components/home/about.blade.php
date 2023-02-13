<section id="about" class="overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-white dark:bg-slate-800">
  <div class="container mx-auto">
    <div class="-mx-4 flex flex-wrap items-center justify-between">
      <div class="w-full px-4 lg:w-6/12">
        <div class="-mx-3 flex items-center sm:-mx-4">
          <div class="w-full px-3 sm:px-4 xl:w-1/2">
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('img/image-1.jpg') }}"
                alt=""
                class="w-full rounded-2xl"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('img/image-2.jpg') }}"
                alt=""
                class="w-full rounded-2xl"
              />
            </div>
          </div>
          <div class="w-full px-3 sm:px-4 xl:w-1/2">
            <div class="relative z-10 my-4">
              <img
                src="{{ url('img/image-3.jpg') }}"
                alt=""
                class="w-full rounded-2xl"
              />
              <x-about-dots/>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
        <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-2 block">
             <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                 "Seek knowledge from the cradle to the grave"
             </blockquote>
          </span>
          <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
            About Me
          </h2>
          <p class="text-base dark:text-gray-400 mb-8">
            It's been almost a year since I learned programming and I was often busy learning. <br />
            Along this path, I sought to master the Laravel framework, and for this reason, I got acquainted with good tools such as Livewire, Alpine.js, Tailwind CSS. <br />
            For this reason, I made several small and large TALL Stack projects. <br />
          </p>
          <p class="text-base dark:text-gray-400 mb-8">
            I am currently studying engineering at Yadgar-Imam Azad University of Software Engineering. <br />
            To contact me, you can click on the button below and fill out the relevant contact form. <br />
          </p>
          <x-button-link href="#contact" variant="outline-primary" class="rounded-lg" >
            Contact Me
          </x-button-link>
        </div>
      </div>
    </div>
  </div>
</section>
