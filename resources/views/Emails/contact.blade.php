<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body class="padding:50px;">
    <div style="display:block;">
        <strong>Dear, Bali Coffee Club Email Administrator.</strong>
    </div>
    <div style="display:block;">
        I hope this email finds you well. I wanted to bring to your attention that we have received a new email from
        a potential client through our website's contact form.
    </div>
    <div>
        Here's the detail of the email:
    </div>
    <div style="display:block; font-weight:bold; margin-top:20px;">
        Name
    </div>
    <div style="display:block;">
        {{ $name }}
    </div>
    <div style="display:block;  font-weight:bold;">
        Email
    </div>
    <div style="display:block;">
        {{ $email }}
    </div>
    <div style="display:block;  font-weight:bold;">
        Phone Number
    </div>
    <div style="display:block;">
        {{ $phone_number }}
    </div>
    <div style="display:block;  font-weight:bold;">
        Message
    </div>
    <div style="display:block; margin-bottom:20px;">
        {!! $email_message !!}
    </div>
    <div>
        It is important that we respond to this inquiry in a timely manner to show our commitment to providing excellent
        customer service and building strong relationships with our potential clients.
    </div>
</body>

</html>
