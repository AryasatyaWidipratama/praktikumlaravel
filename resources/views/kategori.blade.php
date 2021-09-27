<!DOCTYPE html>
<html>


    <body>
        <h3>Kategori Bencana</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
          testtesttest
                <th>ID kategori bencana</th>
                <th>KATEGORI BENCANA</th>
            </tr>

            @foreach($kategori_bencana as $p)
            <tr>
                <td>{{ $p->IDKATEGORIBENCANA }}</td>
                <td>{{ $p->KATEGORIBENCANA }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>