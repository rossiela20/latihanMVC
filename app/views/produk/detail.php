<?php

echo "<table>
<td><img src='" . BASEURL . "/image/" . $data['barang']['Link'] . ".jpg' width='175'></td>
<td>Nama:".$data['barang']['Nama_Produk']."
<br>
Harga: ".$data['barang']['Harga']."
<br>
Exp: ".$data['barang']['Exp']."
<br>
Merk: ".$data['barang']['Merk']."
<br>
</td>
<table>
<br>";
echo "<a href='" . BASEURL . "/home' class='card-link'>Kembali</a>";