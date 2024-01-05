@extends('layouts.app')

@section('content')
    <div class="min-h-screen mt-4 flex align-center items-center">

        <section class="pb-5 flex flex-col items-center w-screen dark:bg-dark-primary-bg">

            <form action="{{ route('order.create') }}" method="post" class="grid lg:grid-cols-2 gap-4 grid-cols-1"
                enctype="multipart/form-data" onsubmit="return disableButton()">
                @csrf
                <div
                    class="mb-5 px-4 py-3 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
                    <h2 class="text-center font-semibold text-lg md:text-xl mb-3">Form Pesanan</h2>
                    <hr class="w-48 h-1 my-3 mx-auto bg-black border-0 rounded">

                    <div class="mb-3 mx-0">
                        <label class="block text-sm font-semibold">Nama Lapangan: {{ $lapangan->nama_lapangan }}</label>
                        <input class="font-semibold" type="hidden" name="lapangan_id" value="{{ $lapangan->id }}">
                    </div>

                    <div class="mb-3 mx-0">
                        <label class="block text-sm font-semibold">Nama Pemesan: {{ Auth::user()->name }}</label>
                        <input class="font-semibold" type="hidden" name="user_id" value="{{ Auth::id() }}">
                    </div>

                    <div class="mb-3 mx-0">
                        <label for="tanggal_pesanan" class="block text-sm font-semibold mb-1">Tanggal dan Jam
                            Pemesanan:</label>
                        <input type="datetime-local" id="tanggal_pesanan" name="tanggal_pesanan"
                            class="px-3 py-2 rounded-md border border-black" required>
                    </div>

                    <div class="mb-3 mx-0">
                        <label for="total_jam" class="block text-sm font-semibold mb-1">Total Jam Sewa:</label>
                        <input type="number" id="total_jam" name="total_jam"
                            class="px-3 py-2 rounded-md border border-black" min="1" max="10" required>
                    </div>

                </div>
                <div
                    class="mb-5 px-4 py-3 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
                    <h2 class="text-center font-semibold text-lg md:text-xl mb-3">Form Pembayaran</h2>
                    <hr class="w-48 h-1 my-3 mx-auto bg-black border-0 rounded">

                    <div class="mb-3 mx-0">
                        <label for="total_harga" class="block text-sm font-semibold mb-1">Total Harga:</label>
                        <input id="total_harga" name="total_harga" disabled>
                    </div>


                    <div class="mb-3 mx-0">
                        <h3 class="block text-sm font-semibold mb-1">Pembayaran melalui:</h3>
                        <h3 class="block text-sm font-semibold mb-1 text-gray-600">BCA - 1234123456 A/N Yuk Sport</h3>
                    </div>

                    <div class="mb-3 mx-0">
                        <label for="bukti_pembayaran" class="block text-sm font-semibold mb-1">Upload Bukti
                            Pembayaran:</label>
                        <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required>
                    </div>
                    <hr class="w-48 h-1 my-3 mx-auto bg-black border-0 rounded">
                    <div class="flex justify-center">
                        <button type="submit" id="submitButton"
                            class="text-center text-text-light px-3 py-2 custom-gradient-bg rounded-md transition-all duration-300 hover:scale-105 shadow-green-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color">Submit
                            Order</button>
                    </div>
                </div>


            </form>

        </section>
        
        <script>
            const orderSection = document.getElementById('orderSection');
            const totalJamInput = document.getElementById('total_jam');
            const totalHargaInput = document.getElementById('total_harga');
            const currentDate = new Date().toISOString().slice(0, 16);

            document.getElementById('tanggal_pesanan').min = currentDate;

            totalJamInput.addEventListener('input', updateTotalHarga);

            function updateTotalHarga() {
                const hargaPerJam = {{ $lapangan->harga }};
                const totalJam = parseFloat(totalJamInput.value);

                if (!isNaN(totalJam) && totalJam >= 1 && totalJam <= 10) {
                    const totalHarga = hargaPerJam * totalJam;
                    totalHargaInput.value = `Rp. ${totalHarga.toLocaleString()}`;
                } else {
                    totalHargaInput.value = '';
                }
            }

            function disableButton() {
                const submitButton = document.getElementById('submitButton');
                if (submitButton.disabled) {
                    event.preventDefault();
                    return false;
                }

                submitButton.disabled = true;

                submitButton.innerHTML = 'Processing...';

                setTimeout(() => {
                    submitButton.disabled = false;
                    submitButton.innerHTML = 'Submit Order';
                }, 5000);

                return true;
            }
        </script>
    </div>
@endsection
