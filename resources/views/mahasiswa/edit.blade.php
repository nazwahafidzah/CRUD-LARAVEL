

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 40px;
        }
        .form-container {
            max-width: 400px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            margin-top: 20px;
            width: 100%;
            background-color: #2563eb;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>

<div class="form-container">
    <form method="POST" action="{{ route('mahasiswa.update', $mhs->id) }}">
        @csrf
        @method('PUT')

        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $mhs->nama }}">

        <label>NIM:</label>
        <input type="text" name="nim" value="{{ $mhs->nim }}">

        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="{{ $mhs->jurusan }}">

        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>
