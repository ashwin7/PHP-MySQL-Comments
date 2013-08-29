<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Ajax Comment</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript">
		function getScriptPage(div_id,content_id1,content_id2,content_id3,more_options,act_id)
		{
			subject_id = div_id;
			
			content1 = document.getElementById(content_id1).value;
			content2 = document.getElementById(content_id2).value;
			content3 = document.getElementById(content_id3).value;

			switch(more_options)
			{
				case '1':
				{
  			      http.open("GET", "script_page.php?val1=" + escape(content1)+"&val2=" + escape(content2)+"&val3=" + escape(content3), true);
				}
				break;
				case '2':
				{
				  http.open("GET", "script_page.php?delete=1&id=" + escape(act_id), true);
				}
				break;
			}

			http.onreadystatechange = handleHttpResponse;
			http.send(null);

			document.getElementById(content_id1).value ="";
			document.getElementById(content_id2).value="";
			document.getElementById(content_id3).value="";

		}
		function reset(content_id1,content_id2,content_id3)
		{
			document.getElementById(content_id1).value ="";
			document.getElementById(content_id2).value="";
			document.getElementById(content_id3).value="";
		}
		
</script>
<link href="styles.css" rel="stylesheet" type="text/css"></link>	
</head>

<body>
<div class="ajax-div">
	<div class="input-div">
	<TABLE border="0" class="CommentsofT" cellspacing=0 width="200px" cellpadding="5">
	<TR>
		<TD colspan="2"><strong>Comment</strong></TD>
	</TR>
	<TR>
		<TD><strong>Name :</strong></TD>
		<TD align="left" class="commenthelpHed"><INPUT TYPE="text" NAME="name" id="text_content1"></TD>
	</TR>
	<TR>
		<TD><strong>E-Mail :</strong></TD>
		<TD align="left" class="commenthelpHed"><INPUT TYPE="text" NAME="email" id="text_content2"></TD>
	</TR>
	<TR>
		<TD><strong>Comment :</strong></TD>
		<TD align="left" class="commenthelpHed"><TEXTAREA NAME="comment" ROWS="4" COLS="30" id="text_content3"></TEXTAREA></TD>
	</TR>
	<TR>
	    <TD colspan="2" align="center" >
			<INPUT TYPE="submit" value="Submit" onMouseUp="getScriptPage('output_div','text_content1','text_content2','text_content3','1','x')">
			<INPUT TYPE="button" onClick="reset('text_content1','text_content2','text_content3')" value="Reset">
		</TD>
	</TR>
	</TABLE>
	</form>
	</div>
	<div class="output-div-container">
	<div id="output_div">
	   
	</div>
	</div>
</div>
</body>
</html>
