<?php
    include($_SERVER['DOCUMENT_ROOT'] ."/fixit/Controller/registration.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<section class="container gradient-form h-full bg-neutral-200 m-auto">
  <div class="h-full p-10">
    <div
      class="flex h-full flex-wrap items-center justify-center text-neutral-200">
      <div class="w-full">
        <div
          class="block bg-neutral-800 shadow-lg">
          <div class="g-0 lg:flex lg:flex-wrap">
          <div
              class="flex items-center lg:w-6/12"
              style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593)">
              <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                <h4 class="mb-6 text-xl font-semibold">
                  We are more than just a company
                </h4>
                <p class="text-sm">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                  elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis
                  nostrud exercitation ullamco laboris nisi ut aliquip ex
                  ea commodo consequat.
                </p>
              </div>
            </div>
            <div class="px-4 md:px-0 lg:w-6/12">
              <div class="md:mx-6 md:p-12">
                <a href="http://localhost/fixit/View/index.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: #ea580c"><path d="m15.539 14.059-1.874 1.875-1.777 1.777-.347.35a3.993 3.993 0 0 1-3.785 1.048A2.41 2.41 0 0 1 3 18.567c0-1.138.792-2.092 1.852-2.342a3.993 3.993 0 0 1 1.047-3.811l.135-.135 1.777 1.778-.138.135a1.48 1.48 0 0 0 0 2.092 1.462 1.462 0 0 0 2.09 0l.349-.349 1.775-1.778 1.877-1.879 1.775 1.781zm.693 4.988a3.986 3.986 0 0 1-3.996-.988l-.135-.139 1.773-1.777.135.139a1.48 1.48 0 0 0 2.09 0 1.474 1.474 0 0 0-.002-2.086l-.35-.349-1.773-1.777-1.877-1.878 1.777-1.776 1.875 1.879 1.774 1.777.349.349a3.962 3.962 0 0 1 1.058 3.766 2.407 2.407 0 0 1-.336 4.79 2.392 2.392 0 0 1-2.352-1.924l-.01-.006zm-8.001-8.962 1.881-1.879 1.777-1.777.347-.346a3.972 3.972 0 0 1 3.949-1.002 2.408 2.408 0 1 1 2.699 2.716 3.98 3.98 0 0 1-1.012 3.925l-.137.139-1.777-1.777.139-.138a1.474 1.474 0 1 0-2.086-2.085l-.347.346-1.777 1.776-1.879 1.876-1.777-1.774zm-1.99 1.984-.346-.347a3.984 3.984 0 0 1-.999-3.965 2.414 2.414 0 0 1-1.874-2.35A2.41 2.41 0 0 1 5.43 3c1.197 0 2.19.875 2.378 2.019a3.99 3.99 0 0 1 3.734 1.061l.138.14-1.778 1.776-.137-.136a1.481 1.481 0 0 0-2.088 0 1.481 1.481 0 0 0-.004 2.092l.349.35 1.777 1.777 1.879 1.879-1.775 1.777-1.883-1.879-1.778-1.777v-.01h-.001z"></path></svg></a>
                  <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
                    PCFixer
                  </h4>

                <form method="POST">
                  <p class="mb-4">Please login to your account</p>
                  <div class="relative mb-4">
                    <input
                      type="text"
                      name="username"
                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] focus:placeholder:opacity-100"
                      id="exampleFormControlInput1"
                      placeholder="Username" />
                  </div>
                  <div class="relative mb-4">
                    <input
                      type="email"
                      name="email"
                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] focus:placeholder:opacity-100"
                      id="exampleFormControlInput11"
                      placeholder="Email" />
                  </div>
                  <div class="relative mb-4">
                    <input
                      type="password"
                      name="password"
                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] focus:placeholder:opacity-100"
                      id="exampleFormControlInput11"
                      placeholder="Password" />
                  </div>
                  <div class="relative mb-4">
                    <input
                      type="password"
                      name="confirmPassword"
                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] focus:placeholder:opacity-100"
                      id="exampleFormControlInput11"
                      placeholder="Confirm Password" />
                  </div>
                  <div class="mb-12 pb-1 pt-1 text-center">
                    <button
                      class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-dark-3 transition duration-150 ease-in-out hover:shadow-dark-2 focus:shadow-dark-2 focus:outline-none focus:ring-0 active:shadow-dark-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                      type="submit"
                      name="userRegistration"
                      data-twe-ripple-init
                      data-twe-ripple-color="light"
                      style="
                        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
                      ">
                      Register
                    </button>
                  </div>
                  <div class="flex items-center justify-between pb-6">
                    <p class="mb-0 me-2">Have an account?</p>
                    <button
                      type="button"
                      class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-danger-50/50 hover:text-danger-600 focus:border-danger-600 focus:bg-danger-50/50 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 dark:hover:bg-rose-950 dark:focus:bg-rose-950"
                      data-twe-ripple-init
                      data-twe-ripple-color="light">
                      <a href="http://localhost/fixit/View/login.php">Login</a>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>