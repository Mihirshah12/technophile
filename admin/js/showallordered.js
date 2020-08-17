var dbTable;
    var tableData;
    var table;
    $.ajax({
        url:'../php/showallordered.php',
        method:'GET',
       dataType:'JSON',
        success:function(data){
           
            console.log(data);
            table= $('#displayTableData').DataTable({
                data:data,

                
                columns: [
                  
                    { "data": "fname" },
                    { "data": "lname" },
                    { "data": "address" },
                    { "data": "phone" },
                    {"data":"email"},
                    {"data":"pid"},
                    {"data":"quantityod"},
                     {"data":"name"},
                      {"data":"date"}
                ]
            });
            }
        });