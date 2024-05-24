<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- initialize tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
    <style>
        .none::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="text-lg">

    <?php include 'nav.php'; ?>

    <main class=" mx-16 my-8 md:mx-32 md:my-16">
        <h1 class="mx-auto block text-center text-4xl uppercase font-bold my-6 text-[#215968]">Beranda</h1>
        <section class="w-full   grid grid-cols-1 md:grid-cols-2 text-justify">
            <div class="bg-blue-100 flex justify-end items-center w-full md:w-[30vw]  aspect-square overflow-hidden rounded-lg m-6">
                <img class="w-full h-full" src="img/nuds.jpg" alt="" srcset="">
            </div>
            <div class=" overflow-hidden m-6">
                <h2 class="block text-2xl font-semibold tracking-wide mb-4">Apa itu NUDS?</h2>
                <div class="content  w-full h-full overflow-hidden">
                    <p>National Urban Development Strategy (NUDS) merupakan bagian dari kegiatan National Urban Development Project (NUDP) sebagai basis kebijakan dan strategi perencanaan pembangunan infrastruktur permukiman perkotaan nasional dalam menghadapi tantangan dunia terkait pengembangan kawasan perkotaan. Kebijakan dan strategi nasional jangka panjang tersebut dikembangkan berdasarkan sistem kota-kota dan karakteristik wilayah dengan memperhatikan pada standar global yang berlaku untuk mewujudkan kota masa depan berdasarkan prinsip-prinsip layak huni, kota hijau (green and ecologically sustain), dan kota cerdas. </p>
                </div>
            </div>
        </section>

        <section class="w-full   grid grid-cols-1 md:grid-cols-2  text-justify">
            <div class="bg-blue-100 flex justify-end items-center w-full md:w-[30vw] aspect-square  overflow-hidden rounded-lg m-6 md:order-2">
                <img class="w-full h-full" src="img/tujuan-nuds.jpg" alt="" srcset="">
            </div>
            <div class=" overflow-hidden m-6">
                <h2 class="block text-2xl font-semibold tracking-wide mb-4 ">Tujuan NUDS?</h2>
                <div class="content w-full h-full overflow-hidden">
                    <p>
                    <ol class="list-decimal list-inside">
                        <li>Merumuskan kebijakan strategi pelaksanaan Visi Emas Indonesia 2045</li>
                        <li>Memberikan arahan lima tahunanan pengembangan sistem kota-kota 2045</li>
                        <li>Merumuskan agenda pemenuhan infrastruktur permukiman perkotaan sesuai karakteristik wilayah dengan standar baru 2045 atau <span class="italic">Smart Agenda 2045</span></li>
                    </ol>
                    </p>
                </div>
            </div>
        </section>

        <h1 class="mx-auto block text-center text-4xl uppercase font-bold my-6 text-[#215968]">Berita Terbaru</h1>

        <section class="flex overflow-x-scroll p-1 none">
            <div class="w-auto mx-auto flex space-x-5">
                <a href="detail.php" class=" group hover:text-[#215968] text-[#262626] aspect-[3/4] h-[400px] rounded-lg overflow-hidden ">
                    <div class="bg-slate-300 aspect-square w-full rounded-lg overflow-hidden group-hover:shadow-2xl group-hover:-translate-y-1 shadow-lg duration-500 transition-all">
                        <img class="w-full h-full object-cover" src="hero/hero.jpg" alt="" srcset="">
                    </div>
                    <div class="py-2 px  h-full w-full">
                        <p class=" w-full flex justify-between text-sm  "><span>Jumat</span><span>05 Mei 2024</span></p>
                        <h3 class="font-semibold w-full h-[50px] overflow-hidden   capitalize text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, aspernatur doloribus rem debitis perspiciatis illo veritatis fuga libero omnis sunt quia, excepturi labore inventore atque reiciendis dignissimos officiis, ea odio?</h3>
                    </div>
                </a>
                <a href="detail.php" class=" group hover:text-[#215968] text-[#262626] aspect-[3/4] h-[400px] rounded-lg overflow-hidden ">
                    <div class="bg-slate-300 aspect-square w-full rounded-lg overflow-hidden group-hover:shadow-2xl group-hover:-translate-y-1 shadow-lg duration-500 transition-all">
                        <img class="w-full h-full object-cover" src="hero/hero.jpg" alt="" srcset="">
                    </div>
                    <div class="py-2 px  h-full w-full">
                        <p class=" w-full flex justify-between text-sm  "><span>Jumat</span><span>05 Mei 2024</span></p>
                        <h3 class="font-semibold w-full h-[50px] overflow-hidden   capitalize text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, aspernatur doloribus rem debitis perspiciatis illo veritatis fuga libero omnis sunt quia, excepturi labore inventore atque reiciendis dignissimos officiis, ea odio?</h3>
                    </div>
                </a>
                <a href="detail.php" class=" group hover:text-[#215968] text-[#262626] aspect-[3/4] h-[400px] rounded-lg overflow-hidden ">
                    <div class="bg-slate-300 aspect-square w-full rounded-lg overflow-hidden group-hover:shadow-2xl group-hover:-translate-y-1 shadow-lg duration-500 transition-all">
                        <img class="w-full h-full object-cover" src="hero/hero.jpg" alt="" srcset="">
                    </div>
                    <div class="py-2 px  h-full w-full">
                        <p class=" w-full flex justify-between text-sm  "><span>Jumat</span><span>05 Mei 2024</span></p>
                        <h3 class="font-semibold w-full h-[50px] overflow-hidden   capitalize text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, aspernatur doloribus rem debitis perspiciatis illo veritatis fuga libero omnis sunt quia, excepturi labore inventore atque reiciendis dignissimos officiis, ea odio?</h3>
                    </div>
                </a>
                <a href="detail.php" class=" group hover:text-[#215968] text-[#262626] aspect-[3/4] h-[400px] rounded-lg overflow-hidden ">
                    <div class="bg-slate-300 aspect-square w-full rounded-lg overflow-hidden group-hover:shadow-2xl group-hover:-translate-y-1 shadow-lg duration-500 transition-all">
                        <img class="w-full h-full object-cover" src="hero/hero.jpg" alt="" srcset="">
                    </div>
                    <div class="py-2 px  h-full w-full">
                        <p class=" w-full flex justify-between text-sm  "><span>Jumat</span><span>05 Mei 2024</span></p>
                        <h3 class="font-semibold w-full h-[50px] overflow-hidden   capitalize text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, aspernatur doloribus rem debitis perspiciatis illo veritatis fuga libero omnis sunt quia, excepturi labore inventore atque reiciendis dignissimos officiis, ea odio?</h3>
                    </div>
                </a>
                <a href="detail.php" class=" group hover:text-[#215968] text-[#262626] aspect-[3/4] h-[400px] rounded-lg overflow-hidden ">
                    <div class="bg-slate-300 aspect-square w-full rounded-lg overflow-hidden group-hover:shadow-2xl group-hover:-translate-y-1 shadow-lg duration-500 transition-all">
                        <img class="w-full h-full object-cover" src="hero/hero.jpg" alt="" srcset="">
                    </div>
                    <div class="py-2 px  h-full w-full">
                        <p class=" w-full flex justify-between text-sm  "><span>Jumat</span><span>05 Mei 2024</span></p>
                        <h3 class="font-semibold w-full h-[50px] overflow-hidden   capitalize text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, aspernatur doloribus rem debitis perspiciatis illo veritatis fuga libero omnis sunt quia, excepturi labore inventore atque reiciendis dignissimos officiis, ea odio?</h3>
                    </div>
                </a>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>