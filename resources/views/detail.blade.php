<!DOCTYPE html>
<html>


    <body>
        <h3>Data Korban</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
                <th>ID DETAIL KORBAN</th>
                <th>ID LAPORAN</th>
                <th>NIK</th>
                <th>NAMA KORBAN</th>
                <th>UMUR</th>
                <th>KONDISI</th>
            </tr>

            @foreach($detail_korban as $p)
            <tr>
                <td>{{ $p->IDDETAILKORBAN }}</td>
                <td>{{ $p->IDLAPORAN }}</td>
                <td>{{ $p->NIK }}</td>
                <td>{{ $p->NAMAKORBAN }}</td>
                <td>{{ $p->UMUR }}</td>
                <td>{{ $p->KONDISI }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>