<html>
   <head>
      <title>VueJs Instance</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" ></link>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" ></link>
      <script type = "text/javascript" src = "<?php echo js_path('vue.js'); ?>"></script>
   </head>
   <body>   
        <div id = "results_table">
            <table id='example1' v-if = "rows.length > 0 && headers.length > 0" class='table table-striped table-bordered' style='width:100%'>
                <thead> 
                    <tr>
                        <th class="th-sm" v-for="header in headers">{{header}}</th>
                    </tr>
                </thead>
                <tbody>                    
                    <template v-for = "row in rows">
                        <tr>
                            <td v-for = "cell in row">{{cell}}</td>
                        </tr>  
                    </template>
                </tbody>
            </table>
        </div>
        <script type = "text/javascript" >       
            vm = new Vue({
                el: '#results_table',
                data: {
                    test: "This is a Test",
                    headers : ["Name","Position","Office","Age","Start date","Salary"],
                    row: '',
                    header: '',
                    cell:'',
                    itr: '',
                    rows: [
                        ["Airi Satou","Accountant","Tokyo","33","2008/11/28","$162,700"],
                        ["Angelica Ramos","Chief Executive Office (CEO)","London","47","2009/10/09","$1,200,000"],
                        ["Ashton Cox","Junior Technical Author","San Francisco","66","2009/10/12","$86,000"],
                        ["Bradley Greer","Software Engineer","London","41","2012/10/13","$132,000"],
                    ]
                }
            });
            $('#example1').DataTable();
        </script>       
   </body>
</html>