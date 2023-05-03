<html>

<head>
    <title>Form Input Matakuliah</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>

<body>
    <?php echo validation_errors(); ?>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana dengan
                    CodeIgniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo
                                    base_url() . 'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo
                                    base_url() . 'index.php/web/about' ?>">About</a></li>
                    <li><a href="<?php echo
                                    base_url() . 'index.php/matakuliah' ?>">Form</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
        <center>
            <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
                <table>
                    <tr>
                        <th colspan="3">
                            Form Input Data Mata Kuliah
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
                            <input type="text" name="kode" id="kode" value="<?php echo set_value('kode'); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>Nama MTK</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" id="nama" value="<?php echo set_value('nama'); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>SKS</th>
                        <td>:</td>
                        <td>
                            <select name="sks" id="sks" value="<?php echo set_value('sks'); ?>">
                                <option value="">Pilih SKS</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
</body>

</html>