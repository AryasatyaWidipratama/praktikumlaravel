<!DOCTYPE html>
<html>


    <body>
        <h3>Data pelaporan</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
          
                <th>ID User</th>
                <th>Nama User</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th>Password</th>

            </tr>

            @foreach($pelaporan as $p)
            <tr>
                <td>{{ $p->IDUSER }}</td>
                <td>{{ $p->NAMA_USER }}</td>
                <td>{{ $p->EMAIL }}</td>
                <td>{{ $p->TGL_LAHIR }}</td>
                <td>{{ $p->PASSWORD }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>