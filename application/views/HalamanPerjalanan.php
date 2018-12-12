<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/stuff/HalamanPerjalananDesain.css">
        <title><?php echo $namaTempat; ?></title>
    </head>
    <body>
        <div class="LogoContainer" style="
            width: 400px;
            height: 200px;
            margin-left: 445px;"> 
            <img src="<?php echo base_url(); ?>/assets/stuff/Logo FIX .jpg">
        </div>
        <img src="<?php echo base_url($linkGambar); ?>">
        <div class="Kota" style="/*background-image: url('<?php echo $linkGambar; ?>'); background-repeat:no-repeat; background-size: 1366px 100px;*/">
            <?php echo $namaTempat; ?>
        </div>
        <br>
        <div class = "ContainerArtikel">
            lorem ipsum dolor sit amet, lorem ipsum dolor sit amet. INI TEMPAT ARTIKEL
        </div>
        <br>
        <div class = "BagianPemesanan">
            <div style="
                font-size: 35px;
                color: chocolate;"> TERTARIK? PESAN SEKARANG!
            </div>
            <form action="<?php echo base_url('C_transaksi/viewtransaksi?id='.$kodeTempat)?>" method ="POST">
                <table>
                    <tr>
                        <th>TENTUKAN TANGGAL PERJALANAN ANDA</th>
                        <th>JUMLAH YANG IKUT SERTA</th>
                        <th><input type="submit" style="width: 200px;"></th>
                    </tr>
                    <tr>
                        <td><input type="date" name="tanggal" style = "
                            width: 300px;"></td>
                        <td><input type="number" name="kuantitas" min="0" max="10" style = "width : 300px;"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>