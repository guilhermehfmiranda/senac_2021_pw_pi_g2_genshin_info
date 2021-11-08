<?php
    class character_data {
        public $character_name;
        public $character_image;
        public $element_name; 
        public $element_image;
        public $character_atk;
        public $character_def;
        public $character_hp;
        public $ascension_bonus;
        public $ascension_value;
    }

    function characters_data() {
        $connection = mysqli_connect("127.0.0.1", "root", "", "db_genshin_info_v1");
        $sql = 
        "SELECT characters_table.character_name,
                characters_table.character_image,
                elements_table.element_name,
                elements_table.element_image,
                characters_table.character_atk,
                characters_table.character_def,
                characters_table.character_hp,
                ascensions_table.ascension_bonus,
                ascensions_table.ascension_value
        FROM characters_table
            INNER JOIN elements_table
                ON elements_table.element_id = characters_table.element_id
            INNER JOIN ascensions_table
                ON ascensions_table.ascension_id = characters_table.ascension_id;
        ";
        $result = $connection -> query($sql);

        $table_data = [];
        $characters_assets_path = "../../backend/assets/characters/";
        $elements_assets_path = "../../backend/assets/elements/";
        
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $character_data = new character_data();
                $character_data -> character_name = $row["character_name"];
                $character_data -> character_image = $characters_assets_path.$row["character_image"];
                $character_data -> element_name = $row["element_name"];
                $character_data -> element_image = $elements_assets_path.$row["element_image"];
                $character_data -> character_atk = $row["character_atk"];
                $character_data -> character_def = $row["character_def"];
                $character_data -> character_hp = $row["character_hp"];
                $character_data -> ascension_bonus = $row["ascension_bonus"];
                $character_data -> ascension_value = $row["ascension_value"];
                $table_data[] = $character_data;
                unset($character_data);
            }
        }
        
        $connection -> close();
        return $table_data;
    }
?>