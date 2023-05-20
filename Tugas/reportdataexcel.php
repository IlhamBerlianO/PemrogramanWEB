<?php
    include 'koneksi.php';
    require '../vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'No');
    $sheet->setCellValue('B1', 'Tanggal Isi');
    $sheet->setCellValue('C1', 'Jenis Pendaftaran');
    $sheet->setCellValue('D1', 'Tanggal Masuk Sekolah');
    $sheet->setCellValue('E1', 'NIS');
    $sheet->setCellValue('F1', 'Nomor Peserta Ujian');
    $sheet->setCellValue('G1', 'PAUD');
    $sheet->setCellValue('H1', 'TK');
    $sheet->setCellValue('I1', 'No SKHUN');
    $sheet->setCellValue('J1', 'No Ijazah');
    $sheet->setCellValue('K1', 'Hobi');
    $sheet->setCellValue('L1', 'Cita - Cita');
    $sheet->setCellValue('M1', 'Nama Lengkap');
    $sheet->setCellValue('N1', 'Jenis Kelamin');
    $sheet->setCellValue('O1', 'NISN');
    $sheet->setCellValue('P1', 'NIK');
    $sheet->setCellValue('Q1', 'Tanggal Lahir');
    $sheet->setCellValue('R1', 'Tempat Lahir');
    $sheet->setCellValue('S1', 'Agama');
    $sheet->setCellValue('T1', 'Berkebutuhan Khusus');
    $sheet->setCellValue('U1', 'Alamat Jalan');
    $sheet->setCellValue('V1', 'RT');
    $sheet->setCellValue('W1', 'RW');
    $sheet->setCellValue('X1', 'Nama Dusun');
    $sheet->setCellValue('Y1', 'Nama Kelurahan Desa');
    $sheet->setCellValue('Z1', 'Kecamatan');
    $sheet->setCellValue('AA1', 'Kode POS');
    $sheet->setCellValue('AB1', 'Tempat Tinggal');
    $sheet->setCellValue('AC1', 'Moda Transportasi');
    $sheet->setCellValue('AD1', 'No HP');
    $sheet->setCellValue('AE1', 'No Telp');
    $sheet->setCellValue('AF1', 'Email');
    $sheet->setCellValue('AG1', 'Penerima KPS/PKH/KIP');
    $sheet->setCellValue('AH1', 'No Penerima');
    $sheet->setCellValue('AI1', 'Kewarganegaraan');
    $sheet->setCellValue('AJ1', 'Nama Negara');
    $sheet->setCellValue('AK1', 'Nama Ayah');
    $sheet->setCellValue('AL1', 'Tahun Lahir Ayah');
    $sheet->setCellValue('AM1', 'Pendidikan Ayah');
    $sheet->setCellValue('AN1', 'Pekerjaan Ayah');
    $sheet->setCellValue('AO1', 'Penghasilan Bulanan Ayah');
    $sheet->setCellValue('AP1', 'Berkebutuhan Khusus Ayah');
    $sheet->setCellValue('AQ1', 'Nama Ibu');
    $sheet->setCellValue('AR1', 'Tahun Lahir Ibu');
    $sheet->setCellValue('AS1', 'Pendidikan Ibu');
    $sheet->setCellValue('AT1', 'Pekerjaan Ibu');
    $sheet->setCellValue('AU1', 'Penghasilan Bulanan Ibu');
    $sheet->setCellValue('AV1', 'Berkebutuhan Khusus Ibu');
    

    $tamRPD = mysqli_query($koneksi, "SELECT * FROM regis_peserta_didik");
    $tamDD = mysqli_query($koneksi, "SELECT * FROM data_diri");
    $tamDO = mysqli_query($koneksi, "SELECT * FROM data_ortu");
    $i = 2;
    $no = 1;
    while ($row1 = mysqli_fetch_array($tamRPD)) {
        $sheet->setCellValue('A'.$i, $no++);
        $sheet->setCellValue('B'.$i, $row1['tgl_isi']);
        $sheet->setCellValue('C'.$i, $row1['jenis_pendaftaran']);
        $sheet->setCellValue('D'.$i, $row1['tgl_masuk_sekolah']);
        $sheet->setCellValue('E'.$i, $row1['nis']);
        $sheet->setCellValue('F'.$i, $row1['nomor_peserta_ujian']);
        $sheet->setCellValue('G'.$i, $row1['paud']);
        $sheet->setCellValue('H'.$i, $row1['tk']);
        $sheet->setCellValue('I'.$i, $row1['no_skhun']);
        $sheet->setCellValue('J'.$i, $row1['no_ijazah']);
        $sheet->setCellValue('K'.$i, $row1['hobi']);
        $sheet->setCellValue('L'.$i, $row1['citacita']);
        $i++;
    }
    $i = 2;
    while ($row2 = mysqli_fetch_array($tamDD)) {
        $sheet->setCellValue('M'.$i, $row2['nama_lengkap']);
        $sheet->setCellValue('N'.$i, $row2['jenis_kelamin']);
        $sheet->setCellValue('O'.$i, $row2['nisn']);
        $sheet->setCellValue('P'.$i, $row2['nik']);
        $sheet->setCellValue('Q'.$i, $row2['tgl_lahir']);
        $sheet->setCellValue('R'.$i, $row2['tempat_lahir']);
        $sheet->setCellValue('S'.$i, $row2['agama']);
        $sheet->setCellValue('T'.$i, $row2['berkebutuhan_khusus']);
        $sheet->setCellValue('U'.$i, $row2['alamat_jalan']);
        $sheet->setCellValue('V'.$i, $row2['rt']);
        $sheet->setCellValue('W'.$i, $row2['rw']);
        $sheet->setCellValue('X'.$i, $row2['nama_dusun']);
        $sheet->setCellValue('Y'.$i, $row2['nama_kelurahan_desa']);
        $sheet->setCellValue('Z'.$i, $row2['kecamatan']);
        $sheet->setCellValue('AA'.$i, $row2['kode_pos']);
        $sheet->setCellValue('AB'.$i, $row2['tempat_tinggal']);
        $sheet->setCellValue('AC'.$i, $row2['moda_transportasi']);
        $sheet->setCellValue('AD'.$i, $row2['no_hp']);
        $sheet->setCellValue('AE'.$i, $row2['no_telp']);
        $sheet->setCellValue('AF'.$i, $row2['email']);
        $sheet->setCellValue('AG'.$i, $row2['penerima_kps_pkh_kip']);
        $sheet->setCellValue('AH'.$i, $row2['no_penerima']);
        $sheet->setCellValue('AI'.$i, $row2['kewarganegaraan']);
        $sheet->setCellValue('AJ'.$i, $row2['nama_negara']);
        $i++;
    }
    $i = 2;
    while ($row3 = mysqli_fetch_array($tamDO)) {
        $sheet->setCellValue('AK'.$i, $row3['nama_ayah_kandung']);
        $sheet->setCellValue('AL'.$i, $row3['tahun_lahir_ayah']);
        $sheet->setCellValue('AM'.$i, $row3['pendidikan_ayah']);
        $sheet->setCellValue('AN'.$i, $row3['pekerjaan_ayah']);
        $sheet->setCellValue('AO'.$i, $row3['penghasilan_bulanan_ayah']);
        $sheet->setCellValue('AP'.$i, $row3['berkebutuhan_khusus_ayah']);
        $sheet->setCellValue('AQ'.$i, $row3['nama_ibu_kandung']);
        $sheet->setCellValue('AR'.$i, $row3['tahun_lahir_ibu']);
        $sheet->setCellValue('AS'.$i, $row3['pendidikan_ibu']);
        $sheet->setCellValue('AT'.$i, $row3['pekerjaan_ibu']);
        $sheet->setCellValue('AU'.$i, $row3['penghasilan_bulanan_ibu']);
        $sheet->setCellValue('AV'.$i, $row3['berkebutuhan_khusus_ibu']);
        $i++;
    }

    $styleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            ],
        ],
    ];
    $styleArray1 = array(
        'font'  => array(
            'bold'  => true,
            'color' => array('rgb' => '#000000'),
            'size'  => 11,
            'name'  => 'Calibri'
        ));
    $i = $i - 1;
    $l = 1;
    $sheet->getStyle('A1:AV'.$i)->applyFromArray($styleArray);
    $sheet->getStyle('A1:AV'.$l)->applyFromArray($styleArray1);

    $write = new Xlsx($spreadsheet);
    $write->save('Report Data Siswa.xlsx');
?>