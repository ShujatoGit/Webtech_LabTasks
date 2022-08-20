<!DOCTYPE html>
<html>
<head>
   <title>Add New Products</title>
   <script src="../controller/js/validateNewProduct.js" type="text/javascript" charset="utf-8"></script>
   <!-- <link rel="stylesheet" href="../model/css/cna.css"/> -->
   <style media="screen">
      #submit
      {
         background: red;
         color: white;
         font-family: Permanent Marker;
         font-size: 25px;
      }
   </style>
</head>

<body style="cursor:crosshair">
   <center>
   <form id="addProducts" action="../controller/AddProductsControl.php" method="post" name="addProducts" onsubmit="return Pcheck();">

      <fieldset>
         <legend align="center"><h1>Add New Products</h1></legend>
         <table>
            <tr>
               <td id="colr">Car_Name:</td>
               <td><input type="text" id="car_name" name="car_name" value=""></td>
            </tr>
            <tr>
               <td id="colr">Car_Model:</td>
               <td><input type="text" id="car_model" name="car_model" value=""></td>
            </tr>
            <tr>
               <td id="colr">Manufacture Cost:</td>
               <td><input type="text" id="car_m_cost" name="car_m_cost" value="" onkeypress='return onlynumbers(event)'></td>
               <td id="colr">[ in Bangladeshi currency (Taka) ]</td>
            </tr>
            <tr>
               <td id="colr">Selling Cost:</td>
               <td><input type="text" id="car_s_cost" name="car_s_cost" value="" onkeypress='return onlynumbers2(event)'></td>
               <td id="colr">[ in Bangladeshi currency (Taka) ]</td>
            </tr>
            <tr>
               <td id="colr">Profit:</td>
               <td><input type="text" id="profit" name="profit"></td>
            </tr>
            <tr>
               <td><br></td>
            </tr>
            <tr><td colspan="3"><hr></td></tr>
            <tr>
               <td id="display">
                  Display  <input type="checkbox" id="display" name="display" value="display">
               </td>
            </tr>
            </tr>
            <tr><td colspan="3"><hr></td></tr>
            <tr>
               <td><br></td>
            </tr>
            <tr>
               <td id="lin1"><a href="../view/ExistingProducts.php">Existing Products</a></td>
               <td colspan="3"><center><input type="submit" id="submit" name="submit" onclick="Pcheck()" value="ADD"></center></td>
            </tr>
         </table>
      </fieldset>

   </form>
</center></body>
</html>
