<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- initialize tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>

<body>

    <?php include 'nav.php'; ?>

    <main class=" mx-32 my-16">
        <div class="bg-white py-16 px-32 rounded-lg shadow-lg w-full ">
            <h1 class="mx-auto block text-center text-4xl uppercase font-bold my-6 text-[#215968]">Form Pengaduan Masyarakat</h1>
            <form id="complaintForm">
                <div class="mb-4">
                    <label class="block text-gray-700">Jenis Pengaduan</label>
                    <select class="mt-1 block w-full border-gray-300 rounded-md py-2 px-3" required>
                        <option value="">Pilih jenis pengaduan</option>
                        <option value="pengaduan1">Pengaduan 1</option>
                        <option value="pengaduan2">Pengaduan 2</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Nomor Pendaftaran</label>
                    <input type="text" id="nomorPendaftaran" class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100" readonly>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Kontak Person / Telp</label>
                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Nomor HP</label>
                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Kontak Email</label>
                    <input type="email" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Alamat</label>
                    <textarea class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Provinsi</label>
                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Kabupaten</label>
                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Kecamatan</label>
                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Kelurahan</label>
                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Deskripsikan Pengaduan</label>
                    <textarea class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
                </div>
                <div class="text-center">
                    <button type="button" onclick="submitForm()" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
                </div>
            </form>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                document.getElementById('nomorPendaftaran').value = 'REG' + Math.floor(Math.random() * 1000000);
            });

            function submitForm() {
                Swal.fire({
                    title: 'Konfirmasi Pengaduan',
                    html: `
                    <form id="confirmationForm" class="text-start leading-8">
                        <div class="mb-4">
                            <label class="block text-gray-700">Identitas asli (KTP,SIMK,KITAS) file dalam bentuk pdf</label>
                            <input type="file" class="mt-1 block w-full border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Lampiran terkait pengaduan </label>
                            <input type="file" class="mt-1 block w-full border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox" required>
                                <span class="ml-2">Saya menyatakan bahwa data yang diisi telah benar</span>
                            </label>
                        </div>
                        <div class="mb-4">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox" required>
                                <span class="ml-2">Saya menyatakan bahwa dokumen telah lengkap</span>
                            </label>
                        </div>
                    </form>
                `,
                    confirmButtonText: 'Submit',
                    focusConfirm: false,
                    preConfirm: () => {
                        const confirmationForm = Swal.getPopup().querySelector('#confirmationForm');
                        if (!confirmationForm.checkValidity()) {
                            Swal.showValidationMessage('Please complete the form');
                        }
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire('Pengaduan telah disubmit!', '', 'success');
                    }
                });
            }
        </script>


    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>