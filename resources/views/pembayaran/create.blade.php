<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pembayaran - Kas Kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label for="exampleDropdown" class="font-weight-bold">Siswa</label>
                                <select name="id_siswa" class="form-control" id="exampleDropdown">
                                   @foreach ($siswa as $item)
                                   <option value="{{$item->id}}">{{$item->nama}} {{($item->kelas)}}</option>
                                   @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TANGGAL BAYAR</label>
                                <input type="date" class="form-control" name="tgl_bayar" placeholder="Masukkan Nama" pattern="\d{4}-\d{2}-\d{2}">
                            </div>


                                <!-- error message untuk title -->
                                @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror

                                <div class="form-group">
                                    <label class="font-weight-bold">JUMLAH BAYAR</label>
                                    <input type="text" class="form-control" name="jumlah_bayar" placeholder="Masukkan Nominal Bayar">

                                     <!-- error message untuk title -->
                                @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror


                            </div>


                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');

        // Add an event listener to the date input field
        document.getElementById('tgl_bayar').addEventListener('change', function () {
            // Get the selected date
            const selectedDate = this.value;

            // Format the date as "yyyy-mm-dd"
            const formattedDate = new Date(selectedDate).toISOString().split('T')[0];

            // Set the formatted date back to the input field
            this.value = formattedDate;
        });

    </script>
</body>

</html>
