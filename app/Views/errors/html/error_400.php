<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= lang('Errors.badRequest') ?> — DevStack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('images/devstack_icon.svg') ?>" type="image/svg+xml">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            height: 100vh;
            background: linear-gradient(180deg, #060e1f, #0a1628);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;
            color: #94a3b8;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .wrap {
            max-width: 600px;
            margin: 2rem;
            padding: 3rem;
            text-align: center;
            position: relative;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            box-shadow: 0 24px 48px rgba(0, 0, 0, 0.4);
        }
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.5;
            pointer-events: none;
        }
        .orb-1 {
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(245, 158, 11, 0.15), transparent 70%);
            top: -80px;
            left: -60px;
        }
        .orb-2 {
            width: 180px;
            height: 180px;
            background: radial-gradient(circle, rgba(251, 191, 36, 0.1), transparent 70%);
            bottom: -60px;
            right: -40px;
        }
        .error-code {
            font-size: 8rem;
            font-weight: 800;
            background: linear-gradient(135deg, #f59e0b, #fbbf24);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            margin-bottom: 1rem;
            text-shadow: 0 0 40px rgba(245, 158, 11, 0.3);
        }
        h1 {
            font-size: 1.75rem;
            font-weight: 600;
            color: #e2e8f0;
            margin-bottom: 0.75rem;
        }
        p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        a {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.875rem 2rem;
            background: linear-gradient(135deg, #f59e0b, #fbbf24);
            color: #060e1f;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(245, 158, 11, 0.3);
        }
        a:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(245, 158, 11, 0.4);
        }
        @media (max-width: 640px) {
            .error-code {
                font-size: 5rem;
            }
            .wrap {
                padding: 2rem;
                margin: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="error-code">400</div>
        <h1>Bad Request</h1>
        <p>
            <?php if (ENVIRONMENT !== 'production') : ?>
                <?= nl2br(esc($message)) ?>
            <?php else : ?>
                <?= lang('Errors.sorryBadRequest') ?>
            <?php endif; ?>
        </p>
        <a href="<?= base_url() ?>">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            Back to Home
        </a>
    </div>
</body>
</html>
