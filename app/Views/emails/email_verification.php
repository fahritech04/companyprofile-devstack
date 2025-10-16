<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification - DevStack</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .button {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>DevStack</h1>
        <p>Communication Platform</p>
    </div>

    <div class="content">
        <h2>Verify Your Email Address</h2>
        <p>Hello <?= $firstName ?>,</p>
        <p>Thank you for registering with DevStack! To complete your registration and start using our platform, please verify your email address by clicking the button below:</p>

        <a href="<?= $verificationUrl ?>" class="button">Verify Email Address</a>

        <p>If the button doesn't work, you can also copy and paste the following link into your browser:</p>
        <p style="word-break: break-all; color: #667eea;"><?= $verificationUrl ?></p>

        <p><strong>What happens next?</strong></p>
        <ul>
            <li>Your account will be fully activated</li>
            <li>You'll be able to access all platform features</li>
            <li>You can start collaborating with your team</li>
        </ul>

        <p>If you didn't create an account with DevStack, please ignore this email.</p>

        <p>Best regards,<br>The DevStack Team</p>
    </div>

    <div class="footer">
        <p>This is an automated message, please do not reply to this email.</p>
        <p>&copy; 2025 DevStack. All rights reserved.</p>
    </div>
</body>
</html>