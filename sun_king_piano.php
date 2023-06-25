<?php
// Declare and Initialize Variables
$workshopName = 'Storytelling and Empathy Workshops'
$workshopDesc = 'This workshop is designed to help participants to understand the power of storytelling and develop empathy for others.'
$targetAudience = 'Organizations, Businesses, and Teams.'
$workshopLocation = 'Online or In-Person'; 
$workshopDuration = '2.5 Hour Session';
$minParticipants = 10;
$maxParticipants = 50;
$workshopRate = '$75/pp';
$facilitatorBio = 'Marco has been leading storytelling & empathy workshops for over 5 years and is the founder of the Storytelling & Empathy Coaching Academy';

// Create a Session Upon Registration
function registerSession() {
    echo '<h1>Registration Form: Storytelling & Empathy Workshops</h1>';
echo '<p>Hello! Welcome to the Storytelling & Empathy Workshops! Please fill out the form below to register for the workshop.</p>';
echo '<form action="process.php" method="POST">';
echo 'Name:<br><input type="text" name="name" required><br>';
echo 'Phone:<br><input type="tel" name="phone" required minlength="10" maxlength="15"><br>';
echo 'Email:<br><input type="email" name="email" required><br>';
echo 'Number of Participants:<br><input type="number" name="participants" required min="2" max="50"><br><br>';
echo '<input type="submit" value="Register">';
echo '</form>';
}

// Automated Email Confirmation to Registrants
function sendConfirmation() {
    echo '<h1>Sent Confirmation Email</h1>';
    echo '<p>Dear Participant,</p>';
    echo '<p>Thank you for registering for the Storytelling & Empathy Workshops! We are excited that you will join us for this session.</p>';
    echo '<p>The session will take place '.$workshopLocation.' and will last for '.$workshopDuration.'. The workshop fee is '.$workshopRate.' per person.</p>';
    echo '<p>Our facilitator for this session is '.$facilitatorBio.'.</p>';
    echo '<p>Please feel free to reach out with any questions or concerns. We look forward to seeing you soon!</p>';
    echo '<p>Sincerely,<br>The Storytelling & Empathy Coaching Academy</p>';
}

// Promote the Workshop on Social Media
function promoteSession() {
    echo '<h1>Promote The Workshop on Social Media</h1>';
    echo '<p>We are excited to announce our upcoming '.$workshopName.'! This workshop is designed to help participants to understand the power of storytelling and develop empathy for others.';
    echo 'This workshop is perfect for '.$targetAudience.', with a minimum of '.$minParticipants.' and a maximum of '.$maxParticipants.' participants. The workshop fee is '.$workshopRate.' per person.';
    echo 'For more information or to register, please visit our website!</p>';
}

// Offer Discounts to Returning Participants
function offerDiscount() {
    echo '<h1>Offer Discounts to Returning Participants</h1>';
    echo '<p>We are proud to offer a 5% discount to returning participants of our '.$workshopName.' workshop. This discount applies to the workshop fee of '.$workshopRate.' per person.';
    echo 'Thank you for your interest in our workshops and we look forward to seeing you soon!</p>';
}

// Offer Credits to Referrals
function offerCredits() {
    echo '<h1>Offer Credits to Referrals</h1>';
    echo '<p>We are excited to announce that we are now offering credits to participants who refer others to our '.$workshopName.' workshop. For each referral, you will receive a $5 credit towards the workshop fee of '.$workshopRate.' per person.';
    echo 'Thank you for your interest in our workshops and we look forward to seeing you soon!</p>';
}

// Collect Payment
function collectPayment() {
    echo '<h1>Collect Payment</h1>';
    echo '<form action="process.php" method="POST">';
    echo '<p>Thank you for registering for the '.$workshopName.' workshop. Please enter the payment information below.</p>';
    echo 'Name on Card:<br><input type="text" name="name" required><br>';
    echo 'Card Number:<br><input type="number" name="card_number" required minlength="15" maxlength="16"><br>';
    echo 'Expiration Date:<br><input type="month" name="exp_date" required><br>';
    echo 'CVC Code:<br><input type="number" name="cvc" required minlength="3" maxlength="4"><br>';
    echo '<input type="submit" value="Submit Payment">';
    echo '</form>';
}

// Send Reminder Email Before Workshop
function sendReminder() {
    echo '<h1>Send Reminder Email Before Workshop</h1>';
    echo '<p>Dear Participant,</p>';
    echo '<p>This is a friendly reminder that the '.$workshopName.' workshop is upcoming. The session will take place ' .$workshopLocation.' and will last for '.$workshopDuration.'. Please arrive at least 10 minutes early to check-in. Our facilitator for this session is '.$facilitatorBio.'.</p>';
    echo '<p>Please feel free to reach out with any questions or concerns. We look forward to seeing you soon!</p>';
    echo '<p>Sincerely,<br>The Storytelling & Empathy Coaching Academy</p>';
}

// Follow up After Workshop
function followUp() {
    echo '<h1>Follow-up After Workshop</h1>';
    echo '<p>Dear Participant,</p>';
    echo '<p>Thank you for attending the '.$workshopName.' workshop! We hope that you enjoyed the session and learned something new. We would love to hear your feedback on the experience.</p>';
    echo '<p>Please take a few minutes to fill out the survey below and we will enter you into a draw for a chance to win a free workshop!</p>';
    echo '<form action="process.php" method="POST">';
    echo 'Rate the workshop (1-5):<br><input type="number" name="feedback" required min="1" max="5"><br>';
    echo 'Feedback or Comments:<br><textarea name="comments" rows="5" cols="20"></textarea><br><br>';
    echo '<input type="submit" value="Submit Feedback">';
    echo '</form>';
    echo '<p>Thank you for your time and we look forward to reading your feedback.</p>';
    echo '<p>Sincerely,<br>The Storytelling & Empathy Coaching Academy</p>';
}

// Main Function
function main() {
    registerSession();
    sendConfirmation();
    promoteSession();
    offerDiscount();
    offerCredits();
    collectPayment();
    sendReminder();
    followUp();
}

// Call Main Function
main();
?>