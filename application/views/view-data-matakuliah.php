<html>

<head>
    <title>Tampil Data Matakuliah</title>
    <link rel="stylesheet" type="text/css" href="<?php echo
                                                    base_url() ?>assets/css/stylebuku.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana dengan CodeIgniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() . 'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url() . 'index.php/web/about' ?>">About</a></li>
                    <li><a href="<?php echo base_url() . 'index.php/web/form' ?>">form</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
        <center>
            <table>
                <tr>
                    <th colspan="3">
                        Tampil Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <?= $kode; ?>
                    </td>
                </tr>
                <tr>
                    <td>Nama MTK</td>
                    <td>:</td>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                    <td>SKS</td>
                    <td>:</td>
                    <td>
                        <?= $sks; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('matakuliah');
                                    ?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </center>
        <footer>
            <a href="http://www.RentalBuku.com">RentalBuku</a>
        </footer>
</body>

</html>