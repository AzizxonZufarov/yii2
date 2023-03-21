<?=$id?>

<a  href="">
    Add User
</a>
<table>
    <thead>
    <tr>
        <th >
            ID
        </th>
        <th >
            Name
        </th>
        <th s>
            Email
        </th>
        <th >
            Password
        </th>
        <th >
            Img
        </th>
        <th >
            isAdmin
        </th>
        <th >
            Operations
        </th>
    </tr>
    </thead>
    <tbody>
    <?foreach($users as $value){?>
        <tr>

            <td>
                <a>
                    <?=$value->id?>
                </a>
            </td>


            <td>
                <a>
                    <?=$value->name?>
                </a>
            </td>

            <td>
                <a>
                    <?=$value->email?>
                </a>
            </td>
            <td>
                <a>
                    <?=$value->password?>
                </a>
            </td>
            <td>
                <a>
                    <?=$value->img?>
                </a>
            </td>
            <td>
                <a>
                    <?=$value->isAdmin?>
                </a>
            </td>
            <td>
                <a  href="">
                    Edit
                </a>
                <a  href="">
                    Delete
                </a>
            </td>
        </tr>
    <?}?>

    </tbody>
</table>