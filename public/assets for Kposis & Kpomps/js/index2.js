var nama1 = ['Abdullah Muhammad Abror - M. Guntur Rahardjo', 'Faiz Nur Iman - M. Basil Musyafa Amin', 'Arief Firmansyah - Zaidan Tri Wicaksana'];
var nama2 = ['Muhammad Fauzan - Ghifari Raihan Arafah', 'M. Saddam Alfikri - M. Idham Farhan', 'Dimas Fredy Prakasa - M. Farhan Maulana'];
var tujuano = new Array();
var tujuanm = new Array();
var angka = ['one', 'two', 'three'];
var a = 999;

tujuano[0] = {
    visi: 'MEMBENTUK OSIM SEBAGAI ORGANISASI BERLANDASKAN ASAS KEKELUARGAAN.',
    misi: ['MEWEUJUDKAN IMPIAN SISWA/I MAN IC JAMBI.',
        'MENUMBUH KEMBANGKAN KEIMANAN DAN KETAQWAAN SISWA/I MAN IC JAMBI',
        'MENYIAPKAN SISWA/I YANG MAMPU GO INTERNASIONAL'
    ]
}

tujuano[1] = {
    visi: 'MENYELARASKAN KEGIATAN ORGANISASI DENGAN KEGIATAN MADRASAH UNTUK MENCIPTAKAN SISWA/I YANG TERAMPIL DALAM BIDANG AKADEMIK DAN SOSIAL SEHINGGA SIAP UNTUK TURUN KE MASYARAKAT DAN MEWUJUDKAN GENERASI INDONESIA EMAS 2045.',
    misi: ['MEMBANGUN, MENGKOORDINASI DAN MENJAGA HUBUNGAN ANTARA SISWA DENGAN MADRASAH AGAR TERCIPTANYA KERJA SAMA YANG KUAT, HUBUNGAN YANG HARMONIS DAN BERSIFAT TRANSPARAN.',
        'MENJADIKAN ORGANISASI SEBAGAI MINAT SISWA DAN TENTUNYA MENJADIKAN ORGANISASI SEBAGAI WADAH UNTUK MENGEMBANGKAN POTENSI SISWA DALAM BIDANG AKADEMIK DAN SOSIAL'
    ]
}

tujuano[2] = {
    visi: 'MEWUJUDKAN LINGKUNGAN SOSIAL MADRASAH YANG BERKUALITAS, SERTA JIWA PRIBADI OSIM YANG DISIPLIN DAN BERTANGGUNG JAWAB.',
    misi: ['MENINGKATKAN NILAI KEROHANIAN DAN INTEGRITAS KEDISIPLINAN DALAM DIRI SISWA/I',
        'MENDUKUNG DAN MEMAKSIMALKAN POTENSI SISWA/I',
        'MENERAPKAN DAN MENSTABILKAN METODE PELAKSANAAN PROGRAM KERJA YANG CERDAS'
    ]
}

tujuanm[0] = {
    visi: 'MENJADIKAN MPS, SEBAGAI WADAH PENGAWA OSIM YANG EFEKTIF, EFISIEN, DAN BERTANGGUNG JAWAB',
    misi: ['MEMASTIKAN SETIAP KEGIATAN OSIM BERJALAN SESUAI DENGAN YANG DIRENCANAKAN',
        'MEMASTIKAN SETIAP KEGIATAN OSIM MEMBERIKAN MANFAAT YANG SELUAS LUASNYA BAGI SELURUH SISWA',
        'MEMBERIKAN KESEMPATAN BAGI SELURUH SISWA UNTUK MENYAMPAIKAN ASPIRASINYA TERKAIT KEGIATAN OSIM'
    ]
}

tujuanm[1] = {
    visi: 'TERWUJUDNYA OISM YANG BEKERJA SECARA TOTALITAS DAN PROFESIONAL SERTA MEMILIKI RASA TANGGUNG JAWAB DAN PEMIKIRAN KRITIS DALAM MENGHADAPI MASALAH BAIK SECARA LANGSUG MAUPUN TIDAK LANGSUNG',
    misi: ['MEMBANTU PENYELANGGARAAN PEMILIHAN ANGGOTA OSIM KABINET BARU SECARA SELEKTIF',
        'MEMBANTU CONTROLLING KINERJA OSIM DALAM MELAKUKAN PERSIAPAN PROGRAM KERJA',
        'MENJADI MEDIATOR SISWA/I TENTANG BAGAIMANA PELAKSANAAN PROGRAM KERJA OSIM'
    ]
}

tujuanm[2] = {
    visi: 'MENCIPTAKAN MPS SEBAGAI ORGANISASI PENGAWAS, DAN PENDAMPING OSIM YANG KOLABORATIF, EFKETIF, EFISIEN, DAN BERTANGGUNG JAWAB',
    misi: ['MENCIPTAKAN OSIM MAN INSAN CENDEKIA JAMBI, OSIM YANG AMANAH, JUJUR, BERTANGGUNG JAWAB, BERTAKWA DAN BERIMAN, SERTA MENAATI TATA TERTIB MAN INSAN CENDEKIA JAMBI',
        'MENINGKATKAN KUALITAS KERJASAMA ANTAR BIDANG DI OSIM MAN IC JAMBI DAN PROFESIONALITAS DALAM BERORGANISASI',
        'MENGOPTIMALISASI SELURUH PROGRAM KERJA OSIM AGAR BERJALAN LANCAR DAN MAKSIMAL',
        'MEMASTIKAN SETIAP KEGIATAN OSIM MAN INSAN CENDEKIA JAMBI MEMBERIKAN MANFAAT DAN TIDAN MENGGANGGU KEPENTINGAN SELURUH SISWA/I MAN IC JAMBI',
        'MENAMPUNG DAN MENYALURKAN ASPIRASI SISWA/I MAN IC JAMBI TERKAIT KEGIATAN OSIM SERTA BERUSAHA MEWUJUDKANNYA'
    ]
}

function dakJadi() {
    document.getElementById('halaman').style.overflow = 'scroll';
    document.getElementById('navbar').style.position = 'fixed';
    document.getElementById('konfirmasi').style.display = 'none';
}

function terpilih1(x) {
    document.getElementById('halaman').style.overflow = 'hidden';
    document.getElementById('navbar').style.position = 'relative';
    document.getElementById('konfirmasi').style.display = 'block';
    // document.getElementById('konfirmasi').style.borderRadius = '20px';
    $('#konfirmasi').removeClass().addClass('zoomIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).removeClass();
    });
    document.getElementById('nama2').innerHTML = nama1[x];
    document.getElementById('submit').value = x;

}

function terpilih2(x) {
    document.getElementById('halaman').style.overflow = 'hidden';
    document.getElementById('navbar').style.position = 'relative';
    document.getElementById('konfirmasi').style.display = 'block';
    // document.getElementById('konfirmasi').style.borderRadius = '20px';
    $('#konfirmasi').removeClass().addClass('zoomIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).removeClass();
    });
    document.getElementById('nama2').innerHTML = nama2[x];
    document.getElementById('submit').value = x;

}

function jelaskan1(x, y) {
    // console.log(x);
    document.getElementById(y).style.opacity = '1'
    $('#' + y).removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).removeClass();
    });
    document.getElementById('visi').innerHTML = tujuano[x].visi;
    $('#misi').empty();
    for (var i = 0; i < tujuano[x].misi.length; i++) {
        $('#misi').append('<li class="misi"> ' + tujuano[x].misi[i] + '</li>');
    }
};


function jelaskan2(x, y) {
    // console.log(x);
    document.getElementById(y).style.opacity = '1'
    $('#' + y).removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).removeClass();
    });
    document.getElementById('visi').innerHTML = tujuanm[x].visi;
    $('#misi').empty();
    for (var i = 0; i < tujuanm[x].misi.length; i++) {
        $('#misi').append('<li class="misi"> ' + tujuanm[x].misi[i] + '</li>');
    }
};

function blurkan(x, y) {
    // console.log(x);
    $('#' + y).removeClass().addClass('zoomOut animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).removeClass()
        document.getElementById(y).style.opacity = '0';
    });
};