            <p>
            <?php

    $rand = rand(0,100);
    $query1 = "SELECT uid,name FROM user WHERE uid in (SELECT uid2 FROM friend WHERE uid1=me()) LIMIT $rand,1";
    $rand = rand(0,100);
    $query2 = "SELECT uid,name FROM user WHERE uid in (SELECT uid2 FROM friend WHERE uid1=me()) LIMIT $rand,1";
    $data = $facebook->api(array(
        'method' => 'fql.query',
        'query'  => "$query1; $query2"
    ));


?>

    <h3 class="hider">Code</h3>
    <div class="hidden">
<h4>FQL Query</h4>
<?php echo "$query1;$query2" ?>

<h4>Calling FQL from PHP:</h4>
<pre>$data = $facebook->api(array(
    'method' => 'fql.query',
    'query'  => $query1
));
</pre>

<h4>The returned data</h4>
<pre><?php print_r($data); ?></pre>

    </div>

</p>
            ?>

            </p>
 <h3 class="hider">Code</h3>
<div class="hidden">
</div>
