<?php
    class weapon_data {
        public $weapon_name;
        public $weapon_image;
        public $type_name;
        public $rarity_value;
        public $atk_value;
        public $bonus_description;
        public $location_name;
    }

    function weapons_data() {
        $connection = mysqli_connect("127.0.0.1", "root", "", "db_genshin_info_v1");
        $sql = 
        "SELECT weapons_table.weapon_name,
                weapons_table.weapon_image,
                types_table.type_name,
                rarities_table.rarity_value,
                atks_table.atk_value,
                bonuses_table.bonus_description,
                locations_table.location_name
        FROM weapons_table
            INNER JOIN types_table 
                ON types_table.type_id = weapons_table.type_id
            INNER JOIN rarities_table
                ON rarities_table.rarity_id = weapons_table.rarity_id
            INNER JOIN atks_table
                ON atks_table.atk_id = weapons_table.atk_id
            INNER JOIN bonuses_table
                ON bonuses_table.bonus_id = weapons_table.bonus_id
            INNER JOIN locations_table
                ON locations_table.location_id = weapons_table.location_id;
        ";
        $result = $connection -> query($sql);

        $table_data = [];
        $weapons_assets_path = "../../backend/assets/weapons/";

        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $weapon_data = new weapon_data();
                $weapon_data -> weapon_name = $row["weapon_name"];
                $weapon_data -> weapon_image = $weapons_assets_path.$row["weapon_image"];
                $weapon_data -> type_name = $row["type_name"];
                $weapon_data -> rarity_value = $row["rarity_value"];
                $weapon_data -> atk_value = $row["atk_value"];
                $weapon_data -> bonus_description = $row["bonus_description"];
                $weapon_data -> location_name = $row["location_name"];
                $table_data[] = $weapon_data;
                unset($weapon_data);
            }
        }

        $connection -> close();
        return $table_data;
    }
?>