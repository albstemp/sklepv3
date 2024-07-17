<?php
	require "connect.php";
	
	$connect=@new mysqli($host,$user,$password,$name);
	if($connect->connect_errno!=0)
	{
		echo "Error".$polaczenie->connect_errno;
	}
	else
	{
		if($count=@$connect->query("SELECT count(Nr) FROM produkty"))
		{
			$how_many=$count->fetch_row();
			
			$Id = array();
			$photo = array();
			$name = array();
			$price = array();
			
			$data=array();
			for($i=0;$i<$how_many[0];$i++)
			{
				$productsNr=$i+1;
				$sql="SELECT * FROM produkty WHERE Nr=$productsNr";
				if($result=@$connect->query($sql))
				{
					$row=@$result->fetch_assoc();
					
					$id[$i]=$row['Nr']+1000;
					$photo[$i]=$row['Picture'];
					$name[$i]=$row['Name'];
					$price[$i]=number_format($row['Price'],2,'.');
				}
			}
			unset($result);
			unset($row);
		}
	}
	$connect->close();
	
?>

		