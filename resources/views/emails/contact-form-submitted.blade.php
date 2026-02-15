<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form submission</title>
</head>
<body style="font-family: sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2 style="margin-top: 0;">New contact form submission</h2>

    <p><strong>Name:</strong> {{ $submission->name }}</p>
    <p><strong>Email:</strong> {{ $submission->email }}</p>
    <p><strong>Title:</strong> {{ $submission->title }}</p>

    <p><strong>Message:</strong></p>
    <div style="background: #f5f5f5; padding: 12px; border-radius: 6px; white-space: pre-wrap;">{{ $submission->message }}</div>

    <p style="margin-top: 24px; font-size: 12px; color: #888;">Sent from your portfolio contact form.</p>
</body>
</html>
