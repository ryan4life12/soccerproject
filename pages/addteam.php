 <!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" href="../main.css" type="text/css" charset="utf-8">
    </head>
    <body>
    <header>
        <img src="images/legacyfc.png">
    </header>
       <form action="" method="post" id="aligned">
        <input type="hidden" name="action" value="add_product" />

        <label>Team Name:</label>
        <input type="input" name="teamname" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Team" />
        <br />
    </form>
    <p><a href="?action=list_products">View Teams</a></p>
    <?php
    $teamname = $_GET['teamname'];
    function addteamname($teamname) {
    global $db;
    $query = "INSERT INTO teams
                 (teamName)
              VALUES
                 ('$teamname')";
    $db->exec($query);
}
?>
    
    </section>
    <footer>
        
    </footer>
    </body>


