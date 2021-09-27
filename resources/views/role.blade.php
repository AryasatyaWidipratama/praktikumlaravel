<!DOCTYPE html>
<html>


    <body>
        <h3>Data Role</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
          
                <th>ID ROLE</th>
                <th>ROLE</th>
            </tr>

            @foreach($role as $p)
            <tr>
                <td>{{ $p->IDROLE }}</td>
                <td>{{ $p->ROLE }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>