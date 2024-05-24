 <!-- start-navbar -->
 <nav class="w-full h-[120px] z-50">
     <div class="bg-blue-50 h-[70%] flex justify-between items-center px-8">
         <img src="icon/logo.webp" alt="" srcset="">
         <label class="md:hidden h-12 w-12 flex justify-center items-center rounded-lg bg-[#215968] text-white " for="menu">
             <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 24 24">
                 <rect width="24" height="24" fill="none" />
                 <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 6h18M3 12h18M3 18h18" />
             </svg>
         </label>
     </div>
     <input class="peer hidden" type="checkbox" name="" id="menu">
     <ol class="uppercase text-start hidden peer-checked:grid md:grid gap-0 bg-[#215968]  md:grid-cols-6 grid-flow-row grid-cols-1 md:grid-flow-col h-[30%] my-auto md:text-center cursor-pointer text-white font-semibold">
         <a href="index.php" class="  z-40 bg-[#215968] hover:bg-[#3B7382] flex items-center justify-center text-center ">Beranda</a>
         <li class="z-40 group  bg-[#215968] hover:bg-[#3B7382] relative flex flex-col items-center justify-center text-center ">Profil
             <div class="invisible z-40 group-hover:visible  h-1 group-hover:h-auto  md:absolute md:top-0 md:translate-y-9 bg-slate-100 shadow-xl text-[#262626]  w-full ">
                 <ol class="grid text-start ">
                     <a href="sejarah.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">Sejarah</a>
                     <a href="tugas-fungsi.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">Tugas & Fungsi</a>
                     <a href="struktur_organisasi.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">Struktur Organisasi</a>
                     <a href="unit-kerja.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">Unit kerja</a>
                     <a href="informasi-pejabat.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">Informasi pejabat</a>
                     <a href="faq.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">FAQ</a>
                     <a href="peta_lokasi.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">Peta Lokasi</a>
                 </ol>
             </div>
         </li>
         <li class="z-40 group  bg-[#215968] hover:bg-[#3B7382] relative flex flex-col items-center justify-center text-center ">Activity PMS NUDP
             <div class="invisible z-40 group-hover:visible  h-1 group-hover:h-auto  md:absolute md:top-0 md:translate-y-9 bg-slate-100 shadow-xl text-[#262626]  w-full ">
                 <ol class="grid text-start ">
                     <a href="urban.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">Urban Settlement</a>
                     <a href="urban.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">Water, Sanitation, Resillene</a>
                     <a href="urban.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">ESMF Safeguard</a>
                     <a href="urban.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">Transportation And Road</a>
                     <a href="urban.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">Financial Management and Accounting Expert</a>
                     <a href="urban.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">Knowledge Management and Capacity Building</a>
                     <a href="urban.php" class="  px-10 py-1 hover:bg-[#215968] hover:text-white">Monitoring & Evaluation</a>
                 </ol>
             </div>
         </li>
         <a href="pengaduan.php" class="  z-40  bg-[#215968] hover:bg-[#3B7382] flex items-center justify-center text-center">Pengaduan Masyarakat</a>
         <a href="berita terbaru.php" class="  z-40  bg-[#215968] hover:bg-[#3B7382] flex items-center justify-center text-center">Berita Terbaru</a>
         <a href="kontak.php" class="  z-40  bg-[#215968] hover:bg-[#3B7382] flex items-center justify-center text-center">Kontak</a>
     </ol>
 </nav>
 <!-- end-navbar -->

 <!-- start-header -->
 <div id="default-carousel" class="relative w-full h-[75vh]   " data-carousel="slide">
     <!-- Carousel wrapper -->
     <div class="relative h-full overflow-hidden  bg-[#215968]">
         <!-- Item 1 -->
         <div class="hidden duration-700 ease-in-out" data-carousel-item>
             <img src="img/Kemen-PUPR.jpg" class="object-cover object-center w-full h-full  absolute block" alt="...">
         </div>
         <!-- Item 2 -->
         <div class="hidden duration-700 ease-in-out" data-carousel-item>
             <img src="img/peresmian-pupr.jpg" class="object-cover object-center w-full h-full  absolute block" alt="...">
         </div>
         <!-- Item 3 -->
         <div class="hidden duration-700 ease-in-out" data-carousel-item>
             <img src="img/pupr-depan.webp" class="object-cover object-center w-full h-full  absolute block" alt="...">
         </div>
         <!-- Item 4 -->
         <div class="hidden duration-700 ease-in-out" data-carousel-item>
             <img src="img/seminar-pup.jpeg" class="object-cover object-center w-full h-full  absolute block" alt="...">
         </div>
         <!-- Item 5 -->
         <div class="hidden duration-700 ease-in-out" data-carousel-item>
             <img src="img/rapat-nudp.jpg" class="object-cover object-center w-full h-full  absolute block" alt="...">
         </div>
     </div>
     <!-- Slider indicators -->
     <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse ">
         <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
         <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
         <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
         <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
         <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
     </div>
     <!-- Slider controls -->
     <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
         <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
             <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
             </svg>
             <span class="sr-only">Previous</span>
         </span>
     </button>
     <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
         <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
             <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
             </svg>
             <span class="sr-only">Next</span>
         </span>
     </button>
 </div>
 <!-- end-header -->