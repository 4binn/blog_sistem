<div class="min-h-full">
  <nav x-data="{isOpen:false}"
  class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
              <a href="/" aria-current="page" class="rounded-md bg-gray-950/50 px-3 py-2 text-sm font-medium text-white">Home</a>
              <a href="blog" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Blog</a>
              <a href="about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">About Us</a>
              <a href="contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block" x-data="{ isOpen:false }">
  <div class="ml-4 flex items-center md:ml-6">

    <!-- Profile dropdown -->
    <div class="relative ml-3">
      <button @click="isOpen = !isOpen"
        class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
        class="size-8 rounded-full outline -outline-offset-1 outline-white/10" />
      </button>

      <!-- Dropdown -->
      <div
        x-show="isOpen"
        @click.outside="isOpen = false"
        x-transition
        class="absolute right-0 z-50 mt-2 w-48 origin-top-right rounded-md bg-gray-800 py-1 shadow-sm ring-1 ring-gray-700 ring-opacity-5 focus:outline-none">

        <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Your profile</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Settings</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Sign out</a>
      </div>
    </div>

  </div>
</div>
<div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button @click="isOpen = !isOpen"
          type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div x-show="isOpen"
    x-transition:enter="transition ease-out duration-200"
     x-transition:enter-start="opacity-0 transform -translate-y-2"
     x-transition:enter-end="opacity-100 transform translate-y-0"
     x-transition:leave="transition ease-in duration-150"
     x-transition:leave-start="opacity-100 transform translate-y-0"
     x-transition:leave-end="opacity-0 transform -translate-y-2"
    class="md:hidden bg-gray-800 border-t border-white/10 pb-3">
    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
        <a href="/" aria-current="page" class="block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white">Home</a>
        <a href="blog" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Blog</a>
        <a href="about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
        <a href="contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
      </div>
      <div class="border-t border-white/10 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full outline -outline-offset-1 outline-white/10" />
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Your profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Sign out</a>
        </div>
      </div>
    </div>
  </nav>
