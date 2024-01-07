<div class = "row m-0 bg">
    <div class = "col-md-8 offset-md-2 p-0 overflow-hidden">
        <div class="mainContent justify-content-center">
            <div class="container">
                <div >
                    <h1>Budapest</h1>
                    <div class="row d-flex justify-content-around">
                        <?php
                        for ($x = 0; $x < 10; $x++) {
                            echo '
                            <div class="photo-holder row">
                                <label class = "p-0" for="imageCheckboxHu'.$x.'">
                                    <input type="checkbox" id="imageCheckboxHu'.$x .'" style="display: none;">
                                    <img class="gallery-photo" src="img/gallery/hungary/' . $x . '.jpg" alt="">
                                </label>
                            
                                <h2>This is photo number: '. $x .' from Hungary</h2>
                            </div>
                            ';
                        }
                        ?>
                    </div>
                </div>
                
                <div>
                    <h1>Croatia</h1>
                    <div class="row d-flex justify-content-around">
                            <?php
                            for ($x = 0; $x < 10; $x++) {
                                echo '
                                <div class="photo-holder row">
                                    <label class = "p-0" for="imageCheckboxCr'.$x.'">
                                        <input type="checkbox" id="imageCheckboxCr'.$x .'" style="display: none;">
                                        <img class="gallery-photo" src="img/gallery/croatia/' . $x . '.jpg" alt="">
                                    </label>
                                
                                    <h2>This is photo number: '. $x .' from Croatia</h2>
                                </div>
                                ';
                            }
                            ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>