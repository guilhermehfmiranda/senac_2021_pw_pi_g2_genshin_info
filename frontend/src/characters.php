<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- //* bootstrap.bundle.min.js -->
    <script src="../resources/library/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- //* base.js -->
    <script src="js/base.js"></script>
    <!-- //* frontend/characters.js -->
    <script src="js/characters.js"></script>
    <!-- //* backend/characters_data.php -->
    <?php include "../../backend/db/characters_data.php"; ?>
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
                                        <span>
                                            <!-- //* -->
                                            <label for="_anemo">
                                                <input id="_anemo" 
                                                    name="anemo"
                                                    type="checkbox"
                                                    onclick="check_characters_element('anemo')"
                                                    checked> Anemo
                                            </label>
                                            <!-- //* -->
                                            <label for="_cryo">
                                                <input id="_cryo" 
                                                    name="cryo"
                                                    type="checkbox"
                                                    onclick="check_characters_element('cryo')"
                                                    checked> Cryo
                                            </label>
                                            <!-- //* -->
                                            <label for="_dendro">
                                                <input id="_dentro" 
                                                    name="dendro"
                                                    type="checkbox"
                                                    onclick="check_characters_element('dendro')"
                                                    checked> Dendro
                                            </label>
                                            <!-- //* -->
                                            <label for="_electro">
                                                <input id="_electro" 
                                                    name="electro"
                                                    type="checkbox"
                                                    onclick="check_characters_element('electro')"
                                                    checked> Electro
                                            </label>
                                            <!-- //* -->
                                            <label for="_geo">
                                                <input id="_geo" 
                                                    name="geo"
                                                    type="checkbox"
                                                    onclick="check_characters_element('geo')"
                                                    checked> Geo
                                            </label>
                                            <!-- //* -->
                                            <label for="_hydro">
                                                <input id="_hydro" 
                                                    name="hydro"
                                                    type="checkbox"
                                                    onclick="check_characters_element('hydro')"
                                                    checked> Hydro
                                            </label>
                                            <!-- //* -->
                                            <label for="_pyro">
                                                <input id="_pyro" 
                                                    name="pyro"
                                                    type="checkbox"
                                                    onclick="check_characters_element('pyro')"
                                                    checked> Pyro
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
                                <th>
                                    <div id="_span"
                                        class="text-wrap
                                        text-center">
                                        <span>Element</span>
                                    </div>
                                </th>
                                <th onclick="sort_characters_by('character_atk', <?php echo htmlspecialchars(json_encode(characters_data())); ?>)">
                                    <div id="_span"
                                        class="text-wrap
                                        text-center">
                                        <span>Attack</span>
                                    </div>
                                </th>
                                <th onclick="sort_characters_by('character_def', <?php echo htmlspecialchars(json_encode(characters_data())); ?>)">
                                    <div id="_span"
                                        class="text-wrap
                                        text-center">
                                        <span>Defense</span>
                                    </div>
                                </th>
                                <th onclick="sort_characters_by('character_hp', <?php echo htmlspecialchars(json_encode(characters_data())); ?>)">
                                    <div id="_span"
                                        class="text-wrap
                                        text-center">
                                        <span>HP</span>
                                    </div>
                                </th>
                                <th>
                                    <div id="_span"
                                        class="text-wrap
                                        text-center">
                                        <span>Ascension</span>
                                    </div>
                                </th>
                                <th onclick="sort_characters_by('ascension_value', <?php echo htmlspecialchars(json_encode(characters_data())); ?>)">
                                    <div id="_span"
                                        class="text-wrap
                                        text-center">
                                        <span>Value</span>
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
        </div>
    </main>
    <script>
        window.onload = () => {
            build_characters_table(<?php echo json_encode(characters_data()); ?>);
        }
    </script>
    <footer id="_footer_placeholder"></footer>
    <script>create_footer();</script>
</body>

</html>