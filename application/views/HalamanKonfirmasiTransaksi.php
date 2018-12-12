<html>
    <head>
        <title> Konfirmasi Pesanan </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/stuff/Design HalamanKonfirmasi Transaksi.css">
    </head>
    <body>
        <div class="Container">
            <h3>Konfirmasi Pesanan anda</h3>
            <h4>Silahkan isi form konfirmasi di bawah ini</h4>
            <h5>Isikan dengan data diri pemesan</h5>
            <br>
            <table>
                <form action="" method="post">
                    <tr>
                        <td>
                            <?php echo validation_errors(); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo form_open('form'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama :</td>
                    </tr>
                    <tr>
                        <td><input class="isian" type="text" name="namaLengkap" value=""></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td>Nomor HP :</td>
                    </tr>
                    <tr>
                        <td><input class="isian" type="text" name="nomorTelfon"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran :</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="metode" value="Transfer Bank">Transfer Bank<br>
                            <input type="radio" name="metode" value="Indo/Alfa">Via Alfamart/Indomart<br>
                            <input type="radio" name="metode" value="Langsung">Bayar di Tempat<br>
                        </td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><input type="submit"></td>
                    </tr>
                </form>
            </table>
        </div>
    </body>
</html>