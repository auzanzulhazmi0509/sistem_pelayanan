<body onload="window.print()">
    <p style="line-height: 0.5;"><img src="{{asset('images/header_pdf.png')}}" style="width: 651px;"></p>
    <hr>
    <p style="line-height: 0.5;"><span style="font-family: Arial, Helvetica, sans-serif;">PROVINSI<span
                style="white-space:pre;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp;</span>: JAWA TIMUR</span></p>
    <p style="line-height: 0.5;"><span style="font-family: Arial, Helvetica, sans-serif;">KABUPATEN/KOTA<span
                style="white-space:pre;">&nbsp; &nbsp; &nbsp; &nbsp;</span>: LUMAJANG</span></p>
    <p style="line-height: 0.5;"><span style="font-family: Arial, Helvetica, sans-serif;">KECAMATAN<span
                style="white-space:pre;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>:
            PASIRIAN</span></p>
    <p style="line-height: 0.5;"><span style="font-family: Arial, Helvetica, sans-serif;">DESA/KELURAHAN<span
                style="white-space:pre;">&nbsp; &nbsp; &nbsp;&nbsp;</span>: CONDRO</span></p>
    <p style="line-height: 0.5;"><span style="font-family: Arial, Helvetica, sans-serif;"><br></span></p>
    <p style="text-align: center; line-height: 0.1;"><span
            style="font-family: Arial, Helvetica, sans-serif;"><strong><u>SURAT KETERANGAN PINDAH
                    WNI</u></strong></span></p>
    <p style="text-align: center; line-height: 0.1;"><span style="font-family: Arial, Helvetica, sans-serif;">ANTAR
            KAB/KOTA</span></p>
    <p style="text-align: center; line-height: 0.1;"><span
            style="font-family: Arial, Helvetica, sans-serif;"></span><strong>SKPWNI/3506/22032021/0101</strong></span>
    </p>
    <p style="text-align: center; line-height: 0.1;"><span
            style="font-family: Arial, Helvetica, sans-serif;"><br></span></p>
    <p><span style="font-family: Arial, Helvetica, sans-serif;"><strong>DATA DAERAH ASAL</strong></span></p>
    <ol>
        <li><span style="font-family: Arial, Helvetica, sans-serif;">Nomor Kartu Keluarga<span
                    style="white-space:pre;">&nbsp; &nbsp; &nbsp;</span>: &nbsp; {{ $surat->no_kk }}</span></li>
        <li><span style="font-family: Arial, Helvetica, sans-serif;">Nama Kepala Keluarga<span
                    style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>: &nbsp; {{ $kepala->keluarga->nama }}</span>
        </li>
        <li><span style="font-family: Arial, Helvetica, sans-serif;">Alamat<span style="white-space:pre;">&nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;</span>: &nbsp; {{ $surat->kartukeluarga->alamat }}</span></li>
    </ol>
    <ol style="list-style-type: lower-alpha;">
        <li style="list-style-type: none;">
            <ol style="list-style-type: lower-alpha;">
                <li style="line-height: 1.15;"><span
                        style="font-family: Arial, Helvetica, sans-serif;">Desa/Kelurahan<span
                            style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>: &nbsp;
                        {{ $surat->kartukeluarga->desa }}</span></li>
                <li style="line-height: 1.15;"><span style="font-family: Arial, Helvetica, sans-serif;">Kecamatan<span
                            style="white-space:pre;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>: &nbsp;
                        {{ $surat->kartukeluarga->desa }}</span></li>
                <li style="line-height: 1.15;"><span
                        style="font-family: Arial, Helvetica, sans-serif;">Kabupaten/Kota<span
                            style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>: &nbsp;
                        {{ $surat->kartukeluarga->kabupaten }}</span></li>
                <li style="line-height: 1.15;"><span style="font-family: Arial, Helvetica, sans-serif;">Provinsi<span
                            style="white-space:pre;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>&nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;: &nbsp; {{ $surat->kartukeluarga->provinsi }}</span></li>
                <li style="line-height: 1.15;"><span style="font-family: Arial, Helvetica, sans-serif;">Kode Pos<span
                            style="white-space:pre;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>:
                        &nbsp; {{ $surat->kartukeluarga->kode_pos }}</span></li>
            </ol>
        </li>
    </ol>
    <ol start="4">
        <li><span style="font-family: Arial, Helvetica, sans-serif;">NIK Pemohon<span style="white-space:pre;">&nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>: &nbsp; {{ $surat->nik }}</span></li>
    </ol>
    <p><span style="font-family: Arial, Helvetica, sans-serif;"><strong>DATA KEPINDAHAN</strong></span></p>
    <ol>
        <li><span style="font-family: Arial, Helvetica, sans-serif;">Alamat Tujuan Pindah<span
                    style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>: {{$surat->alamat_tujuan}}</span></li>
    </ol>
    <ol style="list-style-type: lower-alpha;">
        <li style="list-style-type: none;">
            <ol style="list-style-type: lower-alpha;">
                <li><span style="font-family: Arial, Helvetica, sans-serif;">Desa/Kelurahan<span
                            style="white-space:pre;">&nbsp; &nbsp; &nbsp;</span>: &nbsp;
                        {{ $surat->desa_tujuan }}</span></li>
                <li><span style="font-family: Arial, Helvetica, sans-serif;">Kecamatan<span
                            style="white-space:pre;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>: &nbsp;
                        {{ $surat->kecamatan_tujuan }}</span></li>
                <li><span style="font-family: Arial, Helvetica, sans-serif;">Kabupaten/Kota<span
                            style="white-space:pre;">&nbsp; &nbsp; &nbsp;</span>: &nbsp;
                        {{ $surat->kabupaten_tujuan }}</span></li>
                <li><span style="font-family: Arial, Helvetica, sans-serif;">Provinsi<span
                            style="white-space:pre;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>&nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; : &nbsp; {{ $surat->provinsi_tujuan }}</span></li>
                <li><span style="font-family: Arial, Helvetica, sans-serif;">Kode Pos<span
                            style="white-space:pre;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>:
                        &nbsp; {{ $surat->kode_pos_tujuan }}</span></li>
            </ol>
        </li>
    </ol>
    <ol start="2">
        <li><span style="font-family: Arial, Helvetica, sans-serif;">Klasifikasi Pindah<span
                    style="white-space:pre;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>: &nbsp; &nbsp;ANTAR KAB</span>
        </li>
    </ol>
    <p style="margin: 0cm; line-height: 0; font-size: 15px; font-family: Calibri, sans-serif;"><span
            style='font-size:13px;line-height:150%;font-family:"Arial",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-size: 16px; line-height: 150%; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-size: 14px; line-height: 150%; font-family: Arial, sans-serif;">LUMAJANG,
            <?php echo date("d-m-y")?></span></p>
    <p style="margin: 0cm; line-height: 0; font-size: 15px; font-family: Calibri, sans-serif;"><span
            style="font-size: 14px;"><span style="line-height: 150%; font-family: Arial, sans-serif;">&nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; Dikeluarkan Oleh :</span></span></p>
    <p style="margin: 0cm; line-height: 0; font-size: 15px; font-family: Calibri, sans-serif;"><span
            style="font-size: 14px;"><span style="line-height: 150%; font-family: Arial, sans-serif;">&nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; KEPALA DINAS KEPENDUDUKAN DAN</span></span></p>
    <p style="margin: 0cm; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
            style="font-size: 14px;"><span style="line-height: 150%; font-family: Arial, sans-serif;">Pemohon&nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp;PENCATATAN SIPIL KABUPATEN LUMAJANG</span></span></p>
    <p style="margin: 0cm; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
            style="font-size: 14px;"><span
                style="line-height: 150%; font-family: Arial, sans-serif;">&nbsp;</span></span></p>
    <p style="margin: 0cm; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
            style="font-size: 14px;"><span
                style="line-height: 150%; font-family: Arial, sans-serif;">&nbsp;</span></span></p>
    <p style="margin: 0cm; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
            style="font-size: 14px;"><u><span
                    style="line-height: 150%; font-family: Arial, sans-serif;">{{ $kepala->keluarga->nama }}</span></u><span
                style="line-height: 150%; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp;&nbsp;<u>NAMA</u></span></span></p>
    <p style="margin: 0cm; line-height: 1; font-size: 15px; font-family: Calibri, sans-serif;"><span
            style="font-size: 14px; line-height: 150%; font-family: Arial, sans-serif;">NIK. {{$kepala->keluarga->nik}}
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;NIP.</span></p>
</body>
