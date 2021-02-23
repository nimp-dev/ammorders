<div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= \Yii::getAlias('@web/img/sidebar-1.jpg'); ?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="#" class="simple-text logo-normal">
          АММ
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/dashboard']);?>">
              <i class="material-icons">query_stats</i>
              <p>Статистика</p>
            </a>
          </li>
<!--      example      -->
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#yii2Example" aria-expanded="true">
              <i><img style="width:25px" src="<?= \Yii::getAlias('@web/img/cloud.svg'); ?>"></i>
              <p>Учетные записи
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="yii2Example">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?=\yii\helpers\Url::to(['/users']);?>">
                    <span class="sidebar-mini"> UM </span>
                    <span class="sidebar-normal"> User Management </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=\yii\helpers\Url::to(['/site/profile']);?>">
                    <span class="sidebar-mini"> UP </span>
                    <span class="sidebar-normal"> User Profile </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
<!--      example end      -->
<!--          tables  -->
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#isTable" aria-expanded="true">
                    <i><img style="width:25px" src="<?= \Yii::getAlias('@web/img/checklist.svg'); ?>"></i>
                    <p>Рабочее время
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="isTable">
                    <ul class="nav">
                      <li class="nav-item ">
                        <a class="nav-link" href="<?=\yii\helpers\Url::to(['/tables']);?>">
                          <i class="material-icons">rule</i>
                          <p>Внести</p>
                        </a>
                      </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?=\yii\helpers\Url::to(['/tables/cash']);?>">
                            <i class="material-icons">library_books</i>
                            <p>Расчетый лист</p>
                        </a>
                    </li>
                    </ul>
                </div>
            </li>
<!--          tables    end    -->

          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/typography']);?>">
                <i><img style="width:25px" src="<?= \Yii::getAlias('@web/img/clipboard.svg'); ?>"></i>
              <p>Заказы</p>
            </a>
          </li>
<!--          <li class="nav-item ">-->
<!--            <a class="nav-link" href="--><?//=\yii\helpers\Url::to(['/icons']);?><!--">-->
<!--              <i class="material-icons">bubble_chart</i>-->
<!--              <p>Icons</p>-->
<!--            </a>-->
<!--          </li>-->
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/map']);?>">
                <i><img style="width:25px" src="<?= \Yii::getAlias('@web/img/box.svg'); ?>"></i>
              <p>Материалы</p>
            </a>
          </li>
<!--          <li class="nav-item ">-->
<!--            <a class="nav-link" href="--><?//=\yii\helpers\Url::to(['/notifications']);?><!--">-->
<!--              <i class="material-icons">notifications</i>-->
<!--              <p>Notifications</p>-->
<!--            </a>-->
<!--          </li>-->
<!--          <li class="nav-item ">-->
<!--            <a class="nav-link" href="--><?//=\yii\helpers\Url::to(['/rtl']);?><!--">-->
<!--              <i class="material-icons">language</i>-->
<!--              <p>RTL Support</p>-->
<!--            </a>-->
<!--          </li>-->
        </ul>
      </div>
    </div>