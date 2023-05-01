<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Blood Bank Management System</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css"
    />
    <link rel="stylesheet" href="donate.css" />
  </head>
  <body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Navigation Bar -->
  
   <nav class="bg-red-700 p-2 mt-0 w-full">
      <div class="container mx-auto flex flex-wrap items-center">
        <div
          class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold"
        >
          <a
            class="text-white no-underline hover:text-white hover:no-underline"
            href="#"
          >
            <span class="text-2xl pl-2">Blood Bank Management System</span>
          </a>
        </div>
        <div class="flex w-full md:w-1/2 justify-center md:justify-end">
          <ul
            class="list-reset flex justify-between flex-1 md:flex-none items-center"
          >
            <li class="flex-1 md:flex-none md:mr-3">
              <a
                class="inline-block py-2 px-4 text-white font-bold no-underline"
                href="in.html"
                >HOME</a
              >
            </li>
           
            <li class="flex-1 md:flex-none md:mr-3">
              <a
                class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                href="AdminLogin.php"
                >ADMIN</a
              >
            </li>
            <li class="flex-1 md:flex-none md:mr-3">
              <a
                class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                href="in.html#learn"
                >LEARN</a
              >
            </li>
            <li class="flex-1 md:flex-none md:mr-3">
              <a
                class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                href="contact.php"
                >CONTACT</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="parent">
      <div class="RegCamp"><a href="registration.php">Donor Registration</a></div>
      <div class="DonerLogin"><a href="donorLogin.php">Donor Login</a></div>
    </div>
   
   
  </body>
</html>
