<form method="POST" action="{{ route('mahasiswa.update', $mhs->id) }}">
    @csrf @method('PUT')
    Nama: <input type="text" name="nama" value="{{ $mhs->nama }}"><br>
    NIM: <input type="text" name="nim" value="{{ $mhs->nim }}"><br>
    Jurusan: <input type="text" name="jurusan" value="{{ $mhs->jurusan }}"><br>
    <button type="submit">Update</button>
</form>
