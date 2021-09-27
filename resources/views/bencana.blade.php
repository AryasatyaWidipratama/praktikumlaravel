<!DOCTYPE html>
<html>


    <body>
        <h3>Data Bencana</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
                <th>ID Bencana</th>
                <th>ID kategori bencana</th>
                <th>nama bencana</th>
            </tr>

            @foreach($bencana as $p)
            <tr>
                <td>{{ $p->IDBENCANA }}</td>
                <td>{{ $p->IDKATEGORIBENCANA }}</td>
                <td>{{ $p->NAMABENCANA }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>