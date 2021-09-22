<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <table class="table" id="json-data">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {

            // FETCH DATABASE DATA FROM JSON THROUGH getJSON METHOD
            // $.getJSON(
            //     "code.php",
            //     function(data){
            //         $.each(data,function(key,value){
            //             $("#json-data").append(`
            //                 <tbody>
            //                     <tr>
            //                         <td>${value.id}</td>
            //                         <td>${value.name}</td>
            //                         <td>${value.age}</td>
            //                         <td>${value.email}</td>
            //                         <td>${value.country}</td>
            //                         <td>${value.gender}</td>
            //                         <td>
            //                             <button class='btn btn-warning'>Edit</button>
            //                             <button class='btn btn-danger'>Delete</button>
            //                         </td>
            //                     </tr>
            //                 </tbody>
            //             `)
            //         })
            //     }
            // )

            // FETCH DATABASE DATA FROM JSON THROUGH AJAX METHOD, WE CAN SEND DATA THROUGH THIS METHOD
            $.ajax({
                    url: "code.php",
                    type: "POST",
                    data: {
                        id: 13
                    },
                    dataType: "JSON",
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $("#json-data").append(`
                            <tbody>
                                <tr>
                                    <td>${value.id}</td>
                                    <td>${value.name}</td>
                                    <td>${value.age}</td>
                                    <td>${value.email}</td>
                                    <td>${value.country}</td>
                                    <td>${value.gender}</td>
                                    <td>
                                        <button class='btn btn-warning'>Edit</button>
                                        <button class='btn btn-danger'>Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        `)
                        })
                    }
                }

            )
        })
    </script>
</body>

</html>