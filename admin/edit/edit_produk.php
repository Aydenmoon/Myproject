<ul class="mt-3 flex flex-wrap items-center gap-2 mb-3 text-sm font-normal">
    <li
        class="relative before:content-['\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200"
    >
        <a href="index.php" class="text-custom-500 dark:text-custom-500">Home</a>
    </li>
    <li
        class="relative before:content-['\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200"
    >
        <a href="index.php?halaman=produk" class="text-custom-500 dark:text-custom-500">Produk</a>
    </li>
    <li class="text-slate-700 dark:text-zink-100">Edit Produk</li>
</ul>

<div class="px-1 py-1 text-center bg-white-200 rounded-md dark:bg-white-900">
    <div
        class="flex items-center justify-center mx-auto mb-0 rounded-md size-8 dark:bg-white-400/20"
    >
        <i
            data-lucide="dices"
            class="text-green-500 fill-green-200 dark:fill-green-500/20"
        ></i>
    </div>
    <h5 class="mb-0 text-dark-400">Edit Produk</h5>
</div>

<?php
$id_produk = $_GET["id"];

$kategori = [];
$ambil = $koneksi->query("SELECT * FROM kategori");
while ($pecah = $ambil->fetch_assoc()) {
  $kategori[] = $pecah;
}

$ambil = $koneksi->query(
  "SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori WHERE id_produk='$id_produk'"
);
$edit = $ambil->fetch_assoc();
?>

<div class="mt-3 card">
  <div class="card-body">
     <form method="post" enctype="multipart/form-data">
        <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
           <div class="mb-3">
             <label for="inputText" class="inline-block mb-2 text-base font-medium">Nama Kategori <span class="text-red-500">*</span></label>
              <select type="text" name="id_kategori" id="inputText" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
               <option value="<?php echo $edit[
                 "id_kategori"
               ]; ?>"><?php echo $edit["nama_kategori"]; ?></option>
               <?php foreach ($kategori as $key => $value): ?>
                <!-- html... -->
               <option value="<?php echo $value[
                 "id_kategori"
               ]; ?>"><?php echo $value["nama_kategori"]; ?></option>
               <?php endforeach; ?>
              </select>
           </div>
           <div class="mb-3">
              <label for="inputPlaceholder" class="inline-block mb-2 text-base font-medium">Nama Produk <span class="text-red-500">*</span></label>
               <input type="text" name="nama" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="<?php echo $edit[
                 "nama_produk"
               ]; ?>">
           </div>
           <div class="mb-3">
              <label for="inputPlaceholder" class="inline-block mb-2 text-base font-medium">Harga Produk <span class="text-red-500">*</span></label>
               <input type="text" name="harga" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="<?php echo $edit[
                 "harga_produk"
               ]; ?>">
           </div>
           <div class="mb-3">
              <label for="inputPlaceholder" class="inline-block mb-2 text-base font-medium">Berat Produk <span class="text-red-500">*</span></label>
               <input type="text" name="berat" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="<?php echo $edit[
                 "berat_produk"
               ]; ?>">
           </div>
           <div class="mb-3">
              <label for="inputPlaceholder" class="inline-block mb-2 text-base font-medium">Stok Produk <span class="text-red-500">*</span></label>
               <input type="text" name="stok" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="<?php echo $edit[
                 "stok_produk"
               ]; ?>">
           </div>
           <div class="mb-3">
              <label for="inputPlaceholder" class="inline-block mb-2 text-base font-medium">Deskripsi Produk <span class="text-red-500">*</span></label>
               <textarea name="deskripsi" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="textArea" rows="3" placeholder="Tulis deskripsi produk"><?php echo $edit[
                 "deskripsi_produk"
               ]; ?></textarea>
           </div>
           <div class="mb-3">
              <label for="inputPlaceholder" class="inline-block mb-2 text-base font-medium">Foto Produk <span class="text-red-500">*</span></label>
              <img src="../assets/foto_produk/<?php echo $edit[
                "foto_produk"
              ]; ?>" width="150" alt="">
               <input type="file" name="foto[]" id="inputPlaceholder" class="mt-2 cursor-pointer form-file border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
           </div>
         </div>
         
         <div class="text-right">
           <button type="submit" name="simpan" class="text-custom-500 btn bg-custom-200 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20">Simpan</button>
          </div>
    </form>
  </div>
</div>

<?php if (isset($_POST["simpan"])) {
  $id_kategori = $_POST["id_kategori"];
  $nama = $_POST["nama"];
  $harga = $_POST["harga"];
  $berat = $_POST["berat"];
  $stok = $_POST["stok"];
  $deskripsi = $_POST["deskripsi"];

  $namafoto = $_FILES["foto"]["name"];
  $lokasifoto = $_FILES["foto"]["tmp_name"];

  //Jika Foto Produk Diubah
  if (!empty($lokasifoto)) {
    move_uploaded_file($lokasifoto[0], "../assets/foto_produk/" . $namafoto[0]);

    $koneksi->query("UPDATE produk SET
  id_kategori ='$id_kategori',
  nama_produk ='$nama',
  harga_produk ='$harga',
  berat_produk ='$berat',
  foto_produk ='$namafoto[0]',
  deskripsi_produk ='$deskripsi',
  stok_produk ='$stok'
  WHERE id_produk ='$id_produk'");
  }
  // Jika Foto Produk Tidak Diubah
  else {
    $koneksi->query("UPDATE produk SET
  id_kategori ='$id_kategori',
  nama_produk ='$nama',
  harga_produk ='$harga',
  berat_produk ='$berat',
  deskripsi_produk ='$deskripsi',
  stok_produk ='$stok'
  WHERE id_produk ='$id_produk'");
  }
  $namafotoproduk = $_FILES["foto"]["name"];
  $lokasifotoproduk = $_FILES["foto"]["tmp_name"];

  move_uploaded_file(
    $lokasifotoproduk[0],
    "../assets/foto_produk/" . $namafotoproduk[0]
  );
  $koneksi->query(
    "INSERT INTO produk_foto (id_produk,nama_produk_foto) VALUES ('$id_produk','$namafotoproduk[0]')"
  );

  echo "<script>alert('Data Berhasil Diedit');</script>";
  echo "<script>location='index.php?halaman=produk';</script>";
}
?>
