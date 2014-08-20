<?php 

    // if(isset($_POST['submit'])){

    //     foreach ($_POST['quantity'] as $key => $val) {
    //         if($val<=0){
    //             unset($_SESSION['cart'][$key]);
    //         }else{
    //             $_SESSION['cart'][$key]['quantity']=$val;
    //         }
    //     }

    // }
    if(isset($_POST['submit']))
    {
        foreach($_POST['quantity'] as $key=>$value)
        {
            if( ($value == 0) and (is_numeric($value)))
            {
                unset ($_SESSION['cart'][$key]);
            }
            elseif(($value > 0 && $value <=100) and (is_numeric($value)))
            {
                $_SESSION['cart'][$key]=$value;
            }
        }
    }

?>
<style type="text/css">
    .tt a{
        text-decoration: none;
        color: #fff;
    }
    .back a{
        color: blue;
    }
    th{
        border: 1px solid #20a4ca;
    }
    td{
        border: 1px solid #444;
    }
    .btntt{
        border: 1px solid #444;
        font-size: 20px;
        text-transform: uppercase;
        font-weight: bold;
    }
    button{
        margin-left: -1px;
    }

</style>
<h1>GIỎ HÀNG</h1>
<p class="back"><a href="index.php?page=preview">Trở về trang sản phẩm</a><p>
<hr>
<?php
    $ok=1;
    if(isset($_SESSION['cart']))
    {
     foreach($_SESSION['cart'] as $k => $v)
     {
      if(isset($k))
      {
       $ok=2;
      }
     }
    }
    if($ok == 2)
    {
?>
<form method="post" action="index_shopcart.php?page=cart">

    <table>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Size</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Lựa chọn</th>
                    <th>Tổng cộng</th>
                </tr>
                <?php 
                    $sql="SELECT * FROM tbl_san_pham WHERE id_san_pham IN(";
                    foreach ($_SESSION['cart'] as $id => $value) {
                        $sql.=$id.",";
                    }
                    $sql=substr($sql, 0,-1).")";
                    $query=mysql_query($sql);
                    $totalprice=0;
                    while ($row=mysql_fetch_array($query)) {
                        $subtotal=$_SESSION['cart'][$row['id_san_pham']]*$row['gia'];
                        $totalprice+=$subtotal;
                    ?>
                        <tr class="tr1">

                            <td><?php echo $row['ten_san_pham'] ?></td>
                            <td><?php echo $row['size'] ?></td>
                            <!-- <td><input type="text" name="quantity[<?php echo $row['id_san_pham'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_san_pham']]['quantity'] ?>"></td> -->
                            <td><input type="text" name="quantity[<?php echo $row['id_san_pham']?>]" size='5' value="<?php echo $_SESSION['cart'][$row['id_san_pham']] ?>"> </td>
                            <td><?php echo number_format($row['gia'],0) ?>đ</td>
                            <td>
                                <a href='delcart.php?id=<?php echo $row['id_san_pham']?>'><img src="images/remove_cart.png"></a></p>
                                
                            </td>
                            <td><?php echo number_format( $_SESSION['cart'][$row['id_san_pham']]*$row['gia'],0) ?>đ</td>

                        </tr>
                    
                <?php
                
                }
                
            ?>
            <tr>
                <td class="btntt">Tổng Tiền: <?php echo number_format($totalprice) ?>đ</td>
            </tr>
            </table>
            <br/>
            <button type="submit" name="submit">CẬP NHẬP</button>
            <button type="submit" name="submit_tt" class="tt"><a href="hoadonthanhtoan1.php">THANH TOÁN</a></button>

</form>
<br />
<p>Chú ý: Bạn có thể xóa bỏ một sản phẩm khi chọn số lượng là 0.</p>
<?php
    }
        else{
            echo 'Không có sản phẩm nào trong giỏ hàng. Vui lòng chọn một vài sản phẩm.';
        }  
?>