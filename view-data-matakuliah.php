<html>
<head>
    <title>Tampil Data Matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Matakuliah
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
                    <?=$kode; ?>
                </td>
            </tr>
            <tr>
                <th>Nama MTK</th>
                <td>:</td>
                <td>
                    <?=$nama; ?>
                </td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <?=$sks; ?>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?php base_url('Matakuliah');?>">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>