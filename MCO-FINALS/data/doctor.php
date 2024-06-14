<?php
$doctor1 = [
    ["fname" => "Tricia", "lname" => "Alupani", "licensenum" => "DO1-74826462", "contactnum" => "0991 456 7837", "email" => "triciaalupani@gmail.com","spec"=>"Radiology"]
];
$doctor2 = [
    ["fname" => "Leannah", "lname" => "Isidro", "licensenum" => "DO1-75934568", "contactnum" => "0992 871 4974", "email" => "leannahisidro@gmail.com","spec"=>"Opthalmology"]
];
$doctor3 = [
    ["fname" => "Carylle", "lname" => "Bayle", "licensenum" => "DO1-75265267", "contactnum" => "0993 895 4910", "email" => "caryllebayle@gmail.com","spec"=>"Surgeon"]
];
$doctor4 = [
    ["fname" => "Janice", "lname" => "Alviento", "licensenum" => "DO1-757263569", "contactnum" => "0906 215 8901", "email" => "janicealviento@gmail.com","spec"=>"Psychology"]
];
$nurse1 = [
    []
];
$nurse2 = [
    []
];
$nurse3 = [
    []
];
$nurse4 = [
    []
];
$nurse5 = [
    []
];
?>
<table>
    <tr>
        <th>Doctors</th>
    </tr>
    <table>
        <tr>
            <th>Doctor</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>License Number</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Specialization</th>
        </tr>
        <?php foreach ($doctor1 as $doctor1): ?>
        <tr>
            <td><img src="assets/doctor pics/alupani.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $doctor1['fname']; ?></td>
            <td><?php echo $doctor1['lname']; ?></td>
            <td><?php echo $doctor1['licensenum']; ?></td>
            <td><?php echo $doctor1['contactnum']; ?></td>
            <td><?php echo $doctor1['email']; ?></td>
            <td><?php echo $doctor1['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    <?php foreach ($doctor2 as $doctor2): ?>
        <tr>
            <td><img src="assets/doctor pics/isidro.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $doctor2['fname']; ?></td>
            <td><?php echo $doctor2['lname']; ?></td>
            <td><?php echo $doctor2['licensenum']; ?></td>
            <td><?php echo $doctor2['contactnum']; ?></td>
            <td><?php echo $doctor2['email']; ?></td>
            <td><?php echo $doctor2['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    <?php foreach ($doctor3 as $doctor3): ?>
        <tr>
            <td><img src="assets/doctor pics/bayle.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $doctor3['fname']; ?></td>
            <td><?php echo $doctor3['lname']; ?></td>
            <td><?php echo $doctor3['licensenum']; ?></td>
            <td><?php echo $doctor3['contactnum']; ?></td>
            <td><?php echo $doctor3['email']; ?></td>
            <td><?php echo $doctor3['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    <?php foreach ($doctor4 as $doctor4): ?>
        <tr>
            <td><img src="assets/doctor pics/janice.jpg" style="width: 40px; height: 40px";></td>
            <td><?php echo $doctor4['fname']; ?></td>
            <td><?php echo $doctor4['lname']; ?></td>
            <td><?php echo $doctor4['licensenum']; ?></td>
            <td><?php echo $doctor4['contactnum']; ?></td>
            <td><?php echo $doctor4['email']; ?></td>
            <td><?php echo $doctor4['spec']; ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
</table>

<table>
    <tr>
        <th>Nurses</th>
    </tr>
    <table>
        <tr>
            <th>Nurse</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>License Number</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Specialization</th>
        </tr>
    </table>
</table>