function build_weapons_table(weapons_table_data) {
    const weapons_table_body = document.getElementById("_weapons_table");
    let weapons_data_html = "";
    
    for (let weapon of weapons_table_data) {
        if (parseInt(weapon.rarity_value) == 5) {
            var weapon_rarity_asset = "../../backend/assets/weapons/skill_5star.png";
        } else {
            var weapon_rarity_asset = "../../backend/assets/weapons/skill_star.png";
        }
        weapons_data_html += 
        `
        <tr id="_weapon_` + weapon.weapon_name.toLowerCase() + `"
            data-weapon-type="` + weapon.type_name.toLowerCase() + `"
            onclick="redirect('weapons', '` + weapon.weapon_name.toLowerCase() + `')">
            <td>
                <div id=""
                    class="">
                    <img id="_weapons_img"
                        class="rounded mx-auto d-block"
                        src="` + weapon.weapon_image + `"
                        alt="..." />
                </div>
            </td>
            <td>
                <div id="_span"
                    class="text-wrap
                    text-center">
                    <span>` + weapon.weapon_name + `</span>
                </div>
            </td>
            <td>
                <div id="_span"
                    class="text-wrap
                    text-center">
                    <span>` + parseInt(weapon.atk_value) + `</span>
                </div>
            </td>
            <td>
                <div id="_span"
                    class="text-wrap
                    text-center">
                    <span>` + parseInt(weapon.rarity_value) + `</span>
                    <img id="_weapons_rarity_img"
                        class="rounded mx-auto d-block"
                        src="` + weapon_rarity_asset + `"
                        alt="..." />
                </div>
            </td>
            <td>
                <div id="_span"
                    class="text-wrap
                    text-center">
                    <span>` + weapon.type_name + `</span>
                </div>
            </td>
            <td>
                <div id="_span"
                    class="text-wrap
                    text-center">
                    <span>` + weapon.bonus_description + `</span>
                </div>
            </td>
            <td>
                <div id="_span"
                    class="text-wrap
                    text-center">
                    <span>` + weapon.location_name + `</span>
                </div>
            </td>
        </tr>
        `;
    }
    weapons_table_body.innerHTML = weapons_data_html;
}

let sort_weapons_direction = false;

function sort_weapons_number(sort_weapons_direction, weapons_column, weapons_table_data) {
    weapons_table_data = weapons_table_data.sort((p1, p2) => {
        return sort_weapons_direction
            ? p1[weapons_column] - p2[weapons_column]
            : p2[weapons_column] - p1[weapons_column]
    });
}

function sort_weapons_by(weapons_column, weapons_table_data) {
    sort_weapons_direction = !sort_weapons_direction;
    for (let i = 0; i < weapons_table_data.length; ++i) {
        weapons_table_data[i][weapons_column] = parseInt(weapons_table_data[i][weapons_column]);
    }
    sort_weapons_number(sort_weapons_direction, weapons_column, weapons_table_data);
    build_weapons_table(weapons_table_data);
}

function check_weapons_type(weapons_type) {
    if (document.querySelector("[name=" + weapons_type + "]").checked == true) {
        var arr = document.querySelectorAll("[data-weapon-type=" + weapons_type + "]");
        for (let i = 0; i < arr.length; ++i) {
            document.getElementById(arr[i].id).style.display = "";
        }
    } else {
        var arr = document.querySelectorAll("[data-weapon-type=" + weapons_type + "]");
        for (let i = 0; i < arr.length; ++i) {
            document.getElementById(arr[i].id).style.display = "none";
        }
    }
}