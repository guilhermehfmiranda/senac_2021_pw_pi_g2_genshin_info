<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- //* bootstrap.bundle.min.js -->
    <script src="../resources/library/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- //* base.js -->
    <script src="js/base.js"></script>
    <!-- //* frontend/db_tables.js -->
    <script src="js/db.js"></script>
    <!-- //* backend/db_tables_data.php -->
    <?php include "../../backend/db/db_data.php"; ?>
    <!-- //* base.css -->
    <link rel="stylesheet"
        href="css/base.css">
    <meta charset="utf-8">
    <meta name="description"
        content="">
    <meta name="author"
        content="">
    <title>Genshin Info</title>
    <link rel="icon" href="../assets/img/chibi_work_in_progress_by_the_thieving_magpie-d39oqdq_o.jpg">
</head>
<!-- //* this page will be used to interact with the database, adding items to be shown in items.html -->
<body>
    <header id="_menu_placeholder"></header>
    <script>create_menu('');</script>
    <main>
        <div id=""
            class="container-fluid">
            <div id="_left_spacer"
                class="d-flex
                    mx-auto
                    justify-content-center
                    col-lg-1">
            </div>
            <div id="_middle"
                class="d-flex
                    mx-auto
                    justify-content-center
                    col-10
                    col-lg-10">
                <div id="_middle_content">
                    <hr>
                    <div>
                        <div data-bs-toggle="collapse"
                            data-bs-target="#_characters_content">
                            <div id=""
                                class="">
                                <!-- <img id="_logo"
                                    class="rounded mx-auto d-block"
                                    src="../assets/img/_20170214_095007.JPG"
                                    alt="..." /> -->
                            </div>
                            <div id="_span"
                                class="text-wrap
                                    text-break
                                    text-center">
                                <span>characters_table</span>
                            </div>
                        </div>
                        <div id="_characters_content"
                            class="collapse">
                            <hr>
                            <div>
                            <table id=""
                                class="table
                                    table-hover">
                                <thead id=""
                                    class="align-middle">
                                    <tr>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>character_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>character_name</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>character_image</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>element_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>character_atk</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>character_def</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>character_hp</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>ascension_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>

                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="_characters_table"
                                    class="align-middle">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div data-bs-toggle="collapse"
                            data-bs-target="#_elements_content">
                            <div id=""
                                class="">
                                <!-- <img id="_logo"
                                    class="rounded mx-auto d-block"
                                    src="../assets/img/_20170214_095007.JPG"
                                    alt="..." /> -->
                            </div>
                            <div id="_span"
                                class="text-wrap
                                    text-break
                                    text-center">
                                <span>elements_table</span>
                            </div>
                        </div>
                        <div id="_elements_content"
                            class="collapse">
                            <hr>
                            <div>
                            <table id=""
                                class="table
                                    table-hover">
                                <thead id=""
                                    class="align-middle">
                                    <tr>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>element_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>element_name</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>element_image</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>
                                                    
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="_elements_table"
                                    class="align-middle">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div data-bs-toggle="collapse"
                            data-bs-target="#_ascensions_content">
                            <div id=""
                                class="">
                                <!-- <img id="_logo"
                                    class="rounded mx-auto d-block"
                                    src="../assets/img/_20170214_095007.JPG"
                                    alt="..." /> -->
                            </div>
                            <div id="_span"
                                class="text-wrap
                                    text-break
                                    text-center">
                                <span>ascensions_table</span>
                            </div>
                        </div>
                        <div id="_ascensions_content"
                            class="collapse">
                            <hr>
                            <div>
                            <table id=""
                                class="table
                                    table-hover">
                                <thead id=""
                                    class="align-middle">
                                    <tr>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>ascension_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>ascension_bonus</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>ascension_value</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>
                                                    
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="_ascensions_table"
                                    class="align-middle">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div data-bs-toggle="collapse"
                            data-bs-target="#_weapons_content">
                            <div id=""
                                class="">
                                <!-- <img id="_logo"
                                    class="rounded mx-auto d-block"
                                    src="../assets/img/_20170214_095007.JPG"
                                    alt="..." /> -->
                            </div>
                            <div id="_span"
                                class="text-wrap
                                    text-break
                                    text-center">
                                <span>weapons_table</span>
                            </div>
                        </div>
                        <div id="_weapons_content"
                            class="collapse">
                            <hr>
                            <div>
                            <table id=""
                                class="table
                                    table-hover">
                                <thead id=""
                                    class="align-middle">
                                    <tr>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>weapon_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>weapon_name</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>weapon_image</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>type_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>rarity_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>atk_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>bonus_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>location_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>
                                                    
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="_weapons_table"
                                    class="align-middle">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div data-bs-toggle="collapse"
                            data-bs-target="#_types_content">
                            <div id=""
                                class="">
                                <!-- <img id="_logo"
                                    class="rounded mx-auto d-block"
                                    src="../assets/img/_20170214_095007.JPG"
                                    alt="..." /> -->
                            </div>
                            <div id="_span"
                                class="text-wrap
                                    text-break
                                    text-center">
                                <span>types_table</span>
                            </div>
                        </div>
                        <div id="_types_content"
                            class="collapse">
                            <hr>
                            <div>
                            <table id=""
                                class="table
                                    table-hover">
                                <thead id=""
                                    class="align-middle">
                                    <tr>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>type_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>type_name</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>
                                                    
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="_types_table"
                                    class="align-middle">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div data-bs-toggle="collapse"
                            data-bs-target="#_rarities_content">
                            <div id=""
                                class="">
                                <!-- <img id="_logo"
                                    class="rounded mx-auto d-block"
                                    src="../assets/img/_20170214_095007.JPG"
                                    alt="..." /> -->
                            </div>
                            <div id="_span"
                                class="text-wrap
                                    text-break
                                    text-center">
                                <span>rarities_table</span>
                            </div>
                        </div>
                        <div id="_rarities_content"
                            class="collapse">
                            <hr>
                            <div>
                            <table id=""
                                class="table
                                    table-hover">
                                <thead id=""
                                    class="align-middle">
                                    <tr>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>rarity_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>rarity_value</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>
                                                    
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="_rarities_table"
                                    class="align-middle">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div data-bs-toggle="collapse"
                            data-bs-target="#_atks_content">
                            <div id=""
                                class="">
                                <!-- <img id="_logo"
                                    class="rounded mx-auto d-block"
                                    src="../assets/img/_20170214_095007.JPG"
                                    alt="..." /> -->
                            </div>
                            <div id="_span"
                                class="text-wrap
                                    text-break
                                    text-center">
                                <span>atks_table</span>
                            </div>
                        </div>
                        <div id="_atks_content"
                            class="collapse">
                            <hr>
                            <div>
                            <table id=""
                                class="table
                                    table-hover">
                                <thead id=""
                                    class="align-middle">
                                    <tr>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>atk_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>atk_value</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>
                                                    
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="_atks_table"
                                    class="align-middle">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div data-bs-toggle="collapse"
                            data-bs-target="#_bonuses_content">
                            <div id=""
                                class="">
                                <!-- <img id="_logo"
                                    class="rounded mx-auto d-block"
                                    src="../assets/img/_20170214_095007.JPG"
                                    alt="..." /> -->
                            </div>
                            <div id="_span"
                                class="text-wrap
                                    text-break
                                    text-center">
                                <span>bonuses_table</span>
                            </div>
                        </div>
                        <div id="_bonuses_content"
                            class="collapse">
                            <hr>
                            <div>
                            <table id=""
                                class="table
                                    table-hover">
                                <thead id=""
                                    class="align-middle">
                                    <tr>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>bonus_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>bonus_description</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>
                                                    
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="_bonuses_table"
                                    class="align-middle">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div data-bs-toggle="collapse"
                            data-bs-target="#_locations_content">
                            <div id=""
                                class="">
                                <!-- <img id="_logo"
                                    class="rounded mx-auto d-block"
                                    src="../assets/img/_20170214_095007.JPG"
                                    alt="..." /> -->
                            </div>
                            <div id="_span"
                                class="text-wrap
                                    text-break
                                    text-center">
                                <span>locations_table</span>
                            </div>
                        </div>
                        <div id="_locations_content"
                            class="collapse">
                            <hr>
                            <div>
                            <table id=""
                                class="table
                                    table-hover">
                                <thead id=""
                                    class="align-middle">
                                    <tr>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>location_id</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>location_name</span>
                                            </div>
                                        </th>
                                        <th>
                                            <div id="_span"
                                                class="text-wrap
                                                text-center">
                                                <span>
                                                    
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="_locations_table"
                                    class="align-middle">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div id="_right_spacer"
                class="d-flex
                    mx-auto
                    justify-content-center
                    col-lg-1">
            </div>
        </div>
    </main>
    <script>
        window.onload = () => {
            build_db_tables('characters', <?php echo json_encode(characters_data()); ?>);
            build_db_tables('elements', <?php echo json_encode(elements_data()); ?>);
            build_db_tables('ascensions', <?php echo json_encode(ascensions_data()); ?>);
            build_db_tables('weapons', <?php echo json_encode(weapons_data()); ?>);
            build_db_tables('types', <?php echo json_encode(types_data()); ?>);
            build_db_tables('rarities', <?php echo json_encode(rarities_data()); ?>);
            build_db_tables('atks', <?php echo json_encode(atks_data()); ?>);
            build_db_tables('bonuses', <?php echo json_encode(bonuses_data()); ?>);
            build_db_tables('locations', <?php echo json_encode(locations_data()); ?>);
        }
    </script>
    <footer id="_footer_placeholder"></footer>
    <script>create_footer();</script>
</body>

</html>