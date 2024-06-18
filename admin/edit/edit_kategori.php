<ul class="mt-3 flex flex-wrap items-center gap-2 mb-3 text-sm font-normal">
    <li
        class="relative before:content-['\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200"
    >
        <a href="index.php" class="text-custom-500 dark:text-custom-500">Home</a>
    </li>
    <li
        class="relative before:content-['\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200"
    >
        <a href="index.php?halaman=kategori" class="text-custom-500 dark:text-custom-500">Kategori</a>
    </li>
    <li class="text-slate-700 dark:text-zink-100">Edit Kategori</li>
</ul>

<div class="px-1 py-1 text-center bg-white-200 rounded-md dark:bg-white-900">
    <div
        class="flex items-center justify-center mx-auto mb-0 rounded-md size-8 dark:bg-white-400/20"
    >
        <i
            data-lucide="combine"
            class="text-green-500 fill-green-200 dark:fill-green-500/20"
        ></i>
    </div>
    <h5 class="mb-0 text-dark-400">Edit Kategori</h5>
</div>

<?php
$id_kategori = $_GET["id"];
$ambil = $koneksi->query(
  "SELECT * FROM kategori WHERE id_kategori='$id_kategori'"
);
$edit = $ambil->fetch_assoc();
?>

<div class="mt-3 card">
  <div class="card-body">
     <form method="post">
        <div class="mb-3">
           <label for="inputText" class="inline-block mb-2 text-base font-medium">Nama Kategori <span class="text-red-500">*</span></label>
            <input type="text" name="nama" value="<?php echo $edit[
              "nama_kategori"
            ]; ?>" id="inputText" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
         </div>
         <div class="text-right">
           <button type="submit" name="simpan" class="text-custom-500 btn bg-custom-200 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20">Simpan</button>
          </div>
    </form>
  </div>
</div>

<?php if (isset($_POST["simpan"])) {
  $nama = $_POST["nama"];
  $koneksi->query(
    "UPDATE kategori SET nama_kategori='$nama' WHERE id_kategori='$id_kategori'"
  );

  echo "<script>alert('Data Berhasil Diedit');</script>";
  echo "<script>location='index.php?halaman=kategori';</script>";
}
?>
