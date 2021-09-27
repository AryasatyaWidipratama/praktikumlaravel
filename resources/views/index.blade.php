<!DOCTYPE html>
<html>


    <body>
        <h3>Data Kecamatan</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
                <th>id_kecamatan</th>
                <th>id_kota</th>
                <th>nama_kecamatan</th>
            </tr>

            @foreach($kecamatan as $p)
            <tr>
                <td>{{ $p->IDKECAMATAN }}</td>
                <td>{{ $p->IDKOTA }}</td>
                <td>{{ $p->NAMAKEC }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>