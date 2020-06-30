<?php
    ob_start();
    $result=$data;
    if(isset($data)){
        $result=$data;
    }
    $title="Examples"
?>
<div class="w3-bar w3-green">
    <div class="w3-bar-item">MondAy</div>
    <div class="w3-bar-item">TuesdAy</div>
    <div class="w3-bar-item">SundAy</div>
</div>
<div class="w3-content w3-margin w3-padding">
    <div class="w3-padding w3-blue">
        <H3>Hello Libraries</H3>
    </div>
    <div class="w3-padding">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, mollitia minus quia nobis id ab praesentium vel, labore blanditiis error incidunt corporis neque facere architecto rem repellat, eligendi iste suscipit.
    </div>
</div>

<div class="w3-container">
    <h3 class="w3-blue">Result</h3>
    <ul class="w3-ul w3-card-4">
        <?php
        if (count($result)) {
            foreach ($result as $key => $value) {
        ?>
                <li class="w3-bar">
                    <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
                    <div class="w3-bar-item w3-circle w3-hide-small" style="width:85px;height:85px;"><?php echo $value['id'] ?></div>
                    <div class="w3-bar-item">
                        <span class="w3-large"><?php echo $value['name'] ?></span><br>
                        <span><?php echo $value['qte'] ?></span>
                    </div>
                </li>
        <?php
            }
        }
        ?>

    </ul>
</div>

<?php
$content = ob_get_clean();
include "../views/template.php";

?>