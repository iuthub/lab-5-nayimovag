<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Buy Your Way to a Better Education!</h1>

<p>
    The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
</p>

<hr />

<h2>Give Us Your Money</h2>
<form action="sucker.php" method="post">
<dl>
    <dt>Name</dt>
    <dd><input type="text" name="name" maxlength="10"></dd>

    <dt>Section</dt>
    <dd>
        <select name="section">
            <option value="MA">MA</option>
            <option value="MB">MB</option>
            <option value="MC">MC</option>
            <option value="MD">MD</option>
            <option value="ME">ME</option>
            <option value="MF">MF</option>
            <option value="MG">MG</option>
            <option value="MH">MH</option>
        </select>
    </dd>

    <dt>Credit Card</dt>
    <dd>
        <input type="text" name="cardNumber" maxlength="20">
    </dd>
    <dt></dt>
    <dd>
        <input type="radio" name="cardName" value="Visa">Visa
        <input type="radio" name="cardName" value="MasterCard">Mastercard
    </dd>

    <dt></dt>
    <dd><input type="submit" value="I am a giant sucker."></dd>
</dl>
</body>
</html>