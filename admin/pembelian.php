<ul class="mt-3 flex flex-wrap items-center gap-2 mb-3 text-sm font-normal">
    <li
        class="relative before:content-['\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200"
    >
        <a href="index.php" class="text-custom-500 dark:text-custom-500">Home</a>
    </li>
    <li class="text-slate-700 dark:text-zink-100">Pembelian</li>
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
    <h5 class="mb-0 text-dark-400">Halaman Pembelian</h5>
</div>

<?php
$pembelian = [];
$ambil = $koneksi->query(
  "SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan"
);
while ($pecah = $ambil->fetch_assoc()) {
  $pembelian[] = $pecah;
}
?>

<div class="card mt-3">
    <div class="card-body">
        <table id="borderedTable" class="hover group display stripe group" style="width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
             <?php foreach ($pembelian as $key => $value): ?>
              <!-- html... -->
                <tr>
                    <td width="50"><?php echo $key + 1; ?></td>
                    <td><?php echo $value["nama_pelanggan"]; ?></td>
                    <td><?php echo date(
                      "d F Y",
                      strtotime($value["tanggal_pembelian"])
                    ); ?></td>
                    <td>Rp<?php echo number_format(
                      $value["total_pembelian"]
                    ); ?></td>
                    <td class="text-center" width="150">
                     <a href="index.php?halaman=detail_pembelian&id=<?php echo $value[
                       "id_pembelian"
                     ]; ?>" class="text-custom-500 btn bg-custom-100 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20">
                     <i class="fa-regular fa-eye"></i>
                      <span> Detail</span>
                     </a>
                    </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
