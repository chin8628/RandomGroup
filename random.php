<?
	error_reporting(E_ALL & ~E_NOTICE);

	function make_seed()
	{
		list($usec, $sec) = explode(' ', microtime());
		return (float) $sec + ((float) $usec * 100000);
	}

	if(isset($_POST["group"]) && isset($_POST["member"])){
		$num[23] = (0);
		$num_group = $_POST["group"];	
		$num_member = $_POST["member"];
		$i;$j;$k;
		$count = 0;
		$rand;
		if($num_group>$num_member)
		{
			echo '<script type="text/javascript">;';
			echo 'window.alert("Time Out น่ะแจ้ อาจจะใส่ค่าบางอย่างผิดพลาด ลองใหม่ล่ะกัน");';
			echo 'document.location.reload(true);';
			echo '</script>';
		}
		if($num_group != 0)
		{
			$cess = $num_member%$num_group;	
		}
		if($cess == 0) //cess == 0
		{
			echo '<table class="table table-bordered">';
			for($i=1;$i<=$num_group;$i+=1)
			{
				echo "<tr><td>Group $i</td>";
				for($j=0;$j<floor($num_member / $num_group);$j+=1)
				{
					mt_srand(make_seed());
					$rand = mt_rand(1,$num_member);
					for($k=0;$k<$count+1;$k+=1)
					{
						if($rand==$num[$k])
						{
							mt_srand(make_seed());
							$rand = mt_rand(1,$num_member);
							$k=0;
						}
					}
					$count+=1;
					echo "<td>$rand</td>";
					$num[$count] = $rand;
				}
				echo "</tr>";
			}
			echo "</table>";
		}
		else //cess != 0
		{	
			//Format #1
			echo "Format #1<br><br>";
			echo '<table class="table table-bordered">';
			for($i=1;$i<=$num_group;$i+=1) //num of group
			{
				echo "<tr><td>Group $i</td>";
				for($j=0;$j<floor($num_member/$num_group);$j+=1) //num of member in one group
				{
					mt_srand(make_seed());
					$rand = mt_rand(1,$num_member);
					for($k=0;$k<$count+1;$k+=1)
					{
						if($rand==$num[$k]) //checker
						{
							mt_srand(make_seed());
							$rand = mt_rand(1,$num_member);
							$k=0;
						}
					}
					$count+=1;
					echo "<td>$rand</td>";
					$num[$count] = $rand;
				}
				if($cess > 0)
				{
					mt_srand(make_seed());
					$rand = mt_rand(1,$num_member);
					for($k=0;$k<$count+1;$k+=1)
					{
						if($rand==$num[$k])
						{
							mt_srand(make_seed());
							$rand = mt_rand(1,$num_member);
							$k=0;
						}
					}
					$count+=1;
					echo "<td>$rand</td>";
					$num[$count] = $rand;
				}
				else
				{
					echo '<td> </td>';
				}
				$cess--;
				echo "</tr>";
			}
			echo "</table>";
			echo "<br>";
			$count = 0;
			
			//Format #2
			$count = 0;
			
			//check member for Portion and Divide
			if($num_member%$num_group <= $num_member/$num_group)
			{		
				echo "Format #2<br><br>";
				echo '<table class="table table-bordered">';
				for($i=1;$i<=$num_group;$i+=1) //num of group
				{
					echo "<tr><td>Group $i</td>";
					for($j=0;$j<floor($num_member/$num_group);$j+=1) //num of member in one group
					{
						mt_srand(make_seed());
						$rand = mt_rand(1,$num_member);
						for($k=0;$k<=$count;$k+=1) //checker
						{
							if($rand==$num[$k])
							{
								mt_srand(make_seed());
								$rand = mt_rand(1,$num_member);
								$k=0;
							}
						}
						$count+=1;
						echo "<td>$rand</td>";
						$num[$count] = $rand;
					}
				}
				echo "</tr>";
				//the last group
				echo '<tr>';
				echo "<td>Group $i</td>";
				for($j=0;$j<$num_member%$num_group;$j+=1) //num of member in one group
				{
					mt_srand(make_seed());
					$rand = mt_rand(1,$num_member);
					for($k=0;$k<=$count && $count<$num_member;$k+=1) //checker
					{
						if($rand==$num[$k])
						{
							mt_srand(make_seed());
							$rand = mt_rand(1,$num_member);
							$k=0;
						}
					}
					$count+=1;
					echo "<td>$rand</td>";
					$num[$count] = $rand;
				}
				$a = floor($num_member/$num_group);
				$b = $num_member%$num_group;
				if($a-$b>0)
				{
					for($k=0;$k<($a-$b);$k+=1)
					{
						echo "<td> </td>";
					}
				}
				echo '</tr>';
				echo '</table>';
			}
			else
			{
				echo '<div class="alert alert-block">';
				echo "Format #2<br><br>";
				echo "<h3>เนื่องจากคนที่ไม่มีกลุ่มนั้น ถ้าสร้างกลุ่มใหม่ให้นั้นจะมีกลุ่มเพิ่มขึ้นมากกว่าหนึ่งกลุ่ม ซึ่งเป็นรูปแบบที่ไม่น่าจะเป็นไปได้ เราจึงไม่คำนวนให้น่ะแจ้ เสียใจด้วย</h3>";
				echo "<div>";
			}
		}
	}
?>