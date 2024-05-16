<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <title>Gambling Room</title>
        <meta charset="utf-8" >
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="images/Logo.ico">
    </head>
    <body>
        <div class="body">
            <div class="main">
                <h1>Gambling Room</h1>
                <div id="center">
                    <form action="game.php" autocomplete="off" name="form" method="post">     
                        <div id="player">
                            <table id="">
                                <tr>
                                    <td>
                                        <label for="up1">Player 1:</label>
                                            <input class="login" name="up1" type="text" placeholder="Player name" required maxlength="6"/>
                                    </td>
                                    <td>
                                       <label for="up2">Player 2:</label>
                                        <input class="login" name="up2" type="text" placeholder="Player name" required maxlength="6"/>
                                    </td>
                                    <td>
                                       <label for="up3">Player 3:</label>
                                        <input class="login" name="up3" type="text" placeholder="Player name" required maxlength="6"/>
                                    </td>
                                </tr>
                            </table>

                        </d iv>
                        <div id="dices">
                            <table class="dicetable">
                                <tr>
                                    <td class="selection">
                                        <label for="stKock">Number of dice:</label>
                                            <select name="stKock" class="izb">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                    </td>
                                    <td class="izberi">
                                        <label for="stMetov">Number of throws:</label>
                                        <select name="stMetov" class="izb">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <input class="startB button" type="submit" onClick="return isEmpty()" name="play" value="Start"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>