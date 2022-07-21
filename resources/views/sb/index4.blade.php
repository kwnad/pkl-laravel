<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Data Post
        </legend>
    
        <br>
        <table border="1">
            Staff Branch
            <tr>
                <td>No</td>
                <td>staffNo</td>
                <td>sName</td>
                <td>position</td>
                <td>salary</td>
                <td>branchNo</td>
                <td>bAddress</td>
            </tr>
            <?php $no = 1 ?>
            @foreach ($sb as $data)
                <tr>
                    <td> {{$no++}} </td>
                    <td> {{$data['staffNo']}} </td>
                    <td> {{$data['sName']}} </td>
                    <td> {{$data['position']}} </td>
                    <td> {{$data['salary']}} </td>
                    <td> {{$data['branchNo']}} </td>
                    <td> {{$data['bAddress']}} </td>
                </tr>
            @endforeach
        </table>
        <hr>
        <table border="1">
            Staff
            <tr>
                <td>No</td>
                <td>staffNo</td>
                <td>sName</td>
                <td>position</td>
                <td>salary</td>
                <td>branchNo</td>
            </tr>
            <?php $no = 1 ?>
            @foreach ($staff as $data)
                <tr>
                    <td> {{$no++}} </td>
                    <td> {{$data['staffNo']}} </td>
                    <td> {{$data['sName']}} </td>
                    <td> {{$data['position']}} </td>
                    <td> {{$data['salary']}} </td>
                    <td> {{$data['branchNo']}} </td>
                </tr>
            @endforeach
        </table>
        <hr>
        <table border="1">
            Branch
            <tr>
                <td>No</td>
                <td>branchNo</td>
                <td>bAddress</td>
            </tr>
            <?php $no = 1 ?>
            @foreach ($branch as $data)
                <tr>
                    <td> {{$no++}} </td>
                    <td> {{$data['branchNo']}} </td>
                    <td> {{$data['bAddress']}} </td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>