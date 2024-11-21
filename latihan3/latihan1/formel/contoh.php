<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-center text-xl font-semibold mb-6">Form pendaftaran</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" placeholder="Masukkan Nama lengkap" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Email</label>
                <input type="email" placeholder="Masukkan Email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label class="block text-gray-700 mb-2">Nomor Telpon</label>
                    <input type="text" placeholder="123" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 mb-2">Tanggal Lahir</label>
                    <input type="text" placeholder="hh/bb/tttt" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Jenis Kelamin</label>
                <div class="flex items-center-space-x-4">
                    <label class="flex items-center">
                        <input type="radio" name="gender" class="form-radio text-blue-500">
                        <span class="ml-2">Pria</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="gender" class="form-radio text-blue-500">
                        <span class="ml-2">Wanita</span>
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Alamat</label>
                <input type="text" placeholder="Masukkan Nama jalan/Gang" class="w-full px-3 py-2 mb-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input type="text" placeholder="Masukkan Nama Desa" class="w-full px-3 py-2 mb-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <div class="flex space-x-4 mb-2">
                    <input type="text" placeholder="Kabupaten/Kota" class="w-1/2 px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="text" placeholder="Masukkan Nama Kecamatan" class="w-1/2 px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex space-x-4">
                    <input type="text" placeholder="Masukkan Nama Desa" class="w-1/2 px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="text" placeholder="Masukkan Kode Pos" class="w-1/2 px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            <button type="submit" class="w-full py-2 mt-4 bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-lg hover:from-green-500 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Daftar</button>
        </form>
    </div>
</body>
</html>