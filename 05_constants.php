<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <?php 
        //Constants
        define("ONE", 1);
        define("VAPOREON", "Hey guys, did you know that in terms of male human and female Pokémon breeding, Vaporeon is the most compatible Pokémon for humans? Not only are they in the field egg group, which is mostly comprised of mammals, Vaporeon are an average of 3”03’ tall and 63.9 pounds, this means they’re large enough to be able handle human dicks, and with their impressive Base Stats for HP and access to Acid Armor, you can be rough with one. Due to their mostly water based biology, there’s no doubt in my mind that an aroused Vaporeon would be incredibly wet, so wet that you could easily have sex with one for hours without getting sore. They can also learn the moves Attract, Baby-Doll Eyes, Captivate, Charm, and Tail Whip, along with not having fur to hide nipples, so it’d be incredibly easy for one to get you in the mood. With their abilities Water Absorb and Hydration, they can easily recover from fatigue with enough water. No other Pokémon comes close to this level of compatibility. Also, fun fact, if you pull out enough, you can make your Vaporeon turn white. Vaporeon is literally built for human dick. Ungodly defense stat+high HP pool+Acid Armor means it can take cock all day, all shapes and sizes and still come for more");
        print "Constant ONE: ";
        print constant("ONE");
        print "<br>";
        print constant("VAPOREON");
        print "<br>";

        //Constants with array
        define("SENTENCE", ["this", "is", "a", "sentence"]);
        function sentence(){
            //using if-else

            /*STATIC $x = 0;
            if($x == 4){
                print "<br>";
            }
            else{
                print SENTENCE[$x];
                print " ";
                $x++;
            }*/

            //using for
            for($x = 0; $x < 4; $x++){
                print SENTENCE[$x];
                print " ";
                if($x == 3)
                    print "<br>";
            }
        }
        sentence();
        
        //Magic Constants
        print __LINE__;
        print "<br>";
        print __FILE__;
    ?>
</body>
</html>