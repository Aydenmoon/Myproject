<?php
session_start();
include "../koneksi/koneksi.php";
?>

<!doctype html>
<html
    lang="en"
    class="light scroll-smooth group"
    data-layout="vertical"
    data-sidebar="light"
    data-sidebar-size="lg"
    data-mode="light"
    data-topbar="light"
    data-skin="default"
    data-navbar="sticky"
    data-content="fluid"
    dir="ltr"
>
    <head>
        <meta charset="utf-8" />
        <title>Sign In</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no"
        />
        <meta content="Minimal Admin & Dashboard Template" name="description" />
        <meta content="StarCode Kh" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/logobrand.png" />
        <!-- Layout config Js -->
        <script src="../assets/js/layout.js"></script>
        <!-- Icons CSS -->

        <!-- StarCode CSS -->

        <link rel="stylesheet" href="../assets/css/starcode2.css" />
    </head>

    <body
        class="flex items-center justify-center min-h-screen py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public"
    >
        <div
            class="mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70"
        >
            <div class="!px-10 !py-12 card-body">
                <a href="index-1.html">
                    <img
                        src="assets/images/logo-light.png"
                        alt=""
                        class="hidden h-6 mx-auto dark:block"
                    />
                    <img
                        src="assets/images/logo-dark.png"
                        alt=""
                        class="block h-6 mx-auto dark:hidden"
                    />
                </a>
                <div align="center">
                 <img src="../assets/images/avatar-3.png" alt="" width="100">
                </div>

                <div class="mt-3 text-center">
                    <h3 class="mb-2 text-purple-500 dark:text-purple-500">
                        Welcome
                    </h3>
                </div>

                <form action="" method="post" class="mt-10">
                    <div class="mb-3">
                        <label
                            for="username"
                            class="inline-block mb-2 text-base font-medium"
                            >UserName/ Email ID</label
                        >
                        <input
                            type="text" name="user"
                            id="username"
                            class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter username or email"
                        />
                    </div>
                    <div class="mb-3">
                        <label
                            for="password"
                            class="inline-block mb-2 text-base font-medium"
                            >Password</label
                        >
                        <input
                            type="password" name="pass"
                            id="password"
                            class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter password"
                        />
                    <div class="mt-10">
                        <button
                            type="submit"
                            name="login"
                            class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"
                        >
                            Sign In
                        </button>
                    </div>

                    <div class="mt-10 text-center">
                        <p class="mb-0 text-slate-500 dark:text-zink-200">
                            Don't have an account ?
                            <a
                                href="auth-register-basic.html"
                                class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"
                            >
                                SignUp</a
                            >
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="../assets/libs/%40popperjs/core/umd/popper.min.js"></script>
        <script src="../assets/libs/tippy.js/tippy-bundle.umd.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/prismjs/prism.js"></script>
        <script src="../assets/libs/lucide/umd/lucide.js"></script>
        <script src="../assets/js/starcode.bundle.js"></script>
        <script src="../assets/js/pages/auth-login.init.js"></script>
    </body>
</html>

<?php if (isset($_POST["login"])) {
  $user = $_POST["user"];
  $pass = sha1($_POST["pass"]);

  $ambil = $koneksi->query(
    "SELECT * FROM admin WHERE username='$user' AND password='$pass'"
  );

  $akun = $ambil->num_rows;
  if ($akun == 1) {
    $_SESSION["admin"] = $ambil->fetch_assoc();
    echo "<script>alert('Login Berhasil');</script>";
    echo "<script>location='index.php';</script>";
  } else {
    echo "<script>alert('Username/Password Salah');</script>";
    echo "<script>location='login.php';</script>";
  }
}
?>
