<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <style> 
html { 
  background: url(assets/img.jpg) no-repeat center fixed; 
  background-size: cover;
}

body { 
  color: white; 
  
}
</style>
</head>
<body>
    <div class="sidebar">
        <a href="#" onclick="showSection('dashboard')">Dashboard</a>
        <a href="#" onclick="showSection('patients')">Patients</a>
        <a href="#" onclick="showSection('staffs')">Staffs</a>
        <a href="#" onclick="showSection('appointments')">Appointments</a>
    </div>
    <div class="content">
        <div id="dashboard" class="hidden">
        <main>
            <header>
                <nav class="topnav">
                    <div class="logo"><img src="assets/logo.png"
                    style="width: 100px; height: 100px";></div>
                    <input type="text" class="search-bar" placeholder="Search...">
                        <div class="profile">
                            <span>Izza Mariel</span>
                            <img src="assets/admin.png" alt="Profile Picture">
                        </div>
                </nav>
            </header>
    <section class="overview">
        <div class="box">45 Appointment</div>
        <div class="box">67 Pending</div>
        <div class="box">30 Staff</div>
        <div class="calendar">
            <h2>May 2024</h2>
                <table class="calendar-table">
                        <thead>
                            <tr>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="appointments">
            <h2>Booked Appointment</h2>
            <?php include 'data/data.php'; ?>
            </section>
        </main>
        </div>
        <div id="patients" class="hidden">
            <h2>Patients</h2>
            <section class="add-patient">
            <button id="open-modal-button">Add Patient</button>
            </section>
        <div id="add-patient-modal" class="modal">
            <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>Add Patient</h2>
            <form class="form-container" id="add-patient-form" action="data/patients.php" method="post">
        <h2>Add Patient</h2>
        <div class="form-group">
            <label for="first-name">Last Name</label>
            <input type="text" id="first-name" name="first-name">
        </div>
        <div class="form-group">
            <label for="last-name">First Name</label>
            <input type="text" id="last-name" name="last-name">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" id="age" name="age">
        </div>
        <div class="form-group">
            <label for="contact-number">Contact Number</label>
            <input type="text" id="contact-number" name="contact-number">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <button type="submit">Add</button>
        </div>
        </form>
        </div>
        </div>
        <?php include 'data/patients.php'; ?>
        </section>
        </div>
        <div id="staffs" class="hidden">
            <h2>Staffs</h2>
            <?php include 'data/doctor.php';?>
        </div>
        <div id="appointments" class="hidden">
          <h2>Appointments</h2>
        </div>
    </div>
    <script src="javascript/patients.js"></script>
    <script src="javascript/addpatient.js"></script>
</body>
</html>