<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
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

    .Table{
        width: 560px;
        margin-top: 20px;
        border-radius: 6px;
    }
    .subbtn{
        margin-left: 240px;
    }
</style>

<?php
if(isset($_POST['submit'])) {

    $date=$_POST['date'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $project=$_POST['project'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $bill=$_POST['bill'];
    $installment=$_POST['installment'];
    $total_bill=$_POST['total_bill'];
    $total_install=$_POST['total_install'];
    $total_due=$_POST['total_due'];

}

?>

    <div class="contener" >
        
        <div class="printbody" id="billTable">
                <label for="">Date: <?php echo $date ?></label>
               
                <h4>Bill To</h4>
                <label for="">Name: <?php echo $name ?></label>
                <br>
                <label for="">Address: <?php echo $address ?></label>
                <br>
                <label for="">Project Name: <?php echo $project ?></label>
                <br>
                <label for="">Email: <?php echo $email ?></label>
                <br>
                <label for="">Phone Number: <?php echo $phone ?></label>
                
            
            <table border  class="Table">
               
                <tr style="background: gray;">
                    <th>Total Bill</th>
                    <th>Total Paid</th>
                </tr>
                <tr>
                    <td>Bill: <?php echo $bill ?></td>
                    <td>1st Installment: <?php echo $installment ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total Bill: <?php echo $total_bill ?></td>
                    <td>Total Installment: <?php echo $total_install ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Total Due: <?php echo $total_due ?></td>
                </tr>
            </table> 
        </div>
                <input type="submit" class="subbtn" name="submit" value="Print">
        
    </div>
</body>
</html>

<script>

    //print specific part of body
    $(document).ready(function(){
        $('.subbtn').click(function(){

        var printme= document.getElementById('billTable');
        var wme= window.open("","","width=900,height=700");
        wme.document.write(printme.outerHTML);
        wme.document.close();
        wme.focus();
        wme.print();
        wme.close();
        })
    })
</script>