
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Document</title>
</head>

<body>
<h5>Employees of Toyota Thailand</h5>
<img src="1.jpg" alt="Simply Easy Learning" width="200" height="80">
<div class="table-responsive-xl">
<table id="employee-table" class="table" style="width:50%">
    <thead >
        <tr>
            <th>Employee Number</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Gender</th>
            <th>Birth Date</th>
            <th>Title</th>
            <th>Hire Date</th>
            <th>Salary</th>
            <th>Edit</th>
        </tr>
    </thead>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.23/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.23/datatables.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script type="text/Javascript">
    $(document).ready(function() {
        const url = 'edit.php';
        $('#employee-table').DataTable({
            "stripeClasses": [],
            "processing": true,
            "serverSide": true,
            "ajax": "./emp_query.php",
            "columns": [
                { "data": "emp_no" },
                { "data": "first_name" },
                { "data": "last_name" },
                { "data": "gender" },
                { "data": "birth_date" },
                { "data": "title" },
                { "data": "hire_date" },
                { "data": "salary" },
                {
                    "orderable": false,
                    "data": "emp_no",
                    "createdCell": function (td, cellData, rowData, row, col) {
                        $(td).text('');
                        var button = $(`<a href=${url}/${cellData}><i class='icon fas fa-edit' id='${cellData}'></i>`);
                        $(td).append(button);
                    },
                    "defaultContent": ""
                },
            ],
            "order": [[1, 'asc']]
        });
    });

</script>   

</body>

</html>

