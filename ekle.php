 <?php 
    include ("baglan.php"); 
             ob_start();
            		$Adi=$_POST['ad_soyad'];
            		$Mail=$_POST['email'];
            		$Mesaj=$_POST['not'];
            if ($_POST)
            	{
            		if ($Adi<>""&&$Mail<>""&&$Mesaj<>"")
            		{
            			if ($baglanti->query("INSERT INTO iletisim (Adi,Mail,Mesaj) VALUES ('$Adi','$Mail','$Mesaj')"))
            			{ 
            				echo '<div class="basarili">
            				<p>
            				<font size="4" face="Montserrat" color="black">Talebiniz gönderildi. En kısa sürede dönüş yapılacaktır.</font> 
            				</p>
            				</div>';	
            			}
            			else
            			{			
            			    echo"";
            		    }    
            		}		
            	}
            ob_end_flush();
            ?>