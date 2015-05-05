<?php
    require_once 'app/init.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echoAppURL() ?>/assets/css/bootstrap.min.css">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Test Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12" style="margin-top:20px;">
                <?php
                    $ga_player_id = 2;
                    $fname = 'David';
                    $lname = 'Enete';
                    $email = 'David.Enete@scigames.com';
                    $address1 = '123 Monkey St.';
                    $address2 = 'addr2';
                    $city = 'Harrison';
                    $state = 'PA';
                    $zip = '44114';
                    $dob = '1955-05-05';
                    $phone = '555-555-1239';
                    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
                    #$checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.UserAuthPassthru::getChecksumKey();
                    $chksum = md5($checksum_str);
                ?>
                <form name="testform" action="enter/index.php" method="post">
                    <input type="hidden" name="playerID" value="<?php echo $ga_player_id;?>">
                    <input type="hidden" name="firstName" value="<?php echo $fname;?>">
                    <input type="hidden" name="lastName" value="<?php echo $lname;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="address1" value="<?php echo $address1;?>">
                    <input type="hidden" name="address2" value="<?php echo $address2;?>">
                    <input type="hidden" name="city" value="<?php echo $city;?>">
                    <input type="hidden" name="stateAbbr" value="<?php echo $state;?>">
                    <input type="hidden" name="zip" value="<?php echo $zip;?>">
                    <input type="hidden" name="dob" value="<?php echo $dob;?>">
                    <input type="hidden" name="phone" value="<?php echo $phone;?>">
                    <input type="hidden" name="chksum" value="<?php echo $chksum;?>">
                    <input type="submit" name="submit" class="btn btn-large" value="Login TestAccount <?php echo $fname; ?>">
                </form>

                    <?php
                    $ga_player_id = 1;
                    $fname = 'Stephanie';
                    $lname = 'Ragsdale';
                    $email = 'stephanie.ragsdale@scigames.com';
                    $address1 = '123 Monkey St.';
                    $address2 = 'addr2';
                    $city = 'Harrison';
                    $state = 'PA';
                    $zip = '44114';
                    $dob = '1955-05-05';
                    $phone = '555-555-1239';
                    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
                    #$checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.UserAuthPassthru::getChecksumKey();
                    $chksum = md5($checksum_str);
                ?>
                <form name="testform" action="enter/index.php" method="post">
                    <input type="hidden" name="playerID" value="<?php echo $ga_player_id;?>">
                    <input type="hidden" name="firstName" value="<?php echo $fname;?>">
                    <input type="hidden" name="lastName" value="<?php echo $lname;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="address1" value="<?php echo $address1;?>">
                    <input type="hidden" name="address2" value="<?php echo $address2;?>">
                    <input type="hidden" name="city" value="<?php echo $city;?>">
                    <input type="hidden" name="stateAbbr" value="<?php echo $state;?>">
                    <input type="hidden" name="zip" value="<?php echo $zip;?>">
                    <input type="hidden" name="dob" value="<?php echo $dob;?>">
                    <input type="hidden" name="phone" value="<?php echo $phone;?>">
                    <input type="hidden" name="chksum" value="<?php echo $chksum;?>">
                    <input type="submit" name="submit" class="btn btn-large" value="Login TestAccount <?php echo $fname; ?>">
                </form>

                <?php
                    $ga_player_id = 2;
                    $fname = 'Test';
                    $lname = 'TestAccount'.$ga_player_id;
                    $email = 'test@scigames.com';
                    $address1 = '123 Test st.';
                    $address2 = 'apt. test';
                    $city = 'Cleveland';
                    $state = 'OH';
                    $zip = '44114';
                    $dob = '1980-05-05';
                    $phone = '555-555-5555';
                    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
                    $chksum = 'bad1bad2bad3';
                ?>
                <form name="testform" action="enter/index.php" method="post">
                    <input type="hidden" name="playerID" value="<?php echo $ga_player_id;?>">
                    <input type="hidden" name="firstName" value="<?php echo $fname;?>">
                    <input type="hidden" name="lastName" value="<?php echo $lname;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="address1" value="<?php echo $address1;?>">
                    <input type="hidden" name="address2" value="<?php echo $address2;?>">
                    <input type="hidden" name="city" value="<?php echo $city;?>">
                    <input type="hidden" name="stateAbbr" value="<?php echo $state;?>">
                    <input type="hidden" name="zip" value="<?php echo $zip;?>">
                    <input type="hidden" name="dob" value="<?php echo $dob;?>">
                    <input type="hidden" name="phone" value="<?php echo $phone;?>">
                    <input type="hidden" name="chksum" value="<?php echo $chksum;?>">
                    <input type="submit" name="submit" class="btn btn-large" value="Login TestAccount <?php echo $ga_player_id; ?> (fail)">
                </form>
                <?php
                    $ga_player_id = 3;
                    $fname = 'Jaime';
                    $lname = 'Lopez';
                    $email = 'test2011@scigames.com';
                    $address1 = '123 Test st.';
                    $address2 = 'apt. test';
                    $city = 'Cleveland';
                    $state = 'OH';
                    $zip = '44114';
                    $dob = '1980-05-05';
                    $phone = '555-555-5555';
                    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
                    $chksum = md5($checksum_str);
                ?>
                <form name="testform" action="enter/index.php" method="post">
                    <input type="hidden" name="playerID" value="<?php echo $ga_player_id;?>">
                    <input type="hidden" name="firstName" value="<?php echo $fname;?>">
                    <input type="hidden" name="lastName" value="<?php echo $lname;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="address1" value="<?php echo $address1;?>">
                    <input type="hidden" name="address2" value="<?php echo $address2;?>">
                    <input type="hidden" name="city" value="<?php echo $city;?>">
                    <input type="hidden" name="stateAbbr" value="<?php echo $state;?>">
                    <input type="hidden" name="zip" value="<?php echo $zip;?>">
                    <input type="hidden" name="dob" value="<?php echo $dob;?>">
                    <input type="hidden" name="phone" value="<?php echo $phone;?>">
                    <input type="hidden" name="chksum" value="<?php echo $chksum;?>">
                    <input type="submit" name="submit" class="btn btn-large" value="Login TestAccount <?php echo $fname; ?>">
                </form>
                <?php
                    $ga_player_id = 4;
                    $fname = 'Brendan';
                    $lname = 'Crowe';
                    $email = 'test4@scigames.com';
                    $address1 = '123 Test st.';
                    $address2 = 'apt. test';
                    $city = 'Cleveland';
                    $state = 'OH';
                    $zip = '44114';
                    $dob = '1980-05-05';
                    $phone = '555-555-5555';
                    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
                    $chksum = md5($checksum_str);
                ?>
                <form name="testform" action="enter/index.php" method="post">
                    <input type="hidden" name="playerID" value="<?php echo $ga_player_id;?>">
                    <input type="hidden" name="firstName" value="<?php echo $fname;?>">
                    <input type="hidden" name="lastName" value="<?php echo $lname;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="address1" value="<?php echo $address1;?>">
                    <input type="hidden" name="address2" value="<?php echo $address2;?>">
                    <input type="hidden" name="city" value="<?php echo $city;?>">
                    <input type="hidden" name="stateAbbr" value="<?php echo $state;?>">
                    <input type="hidden" name="zip" value="<?php echo $zip;?>">
                    <input type="hidden" name="dob" value="<?php echo $dob;?>">
                    <input type="hidden" name="phone" value="<?php echo $phone;?>">
                    <input type="hidden" name="chksum" value="<?php echo $chksum;?>">
                    <input type="submit" name="submit" class="btn btn-large" value="Login TestAccount <?php echo $fname; ?>">
                </form>
                <?php
                    $ga_player_id = 5;
                    $fname = 'Jamal';
                    $lname = 'Alghazal';
                    $email = 'jamal@scigames.com';
                    $address1 = '123 Test st.';
                    $address2 = 'apt. test';
                    $city = 'Cleveland';
                    $state = 'OH';
                    $zip = '44114';
                    $dob = '1980-05-05';
                    $phone = '555-555-5555';
                    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
                    $chksum = md5($checksum_str);
                ?>
                <form name="testform" action="enter/index.php" method="post">
                    <input type="hidden" name="playerID" value="<?php echo $ga_player_id;?>">
                    <input type="hidden" name="firstName" value="<?php echo $fname;?>">
                    <input type="hidden" name="lastName" value="<?php echo $lname;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="address1" value="<?php echo $address1;?>">
                    <input type="hidden" name="address2" value="<?php echo $address2;?>">
                    <input type="hidden" name="city" value="<?php echo $city;?>">
                    <input type="hidden" name="stateAbbr" value="<?php echo $state;?>">
                    <input type="hidden" name="zip" value="<?php echo $zip;?>">
                    <input type="hidden" name="dob" value="<?php echo $dob;?>">
                    <input type="hidden" name="phone" value="<?php echo $phone;?>">
                    <input type="hidden" name="chksum" value="<?php echo $chksum;?>">
                    <input type="submit" name="submit" class="btn btn-large" value="Login for <?php echo $fname; ?> ONLY">
                </form>
                <?php
                    $ga_player_id = 6;
                    $fname = 'Poonam';
                    $lname = 'Hajgude';
                    $email = 'poonam@scigames.com';
                    $address1 = '1255 Bluegrass Pkwy.';
                    $address2 = 'apt. test';
                    $city = 'Alpharetta';
                    $state = 'GA';
                    $zip = '30004';
                    $dob = '1960-12-25';
                    $phone = '678-555-5555';
                    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
                    $chksum = md5($checksum_str);
                ?>
                <form name="testform" action="enter/index.php" method="post">
                    <input type="hidden" name="playerID" value="<?php echo $ga_player_id;?>">
                    <input type="hidden" name="firstName" value="<?php echo $fname;?>">
                    <input type="hidden" name="lastName" value="<?php echo $lname;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="address1" value="<?php echo $address1;?>">
                    <input type="hidden" name="address2" value="<?php echo $address2;?>">
                    <input type="hidden" name="city" value="<?php echo $city;?>">
                    <input type="hidden" name="stateAbbr" value="<?php echo $state;?>">
                    <input type="hidden" name="zip" value="<?php echo $zip;?>">
                    <input type="hidden" name="dob" value="<?php echo $dob;?>">
                    <input type="hidden" name="phone" value="<?php echo $phone;?>">
                    <input type="hidden" name="chksum" value="<?php echo $chksum;?>">
                    <input type="submit" name="submit" class="btn btn-large" value="Login for <?php echo $fname; ?> ONLY">
                </form>
                <?php
                    $ga_player_id = 7;
                    $fname = 'Hetal';
                    $lname = 'Suratwala';
                    $email = 'Hetal@scigames.com';
                    $address1 = '1255 Madison Ave.';
                    $address2 = 'apt. test';
                    $city = 'Pittsburgh';
                    $state = 'PA';
                    $zip = '15201';
                    $dob = '1970-12-25';
                    $phone = '770-898-5555';
                    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
                    $chksum = md5($checksum_str);
                ?>
                <form name="testform" action="enter/index.php" method="post">
                    <input type="hidden" name="playerID" value="<?php echo $ga_player_id;?>">
                    <input type="hidden" name="firstName" value="<?php echo $fname;?>">
                    <input type="hidden" name="lastName" value="<?php echo $lname;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="address1" value="<?php echo $address1;?>">
                    <input type="hidden" name="address2" value="<?php echo $address2;?>">
                    <input type="hidden" name="city" value="<?php echo $city;?>">
                    <input type="hidden" name="stateAbbr" value="<?php echo $state;?>">
                    <input type="hidden" name="zip" value="<?php echo $zip;?>">
                    <input type="hidden" name="dob" value="<?php echo $dob;?>">
                    <input type="hidden" name="phone" value="<?php echo $phone;?>">
                    <input type="hidden" name="chksum" value="<?php echo $chksum;?>">
                    <input type="submit" name="submit" class="btn btn-large" value="Login for <?php echo $fname; ?> ONLY">
                </form>
                <?php
                    $ga_player_id = 8;
                    $fname = 'PA';
                    $lname = 'Lottery 1';
                    $email = 'palotery1@scigames.com';
                    $address1 = '123 Madison Ave';
                    $address2 = 'apt. test';
                    $city = 'Philadelphia';
                    $state = 'PA';
                    $zip = '19019';
                    $dob = '1980-05-05';
                    $phone = '215-555-9999';
                    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
                    $chksum = md5($checksum_str);
                ?>
                <form name="testform" action="enter/index.php" method="post">
                    <input type="hidden" name="playerID" value="<?php echo $ga_player_id;?>">
                    <input type="hidden" name="firstName" value="<?php echo $fname;?>">
                    <input type="hidden" name="lastName" value="<?php echo $lname;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="address1" value="<?php echo $address1;?>">
                    <input type="hidden" name="address2" value="<?php echo $address2;?>">
                    <input type="hidden" name="city" value="<?php echo $city;?>">
                    <input type="hidden" name="stateAbbr" value="<?php echo $state;?>">
                    <input type="hidden" name="zip" value="<?php echo $zip;?>">
                    <input type="hidden" name="dob" value="<?php echo $dob;?>">
                    <input type="hidden" name="phone" value="<?php echo $phone;?>">
                    <input type="hidden" name="chksum" value="<?php echo $chksum;?>">
                    <input type="submit" name="submit" class="btn btn-large" value="Login for <?php echo "$fname $lname ONLY"; ?>">
                </form>
                <?php
                    $ga_player_id = 9;
                    $fname = 'PA';
                    $lname = 'Lottery 2';
                    $email = 'palotery2@scigames.com';
                    $address1 = '123 Madison Ave';
                    $address2 = 'apt. test';
                    $city = 'Philadelphia';
                    $state = 'PA';
                    $zip = '19019';
                    $dob = '1971-09-05';
                    $phone = '215-778-0000';
                    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
                    $chksum = md5($checksum_str);
                ?>
                <form name="testform" action="enter/index.php" method="post">
                    <input type="hidden" name="playerID" value="<?php echo $ga_player_id;?>">
                    <input type="hidden" name="firstName" value="<?php echo $fname;?>">
                    <input type="hidden" name="lastName" value="<?php echo $lname;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="address1" value="<?php echo $address1;?>">
                    <input type="hidden" name="address2" value="<?php echo $address2;?>">
                    <input type="hidden" name="city" value="<?php echo $city;?>">
                    <input type="hidden" name="stateAbbr" value="<?php echo $state;?>">
                    <input type="hidden" name="zip" value="<?php echo $zip;?>">
                    <input type="hidden" name="dob" value="<?php echo $dob;?>">
                    <input type="hidden" name="phone" value="<?php echo $phone;?>">
                    <input type="hidden" name="chksum" value="<?php echo $chksum;?>">
                    <input type="submit" name="submit" class="btn btn-large" value="Login for <?php echo "$fname $lname ONLY"; ?>">
                </form>
                <?php
                    $ga_player_id = 10;
                    $fname = 'PA';
                    $lname = 'Lottery 3';
                    $email = 'palotery3@scigames.com';
                    $address1 = '898 Park Ave';
                    $address2 = 'apt. test';
                    $city = 'Philadelphia';
                    $state = 'PA';
                    $zip = '19019';
                    $dob = '1945-09-16';
                    $phone = '215-278-8333';
                    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
                    $chksum = md5($checksum_str);
                ?>
                <form name="testform" action="enter/index.php" method="post">
                    <input type="hidden" name="playerID" value="<?php echo $ga_player_id;?>">
                    <input type="hidden" name="firstName" value="<?php echo $fname;?>">
                    <input type="hidden" name="lastName" value="<?php echo $lname;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="address1" value="<?php echo $address1;?>">
                    <input type="hidden" name="address2" value="<?php echo $address2;?>">
                    <input type="hidden" name="city" value="<?php echo $city;?>">
                    <input type="hidden" name="stateAbbr" value="<?php echo $state;?>">
                    <input type="hidden" name="zip" value="<?php echo $zip;?>">
                    <input type="hidden" name="dob" value="<?php echo $dob;?>">
                    <input type="hidden" name="phone" value="<?php echo $phone;?>">
                    <input type="hidden" name="chksum" value="<?php echo $chksum;?>">
                    <input type="submit" name="submit" class="btn btn-large" value="Login for <?php echo "$fname $lname ONLY"; ?>">
                </form>
                <?php
                    $ga_player_id = 11;
                    $fname = 'PA';
                    $lname = 'Lottery 4';
                    $email = 'palotery4@scigames.com';
                    $address1 = '1550 Canal Street';
                    $address2 = 'apt. test';
                    $city = 'Philadelphia';
                    $state = 'PA';
                    $zip = '19019';
                    $dob = '1972-09-16';
                    $phone = '215-445-6687';
                    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
                    $chksum = md5($checksum_str);
                ?>
                <form name="testform" action="enter/index.php" method="post">
                    <input type="hidden" name="playerID" value="<?php echo $ga_player_id;?>">
                    <input type="hidden" name="firstName" value="<?php echo $fname;?>">
                    <input type="hidden" name="lastName" value="<?php echo $lname;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="address1" value="<?php echo $address1;?>">
                    <input type="hidden" name="address2" value="<?php echo $address2;?>">
                    <input type="hidden" name="city" value="<?php echo $city;?>">
                    <input type="hidden" name="stateAbbr" value="<?php echo $state;?>">
                    <input type="hidden" name="zip" value="<?php echo $zip;?>">
                    <input type="hidden" name="dob" value="<?php echo $dob;?>">
                    <input type="hidden" name="phone" value="<?php echo $phone;?>">
                    <input type="hidden" name="chksum" value="<?php echo $chksum;?>">
                    <input type="submit" name="submit" class="btn btn-large" value="Login for <?php echo "$fname $lname ONLY"; ?>">
                </form>
            </div>
        </div>
    </div>
</body>
</html>