<?php
// контроллер для меню на главной
class IndexController
{

  public function actionMenu()
  {
    $menuPath = ROOT. '/config/menu.php';
    $menu = include ($menuPath);

    //вьюшка
    include ROOT. '/view/IndexView.php';

    return true;
  }


}