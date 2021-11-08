function build_db_tables(id, table_data) {
    const table_body = document.getElementById("_" + id + "_table");
    let data_html = "";
    let placeholder_id = 0;
    let placeholder_number = 0;
    let placeholder_text = '';
    switch(id) {
        case "characters" :
            data_html += 
                `
                <tr id="_character_` + placeholder_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_character_` + placeholder_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="characters_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + placeholder_id +  `" type="number" class="col-3 text-center" name="character_id" value="" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + placeholder_id +  `" type="text" class="col-9 text-center" name="character_name" value="` + placeholder_text + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + placeholder_id +  `" type="text" class="col-12 text-center" name="character_image" value="` + placeholder_text + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + placeholder_id +  `" type="number" class="col-3 text-center" name="element_id" value="` + placeholder_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + placeholder_id +  `" type="number" class="col-6 text-center" name="character_atk" value="` + placeholder_number + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + placeholder_id +  `" type="number" class="col-6 text-center" name="character_def" value="` + placeholder_number + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + placeholder_id +  `" type="number" class="col-6 text-center" name="character_hp" value="` + placeholder_number + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + placeholder_id +  `" type="number" class="col-3 text-center" name="ascension_id" value="` + placeholder_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + placeholder_id +  `" type="submit" name="submit" value="Add"></span>
                        </div>
                    </td>
                </tr>
                `;
            for (let character of table_data) {
                data_html += 
                `
                <tr id="_character_` + character.character_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_character_` + character.character_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="characters_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + character.character_id +  `" type="number" class="col-3 text-center" name="character_id" value="` + character.character_id + `" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + character.character_id +  `" type="text" class="col-9 text-center" name="character_name" value="` + character.character_name + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + character.character_id +  `" type="text" class="col-12 text-center" name="character_image" value="` + character.character_image + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + character.character_id +  `" type="number" class="col-3 text-center" name="element_id" value="` + character.element_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + character.character_id +  `" type="number" class="col-6 text-center" name="character_atk" value="` + character.character_atk + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + character.character_id +  `" type="number" class="col-6 text-center" name="character_def" value="` + character.character_def + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + character.character_id +  `" type="number" class="col-6 text-center" name="character_hp" value="` + character.character_hp + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + character.character_id +  `" type="number" class="col-3 text-center" name="ascension_id" value="` + character.ascension_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + character.character_id +  `" type="submit" name="submit" value="Save"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_character_` + character.character_id +  `" type="submit" name="submit" value="Del"></span>
                        </div>
                    </td>
                </tr>
                `;
            }
            table_body.innerHTML = data_html;
            break;
        case "elements" :
            data_html += 
                `
                <tr id="_element_` + placeholder_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_element_` + placeholder_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="elements_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_element_` + placeholder_id +  `" type="number" class="col-3 text-center" name="element_id" value="" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_element_` + placeholder_id +  `" type="text" class="col-9 text-center" name="element_name" value="` + placeholder_text + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_element_` + placeholder_id +  `" type="text" class="col-12 text-center" name="element_image" value="` + placeholder_text + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_element_` + placeholder_id +  `" type="submit" name="submit" value="Add"></span>
                        </div>
                    </td>
                </tr>
                `;
            for (let element of table_data) {
                data_html += 
                `
                <tr id="_element_` + element.element_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_element_` + element.element_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="elements_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_element_` + element.element_id +  `" type="number" class="col-3 text-center" name="element_id" value="` + element.element_id + `" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_element_` + element.element_id +  `" type="text" class="col-9 text-center" name="element_name" value="` + element.element_name + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_element_` + element.element_id +  `" type="text" class="col-12 text-center" name="element_image" value="` + element.element_image + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_element_` + element.element_id +  `" type="submit" name="submit" value="Save"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_element_` + element.element_id +  `" type="submit" name="submit" value="Del"></span>
                        </div>
                    </td>
                </tr>
                `;
            }
            table_body.innerHTML = data_html;
            break;
        case "ascensions" :
            data_html += 
                `
                <tr id="_ascension_` + placeholder_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_ascension_` + placeholder_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="ascensions_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_ascension_` + placeholder_id +  `" type="number" class="col-3 text-center" name="ascension_id" value="" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_ascension_` + placeholder_id +  `" type="text" class="col-12 text-center" name="ascension_bonus" value="` + placeholder_text + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_ascension_` + placeholder_id +  `" type="number" class="col-6 text-center" name="ascension_value" value="` + placeholder_number + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_ascension_` + placeholder_id +  `" type="submit" name="submit" value="Add"></span>
                        </div>
                    </td>
                </tr>
                `;
            for (let ascension of table_data) {
                data_html += 
                `
                <tr id="_ascension_` + ascension.ascension_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_ascension_` + ascension.ascension_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="ascensions_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_ascension_` + ascension.ascension_id +  `" type="number" class="col-3 text-center" name="ascension_id" value="` + ascension.ascension_id + `" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_ascension_` + ascension.ascension_id +  `" type="text" class="col-12 text-center" name="ascension_bonus" value="` + ascension.ascension_bonus + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_ascension_` + ascension.ascension_id +  `" type="number" class="col-6 text-center" name="ascension_value" value="` + ascension.ascension_value + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_ascension_` + ascension.ascension_id +  `" type="submit" name="submit" value="Save"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_ascension_` + ascension.ascension_id +  `" type="submit" name="submit" value="Del"></span>
                        </div>
                    </td>
                </tr>
                `;
            }
            table_body.innerHTML = data_html;
            break;
        case "weapons" :
            data_html += 
                `
                <tr id="_weapon_` + placeholder_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_weapon_` + placeholder_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="weapons_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + placeholder_id +  `" type="number" class="col-3 text-center" name="weapon_id" value="" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + placeholder_id +  `" type="text" class="col-9 text-center" name="weapon_name" value="` + placeholder_text + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + placeholder_id +  `" type="text" class="col-12 text-center" name="weapon_image" value="` + placeholder_text + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + placeholder_id +  `" type="number" class="col-3 text-center" name="type_id" value="` + placeholder_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + placeholder_id +  `" type="number" class="col-3 text-center" name="rarity_id" value="` + placeholder_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + placeholder_id +  `" type="number" class="col-3 text-center" name="atk_id" value="` + placeholder_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + placeholder_id +  `" type="number" class="col-3 text-center" name="bonus_id" value="` + placeholder_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + placeholder_id +  `" type="number" class="col-3 text-center" name="location_id" value="` + placeholder_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + placeholder_id +  `" type="submit" name="submit" value="Add"></span>
                        </div>
                    </td>
                </tr>
                `;
            for (let weapon of table_data) {
                data_html += 
                `
                <tr id="_weapon_` + weapon.weapon_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_weapon_` + weapon.weapon_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="weapons_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + weapon.weapon_id +  `" type="number" class="col-3 text-center" name="weapon_id" value="` + weapon.weapon_id + `" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + weapon.weapon_id +  `" type="text" class="col-9 text-center" name="weapon_name" value="` + weapon.weapon_name + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + weapon.weapon_id +  `" type="text" class="col-12 text-center" name="weapon_image" value="` + weapon.weapon_image + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + weapon.weapon_id +  `" type="number" class="col-3 text-center" name="type_id" value="` + weapon.type_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + weapon.weapon_id +  `" type="number" class="col-3 text-center" name="rarity_id" value="` + weapon.rarity_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + weapon.weapon_id +  `" type="number" class="col-3 text-center" name="atk_id" value="` + weapon.atk_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + weapon.weapon_id +  `" type="number" class="col-3 text-center" name="bonus_id" value="` + weapon.bonus_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + weapon.weapon_id +  `" type="number" class="col-3 text-center" name="location_id" value="` + weapon.location_id + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + weapon.weapon_id +  `" type="submit" name="submit" value="Save"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_weapon_` + weapon.weapon_id +  `" type="submit" name="submit" value="Del"></span>
                        </div>
                    </td>
                </tr>
                `;
            }
            table_body.innerHTML = data_html;
            break;
        case "types" :
            data_html += 
                `
                <tr id="_type_` + placeholder_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_type_` + placeholder_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="types_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_type_` + placeholder_id +  `" type="number" class="col-3 text-center" name="type_id" value="" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_type_` + placeholder_id +  `" type="text" class="col-9 text-center" name="type_name" value="` + placeholder_text + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_type_` + placeholder_id +  `" type="submit" name="submit" value="Add"></span>
                        </div>
                    </td>
                </tr>
                `;
            for (let type of table_data) {
                data_html += 
                `
                <tr id="_type_` + type.type_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_type_` + type.type_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="types_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_type_` + type.type_id +  `" type="number" class="col-3 text-center" name="type_id" value="` + type.type_id + `" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_type_` + type.type_id +  `" type="text" class="col-9 text-center" name="type_name" value="` + type.type_name + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_type_` + type.type_id +  `" type="submit" name="submit" value="Save"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_type_` + type.type_id +  `" type="submit" name="submit" value="Del"></span>
                        </div>
                    </td>
                </tr>
                `;
            }
            table_body.innerHTML = data_html;
            break;
        case "rarities" :
            data_html += 
                `
                <tr id="_rarity_` + placeholder_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_rarity_` + placeholder_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="rarities_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_rarity_` + placeholder_id +  `" type="number" class="col-3 text-center" name="rarity_id" value="" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_rarity_` + placeholder_id +  `" type="number" class="col-6 text-center" name="rarity_value" value="` + placeholder_number + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_rarity_` + placeholder_id +  `" type="submit" name="submit" value="Add"></span>
                        </div>
                    </td>
                </tr>
                `;
            for (let rarity of table_data) {
                data_html += 
                `
                <tr id="_rarity_` + rarity.rarity_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_rarity_` + rarity.rarity_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="rarities_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_rarity_` + rarity.rarity_id +  `" type="number" class="col-3 text-center" name="rarity_id" value="` + rarity.rarity_id + `" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_rarity_` + rarity.rarity_id +  `" type="number" class="col-6 text-center" name="rarity_value" value="` + rarity.rarity_value + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_rarity_` + rarity.rarity_id +  `" type="submit" name="submit" value="Save"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_rarity_` + rarity.rarity_id +  `" type="submit" name="submit" value="del"></span>
                        </div>
                    </td>
                </tr>
                `;
            }
            table_body.innerHTML = data_html;
            break;
        case "atks" :
            data_html += 
                `
                <tr id="_atk_` + placeholder_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_atk_` + placeholder_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="atks_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_atk_` + placeholder_id +  `" type="number" class="col-3 text-center" name="atk_id" value="" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_atk_` + placeholder_id +  `" type="number" class="col-6 text-center" name="atk_value" value="` + placeholder_number + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_atk_` + placeholder_id +  `" type="submit" name="submit" value="Add"></span>
                        </div>
                    </td>
                </tr>
                `;
            for (let atk of table_data) {
                data_html += 
                `
                <tr id="_atk_` + atk.atk_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_atk_` + atk.atk_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="atks_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_atk_` + atk.atk_id +  `" type="number" class="col-3 text-center" name="atk_id" value="` + atk.atk_id + `" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_atk_` + atk.atk_id +  `" type="number" class="col-6 text-center" name="atk_value" value="` + atk.atk_value + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_atk_` + atk.atk_id +  `" type="submit" name="submit" value="Save"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_atk_` + atk.atk_id +  `" type="submit" name="submit" value="Del"></span>
                        </div>
                    </td>
                </tr>
                `;
            }
            table_body.innerHTML = data_html;
            break;
        case "bonuses" :
            data_html += 
                `
                <tr id="_bonus_` + placeholder_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_bonus_` + placeholder_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="bonuses_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_bonus_` + placeholder_id +  `" type="number" class="col-3 text-center" name="bonus_id" value="" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_bonus_` + placeholder_id +  `" type="text" class="col-12 text-center" name="bonus_description" value="` + placeholder_text + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_bonus_` + placeholder_id +  `" type="submit" name="submit" value="Add"></span>
                        </div>
                    </td>
                </tr>
                `;
            for (let bonus of table_data) {
                data_html += 
                `
                <tr id="_bonus_` + bonus.bonus_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_bonus_` + bonus.bonus_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="bonuses_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_bonus_` + bonus.bonus_id +  `" type="number" class="col-3 text-center" name="bonus_id" value="` + bonus.bonus_id + `" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_bonus_` + bonus.bonus_id +  `" type="text" class="col-12 text-center" name="bonus_description" value="` + bonus.bonus_description + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_bonus_` + bonus.bonus_id +  `" type="submit" name="submit" value="Save"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_bonus_` + bonus.bonus_id +  `" type="submit" name="submit" value="Del"></span>
                        </div>
                    </td>
                </tr>
                `;
            }
            table_body.innerHTML = data_html;
            break;
        case "locations" :
            data_html += 
                `
                <tr id="_location_` + placeholder_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_location_` + placeholder_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="locations_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_location_` + placeholder_id +  `" type="number" class="col-3 text-center" name="location_id" value="" readonly></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_location_` + placeholder_id +  `" type="text" class="col-9 text-center" name="location_name" value="` + placeholder_text + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_location_` + placeholder_id +  `" type="submit" name="submit" value="Add"></span>
                        </div>
                    </td>
                </tr>
                `;
            for (let location of table_data) {
                data_html += 
                `
                <tr id="_location_` + location.location_id + `">
                    <td class="d-none">
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><form id="_form_location_` + location.location_id +  `" method="post" action="../../../backend/db/action_page.php"><input type="text" name="table" value="locations_table" readonly></form></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_location_` + location.location_id +  `" type="number" class="col-3 text-center" name="location_id" value="` + location.location_id + `" readonly></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_location_` + location.location_id +  `" type="text" class="col-9 text-center" name="location_name" value="` + location.location_name + `"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_location_` + location.location_id +  `" type="submit" name="submit" value="Save"></span>
                        </div>
                    </td>
                    <td>
                        <div id="_span"
                            class="text-wrap
                                text-center">
                            <span><input form="_form_location_` + location.location_id +  `" type="submit" name="submit" value="Del"></span>
                        </div>
                    </td>
                </tr>
                `;
            }
            table_body.innerHTML = data_html;
            break;
    }
}

let sort_characters_direction = false;

function sort_characters_number(sort_characters_direction, characters_column, characters_table_data) {
    characters_table_data = characters_table_data.sort((p1, p2) => {
        return sort_characters_direction
            ? p1[characters_column] - p2[characters_column]
            : p2[characters_column] - p1[characters_column]
    });
}

function sort_characters_by(characters_column, characters_table_data) {
    sort_characters_direction = !sort_characters_direction;
    for (let i = 0; i < characters_table_data.length; ++i) {
        characters_table_data[i][characters_column] = parseInt(characters_table_data[i][characters_column]);
    }
    sort_characters_number(sort_characters_direction, characters_column, characters_table_data);
    build_characters_table(characters_table_data);
}

function check_characters_element(characters_element) {
    if (document.querySelector("[name=" + characters_element + "]").checked == true) {
        var arr = document.querySelectorAll("[data-character-element=" + characters_element + "]");
        for (let i = 0; i < arr.length; ++i) {
            document.getElementById(arr[i].id).style.display = "";
        }
    } else {
        var arr = document.querySelectorAll("[data-character-element=" + characters_element + "]");
        for (let i = 0; i < arr.length; ++i) {
            document.getElementById(arr[i].id).style.display = "none";
        }
    }
}