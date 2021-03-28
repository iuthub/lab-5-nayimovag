<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Recieved</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php if(($_REQUEST["name"]=="")||($_REQUEST["section"]=="")||($_REQUEST["cardName"]=="")||($_REQUEST["cardNumber"]=="")){ ?>
    <p>Please fill in all the fields in the <a href="./index.php">previous page</a> and come back again</p>
<?php } else { ?>
<h2>Thanks, sucker</h2>
<p>Your information has been recorded</p>
<dl>
    <dt>Name:</dt>
    <dd>
        <?= $_REQUEST["name"] ?>
    </dd>

    <dt>Section:</dt>
    <dd>
        <?= $_REQUEST["section"] ?>
    </dd>

    <dt>Credit Card:</dt>
    <dd>
        <?= $_REQUEST["cardName"] ?>
    </dd>

    <dt></dt>
    <dd>
        <?= $_REQUEST["cardNumber"] ?>
    </dd>
</dl>
<p>Here are all the suckers:</p>
<pre>
	<span>
		<?php
            $details = $_REQUEST["name"] . ";" . $_REQUEST["section"] . ";" . $_REQUEST["cardName"] . ";" . $_REQUEST["cardNumber"] . "\n";
            $file_content = file_get_contents("./data.txt");
            echo $file_content;
            $file_content .= $details;
            file_put_contents("./data.txt", $file_content);
        ?>
	</span>
</pre>
<?php } ?>
</body>
</html>