<!DOCTYPE html>
<html>


    <body>
        <h3>Data Provinsi</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
          
                <th>ID Provinsi</th>
                <th>Nama Provinsi</th>
            </tr>

            @foreach($provinsi as $p)
            <tr>
                <td>{{ $p->IDPROVINSI }}</td>
                <td>{{ $p->NAMAPROVINSI }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>