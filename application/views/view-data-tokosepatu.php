<html>

<head>
    <title>Tampil Rekap Transaksi Penjualan Sepatu</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Rekap Transaksi Penjualan Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>No Handphone</th>
                <th>:</th>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>
            <tr>
                <th>Merk</th>
                <th>:</th>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <th>Size</th>
                <th>:</th>
                <td>
                    <?= $size; ?>
                </td>
            </tr>
            <tr>
                <th>Harga Sepatu</th>
                <th>:</th>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" >
                    <a href="<?= base_url('tokosepatu');
                    ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html> 



