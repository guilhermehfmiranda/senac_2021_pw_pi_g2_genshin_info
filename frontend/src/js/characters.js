function build_characters_table(characters_table_data) {
    const characters_table_body = document.getElementById("_characters_table");
    let characters_data_html = "";
    for (let character of characters_table_data) {
        characters_data_html += 
        `
        <tr id="_character_` + character.character_name.toLowerCase() + `"
            data-character-element="` + character.element_name.toLowerCase() + `"
            onclick="redirect('characters', '` + character.character_name.toLowerCase() + `')">
            <td>
                <div id=""
                    class="">
                    <img id="_chars_img"
                        class="rounded mx-auto d-block"
                        src="` + character.character_image + `"
                        alt="..." />
                </div>
            </td>
            <td>
                <div id="_span"
                    class="text-wrap
                    text-center">
                    <span>` + character.character_name + `</span>
                </div>
            </td>
            <td>
                <div id=""
                    class="">
                    <img id="_chars_element_img"
                        class="rounded mx-auto d-block"
                        src="` + character.element_image + `"
                        alt="..." />
                </div>
            </td>
            <td>
                <div id="_span"
                    class="text-wrap
                    text-center">
                    <span>` + parseInt(character.character_atk) + `</span>
                </div>
            </td>
            <td>
                <div id="_span"
                    class="text-wrap
                    text-center">
                    <span>` + parseInt(character.character_def) + `</span>
                </div>
            </td>
            <td>
                <div id="_span"
                    class="text-wrap
                    text-center">
                    <span>` + parseInt(character.character_hp) + `</span>
                </div>
            </td>
            <td>
                <div id="_span"
                    class="text-wrap
                    text-center">
                    <span>` + character.ascension_bonus + `</span>
                </div>
            </td>
            <td>
                <div id="_span"
                    class="text-wrap
                    text-center">
                    <span>` + parseFloat(character.ascension_value) + `</span>
                </div>
            </td>
        </tr>
        `;
    }
    characters_table_body.innerHTML = characters_data_html;
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