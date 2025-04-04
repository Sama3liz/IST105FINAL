<?php
if (isset($_GET['items'])) {
    header("Location: process.php?items=" . urlencode($_GET['items']));
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

        Welcome to the ultimate party code challenge, where you'll select your favorite party items, calculate some base codes, and throw a celebration like never before! 🍰🎈

        This exam is all about learning bitwise operations and creating a 'party code' that packs a punch—because at CCTB, we know how to mix tech with fun! 🖥️🎉

        Get ready to party with Python and show off your skills in programming while planning the event of the year. Let's code like it's a party—no dress code required! 😎🎉

        #CCTB #DigitalPartyPlanner #TechMeetsFun
    </p>
    <h2 class="mb-3">Select Party Items</h2>
    <form action="process.php" method="get" class="mb-3">
        <div class="mb-3">
            <label for="items" class="form-label">Choose items:</label>
            <select class="form-select" name="items" id="items" multiple>
                <option value="0">Cake</option>
                <option value="1">Balloons</option>
                <option value="2">Music System</option>
                <option value="3">Lights</option>
                <option value="4">Catering Service</option>
                <option value="5">DJ</option>
                <option value="6">Photo Booth</option>
                <option value="7">Tables</option>
                <option value="8">Chairs</option>
                <option value="9">Drinks</option>
                <option value="10">Party Hats</option>
                <option value="11">Streamers</option>
                <option value="12">Invitation Cards</option>
                <option value="13">Party Games</option>
                <option value="14">Cleaning Service</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Plan Party</button>
    </form>
</body>

</html>