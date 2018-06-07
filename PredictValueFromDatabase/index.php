<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jquery with ajax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body{
        background-color : lightblue;
    }

    

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}

#first_div {
    text-align : center;
    width : 700px;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
table{
    border-collapse : collapse;
    width : 100%
}
table, td, th{
    border : 1px solid black;
}

th, td{
    height : 50px;
}

    
    </style>
    
    
</head>
<body>
    <div id="first_div">
            <h2>Ajax and Jquery Example</h2>
            <input type="text" name="search_text" id="search_text" placeholder="serach username" >
            <input type="submit" value="submit">
            <div id="results"></div>
           

    </div>
    <script src="js/jquery.js"></script>
    
<script>
     $(document).ready(function(){
        $('#search_text').keyup(function(){
            var txt = $(this).val();
            if( txt != '')
            {
                   $.ajax({
                    url:"fetch.php",
                    method:"post",
                    data:{search:txt,},
                    dataType:"text",
                    success:function(data){
                        console.log('data');
                        $('#results').html(data);
                    }
                });  
            }
            else
            {
                $('#result').html('');

               
            }
        });
     });


</script>
</body>
</html>
