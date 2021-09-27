<!DOCTYPE html>
<html>


    <body>
        <h3>Data Kota</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
                <th>ID KOTA</th>
                <th>ID PROVINSI</th>
                <th>NAMA KOTA</th>
            </tr>

            @foreach($kota as $p)
            <tr>
                <td>{{ $p->IDKOTA }}</td>
                <td>{{ $p->IDPROVINSI }}</td>
                <td>{{ $p->NAMAKOTA }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>