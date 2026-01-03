<form method="POST">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" required value="{{ $item->nama ?? '' }}">
    </div>

    <div class="form-group">
        <label>Kode</label>
        <input type="text" class="form-control" name="kode" required value="{{ $item->kode ?? '' }}">
    </div>

    <button class="btn btn-primary mt-3">Submit</button>

</form>
