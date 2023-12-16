@extends('layouts.app')

@section('content')
    <div class="min-h-screen ">
        <section class="grid grid-cols-1 xl:grid-cols-3 items center justify-items-center mt-20 mx-10 select-none">
            <article class="max-w-3xl mb-4 lg:col-span-2 xl:col-span-1 ">
                <h1
                    class="font-bold mb-4 text-5xl md:text-6xl lg:text-7xl xl:text-9xl transition-all duration-200 custom-gradient-text uppercase">
                    {{ $lapangan->nama_lapangan }}</h1>
                <p class="text-justify break-words text-xs sm:text-base dark:text-text-light">
                    {{ $lapangan->deskripsi }}</p>
            </article>

            <div class="mb-5 ">
                @if (!empty($lapangan->path_gambar))
                    @foreach (json_decode($lapangan->path_gambar) as $image)
                        <div
                            class="p-2 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                            <img src="{{ asset('content-images/' . $image) }}" alt="{{ $lapangan->nama_lapangan }}"
                                class=" w-80 h-[500px] object-cover rounded-2xl">
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="flex flex-col items-center lg:col-span-2 xl:col-span-1 ">
                <div class="max-w-2xl">
                    <div
                        class="mb-4 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                        <div class="flex justify-around px-4 pt-3">
                            <p class="font-semibold text-lg ">Jakarta</p>
                            <div class="inline-block w-0.5 self-stretch bg-black opacity-100  dark:opacity-50"></div>
                            <p class="font-semibold text-lg ">{{ $lapangan->transit }}</p>
                            <div class="inline-block w-0.5 self-stretch bg-black opacity-100 dark:opacity-50"></div>
                            <p class="font-semibold text-lg ">{{ $lapangan->destination }}</p>
                        </div>
                        <div class="px-3 flex flex-row items-center justify-items-center py-2 gap-3">
                            <p class="text-center mx-auto font-semibold">{{ $lapangan->departure_date }}</p>
                            <p class="text-center mx-auto font-semibold">To</p>
                            <p class="text-center mx-auto font-semibold">{{ $lapangan->return_date }}</p>
                        </div>
                    </div>

                    <div
                        class="mb-4 flex items-center justify-between px-4 py-3 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                        <h3 class="font-semibold text-lg md:text-xl mr-4">KATEGORI</h3>
                        <p class="font-semibold">{{ $lapangan->kategori }}</p>
                    </div>

                    <div
                        class="mb-4 flex items-center justify-between px-4 py-3 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                        <h3 class="font-semibold text-lg md:text-xl mr-4">ALAMAT</h3>
                        <p class="font-semibold">{{ $lapangan->alamat }}</p>
                    </div>

                    <div
                        class="mb-4 flex items-center justify-between px-4 py-3 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                        <h3 class="font-semibold text-lg md:text-xl">HARGA</h3>
                        <p class="font-semibold">$ {{ $lapangan->harga }}</p>
                    </div>

                    <div
                        class="mb-4 flex flex-col items-center py-3 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
                        <button id="orderButton"
                            class="text-center text-text-light px-3 py-2 custom-gradient-bg rounded-md transition-all duration-300 hover:scale-105 shadow-green-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color">Order
                            Now</button>
                    </div>
                </div>
            </div>

        </section>
        <section id="orderSection" class="pb-5 flex flex-col items-center w-screen dark:bg-dark-primary-bg">
            <div id="orderForm"
                class="hidden mb-5 px-4 py-3 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
                <h2 class="text-center font-semibold text-lg md:text-xl mb-3">Place Your Order</h2>

                <form action="{{ route('order.create') }}" method="post" class="flex flex-col"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mx-0">
                        <label class="block text-sm font-semibold">Nama Lapangan: {{ $lapangan->nama_lapangan }}</label>
                        <input class="font-semibold" type="hidden" name="trip_id" value="{{ $lapangan->id }}">
                    </div>

                    <div class="mb-3 mx-0">
                        <label class="block text-sm font-semibold">Nama Pemesan: {{ Auth::user()->name }}</label>
                        <input class="font-semibold" type="hidden" name="user_id" value="{{ Auth::id() }}">
                    </div>

                    <div class="mb-3 mx-0">
                        <label class="block text-sm font-semibold" for="jumlah_jam">Jumlah Jam</label>
                        <input class="font-semibold" type="number" id="jumlah_jam" name="jumlah_jam" min="1"
                            required>
                    </div>

                    <div class="mb-3 mx-0">
                        <label class="block text-sm font-semibold">Total Harga</label>
                        <input class="font-semibold" type="text" id="total_harga" name="total_harga" readonly>
                    </div>

                    <button type="submit"
                        class="text-center text-text-light px-3 py-2 custom-gradient-bg rounded-md transition-all duration-300 hover:scale-105 shadow-green-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color">Submit
                        Order</button>
                </form>
            </div>
        </section>
        <script>
            const orderButton = document.getElementById('orderButton');
            const orderForm = document.getElementById('orderForm');
            const orderSection = document.getElementById('orderSection');
            const jumlahJamInput = document.getElementById('jumlah_jam');
            const totalHargaInput = document.getElementById('total_harga');

            orderButton.addEventListener('click', () => {
                orderForm.classList.toggle('hidden');
                orderSection.scrollIntoView({
                    behavior: 'smooth'
                });
            });

            tanggalPesananInput.addEventListener('input', updateTotalHarga);
            jumlahJamInput.addEventListener('input', updateTotalHarga);

            function updateTotalHarga() {
                // Assuming $lapangan->harga is the hourly rate
                const hargaPerJam = {{ $lapangan->harga }};
                const jumlahJam = parseFloat(jumlahJamInput.value) || 0;
                const tanggalPesanan = tanggalPesananInput.value;

                // Calculate the total price based on the selected date, time, and hours
                // Update the total_harga input field
                totalHargaInput.value = calculateTotalHarga(tanggalPesanan, jumlahJam);
            }

            function calculateTotalHarga(tanggalPesanan, jumlahJam) {
                // Perform your logic to calculate total price here
                // You can use the selected date and time along with the hourly rate
                // Return the calculated total price
                // Example calculation: const totalHarga = hargaPerJam * jumlahJam;
                return `$ ${totalHarga.toFixed(2)}`;
            }
        </script>
    </div>
@endsection
