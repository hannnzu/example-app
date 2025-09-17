<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="w-full overflow-hidden rounded-lg shadow-lg">
            <table class="w-full">
                <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Produk</th>
                        <th class="px-4 py-3">Harga</th>
                        <th class="px-4 py-3">Deskripsi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($products as $product)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border">
                            {{ $product->name }}
                        </td>
                        <td class="px-4 py-3 text-ms font-semibold border">Rp.{{ number_format($product->price, 2, ',', '.') }}</td>
                        <td class="px-4 py-3 text-sm border">{{ $product->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>