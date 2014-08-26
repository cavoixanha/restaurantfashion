<?php 
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
    .social-popout {
      margin: 5px;
      -webkit-transition: all ease 0.5s;
      -moz-transition: all ease 0.5s;
      -o-transition: all ease 0.5s;
      -ms-transition: all ease 0.5s;
      transition: all ease 0.5s;
    }
    .social-popout img {
      border-radius: 50%;
      -webkit-transition: all ease 0.5s;
      -moz-transition: all ease 0.5s;
      -o-transition: all ease 0.5s;
      -ms-transition: all ease 0.5s;
      transition: all ease 0.5s;
    }
    .social-popout img:hover {
      margin: 0px;
      box-shadow: 2px 2px 5px 5px rgba(0,0,0,0.3);
    }
    #social_side_links {
      
      position: fixed;
      top: 70px;
      left: 0;
      padding: 0;
      list-style: none;
      z-index: 99;
    }
    #social_side_links li a {
      display: block;
    }

    #social_side_links li a img {
      display: block;
      max-width:50px;
      padding: 3px;
      -webkit-transition:  background .2s ease-in-out;
      -moz-transition:  background .2s ease-in-out;
      -o-transition:  background .2s ease-in-out;
      transition:  background .2s ease-in-out;
    }

    #social_side_links li a:hover img {
     /*transform: translate(3em,0);*/
    }

    .demo-text {
      font-family: helvetica, sans-serif;
      font-weight: 100;
      font-size: 30px;
      line-height: 43px;
      color: #444;
      padding: 10px;
    }
      .demo-text--special {
        background-color:#A79C8E;
         color: #fff;
         padding: 30px;
      }
      
      .demo-text--small {
        font-size: 23px;
         line-height: 37px;
      }

    h1.demo-text {
      margin: 40px 0 0 0;
      line-height: 0;
      font-size: 50px;
    }

    a.demo-text {
      text-decoration:none;
      font-size: 20px;
    }
  



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
                    <th>Đơn giá</th>
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
           <!--  <button name="submit_tt" class="tt"><a href='delallcart.php'>XÓA HẾT</button> -->
            <button name="submit_tt" class="tt"><a href="hoadonthanhtoan1.php">THANH TOÁN</a></button>

</form>
<br />
<?php
    }
        else{
            echo 'Không có sản phẩm nào trong giỏ hàng. Vui lòng chọn một vài sản phẩm.';
        }  
?>
<div class="clear"></div>
        <ul id="social_side_links">
          <li class="social-popout"><a href="http://facebook.com" target="_blank"><img src="images/social/facebook.png" alt="" /></a></li>
          <li class="social-popout"><a href="http://skype.com" target="_blank"><img src="images/social/skype.png" alt="" /></a></li>
          <li class="social-popout"><a href="http://yahoo.com" target="_blank"><img src="images/social/yahoo.png" alt="" /></a></li>
        </ul>