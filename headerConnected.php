<!-- ====== Navbar Section Start -->
<div
  class="
    ud-header
    bg-blue
    absolute
    top-0
    left-0
    z-40
    w-full
    flex
    items-center
  "
>
  <div class="container" >
    <div class="flex -mx-4 items-center justify-between relative">
      <div class="px-4 w-60 max-w-full">
        <a href="index.php" class="navbar-logo w-full block py-5">
          <img
            src="assets/images/logo/logo-white.png"
            alt="logo"
            class="w-full header-logo"
          />
        </a>
      </div>
      <div class="flex px-4 justify-between items-center w-full">
        <div>
          <button
            id="navbarToggler" 
            class="
              block
              absolute
              right-4
              top-1/2
              -translate-y-1/2
              lg:hidden
              focus:ring-2
              ring-primary
              px-3
              py-[6px]
              rounded-lg
            "
          >
            <span
              class="relative w-[30px] h-[2px] my-[6px] block bg-white"
            ></span>
            <span
              class="relative w-[30px] h-[2px] my-[6px] block bg-white"
            ></span>
            <span
              class="relative w-[30px] h-[2px] my-[6px] block bg-white"
            ></span>
          </button>
          <nav
            id="navbarCollapse"
            class="
              absolute
              py-5
              lg:py-0 lg:px-4
              xl:px-6
              bg-white
              lg:bg-transparent
              shadow-lg
              rounded-lg
              max-w-[250px]
              w-full
              lg:max-w-full lg:w-full
              right-4
              top-full
              hidden
              lg:block lg:static lg:shadow-none
            "
          >
            <ul class="blcok lg:flex">
              <li class="relative group">
                <a
                  href="#home"
                  class="
                    ud-menu-scroll
                    text-base text-dark
                    lg:text-white
                    lg:group-hover:opacity-70
                    lg:group-hover:text-white
                    group-hover:text-primary
                    py-2
                    lg:py-6 lg:inline-flex lg:px-0
                    flex
                    mx-8
                    lg:mr-0
                  "
                >
                  Home
                </a>
              </li>
              <li class="relative group">
                <a
                  href="/#about"
                  class="
                    ud-menu-scroll
                    text-base text-dark
                    lg:text-white
                    lg:group-hover:opacity-70
                    lg:group-hover:text-white
                    group-hover:text-primary
                    py-2
                    lg:py-6 lg:inline-flex lg:px-0
                    flex
                    mx-8
                    lg:mr-0 lg:ml-7
                    xl:ml-12
                  "
                >
                  About
                </a>
              </li>
                         
              <li class="relative group">
                <a
                  href="/#pricing"
                  class="
                    ud-menu-scroll
                    text-base text-dark
                    lg:text-white
                    lg:group-hover:opacity-70
                    lg:group-hover:text-white
                    group-hover:text-primary
                    py-2
                    lg:py-6 lg:inline-flex lg:px-0
                    flex
                    mx-8
                    lg:mr-0 lg:ml-7
                    xl:ml-12
                  "
                >
                  Pricing
                </a>
              </li>
              <li class="relative group">
                <a
                  href="/#team"
                  class="
                    ud-menu-scroll
                    text-base text-dark
                    lg:text-white
                    lg:group-hover:opacity-70
                    lg:group-hover:text-white
                    group-hover:text-primary
                    py-2
                    lg:py-6 lg:inline-flex lg:px-0
                    flex
                    mx-8
                    lg:mr-0 lg:ml-7
                    xl:ml-12
                  "
                >
                  Team
                </a>
              </li>
              <li class="relative group">
                <a
                  href="/main.php"
                  class="
                    
                    text-base text-dark
                    lg:text-white
                    lg:group-hover:opacity-70
                    lg:group-hover:text-white
                    group-hover:text-primary
                    py-2
                    lg:py-6 lg:inline-flex lg:px-0
                    flex
                    mx-8
                    lg:mr-0 lg:ml-7
                    xl:ml-12
                  "
                >
                  Réserver
                </a>
              </li>
              
            </ul>
          </nav>
        </div>
        <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
          <a
            href="signin.php"
            class="
              text-base
              font-medium
              text-white
              hover:opacity-70
              py-3
              px-7
              loginBtn
           "
          >
            Ma réservation
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ====== Navbar Section End -->
