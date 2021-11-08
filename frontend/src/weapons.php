<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- //* bootstrap.bundle.min.js -->
    <script src="../resources/library/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- //* base.js -->
    <script src="js/base.js"></script>
    <!-- //* frontend/weapons.js -->
    <script src="js/weapons.js"></script>
    <!-- //* backend/weapons_data.php -->
    <?php include "../../backend/db/weapons_data.php"; ?>
    <!-- //* base.css -->
    <link rel="stylesheet"
        href="css/base.css">
    <!-- //* frontend/weaponss.css -->
    <!-- <link rel="stylesheet"
    href="css/weapons.css"> -->
    <meta charset="utf-8">
    <meta name="description"
        content="">
    <meta name="author"
        content="">
    <title>Genshin Info</title>
    <link rel="icon" href="../assets/img/chibi_work_in_progress_by_the_thieving_magpie-d39oqdq_o.jpg">
</head>

<body>
    <header id="_menu_placeholder"></header>
    <script>create_menu('');</script>
    <main>
        <div id=""
            class="container-fluid">
            <div id="_middle"
                class="d-flex
                    mx-auto
                    justify-content-center
                    col-10
                    col-lg-10">
                <div id="_middle_content">
                    <div class="row">
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
                                        <span>
                                            <!-- //* -->
                                            <label for="_sword">
                                                <input id="_sword" 
                                                    name="sword"
                                                    type="checkbox"
                                                    onclick="check_weapons_type('sword')"
                                                    checked> Sword
                                            </label>
                                            <!-- //* -->
                                            <label for="_catalyst">
                                                <input id="_catalyst" 
                                                    name="catalyst"
                                                    type="checkbox"
                                                    onclick="check_weapons_type('catalyst')"
                                                    checked> Catalyst
                                            </label>
                                            <!-- //* -->
                                            <label for="_polearm">
                                                <input id="_polearm" 
                                                    name="polearm"
                                                    type="checkbox"
                                                    onclick="check_weapons_type('polearm')"
                                                  checked> Polearm
                                            </label>
                                            <!-- //* -->
                                            <label for="_bow">
                                                <input id="_bow" 
                                                    name="bow"
                                                    type="checkbox"
                                                    onclick="check_weapons_type('bow')"
                                                    checked> Bow
                                            </label>
                                            <!-- //* -->
                                            <label for="_claymore">
                                                <input id="_claymore" 
                                                    name="claymore"
                                                    type="checkbox"
                                                    onclick="check_weapons_type('claymore')"
                                                    checked> Claymore
                                            </label>
                                            <!-- //* -->
                                        </span>
                                    </div>
                                </th>
                                <th>
                                    <div id="_span"
                                        class="text-wrap
                                        text-center">
                                        <span>Name</span>
                                    </div>
                                </th>
                                <th onclick="sort_weapons_by('atk_value', <?php echo htmlspecialchars(json_encode(weapons_data())); ?>)">
                                    <div id="_span"
                                        class="text-wrap
                                        text-center">
                                        <span>Attack</span>
                                    </div>
                                </th>
                                <th onclick="sort_weapons_by('rarity_value', <?php echo htmlspecialchars(json_encode(weapons_data())); ?>)">
                                    <div id="_span"
                                        class="text-wrap
                                        text-center">
                                        <span>Rarity</span>
                                    </div>
                                </th>
                                <th>
                                    <div id="_span"
                                        class="text-wrap
                                        text-center">
                                        <span>Type</span>
                                    </div>
                                </th>
                                <th>
                                    <div id="_span"
                                        class="text-wrap
                                        text-center">
                                        <span>Bonus Description</span>
                                    </div>
                                </th>
                                <th>
                                    <div id="_span"
                                        class="text-wrap
                                        text-center">
                                        <span>Location</span>
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
        </div>
    </main>
    <script>
        window.onload = () => {
            build_weapons_table(<?php echo json_encode(weapons_data()); ?>);
        }
    </script>
    <footer id="_footer_placeholder"></footer>
    <script>create_footer();</script>
</body>

</html>