<!DOCTYPE html>
    <html>
        <head>
            <title>server</title>
        </head>
        <body>
            <section>
            the next lines return from the server:
                <?php
                    $name = $_GET["reg_un"];
                    $color = $_GET["reg_pass"];

                    if ($name == "yonit" && $color == "111")
                        echo "<h2>Good morning dear user enter your name " . $name . "</h2>";
                    else
                        echo "<h2>you can't get in</h2>";
                ?>
            </section>
        </body>
    </html>

        
