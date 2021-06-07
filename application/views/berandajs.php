<script type="text/javascript">
      function startIntro(){
        var intro = introJs();
          intro.setOptions({
            steps: [
              {
                intro: '<p style="text-align:justify;">Mari kita pelajari fitur-fitur dari sistem aplikasi SKCK secara online.</p>'
              },
              {
                element: '#step1',
                intro: '<p style="text-align:justify;">Ini adalah panel utama untuk mengakses fitur sistem aplikasi ini. <br/> (1) Melalui Menu <b>Aplikasi SKCK Baru</b>, anda dapat mengajukan permohonan SKCK secara online. <br/> (2) Melalui Menu <b>Tentang SKCK</b>, anda dapat mempelajari tata cara, prosedur, serta dokumen pendaftaran SKCK via online.</p>',
                position: 'bottom'
              },
              {
                element: '#step2',
                intro: '<p style="text-align:justify;">Apabila anda sudah mengajukan permohonan aplikasi, anda dapat memasukkan <b>No. registrasi</b> anda untuk mengecek status permohonan anda apakah sudah <u>terdaftar</u>, <u>sudah lengkap</u>, atau <u>sudah diterbitkan</u>.</p>',
                position: 'left'
              },
              {
                intro: '<p style="text-align:justify;">Selamat menggunakan Sistem SKCK Online dari Polsek Pasar Kemis.</p><p style="text-align:justify;">Apabila ada kesulitan atau pertanyaan, silakan kontak kami di Telpon: +6281298883337 <br/>Email: skck@polsekpasarkemis.id <br/>FB: fb.com/polsekpasarkemis <br/>Twiter: @Polsek_PaKem <br/>LINE  polsek_pasarkemis </p>'
              }
            ]
          });

          intro.start();
      }
</script>
