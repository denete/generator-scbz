<?php
    #bootstrap app
    require_once '../app/init.php';

    #NOTE: This file will not work for all passthru jurisdictions because they are encrypted differently
    #TODO: Implement edge cases - e.g. OH & MI are encrypted differently from others
?>

<?php
    $ga_player_id = 2;

    $fname = 'Jon';
    $lname = 'Shelly';
    $email = 'jshelly@scigames.com';
    $address1 = '123 Monkey St.';
    $address2 = 'addr2';
    $city = 'Phoenix';
    $state = 'SC';
    $zip = '85002';
    $dob = '1955-05-05';
    $phone = '602-999-8888';

    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
    $chksum = md5($checksum_str);
?>
<form name="testform" action="<?php echoAppURL() ?>/enter/index.php" method="post">
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
    <input type="submit" name="submit" value="Login for <?php echo "$fname $lname"; ?>">
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
    $phone = '602-999-6666';

    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
    $chksum = 'bad1bad2bad3';
?>
<form name="testform" action="<?php echoAppURL() ?>/enter/index.php" method="post">
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
    <input type="submit" name="submit" value="Login TestAccount <?php echo $ga_player_id; ?> (fail)">
</form>

<?php
    $ga_player_id = 3;

    $fname = 'Jaime';
    $lname = 'TestAccount'.$ga_player_id;
    $email = 'test@scigames.com';
    $address1 = '123 Test st.';
    $address2 = 'apt. test';
    $city = 'Scottsdale';
    $state = 'SC';
    $zip = '85271';
    $dob = '1980-05-05';
    $phone = '678-624-4269';

    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
    $chksum = md5($checksum_str);
?>
<form name="testform" action="<?php echoAppURL() ?>/enter/index.php" method="post">
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
    <input type="submit" name="submit" value="Login for <?php echo $fname; ?>">
</form>

<?php
    $ga_player_id = 4;

    $fname = 'Niti';
    $lname = 'TestAccount'.$ga_player_id;
    $email = 'test444@scigames.com';
    $address1 = '123 Test st.';
    $address2 = 'apt. test';
    $city = 'Sedona';
    $state = 'SC';
    $zip = '86336';
    $dob = '1980-05-05';
    $phone = '602-888-1234';

    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
    $chksum = md5($checksum_str);
?>
<form name="testform" action="<?php echoAppURL() ?>/enter/index.php" method="post">
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
    <input type="submit" name="submit" value="Login for <?php echo $fname; ?>">
</form>

<?php
    $ga_player_id = 5;
    //$ga_player_id = 'a8c9dddd-294c-4e10-b4a3-564d92677777';
    $fname = 'Stephanie';
    $lname = 'TestAccount'.$ga_player_id;
    $email = 'stephanie@scigames.com';
    $address1 = '123 Test st.';
    $address2 = 'apt. test';
    $city = 'Cascabel';
    $state = 'SC';
    $zip = '85602';
    $dob = '1980-5-8';
    $phone = '602-432-9999';

    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
    $chksum = md5($checksum_str);
?>
<form name="testform" action="<?php echoAppURL() ?>/enter/index.php" method="post">
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
    <input type="submit" name="submit" value="Login for <?php echo $fname; ?>">
</form>

<?php
    $ga_player_id = 6;

    $fname = 'QA';
    $lname = 'Tester';
    $email = 'QA_Tester@scigames.com';
    $address1 = '1255 Bluegrass Pkwy.';
    $address2 = 'apt. test';
    $city = 'Chino Valley';
    $state = 'SC';
    $zip = '86323';
    $dob = '1960-12-25';
    $phone = '602-548-9988';

    $checksum_str = $ga_player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
    $chksum = md5($checksum_str);
?>
<form name="testform" action="<?php echoAppURL() ?>/enter/index.php" method="post">
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
    <input type="submit" name="submit" value="Login for QA ONLY">
</form>

<?php
    $player_id = 'BARCELONA2013';

    $fname = 'Jamal';
    $lname = 'Alghazal';
    $email = 'jamal@scientificgames.com';
    $address1 = '1255 Bluegrass Pkwy.';
    $address2 = 'apt. test';
    $city = 'Martinez Lake';
    $state = 'SC';
    $zip = '85365';
    $dob = '1965-01-25';
    $phone = '602-624-1118';

    $checksum_str = $player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
    $chksum = md5($checksum_str);
?>
<form name="testform" action="<?php echoAppURL() ?>/enter/index.php" method="post">
    <input type="hidden" name="playerID" value="<?php echo $player_id;?>">
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
    <input type="submit" name="submit" value="Login for Jamal Alghazal ONLY">
</form>

<?php
    $player_id = 'ABCABCXYZ123';

    $fname = 'Poonam';
    $lname = 'Hajgude';
    $email = 'poonam@scientificgames.com';
    $address1 = '1255 Madison Ave.';
    $address2 = 'apt. test';
    $city = 'Glendale';
    $state = 'SC';
    $zip = '85308';
    $dob = '1972-12-25';
    $phone = '602-546-0000';

    $checksum_str = $player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
    $chksum = md5($checksum_str);
?>
<form name="testform" action="<?php echoAppURL() ?>/enter/index.php" method="post">
    <input type="hidden" name="playerID" value="<?php echo $player_id;?>">
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
    <input type="submit" name="submit" value="Login for Poonam Hajgude ONLY">
</form>

<?php
    $player_id = 'ABCABCXYZ124';

    $fname = 'Poonam';
    $lname = 'Hajgude';
    $email = 'poonam2@scientificgames.com';
    $address1 = '1255 Madison Ave.';
    $address2 = 'apt. test';
    $city = 'Glendale';
    $state = 'SC';
    $zip = '85308';
    $dob = '1973-12-25';
    $phone = '602-666-0101';

    $checksum_str = $player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
    $chksum = md5($checksum_str);
?>
<form name="testform" action="<?php echoAppURL() ?>/enter/index.php" method="post">
    <input type="hidden" name="playerID" value="<?php echo $player_id;?>">
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
    <input type="submit" name="submit" value="Login for Poonam Hajgude 2 ONLY">
</form>

<?php
    $player_id = '24081';

    $fname = 'Jaime';
    $lname = 'Lopez';
    $email = 'jaime.lopez@scientificgames.com';
    $address1 = '1255 Blue Grass Parkway';
    $address2 = '';
    $city = 'Alpharetta';
    $state = 'GA';
    $zip = '30040';
    $dob = '1971-09-18';
    $phone = '(678)624-4269';

    $checksum_str = $player_id.$fname.$lname.$email.$address1.$address2.$city.$state.$zip.$dob.$phone.UserAuthPassthru::getChecksumKey();
    $chksum = md5($checksum_str);
?>
<form name="testform" action="<?php echoAppURL() ?>/enter/index.php" method="post">
    <input type="hidden" name="playerID" value="<?php echo $player_id;?>">
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
    <input type="submit" name="submit" value="Login for <?php echo $fname;?>">
</form>