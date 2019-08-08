<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
</head>
<body>
    <?php foreach ($print as $u) {?>
    <div style="margin">
    <font size="5" style="margin-left:70px"><?php echo $u->nama?></font>
    <P style="margin-top:-1px;margin-left:40px">Hotline : 081214373106</P>
    <p style="margin-top:-15px">==============================</p>
    </div>
    <div style="margin-top:-10px">
        <table>
            <tr>
                <td>Kode Order</td>
                <td>:</td>
                <td><?php echo $u->id_order?></td>
            </tr>
            <tr>
                <td>Nama Penumpang</td>
                <td>:</td>
                <td><?php echo $u->nama_penumpang?></td>
            </tr>
            <tr>
                <td>Halte</td>
                <td>:</td>
                <td><?php echo $u->tempat?></td>
            </tr>
            <tr>
                <td>Tanggal Berangkat</td>
                <td>:</td>
                <td><?php echo $u->tanggal?></td>
            </tr>
            <tr>
                <td>Jam Berangkat</td>
                <td>:</td>
                <td><?php echo $u->jam?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo $u->kota_berangkat?> - <?php echo $u->kota_tujuan?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><?php echo $u->harga?></td>
            </tr>
        </table>
        <br>
        <p style="margin-top:-20px">==============================</p>
        <p style="margin-top:-20px;margin-left:35px">"Kami sangat mengutamakan<br> keselamatan  dan kenyamanan <br>penumpang"</p>
    </div>
    <?php }?>
</body>
</html>