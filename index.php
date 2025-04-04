<?php
if (isset($_GET['items'])) {
    $items = $_GET['items'];
    $items_str = implode(",", $items);
    $response = file_get_contents("http://127.0.0.1:5000/?items=" . urlencode($items_str));
    echo $response;
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Planner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h1>Server #</h1>
    <p>
        🌟 CCTB Digital Party Planner - Let's Get This Party Started! 🎉
        <br>
        Welcome to the ultimate party code challenge, where you'll select your favorite party items, calculate some base codes, and throw a celebration like never before! 🍰🎈
        <br>
        This exam is all about learning bitwise operations and creating a 'party code' that packs a punch—because at CCTB, we know how to mix tech with fun! 🖥️🎉
        <br>
        Get ready to party with Python and show off your skills in programming while planning the event of the year. Let's code like it's a party—no dress code required! 😎🎉
        <br>
        #CCTB #DigitalPartyPlanner #TechMeetsFun
    </p>
    <h2 class="mb-3">Select Party Items</h2>
    <form action="process.php" method="get" class="mb-3">
        <div class="mb-3">
            <h5>Choose items:</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="0" id="cake">
                <label class="form-check-label" for="cake">Cake</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="1" id="balloons">
                <label class="form-check-label" for="balloons">Balloons</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="2" id="music">
                <label class="form-check-label" for="music">Music System</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="3" id="lights">
                <label class="form-check-label" for="lights">Lights</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="4" id="catering">
                <label class="form-check-label" for="catering">Catering Service</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="5" id="dj">
                <label class="form-check-label" for="dj">DJ</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="6" id="photo">
                <label class="form-check-label" for="photo">Photo Booth</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="7" id="tables">
                <label class="form-check-label" for="tables">Tables</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="8" id="chairs">
                <label class="form-check-label" for="chairs">Chairs</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="9" id="drinks">
                <label class="form-check-label" for="drinks">Drinks</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="10" id="hats">
                <label class="form-check-label" for="hats">Party Hats</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="11" id="streamers">
                <label class="form-check-label" for="streamers">Streamers</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="12" id="invitation">
                <label class="form-check-label" for="invitation">Invitation Cards</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="13" id="games">
                <label class="form-check-label" for="games">Party Games</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="items[]" value="14" id="cleaning">
                <label class="form-check-label" for="cleaning">Cleaning Service</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Plan Party</button>
    </form>
</body>

</html>