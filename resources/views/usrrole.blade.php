<!DOCTYPE html>
<html>


    <body>
        <h3>Data user Role</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
          
                <th>ID USER ROLE</th>
                <th>ID USER</th>
                <th>ID ROLE</th>
            </tr>

            @foreach($user_role as $p)
            <tr>
                <td>{{ $p->ATTRIBUTE_25 }}</td>
                <td>{{ $p->IDUSER }}</td>
                <td>{{ $p->IDROLE }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>