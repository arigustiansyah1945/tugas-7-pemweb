<htmL>
  <head>
    <title>Konversi Nilai Menggunakan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <form method="post" action="convert.php">
      <p>Nama : <input name="nama" type="text" id="nama"/></p>
      <p>NPM : <input name="npm" type="text" id="npm"/></p>
      <p>Nilai : <input name="nilai" type="number" min=0 id="nilai"/></p>
      <input type="submit" value="Hasil" />
      <button type="button"  onclick="clear_data()">Clear</button>
    </form>

  </body>

  <script>
    function clear_data(){
      var nama = document.getElementById("nama");
      var npm = document.getElementById("npm");
      var nilai = document.getElementById("nilai");

      nama.value="";
      npm.value="";
      nilai.value="";
    }
  </script>
</htmL>