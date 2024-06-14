<?php
$patients = [
    ["fname" => "Izza Katherine","lname" => "Dela Rosa", "address" => "Sta.Lucia", "age" => 22, "phoneNumber" => "0912 456 7837","email" => "izzakatherinedelarosa@gmail.com"]
];
$Apatients = [
    ["fname" => "Genesis", "lname" => "Manzano", "address" => "Candon City", "age" => 25, "phoneNumber" => "0976 203 4809", "email" => "genesismanzano@gmail.com"]
];
$Bpatients = [
    ["fname" => "Francine", "lname" => "Pais", "address" => "Gregorio Del Pilar", "age" => 22, "phoneNumber" => "0976 023 6807", "email" => "francinepaiso@gmail.com"]
];
$Cpatients = [
    ["fname" => "Esther", "lname" => "Sapguian", "address" => "Sta.Cruz", "age" => 23, "phoneNumber" => "0976 052 6093", "email" => "esthersapguian@gmail.com"]
];
$Dpatients = [
    ["fname" => "Sean", "lname" => "Galace", "address" => "Candon City", "age" => 21, "phoneNumber" => "0976 216 6098", "email" => "seangalace@gmail.com"]
];
$Epatients = [
    ["fname" => "Sharmaine", "lname" => "Gasatan", "address" => "Candon City", "age" => 23, "phoneNumber" => "0976 508 2034", "email" => "sharmainegasatan@gmail.com"]
];
?>
<table>
    <tr>
        <th>Patient</th>
        <th>First Name</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>Age</th>
        <th>Phone Number</th>
        <th>Email</th>
    </tr>
    <?php foreach ($patients as $patients): ?>
    <tr>
        <td><img src="assets/patients picture/kath.jpg" style="width: 40px; height: 40px";></td>
        <td><?php echo $patients['fname']; ?></td>
        <td><?php echo $patients['lname']; ?></td>
        <td><?php echo $patients['address']; ?></td>
        <td><?php echo $patients['age']; ?></td>
        <td><?php echo $patients['phoneNumber']; ?></td>
        <td><?php echo $patients['email']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach ($Apatients as $Apatients): ?>
    <tr>
        <td><img src="assets/patients picture/gen.jpg" style="width: 40px; height: 40px";></td>
        <td><?php echo $Apatients['fname']; ?></td>
        <td><?php echo $Apatients['lname']; ?></td>
        <td><?php echo $Apatients['address']; ?></td>
        <td><?php echo $Apatients['age']; ?></td>
        <td><?php echo $Apatients['phoneNumber']; ?></td>
        <td><?php echo $Apatients['email']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach ($Bpatients as $Bpatients): ?>
    <tr>
        <td><img src="assets/patients picture/francine.jpg" style="width: 40px; height: 40px";></td>
        <td><?php echo $Bpatients['fname']; ?></td>
        <td><?php echo $Bpatients['lname']; ?></td>
        <td><?php echo $Bpatients['address']; ?></td>
        <td><?php echo $Bpatients['age']; ?></td>
        <td><?php echo $Bpatients['phoneNumber']; ?></td>
        <td><?php echo $Bpatients['email']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach ($Cpatients as $Cpatients): ?>
    <tr>
        <td><img src="assets/patients picture/esther.jpg" style="width: 40px; height: 40px";></td>
        <td><?php echo $Cpatients['fname']; ?></td>
        <td><?php echo $Cpatients['lname']; ?></td>
        <td><?php echo $Cpatients['address']; ?></td>
        <td><?php echo $Cpatients['age']; ?></td>
        <td><?php echo $Cpatients['phoneNumber']; ?></td>
        <td><?php echo $Cpatients['email']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach ($Dpatients as $Dpatients): ?>
    <tr>
        <td><img src="assets/patients picture/sean.jpg" style="width: 40px; height: 40px";></td>
        <td><?php echo $Dpatients['fname']; ?></td>
        <td><?php echo $Dpatients['lname']; ?></td>
        <td><?php echo $Dpatients['address']; ?></td>
        <td><?php echo $Dpatients['age']; ?></td>
        <td><?php echo $Dpatients['phoneNumber']; ?></td>
        <td><?php echo $Dpatients['email']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach ($Epatients as $Epatients): ?>
    <tr>
        <td><img src="assets/patients picture/maine.jpg" style="width: 40px; height: 40px";></td>
        <td><?php echo $Epatients['fname']; ?></td>
        <td><?php echo $Epatients['lname']; ?></td>
        <td><?php echo $Epatients['address']; ?></td>
        <td><?php echo $Epatients['age']; ?></td>
        <td><?php echo $Epatients['phoneNumber']; ?></td>
        <td><?php echo $Epatients['email']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>