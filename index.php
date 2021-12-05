<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  
</head>
<body>

<style>

    .contener{
        width: 562px;
        padding:10px 15px;
        border-radius: 6px;
        background: linear-gradient(45deg, dodgerblue, white, red);
        margin-left: 380px;
    }

    
    label{
        width: 120px;
        display: inline-block;
        margin: 0.2cm;
    }

    input{
        padding: 4px;
        margin: 5px;
        border-radius: 6px;
        
    }
    .tbInput{
        float: right;
    }

    #billTable{
        margin-top: 20px;
        border-radius: 6px;
    }
    .subbtn{
        margin-left: 240px;
    }
</style>

    <div class="contener" >
        <form action="printOrder.php" method="post">
            <label for="">Date: </label>
            <input type="date" name="date" id="">
            <h4>Bill To</h4>
            <label for="">Name: </label>
            <input type="text" name="name" id="" placeholder="Name"><br>
            <label for="">Address:</label>
             <input type="text" name="address" id="" placeholder="Address"><br>
            <label for="">Project Name: </label>
            <input type="text" name="project" id="" placeholder="Project Name"><br>
            <label for="">Email:</label>
             <input type="email" name="email" id="" placeholder="Email"><br>
            <label for="">Phone Number: </label>
            <input type="text" name="phone" id="" placeholder="Phone Number">

            <table border id="billTable" class="billTable" >
                <tr style="background: gray;">
                    <th>Total Bill</th>
                    <th>Total Paid</th>
                </tr>
                <tr>
                    <td>Bill: <input type="text" class="billClass tbInput" name="bill" id="bill" placeholder="TK"></td>
                    <td>1st Installment: <input type="text" class="tbInput" name="installment" id="installment" placeholder="TK"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total Bill: <input type="text" class="totalbillClass tbInput" name="total_bill" id="total_bill" placeholder="TK"></td>
                    <td>Total Installment: <input type="text" class="totalbillClass tbInput" name="total_install" id="total_install" placeholder="TK"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Total Due: <input type="text" class="tbInput" name="total_due" id="total_due" placeholder="TK"></td>
                </tr>
            </table> 
                <input type="submit" class="subbtn" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>


<script>
    $(document).ready(function(){
        
         //Sow the bill in Total bill

         //if we use class then .className
         $("#billTable").delegate(".billClass", "keyup change", function() {
          var quantity = $(this).val();
        
            $(".totalbillClass").val(quantity);
         });
         //if we use id then #idName
         $("#billTable").delegate("#installment", "keyup change", function() {
          var Duequantity = Number($(this).val());
          
           var due= Number($("#total_install").val()) - Duequantity;

            if(due < 0){
                $("#total_due").val(0);
            }
            else{
                $("#total_due").val(due);
            }
         });
    



});

</script>
