<div>    
    <div class="container mb-3">
        <div class="row">
            <div class="col-3">
                <div class="card text-white mb-3">
                    <div class="card-header bg-secondary">
                        Total
                    </div>
                    <div class="card-body bg-dark">
                        Rp. {{ $jumlah }}
                    </div>
                </div>
                <div class="card text-white">
                    <div class="card-header bg-secondary">
                        Belanjaan Saya
                    </div>
                    <div class="card-body bg-dark">
                        @foreach($datas as $apapun)
                        <p class="mb-4"> {{ $apapun->nama_barang }} <button class="float-end btn btn-primary mb-1" wire:click="hapus( {{ $apapun->id }} )">Hapus</button></p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header text-white bg-secondary">
                        Produk
                    </div>
                    <div class="card-body text-white bg-dark">
                        <div class="row">
                            <div class="col-3">
                                <div class="card text-center h-100">
                                    <img src="{{ asset('gambar/BuahNaga.jpg') }}" class="card-img-top" height="100rem" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark">Buah Naga</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-dark">Rp.7.000 / Buah</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-danger" wire:click="simpan('Buah Naga', '7000')">BELI</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card text-center h-100">
                                    <img src="{{ asset('gambar/Apel.jpg') }}" class="card-img-top" height="100rem" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark">Apel</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-dark">Rp.10.000 / Buah</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-danger" wire:click="simpan('Apel', '10000')">BELI</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card text-center h-100">
                                    <img src="{{ asset('gambar/Pisang.jpg') }}" class="card-img-top" height="100rem" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark">Pisang</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-dark">Rp. 10.000 / Sisir</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-danger" wire:click="simpan('Pisang', '10000')">BELI</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card text-center h-100">
                                    <img src="{{ asset('gambar/Nanas.jpg') }}" class="card-img-top" height="100rem" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark">Nanas</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-dark">Rp. 5.000 / Buah</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-danger" wire:click="simpan('Nanas', '5000')">BELI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>