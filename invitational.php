<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedding Invitation</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
</head>
<body>
  <div class="invitation-container">
    <h1 class="couple-names">John & Mary</h1>
    <p class="invite-text">Joyfully invite you to celebrate their wedding</p>
    <p class="date">Saturday, 20th December 2025</p>
    <p class="venue">St. Peter’s Cathedral – Kigali, Rwanda</p>

    <!-- Countdown -->
    <div id="countdown"></div>

    <!-- RSVP Form -->
    <h2>RSVP</h2>
    <form action="rsvp.php" method="POST" class="rsvp-form">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <input type="number" name="guests" placeholder="Number of Guests" required>
      <button type="submit">Confirm Attendance</button>
    </form>
  </div>
</body>
</html>
