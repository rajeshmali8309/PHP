<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Body styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 0;
            margin: 0;
        }
        
        /* Container styles */
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Header section */
        .header {
            background-color: #28a745;
            padding: 30px 20px;
            color: #fff;
            text-align: center;
        }
        
        .header h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        /* Main content styles */
        .content {
            padding: 20px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        .content h6 {
            font-size: 20px;
            line-height: 1.6;
            color: darkblue;
        }

        .content a {
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            padding: 12px 20px;
            border-radius: 6px;
            display: inline-block;
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
        }

        .content a:hover {
            background-color: #0056b3;
        }

        /* Footer section */
        .footer {
            background-color: #f1f1f1;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            color: #888;
        }

        /* Media Queries for responsiveness */
        @media (max-width: 600px) {
            .header h1 {
                font-size: 20px;
            }

            .content p {
                font-size: 14px;
            }

            .content a {
                font-size: 14px;
                padding: 10px 15px;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Registration Successful !</h1>
        </div>

        <!-- Content -->
        <div class="content">
            <h6>Dear {{ $RegisterData->first_name }} {{ $RegisterData->last_name }},</h6>
            <p>Thank you for registering with us. We are excited to have you on board! Your registration has been successfully completed, and your account is now active.</p>
            <p>If you have any questions or need assistance, feel free to <a href="rajeshk67003@gmail.com">contact our support team</a>.</p>
            <a href="#" class="button">Go to Dashboard</a>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2024 Public School Ahmedabad. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
