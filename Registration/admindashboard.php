<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="navbar">
        <div class="logo-container">
        <img src="./University_of_Pangasinan_logo (1).png" alt="Logo" class="logo">
        <h2>UNIVERSITY OF PANGASINAN</h2>
        </div>
        <nav>
            <a href="admindashboard.php" class="active">Home</a>
            <a href="#">History</a>
            <a href="#">Profile</a>
            <a href="#">Appointment</a>
            <a href="#">FAQ's</a>
            <a href="#">Feedback</a>
            <a href="logout.php">Logout</a>
        </nav>
    </div>
    
    <div class="content">
        <h3>Announcement</h3>
        <div class="announcement-box">
            <?php if (empty($announcements)): ?>
                <p>No announcements at the moment.</p>
            <?php else: ?>
                <?php foreach ($announcements as $announcement): ?>
                    <p><strong><?= htmlspecialchars($announcement['title']) ?></strong>: <?= htmlspecialchars($announcement['message']) ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        
        <h3>Upcoming Events</h3>
        <div class="events-container">
            <?php if (empty($events)): ?>
                <p>No upcoming events at the moment.</p>
            <?php else: ?>
                <?php foreach ($events as $event): ?>
                    <div class="event-box">
                        <p><strong><?= htmlspecialchars($event['event_name']) ?></strong></p>
                        <p>Date: <?= htmlspecialchars($event['event_date']) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    
    <footer class="footer">
        <p>&copy;2025 Upang-Registrar.  All rights reserved</p>
    </footer>

</body>
</html>