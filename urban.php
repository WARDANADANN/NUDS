<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- initialize tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <?php include 'nav.php'; ?>

    <main class=" mx-32 my-16">
        <h1 class="mx-auto block text-center text-4xl uppercase font-bold my-6 text-[#215968]">URBAN SETTLEMENT</h1>
        <section class="w-full  grid text-justify">
            <div class="bg-blue-100 aspect-video h-[80vh] mx-auto overflow-hidden rounded-lg m-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507368.0900435348!2d106.48443164797175!3d-6.545256145393175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3e312798437%3A0x301576d14feb990!2sBogor%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1716539875781!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class=" overflow-hidden m-6">
                <h2 class="block text-2xl font-semibold tracking-wide mb-4">URBAN SETTLEMENT</h2>
                <div class="content w-full h-full overflow-hidden">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum adipisci facere repudiandae ut debitis quaerat cupiditate illo accusamus sit officiis! Dolores quibusdam necessitatibus quasi quidem. Vero similique minima eius, nulla nostrum ullam officiis cumque autem explicabo incidunt sint deserunt. Eos corporis libero impedit obcaecati, sint laboriosam dignissimos distinctio, vero eligendi cum omnis, voluptatum consequatur deserunt ab! Fuga, rem, corporis sequi commodi quia perspiciatis at impedit unde saepe, magnam aut? Accusamus molestias impedit, recusandae iste mollitia ex nostrum nesciunt perspiciatis enim corporis commodi asperiores hic inventore soluta iure accusantium dolorum unde dolorem pariatur aspernatur. Eveniet in ipsam fuga placeat ducimus amet.</p>
                </div>
            </div>
        </section>

        <h1 class="mx-auto block text-center text-4xl uppercase font-bold my-6 text-[#215968]">Data terbaru</h1>
        <section class=" flex  space-x-8">
            <?php include 'chart.php'; ?>

        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
</body>

</html>