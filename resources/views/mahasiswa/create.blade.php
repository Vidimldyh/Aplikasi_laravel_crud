<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-header {
            background: linear-gradient(135deg, #3498db 0%, #2c3e50 100%);
            padding: 1.5rem;
            border-bottom: none;
        }
        .card-body {
            padding: 2rem;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }
        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
        }
        .btn {
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-success {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            border: none;
        }
        .btn-success:hover {
            background: linear-gradient(135deg, #27ae60 0%, #219653 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(39, 174, 96, 0.3);
        }
        .btn-secondary {
            background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
            border: none;
        }
        .btn-secondary:hover {
            background: linear-gradient(135deg, #7f8c8d 0%, #6c7b7d 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(127, 140, 141, 0.3);
        }
        .input-group {
            margin-bottom: 1.5rem;
        }
        .input-icon {
            position: relative;
        }
        .input-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #7f8c8d;
            z-index: 5;
        }
        .input-icon .form-control {
            padding-left: 45px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h5 mb-0">➕ Tambah Mahasiswa</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('mahasiswa.store') }}" method="POST">
                            @csrf
                            <div class="mb-3 input-icon">
                                <i class="fas fa-user"></i>
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                            </div>
                            <div class="mb-3 input-icon">
                                <i class="fas fa-id-card"></i>
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM" required>
                            </div>
                            <div class="mb-3 input-icon">
                                <i class="fas fa-envelope"></i>
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">⬅ Kembali</a>
                                <button type="submit" class="btn btn-success">💾 Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>