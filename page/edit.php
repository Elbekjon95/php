
<main class="main">

      <section class="head">
           <h2 class="head__title"><?=$userInfo['login']?></h2>
           <? $today = date("F j, Y, g:i a");?>
           <p class="head__date"><? echo $today;?></p>
      </section>

<div class="user-image">
   <img class="user-image__item" src="<?=$userInfo['img_path']?>" alt="">
</div>


<form action="../include/user-edit-name.php"   method="post">
    <fieldset class="editName">
        <legend class="form__label"> Изменить имя </legend>
        <input type="text" class="editName__input" name="edinName" value="<?=$userInfo['name']?>">
        <button class="form_btn">Изменить</button>
    </fieldset>
</form>

</main>