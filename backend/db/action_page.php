<?php

    /**
     * * what [ $arr ] holds when passed an [ $_POST ] :
     * Array ( 
     * [table] => characters_table
     * [character_id] => 1 
     * [character_name] => Albedo 
     * [character_image] => UI_AvatarIcon_Albedo.png 
     * [element_id] => 5 
     * [character_atk] => 251 
     * [character_def] => 876 
     * [character_hp] => 13226 
     * [ascension_id] => 10 
     * [submit] => Save )
     * 
     * * you can verify it by using :
     * $arr = $_POST;
     * print_r($arr);
     * echo "<br>";
     * print($arr['table']); 
     * 
     * * where [ table ] can be any named index of the array .
     */

    //TODO -> Del(ete) case

    if (isset($_POST['submit'])) {

        $arr = $_POST;

        $connection = mysqli_connect("127.0.0.1", "root", "", "db_genshin_info_v1");
        $sql = "";

        switch ($arr['table']) {
            case 'characters_table' :
                switch ($arr['submit']) {
                    case 'Add' :
                        $sql = 
                            "INSERT INTO `characters_table`
                                (`character_name`, `character_image`, `element_id`, `character_atk`, `character_def`, `character_hp`, `ascension_id`)
                            VALUES
                                ('".$arr['character_name']."', '".$arr['character_image']."', '".$arr['element_id']."', '".$arr['character_atk']."', '".$arr['character_def']."', '".$arr['character_hp']."', '".$arr['ascension_id']."');";                    
                        break;
                    case 'Save' :
                        $sql = 
                            "UPDATE `characters_table`
                            SET 
                                `character_name` = '".$arr['character_name']."',
                                `character_image` = '".$arr['character_image']."',
                                `element_id` = '".$arr['element_id']."',
                                `character_atk` = '".$arr['character_atk']."',
                                `character_def` = '".$arr['character_def']."',
                                `character_hp` = '".$arr['character_hp']."',
                                `ascension_id` = '".$arr['ascension_id']."'
                            WHERE
                                `character_id` = '".$arr['character_id']."';";
                        break;
                    case 'Del' :
                        $sql = "";
                        break;
                }
                break;
            case 'elements_table' :
                switch ($arr['submit']) {
                    case 'Add' :
                        $sql = 
                            "INSERT INTO `elements_table`
                                (`element_name`, `element_image`) 
                            VALUES
                                ('".$arr['element_name']."', '".$arr['element_image']."');";
                        break;
                    case 'Save' :
                        $sql = 
                            "UPDATE `elements_table`
                            SET 
                                `element_name` = '".$arr['element_name']."',
                                `element_image` = '".$arr['element_image']."'
                            WHERE
                                `element_id` = '".$arr['element_id']."';";
                        break;
                    case 'Del' :
                        $sql = "";
                        break;
                }
                break;    
            case 'ascensions_table' :
                switch ($arr['submit']) {
                    case 'Add' :
                        $sql = 
                            "INSERT INTO `ascensions_table`
                                (`ascension_bonus`, `ascension_value`) 
                            VALUES
                                ('".$arr['ascension_bonus']."', '".$arr['ascension_value']."');";
                        break;
                    case 'Save' :
                        $sql = 
                            "UPDATE `ascensions_table`
                            SET 
                                `ascension_bonus` = '".$arr['ascension_bonus']."',
                                `ascension_value` = '".$arr['ascension_value']."'
                            WHERE
                                `ascension_id` = '".$arr['ascension_id']."';";
                        break;
                    case 'Del' :
                        $sql = "";
                        break;
                }
                break;
            case 'weapons_table' :
                switch ($arr['submit']) {
                    case 'Add' :
                        $sql = 
                            "INSERT INTO `atks_table`
                                (`weapon_name`, `weapon_image`, `type_id`, `rarity_id`, `atk_id`, `bonus_id`, `location_id`)
                            VALUES
                                ('".$arr['weapon_name']."', '".$arr['weapon_image']."', '".$arr['type_id']."', '".$arr['rarity_id']."', '".$arr['atk_id']."', '".$arr['bonus_id']."', '".$arr['location_id']."');";
                        break;
                    case 'Save' :
                        $sql = 
                            "UPDATE `weapons_table`
                            SET 
                                `weapon_name` = '".$arr['weapon_name']."',
                                `weapon_image` = '".$arr['weapon_image']."',
                                `type_id` = '".$arr['type_id']."',
                                `rarity_id` = '".$arr['rarity_id']."',
                                `atk_id` = '".$arr['atk_id']."',
                                `bonus_id` = '".$arr['bonus_id']."',
                                `location_id` = '".$arr['location_id']."'
                            WHERE
                                `weapon_id` = '".$arr['weapon_id']."';";
                        break;
                    case 'Del' :
                        $sql = "";
                        break;
                }
                break;
            case 'types_table' :
                switch ($arr['submit']) {
                    case 'Add' :
                        $sql = 
                            "INSERT INTO `types_table`
                                (`type_name`) 
                            VALUES
                                ('".$arr['type_name']."';";
                        break;
                    case 'Save' :
                        $sql = 
                            "UPDATE `types_table`
                            SET 
                                `type_name` = '".$arr['type_name']."'
                            WHERE
                                `type_id` = '".$arr['type_id']."';";
                        break;
                    case 'Del' :
                        $sql = "";
                        break;
                }
                break;
            case 'rarities_table' :
                switch ($arr['submit']) {
                    case 'Add' :
                        $sql = 
                            "INSERT INTO `rarities_table`
                                (`rarity_value`) 
                            VALUES
                                ('".$arr['rarity_value']."';";
                        break;
                    case 'Save' :
                        $sql = 
                            "UPDATE `rarities_table`
                            SET 
                                `rarity_value` = '".$arr['rarity_value']."'
                            WHERE
                                `rarity_id` = '".$arr['rarity_id']."';";
                        break;
                    case 'Del' :
                        $sql = "";
                        break;
                }
                break;
            case 'atks_table' :
                switch ($arr['submit']) {
                    case 'Add' :
                        $sql = 
                            "INSERT INTO `atks_table`
                                (`atk_value`) 
                            VALUES
                                ('".$arr['atk_value']."';";
                        break;
                    case 'Save' :
                        $sql = 
                            "UPDATE `atks_table`
                            SET 
                                `atk_value` = '".$arr['atk_value']."'
                            WHERE
                                `atk_id` = '".$arr['atk_id']."';";
                        break;
                    case 'Del' :
                        $sql = "";
                        break;
                }
                break;
            case 'bonuses_table' :
                switch ($arr['submit']) {
                    case 'Add' :
                        $sql = 
                            "INSERT INTO `bonuses_table`
                                (`bonus_description`) 
                            VALUES
                                ('".$arr['bonus_description']."';";
                        break;
                    case 'Save' :
                        $sql = 
                            "UPDATE `bonuses_table`
                            SET 
                                `bonus_description` = '".$arr['bonus_description']."'
                            WHERE
                                `bonus_id` = '".$arr['bonus_id']."';";
                        break;
                    case 'Del' :
                        $sql = "";
                        break;
                }
                break;
            case 'locations_table' :
                switch ($arr['submit']) {
                    case 'Add' :
                        $sql = 
                            "INSERT INTO `locations_table`
                                (`location_name`) 
                            VALUES
                                ('".$arr['location_name']."';";
                        break;
                    case 'Save' :
                        $sql = 
                            "UPDATE `locations_table`
                            SET 
                                `location_name` = '".$arr['location_name']."'
                            WHERE
                                `location_id` = '".$arr['location_id']."';";
                        break;
                    case 'Del' :
                        $sql = "";
                        break;
                }
                break;
        }

        if ($connection -> query($sql) === TRUE) {
            $connection -> close();
            header("Location:../../frontend/src/admin.php");
            
        } else {
            $connection -> close();
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    
?>