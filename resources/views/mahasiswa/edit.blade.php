<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px 0;
        }
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            background: rgba(255, 255, 255, 0.95);
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-header {
            background: linear-gradient(135deg, #3498db 0%, #2c3e50 100%);
            padding: 1.5rem;
            border-bottom: none;
            position: relative;
        }
        .card-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #3498db, #2ecc71);
        }
        .card-body {
            padding: 2rem;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
            font-size: 15px;
        }
        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
            transform: translateY(-2px);
        }
        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
            font-size: 14px;
        }
        .btn {
            border-radius: 8px;
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
        }
        .btn-primary {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            box-shadow: 0 4px 6px rgba(52, 152, 219, 0.2);
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #2980b9 0%, #21618c 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(52, 152, 219, 0.3);
        }
        .btn-secondary {
            background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
            box-shadow: 0 4px 6px rgba(149, 165, 166, 0.2);
        }
        .btn-secondary:hover {
            background: linear-gradient(135deg, #7f8c8d 0%, #6c7b7d 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(127, 140, 141, 0.3);
        }
        .input-group {
            margin-bottom: 1.5rem;
            position: relative;
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
            font-size: 16px;
        }
        .input-icon .form-control {
            padding-left: 45px;
        }
        .form-title {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .form-title i {
            font-size: 20px;
        }
        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #f0f0f0;
        }
        .student-info {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            border-left: 4px solid #3498db;
        }
        .student-info p {
            margin: 0;
            font-size: 14px;
            color: #2c3e50;
        }
        .student-info strong {
            color: #3498db;
        }
        .form-text {
            font-size: 13px;
            color: #7f8c8d;
            margin-top: 5px;
        }
        .validation-message {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <div class="form-title">
                            <i class="fas fa-edit"></i>
                            <h2 class="h5 mb-0">Edit Data Mahasiswa</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Informasi mahasiswa yang sedang diedit -->
                        <div class="student-info">
                            <p>Anda sedang mengedit data: <strong>{{ $mahasiswa->nama }}</strong> (NIM: <strong>{{ $mahasiswa->nim }}</strong>)</p>
                        </div>
                        
                        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <!-- Field Nama -->
                            <div class="mb-4 input-icon">
                                <i class="fas fa-user"></i>
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    value="{{ old('nama', $mahasiswa->nama) }}" required>
                                <div class="form-text">Masukkan nama lengkap mahasiswa</div>
                                @error('nama')
                                    <div class="validation-message">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Field NIM -->
                            <div class="mb-4 input-icon">
                                <i class="fas fa-id-card"></i>
                                <label for="nim" class="form-label">Nomor Induk Mahasiswa (NIM)</label>
                                <input type="text" name="nim" id="nim" class="form-control"
                                    value="{{ old('nim', $mahasiswa->nim) }}" required>
                                <div class="form-text">Masukkan NIM mahasiswa</div>
                                @error('nim')
                                    <div class="validation-message">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Field Email -->
                            <div class="mb-4 input-icon">
                                <i class="fas fa-envelope"></i>
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ old('email', $mahasiswa->email) }}" required>
                                <div class="form-text">Masukkan alamat email yang valid</div>
                                @error('email')
                                    <div class="validation-message">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Tombol Aksi -->
                            <div class="action-buttons">
                                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left me-2"></i> Kembali ke Daftar
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i> Perbarui Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>