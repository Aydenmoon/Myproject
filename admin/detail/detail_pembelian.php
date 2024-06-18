<ul class="mt-3 flex flex-wrap items-center gap-2 mb-3 text-sm font-normal">
    <li
        class="relative before:content-['\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200"
    >
        <a href="index.php" class="text-custom-500 dark:text-custom-500">Home</a>
    </li>
    <li
        class="relative before:content-['\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200"
    >
        <a href="index.php?halaman=pembelian" class="text-custom-500 dark:text-custom-500">Pembelian</a>
    </li>
    <li class="text-slate-700 dark:text-zink-100">Detail Pembelian</li>
</ul>

<div class="px-1 py-1 text-center bg-white-200 rounded-md dark:bg-white-900">
    <div
        class="flex items-center justify-center mx-auto mb-0 rounded-md size-8 dark:bg-white-400/20"
    >
        <i
            data-lucide="file-text"
            class="text-green-500 fill-green-200 dark:fill-green-500/20"
        ></i>
    </div>
    <h5 class="mb-0 text-dark-400">Detail Pembelian</h5>
</div>

<?php
$id_pembelian = $_GET["id"];
$ambil = $koneksi->query(
  "SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$id_pembelian'"
);
$detail = $ambil->fetch_assoc();
?>

<div class="mt-3 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
 
  <div
      class="card bg-sky-100 border-sky-200 dark:bg-sky-400/20 dark:border-sky-600"
  >
      <div class="card-body">
          <div class="mb-3 text-sky-700 text-15 dark:text-sky-200">Data Pelanggan</div>
          <!-- -->
          <div class="mb-1 grid grid-cols-3 gap-x-5 md:grid-cols-3 xl:grid-cols-2">
            <label class="text-sky-600">Nama :</label>
            <label class="text-sky-600"><?php echo $detail[
              "nama_pelanggan"
            ]; ?></label>
         </div>
         <!-- -->
          <div class="mb-1 grid grid-cols-3 gap-x-5 md:grid-cols-3 xl:grid-cols-2">
            <label class="text-sky-600">Email :</label>
            <label class="text-sky-600"><?php echo $detail[
              "email_pelanggan"
            ]; ?></label>
         </div>
         <!-- -->
          <div class="mb-1 grid grid-cols-3 gap-x-5 md:grid-cols-3 xl:grid-cols-2">
            <label class="text-sky-600">Telepon :</label>
            <label class="text-sky-600"><?php echo $detail[
              "telpon_pelanggan"
            ]; ?></label>
         </div>
      </div>
  </div>
  
  <div
      class="card bg-sky-100 border-sky-200 dark:bg-sky-400/20 dark:border-sky-600"
  >
      <div class="card-body">
          <div class="mb-3 text-sky-700 text-15 dark:text-sky-200">Data Pembelian</div>
          <!-- -->
          <div class="mb-1 grid grid-cols-3 gap-x-5 md:grid-cols-3 xl:grid-cols-2">
            <label class="text-sky-600">Tanggal :</label>
            <label class="text-sky-600"><?php echo date(
              "d F Y",
              strtotime($detail["tanggal_pembelian"])
            ); ?></label>
         </div>
         <!-- -->
          <div class="mb-1 grid grid-cols-3 gap-x-5 md:grid-cols-3 xl:grid-cols-2">
            <label class="text-sky-600">Total :</label>
            <label class="text-sky-600">Rp<?php echo number_format(
              $detail["total_pembelian"]
            ); ?></label>
         </div>
      </div>
  </div>
  
</div>

<?php
$pembelianproduk = [];
$ambil = $koneksi->query(
  "SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk=produk.id_produk WHERE pembelian_produk.id_pembelian='$id_pembelian'"
);
while ($pecah = $ambil->fetch_assoc()) {
  $pembelianproduk[] = $pecah;
}
?>

<div class="card mt-1">
    <div class="card-body">
        <table id="borderedTable" class="hover group display stripe group" style="width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
             <?php foreach ($pembelianproduk as $key => $value): ?>
             <?php $subtotal = $value["harga_produk"] * $value["jumlah"]; ?>
              <!-- html... -->
                <tr>
                    <td width="50"><?php echo $key + 1; ?></td>
                    <td><?php echo $value["nama_produk"]; ?></td>
                    <td><?php echo number_format(
                      $value["harga_produk"]
                    ); ?></td>
                    <td><?php echo $value["jumlah"]; ?></td>
                    <td><?php echo number_format($subtotal); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>