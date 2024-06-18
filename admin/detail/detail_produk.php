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
    <li class="text-slate-700 dark:text-zink-100">Detail Produk</li>
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
    <h5 class="mb-0 text-dark-400">Detail Produk</h5>
</div>

<?php
$id_produk = $_GET["id"];
$ambil = $koneksi->query(
  "SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori WHERE id_produk='$id_produk'"
);
$detailproduk = $ambil->fetch_assoc();

$produk_foto = [];
$ambil = $koneksi->query(
  "SELECT * FROM produk_foto WHERE id_produk='$id_produk'"
);
while ($tiap = $ambil->fetch_assoc()) {
  $produk_foto[] = $tiap;
}
?>

<div class="mt-3 card">
  <div class="card-body">
    <h5 class="mb-7">Data Produk</h5>
       <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
        
           <div class="mb-3">
              <label for="inputText" class="inline-block mb-2 text-base font-medium">Nama Kategori</label>
                <input disabled="" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="<?php echo $detailproduk[
                  "nama_kategori"
                ]; ?>">
            </div>
           <div class="mb-3">
              <label for="inputText" class="inline-block mb-2 text-base font-medium">Nama Produk</label>
                <input disabled="" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="<?php echo $detailproduk[
                  "nama_produk"
                ]; ?>">
            </div>
           <div class="mb-3">
              <label for="inputText" class="inline-block mb-2 text-base font-medium">Harga Produk</label>
                <input disabled="" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="<?php echo $detailproduk[
                  "harga_produk"
                ]; ?>">
            </div>
           <div class="mb-3">
              <label for="inputText" class="inline-block mb-2 text-base font-medium">Berat Produk</label>
                <input disabled="" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="<?php echo $detailproduk[
                  "berat_produk"
                ]; ?>">
            </div>
           <div class="mb-3">
              <label for="inputText" class="inline-block mb-2 text-base font-medium">Deskripsi Produk</label>
                <textarea disabled="" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="<?php echo $detailproduk[
                  "deskripsi_produk"
                ]; ?>"></textarea>
            </div>
           <div class="mb-3">
              <label for="inputText" class="inline-block mb-2 text-base font-medium">Stok Produk</label>
                <input disabled="" id="inputPlaceholder" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="<?php echo $detailproduk[
                  "stok_produk"
                ]; ?>">
            </div>
            
       </div>
  </div>
</div>


<div class="card">
  <div class="card-body">
    <h6 class="mb-4 text-15">Foto Produk</h6>
    <div class="grid grid-cols-1 gap-5 md:grid-cols-3 xl:grid-cols-4">
     <?php foreach ($produk_foto as $key => $value): ?>
      <!-- html... -->
       <div style="width: 13.5rem;">
          <a href="../assets/foto_produk/<?php echo $value[
            "nama_produk_foto"
          ]; ?>" class="glightbox">
           <img src="../assets/foto_produk/<?php echo $value[
             "nama_produk_foto"
           ]; ?>" alt="image" class="rounded-md">
        </a>
        <a href="index.php?halaman=hapus_foto&idfoto=<?php echo $value[
          "id_produk_foto"
        ]; ?>&idproduk=<?php echo $value[
  "id_produk"
]; ?>" class="mt-2 text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20">
         <i class="fa-solid fa-trash-can"></i><span> Hapus</span>
       </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="mt-3 card">
  <div class="card-body">
     <form method="post" enctype="multipart/form-data">
           <div class="mb-3">
               <label for="inputPlaceholder" class="inline-block mb-6 text-base font-medium">
                <h6>Tambah Foto</h6></label>
               <div class="input-foto">
                 <input name="produk_foto" type="file" class="cursor-pointer form-file border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" placeholder="Enter your name">
               </div>
            </div>
      
         <div class="text-right">
           <button type="submit" name="simpan" class="text-custom-500 btn bg-custom-200 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20">Simpan</button>
          </div>
    </form>
  </div>
</div>

<?php if (isset($_POST["simpan"])) {
  $namafoto = $_FILES["produk_foto"]["name"];
  $lokasifoto = $_FILES["produk_foto"]["tmp_name"];

  $tgl_foto = date("YmdHis") . $namafoto;

  move_uploaded_file($lokasifoto, "../assets/foto_produk/" . $tgl_foto);

  $koneksi->query(
    "INSERT INTO produk_foto (id_produk,nama_produk_foto) VALUES ('$id_produk','$tgl_foto')"
  );

  echo "<script>alert('Foto Berhasil Ditambahkan');</script>";
  echo "<script>location='index.php?halaman=detail_produk&id=$id_produk';</script>";
}
?>
