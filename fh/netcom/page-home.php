            <p>
            <?php

                /* 
                $f = null;
                $f = $facebook->api('/me/friends');
                $f = $f['data'];

                $random_friend = $f[ rand(0,count($f)) ];

                echo("<p><img src='https://graph.facebook.com/$random_friend[id]/picture'>$random_friend[name] is a random friend of yours.</p>");


                $friends_of_friends = $facebook->api(array(
                    'method' => 'fql.query',
                    'query'  => "SELECT uid,name FROM user WHERE uid in (SELECT uid2 FROM friend WHERE uid1=$user LIMIT 40)" 
                ));
                echo("<pre>");
                var_dump($friends_of_friends);
                echo("</pre>");
            
                */


                $list = my_rumors($user);
                if ( count($list) ) {
                    echo_list($list,"htmltext");
                }
            ?>

            </p>
 <h3 class="hider">Code</h3>
<div class="hidden">
</div>
