<!DOCTYPE html>
<html>
<head>
    <title>Distance Cost Calculator</title>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <h1>Distance Cost Calculator</h1>
    <p>Enter the distance in kilometres and use the rate provided to calculate the cost of transport.</p>
    <p>The distances are provided below:</p>
    <ul>
        <li>Murang'a to Nairobi - 84.6 km</li>
        <li>Embu to Nairobi - 130.2 km</li>
        <li>Limuru to Nairobi - 44.7 km</li>
    </ul>
    <p><b>Current rate is 5.5</b><p>

    <form method="POST" action="/calculate-cost">
        @csrf
        <label for="distance">Distance (in km):</label>
        <input type="text" name="distance" id="distance" required>

        <label for="rate">Rate (per km):</label>
        <input type="text" name="rate" id="rate" required>

        <button type="submit">Calculate</button>
    </form>

    @if(isset($cost))
        <div class="result">
            <h2>Result:</h2>
            <p>The cost for a distance of {{ $distance }} km is KES {{ $cost }}</p>
        </div>
    @endif
</body>
</html>
