<script type="text/javascript">

function vote_now(val,id)
{
	$('#stars'+id).html('<img src="images/loader.gif" />');
	$('#stars'+id).load('index.php?by_tab=1&do_vote='+val+"&id="+id);
}

function book_form(id)
{
	$('#book_form'+id).show();
	$('#book_btn'+id).hide();
	$('#book_form'+id).html('<img src="images/loader.gif" />');
	$('#book_form'+id).load('book_now_form.php?by_tab=1&id='+id);
}

function cancel_form(id)
{
	$('#book_form'+id).slideUp('slow');
	$('#book_btn'+id).show();
	$('#like_label'+id).show();
}


function val_em(email)
{
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   if(reg.test(email) == false){
      return false;
   }
}

function is_char(char)
{
	if (!isNaN(ic * 1)){
	return false;
	}
	return true;
}

function corp_val(id)
{
	
	$('#err_msg').hide();
	$('#valid_email').hide();

	err=0;
	email_err=0;
	ic_err=0;
	ic_length_err=0;
	ic_first_char_err=0;
	ic_last_char_err=0;	
	ic_middle_err=0;
	o_email_err=0;
	
	if($("#time").val()=='')
	{
		$("#time").removeClass('select_box').addClass('select_box_err');
		err=1;
	}
	else
	{
		$("#time").removeClass('select_box_err').addClass('select_box');
	}
	

	if($("#company").val()=='')
	{
		$("#company").removeClass('input_box').addClass('input_box_err');
		err=1;
	}
	else
	{
		$("#company").removeClass('input_box_err').addClass('input_box');
	}

	if($("#o_email").val()=='')
	{
		$("#o_email").removeClass('input_box').addClass('input_box_err');
		err=1;
	}
	else
	{
		$("#o_email").removeClass('input_box_err').addClass('input_box');
		
		if( val_em($("#o_email").val()) ==false)
		{
			$("#o_email").removeClass('input_box').addClass('input_box_err');
			o_email_err=1;
		}
		else
		{
			$("#o_email").removeClass('input_box_err').addClass('input_box');
		}
		
	}

	if($("#com_address").val()=='')
	{
		$("#com_address").removeClass('input_box').addClass('input_box_err');
		err=1;
	}
	else
	{
		$("#com_address").removeClass('input_box_err').addClass('input_box');
	}



	if($("#name").val()=='')
	{
		$("#name").removeClass('input_box').addClass('input_box_err');
		err=1;
	}
	else
	{
		$("#name").removeClass('input_box_err').addClass('input_box');
	}
	
	if($("#email").val()=='')
	{
		$("#email").removeClass('input_box').addClass('input_box_err');
		err=1;
	}
	else
	{
		$("#email").removeClass('input_box_err').addClass('input_box');
		
		if( val_em($("#email").val()) ==false)
		{
			$("#email").removeClass('input_box').addClass('input_box_err');
			email_err=1;
		}
		else
		{
			$("#email").removeClass('input_box_err').addClass('input_box');
		}
		
	}
	
	if($("#phone").val()=='')
	{
		$("#phone").removeClass('input_box').addClass('input_box_err');
		err=1;
	}
	else
	{
		$("#phone").removeClass('input_box_err').addClass('input_box');
	}
	

  	
	if ($('input[name=rt]:checked').length == 0) 
	{
		err=1;	
	}
	

	if($("#donators").val()=='')
	{
		$("#donators").removeClass('input_box').addClass('input_box_err');
		err=1;
	}
	else
	{
		$("#donators").removeClass('input_box_err').addClass('input_box');
	}

	if ($('input[name=contact]:checked').length == 0) 
	{
		err=1;	
	}


	if(err==1)
	{
		$('#err_msg').show();
	}
	
	if(email_err==1)
	{
		$('#valid_email').show();
	}
	if(o_email_err==1)
	{
		$('#valid_email').show();
	}

	if(err==1 || email_err==1 || o_email_err)
	{
		return false;
	}	

	

	$('#err_msg').hide();
	$('#valid_email').hide();

	return true;
	
}


function in_val(id)
{
	
	$('#err_msg').hide();
	$('#valid_email').hide();

	err=0;
	email_err=0;
	ic_err=0;
	ic_length_err=0;
	ic_first_char_err=0;
	ic_last_char_err=0;	
	ic_middle_err=0;
	o_email_err=0;
	
	if($("#time").val()=='')
	{
		$("#time").removeClass('select_box').addClass('select_box_err');
		err=1;
	}
	else
	{
		$("#time").removeClass('select_box_err').addClass('select_box');
	}
	


	if($("#name").val()=='')
	{
		$("#name").removeClass('input_box').addClass('input_box_err');
		err=1;
	}
	else
	{
		$("#name").removeClass('input_box_err').addClass('input_box');
	}
	
	if($("#ic").val()=='')
	{
		$("#ic").removeClass('input_box').addClass('input_box_err');
		err=1;
	}
	else
	{
		$("#ic").removeClass('input_box_err').addClass('input_box');
	}
	
	if($("#email").val()=='')
	{
		$("#email").removeClass('input_box').addClass('input_box_err');
		err=1;
	}
	else
	{
		$("#email").removeClass('input_box_err').addClass('input_box');
		
		if( val_em($("#email").val()) ==false)
		{
			$("#email").removeClass('input_box').addClass('input_box_err');
			email_err=1;
		}
		else
		{
			$("#email").removeClass('input_box_err').addClass('input_box');
		}
		
	}
	
	if($("#phone").val()=='')
	{
		$("#phone").removeClass('input_box').addClass('input_box_err');
		err=1;
	}
	else
	{
		$("#phone").removeClass('input_box_err').addClass('input_box');
	}
	


	if(err==1)
	{
		$('#err_msg').show();
	}
	
	if(email_err==1)
	{
		$('#valid_email').show();
	}
	if(o_email_err==1)
	{
		$('#valid_email').show();
	}

	if(err==1 || email_err==1 || o_email_err)
	{
		return false;
	}	

	

	$('#err_msg').hide();
	$('#valid_email').hide();

	return true;
	
}



function invite_friends(title){
FB.ui({ method: 'apprequests',
message: 'Hi, invite your friends to make an appointment with the Blood Donation Booking application.'});
}	  





function val_form(is_main)
{	
	$("#err_div").hide();
	if(is_main==1)
	{
		if($("#title").val()=="")
		{ 
			$("#err_div").show();
			$("#err_div").html("Please enter the title"); 
			$("#title").focus(); 
			return false;
		}
	}
	
	if($("#photo").val()=="")
	{ 
		$("#err_div").show();
		$("#err_div").html("Please select the photo"); 
		$("#photo").focus(); 
		return false;
	}

		var ext = $("#photo").val().substring($("#photo").val().lastIndexOf('.') + 1);
		
	if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "png" || ext == "PNG")
	{
		ext_ok=1;
	} 
	else
	{
		ext_ok=0;
	}
	if(ext_ok==0)
	{
		$("#err_div").show();
		$("#err_div").html("Please select the valid jpg, gif and png photo only"); 
		$("#photo").focus(); 
		return false;
	}
	
	if($("#email").val()=="")
	{ 
		$("#err_div").show();
		$("#err_div").html("Please enter your email address"); 
		$("#email").focus(); 
		return false;
	}

	if(val_em($("#email").val())==false)
	{
		$("#err_div").show();
		$("#err_div").html("Please enter valid email address"); 
		$("#email").focus(); 
		return false;
	}
	
	if($("#mobile").val()=="")
	{ 
		$("#err_div").show();
		$("#err_div").html("Please enter your mobile number"); 
		$("#mobile").focus(); 
		return false;
	}
	
	if($("#company").val()=="")
	{ 
		$("#err_div").show();
		$("#err_div").html("Please enter your company name"); 
		$("#company").focus(); 
		return false;
	}

	if($("#country").val()=="")
	{ 
		$("#err_div").show();
		$("#err_div").html("Please enter your country name"); 
		$("#country").focus(); 
		return false;
	}
	
	if($("#description").val()=="")
	{ 
		$("#err_div").show();
		$("#err_div").html("Please enter description"); 
		$("#description").focus(); 
		return false;
	}
	
	


	$('#loader').show();
	return true;
}

$(document).ready(function() {


 });
 
 
 window.fbAsyncInit = function() {
FB.Canvas.setAutoResize();
}

</script>

<title><?php echo unfilter_val($nc->name); ?></title>
<meta name="description" content="<?php echo substr(strip_tags(unfilter_val($nc->intro_text)),0,300); ?>" />
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php if(IS_LOCAL!=1){ ?>

<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript" >
  FB.init({
    appId  : '<?php echo FACEBOOK_APP_ID; ?>',
    status : true, // check login status
    cookie : true, // enable cookies to allow the server to access the session
    xfbml  : true  // parse XFBML
  });
 
</script>
<?php } ?>


<script>

function publish_stream(body_msg,post_name,details,pic)
{
	var body = body_msg;
	FB.api('/me/feed', 'post', 
	{
	 message: body, 
	 name: post_name,
	 caption: '<?php echo FACEBOOK_CANVAS_URL; ?>',
	 description: (details),
	 picture: pic,

	 link: '<?php echo FACEBOOK_CANVAS_URL; ?>'
	
	}, function(response)
	{
		if (!response || response.error)
		{
		   //alert('Error occured'+response.error);
		}
		else
		{
		    //alert('Post ID: ' + response.id);
		}
	});


}
		
//publish_stream('I have just published a photo album',"My first album",'this is my full detail here',22);

function publish_stream_pop(post_name,details,url,pic)
{
	 FB.ui(
	   {
		 method: 'feed',
		 name: post_name,
		 link: url,
		 picture: pic,
		 caption: '',
		 description: details,
		 message: ''
	   },
	   function(response) {
		 if (response && response.post_id) {
		  //alert('Post was published.');
		 } else {
		 //alert('Post was not published.');
		 }
	   }
	 );


}
		
//publish_stream_pop("MS Photo Contests",'you can win prize here','http://apps.facebook.com/contest','http://smsread.com/contest/logo.jpeg');


function show_subnav(id)
{

	$("#main_nav").removeClass("selected");
	$(".main_nav").removeClass("selected");
	$("#main_nav"+id).addClass("selected");



	$(".sub_tabnav").hide();
	$("#sub_tabnav_id"+id).show();
}

//date_radio

function choose_date(v)
{
	
	$('.date_cell').css("border","0px solid #000000");
	$('#td'+v).css("border","2px solid red");
	$('#choosen_date').val(v);
	$('#entries_listing').html("<br /><div align='center'><img src='images/loader.gif' /></div>");
	$('#entries_listing').load('get_listings.php?type=<?php echo rt(type); ?>&selected_date='+v);
}

function get_bform()
{
	if($('#choosen_date').val()=="")
	{
		alert("Please choose a date");
		return false;
	}
	
	document.location="page.php?type=<?php echo $_REQUEST['type']; ?>&page=book&choosen_date="+$('#choosen_date').val();
	
	//$("#page_area").load("booking_form.php?type=<?php echo $_REQUEST['type']; ?>");
}

</script>



