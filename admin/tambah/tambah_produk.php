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
    <li class="text-slate-700 dark:text-zink-100">Tambah Produk</li>
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
    <h5 class="mb-0 text-dark-400">Tambah Produk</h5>
</div>

<?php
$kategori = [];
$ambil = $koneksi->query("SELECT * FROM kategori");
while ($pecah = $ambil->fetch_assoc()) {
  $kategori[] = $pecah;
}
?>

<div class="mt-3 card">
  <div class="card-body">
     <form method="post" enctype="multipart/form-data">
       <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
        
           <div class="mb-3">
              <label for="inputText" class="inline-block mb-2 text-base font-medium">Nama Kategori <span class="text-red-500">*</span></label>
               <select name="id_kategori" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Placeholder">
                   <option selected="" disabled="">Pilih nama kategori</option>
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
               <input type="text" name="nama" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Masukan nama produk">
            </div>
           <div class="mb-3">
               <label for="inputPlaceholder" class="inline-block mb-2 text-base font-medium">Harga Produk <span class="text-red-500">*</span></label>
               <input type="number" name="harga" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Masukan harga produk">
            </div>
           <div class="mb-3">
               <label for="inputPlaceholder" class="inline-block mb-2 text-base font-medium">Berat Produk <span class="text-red-500">*</span></label>
               <input type="number" name="berat" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Masukan berat produk">
            </div>
           <div class="mb-3">
               <label for="inputPlaceholder" class="inline-block mb-2 text-base font-medium">Stok Produk <span class="text-red-500">*</span></label>
               <input type="number" name="stok" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Masukan stok produk">
            </div>
           <div class="mb-3">
               <label for="inputPlaceholder" class="inline-block mb-2 text-base font-medium">Deskripsi Produk <span class="text-red-500">*</span></label>
               <textarea name="deskripsi" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="textArea" rows="3" placeholder="Tulis deskripsi produk"></textarea>
            </div>
           <div class="mb-3">
               <label for="inputPlaceholder" class="inline-block mb-2 text-base font-medium">Foto Produk <span class="text-red-500">*</span></label>
               <div class="input-foto">
                 <input name="foto[]" type="file" class="cursor-pointer form-file border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter your name">
               </div>
               <div class="mt-1">
                  <button type="button" class="btn-tambah flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 bg-white border-dashed text-yellow-500 btn border-yellow-500 hover:text-yellow-500 hover:bg-yellow-50 hover:border-yellow-600 focus:text-yellow-600 focus:bg-yellow-50 focus:border-yellow-600 active:text-yellow-600 active:bg-yellow-50 active:border-yellow-600 dark:bg-zink-700 dark:ring-yellow-400/20 dark:hover:bg-yellow-800/20 dark:focus:bg-yellow-800/20 dark:active:bg-yellow-800/20"><i class="fa-solid fa-folder-plus"></i>
                  </button>
                </div>
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
  $deskripsi = $_POST["deskripsi"];
  $stok = $_POST["stok"];

  $nama_foto = $_FILES["foto"]["name"];
  $lokasi_foto = $_FILES["foto"]["tmp_name"];

  move_uploaded_file($lokasi_foto[0], "../assets/foto_produk/" . $nama_foto[0]);
  $koneksi->query(
    "INSERT INTO produk (id_kategori,nama_produk,harga_produk,berat_produk,stok_produk,deskripsi_produk,foto_produk) VALUES ('$id_kategori','$nama','$harga','$berat','$stok','$deskripsi','$nama_foto[0]')"
  );

  $id_baru = $koneksi->insert_id;

  foreach ($nama_foto as $key => $tiap_nama) {
    $tiap_lokasi = $lokasi_foto[$key];
    move_uploaded_file($tiap_lokasi, "../assets/foto_produk/" . $tiap_nama);
    $koneksi->query(
      "INSERT INTO produk_foto (id_produk, nama_produk_foto) VALUES('$id_baru','$tiap_nama')"
    );
  }

  echo "<script>alert('Data Berhasil Tersimpan');</script>";
  echo "<script>location='index.php?halaman=produk';</script>";
}
?>
