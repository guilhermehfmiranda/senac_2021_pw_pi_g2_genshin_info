<?php
    class character_data {
        public $character_id;
        public $character_name;
        public $character_image;
        public $element_id;
        public $character_atk;
        public $character_def;
        public $character_hp;
        public $ascension_id;
    }

    function characters_data() {
        $connection = mysqli_connect("127.0.0.1", "root", "", "db_genshin_info_v1");
        $sql = 
        "SELECT characters_table.character_id,
                characters_table.character_name,
                characters_table.character_image,
                characters_table.element_id,
                characters_table.character_atk,
                characters_table.character_def,
                characters_table.character_hp,
                characters_table.ascension_id
        FROM characters_table;
        ";
        $result = $connection -> query($sql);

        $table_data = [];
        
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $character_data = new character_data();
                $character_data -> character_id = $row["character_id"];
                $character_data -> character_name = $row["character_name"];
                $character_data -> character_image = $row["character_image"];
                $character_data -> element_id = $row["element_id"];
                $character_data -> character_atk = $row["character_atk"];
                $character_data -> character_def = $row["character_def"];
                $character_data -> character_hp = $row["character_hp"];
                $character_data -> ascension_id = $row["ascension_id"];
                $table_data[] = $character_data;
                unset($character_data);
            }
        }
        
        $connection -> close();
        return $table_data;
    }

    class element_data {
        public $element_id;
        public $element_name;
        public $element_image;
    }

    function elements_data() {
        $connection = mysqli_connect("127.0.0.1", "root", "", "db_genshin_info_v1");
        $sql = 
        "SELECT elements_table.element_id,
                elements_table.element_name,
                elements_table.element_image
        FROM elements_table;
        ";
        $result = $connection -> query($sql);

        $table_data = [];
        
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $element_data = new element_data();
                $element_data -> element_id = $row["element_id"];
                $element_data -> element_name = $row["element_name"];
                $element_data -> element_image = $row["element_image"];
                $table_data[] = $element_data;
                unset($element_data);
            }
        }
        
        $connection -> close();
        return $table_data;
    }

    class ascension_data {
        public $ascension_id;
        public $ascension_bonus;
        public $ascension_value;
    }

    function ascensions_data() {
        $connection = mysqli_connect("127.0.0.1", "root", "", "db_genshin_info_v1");
        $sql = 
        "SELECT ascensions_table.ascension_id,
                ascensions_table.ascension_bonus,
                ascensions_table.ascension_value
        FROM ascensions_table;
        ";
        $result = $connection -> query($sql);

        $table_data = [];
        
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $ascension_data = new ascension_data();
                $ascension_data -> ascension_id = $row["ascension_id"];
                $ascension_data -> ascension_bonus = $row["ascension_bonus"];
                $ascension_data -> ascension_value = $row["ascension_value"];
                $table_data[] = $ascension_data;
                unset($ascension_data);
            }
        }
        
        $connection -> close();
        return $table_data;
    }

    //* ---------- ---------- ---------- ---------- ---------- ---------- ----------

    class weapon_data {
        public $wepaon_id;
        public $weapon_name;
        public $weapon_image;
        public $type_id;
        public $rarity_id;
        public $atk_id;
        public $bonus_id;
        public $location_id;
    }

    function weapons_data() {
        $connection = mysqli_connect("127.0.0.1", "root", "", "db_genshin_info_v1");
        $sql = 
        "SELECT weapons_table.weapon_id,
                weapons_table.weapon_name,
                weapons_table.weapon_image,
                weapons_table.type_id,
                weapons_table.rarity_id,
                weapons_table.atk_id,
                weapons_table.bonus_id,
                weapons_table.location_id
        FROM weapons_table;
        ";
        $result = $connection -> query($sql);

        $table_data = [];
        
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $weapon_data = new weapon_data();
                $weapon_data -> weapon_id = $row["weapon_id"];
                $weapon_data -> weapon_name = $row["weapon_name"];
                $weapon_data -> weapon_image = $row["weapon_image"];
                $weapon_data -> type_id = $row["type_id"];
                $weapon_data -> rarity_id = $row["rarity_id"];
                $weapon_data -> atk_id = $row["atk_id"];
                $weapon_data -> bonus_id = $row["bonus_id"];
                $weapon_data -> location_id = $row["location_id"];
                $table_data[] = $weapon_data;
                unset($weapon_data);
            }
        }
        
        $connection -> close();
        return $table_data;
    }

    class type_data {
        public $type_id;
        public $type_name;
    }

    function types_data() {
        $connection = mysqli_connect("127.0.0.1", "root", "", "db_genshin_info_v1");
        $sql = 
        "SELECT types_table.type_id,
                types_table.type_name
        FROM types_table;
        ";
        $result = $connection -> query($sql);

        $table_data = [];
        
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $type_data = new type_data();
                $type_data -> type_id = $row["type_id"];
                $type_data -> type_name = $row["type_name"];
                $table_data[] = $type_data;
                unset($type_data);
            }
        }
        
        $connection -> close();
        return $table_data;
    }

    class rarity_data {
        public $rarity_id;
        public $rarity_value;
    }

    function rarities_data() {
        $connection = mysqli_connect("127.0.0.1", "root", "", "db_genshin_info_v1");
        $sql = 
        "SELECT rarities_table.rarity_id,
                rarities_table.rarity_value
        FROM rarities_table;
        ";
        $result = $connection -> query($sql);

        $table_data = [];
        
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $rarity_data = new rarity_data();
                $rarity_data -> rarity_id = $row["rarity_id"];
                $rarity_data -> rarity_value = $row["rarity_value"];
                $table_data[] = $rarity_data;
                unset($rarity_data);
            }
        }
        
        $connection -> close();
        return $table_data;
    }

    class atk_data {
        public $atk_id;
        public $atk_value;
    }

    function atks_data() {
        $connection = mysqli_connect("127.0.0.1", "root", "", "db_genshin_info_v1");
        $sql = 
        "SELECT atks_table.atk_id,
                atks_table.atk_value
        FROM atks_table;
        ";
        $result = $connection -> query($sql);

        $table_data = [];
        
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $atk_data = new atk_data();
                $atk_data -> atk_id = $row["atk_id"];
                $atk_data -> atk_value = $row["atk_value"];
                $table_data[] = $atk_data;
                unset($atk_data);
            }
        }
        
        $connection -> close();
        return $table_data;
    }

    class bonus_data {
        public $bonus_id;
        public $bonus_description;
    }

    function bonuses_data() {
        $connection = mysqli_connect("127.0.0.1", "root", "", "db_genshin_info_v1");
        $sql = 
        "SELECT bonuses_table.bonus_id,
                bonuses_table.bonus_description
        FROM bonuses_table;
        ";
        $result = $connection -> query($sql);

        $table_data = [];
        
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $bonus_data = new bonus_data();
                $bonus_data -> bonus_id = $row["bonus_id"];
                $bonus_data -> bonus_description = $row["bonus_description"];
                $table_data[] = $bonus_data;
                unset($bonus_data);
            }
        }
        
        $connection -> close();
        return $table_data;
    }

    class location_data {
        public $location_id;
        public $location_name;
    }

    function locations_data() {
        $connection = mysqli_connect("127.0.0.1", "root", "", "db_genshin_info_v1");
        $sql = 
        "SELECT locations_table.location_id,
                locations_table.location_name
        FROM locations_table;
        ";
        $result = $connection -> query($sql);

        $table_data = [];
        
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $location_data = new location_data();
                $location_data -> location_id = $row["location_id"];
                $location_data -> location_name = $row["location_name"];
                $table_data[] = $location_data;
                unset($location_data);
            }
        }
        
        $connection -> close();
        return $table_data;
    }

?>