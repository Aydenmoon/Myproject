<ul class="mt-3 flex flex-wrap items-center gap-2 mb-3 text-sm font-normal">
    <li
        class="relative before:content-['\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200"
    >
        <a href="index.php" class="text-custom-500 dark:text-custom-500">Home</a>
    </li>
    <li class="text-slate-700 dark:text-zink-100">Pelanggan</li>
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
    <h5 class="mb-0 text-dark-400">Halaman Pelanggan</h5>
</div>

<?php
$pelanggan = [];
$ambil = $koneksi->query("SELECT * FROM pelanggan");
while ($pecah = $ambil->fetch_assoc()) {
  $pelanggan[] = $pecah;
}
?>

<div class="card mt-3">
    <div class="card-body">
        <table id="borderedTable" class="hover group display stripe group" style="width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telpon</th>
                    <th>Foto</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
             <?php foreach ($pelanggan as $key => $value): ?>
              <!-- html... -->
                <tr>
                    <td width="50"><?php echo $key + 1; ?></td>
                    <td><?php echo $value["nama_pelanggan"]; ?></td>
                    <td><?php echo $value["email_pelanggan"]; ?></td>
                    <td><?php echo $value["telpon_pelanggan"]; ?></td>
                    <td><?php echo $value["foto_pelanggan"]; ?></td>
                    <td class="text-center" width="150">
                     <a href="#" class="text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20">
                      <i class="fa-solid fa-trash-can"></i>
                      <span> Hapus</span>
                     </a>
                     </a>
                    </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>