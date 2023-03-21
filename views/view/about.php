<a href="<?=\yii\helpers\Url::to(['view/insert'])?>" >
Add User
</a>
<table align="center" height="200" width="1000" border="1" >
    <thead>
    <tr align="center">
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
        <tr align="center">

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
                <a  href="<?=\yii\helpers\Url::to(['view/edit','id'=>$value->id])?>">
                    Edit
                </a>
                <a  href="<?=\yii\helpers\Url::to(['view/dell','id'=>$value->id])?>">
                    Delete
                </a>
            </td>
        </tr>
    <?}?>

    </tbody>
</table>

