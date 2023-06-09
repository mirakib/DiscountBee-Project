<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
  <title>Contact Page</title>
  <style>
    body { 
  font-family: Arial, Helvetica, sans-serif;
  margin: 0.2px;
  padding: 0;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}
    .container {
      max-width: 500px;
      margin: 0 auto;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group:last-child {
      margin-bottom: 0;
    }

    .form-group.row {
      display: flex;
      align-items: center;
    }

    .form-group.row .col {
      flex-basis: 50%;
    }

    .form-group.row .col:nth-child(even) {
      padding-left: 10px;
    }

    .form-group.row .col:nth-child(odd) {
      padding-right: 10px;
    }

    .form-group.row .col:last-child {
      padding-left: 0;
      padding-right: 0;
    }

    .form-group select[multiple] {
      height: auto;
    }

    .form-group button[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group button[type="submit"]:hover {
      background-color: #45a049;
    }
    .checkbox-group {
  display: inline-block;
  margin-right: 10px;
}


  </style>
</head>
<body>
    
  <div class="container">
    <form method="post" action="submit.php">
      <div class="form-group row">
      <div class="col">
  <label for="firstName">First Name *</label>
  <input type="text" id="firstName" name="firstName" required>
</div>
<div class="col">
  <label for="lastName">Last Name *</label>
  <input type="text" id="lastName" name="lastName" required>
</div>
<div class="col">
  <label for="email">Email *</label>
  <input type="email" id="email" name="email" required>
</div>
<div class="col">
  <label for="company">Company</label>
  <input type="text" id="company" name="company">
</div>
<div class="col">
  <label for="phoneNumber">Phone Number</label>
  <input type="text" id="phoneNumber" name="phoneNumber">
</div>
<div class="col">
  <label for="country">Country</label>
  <input type="text" id="country" name="country">
</div>
<div class="col">
  <label for="areYou">Are you a...</label>
  <select id="areYou" name="areYou" required>
    <option value="brand">Brand</option>
    <option value="network">Network</option>
    <option value="media">Media</option>
    <option value="techProvider">Tech Provider</option>
    <option value="inPersonRetail">In-person Retail</option>
    <option value="otherAcademicInstition">Other Academic Institution</option>
  </select>
</div>
<div class="col">
  <label for="jobFunction">Job Function *</label>
  <select id="jobFunction" name="jobFunction" required>
    <option value="teamMember">Team Member</option>
    <option value="manager">Manager</option>
    <option value="vp">VP</option>
    <option value="director">Director</option>
    <option value="cSuit">C-Suit</option>
  </select>
</div>
<div class="col">
  <label for="seniorityLevel">Seniority Level</label>
  <input type="text" id="seniorityLevel" name="seniorityLevel">
</div>
<div class="col">
  <label for="message">Message</label>
  <textarea id="message" name="message"></textarea>
</div>
<div class="col">
  <label for="interests">I'm interested in the following...</label>
  <input type="checkbox" id="studentVerification" name="interests[]" value="studentVerification">
  <label for="studentVerification">Student Verification</label>
  <input type="checkbox" id="displayAdvertising" name="interests[]" value="displayAdvertising">
  <label for="displayAdvertising">Display Advertising</label>
  <input type="checkbox" id="multiChannelContentMarketing" name="interests[]" value="multiChannelContentMarketing">
  <label for="multiChannelContentMarketing">Multi-channel Content Marketing</label>
  <input type="checkbox" id="youthMarketingEvents" name="interests[]" value="youthMarketingEvents">
  <label for="youthMarketingEvents">Youth Marketing Events</label>
  <input type="checkbox" id="researchInsights" name="interests[]" value="researchInsights">
  <label for="researchInsights">Research & Insights</label>
  <input type="checkbox" id="authenticInfluencerMarketing" name="interests[]" value="authenticInfluencerMarketing">
  <label for="authenticInfluencerMarketing">Authentic Influencer Marketing</label>
  <input type="checkbox" id="consumerGroupVerification" name="interests[]" value="consumerGroupVerification">
  <label for="consumerGroupVerification">Consumer Group Verification</label>
  <input type="checkbox" id="allProducts" name="interests[]" value="allProducts">
  <label for="allProducts">All Products</label>
</div>
<div class="col">
  <button type="submit" name="submit">Submit</button>
</div>

    </form>
  </div>
</body>
</html>
