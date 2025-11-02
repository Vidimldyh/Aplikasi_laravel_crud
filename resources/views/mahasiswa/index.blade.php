<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .container {
            max-width: 1200px;
        }
        .page-header {
            background: linear-gradient(135deg, #3498db 0%, #2c3e50 100%);
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        .table {
            margin-bottom: 0;
        }
        .table thead th {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
            border: none;
            padding: 15px 12px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
        }
        .table tbody tr {
            transition: all 0.3s ease;
        }
        .table tbody tr:hover {
            background-color: #f8f9fa;
            transform: translateY(-1px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        .table tbody td {
            padding: 15px 12px;
            vertical-align: middle;
            border-color: #f0f0f0;
        }
        .btn {
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            padding: 8px 16px;
            font-size: 14px;
        }
        .btn-success {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            box-shadow: 0 4px 6px rgba(46, 204, 113, 0.2);
        }
        .btn-success:hover {
            background: linear-gradient(135deg, #27ae60 0%, #219653 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(46, 204, 113, 0.3);
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
        .btn-danger {
            background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
            box-shadow: 0 4px 6px rgba(231, 76, 60, 0.2);
        }
        .btn-danger:hover {
            background: linear-gradient(135deg, #c0392b 0%, #a93226 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(231, 76, 60, 0.3);
        }
        .btn-warning {
            background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
            box-shadow: 0 4px 6px rgba(243, 156, 18, 0.2);
            color: white;
        }
        .btn-warning:hover {
            background: linear-gradient(135deg, #e67e22 0%, #d35400 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(243, 156, 18, 0.3);
            color: white;
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
        .search-form {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        .form-control {
            border-radius: 8px;
            padding: 10px 15px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }
        .empty-state {
            padding: 3rem;
            text-align: center;
            color: #7f8c8d;
        }
        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #bdc3c7;
        }
        .action-buttons .btn {
            margin-left: 5px;
        }
        .pagination {
            margin-top: 1.5rem;
        }
        .page-item.active .page-link {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            border-color: #3498db;
        }
        .page-link {
            color: #3498db;
            border-radius: 6px;
            margin: 0 3px;
            border: 1px solid #e0e0e0;
        }
        .page-link:hover {
            color: #21618c;
            background-color: #f8f9fa;
            border-color: #3498db;
        }
        .stats-card {
            background: white;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
        }
        .stats-number {
            font-size: 2rem;
            font-weight: 700;
            color: #3498db;
            margin-bottom: 0.5rem;
        }
        .stats-label {
            font-size: 0.9rem;
            color: #7f8c8d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-4">
        <!-- Header dengan judul dan tombol aksi -->
        <div class="page-header">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <h1 class="h3 mb-2">📋 Daftar Mahasiswa</h1>
                    <p class="mb-0 opacity-75">Kelola data mahasiswa dengan mudah dan efisien</p>
                </div>
                <div class="d-flex flex-wrap gap-2 mt-2">
                    <a href="{{ route('mahasiswa.cetakPdf') }}" class="btn btn-danger d-flex align-items-center">
                        <i class="fas fa-file-pdf me-2"></i> Cetak PDF
                    </a>
                    <a href="{{ route('mahasiswa.exportExcel') }}" class="btn btn-primary d-flex align-items-center">
                        <i class="fas fa-file-excel me-2"></i> Export Excel
                    </a>
                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-success d-flex align-items-center">
                        <i class="fas fa-plus me-2"></i> Tambah Mahasiswa
                    </a>
                </div>
            </div>
        </div>

        <!-- Form Pencarian -->
        <div class="search-form">
            <form action="{{ route('mahasiswa.index') }}" method="GET" class="row g-3 align-items-center">
                <div class="col-md-8">
                    <input type="text" name="search" class="form-control" 
                           placeholder="Cari berdasarkan nama, NIM, atau email..." 
                           value="{{ request('search') }}">
                </div>
                <div class="col-md-4">
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary me-2 flex-grow-1">
                            <i class="fas fa-search me-2"></i> Cari
                        </button>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                            <i class="fas fa-refresh me-2"></i> Reset
                        </a>
                    </div>
                </div>
            </form>
        </div>

        <!-- Tabel Data -->
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th width="35%">Nama</th>
                                <th width="25%">NIM</th>
                                <th width="25%">Email</th>
                                <th width="15%" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($mahasiswas as $m)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                            <span class="text-white fw-bold">{{ substr($m->nama, 0, 1) }}</span>
                                        </div>
                                        <div>
                                            <div class="fw-semibold">{{ $m->nama }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark fs-6">{{ $m->nim }}</span>
                                </td>
                                <td>
                                    <a href="mailto:{{ $m->email }}" class="text-decoration-none">
                                        <i class="fas fa-envelope me-2 text-primary"></i>{{ $m->email }}
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('mahasiswa.edit',$m->id) }}" class="btn btn-warning btn-sm d-flex align-items-center">
                                            <i class="fas fa-edit me-1"></i> Edit
                                        </a>
                                        <form action="{{ route('mahasiswa.destroy',$m->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data mahasiswa ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm d-flex align-items-center">
                                                <i class="fas fa-trash me-1"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">
                                    <div class="empty-state">
                                        <i class="fas fa-users"></i>
                                        <h4 class="h5">Belum ada data mahasiswa</h4>
                                        <p class="mb-3">Mulai dengan menambahkan data mahasiswa pertama Anda</p>
                                        <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">
                                            <i class="fas fa-plus me-2"></i> Tambah Mahasiswa
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        @if($mahasiswas->hasPages())
        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="text-muted">
                Menampilkan {{ $mahasiswas->firstItem() }} - {{ $mahasiswas->lastItem() }} dari {{ $mahasiswas->total() }} data
            </div>
            <div>
                {{ $mahasiswas->links('pagination::bootstrap-5') }}
            </div>
        </div>
        @endif
    </div>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>