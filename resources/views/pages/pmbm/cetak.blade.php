<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bukti Pendaftaran - {{ $registration->registration_number }}</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #1a5c38;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .logo {
            width: 80px;
            height: auto;
            position: absolute;
            top: 20px;
            left: 20px;
        }
        .header-title {
            font-size: 18px;
            font-weight: bold;
            color: #1a5c38;
            margin: 0;
        }
        .header-subtitle {
            font-size: 14px;
            margin: 5px 0;
        }
        .header-address {
            font-size: 11px;
            color: #666;
        }
        .basmalah {
            font-family: "Traditional Arabic", serif;
            font-size: 24px;
            text-align: center;
            margin-top: 10px;
        }
        .title {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            margin: 20px 0 10px 0;
            text-decoration: underline;
        }
        .reg-box {
            text-align: center;
            margin: 15px auto;
            padding: 10px;
            border: 2px dashed #c9a84c;
            background-color: #fcfcfc;
            width: 50%;
        }
        .reg-number {
            font-size: 20px;
            font-weight: bold;
            color: #1a5c38;
            margin: 0;
        }
        .table-data {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table-data th, .table-data td {
            border: 1px solid #ddd;
            padding: 8px 12px;
            text-align: left;
        }
        .table-data th {
            background-color: #f2f2f2;
            width: 35%;
        }
        .status-box {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 4px;
            font-weight: bold;
            color: #fff;
        }
        .status-pending { background-color: #f59e0b; }
        .status-lolos { background-color: #10b981; }
        .status-tidak_lolos { background-color: #ef4444; }
        .note {
            background-color: #e6f3ee;
            border-left: 4px solid #1a5c38;
            padding: 10px;
            margin-bottom: 30px;
            font-style: italic;
        }
        .footer {
            width: 100%;
            margin-top: 40px;
        }
        .signature-area {
            float: right;
            text-align: center;
            width: 250px;
        }
        .signature-line {
            margin-top: 60px;
            border-bottom: 1px solid #333;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        .clear { clear: both; }
    </style>
</head>
<body>

    <div class="header">
        <h1 class="header-title">MADRASAH DINIYAH TAKMILIYAH ULA ASSAFIIYAH</h1>
        <p class="header-subtitle">Mendidik Generasi Qurani yang Berakhlak Mulia</p>
        <p class="header-address">Jl. Kaliasem Rt. 001 Rw. 010 Desa Kejiwan Kec. Susukan Kab. Cirebon Jawa Barat | Telp: 0838-2132-1752/0821-2748-2545</p>
    </div>

    <div class="basmalah">﷽</div>

    <h2 class="title">BUKTI PENDAFTARAN MURID BARU 2025</h2>

    <div class="reg-box">
        <p style="margin:0; font-size:11px; color:#666;">Nomor Registrasi:</p>
        <p class="reg-number">{{ $registration->registration_number }}</p>
    </div>

    <table class="table-data">
        <tr>
            <th>Nama Lengkap</th>
            <td><strong>{{ $registration->full_name }}</strong></td>
        </tr>
        <tr>
            <th>NIK</th>
            <td>{{ $registration->nik }}</td>
        </tr>
        <tr>
            <th>Tempat, Tanggal Lahir</th>
            <td>{{ $registration->birth_place }}, {{ \Carbon\Carbon::parse($registration->birth_date)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $registration->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
        </tr>
        <tr>
            <th>Asal Sekolah</th>
            <td>{{ $registration->previous_school }}</td>
        </tr>
        <tr>
            <th>Nama Orang Tua / Wali</th>
            <td>{{ $registration->parent_name }}</td>
        </tr>
        <tr>
            <th>Nomor HP / WhatsApp</th>
            <td>{{ $registration->phone }}</td>
        </tr>
        <tr>
            <th>Tanggal Mendaftar</th>
            <td>{{ \Carbon\Carbon::parse($registration->created_at)->translatedFormat('d F Y H:i:s') }}</td>
        </tr>
        <tr>
            <th>Status Pendaftaran</th>
            <td>
                @php
                    $statusClass = 'status-pending';
                    $statusText = 'Menunggu Validasi';
                    if($registration->status == 'lolos') {
                        $statusClass = 'status-lolos';
                        $statusText = 'DITERIMA';
                    } elseif($registration->status == 'tidak_lolos') {
                        $statusClass = 'status-tidak_lolos';
                        $statusText = 'TIDAK LULUS';
                    }
                @endphp
                <span class="status-box {{ $statusClass }}">{{ $statusText }}</span>
            </td>
        </tr>
    </table>

    <div class="note">
        <strong>Catatan Penting:</strong><br>
        1. Harap simpan dan cetak bukti pendaftaran ini.<br>
        2. Bawa bukti ini saat pelaksanaan tes masuk dan daftar ulang.<br>
        3. Persiapkan berkas fisik (Fotokopi KK, Akta Kelahiran, dan Pas Foto) untuk diserahkan ke panitia.
    </div>

    <div class="footer">
        <div class="signature-area">
            <p>Bekasi, {{ now()->translatedFormat('d F Y') }}<br>Panitia PMBM Assafiiyah,</p>
            <div class="signature-line"></div>
            <p style="margin-top: 5px;">( ________________________ )</p>
        </div>
        <div class="clear"></div>
    </div>

</body>
</html>
