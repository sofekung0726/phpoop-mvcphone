<div class="col mb-5">
    <div class="card h-150">
        <a href="controller/detail.php?id=<?=$rs->id;?>" class="card-link">
            <!-- Product image-->
            <img class="card-img-top" src="image/<?=$rs->imges?>" alt="..." width="250" height="350"/>
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-left">
                    <!-- Product name-->
                    <h5 class="fw-bolder course-name">
                        <center>
                            <?=$rs->name?>
                        </center>
                    </h5>
                    <!-- course tag line-->
                    <div class="course-note"><i class="fa fa-shield"></i> ราคา: &nbsp;
                        <?=$rs->price?>
                    </div>
                    <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                    <div class="course-note"><i class="fa fa-futbol-o"></i> รุ่นโทรศัพท์: &nbsp;
                        <?=$rs->os?>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>