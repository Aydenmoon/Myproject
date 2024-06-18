<ul class="mt-3 flex flex-wrap items-center gap-2 mb-3 text-sm font-normal">
    <li
        class="relative before:content-['\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200"
    >
        <a href="index.php" class="text-custom-500 dark:text-custom-500">Home</a>
    </li>
    <li class="text-slate-700 dark:text-zink-100">Produk</li>
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
    <h5 class="mb-0 text-dark-400">Halaman Produk</h5>
</div>

<?php
$produk = [];
$ambil = $koneksi->query(
  "SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori"
);
while ($pecah = $ambil->fetch_assoc()) {
  $produk[] = $pecah;
}
?>

<div class="card mt-3">
    <div class="card-body">
     <a href="index.php?halaman=tambah_produk" type="button" class="mb-4 text-15 text-green-500 bg-green-100 btn hover:text-white hover:bg-green-600 focus:text-white focus:bg-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:ring active:ring-green-100 dark:bg-green-500/20 dark:text-green-400 dark:hover:bg-green-500 dark:hover:text-white dark:focus:bg-green-500 dark:focus:text-white dark:active:bg-green-500 dark:active:text-white dark:ring-green-400/20"><i class="fa-solid fa-plus"></i>
     <span> Tambah Produk</span>
     </a>
        <table id="borderedTable" class="hover group display stripe group" style="width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Berat</th>
                    <th>Foto</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
             <?php foreach ($produk as $key => $value): ?>
              <!-- html... -->
                <tr>
                    <td width="50"><?php echo $key + 1; ?></td>
                    <td><?php echo $value["nama_kategori"]; ?></td>
                    <td><?php echo $value["nama_produk"]; ?></td>
                    <td>Rp<?php echo number_format(
                      $value["harga_produk"]
                    ); ?></td>
                    <td><?php echo number_format(
                      $value["berat_produk"]
                    ); ?>Gr</td>
                    <td class="text-center">
                     <img width="150" src="../assets/foto_produk/<?php echo $value[
                       "foto_produk"
                     ]; ?>">
                    </td>
                    <td class="text-center" width="150">
                     <a href="index.php?halaman=detail_produk&id=<?php echo $value[
                       "id_produk"
                     ]; ?>" class="text-orange-500 bg-orange-100 btn hover:text-white hover:bg-orange-600 focus:text-white focus:bg-orange-600 focus:ring focus:ring-orange-100 active:text-white active:bg-orange-600 active:ring active:ring-orange-100 dark:bg-orange-500/20 dark:text-orange-500 dark:hover:bg-orange-500 dark:hover:text-white dark:focus:bg-orange-500 dark:focus:text-white dark:active:bg-orange-500 dark:active:text-white dark:ring-orange-400/20">
                      <i class="fa-regular fa-eye"></i>
                      <span> Detail</span>
                     </a>
                     <a href="index.php?halaman=edit_produk&id=<?php echo $value[
                       "id_produk"
                     ]; ?>" class="text-custom-500 btn bg-custom-100 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20">
                      <i class="fa-regular fa-pen-to-square"></i>
                      <span> Edit</span>
                     </a>
                     <a href="index.php?halaman=hapus_produk&id=<?php echo $value['id_produk'];?>" class="text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20">
                      <i class="fa-solid fa-trash-can"></i>
                      <span> Hapus</span>
                     </a>
                    </td>
                </tr>
               <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>