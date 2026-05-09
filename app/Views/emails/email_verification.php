<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification - DevStack</title>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #334155;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #f1f5f9;
        }
        .email-wrapper {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
        }
        .header {
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        .header p {
            margin: 8px 0 0;
            opacity: 0.9;
            font-size: 14px;
        }
        .content {
            padding: 40px 30px;
        }
        .content h2 {
            color: #0f172a;
            font-size: 20px;
            font-weight: 600;
            margin: 0 0 16px;
        }
        .content p {
            color: #475569;
            margin: 0 0 16px;
            font-size: 15px;
        }
        .button {
            display: inline-block;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            border-radius: 12px;
            margin: 8px 0 24px;
            font-weight: 600;
            font-size: 15px;
            box-shadow: 0 4px 16px rgba(37, 99, 235, 0.25);
        }
        .url-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 16px;
            word-break: break-all;
            color: #2563eb;
            font-size: 13px;
            font-family: 'SF Mono', Monaco, monospace;
            margin: 8px 0 24px;
        }
        .features {
            background: #f8fafc;
            border-radius: 12px;
            padding: 20px 24px;
            margin: 24px 0;
        }
        .features p {
            font-weight: 600;
            color: #0f172a;
            margin: 0 0 12px;
        }
        .features ul {
            margin: 0;
            padding-left: 20px;
            color: #475569;
        }
        .features li {
            margin-bottom: 6px;
            font-size: 14px;
        }
        .divider {
            height: 1px;
            background: #e2e8f0;
            margin: 24px 0;
        }
        .footer {
            text-align: center;
            padding: 0 30px 30px;
        }
        .footer p {
            color: #94a3b8;
            font-size: 12px;
            margin: 0 0 4px;
        }
        @media (max-width: 480px) {
            body {
                padding: 12px;
            }
            .header, .content, .footer {
                padding-left: 20px;
                padding-right: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="header">
            <h1>DevStack</h1>
            <p>Enterprise Digital Solutions</p>
        </div>

        <div class="content">
            <h2>Verify Your Email Address</h2>
            <p>Hello <?= $firstName ?>,</p>
            <p>Thank you for registering with DevStack! To complete your registration and start using our platform, please verify your email address by clicking the button below:</p>

            <center>
                <a href="<?= $verificationUrl ?>" class="button">Verify Email Address</a>
            </center>

            <p>If the button doesn't work, you can also copy and paste the following link into your browser:</p>
            <div class="url-box"><?= $verificationUrl ?></div>

            <div class="features">
                <p>What happens next?</p>
                <ul>
                    <li>Your account will be fully activated</li>
                    <li>You'll be able to access all platform features</li>
                    <li>You can start collaborating with your team</li>
                </ul>
            </div>

            <div class="divider"></div>

            <p>If you didn't create an account with DevStack, please ignore this email.</p>
            <p>Best regards,<br><strong>The DevStack Team</strong></p>
        </div>

        <div class="footer">
            <p>This is an automated message, please do not reply to this email.</p>
            <p>&copy; <?= date('Y') ?> DevStack. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
