<aside class="menu">
           
           <ul class="menu__list">
           
           <? foreach($arrayPages as $link => $pageInfo):?>
           
            <li><a href="/?route=<?= $link ?>" class="menu__list-link <?= $link === $route ? 'active' : '' ?>">
                <i class="<?= $pageInfo['page_icon'];?>"></i> <?= $pageInfo['page_title']; ?> </a>
            </li>
           
           <?endforeach;?>
           
              
              
           </ul>
       </aside>