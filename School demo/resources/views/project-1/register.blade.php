<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=josefin+sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<title></title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<script type="text/javascript">
    function toggleForm(formId) {
        // Close other forms before opening the new one
        closeForm('register-form');
        closeForm('login-form');
        document.getElementById(formId).style.display = 'block';
    }

    function closeForm(formId) {
        document.getElementById(formId).style.display = 'none';
    }

    function submitForm(formId) {
        // You can add your form submission logic here
        console.log(`Form ${formId} submitted`);
    }
</script>

    <style type="text/css">
    	
/* ---user login page start---*/
        .user-section {
            display: inline-block;
            cursor: pointer;
        }

        .user-icon {
            font-size: 25px;
            color: red;
        }

        .user-icon:hover{
        	color: orange;
        }

        .form-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: yellowgreen;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .close-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 18px;
        }


/* ---user login page end---*/

    </style>





</head>
<body>

	<div class="user-section" onclick="toggleForm('register-form')">
                  <i class="fas fa-user user-icon"></i>
    </div>
<!-----------------------------login form--------------------------- -->

<!--------second page--------- -->
<div class="form-container" id="register-form">
    <div class="close-icon" onclick="closeForm('register-form')">X</div>


    
</div>



<!--------second page--------- -->

<div class="form-container" id="login-form">
    <div class="close-icon" onclick="closeForm('login-form')">X</div>
    
</div>


<!-----------------------------login form end--------------------------- -->

</body>
</html>